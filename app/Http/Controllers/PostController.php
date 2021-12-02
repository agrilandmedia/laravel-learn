<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    // Show all Posts at Homepage
    public function index() {
        return view('posts.index', [
            'posts' => Post::latest('created_at')->filter(request(['search']))->paginate(12), // It uses the scopeFilter method in Post class
            'categories' => Category::all()
        ]);
    }

    // Show single Post
    public function show(Post $post) {
        return view('posts.show', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    // Show Posts by Category
    public function showAllPostsByCategory(Category $category) {
        return view('posts.index', [
            'posts' => $category->posts,
            'categories' => Category::all(),
            'currentCategory' => $category
        ]);
    }

    // Show Posts by Author
    public function showAllPostsByAuthor(User $author) {
        return view('posts.index', [
            'posts' => $author->posts,
            'categories' => Category::all()
        ]);
    }

    // Redirect to a Create new Post page
    public function createPost() {
        return view('posts.create');
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
}
