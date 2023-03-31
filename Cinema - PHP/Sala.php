<?php
require_once "Cinema.php";

class sala {
  private $cad;
  public $cad_disp;
  public $num;

  public function setNum($num){
    $this->num = $num;
  }
  public function setCad($cad){
    $this->cad = $cad;    
  }
  public function setCadDisp($cad_disp){
    $this->cad_disp = $cad_disp;  
  }

  public function getNum(){
    return "\n|Número da Sala: ".$this->num;
  }
  public function getCad(){
    return "\n|Total de Cadeiras: ".$this->cad;
  }
  public function getCadDisp(){
    return "\n|Cadeiras Disponíveis: ".$this->cad_disp."\n";
  }
}