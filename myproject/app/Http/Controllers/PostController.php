<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\post;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    public function index()
    {
        $post=post::paginate(10);
        return PostResource::collection($post);
    }
    public function store(Request $request)
    {
        $post=new post();
        $post->name=$request->name;
        $post->body=$request->body;
        if($post->save())
        {
            return new PostResource($post);
        }

    }
    public function show($id)
    {
        $post=post::findOrFail($id);
        return new PostResource($post);
    }
    public function update(Request $request,$id)
    {
        $post=post::findOrFail($id);
        $post->name=$request->name;
        $post->body=$request->body;
        if($post->save())
        {
            return new PostResource($post);
        }
    }
    public function destroy($id)
    {
        $post=post::findOrFail($id);
        if($post->delete())
        {
            return new PostResource($post);
        }
    }
}
