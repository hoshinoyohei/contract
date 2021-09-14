<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Good;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::find(5);

        return view('index')
            ->with(['post' => $post]);
    }

    public function good(Request $request)
    {
        $this->sertch();
        $good = Good::where('num', $request->goods_num)->first();

        return view('index')
            ->with(['good' => $good]);
    }

    public function show()
    {
        $posts = Post::latest()->get();

        return view('posts.show')
            ->with(['posts' => $posts]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'num' => 'required',
            'name' => 'required',
            'price' => 'required',
        ]);

        $post = new Post();
        $post->num = $request->num;
        $post->name = $request->name;
        $post->price = $request->price;
        $post->save();

        return redirect()
            ->route('posts.show');
    }

    public function destroy($post)
    {
        $post = Post::find($post)->delete();

        return redirect()
            ->route('posts.show');
    }

    public function sertch(Request $request)
    {
        $post = Post::where('num', $request->product_num)->first();

        return view('index')
            ->with(['post' => $post]);
    }
}
