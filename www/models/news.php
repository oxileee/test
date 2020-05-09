<?php
   abstract class Articles {
       public $title;
       public $text;
   }

   class News extends Articles {
       public $id;
       public $author;
   }
?>