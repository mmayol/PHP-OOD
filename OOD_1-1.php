<HTML>
<head>
<title>OOD_1: Student class: setters and getters</title>
</head>
<body>

<?php
class Student
{
var $name;
var $surn;
var $dni;
var $age;

public function setName($name)
{
$this->name=$name;
}

public function setDni($dni)
{
$this->dni=$dni;
}

public function setSurn($surn)
{
$this->surn=$surn;
}

public function setAge($age)
{
$this->age=$age;
}

public function print()
{
echo "Name: $this->name <br>";
echo "Name: $this->surn <br>";
echo "Dni: $this->dni <br>";
echo "Dni: $this->age <br><br>";

}

}//end class Student

$alumne1=new Student();//creating object using a default constructor
$alumne1->setName('Imena');
$alumne1->setDni('23344556D');
$alumne1->setSurn('Riera');
$alumne1->setAge('21');
$alumne1->print();
$alumne1->setName('Tomeu');
$alumne1->setDni('580');
$alumne1->setSurn('de ca es conco');
$alumne1->setAge('26');
$alumne1->print();


?>
</body>
</HTML>
