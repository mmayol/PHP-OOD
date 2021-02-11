<?php



class Acomodation {

Const menjador = array('casa','a la carta', 'buffet','no');

public $numHabit;
private $menjador;
    
    protected function set_numHabit($numHabit){
        $this->numHabit=$numHabit;
    }
    protected function get_numHabit(){
        $this->numHabit;
    }
    protected function set_menjador($menjador){
        $this->menjador=$menjador;
    }
    protected function get_menjador(){
        $this->menjador;
    }
    
    public function __construct($numHabit,$menjador){
        $this->numHabit=$numHabit;
        $this->menjador=$menjador;
    }
    
    public function checkIn($numHabit){
        $this->numHabit=--$this->numHabit;
    }
    public function checkOut($numHabit){
        $this->numHabit=++$this->numHabit;
    }
}
?>
