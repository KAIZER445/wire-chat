<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate(['required', 'string', 'email'])]
    public $email;
    #[Validate(['required', 'min:8'])]
    public $password;
    public function authenticate() {
        $this->validate();
        if(auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->route('landing');
        }
        $this->addError('login', 'The provided credentials do not match our records.');
    }
    public function render()
    {
        return view('livewire.login');
    }
}
