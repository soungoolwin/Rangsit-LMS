<?php

namespace App\Livewire;

use Livewire\Component;

class DropdownMenu extends Component
{
    public $options;

    public function mount($options)
    {
        $this->options = $options;
        $this->options['button_text'] = $this->options['menu_items'][0]['text'] ?? 'Options';
    }

    public function changeButtonText($index)
    {
        $this->options['button_text'] = $this->options['menu_items'][$index]['text'] ?? 'Options';
    }

    public function render()
    {
        return view('livewire.dropdown-menu');
    }
}
