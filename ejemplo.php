<?php


/**
* Ejemplo.php
*
* En esta clase se define un método “MultiplicartresNumeros” y una clase llamada Ejemplo.
*
*/

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
* Multiplicar tres números.
*
* Función que permite calcular la multiplicación de tres números.
*
* @param $aaa
* @param $bbb
* @param $ccc
*
* @return mixed Multiplicar de los dos valores. 
*/
public static function multiplicarTresNumeros ($aaa, $bbb, $ccc)
{
	return $aaa*$bbb*$ccc;
}

/**
* Multiplicar.
*
* Multiplicar los valores almacenados.
*
* return integer|float|double Multiplicación de los tres
valores. */

	function multiplicar ()
	{
		return Ejemplo::multiplicarTresNumeros($this->a, $this->b, $this->c);
	}
}

