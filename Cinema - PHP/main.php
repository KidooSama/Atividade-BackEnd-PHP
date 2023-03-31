<?php
require_once "Sala.php";
require_once "Ingresso.php";
require_once "Cliente.php";
require_once "Cinema.php";


echo "\n______________________\n|-Digite a Qual filme|\n|assistir:\t\t\t |\n|                    |\n|1 - Django Livre\t |\n|2 - Scott Pilgrim\t |\n|3 - Borat 2\t\t |\n|4 - Interestelar    |\n|5 - Finalizar Seção.|\n|____________________|\n\n";
$i = readline("--> ");

switch ($i) {
  case 5:
      echo "Fim do Programa";
  break;
  
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
       $sala->setNum("1 - Cinemark");
       $sala->setCad(80);
       $sala->setCadDisp(3);
  
       echo $sala->getNum();
       echo $sala->getCad();
       echo $sala->getCadDisp();
  
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
        $pessoa->setNum("1 - Cinemark");
        $ingresso->setNumCad(56);
        $ingresso->setPrice(14);
        $ingresso->setDate("25/07/2023");
    
        echo $pessoa->getNum();
        echo $ingresso->getNumCad();
        echo $ingresso->getPrice();
        echo $ingresso->getDate();
    
          break;
  
  case 2:
     echo "\n|\t\tFILME";
     $scott = new Filme();
     $scott->setName("Scott Pilgrim - Contra o Mundo");
     $scott->setGen("Ação/Comédia");
     $scott->setDir("Edgar Wright");
     $scott->setTemp(10);
  
     echo $scott->getName();
     echo $scott->getGen();
     echo $scott->getDir();
     echo $scott->getTemp();

    echo "\n|\t\tSALA";
       $sala = new sala();
       $sala->setNum("2 - Cinemark");
       $sala->setCad(100);
       $sala->setCadDisp(0);
       echo $sala->getNum();
       echo $sala->getCad();
       echo $sala->getCadDisp();
    
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
  
  case 3:
  
  echo "\n|\t\tFILME";
   $scott = new Filme();
     $scott->setName("Borat 2");
     $scott->setGen("Comédia");
     $scott->setDir("Edgar Wright");
     $scott->setTemp(10);
  
     echo $scott->getName();
     echo $scott->getGen();
     echo $scott->getDir();
     echo $scott->getTemp();

    echo "\n|\t\tSALA";
    $sala = new sala();
       $sala->setNum("3 - Cinemark");
       $sala->setCad(80);
       $sala->setCadDisp(20);
       echo $sala->getNum();
       echo $sala->getCad();
       echo $sala->getCadDisp();
    
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
      $pessoa->setNum("3 - Cinemark");
      $ingresso->setNumCad(56);
      $ingresso->setPrice(14);
      $ingresso->setDate("25/07/2023");
      echo $pessoa->getNum();
      echo $ingresso->getNumCad();
      echo $ingresso->getPrice();
      echo $ingresso->getDate();

      break;
  
    case 4:
  
  echo "\n|\t\tFILME";
   $scott = new Filme();
     $scott->setName("Interestelar");
     $scott->setGen("Sci-Fi\Drama");
     $scott->setDir("Christopher Nolan");
     $scott->setTemp(10);
  
     echo $scott->getName();
     echo $scott->getGen();
     echo $scott->getDir();
     echo $scott->getTemp();

    echo "\n|\t\tSALA";
    $sala = new sala();
       $sala->setNum("4 - Cinemark");
       $sala->setCad(150);
       $sala->setCadDisp(8);
       echo $sala->getNum();
       echo $sala->getCad();
       echo $sala->getCadDisp();
    
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
      $pessoa->setNum("4 - Cinemark");
      $ingresso->setNumCad(56);
      $ingresso->setPrice(14);
      $ingresso->setDate("25/12/2063");
      echo $pessoa->getNum();
      echo $ingresso->getNumCad();
      echo $ingresso->getPrice();
      echo $ingresso->getDate();

      break;
}
