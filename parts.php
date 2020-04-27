<?php
    class Parts {
        protected $price;
        protected $name;
        protected $image;

        public function __construct($price, $name, $image) {
            $this->price = $price;
            $this->name = $name;
            $this->image = $image;
        }

        public function getPrice(){
            return $this->price;
        }

        public function getName(){
            return $this->name;
        }

        public function getImage(){
            return $this->image;
        }
    }

?>