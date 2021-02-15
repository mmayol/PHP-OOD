<?php

define('SPEAKING_CAPABILITY',array('guau','miau','language'));
define('EATING_CAPABILITY',array('meat','vegs','meat and vegs'));
define('MOVING_CAPABILITY',array('walk','fly'));

class LivingBeing {

Const GENDER = array('female','male');
Const STATUS = array('awake','sleeping');

public $age;
private $status;
private $gender;
private $eatingCapability;
private $movingCapability;
private $speakingCapability;

public function set_age($age)
{$this->age=$age;}
public function get_age()
{return $this->age;}

protected function set_status($status){
    $this->status=$status;
}
protected function get_status(){
    return $this->status;
}

protected function set_gender($gender){
    $this->gender=$gender;
}
protected function get_gender(){
    return $this->gender;
}

protected function set_eatingCapability($eatingCapability){
    $this->eatingCapability=$eatingCapability;
}
protected function get_eatingCapability(){
    return $this->eatingCapability;
}

protected function set_movingCapability($movingCapability){
    $this->movingCapability=$movingCapability;
}
protected function get_movingCapability(){
    return $this->movingCapability;
}

protected function set_speakingCapability($speakingCapability){
    $this->speakingCapability=$speakingCapability;
}
protected function get_speakingCapability(){
    return $this->speakingCapability;
}


public function oneYearOlder(){
  $this->age=++$this->age;
}

}
?>
