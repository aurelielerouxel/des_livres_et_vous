<?php
// Controleur qui gère l'affichage du détail d'un livre
    include ("model/bookManager.php");
    include ("model/userManager.php");

    include ("model/entity/book.php");
    include ("model/entity/user.php");


    if(isset($_GET["id"]) AND ($_GET["id"] > 0)){
        $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
        $bookManager = new bookManager();
        $book = $bookManager->getBook($id);
        $userManager = new userManager();
        $user = $userManager->getUserById($id);
    }  
    
    require ("view/bookView.php");