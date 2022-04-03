<?php
//declaracion de atributos
class Calculadora{
    private $n1;
    private $n2;
    

public function __construct($numero1,$numero2)
{
        $this->n1=$numero1;
        $this->n2=$numero2;
}
public function getNum1(){
    return $this->n1;
}
public function setNum1($num1){
     $this->n1=$num1;
}
public function getNum2(){
    return $this->n2;
}
public function setNum2($num2){
     $this->n2=$num2;
}

/**
 * @param 
 * @return int
 */
//https://www.youtube.com/watch?v=wJLBIC8riCA
public function suma(){
    $respuesta=  $this->n1+ $this->n2;
    return $respuesta;
}
public function resta(){
    $respuesta=  $this->n1 -  $this->n2;
    return $respuesta;
}
public function __toString()
{
    return   "primer numero ingresado : \n" 
            . $this->respuesta=$this->getNum1()
            ."\n"."segundo numero ingresado : \n"
            . $this->getNum2(). "\n";
}

}


?>
