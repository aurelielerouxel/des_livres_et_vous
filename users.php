<?php
// Controleur qui gère l'affichage de tous les utilisateurs
    include ("model/userManager.php");
    include ("model/entity/user.php");

    $userManager = new userManager();
    $users = $userManager->getUsers();
    require ("view/usersView.php");