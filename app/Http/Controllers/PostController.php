<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    // Show all Posts at Homepage
    public function index() {
        // 1. ddd(Gate::allows('admin')); // In AppServiceProvider class to check if it's admin
        // 2. ddd(request()->user()->can('admin')); // Alternative way to check if it's admin
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
}
