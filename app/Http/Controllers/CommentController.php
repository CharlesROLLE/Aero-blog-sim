<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function save_comment(Request $request){
        $request->validate([
            'comment'       => 'required'
        ]);
        
        $data = new Comment();
        $data -> user_id = $request->user()->id;
        $data -> post_id = $request->get('post_id');
        $data -> comment = $request->get('content');
        $data -> save();
        
        return redirect()-> back();

  } 
}
