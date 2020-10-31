<?php

class bookManager {
  private PDO $db;

  public function __construct() {
      try {
          $this->db = new PDO('mysql:host=localhost;dbname=librairie', 'laloose', 'laloose');
      } catch (PDOExeption $e) {
          print "Erreur !: " . $e->getMessage() . "<br/>";
          die();
      }
  }

  // Récupère tous les livres
  public function getBooks():?array {
    $query = $this->db->query(
      "SELECT*
      FROM Book"
    );
    $books = $query->fetchAll(PDO::FETCH_CLASS, "Book");
    return $books;
  }

  // Récupère un livre
  public function getBook($id){
    $query = $this->db->prepare(
      "SELECT *
      FROM Book
      WHERE id = :id"
    );
    $query->execute([
      "id" => $id
    ]);
    $book = $query->fetchAll(PDO::FETCH_CLASS, "Book")[0];
    return $book;
      // $query = $this->db->prepare(
      //   "SELECT *
      //   FROM User
      //   LEFT JOIN Book
      //   ON User.id = Book.user_id
      //   AND Book.id = :id"
      // );
      // $query->execute([
      //   "id" => $_GET["id"]
      // ]);
      // $book_user = $query->fetchAll(PDO::FETCH_ASSOC)[0];
      // $book = new Book($book_user);
  }

  // Ajoute un nouveau livre
  public function addBook(Book $book) {
      $query = $this->db->prepare(
        "INSERT INTO Book (autor, title, release_date, literary_style, status, resume, user_id)
        VALUE (:autor, :title, :release_date, :literary_style, :status, :resume, :user_id)"
      );
      $result = $query->execute([
        "autor" => $book->getAutor(),
        "title" => $book->getTitle(),
        "release_date" => $book->getRelease_date(),
        "literary_style" => $book->getLiterary_style(),
        "status" => $book->getStatus(),
        "resume" => $book->getResume(),
        "user_id" => $book->getUser_id(),
      ]);
    
  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus() {

  }

}
