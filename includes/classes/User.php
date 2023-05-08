<?php
class User {

    private $con;
    private $username;

    public function __construct($username) {
        $this->con = ConnexionBD::getInstance();
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }

}
?>