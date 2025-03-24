<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ほしいもの一覧</title>
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>ほしいもの一覧</h1>

        {{-- 成功メッセージの表示 --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="閉じる"></button>
            </div>
        @endif

        <a href="{{ route('wishlists.add') }}">
            <button class="add-button">追加</button>
        </a>
        <table>
            <thead>
                <tr>
                    <th>名前</th>
                    <th>ほしい度</th>
                    <th>URL</th>
                    <th>追加日</th>
                    <th>削除</th>
                </tr>
            </thead>
            <tbody>
                @foreach($wishlists as $wishlist)
                <tr>
                    <td>{{ $wishlist->name }}</td>
                    <td>{{ $wishlist->priority }}</td>
                    <td>
                        <a href="{{ $wishlist->url }}" target="_blank">
                            {{ Str::limit($wishlist->url, 10) }}...
                        </a>
                    </td>
                    <td>{{ $wishlist->created_at->format('Y-m-d H:i') }}</td>
                    <td>
                        <form action="{{ route('wishlists.delete', $wishlist->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button">削除</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('wishlists.home') }}">
            <button class="back-button">戻る</button>
        </a>
    </div>
</body>
</html>
