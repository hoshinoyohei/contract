'use strict';

{
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
            console.log(res);
        })
        //通信が失敗したとき
        .fail((error) => {
            console.log(error.statusText);
        });
    });
}
