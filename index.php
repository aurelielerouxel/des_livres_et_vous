<?php
// Controlleur qui gérer l'affichage de tous les livres
    include ("model/bookManager.php");
    include ("model/entity/book.php");

    $bookManager = new bookManager();
    $books = $bookManager->getBooks();
    
    require ("view/indexView.php");
