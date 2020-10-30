<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>論文詳細</title>
</head>
<body>
    <h1>論文詳細</h1>
    <p>
        <b>タイトル ：{{ $article->title }} </b>
    </p>

    <p>
        <b>論文詳細 ：<br>{{ $article->body }} </b>
    </p>


    <!-- 商品のidを元に編集ページへ遷移する -->
<a href="/articles/"><button>一覧に戻る</button></a>
<a href="/articles/{{ $article->id }}/edit"><button>編集する</button></a>
<div id=" tmp2nd " style="display: inline-block; _display: inline;">
<form action="/articles/{{ $article->id }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
</form>
</body>
</html>