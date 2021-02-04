<HTML>
<head>
<title>OOD_3: Currency_Converter class: Constructors</title>
</head>
<body>

<?php
class Currency_Converter
{
  //Propiedades
var $Euros;
var $Exchange_Rate;
var $Pounds;

//Setters

public function setEuros($Euros)
{
$this->Euros=$Euros;
}

public function setExchange_Rate($Exchange_Rate)
{
$this->Exchange_Rate=$Exchange_Rate;
}

public function setPounds($Pounds)
{
$this->Pounds=$Pounds;
}

//Getter
public function getEuros()
{
return $this->Euros;
}

public function getExchange_Rate()
{
return $this->Exchange_Rate;
}

public function getPounds()
{
return $this->Pounds;
}
public function __construct($Euros,$Exchange_Rate,$Pounds){
      $this->Euros = $Euros;
      $this->Exchange_Rate = $Exchange_Rate;
      $this->Pounds = $Pounds;      
  }
public function print()
{
echo "Euros: $this->Euros <br>";
echo "ExchangeRate: $this->Exchange_Rate <br>";
echo "Pounds: $this->Pounds <br>";
}

}//end class Student

$alumne1=new Currency_Converter(20,0.89,17.8);//creating object using a default constructor
$alumne1->setEuros(20);
$alumne1->setExchange_Rate(0.89);
$alumne1->setPounds(17.8);
$alumne1->print();

?>
</body>
</HTML>