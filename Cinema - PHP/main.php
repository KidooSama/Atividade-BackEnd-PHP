<?php
require_once "Sala.php";
require_once "Ingresso.php";
require_once "Cliente.php";
require_once "Cinema.php";


echo "\nDigite a Qual filme assistir:\n\n1 - Django Livre\n2 - Scott Pilgrim\n3 - Borat 2\n4 - Interestelar\n5 - Finalizar Seção.\n\n";
$i = readline("--> ");

switch ($i) {
  case 5:
      echo "Fim do Programa";
  
  case 1:
   echo "\n|\t\tFILME";
     $django = new Filme();
     $django->setName("Django Livre");
     $django->setGen("Ação");
     $django->setDir("Tarantino");
     $django->setTemp("3 Horas");
  
     echo $django->getName();
     echo $django->getGen();
     echo $django->getDir();
     echo $django->getTemp();

echo "\n|\t\tSALA";
 $sala = new sala();
   $django->setNum("2 - Cinemark");
   $django->setCad("80 Cadeiras");
   $django->setCadDisp("3 Disponíveis");
   echo $django->getNum();
   echo $django->getCad();
   echo $django->getCadDisp();

  echo "\n|\t\tCLIENTE";
 $pessoa = new Cliente();
   $pessoa->setRg_name("Marcus");
   $pessoa->setAge("18");
   $pessoa->setCpf("123.456.789.00");
   echo $pessoa->getRg_name();
   echo $pessoa->getAge();
   echo $pessoa->getCpf();
  echo "\n|\t\tINGRESSO";
 $ingresso = new Ingresso();
  $pessoa->setNum("2 - Cinemark");
  $ingresso->setNumCad(56);
  $ingresso->setPrice(14);
  $ingresso->setDate("25/07/2023");
  echo $pessoa->getNum();
  echo $ingresso->getNumCad();
  echo $ingresso->getPrice();
  echo $ingresso->getDate();

      break;
  
  case 2:
      break;
}
