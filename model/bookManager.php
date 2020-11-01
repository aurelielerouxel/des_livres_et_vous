<?php

class bookManager {
  private PDO $db;

  public function __construct() {
      try {
          $this->db = new PDO('mysql:host=localhost;dbname=book_management', 'laloose', 'laloose');
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

  // Supprimer un livre
  public function deleteBook() {
    $query = $this->db->prepare(
      "DELETE
      FROM Book
      WHERE id = :id"
    );
    $delete_book = $query->execute([
      "id" => $_GET["id"]
    ]);
    return $delete_book;
  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus() {
    $query = $this->db->prepare(
      "UPDATE Book
      SET status = 'X', user_id = :user_id
      WHERE id = :id"
    );
    $status = $query->execute([
      "id" => $_GET["id"],
      "user_id" => $user->getId()
    ]);
    return $status;
  }

}
