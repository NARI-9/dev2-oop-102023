<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
</head>
<body>
    <form action="" method="post">
        <label for="title">Title</label>
        <input type="text" name="title" id="title">

        <br>
        <br>

        <label for="author">Author</label>
        <input type="text" name="author" id="author">

        <br>
        <br>
        <label for="price">Price</label>
        <input type="text" name="price" id="price">

        <br>
        <br>
        <label for="publisher">Publisher</label>
        <input type="text" name="publisher" id="publisher">


        <br>
        <br>
        <button type="submit" name="btn_submit">Submit</button>



    </form>
    <?php
    include "Book.php";

    if(isset($_POST['btn_submit'])){
        $title = $_POST['title'];
        $price = $_POST['price'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];

        $book = new Book($title,$author,$price,$publisher); //Instantiate the class

        //Setters
        // $book->setTitle($title);
        // $book->setPrice($price);
        // $book->setAuthor($author);
        // $book->setPublisher($publisher);

        //Display Values
        echo"Title: ". $book->getTitle()."<br>";
        echo"Price: ". $book->getPrice()."<br>";
        echo"Author: ". $book->getAuthor()."<br>";
        echo"Publisher: ". $book->getPublisher()."<br>";
    }
    
    ?>
    
</body>
</html>