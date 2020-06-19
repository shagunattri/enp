<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
    <?php
        class Book{
        var $title;
        var $author;
        var $pages;

        function __construct($aTitle){
            echo "New Book Created $name";
        }
    }

    $book1 = new Book("skjfnkjs");
    $book1->title = "gaadgag";
    $book1->author = "JK ROwling";
    $book1->pages = "400"; 

    $book2 = new Book("sfjnkja");
    $book2->title = "gaadgdhdhfdag";
    $book2->author = "JK ROwdfhdling";
    $book2->pages = "500";  


    echo $book2->author;
     






    ?>


</body>
</html>