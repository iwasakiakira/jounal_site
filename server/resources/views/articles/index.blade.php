<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>論文一覧</title>
</head>
<body><h1>論文一覧</h1>
<ul>
    @foreach ($articles as $article)
        <!-- // リンク先をidで取得し名前で出力 -->
        <li><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></li><br>
    @endforeach
</ul>

<!-- 新規登録画面へジャンプする -->
<ul><a href="/articles/create"><button>新規投稿</button></a></ul>
</body>
</html>