<?php
/**
* Ejemplo.php
*
* En esta clase se define un método “sumarDosNumeros” y una clase llamada Ejemplo.
*
*/
/**
* Sumar dos números.
*
* Función que permite calcular la multiplicación de tres números.
*
* @param integer|float|double $v1 Valor1 a multiplicar.
* @param integer|float|double $v2 Valor2 a multiplicar.
* @param integer|float|double $v3 Valor3 a multiplicar.
* @return integet|float|double Suma de los dos
valores. */

function multiplicarTresNumeros ($v1, $v2, $v3)
{
	return $v1*$v2*$v3;
}

/**
* Clase de ejemplo.
*
* Esta es una clase de ejemplo.
*
* @author Nombre y Apellidos.
*/
class Ejemplo {
/** @var integer|float|double $a Valor A de ejemplo.
*/ var $a;
/** @var integer|float|double $b Valor B de ejemplo.
*/ var $b;
/** @var integer|float|double $c Valor C de ejemplo.
*/ var $c;
/**
* Multiplicar.
*
* Multiplicar los valores almacenados.
*
* return integer|float|double Multiplicación de los tres
valores. */

	function multiplicar ()
	{
		return multiplicarTresNumeros($this->a, $this->b, $this->c);
	}
}

