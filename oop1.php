<?php 
    class Oop1{
        private $test;
        public function __construct(){
            $this->test = 'Hello';  
        }
        public function show(){
            echo $this->test;
        }
        public function setTest($test){
            $this->test = $test;
        }

    }

    $obj = new Oop1();
    $obj -> setTest('Hello Crush');
    $obj -> show();
?>