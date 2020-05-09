<?php
    class Database {
        public $username;
        public $password;
        public $host;
        public $database;

        public function __construct($host, $username, $password, $database)
        {
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
        }

        public function connect()
        {
            return mysqli_connect($this->host, $this->username, $this->password, $this->database);
        }

        public function addNews($title, $text, $author)
        {
            mysqli_query($this->connect(), "INSERT INTO news (title, text, author) VALUES ('" . $title . "', '" . $text . "', '" . $author . "')");
        }

        public function getNews()
        {
            return mysqli_query($this->connect(), "SELECT `title`, `text`, `author` FROM `news`");
        }

        public function updateNews($title, $newText)
        {
            mysqli_query($this->connect(), "UPDATE news SET text='" . $newText . "' WHERE title='" . $title . "'");
        }

    }
?>