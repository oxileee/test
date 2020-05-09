<?php
    require __DIR__ . '/models/sql.php';

    if(!$_POST) {
        header('Location: /views/addNews.php');
        exit;
    }

    $link = new Database('localhost', 'root', '', 'test');
    $link->connect();

    $title = $_POST['title'];
    $text = $_POST['text'];
    $author = $_POST['author'];

    $link->addNews($title, $text, $author);

    header('Location: /views/showNews.php');
?>