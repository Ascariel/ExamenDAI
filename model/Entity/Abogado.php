<?php
namespace Model\Entity;

use Library\Repository;

class Abogado extends Repository {
  protected $table ='abogado';

  public function getName(){
    return "Nombre de Usuario";
  }

  public function buscarPorID($id){
    $rows = $this->select(['*'], "id=$id");
    return $rows->fetch();
  }  

  // public function authenticate(){

  // }
}
