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

        function __construct($aTitle, $aAuthor, $aPages){
          $this->title = $aTitle;
          $this->author = $aAuthor;
          $this->pages = $aPages;
        }
      }
      $book1 = new Book("Harry Potter", "JK Rowling", 280);
      $book2 = new Book("Lord Of The Rings", "Tolkien", 322);

      echo $book1->author;
    ?>
  </body>
</html>
