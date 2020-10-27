<?php

try {
  $this->db = new PDO('mysql:host=localhost;dbname=book_management', 'bookManager', 'bookManager');
} catch (PDOExeption $e) {
  print "Erreur !: " . $e->getMessage() . "<br/>";
  die();
}

class bookManager {

  // Récupère tous les livres
  public function getBooks() {
    $db->prepare(
      "SELECT *
      FROM Book"
    );
    $query->execute();
    $books = $query->fetchAll(PDO::FETCH_ASSOC)
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
