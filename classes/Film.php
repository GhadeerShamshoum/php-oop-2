<?php
    class Film {
        protected $name;
        protected $genre;
        protected $cast;

        public function __construct($_name, $_genre,$_cast){
            $this->name = $_name;
            $this->genre = $_genre;
            $this->cast = $_cast;
        
        }
        // public function getInfo(){
        //     return "{$this->name} {$this->genre} {$this->cast} ";
        // }

        
        
    }
?>>