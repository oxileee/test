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
    <h1>Новости</h1>
    <a href="addNews.php">Добавить новость</a>
    <a href="updateNews.php">Обновить новость</a>
    <hr>
<?php
    $res = $link->getNews();
    if(mysqli_num_rows($res) > 0) { // проверка на количество строк в БД
        while ($row = mysqli_fetch_array($res)) { // цикл обращения к элементам БД
            echo 'Название: ' . $row['title'] . '<br />Текст: ' . $row['text'] . '<br />Автор: ' . $row['author'] . '<hr />';
        }
    }
?>

</body>
</html>