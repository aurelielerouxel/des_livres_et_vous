<?php
// Controleur qui gère l'affichage du détail d'un utilisateur
    include ("model/userManager.php");
    include ("model/entity/user.php");

    if(isset($_GET["id"]) AND ($_GET["id"] > 0)){
        $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
        $userManager = new userManager();
        $user = $userManager->getUserById($id);
        var_dump($user);
    }

    require ("view/userView.php");