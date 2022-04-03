<?php 
include 'Calculadora.php';

$calc = new Calculadora(0,0);


        echo "Ingrese el primer numero: ";
        $calc->setNum1(trim(fgets(STDIN)));
        echo "Ingrese el segundo numero: ";
        $calc -> setNum2(trim(fgets(STDIN)));
        
        echo "que operacion matematica desea implementar? (+,-,/,*)\n";

        $operacion=trim(fgets(STDIN));
        switch ($operacion) {
                case '+':
                        echo "resultado : " . $calc->suma(). "\n";
                        break;
                case '-':
                        echo "resultado : " . $calc->resta(). "\n";
                        break;
                case '/':
                        echo "resultado : " . $calc->division(). "\n";
                        break;
                case '*':
                        echo "resultado : " . $calc->multiplicacion(). "\n";
                        break;
                default:
                        echo "operacion invalida \n";
                        break;
        }

        
        
        echo $calc ->__toString();

?>