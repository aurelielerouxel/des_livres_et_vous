<?php

class userManager {

  // Récupère tous les utilisateurs
  public function getUsers() {
    $db->prepare(
      "SELECT *
      FROM User"
    );

    $users = $query->fetchAll(PDO::FETCH_CLASS, "User");
    return $users;
  }

  // Récupère un utilisateur par son id
  public function getUserById() {

  }

  // Récupère un utilisateur par son code personnel
  public function getUser() {

  }
}
