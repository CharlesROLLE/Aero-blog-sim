<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartasFp extends Component
{
    public $open = false;
    
    public function render()
    {
        return view('livewire.cartas-fp');
    }
}
