<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository
{
    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function all()
    {
        return $this->post->all();
    }

    public function create($attributes)
    {
        $this->post->create($attributes);
    }

}