<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class EditHideForm extends Component
{
    use WithPagination;

    use WithFileUploads;

    public $open = false;
   
    public $post, $image, $identificador;

    public $tagsSelected;


    protected $rules = [
        'post.name' => 'required|max:100',
        'post.slug' => 'required',
        'post.body' => 'required',
        'post.status' => 'required',
        'post.user_id' => 'required',
        'post.category_id' => 'required',
        'post.image'  => 'required',
        'tagsSelected'  => 'required'
    ];

    public function mount(Post $post)
    {
        $this->post = $post;

        $this->tagsSelected = $post->tags->toArray();

        $this->identificador = rand();
        
    }
    

    public function save()
    {
        $this->validate();

        $this->post->save();

        /* codigo para borrar la foto Aqui */

        

        $this->post->tags()->sync([1, 2, 3]);

        $this->reset(['open']);

        $this->emitTo('show-post', 'render');
    }
    
    public function render()
    {
       
        $categories = Category::all();
        $tags = Tag::all();
        return view('livewire.edit-hide-form', compact('categories', 'tags'));
    }
}


