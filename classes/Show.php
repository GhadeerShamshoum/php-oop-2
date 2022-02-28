<?php
 class Show {
    protected $time;
    protected $date;
    protected $hall;
    protected $film;
    public function __construct($_time, $_date,$_hall, $_film){
        $this->time = $_time;
        $this->date = $_date;
        $this->hall = $_hall;
        $this->film = $_film;
    
    }
 }