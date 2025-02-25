<?php

namespace App\Livewire;

use App\Models\User;
use Auth;
use Livewire\Component;

class ChatConnections extends Component
{
    public $users;
    public function mount()
    {
        $this->users = User::where('id', '!=', Auth::id())->get();
    }

    public function startChat($id)
    {
        $this->dispatch('startChat', $id);
    }
    public function render()
    {
        return view('livewire.chat-connections');
    }
}
