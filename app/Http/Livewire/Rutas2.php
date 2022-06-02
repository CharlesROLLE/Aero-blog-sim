<?php

namespace App\Http\Livewire;

use App\Models\tour;
use Livewire\Component;

class Rutas extends Component
{
    public function render()
    {
        $tours = tour::all();
        return view('livewire.rutas', compact('tours'));
    }
}
