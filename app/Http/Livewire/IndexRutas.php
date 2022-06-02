<?php

namespace App\Http\Livewire;

use App\Models\Tour;
use Livewire\Component;

class IndexRutas extends Component
{
    public function render()
    {
        $rutas = Tour::all();
        return view('livewire.index-rutas');
    }
}
