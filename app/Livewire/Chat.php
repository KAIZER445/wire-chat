<?php

namespace App\Livewire;
use App\Models\ChatData;
use Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class Chat extends Component
{
    public $id;
    public $chat;
    public $node_one;
    public $node_two;
    public $sender;
    public $messages = [];
    #[On('startChat')]
    public function startChat($id)
    {
        $this->id = $id;
        $this->mount();
    }

    public function send()
    {
        $this->node_one = auth()->id();
        $this->node_two = $this->id;
        $this->sender = auth()->id();
        // Save message to database
        ChatData::create([
            'node_one' => $this->node_one,
            'node_two' => $this->node_two,
            'sender' => $this->sender,
            'chat' => $this->chat,
        ]);

        // Clear chat input field after sending
        $this->reset('chat');
    }

    public function mount()
    {
        $authId = Auth::id();

        // Fetch chat messages where authId and $this->id are present in either node_one/node_two
        $this->messages = ChatData::where(function ($query) use ($authId) {
            $query->where('node_one', $authId)
                ->orWhere('node_two', $authId);
        })
            ->where(function ($query) {
                $query->where('node_one', $this->id)
                    ->orWhere('node_two', $this->id);
            })
            ->orderBy('created_at', 'asc') // Order by oldest messages first
            ->get();
        
    }
    public function render()
    {
        return view('livewire.chat');
    }
}
