<?php

namespace App\Http\Livewire;

use App\Models\Tour;
use Livewire\Component;

class TourDetail extends Component
{
    public $open = false;
    
    public $tour;

    public function mount(Tour $tour){
        $this->tour = $tour;

    }

    public function render()
    {
        return view('livewire.tour-detail');
    }
}
