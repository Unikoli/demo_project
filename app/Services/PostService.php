<?php

namespace App\Services;

use App\Models\Post;

class PostService
{
    public function getAllPosts()
    {
        return Post::all();
    }

    public function createPost(array $data)
    {
        return Post::create($data);
    }
}
