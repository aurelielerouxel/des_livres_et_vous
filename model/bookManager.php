<?php

class bookManager {
  // private PDO $db;
  // public function __construct() {
  //   try {

  //   } catch {
  
  //   }
  // }
  try {
    $this->db = new PDO('mysql:host=localhost;dbname=book_management', 'bookManager', 'bookManager');
  } catch (PDOExeption $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
  }

  // Récupère tous les livres
  public function getBooks() {
    "SELECT *
    FROM Book"
  }

  // Récupère un livre
  public function getBook() {

  }

  // Ajoute un nouveau livre
  public function addBook() {

  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus() {

  }

}
