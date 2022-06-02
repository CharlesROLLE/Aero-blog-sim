<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;


class PostsIndex extends Component
{
    public $search = "";
    public $quantPost = '11';
    public $readyToLoad = false;

    use WithPagination;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function loadPosts(){
        $this->readyToLoad = true;
    }

    protected $listeners = ['render' => 'render'];
    
    public function render()
    {
        $posts = Post::where('user_id', auth()->user()->id)->latest('id')
        ->where('name', 'like', '%' . $this->search . '%')
        ->paginate(8);
    

        return view('livewire.admin.posts-index', compact('posts'));
    }
}
