<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>契約書</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
    <main>
        <h1>御契約書</h1>
        <nav>
            <ul class="select-type">
                <li>□新規仏壇</li>
                <li>□修理仏壇</li>
                <li>□仕切書</li>
            </ul>
            <ul class="select-store">
                <li>□福井店</li>
                <li>□大野店</li>
                <li>□鯖江店</li>
                <li>□坂井店</li>
            </ul>
        </nav>
        <div class="head-container">
            <ul>
                <li class="step1">
                    <span class="inline-block">御氏名</span>
                    <span></span>
                </li>
                <li class="step1">
                    <span class="inline-block">御住所/TEL</span>
                    <span></span>
                </li>
            </ul>
            <ul>
                <li class="step2">
                    <span class="inline-block">宗派</span>
                    <span></span>
                </li>
                <li class="step2">
                    <span class="inline-block">所属寺</span>
                    <span></span>
                </li>
                <li class="step2">
                    <span class="inline-block">仏壇</span>
                    <span></span>
                </li>
                <li class="step2">
                    <span class="inline-block">寸法</span>
                    <span></span>
                </li>
                <li class="step2">
                    <span class="inline-block">担当</span>
                    <span></span>
                </li>
            </ul>
            <ul>
                <li class="step3">
                    <span class="inline-block">契約日</span>
                    <span></span>
                </li>
                <li class="step3">
                    <span class="inline-block">納品予定</span>
                    <span></span>
                </li>
                <li class="step3">
                    <span class="inline-block">納品実績</span>
                    <span></span>
                </li>
                <li class="step3">
                    <span class="inline-block">引取予定</span>
                    <span></span>
                </li>
            </ul>
            <ul>
                <li class="step4">
                    <span class="inline-block">受注金額</span>
                    <span id="excluded_tax" class="fs16"></span>
                </li>
                <li class="step4">
                    <span class="inline-block">消費税</span>
                    <span id="consumption_tax" class="fs16"></span>
                </li>
                <li class="step4">
                    <span class="inline-block">御支払総額</span>
                    <span id="max_total" class="fs16"></span>
                </li>
            </ul>
        </div>
        <div class="main-container">
            <div class="new">
                <label>
                    <span>商品No:</span>
                    <form method="post" action="{{ route('posts.sertch') }}">
                        @csrf

                        <input type="text" name="product_num" class="product_num">
                    </form>
                </label>
                <span>
                    <a href="{{ route('posts.show') }}">
                        新規追加
                    </a>
                </span>
            </div>
            <ul>
                <li class="step5">
                    <span class="inline-block">商品名</span>
                    <span class="product_name">{{ $post->name }}</span>
                </li>
                <li class="step5">
                    <span class="inline-block">サイズ</span>
                    <span></span>
                </li>
                <li class="step5">
                    <span class="inline-block">仏間</span>
                    <span></span>
                </li>
            </ul>
            <table>
                <thead>
                    <tr>
                        <th class="title1">内容</th>
                        <th class="title2">金額</th>
                        <th class="title3">仏具個別No</th>
                        <th class="title4">仏具品名</th>
                        <th>仏具金額</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="title1">本体価格</th>
                        <td class="title2 sum">{{ $post->price }}</td>
                        <td class="title3">
                            <form method="post" action="{{ route('posts.good') }}">
                                @csrf

                                <input type="text" name="goods_num">
                                <input type="hidden" name="product_num">
                            </form>
                        </td>
                        <td class="title4">{{ $good->name }}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="title1">仏具</th>
                        <td class="title2 sum">300</td>
                        <td class="title3">
                            <form method="post" action="{{ route('posts.good') }}">
                                @csrf

                                <input type="text" name="goods_num">
                            </form>
                        </td>
                        <td class="title4">{{ $good->name }}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="title1">お焚き上げ</th>
                        <td class="title2">
                            <input type="text" class="tr sum_1">
                        </td>
                        <td class="title3">
                            <form method="post" action="{{ route('posts.good') }}">
                                @csrf

                                <input type="text" name="goods_num">
                            </form>
                        </td>
                        <td class="title4"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="title1">
                            <form method="post" action="{{ route('posts.good') }}">
                                @csrf

                                <input type="text" name="goods_num">
                            </form>
                        </th>
                        <td class="title2">
                            <input type="text" class="num tr sum_1">
                        </td>
                        <td class="title3">
                            <form method="post" action="{{ route('posts.good') }}">
                                @csrf

                                <input type="text" name="goods_num">
                            </form>
                        </td>
                        <td class="title4"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="title1">
                            <form method="post" action="{{ route('posts.good') }}">
                                @csrf

                                <input type="text" name="goods_num">
                            </form>
                        </th>
                        <td class="title2">
                            <input type="text" class="num tr sum_1">
                        </td>
                        <td class="title3">
                            <form method="post" action="{{ route('posts.good') }}">
                                @csrf

                                <input type="text" name="goods_num">
                            </form>
                        </td>
                        <td class="title4"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="title1">
                            <form method="post" action="{{ route('posts.good') }}">
                                @csrf

                                <input type="text" name="goods_num">
                            </form>
                        </th>
                        <td class="title2">
                            <input type="text" class="num tr sum_1">
                        </td>
                        <td class="title3">
                            <form method="post" action="{{ route('posts.good') }}">
                                @csrf

                                <input type="text" name="goods_num">
                            </form>
                        </td>
                        <td class="title4"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="title1">
                            <form method="post" action="{{ route('posts.good') }}">
                                @csrf

                                <input type="text" name="goods_num">
                            </form>
                        </th>
                        <td class="title2">
                            <input type="text" class="num tr sum_1">
                        </td>
                        <td class="title3">
                            <form method="post" action="{{ route('posts.good') }}">
                                @csrf

                                <input type="text" name="goods_num">
                            </form>
                        </td>
                        <td class="title4"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="title1">消費税</th>
                        <td class="title2" id="tax"></td>
                        <td class="title3">
                            <form method="post" action="{{ route('posts.good') }}">
                                @csrf

                                <input type="text" name="goods_num">
                            </form>
                        </td>
                        <td class="title4"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="title1">合計金額</th>
                        <td class="title2" id="sum"></td>
                        <td class="title3">
                            <form method="post" action="{{ route('posts.good') }}">
                                @csrf

                                <input type="text" name="goods_num">
                            </form>
                        </td>
                        <td class="title4"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="title1">
                            <input type="text" class="contents cr">
                        </th>
                        <td class="title2">
                            <input type="text" class="num tr cr" id="discount">
                        </td>
                        <td class="title3">
                            <form method="post" action="{{ route('posts.good') }}">
                                @csrf

                                <input type="text" name="goods_num">
                            </form>
                        </td>
                        <td class="title4"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="2">御支払い</th>
                        <td class="title3">
                            <form method="post" action="{{ route('posts.good') }}">
                                @csrf

                                <input type="text" name="goods_num">
                            </form>
                        </td>
                        <td class="title4"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="title1">前受金</th>
                        <td class="title2"></td>
                        <td class="title3">
                            <form method="post" action="{{ route('posts.good') }}">
                                @csrf

                                <input type="text" name="goods_num">
                            </form>
                        </td>
                        <td class="title4"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="title1">中間金</th>
                        <td class="title2"></td>
                        <td class="title3">
                            <form method="post" action="{{ route('posts.good') }}">
                                @csrf

                                <input type="text" name="goods_num">
                            </form>
                        </td>
                        <td class="title4"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="title1">残金</th>
                        <td class="title2"></td>
                        <th class="title3">仏具合計</th>
                        <td class="title4"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="5">備考</th>
                    </tr>
                    <tr>
                        <td colspan="5" class="remarks"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="foot-container">
            <div class="foot-left">
                <span>店舗情報</span>
                <ul>
                    <li>
                        <span>福井総本店</span>
                        <span>福井市米松2-24-36</span>
                        <span>(0776)54-1933</span>
                    </li>
                    <li>
                        <span>大野本店</span>
                        <span>大野市元町7-16</span>
                        <span>(0779)66-1932</span>
                    </li>
                    <li>
                        <span>鯖江インター店</span>
                        <span>鯖江市東鯖江2-202</span>
                        <span>(0778)52-5413</span>
                    </li>
                    <li>
                        <span>坂井店</span>
                        <span>坂井市坂井町上新庄2-24-3</span>
                        <span>(0776)72-1938</span>
                    </li>
                </ul>
            </div>
            <div class="foot-right">
                <span>振込先</span>
                <ul>
                    <li>
                        <span>福井総本店</span>
                        <span>福井銀行さくら通り支店(普)</span>
                        <span>No.159920</span>
                        <span>(株)KBB</span>
                    </li>
                    <li>
                        <span>大野本店</span>
                        <span>北陸銀行大野支店(普)</span>
                        <span>No.4182050</span>
                        <span>(株)KBB</span>
                    </li>
                    <li>
                        <span>鯖江インター店</span>
                        <span>福井銀行東鯖江支店(普)</span>
                        <span>No.1022671</span>
                        <span>(株)KBB</span>
                    </li>
                    <li>
                        <span>坂井店</span>
                        <span>福井銀行坂井町支店(普)</span>
                        <span>No.1082236</span>
                        <span>(株)KBB</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="jpeg">
            <span>かじそ仏壇</span>
        </div>
    </main>

    <script src="{{ asset('/js/main.js') }}"></script>
</body>
</html>
