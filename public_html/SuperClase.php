<?php

/**
* Clase de prueba
*/
class SuperClase
{
  private $atributo;

  function __construct()
  {
    $this->atributo = 'Esto es un atributo';
  }

  public function index()
  {
    echo $this->atributo;
  }
}