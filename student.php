<?php 
    include 'people.php';
    class Student extends People{
        private $score;
        private $grade;

        public function __construct($id, $name, $gender,$score,$grade){
            parent::__construct($id,$name,$gender);
            $this->score = $score;
            $this->grade = $grade;
        }

        public function display(){
            parent::display();
            echo '<h1>Score: '.$this->score.'</h1>';
            echo '<h1>Grade: '.$this->grade.'</h1>';
        }
    }

    $student = new Student(101,'Dara','Male',90,'B');
    $student -> display();
?>