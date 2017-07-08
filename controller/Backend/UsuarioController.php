<?php
namespace Controller\Backend;

use Library\Controller;
use Model\Entity\Usuario;
use Model\Entity\Atencion;


class UsuarioController extends Controller {
    static $template = 'Layout/base.html.php';


    function indexAction() {
      $this->authorizeUser();

      $query_usuarios = "select * from usuario where rol != 'CLIENTE';";
      $usuarios = (new Usuario)->customQuery($query_usuarios)->fetchAll();
      return ["usuarios" => $usuarios, "title"=>"Listado Usuarios"];
    }
    function newAction(){
      $this->authorizeUser();
      return ['title' => "Ingresar Nueva Usuario"];
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
      $_POST['usuario']['direccion'] = sha1($_POST['usuario']['direccion']);
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

    function estadisticasAction(){
      $clientes = (new Usuario)->customQuery("select * from usuario where rol = 'Cliente'")->fetchAll();

      $query_atenciones = "select id_atencion, valor_hora, hora, fecha, ab.nombre as nombre_abogado, ab.apellido as apellido_abogado, u.nombre as nombre_cliente, u.apellido as apellido_cliente, estado from atencion a, usuario u, abogado ab where a.id_cliente = u.id and a.id_abogado = ab.id;";    
      $atenciones = (new Atencion)->customQuery($query_atenciones)->fetchAll();

      $valor_total_atenciones = 0;
      foreach ($atenciones as $atencion) {
          $valor_total_atenciones += $atencion['valor_hora'];
      }      

      return ['clientes' =>  $clientes, 'atenciones' => $atenciones,  "valor_total_atenciones" => $valor_total_atenciones];
    }

      function vistaClienteAction(){
        $this->authorizeUser();

      $query_usuarios = "select * from usuario where rol = 'CLIENTE'";
      $usuarios = (new Usuario)->customQuery($query_usuarios)->fetchAll();
      return ["usuarios" => $usuarios, "title"=>"Listado Clientes"];
    }

     function clienteCrudAction(){
        $this->authorizeUser();

      $query_usuarios = "select * from usuario where rol = 'CLIENTE'";
      $usuarios = (new Usuario)->customQuery($query_usuarios)->fetchAll();
      return ["usuarios" => $usuarios, "title"=>"Listado Clientes"];
    }
    
    
}
