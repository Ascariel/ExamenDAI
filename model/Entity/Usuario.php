<?php
namespace Model\Entity;

use Library\Repository;

class Usuario extends Repository {
  protected $table ='usuario';

  public function getName(){
    return "Nombre de Usuario";
  }

  public function buscarPorID($id){
    $rows = $this->select(['*'], "id=$id");
    return $rows->fetch();
  }  

  public function authenticate(){

  }
}
