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
    return "\n".$this->num."\n";
  }
  public function getCad(){
    return "\n".$this->cad."\n";
  }
  public function getCadDisp(){
    return $this->cad_disp."\n";
  }
}