<?php 
include 'Calculadora.php';

$calc = new Calculadora(0,0);
echo "Ingrese el primer numero: ";
        $calc->setNum1(trim(fgets(STDIN)));
        echo "Ingrese el segundo numero: ";
        $calc -> setNum2(trim(fgets(STDIN)));

        
        echo "resultado : " . $calc->suma(). "\n";
        echo $calc ->__toString();

?>