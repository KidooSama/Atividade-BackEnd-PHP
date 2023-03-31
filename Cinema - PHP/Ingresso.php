<?php
require_once "Cinema.php";
require_once "Sala.php";


class ingresso extends sala{
  public $price;
  protected $numCad;
  protected $date;

  public function setNumCad($num){
    $this->numCad = $num;
    
  }
  public function setPrice($preco){
    $this->price = $preco;
    
  }
    public function setDate($date){
    $this->date = $date;
    
  }

  public function getPrice(){
    return "\n|Preço: ".$this->price;
  }
  public function getNumCad(){
    return "\n|Numero da Poltrona: ".$this->numCad;
  }
  public function getDate(){
    return "\n|Data: ".$this->date;
  }
}