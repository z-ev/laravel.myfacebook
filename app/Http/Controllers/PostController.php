<?php

namespace App\Http\Controllers;


use App\Friend;
use App\User;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Resources\Post as PostResource;
use App\Http\Resources\PostCollection;

class PostController extends Controller
{
    public function index()
    {
        $friends = Friend::friendships();
        if ($friends->isEmpty()) {
            return new PostCollection(request()->user()->posts);
        }

        return new PostCollection(
        Post::whereIn('user_id', [$friends->pluck('user_id'), $friends->pluck('friend_id')])
            ->get()
            );


    }

    public function store()
    {
        $data = request()->validate([
           'data.attributes.body' => '',
        ]);

        //dd($data);

        $post = request()->user()->posts()->create($data['data']['attributes']);

        return new PostResource($post);


    }


}
