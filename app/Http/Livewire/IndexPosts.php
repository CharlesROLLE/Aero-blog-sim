<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Category;
use Livewire\WithPagination;

class IndexPosts extends Component
{
    public $search = "";
    public $quantPost = '11';
    public $readyToLoad = false;

    use WithPagination;

    protected $listeners = ['render' => 'render'];

    protected $queryString = [
        'quantPost' => ['except' => '11'],
         'search' => ['except' => '']
    ];

    public function updatingSearch(){
        $this->resetPage();
    }

    public function loadPosts(){
        $this->readyToLoad = true;
    }
    
    public function render()
    {
        $categories = Category::all();
        
        $posts = Post::where('status', 2)
                        ->latest('id')
                        ->where('name', 'like', '%' . $this->search . '%')
                        ->orWhere('body', 'like', '%' . $this->search . '%')
                        ->paginate($this->quantPost);
        
        return view('livewire.index-posts', compact('posts', 'categories',));
    }
}

