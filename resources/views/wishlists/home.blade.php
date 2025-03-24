<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ほしいものリスト</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
    <div class="container">
        <h1>ほしいものリスト</h1>
        <div class="buttons">
            <a href="{{ route('wishlists.add') }}">
                <button>追加</button>
            </a>
            <a href="{{ route('wishlists.list') }}">
                <button>一覧</button>
            </a>
        </div>
    </div>
</body>
</html>
