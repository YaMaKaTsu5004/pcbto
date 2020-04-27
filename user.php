<?php
    Class User {
        private $id;
        private $name;
        private $mail;
        private $password;

        public function __construct($mail, $password){
            $this->mail = $mail;
            $this->password = $password;
        }

    }
?>