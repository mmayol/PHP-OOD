<HTML>
<head>
<title>OOD_3: Money change</title>
</head>
<body>

<?php
class Currency_Converter
{
var $euro;
var $dollar;
var $pound;
var $yen;

public function get_Euro($euro)
{
$this->euro=$euro;
}

public function get_Dollar($dollar)
{
$this->dollar=$dollar;
}

public function get_Pound($pound)
{
$this->pound=$pound;
}

public function get_Yen($yen)
{
$this->yen=$yen;
}

public function print()
{
echo "Euro:",$this->euro,"<br>";
echo "Dollar:",$this->dollar,"<br>";
echo "Pound:",$this->pound,"<br>";
echo "Yen:", $this->yen ,"<br><br>";

}
  function __construct($euro,$dollar,$pound,$yen){
      $this->euro=$euro;
      $this->dollar=$dollar;
      $this->pound=$pound;
      $this->yen=$yen;
  }
}//end class Student

$op1=new Currency_Converter("10","12.1596","1,258.79","8.86071");//creating object using a default constructor
$op1->print();

?>
</body>
</HTML>
