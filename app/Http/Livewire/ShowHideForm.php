<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class ShowHideForm extends Component
{
    public $open = false;
    public $comment;

    protected $rules = [
        'comment.content' => 'required'
    ];

    public function mount(Comment $comment){
        $this->comment = $comment;
    }

    public function save(){

        $this->validate();
        $this->comment->save();
        $this->reset(['open']);

        $this->emit('render');

        return back();
    

    }

    public function render()
    {
        return view('livewire.show-hide-form');
    }
}
