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
        $result = $request->all();
        $posts = Post::all();

        foreach($posts as $post) {
            if ($post->num === $result['code'])
            {
                return $post;
            }
        }
    }

    public function good_1(Request $request)
    {
        $result = $request->all();
        $goods = Good::all();

        foreach($goods as $good) {
            if ($good->num == $result['code'])
            {
                return $good;
            }
        }
    }
    public function good_2(Request $request)
    {
        $result = $request->all();
        $goods = Good::all();

        foreach($goods as $good) {
            if ($good->num == $result['code'])
            {
                return $good;
            }
        }
    }
    public function good_3(Request $request)
    {
        $result = $request->all();
        $goods = Good::all();

        foreach($goods as $good) {
            if ($good->num == $result['code'])
            {
                return $good;
            }
        }
    }
    public function good_4(Request $request)
    {
        $result = $request->all();
        $goods = Good::all();

        foreach($goods as $good) {
            if ($good->num == $result['code'])
            {
                return $good;
            }
        }
    }
    public function good_5(Request $request)
    {
        $result = $request->all();
        $goods = Good::all();

        foreach($goods as $good) {
            if ($good->num == $result['code'])
            {
                return $good;
            }
        }
    }
    public function good_6(Request $request)
    {
        $result = $request->all();
        $goods = Good::all();

        foreach($goods as $good) {
            if ($good->num == $result['code'])
            {
                return $good;
            }
        }
    }
    public function good_7(Request $request)
    {
        $result = $request->all();
        $goods = Good::all();

        foreach($goods as $good) {
            if ($good->num == $result['code'])
            {
                return $good;
            }
        }
    }
    public function good_8(Request $request)
    {
        $result = $request->all();
        $goods = Good::all();

        foreach($goods as $good) {
            if ($good->num == $result['code'])
            {
                return $good;
            }
        }
    }
    public function good_9(Request $request)
    {
        $result = $request->all();
        $goods = Good::all();

        foreach($goods as $good) {
            if ($good->num == $result['code'])
            {
                return $good;
            }
        }
    }
    public function good_10(Request $request)
    {
        $result = $request->all();
        $goods = Good::all();

        foreach($goods as $good) {
            if ($good->num == $result['code'])
            {
                return $good;
            }
        }
    }
    public function good_11(Request $request)
    {
        $result = $request->all();
        $goods = Good::all();

        foreach($goods as $good) {
            if ($good->num == $result['code'])
            {
                return $good;
            }
        }
    }
    public function good_12(Request $request)
    {
        $result = $request->all();
        $goods = Good::all();

        foreach($goods as $good) {
            if ($good->num == $result['code'])
            {
                return $good;
            }
        }
    }
    public function good_13(Request $request)
    {
        $result = $request->all();
        $goods = Good::all();

        foreach($goods as $good) {
            if ($good->num == $result['code'])
            {
                return $good;
            }
        }
    }

    public function store(Request $request)
    {
        // setlocaleを設定
        setlocale(LC_ALL, 'ja_JP.UTF-8');

        // アップロードしたファイルを取得
        // 'csv_file' はCSVファイルインポート画面の inputタグのname属性
        $uploaded_file = $request->file('csv_file');

        // アップロードしたファイルの絶対パスを取得
        $file_path = $request->file('csv_file')->path($uploaded_file);

        $file = new \SplFileObject($file_path);
        $file->setFlags(\SplFileObject::READ_CSV);
        $file->setFlags(\SplFileObject::READ_CSV | \SplFileObject::READ_AHEAD | \SplFileObject::SKIP_EMPTY);

        $row_count = 1;
        foreach ($file as $row)
        {
            // 1行目のヘッダーは取り込まない
            if ($row_count > 1)
            {
                $id = mb_convert_encoding($row[0], 'UTF-8', 'SJIS');
                $name = mb_convert_encoding($row[1], 'UTF-8', 'SJIS');
                $price = mb_convert_encoding($row[2], 'UTF-8', 'SJIS');

                // ここで値をデータベースに保存したりする
                $good = new Good();
                $good->num = $id;
                $good->name = $name;
                $good->price = $price;
                $good->save();
            }
            $row_count++;
        }

        return redirect()
            ->route('posts.create_2');
    }
}
