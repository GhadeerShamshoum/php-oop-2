<?php
    class Film {
        protected $name;
        protected $duration;
        protected $genre;
        protected $actors;
        

        public function __construct($_name, $_duration, $_genre, $_actors =[]){
            $this->name = $_name;
            $this->duration = $_duration;
            $this->genre = $_genre;
            $this->actors = $_actors;
        }


        public function addActors($_actor){
            $this-> actors[] = $_actor;
        }

        public function setActors($_actors){
            $this-> actors = $_actors;
        }
        // public function getInfo(){
        //     return "{$this->name} {$this->genre} {$this->cast} ";
        // }

        
        
    }
?>>