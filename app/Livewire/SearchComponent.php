<?php

namespace App\Livewire;

use Livewire\Component;

class SearchComponent extends Component
{
    public $search = "";
    public $user = "Welcome";

    // Automatically called when $search changes
    public function updatedSearch($value)
    {
        $this->user = "Hello! {$value} Welcome Back.";
    }

    public function render()
    {
        return view('livewire.search-component');
    }
}
