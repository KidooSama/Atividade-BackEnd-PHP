<?php
require_once "Sala.php";
require_once "Ingresso.php";
require_once "Cliente.php";

class Filme extends ingresso{
  public $nome;
  private $temp;
  private $gen;
  private $dir;

  public function setName($nom){
    $this->nome = $nom;
  }
  public function setGen($gen){
    $this->gen = $gen;

  }
  public function setTemp($temp){
    $this->temp = $temp;

  }
  public function setDir($dir){
    $this->dir = $dir;

  }
  public function getName(){
    return "\n|Filme: ".$this->nome;

  }
  public function getGen(){
    return "\n|Gênero: ".$this->gen;

  }
  public function getTemp(){
    return "\n|Duração: ".$this->temp ."\n";

  }
  public function getDir(){
    return "\n|Diretor: ".$this->dir;

  }
  
}
