<?php
    class People{
        protected $id;
        protected $name;
        protected $gender;

        public function __construct($id,$name,$gender){
            $this->id = $id;
            $this->name = $name;
            $this->gender = $gender;
        }

        public function display(){
            echo '<h1>ID: '.$this->id.'</h1>';
            echo '<h1>Name: '.$this->name.'</h1>';
            echo '<h1>Gender: '.$this->gender.'</h1>';
        }
    }
?>