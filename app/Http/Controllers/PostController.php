<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    // Show all Posts at Homepage
    public function index() {
        return view('posts.index', [
            'posts' => Post::latest('created_at')->filter(request(['search']))->paginate(6), // It uses the scopeFilter method in Post class
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
        //ddd(request()->all());
        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'category' => 'required'
        ]);
    }
}
