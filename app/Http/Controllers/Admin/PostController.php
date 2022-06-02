<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::select("*")

                        ->where('status', 2)
                        ->orderBy("id", "desc")                
                        ->get();

        return view('admin.posts.index', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');

        $tags = Tag::all();
        
        return view('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'           => 'required',
            'slug'           => 'required|unique:posts',
            'body'           => 'required',
            'image'          => 'required|image|mimes: jpeg,png,jpg,gif|max:2048',
            'status'         => 'required',
            'user_id'        => 'required',
            'category_id'    => 'required',
            'tags'    => 'required',
        ]);

        $post = $request->all();


        if ($image =$request->file('image')) {
            $destPath = 'storage/posts/';
            $postImage = "post" . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destPath, $postImage);
            $post['image'] = $postImage;
        }

        $post = Post::create($post);

        $post->tags()->attach($request->tags);

        return redirect()->route('admin.posts.index')->with('info', 'El post ha sido creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $tags = Tag::all();
        $category = Post::where('category_id', $post->category_id);
        return view('admin.posts.show', compact('post', 'category', 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('author', $post);
        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();
        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
       
        $this->authorize('author', $post);
        $request->validate([
            'name'           => 'required',
            'slug' => [
                'required',
                Rule::unique('posts')->ignore($post->id)
            ],
            'body'           => 'required',
            'status'         => 'required',
            'user_id'        => 'required',
            'category_id'    => 'required',
            'tags'    => 'required',
            
        ]);

        $input = $request->all();
       

        if ($image =$request->file('image')) {
            $destPath = 'storage/posts/';
            $profileImage = "post" . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destPath, $profileImage);
            $input['image'] = $profileImage;
        }else{
            unset($input['image']);
        }

        $post->tags()->sync($request->tags);

        $post->update($input);

        return redirect()->route('admin.posts.index', $post)->with('info', 'Post Actualizado !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        $this->authorize('author', $post);
        return redirect()->route('admin.posts.index', $post)->with('info', 'Post Eliminado !');
    }
}
