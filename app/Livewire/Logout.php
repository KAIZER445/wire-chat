<?php

namespace App\Livewire;

use Auth;
use Livewire\Component;

class Logout extends Component
{
    public function mount()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('login'); 
    }

    public function render()
    {
        return view('livewire.login');
    }
}
