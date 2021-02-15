<?php
class Teacher extends Person{
    
public $salary;

public function set_salary($salary){
    $this->salary=$salary;
}
public function get_salary(){
    return $this->salary;
}

public function __construct($name,$dni,$salary){
    parent::__construct($name,$dni);
    $this->salary=$salary;
}

public function print(){
    parent::print();
    echo 'This teacher salary is'.$this->salary.'<br><br><br>';
}


}
?>
