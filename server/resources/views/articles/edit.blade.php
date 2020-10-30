<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>論文編集</title>
</head>
<body>
    <h1>論文編集フォーム</h1>

    @if (count($errors) > 0)
        <div>
            <P>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </P>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
    @endif


<!--更新先はitemsのidにしないと増える php artisan rote:listで確認①-->
<form action="/articles/{{ $article->id }}" method="post">
    @csrf
    <!-- resourceの場合PUTを指定してあげないとエラーが起きる php artisan rote:listで確認② -->
    @method('PUT')
    <!-- idはそのまま -->
    <input type="hidden" name="id" value="{{ $article->id }}">
    <p>
        タイトル：<br>
        <input type=" text" name="title" value="{{ $article->title }}">
    </p>
    <p>
        論文詳細：<br>
        <textarea type="text" name="body" value="{{ $article->body }}"></textarea>
    </p>
    </p>
    <input type="submit" value="更新">
</form>
</body>
</html>