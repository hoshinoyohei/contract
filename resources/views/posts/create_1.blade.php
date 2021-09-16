<x-layout>
    <div class="back_link">
        &laquo; <a href="{{ route('posts.index') }}">戻る</a>
    </div>

    <h1>仏壇一覧</h1>

    <div class="list_container">
        <form method="post" action="{{ route('posts.add_1') }}">
            @csrf

            <div>
                <label class="list_form">
                    <span>管理コード</span>
                    <input type="text" name="num">
                </label>
            </div>
            <div>
                <label class="list_form">
                    <span>名前</span>
                    <input type="text" name="name">
                </label>
            </div>
            <div>
                <label class="list_form">
                    <span>販売価格(税込)</span>
                    <input type="text" name="price">
                </label>
            </div>
            <button class="list_btn">追加</button>
        </form>
    </div>
    <ul class="good_1_list">
        @foreach ($posts as $post)
            <li>
                <span>{{ $post->num }}</span>
                <span>{{ $post->name }}</span>
                <span>{{ $post->price }}</span>
            </li>
        @endforeach
    </ul>
</x-layout>