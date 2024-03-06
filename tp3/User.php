<?php

class User {
    private $login;
    private $password;

    public function __construct($login, $password) {
        $this->login = $login;
        $this->password = $password;
    }

    public function __get($attr) {
        if (!isset($this->$attr)) 
            return "erreur";
        else
            return $this->$attr;
    }

    public function __set($attr, $value) {
        $this->$attr = $value;
    }

    public function __toString() {
        $s = "Connexion réussie avec le login : " . $this->login;
        return $s;
    }

    public function connect() {
        if ($this->login === 'admin' && $this->password === 'admin') {
            return true;
        } else {
            return false;
        }
    }
}

?>
