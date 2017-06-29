<?php
namespace Controller\Backend;

use Library\Controller;
use Model\Entity\Usuario;
use Model\Entity\Solicitud;


class SolicitudController extends Controller {
    static $template = 'Layout/base.html.php';


    function indexAction() {
      $this->authorizeUser();

      $query_solicitudes = "select * from usuario;";
      $solicitudes = (new Solicitud)->customQuery($query_solicitudes)->fetchAll();
      return ["solicitudes" => $solicitudes, "title"=>"Listado Solicitudes"];
    }
    function newAction(){
      $this->authorizeUser();
      $clientes = (new Usuario)->customQuery("select * from usuario where rol = 'CLIENTE'")->fetch_all();
      $abogados = (new Usuario)->customQuery("select * from usuario where rol = 'ABOGADO'")->fetch_all();
      return ['title' => "Ingresar Nueva Solicitud", 'abogados' => $abogados, 'clientes' => $clientes];
    }

    function editAction(){
      $this->authorizeUser();

      $id = $_GET['id'];
      $solicitud = (new Solicitud)->customQuery("select * from solicitud where id = $id")->fetch();
      $cliente = (new Usuario)->customQuery("select * from usuario where id = $id and rol = 'CLIENTE' ")->fetch_all();
      $abogado = (new Usuario)->customQuery("select * from usuario where id = $id and rol = 'ABOGADO'")->fetch_all();
      return ['title' => "Ingresar Nueva Categoria", 'usuario'=> $usuario];
    }    

    function updateAction(){

      $this->authorizeUser();

      $solicitud = new Solicitud;
      $id = $_GET['id'];  
      $solicitud->update($id, $_POST["solicitud"]);

      $this->redirect('/backend/solicitud?alert=success');
      return ["title" => "Listado Solicitudes"];
    }


    function createAction(){
      $this->authorizeUser();

      $_POST['usuario']['password'] = sha1($_POST['usuario']['password']);
      $usuario = new Usuario;
      $usuario->create($_POST["usuario"]);

      $this->redirect('/backend/usuario');
      return ["title" => "Listado Categorias"];
    }
    function deleteAction(){
      $this->authorizeUser();

      $id = $_GET['id'];
      (new Usuario)->delete($id);
      $this->redirect('/backend/usuario?success=true');
    }
    // Vista Temporal Categorias hasta que unamos todo el codigo en una vista
    function showAction(){
      $this->authorizeUser();
      $category = new Category;
      $categories = $category->select(["nombre", "id"]);
      $c2 =$category->select(["nombre", "id"]);
      return ["categories" => $categories, "c2" => $c2 , "title"=>"Listado Categorias"];
    }

    
}
