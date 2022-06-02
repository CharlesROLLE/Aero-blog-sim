<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Comment;

class PostController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        
        $posts = Post::where('status', 2)->latest('id')->paginate(8);

        return view('posts.index', compact('posts', 'categories'));
    }

    public function show(Post $post)
    {
        $this->authorize('published', $post);
        
        $comments = Comment::where('post_id', '=', $post->id);

        $similares = Post::where('category_id', $post->category_id)
                            ->where('status', 2)
                            ->where('id', '!=', $post->id)
                            ->latest('id')
                            ->take(4)
                            ->get();
        return view('posts.show', compact('post', 'similares', 'comments'));
    }

    public function category(Category $category)
    {
        $posts =Post::where('category_id', $category->id)
                        ->where('status', 2)
                        ->latest('id')
                        ->paginate(6);
      
        return view('posts.category', compact('posts', 'category'));              
    }

    public function tag(Tag $tag)
    {
        $posts = $tag->posts()->where('status', 2)->latest('id')->paginate(4);
        return view('posts.tag', compact('posts', 'tag'));
    }

    public function save_comment(Request $request){
        $request->validate([
            'content'       => 'required'
        ]);
        
        $data = new Comment();
        $data -> user_id = $request->user()->id;
        $data -> post_id = $request->get('post_id');
        $data -> content = $request->get('content');
        $data -> save();
        
        return redirect()->back();
    

  } 
}
