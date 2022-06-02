<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tour;
use Livewire\WithPagination;

class Etapa extends Component
{
    use WithPagination;
    public function render()
    {
        $tours = tour::paginate(4);
        return view('livewire.etapa', compact('tours'));
    }
}
