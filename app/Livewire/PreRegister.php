<?php

namespace App\Livewire;

use App\Models\Player;
use Livewire\Attributes\Validate;
use Livewire\Component;

class PreRegister extends Component
{
    #[Validate('required|email|unique:App\Models\Player,email')]
    public $email='';



    public $ip='';


    public $country='';


    public function updatedEmail($value)
    {
        $this->email = strtolower($value);
    }

    public function render()
    {
        return view('livewire.pre-register');
    }
    public function save(){
        $this->validate();
        $player=new Player;
        $player->email=strtolower($this->email);
        $player->ip=$this->ip;
        $player->country=$this->country;
        $player->save();
        $this->reset();
    }
}
