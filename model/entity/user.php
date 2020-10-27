<?php
// Classe représetant les utilisateurs stockés en base de données
class Utilisateur {
    private string $user_number;
    private string $firstname;
    private string $lastname;
    private string $email;
    private string $adress;
    private string $postal_code;
    private string $city;

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
        $this->setUser_number("user_number");
        $this->setFirstname("firstname");
        $this->setLastname("lastname");
        $this->setEmail("email");
        $this->setAdress("adress");
        $this->setPostal_code("postal_code");
        $this->setCity("city");
    }
}
