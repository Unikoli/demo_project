<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PostService;
class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = $this->postService->getAllPosts();
        return view('all-post', compact('posts'));
    }

    public function create()
    {
        return view('add-post');
    }

    public function store(Request $request)
    {
    //    $this->postService->createPost($request->all());
    //     return redirect('all-post ');
    $this->validate($request, [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    $postData = [
        'title' => $request->input('title'),
        'content' => $request->input('content'),
    ];
    $this->postService->createPost($postData);

        return redirect('all-post')->with('success', 'Post created successfully!');
    }
}
