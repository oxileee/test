<?php
    require __DIR__ . '/../models/sql.php';
    $link = new Database('localhost', 'root', '', 'test');
    $link->connect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show News</title>
</head>
<body>
    <h1>Обновить новость</h1>
    <a href="addNews.php">Добавить новость</a>
    <a href="showNews.php">Перейти к новостям</a>
    <form action="updateNews.php" method="post">
        <label>
            Название<br>
            <input type="text" name="title">
        </label>
        <br>
        <label>
            Текст<br>
            <input type="text" name="newText">
        </label>
        <br>
        <input type="submit">
    </form>
<?php
$link->updateNews($_POST['title'], $_POST['newText']);
?>
</body>
</html>