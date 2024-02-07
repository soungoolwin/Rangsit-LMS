<?php

namespace App\Livewire;

use Livewire\Component;

class DropdownMenu extends Component
{
    public $options;

    public function mount($options)
    {
        $this->options = $options;
    }
    public function render()
    {
        return view('livewire.dropdown-menu');
    }
}
