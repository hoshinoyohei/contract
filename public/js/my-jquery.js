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

    $("#good_num_2").change(function () {
        $.ajaxSetup({
        headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
        $.ajax({
        //POST通信
        type: "post",
        //ここでデータの送信先URLを指定します。
        url: "/posts/good_2",
        dataType: "json",
        data: {
            code: $('#good_num_2').val(),
        },

        })
        //通信が成功したとき
        .then((res) => {
            const good_2_name = document.getElementById('good_2_name');
            const good_2_price = document.getElementById('good_2_price');
            good_2_name.textContent = res['name'];
            good_2_price.textContent = res['price'];
        })
        //通信が失敗したとき
        .fail((error) => {
            console.log(error.statusText);
        });
    });

    $("#good_num_3").change(function () {
        $.ajaxSetup({
        headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
        $.ajax({
        //POST通信
        type: "post",
        //ここでデータの送信先URLを指定します。
        url: "/posts/good_3",
        dataType: "json",
        data: {
            code: $('#good_num_3').val(),
        },

        })
        //通信が成功したとき
        .then((res) => {
            const good_3_name = document.getElementById('good_3_name');
            const good_3_price = document.getElementById('good_3_price');
            good_3_name.textContent = res['name'];
            good_3_price.textContent = res['price'];
        })
        //通信が失敗したとき
        .fail((error) => {
            console.log(error.statusText);
        });
    });

    $("#good_num_4").change(function () {
        $.ajaxSetup({
        headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
        $.ajax({
        //POST通信
        type: "post",
        //ここでデータの送信先URLを指定します。
        url: "/posts/good_4",
        dataType: "json",
        data: {
            code: $('#good_num_4').val(),
        },

        })
        //通信が成功したとき
        .then((res) => {
            const good_4_name = document.getElementById('good_4_name');
            const good_4_price = document.getElementById('good_4_price');
            good_4_name.textContent = res['name'];
            good_4_price.textContent = res['price'];
        })
        //通信が失敗したとき
        .fail((error) => {
            console.log(error.statusText);
        });
    });

    $("#good_num_5").change(function () {
        $.ajaxSetup({
        headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
        $.ajax({
        //POST通信
        type: "post",
        //ここでデータの送信先URLを指定します。
        url: "/posts/good_5",
        dataType: "json",
        data: {
            code: $('#good_num_1').val(),
        },

        })
        //通信が成功したとき
        .then((res) => {
            const good_5_name = document.getElementById('good_5_name');
            const good_5_price = document.getElementById('good_5_price');
            good_5_name.textContent = res['name'];
            good_5_price.textContent = res['price'];
        })
        //通信が失敗したとき
        .fail((error) => {
            console.log(error.statusText);
        });
    });

    $("#good_num_6").change(function () {
        $.ajaxSetup({
        headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
        $.ajax({
        //POST通信
        type: "post",
        //ここでデータの送信先URLを指定します。
        url: "/posts/good_6",
        dataType: "json",
        data: {
            code: $('#good_num_6').val(),
        },

        })
        //通信が成功したとき
        .then((res) => {
            const good_6_name = document.getElementById('good_6_name');
            const good_6_price = document.getElementById('good_6_price');
            good_6_name.textContent = res['name'];
            good_6_price.textContent = res['price'];
        })
        //通信が失敗したとき
        .fail((error) => {
            console.log(error.statusText);
        });
    });

    $("#good_num_7").change(function () {
        $.ajaxSetup({
        headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
        $.ajax({
        //POST通信
        type: "post",
        //ここでデータの送信先URLを指定します。
        url: "/posts/good_7",
        dataType: "json",
        data: {
            code: $('#good_num_1').val(),
        },

        })
        //通信が成功したとき
        .then((res) => {
            const good_7_name = document.getElementById('good_7_name');
            const good_7_price = document.getElementById('good_7_price');
            good_7_name.textContent = res['name'];
            good_7_price.textContent = res['price'];
        })
        //通信が失敗したとき
        .fail((error) => {
            console.log(error.statusText);
        });
    });

    $("#good_num_8").change(function () {
        $.ajaxSetup({
        headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
        $.ajax({
        //POST通信
        type: "post",
        //ここでデータの送信先URLを指定します。
        url: "/posts/good_8",
        dataType: "json",
        data: {
            code: $('#good_num_8').val(),
        },

        })
        //通信が成功したとき
        .then((res) => {
            const good_8_name = document.getElementById('good_8_name');
            const good_8_price = document.getElementById('good_8_price');
            good_8_name.textContent = res['name'];
            good_8_price.textContent = res['price'];
        })
        //通信が失敗したとき
        .fail((error) => {
            console.log(error.statusText);
        });
    });

    $("#good_num_9").change(function () {
        $.ajaxSetup({
        headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
        $.ajax({
        //POST通信
        type: "post",
        //ここでデータの送信先URLを指定します。
        url: "/posts/good_9",
        dataType: "json",
        data: {
            code: $('#good_num_9').val(),
        },

        })
        //通信が成功したとき
        .then((res) => {
            const good_9_name = document.getElementById('good_9_name');
            const good_9_price = document.getElementById('good_9_price');
            good_9_name.textContent = res['name'];
            good_9_price.textContent = res['price'];
        })
        //通信が失敗したとき
        .fail((error) => {
            console.log(error.statusText);
        });
    });

    $("#good_num_10").change(function () {
        $.ajaxSetup({
        headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
        $.ajax({
        //POST通信
        type: "post",
        //ここでデータの送信先URLを指定します。
        url: "/posts/good_10",
        dataType: "json",
        data: {
            code: $('#good_num_10').val(),
        },

        })
        //通信が成功したとき
        .then((res) => {
            const good_10_name = document.getElementById('good_10_name');
            const good_10_price = document.getElementById('good_10_price');
            good_10_name.textContent = res['name'];
            good_10_price.textContent = res['price'];
        })
        //通信が失敗したとき
        .fail((error) => {
            console.log(error.statusText);
        });
    });

    $("#good_num_11").change(function () {
        $.ajaxSetup({
        headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
        $.ajax({
        //POST通信
        type: "post",
        //ここでデータの送信先URLを指定します。
        url: "/posts/good_11",
        dataType: "json",
        data: {
            code: $('#good_num_11').val(),
        },

        })
        //通信が成功したとき
        .then((res) => {
            const good_11_name = document.getElementById('good_11_name');
            const good_11_price = document.getElementById('good_11_price');
            good_11_name.textContent = res['name'];
            good_11_price.textContent = res['price'];
        })
        //通信が失敗したとき
        .fail((error) => {
            console.log(error.statusText);
        });
    });

    $("#good_num_12").change(function () {
        $.ajaxSetup({
        headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
        $.ajax({
        //POST通信
        type: "post",
        //ここでデータの送信先URLを指定します。
        url: "/posts/good_12",
        dataType: "json",
        data: {
            code: $('#good_num_12').val(),
        },

        })
        //通信が成功したとき
        .then((res) => {
            const good_12_name = document.getElementById('good_12_name');
            const good_12_price = document.getElementById('good_12_price');
            good_12_name.textContent = res['name'];
            good_12_price.textContent = res['price'];
        })
        //通信が失敗したとき
        .fail((error) => {
            console.log(error.statusText);
        });
    });

    $("#good_num_13").change(function () {
        $.ajaxSetup({
        headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
        $.ajax({
        //POST通信
        type: "post",
        //ここでデータの送信先URLを指定します。
        url: "/posts/good_13",
        dataType: "json",
        data: {
            code: $('#good_num_13').val(),
        },

        })
        //通信が成功したとき
        .then((res) => {
            const good_13_name = document.getElementById('good_13_name');
            const good_13_price = document.getElementById('good_13_price');
            good_13_name.textContent = res['name'];
            good_13_price.textContent = res['price'];
        })
        //通信が失敗したとき
        .fail((error) => {
            console.log(error.statusText);
        });
    });

}
