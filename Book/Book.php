<?php

class Book {
    //Properties
    private $title;
    public $author;
    private $price;
    var $publisher;


    //Methods
    //constructor
    public function  __construct($new_title,$new_author,$new_price,$new_publisher){
        $this->title = $new_title;
        $this->author = $new_author;
        $this->price = $new_price;
        $this->publisher = $new_publisher;
    }



    //Setters
    // public function setTitle($new_title){
    //     $this->title =$new_title;
    // }

    // public function setAuthor($new_author){
    //     $this->author = $new_author;


    // }
    // public function setPrice($new_price){
    //     $this->price = $new_price;

    // }
    // public function setPublisher($new_publisher){
    //     $this->publisher = $new_publisher;
    // }

    //Getters
    public function getTitle(){
        return $this->title;

    }

    public function getPrice(){
        return $this->price;
    }
    public function getAuthor(){
        return $this->author;
    }
    public function getPublisher(){
        return $this->publisher;
    }







    public function displayTitle(){
        return $this->title;
    }

    public function displayAuthor(){
        return $this->author;
    }

    private function displayValues(){
        echo "Title". $this->title."<br>";
        echo "Price". $this->price."<br><br>";

    }



}
// $dev_adv_book = new Book ("Dev Adv Book : Intro to OOP", "John Smith", 29.99,"ABC Publisher Comp.");
// echo $dev_adv_book->getTitle()."<br>"; //Dev Adv Book: Intro to OOP
// echo $dev_adv_book->getPublisher()."<br>"; //ABC Publisher
// echo $dev_adv_book->getPrice()."<br>"; //29.99

// $web_development = new Book; //web_development is an object to acceess the Book class
// $web_development->author ="John Doe"; 
// echo "Author:".$web_development->displayAuthor()."<br>";

// $web_development->setTitle("Web Development Course V2.");
// $web_development->setPrice("500");

// echo"Title:". $web_development->getTitle()."<br>";
// echo"Price:". $web_development->getPrice()."<br><br>";

// $web_design = new Book;
// $web_design->setTitle("Web Design : A design Course ");
// $web_design->setPrice("100 ");

// echo"Title:". $web_design->getTitle()."<br>";
// echo"Price:". $web_design->getPrice()."<br><br>";



?>