<?php
    include ("model/bookManager.php");
    include ("model/userManager.php");

    include ("model/entity/book.php");
    include ("model/entity/user.php");

    // Controleur qui gère l'affichage du détail d'un livre
    if(isset($_GET["id"]) AND ($_GET["id"] > 0)){
        $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
        $bookManager = new bookManager();
        $book = $bookManager->getBook($id);
        $userManager = new userManager();
        $user = $userManager->getUserById($id);
    } 
    
    // Supprime un livre
    if (isset($_POST["delete_book"]) AND ($book->getUser_id() === null)) {
        $delete_book = $bookManager->deleteBook();
        if ($delete_book) {
            header("Location: index.php");
            exit();
        }
    } 
    // else {
    //     echo "<script>alert(\"Vous ne pouvez pas supprimer ce livre, si un utilisateur l'a emprunté.\")</script>";
    // }

    // // Update status d'un livre
    // if(isset($_POST["emprunter"]) AND ) {
    //   $status = $bookManager->updateBookStatus();  
    // }
    // else {

    // }
    require ("view/bookView.php");