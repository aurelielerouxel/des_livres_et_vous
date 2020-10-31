<?php
// Classe représetant les livres stockés en base de données
class Book {
    protected int $id;
    protected string $autor;
    protected string $title;
    protected string $release_date;
    protected string $literary_style;
    protected string $status;
    protected string $resume;
    protected ?int $user_id;

    public function setId(int $id) {
        $this->id = $id;
    }
    public function setAutor(string $autor) {
        $this->autor = $autor;
    }
    public function setTitle(string $title) {
        $this->title = $title;
    }
    public function setRelease_date(string $release_date) {
        $this->release_date = $release_date;
    }
    public function setLiterary_style(string $literary_style) {
        $this->literary_style = $literary_style;
    }
    public function setStatus(string $status) {
        $this->status = $status;
    }
    public function setResume(string $resume) {
        $this->resume = $resume;
    }
    public function setUser_id(int $user_id = null) {
        $this->user_id = $user_id;
    }

    public function getId():int {
        return $this->id;
    }
    public function getAutor():string {
        return $this->autor;
    }
    public function getTitle():string {
        return $this->title;
    }
    public function getRelease_date():string {
        return $this->release_date;
    }
    public function getLiterary_style():string {
        return $this->literary_style;
    }
    public function getStatus():string {
        return $this->status;
    }
    public function getResume():string {
        return $this->resume;
    }
    public function getUser_id():int {
        return $this->user_id;
    }

    public function __construct(array $data = null) {
        if($data) {
            // $this->setId($data["id"]);
            $this->setAutor($data["autor"]);
            $this->setTitle($data["title"]);
            $this->setRelease_date($data["release_date"]);
            $this->setLiterary_style($data["literary_style"]);
            $this->setStatus($data["status"]);
            $this->setResume($data["resume"]);
            $this->setUser_id($data["user_id"]);
        }
    }
}
