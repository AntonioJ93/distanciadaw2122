<?php
/**
* Suma y resta dos números
*
* Sumna y resta de dos números con tipado
* estricto (float)
*@author Antonio Prieto
*@version 1.0
*/

declare(strict_types=1);

/**
*@param float num1 primer sumando
*@param float num2 segundo sumando
*@return float resultado de la suma
*@internal no controla el desbordamiento del float
*/
function sumar(float $num1,float $num2):float{
//modifico el archivo añadiendo esta linea
return $num1+$num2;
}

/**
*@param float num1 primer número a restar
*@param float num2 segundo número a restar
*@return float resultado de la resta
*/
function restar(float $num1,float $num2):float{
return $num1-$num2;
}






?>
