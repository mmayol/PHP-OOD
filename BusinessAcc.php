<?php

class BusinessAcc extends Acomodation {
    
    CONST sales = array('reunions','audio visuals','internet','no');
    
    private $sales;
    
    protected function set_sales($sales){
        $this->sales=$sales;
    }
    protected function get_sales(){
        $this->sales;
    }
    
    public function checkIn($numHabit){
        if ($this->numHabit==0) throw new Exception('check-in Error: Hotel complet. Operació no permesa<br>');
        else
        $this->numHabit=--$this->numHabit;
        echo "check-in successful","<br>";
    }
    
}
?>