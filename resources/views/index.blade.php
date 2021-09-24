<x-layout>
    <h1>契 約 書</h1>
    <nav>
        <ul>
            <li>□新規仏壇</li>
            <li>□修理仏壇</li>
            <li>□仕切書</li>
        </ul>
        <ul>
            <li>□福井店</li>
            <li>□大野店</li>
            <li>□鯖江店</li>
            <li>□坂井店</li>
        </ul>
    </nav>
    <div class="head_container">
        <ul id="post">
            <li class="ht70">
                <span>御氏名</span>
                <p></p>
            </li>
            <li class="ht70 post_parent">
                <span>御住所/TEL</span>
                <p>
                    <span><img src="{{ asset('img/post.png') }}" alt="郵便番号"></span>
                </p>
                <p>
                    <span><img src="{{ asset('img/phone.png') }}" alt="電話番号"><pre>(                 )            -</pre></span>
                </p>
            </li>
        </ul>
        <ul>
            <li>
                <span>宗派</span>
                <p>
                    <input type="text" class="wd100">
                </p>
            </li>
            <li>
                <span>所属寺</span>
                <p>
                    <input type="text" class="wd100">
                </p>
            </li>
            <li>
                <span>仏壇</span>
                <select>
                    <option>有</option>
                    <option>無</option>
                </select>
            </li>
            <li>
                <span>寸法</span>
                <select>
                    <option>なし</option>
                    <option>30代</option>
                    <option>50代</option>
                    <option>70代</option>
                    <option>100代</option>
                    <option>120代</option>
                    <option>150代</option>
                    <option>200代</option>
                    <option>300代</option>
                    <option>モダン上置</option>
                    <option>モダン台付</option>
                </select>
            </li>
            <li>
                <span>担当</span>
                <select>
                    <option>社長</option>
                    <option>藤本</option>
                    <option>星野</option>
                    <option>高橋</option>
                    <option>北嶋</option>
                    <option>柴田</option>
                    <option>中村</option>
                    <option>福田</option>
                    <option>峰田</option>
                    <option>竹内</option>
                    <option>山口</option>
                    <option>勝矢</option>
                    <option>常廣</option>
                    <option>近藤</option>
                </select>
            </li>
        </ul>
        <ul>
            <li>
                <span>契約日</span>
                <p>
                    <input type="date">
                </p>
            </li>
            <li>
                <span>納品予定</span>
                <p>
                    <span>・</span>
                    <span>・</span>
                </p>
            </li>
            <li>
                <span>納品実績</span>
                <p>
                    <span>・</span>
                    <span>・</span>
                </p>
            </li>
            <li>
                <span>引取予定</span>
                <p>
                    <span>・</span>
                    <span>・</span>
                </p>
            </li>
        </ul>
        <ul id="price_parent">
            <li>
                <span>受注金額</span>
                <p id="tax_excluded"></p>
            </li>
            <li>
                <span>消費税</span>
                <p id="consumption_tax"></p>
            </li>
            <li>
                <span>御支払総額</span>
                <p id="tax_included"></p>
            </li>
        </ul>
    </div>
    <div class="sertch_container">
        <div class="left_content">
            <label>
                商品No
                <input type="text" id="buddhist_num">
            </label>
        </div>
        <div class="right_content">
            <span>
                <a href="{{ route('posts.create_1') }}">仏壇追加</a>
            </span>
            <span>
                <a href="{{ route('posts.create_2') }}">仏具追加</a>
            </span>
        </div>
    </div>
    <div class="info_container">
        <ul>
            <li>
                <span>商品名</span>
                <p id="buddhist_name"></p>
            </li>
            <li>
                <span>サイズ</span>
                <p>
                    <span>幅</span>
                    <span>高</span>
                    <span>奥</span>
                </p>
            </li>
            <li>
                <span>仏間</span>
                <p>
                    <span>幅</span>
                    <span>高</span>
                    <span>奥</span>
                </p>
            </li>
        </ul>
    </div>
    <table>
        <thead>
            <tr>
                <th>内容</th>
                <th>金額</th>
                <th>仏具個別No</th>
                <th>仏具品名</th>
                <th>仏具金額</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>本体内容</td>
                <td>
                    <p id="main_price"></p>
                </td>
                <td>
                    <input type="text" id="good_num_1">
                </td>
                <td>
                    <p id="good_1_name"></p>
                </td>
                <td>
                    <p id="good_1_price" class="butu_price"></p>
                </td>
            </tr>
            <tr>
                <td>仏具</td>
                <td>
                    <p id="sub_price"></p>
                </td>
                <td>
                    <input type="text" id="good_num_2">
                </td>
                <td>
                    <p id="good_2_name"></p>
                </td>
                <td>
                    <p id="good_2_price" class="butu_price"></p>
                </td>
            </tr>
            <tr>
                <td>お焚き上げ</td>
                <td>
                    <input type="text" class="input_data">
                </td>
                <td>
                    <input type="text" id="good_num_3">
                </td>
                <td>
                    <p id="good_3_name"></p>
                </td>
                <td>
                    <p id="good_3_price" class="butu_price"></p>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text">
                </td>
                <td>
                    <input type="text" class="input_data">
                </td>
                <td>
                    <input type="text" id="good_num_4">
                </td>
                <td>
                    <p id="good_4_name"></p>
                </td>
                <td>
                    <p id="good_4_price" class="butu_price"></p>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text">
                </td>
                <td>
                    <input type="text" class="input_data">
                </td>
                <td>
                    <input type="text" id="good_num_5">
                </td>
                <td>
                    <p id="good_5_name"></p>
                </td>
                <td>
                    <p id="good_5_price" class="butu_price"></p>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text">
                </td>
                <td>
                    <input type="text" class="input_data">
                </td>
                <td>
                    <input type="text" id="good_num_6">
                </td>
                <td>
                    <p id="good_6_name"></p>
                </td>
                <td>
                    <p id="good_6_price" class="butu_price"></p>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text">
                </td>
                <td>
                    <input type="text" class="input_data">
                </td>
                <td>
                    <input type="text" id="good_num_7">
                </td>
                <td>
                    <p id="good_7_name"></p>
                </td>
                <td>
                    <p id="good_7_price" class="butu_price"></p>
                </td>
            </tr>
            <tr>
                <td>消費税</td>
                <td id="tax"></td>
                <td>
                    <input type="text" id="good_num_8">
                </td>
                <td>
                    <p id="good_8_name"></p>
                </td>
                <td>
                    <p id="good_8_price" class="butu_price"></p>
                </td>
            </tr>
            <tr>
                <td>合計金額</td>
                <td id="total_sum"></td>
                <td>
                    <input type="text" id="good_num_9">
                </td>
                <td>
                    <p id="good_9_name"></p>
                </td>
                <td>
                    <p id="good_9_price" class="butu_price"></p>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" class="discount">
                </td>
                <td>
                    <input type="text" id="discount">
                </td>
                <td>
                    <input type="text" id="good_num_10">
                </td>
                <td>
                    <p id="good_10_name"></p>
                </td>
                <td>
                    <p id="good_10_price" class="butu_price"></p>
                </td>
            </tr>
            <tr>
                <td colspan="2">御支払い</td>
                <td>
                    <input type="text" id="good_num_11">
                </td>
                <td>
                    <p id="good_11_name"></p>
                </td>
                <td>
                    <p id="good_11_price" class="butu_price"></p>
                </td>
            </tr>
            <tr>
                <td>前受金</td>
                <td></td>
                <td>
                    <input type="text" id="good_num_12">
                </td>
                <td>
                    <p id="good_12_name"></p>
                </td>
                <td>
                    <p id="good_12_price" class="butu_price"></p>
                </td>
            </tr>
            <tr>
                <td>中間金</td>
                <td></td>
                <td>
                    <input type="text" id="good_num_13">
                </td>
                <td>
                    <p id="good_13_name"></p>
                </td>
                <td>
                    <p id="good_13_price" class="butu_price"></p>
                </td>
            </tr>
            <tr>
                <td>残金</td>
                <td></td>
                <td colspan="2">
                    <span id="butu_click">仏具合計(クリック)</span>
                </td>
                <td>
                    <p id="butu_total_1"></p>
                </td>
            </tr>
        </tbody>
            <tr>
                <td colspan="5">備考</td>
            </tr>
            <tr>
                <td colspan="5" class="note"></td>
            </tr>
        <tfoot>
        </tfoot>
    </table>
    <div class="store_container">
        <ul class="store_info">
            <span>店舗情報</span>
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
        <ul class="payment_info">
            <span>振込先</span>
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
    <div class="foot_title">
        かじそ仏壇
    </div>
</x-layout>
