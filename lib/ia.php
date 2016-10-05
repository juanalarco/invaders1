<?php
/**
* Ejercicio realizado por Juan Alarco
* Project Invaders
*/

class ia {

public $Columna = '0';
public $Fila = '1';

public function getColumna()
{
return $this->Columna = rand(1,3);
}

public function getFila()
{
return $this->Fila =rand(1,3);
}

}
?>
