<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Carta;

class CartasIndex extends Component
{
    use WithPagination;

    public $search = "";

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $cartas = Carta::where('name', 'LIKE', '%' . $this->search . '%')
                         ->orWhere('content', 'LIKE', '%' . $this->search . '%')
                         ->paginate(4);
        return view('livewire.admin.cartas-index', compact('cartas'));
    }
}
