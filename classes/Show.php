<?php
 class Show {
    protected $time;
    private $date;
    protected $hall;
    protected $movie;
    public function __construct($_time, $_date,$_hall, $_movie){
        $this->time = $_time;
        $this->date = $_date;
        $this->hall = $_hall;
        $this->movie = $_movie;
    
    }


    public function getData(){
        return $this->date;
     }
 
     public function getFilm(){
        return $this->movie;
     }
     public function getTime(){
        return $this->time;
     }
 }