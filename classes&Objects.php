<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Classes and Objects</title>
  </head>
  <body>
    <?php
      class Book {
        var $title;
        var $author;
        var $pages;
      }
      $book1 = new Book;
      $book1->title = "Harry Potter";
      $book1->author = "JK Rowling";
      $book1->pages = 280;

      $book2 = new Book;
      $book2->title = "Lord Of The Rings";
      $book2->author = "Tolkien";
      $book2->pages = 322;

      echo $book1->author;
    ?>
  </body>
</html>
