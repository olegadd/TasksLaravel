<!DOCTYPE html>
<html>
<head>
    <title>{{ $post->title }}</title>
</head>
<body>
    <h1>{{ $post->title }}</h1>
    <p><strong>Дата:</strong> {{ $post->date }}</p>
    <p><strong>Описание:</strong> {{ $post->descr }}</p>
    <div>
        <strong>Текст статьи:</strong>
        <p>{{ $post->text }}</p>
    </div>
    <a href="/public/post/all">← Назад ко всем статьям</a>
</body>
</html>
