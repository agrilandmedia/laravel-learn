<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    // Show all Posts at Homepage
    public function index() {
        return view('posts', [
            'posts' => Post::latest('created_at')->filter(request(['search']))->get(),
            'categories' => Category::all()
        ]);
    }

    // Show single Post
    public function show(Post $post) {
        return view('post', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    // Show Posts by Category
    public function showAllPostsByCategory(Category $category) {
        return view('posts', [
            'posts' => $category->posts,
            'categories' => Category::all(),
            'currentCategory' => $category
        ]);
    }

    // Show Posts by Author
    public function showAllPostsByAuthor(User $author) {
        return view('posts', [
            'posts' => $author->posts,
            'categories' => Category::all()
        ]);
    }
}
