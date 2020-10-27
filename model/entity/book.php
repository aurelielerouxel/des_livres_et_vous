<?php
// Classe représetant les livres stockés en base de données
class Livre {
    private string $autor;
    private string $title;
    private string $release_date;
    private string $literary_style;
    private string $status;
    private string $resume;

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
}
