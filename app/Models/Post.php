<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $with = ['category', 'author']; // 'Eager Loading' reduces the number of SQL queries !!!

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id'); // Need to pass user_id foreign key for User ('cause we use author) !!!
    }

    // Search filter - important to name the function with a 'scope' prefix
    public function scopeFilter($query, array $filters) {
        //if (isset($filters['search'])) {
        $query->when($filters['search'] ?? false, function ($query, $search) { // Alternative to above if statement
            $query->where('title', 'like', '%' . $search . '%')
                  ->orWhere('body', 'like', '%' . $search . '%');
        });
    }
}
