<?php
    include ("model/userManager.php");
    include ("model/entity/user.php");
    if(!empty($_POST) AND isset($_POST["submit_user"])) {
        $user = new User($_POST);
        $userManager = new userManager();
        $userManager->addUser($user);
    }
    require ("view/addUserView.php");