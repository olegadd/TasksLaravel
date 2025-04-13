<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить статью</title>
</head>
<body>
    <h1>Добавить новую статью</h1>

    <form action="/post/new" method="POST">

        <label for="title">Заголовок:</label>
        <input type="text" name="title" id="title" required maxlength="150">
        <br>

        <label for="descr">Описание:</label>
        <textarea name="descr" id="descr" required maxlength="255"></textarea>
        <br>

        <label for="text">Текст статьи:</label>
        <textarea name="text" id="text" required></textarea>
        <br>

        <label for="date">Дата публикации:</label>
        <input type="date" name="date" id="date" required>
        <br>

        <button type="submit">Создать статью</button>
    </form>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
</body>
</html>
