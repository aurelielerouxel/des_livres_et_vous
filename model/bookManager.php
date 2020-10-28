<?php

// try {
//   $db = new PDO('mysql:host=localhost;dbname=book_management', 'bookManager', 'bookManager');
// } catch (PDOExeption $e) {
//   print "Erreur !: " . $e->getMessage() . "<br/>";
//   die();
// }

class bookManager {
  private PDO $db;

  public function __construct() {
      try {
          $this->db = new PDO('mysql:host=localhost;dbname=book_management', 'bookManager', 'bookManager');
      } catch (PDOExeption $e) {
          print "Erreur !: " . $e->getMessage() . "<br/>";
          die();
      }
  }

  // Récupère tous les livres
  public function getBooks() {
      $query = $this->db->query(
        "SELECT*
        FROM Book"
      );
      $books = $query->fetchAll(PDO::FETCH_CLASS, "Book");
      return $books;
  }

  // Récupère un livre
  public function getBook() {

  }

  // Ajoute un nouveau livre
  public function addBook(Book $book) {
      $query = $this->db->prepare(
        "INSERT INTO Book (autor, title, release_date, literary_style, status, resume)
        VALUE (:autor, :title, :release_date, :literary_style, :status, :resume)"
      );
      $result = $query->execute([
        "autor" => $book->getAutor(),
        "title" => $book->getTitle(),
        "release_date" => $book->getRelease_date(),
        "literary_style" => $book->getLiterary_style(),
        "status" => $book->getStatus(),
        "resume" => $book->getResume(),
      ]);
    
  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus() {

  }

}
