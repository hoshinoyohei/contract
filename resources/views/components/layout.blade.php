<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>契約書</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/style_list.css') }}">
</head>
<body>
    <div class="container">
        {{ $slot }}
    </div>

    <script src="{{ asset('/js/main.js') }}"></script>
</body>
</html>
