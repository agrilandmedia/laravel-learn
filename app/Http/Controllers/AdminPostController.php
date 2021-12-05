<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller {
    public function index() {
        return view('admin.posts.index', [
            'posts' => Post::paginate(20)
        ]);
    }

    // Redirect to a Create new Post page
    public function createPost() {
        return view('admin.posts.create');
    }

    // Create a new Post (admin only)
    public function storePost() {
        // $path = request()->file('avatar')->store('avatars');
        // return 'File saved: ' . $path;
        // ddd(str_replace(" ", "-", strtolower(request()->title)));
        $validatedData = request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'avatar' => ['required', 'image'],
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $validatedData['slug'] = str_replace(" ", "-", strtolower(request()->title));
        $validatedData['user_id'] = auth()->id(); // User added, but it does not have to be validated
        $validatedData['avatar'] = request()->file('avatar')->store('avatars'); // It returns the path to the uploaded image

        Post::create($validatedData);

        return redirect('/')->with('success', 'The new Post has been created');
    }

    // Redirect to Post update page
    public function edit(Post $post) {
        return view('admin.posts.edit', [
            'post' => $post
        ]);
    }

    // Store updated Post
    public function update(Post $post) {
        $validatedData = request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'avatar' => ['image'],
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        if (isset($validatedData['title'])) {
            $validatedData['slug'] = str_replace(" ", "-", strtolower(request()->title));
        }

        if (isset($validatedData['avatar'])) {
            $validatedData['avatar'] = request()->file('avatar')->store('avatars');
        }

        $post->update($validatedData);

        return back()->with('success', 'Post has been updated');
    }

    // Delete the Post
    public function destroy(Post $post) {
        $post->delete();

        return back()->with('success', 'Post has been deleted');
    }
}
