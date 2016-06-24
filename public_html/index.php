<?php

/**
* Una SubClase
*/
class SubClase extends SuperClase
{

  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    echo $this->atributo;
  }
}

$obj = new SubClase;

$obj->index();