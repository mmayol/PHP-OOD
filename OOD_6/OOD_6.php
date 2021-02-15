<html>
<head>
<title>OOD_6: inheritance example</title>
</head>
<body>
<?php
require "LivingBeing.php";//similar to include
require "PersonOOD6.php";

$person1=new PersonOOD6('Miquel Toni',22);

echo $person1->print();
 ?>
</body>
</html>
