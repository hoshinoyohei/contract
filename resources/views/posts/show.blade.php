<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新規追加</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
    <div class="wd">
        <h1>仏壇新規追加</h1>
        <a href="{{ route('posts.index') }}">戻る</a>
        <div class="main_add">
            <form method="post" action="{{ route('posts.store') }}">
                @csrf

                <label>
                    <span class="wd200">仏壇管理コード</span>
                    <input type="text" name="num" placeholder="I-232">
                </label>
                @error('num')
                    <div class="error">入力必須です</div>
                @enderror
                <label>
                    <span class="wd200">仏壇名</span>
                    <input type="text" name="name" placeholder="花風">
                </label>
                @error('name')
                    <div class="error">入力必須です</div>
                @enderror
                <label>
                    <span class="wd200">販売価格(税込)</span>
                    <input type="text" name="price" placeholder="200000">
                </label>
                @error('price')
                    <div class="error">入力必須です</div>
                @enderror
                <button>追加</button>
            </form>
        </div>
        <ul class="new_num">
            <li>
                <span>仏壇管理コード</span>
                <span>仏壇名</span>
                <span>販売価格(税込)</span>
            </li>
            @foreach ($posts as $post)
                <li>
                    <span>{{ $post->num }}</span>
                    <span>{{ $post->name }}</span>
                    <span>{{ $post->price }}</span>
                    <form method="post" action="{{ route('posts.destroy', $post) }}">
                        @method('DELETE')
                        @csrf

                        <button class="delete">削除</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
