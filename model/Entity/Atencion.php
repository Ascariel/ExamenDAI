<?php
namespace Model\Entity;

use Library\Repository;

class Atencion extends Repository {
    protected $table = 'atencion';

    public function getAtencionById($id){
      $rows = $this->select(['*'], "id=$id");
      return $rows->fetch();
    }

}
