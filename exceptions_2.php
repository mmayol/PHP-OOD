<?php
function filtreDividir($dividend, $divisor)
{
    if ($divisor == 0)
        throw new Exception('Divisió per zero.');
    
    else
        return ($dividend / $divisor);
}

try {
    $dividend = 8;
    $divisor  = 0;
    echo filtreDividir($dividend, $divisor), "<br>";
}
catch (Exception $e) {
    echo "S'ha capturat l'excepció: " . $e->getMessage() . "<br>";
}

echo "I no s'avorta l'execució del programa!!!";
?>