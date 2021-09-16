<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Good;

class PostController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create_1()
    {
        $posts = Post::latest()->get();

        return view('posts.create_1')
            ->with(['posts' => $posts]);
    }

    public function add_1(Request $request)
    {
        $post = new Post();
        $post->num = $request->num;
        $post->name = $request->name;
        $post->price = $request->price;
        $post->save();

        return redirect()
            ->route('posts.create_1');
    }

    public function create_2()
    {
        $goods = Good::latest()->get();

        return view('posts.create_2')
            ->with(['goods' => $goods]);
    }

    public function add_2(Request $request)
    {
        $good = new Good();
        $good->num = $request->num;
        $good->name = $request->name;
        $good->price = $request->price;
        $good->save();

        return redirect()
            ->route('posts.create_2');
    }

    public function sertch(Request $request)
    {
        $posts = Post::all();

        foreach($posts as $post) {
            if ($post->num === $request->buddhist_num)
            {
                return view('index')
                    ->with(['post' => $post]);
            }
        }

        return redirect()
            ->route('posts.index');

    }

    public function good_1(Request $request)
    {
        $goods = Good::all();

        foreach($goods as $good) {
            if ($good->num == $request->good_num_1)
            {
                return view('index')
                    ->with(['good_1' => $good]);
            }
        }

        return redirect()
            ->route('posts.index');
    }
}