'use strict';

{
    $("#buddhist_num").change(function () {
        $.ajaxSetup({
        headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
        $.ajax({
        //POST通信
        type: "post",
        //ここでデータの送信先URLを指定します。
        url: "/posts/sertch",
        dataType: "json",
        data: {
            code: $('#buddhist_num').val(),
        },

        })
        //通信が成功したとき
        .then((res) => {
            const buddhist_name = document.getElementById('buddhist_name');
            const main_price = document.getElementById('main_price');
            buddhist_name.textContent = res['name'];
            main_price.textContent = res['price'];
        })
        //通信が失敗したとき
        .fail((error) => {
            console.log(error.statusText);
        });
    });

    $("#good_num_1").change(function () {
        $.ajaxSetup({
        headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
        $.ajax({
        //POST通信
        type: "post",
        //ここでデータの送信先URLを指定します。
        url: "/posts/good_1",
        dataType: "json",
        data: {
            code: $('#good_num_1').val(),
        },

        })
        //通信が成功したとき
        .then((res) => {
            const good_1_name = document.getElementById('good_1_name');
            const good_1_price = document.getElementById('good_1_price');
            good_1_name.textContent = res['name'];
            good_1_price.textContent = res['price'];
        })
        //通信が失敗したとき
        .fail((error) => {
            console.log(error.statusText);
        });
    });
}
