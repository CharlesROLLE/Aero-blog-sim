<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tour;
use Livewire\WithPagination;

class Etapa extends Component
{
    use WithPagination;

    public $readyToLoad = false;

   
    public function render()
    {
        $tours = tour::all();
        return view('livewire.etapa', compact('tours'));
    }
}
