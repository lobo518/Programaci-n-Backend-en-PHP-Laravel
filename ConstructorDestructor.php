<?php

$persona = new Persona();
$persona->nombre = "Pedro";
$persona->Saludar();


class Persona
{
  public $nombre;
  public function Saludar()
  {
    echo "Hola " . $this->nombre;
  }

  public function __construct()
  {
    echo "Se construyo";
  }

  public function __destruct()
  {
    echo "Se destruyo";
  }
}
