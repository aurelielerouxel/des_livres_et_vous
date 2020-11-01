<?php

class userManager {
  private PDO $db;

  public function __construct() {
      try {
          $this->db = new PDO('mysql:host=localhost;dbname=book_management', 'laloose', 'laloose');
      } catch (PDOExeption $e) {
          print "Erreur !: " . $e->getMessage() . "<br/>";
          die();
      }
  }

  // Récupère tous les utilisateurs
  public function getUsers() {
    $query = $this->db->query(
      "SELECT *
      FROM User"
    );

    $users = $query->fetchAll(PDO::FETCH_CLASS, "User");
    return $users;
  }

  public function addUser(User $user) {
    $query = $this->db->prepare(
      "INSERT INTO User(user_number, firstname, lastname, email, adress, postal_code, city)
      VALUES (:user_number, :firstname, :lastname, :email, :adress, :postal_code, :city)"
    );
    $result = $query->execute([
      "user_number" => $user->getUser_number(),
      "firstname" => $user->getFirstname(),
      "lastname" => $user->getLastname(),
      "email" => $user->getEmail(),
      "adress" => $user->getAdress(),
      "postal_code" => $user->getPostal_code(),
      "city" => $user->getCity(),
    ]);
  }

  // Récupère un utilisateur par son id
  public function getUserById($id) {
    $query = $this->db->prepare(
      "SELECT id, user_number, firstname, lastname, email, adress, postal_code, city
      FROM User
      WHERE id = :id"
    );
    $query->execute([
      "id" => $id
    ]);
    $user = $query->fetchAll(PDO::FETCH_CLASS, "User")[0];
    return $user;
  }

  // Récupère un utilisateur par son code personnel
  public function getUser() {

  }
}
