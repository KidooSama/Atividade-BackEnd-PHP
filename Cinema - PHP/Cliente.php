<?php

class Cliente extends ingresso{
    public $rg_name;
    protected $age;
    protected $cpf;

    public function setRg_name($rg){
        $this->rg_name = $rg;
        
      }
    public function setAge($age){
        $this->age = $age;
        
      }
    public function setCpf($cpf){
        $this->cpf = $cpf;
        
      }
    public function getRg_name(){
        return "\n|Nome: ".$this->rg_name;
      }
    public function getAge(){
        return "\n|Idade: ".$this->age;
      }
    public function getCpf(){
        return "\n|Cpf: ".$this->cpf."\n";
      }
}