<x-layout>
    <div class="back_link">
        &laquo; <a href="{{ route('posts.index') }}">戻る</a>
    </div>

    <h1>仏具一覧</h1>

    <div class="list_container">
        <form method="post" action="{{ route('posts.add_2') }}">
            @csrf

            <div>
                <label class="list_form">
                    <span>商品コード</span>
                    <input type="text" name="num">
                </label>
            </div>
            <div>
                <label class="list_form">
                    <span>商品名</span>
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
        @foreach ($goods as $good)
            <li>
                <span>{{ $good->num }}</span>
                <span>{{ $good->name }}</span>
                <span>{{ $good->price }}</span>
            </li>
        @endforeach
    </ul>
</x-layout>
