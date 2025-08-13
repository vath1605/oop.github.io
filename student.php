<?php 
    include 'people.php';
    class Student extends People{
        private $score;
        private $grade;

        public function __construct($id, $name, $gender,$score,$grade){
            $this->id = $id;
            $this->name = $name;
            $this->gender = $gender;
            $this->score = $score;
            $this->grade = $grade;
        }

        public function display(){
            echo '<h1>'.$this->id.'</h1>';
            echo '<h1>'.$this->name.'</h1>';
            echo '<h1>'.$this->gender.'</h1>';
            echo '<h1>'.$this->score.'</h1>';
            echo '<h1>'.$this->grade.'</h1>';
        }
    }
?>