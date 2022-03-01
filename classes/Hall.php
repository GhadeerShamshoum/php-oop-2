<?php
    class Hall {
        public $number;
        public $name;
        public $capacity;
        public function __construct($_number, $_name, $_capacity){
            $this->number = $_number;
            $this->name =  $_name;
            $this->capacity =  $_capacity;
        }

        public function getNumberOFHalls(){
            return "{$this->capacity}";
        }

        public function setCapacity($_capacity){
            $this-> capacity = $_capacity;
        }
       

        
    }
?>>