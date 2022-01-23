<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postservice;

    public function __construct(PostService $postservice) // DI
    {
        $this->postservice = $postservice;
    }

    public function index()
    {
        $posts = $this->postservice->index();
        return view('index', compact('posts'));
    }

    public function create(PostRequest $request)
    {
        $this->postservice->create($request);
        return back()->with(['status'=>'Post created successfully']);
    }
}
