<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>論文投稿</title>
</head>
<body>

    <h1>論文投稿フォーム</h1>

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

<form action="/articles" method="post">
    @csrf
    <p>
        タイトル：<br>
        <input type="text" name="title" value="{{ old('title') }}">
    </p>
    <p>
        論文詳細：<br>
        <textarea type="text" name="body" value="{{ old('body') }}"></textarea>
    </p>
    <input type="submit" value="投稿">
</form>
</body>
</html>