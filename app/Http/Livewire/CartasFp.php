<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Carta;

class CartasFp extends Component
{
    public $open = false;

 
    
    public function render()
    {
        $cartas = Carta::all();
        return view('livewire.cartas-fp', compact('cartas'));
    }
}
