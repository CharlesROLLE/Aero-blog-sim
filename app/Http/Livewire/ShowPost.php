<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPost extends Component
{
    public Post $post;
    public $similares;
    public function mount($post)
    {
        $this->post = $post;
        $this-> similares = Post::where('category_id', $post->category_id)
            ->where('status', 2)
            ->where('id', '!=', $post->id)
            ->latest('id')
            ->take(4)
            ->get();

    }
    protected $listeners = ['render' => 'render'];
    
    public function render()
    {
        return view('livewire.show-post');
    }
}
