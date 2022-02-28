<?php
require_once __DIR__.'/Hall.php';
    class Hall4D extends Hall {
        protected $effects =[];

        public function __construct($_number,  $_name, $_capacity, $_effects){
            parent::__construct($_number, $_name, $_capacity);
            $this-> effects = $_effects;

        }
        
        
        
        
        
    }
?>>