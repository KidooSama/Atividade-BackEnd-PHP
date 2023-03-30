<?php
require_once "Sala.php";
require_once "Ingresso.php";

// FILMES
class Filme extends ingresso{

  public $nome;
  private $temp;
  private $gen;
  private $dir;

  // public function __construct($nom,$temp,$gen,$dir){
  //   $this->nome = $nom;
  //   
  //   
  //   $this->dir = $dir;
  // }
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
    // return "O é ".$this->nome."\nTem ".$this->temp." Hora de duração "."\nO gênero é ".$this->gen."\nE seu diretor é ".$this->dir."\n";
    return "Filme: ".$this->nome;

  }
  public function getGen(){
    return $this->gen  ;

  }
  public function getTemp(){
    return $this->temp ;

  }
  public function getDir(){
    return $this->dir ;

  }
  
}


// PRINT FINAL

 $django = new Filme();//"Django Livre",1, "Comédia", "Tarantino");
  $django->setName("Django Livre");
  $django->setGen("Ação");
  $django->setDir("Tarantino");
  $django->setTemp("3 Horas");
  $django->setIng("14 Reais");
  $django->setCad("80 Cadeiras");
  $django->setCadDisp("3 Disponíveis");
  echo $django->getName();
  echo $django->getGen();
  echo $django->getDir();
  echo $django->getTemp();
  echo $django->getIng();
  echo $django->getCad();