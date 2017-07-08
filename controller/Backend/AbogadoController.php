<?php
namespace Controller\Backend;

use Library\Controller;
use Model\Entity\Abogado;


class AbogadoController extends Controller {
    static $template = 'Layout/base.html.php';

    function newAction(){

      return [];
    }

    function indexAction() {
      $this->authorizeUser();

      $query_abogados = "select * from abogado;";
      $abogados = (new Abogado)->customQuery($query_abogados)->fetchAll();
      return ["abogados" => $abogados, "title"=>"Listado Abogados"];
    }

   function createAction(){
      $this->authorizeUser();

      $abogado = new Abogado;
      $abogado->create($_POST["abogado"]);

      $this->redirect('/backend/abogado');
      return ["title" => "Listado Abogados"];
    }

     function deleteAction(){
      $this->authorizeUser();

      $id = $_GET['id'];
      (new Abogado)->delete($id);
      $this->redirect('/backend/abogado?success=true');
    }

	function updateAction(){

      $this->authorizeUser();

      $abogado = new Abogado;
      $id = $_GET['id'];

       var_dump($id);
        var_dump($id);
         var_dump($id);
          var_dump($id);      
      $abogado->update($id, $_POST["abogado"]);

      $this->redirect('/backend/abogado?alert=success');
      return ["title" => "Listado Abogado"];
    }

    function editAction(){
      $this->authorizeUser();

      // $usuario = (new Usuario)->buscarPorID($_GET['id'])
      $id = $_GET['id'];
      $abogado = (new Abogado)->customQuery("select * from abogado where id_abogado = $id")->fetch();
      // $usuario->select('*', "id='$id'")->fetch();
      return ['title' => "Ingresar Nueva Abogado", 'abogado'=> $abogado];
    }    
     
}
