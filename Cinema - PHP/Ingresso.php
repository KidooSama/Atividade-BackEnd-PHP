<?php
require_once "Cinema.php";
require_once "Sala.php";


class ingresso extends sala{
  public $preco;
  

  public function setIng($preco){
    $this->preco = $preco;
    
  }
  public function getIng(){
    return "\nIngresso\n".$this->preco;
  }

}