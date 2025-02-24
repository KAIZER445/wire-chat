<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class Chat extends Component
{
    public $id;
    #[On('startChat')]
    public function startChat($id)
    {
        $this->id = $id;
    }
    public function render()
    {
        return view('livewire.chat');
    }
}
