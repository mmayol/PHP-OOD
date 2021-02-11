<?php
    define('inst_aire_lliure',array('jardi','platja','montanya'));
class RuralAcc extends Acomodation {
    CONST tipus_activitats = array('senderisme','equitacio','ciclisme');
   private $orgActivitats;
   private $isnt_aire_lliure;
        protected function set_orgActivitats($orgActivitats){
            $this->orgActivitats = $orgActivitats;
        }
        protected function get_orgActivitats(){
            $this->orgActivitats;
        }
        protected function set_inst_aire_lliure($isnt_aire_lliure){
            $this->inst_aire_lliure = $isnt_aire_lliure;
        }
        protected function get_isnt_aire_lliure(){
            $this->isnt_aire_lliure;
        }
    
    public function __construct($orgActivitats,$inst_aire_lliure){
        $this->orgActivitats = $orgActivitats;
        $this->inst_aire_lliure = $inst_aire_lliure;
        parent::set_numHabit($numHabit);
        parent::set_menjador(parent::menjador[1]);

        
        
    }
}
?>