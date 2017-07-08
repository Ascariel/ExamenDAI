<?php
namespace Controller\Backend;

use Library\Controller;
use Model\Entity\Usuario;
use Model\Entity\Atencion;
use Model\Entity\Abogado;


class AtencionController extends Controller {
    static $template = 'Layout/base.html.php';


    function indexAction() {
      $this->authorizeUser();

      $query_atenciones = "select id_atencion, hora, fecha, ab.nombre as nombre_abogado, ab.apellido as apellido_abogado, u.nombre as nombre_cliente, u.apellido as apellido_cliente, estado from atencion a, usuario u, abogado ab where a.id_cliente = u.id and a.id_abogado = ab.id_abogado;";
      $atenciones = (new Atencion)->customQuery($query_atenciones)->fetchAll();
      return ["atenciones" => $atenciones, "title"=>"Listado Atenciones"];
    }
    function newAction(){
      $this->authorizeUser();
      $clientes = (new Usuario)->customQuery("select * from usuario where rol = 'CLIENTE'")->fetchAll();
      $abogados = (new Abogado)->customQuery("select * from abogado");
      // return ['title' => "Ingresar Nueva Atencion", 'abogados' => $abogados, 'clientes' => $clientes];
      return ['clientes' => $clientes, 'abogados'=> $abogados];
    }

    function editAction(){
      $this->authorizeUser();

      $id = $_GET['id'];
      $atencion = (new Atencion)->customQuery("select * from atencion where id = $id")->fetch();
      $cliente = (new Usuario)->customQuery("select * from usuario where id = $id and rol = 'CLIENTE' ")->fetch_all();
      $abogado = (new Usuario)->customQuery("select * from usuario where id = $id and rol = 'ABOGADO'")->fetch_all();
      return ['title' => "Ingresar Nueva Categoria", 'usuario'=> $usuario];
    }    

    function updateAction(){

      $this->authorizeUser();

      $atencion = new Atencion;
      $id = $_GET['id'];  
      $atencion->update($id, $_POST["atencion"]);

      $this->redirect('/backend/atencion?alert=success');
      return ["title" => "Listado Atenciones"];
    }


    function createAction(){
      $this->authorizeUser();


      $atencion = new Atencion;
      $atencion->create($_POST["atencion"]);

      $this->redirect('/backend/atencion');
      return ["title" => "Listado Categorias"];
    }
    function deleteAction(){
      $this->authorizeUser();

      $id = $_GET['id'];
      (new Atencion)->delete($id);
      $this->redirect('/backend/atencion?success=true');
    }

    function anularAction(){
      $this->authorizeUser();

      $atencion = new Atencion;

      $id = $_GET['id'];  
      // $estado['estado'] = 'Anulada';
      (new Atencion)->customQuery("update atencion set estado = 'Anulada' where id_atencion = $id");

      // $atencion->update($id, $estado);

      $this->redirect('/backend/atencion?success=true');
    }    
    // Vista Temporal Categorias hasta que unamos todo el codigo en una vista
    function showAction(){
      $this->authorizeUser();
      $category = new Category;
      $categories = $category->select(["nombre", "id"]);
      $c2 =$category->select(["nombre", "id"]);
      return ["categories" => $categories, "c2" => $c2 , "title"=>"Listado Categorias"];
    }

    function confirmarAction(){
      $this->authorizeUser();

      $atencion = new Atencion;

      $id = $_GET['id'];  
      // $estado['estado'] = 'Anulada';
      (new Atencion)->customQuery("update atencion set estado = 'Confirmada' where id_atencion = $id");

      // $atencion->update($id, $estado);

      $this->redirect('/backend/atencion?success=true');
    }   

    function perdidaAction(){
      $this->authorizeUser();

      $atencion = new Atencion;

      $id = $_GET['id'];  
      // $estado['estado'] = 'Anulada';
      (new Atencion)->customQuery("update atencion set estado = 'Perdida' where id_atencion = $id");

      // $atencion->update($id, $estado);

      $this->redirect('/backend/atencion?success=true');
    }       
    
}
