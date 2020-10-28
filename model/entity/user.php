<?php
// Classe représetant les utilisateurs stockés en base de données
class Utilisateur {
    private int $id;
    private string $user_number;
    private string $firstname;
    private string $lastname;
    private string $email;
    private string $adress;
    private string $postal_code;
    private string $city;

    public function setId(int $id) {
        $this->id = $id;
    }
    public function setUser_number(string $user_number) {
        $this->user_number = $user_number;
    }
    public function setFirstname(string $firstname) {
        $this->firstname = $firstname;
    }
    public function setLastname(string $lastname) {
        $this->lastname = $lastname;
    }
    public function setEmail(string $email) {
        $this->email = $email;
    }
    public function setAdress(string $adress) {
        $this->adress = $adress;
    }
    public function setPostal_code(string $postal_code) {
        $this->postal_code = $postal_code;
    }
    public function setCity(string $city) {
        $this->city = $city;
    }

    public function getId():int {
        return $this->id;
    }
    public function getUser_number():string {
        return $this->user_number;
    }
    public function getFirstname():string {
        return $this->firstname;
    }
    public function getLastname():string {
        return $this->lastname;
    }
    public function getEmail():string {
        return $this->email;
    }
    public function getAdress():string {
        return $this->adress;
    }
    public function getPostal_code():string {
        return $this->postal_code;
    }
    public function getCity():string {
        return $this->city;
    }

    public function __construct() {

    }
}
