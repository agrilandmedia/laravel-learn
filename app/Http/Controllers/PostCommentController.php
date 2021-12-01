<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentController extends Controller {
    public function store(Post $post) {
        //ddd(request('comment')); // request('body') is null !!!
        request()->validate([
            'comment' => 'required'
        ]);

        $post->comments()->create([
            'user_id' => request()->user()->id,
            'body' => request('comment')
        ]);

        return back(); // This returns to the previous page
    }
}
