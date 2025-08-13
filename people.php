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
            echo '<h1>'.$this->id.'</h1>';
            echo '<h1>'.$this->name.'</h1>';
            echo '<h1>'.$this->gender.'</h1>';
        }
    }
?>