<?php

namespace App\Livewire;

use Livewire\Component;

class NewComponent extends Component
{

    public $count = 0;
    public function increment(){
        $this->count++;
    }

    public function decrement(){
        $this->count--;
    }
    public function ResetCount(){
        $this->count = 0;
    }
    public function render()
    {
        return view('livewire.new-component');
    }
}
