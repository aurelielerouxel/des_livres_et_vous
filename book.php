<?php
// Controleur qui gère l'affichage du détail d'un livre
    include ("model/bookManager.php");
    include ("model/entity/book.php");

    if(isset($_GET["id"]) AND ($_GET["id"] > 0)){
        $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
        $bookManager = new bookManager();
        $book = $bookManager->getBook($id);
        var_dump($book);
    }   

    require ("view/bookView.php");