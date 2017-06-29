<?php
namespace Model\Entity;

use Library\Repository;

class Solicitud extends Repository {
    protected $table = 'solicitud';

    public function getSolicitudById($id){
      $rows = $this->select(['*'], "id=$id");
      return $rows->fetch();
    }

}
