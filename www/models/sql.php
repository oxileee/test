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
        /*
                public function updateNews($sql)
                {

                }

                public function getNews($sql)
                {

                }
        */
    }
?>