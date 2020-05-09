<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add News</title>
    <style>
        form {
            border-style: outset;
            border-width: 5px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1>Добавление новости</h1>
    <a href="showNews.php">Перейти к новостям</a>
    <hr>
    <form action="/../index.php" method="post">
        <label>
            Заголовок<br>
            <input type="text" name="title" maxlength="100">
        </label>
        <br>
        <label>
            Текст<br>
            <input type="text" name="text" maxlength="10000">
        </label>
        <br>
        <label>
            Автор<br>
            <input type="text" name="author" maxlength="100">
        </label>
        <hr>
        <input type="submit">
        <input type="reset">
    </form>
</body>
</html>