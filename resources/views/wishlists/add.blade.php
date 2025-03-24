<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アイテム追加</title>
    <link rel="stylesheet" href="{{ asset('css/add.css') }}">
</head>
<body>
    <div class="container">
        <h1>ほしいもの追加</h1>
        <form action="{{ route('wishlists.post') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">名前:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="priority">ほしい度:</label>
                <select name="priority" id="priority">
                    <option value="1">1（低）</option>
                    <option value="2">2</option>
                    <option value="3">3（普通）</option>
                    <option value="4">4</option>
                    <option value="5">5（高）</option>
                </select>
            </div>
            <div class="form-group">
                <label for="url">URL:</label>
                <input type="url" id="url" name="url">
            </div>
            <button type="submit">追加</button>
        </form>
        <a href="{{ route('wishlists.home') }}">
            <button class="back-button">戻る</button>
        </a>
    </div>
</body>
</html>
