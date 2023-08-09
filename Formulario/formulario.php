<?php
class Formulario{
  public $nombres = '';
  public $apellidos = '';
  public $fecha_nacimiento = '';
  public $documento = '';
  public $tipo_documento = '';
  public $telefono = '';
  public $ciudad = '';
  public $direccion ='';
  public $email = '';

  public function __construct($nombres, $apellidos, $documento, $fecha_nacimiento, $tipo_documento, $telefono, $ciudad, $direccion, $email)
  {
    $this->nombres = $nombres;
    $this->apellidos= $apellidos;
    $this->fecha_nacimiento= $fecha_nacimiento;
    $this->documento= $documento;
    $this->tipo_documento= $tipo_documento;
    $this->telefono= $telefono;
    $this->ciudad= $ciudad;
    $this->direccion =$direccion ;
    $this->email=$email;
  }
  function getDataUser(){
   return $this->nombres.''.$this->apellidos.''.$this->fecha_nacimiento.''.$this->documento.''.$this->tipo_documento.''.$this->telefono.''.$this->ciudad.''.$this->direccion.''.$this->email;
  }
} 
?>
