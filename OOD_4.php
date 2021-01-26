<HTML>
<head>
<title>OOD_4: Money change</title>
</head>
<body>

<?php
class Money
{
var $euro;
var $dollar;
var $pound;
var $yen;
/*
public function setEuro($euro)
{
$this->euro=$euro;
}

public function setDollar($dollar)
{
$this->dollar=$dollar;
}

public function setPound($pound)
{
$this->pound=$pound;
}

public function setYen($yen)
{
$this->yen=$yen;
}
*/
public function print()
{
echo "Euro:",$this->euro();
echo "Dollar:",$this->eurostousd ();
echo "Pound:",$this->eurostopound ();
echo "Yen:", $this->eurostoyen () ,"<br><br>";

}
public function eurostopound () {
    $this->pounds=euros/$this->pexchangeRate;
    $this->pexchangeRate=$pexchangeRate;
}
public function eurostousd (){
    $this->dollar=euros/$this->dexchangeRate;
    $this->dexchangeRate=$dexchangeRate;
}
public function eurostoyen (){
    $this->yens=euros/$this->yexchangeRate;
    $this->yexchangeRate=$yexchangeRate;
}   

  function __construct($euro,$pexchangeRate,$dexchangeRate,$yexchangeRate){
      $this->euro=$euro;
      $this->pexchangeRate=$pexchangeRate;
      $this->dexchangeRate=$dexchangeRate;
      $this->yexchangeRate=$yexchangeRate;
  }
}//end class Student
$euros=2;
$pexchangeRate=0.89;
$dexchangeRate=1.22;
$yexchangeRate=126;
/*$money1=new Money('10','12.1596','1,258.79','8.86071');//creating object using a default constructor
*/
$

?>
</body>
</HTML>
