<?php
namespace Controller\Backend;

use Library\Controller;
use Model\Entity\Usuario;


class UsuarioController extends Controller {
    static $template = 'Layout/base.html.php';


    function indexAction() {
      $this->authorizeUser();

      $query_usuarios = "select * from usuario;";
      $usuarios = (new Usuario)->customQuery($query_usuarios)->fetchAll();
      return ["usuarios" => $usuarios, "title"=>"Listado Usuarios"];
    }
    function newAction(){
      $this->authorizeUser();
      return ['title' => "Ingresar Nueva Categoria"];
    }

    function editAction(){
      $this->authorizeUser();

      // $usuario = (new Usuario)->buscarPorID($_GET['id'])
      $id = $_GET['id'];
      $usuario = (new Usuario)->customQuery("select * from usuario where id = $id")->fetch();
      // $usuario->select('*', "id='$id'")->fetch();
      return ['title' => "Ingresar Nueva Categoria", 'usuario'=> $usuario];
    }    

    function updateAction(){

      $this->authorizeUser();

      $usuario = new Usuario;
      $id = $_GET['id'];

       var_dump($id);
        var_dump($id);
         var_dump($id);
          var_dump($id);      
      $usuario->update($id, $_POST["usuario"]);

      $this->redirect('/backend/usuario?alert=success');
      return ["title" => "Listado Categorias"];
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
