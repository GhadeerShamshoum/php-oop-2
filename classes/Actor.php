<?php
class Actor {
    private $name;
    private $surname;
    private $year;

    public function __construct($_name, $_surname, $_year){
        $this-> name = $_name;
        $this-> surname = $_surname;
        $this-> year = $_year;

    }

    public function getInfo(){
        return "{$this->name} {$this->surame} {$this->year}";
    }

    public function setName($name){
        $this->name = $_name;
    }

    public function setSurname($surname){
        $this->surname = $_surname;
    }

    public function setYear($year){
        $this->year = $_year;
    }
}
?>