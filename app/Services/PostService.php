<?php

namespace App\Services;

use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostService
{
    protected $post;

    public function __construct(PostRepository $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        return $this->post->all();
    }

    public function create(Request $request)
    {
        $attributes = $request->all();
        return $this->post->create($attributes);
    }
}