<?php 
include ("model/bookManager.php");
include ("model/entity/book.php");
if(!empty($_POST) AND isset($_POST["submit_book"])) {
    $book = new Book($_POST);
    $bookManager = new bookManager();
    $bookManager->addBook($book);
}
require ("view/addBookView.php");
