<?php
namespace Controller\Frontend;

use Library\Controller;
use Model\Entity\Usuario;

class AuthController extends Controller
{
    static $template = 'Layout/base.html.php';

    public function indexAction()
    {
        $this->redirect('/frontend/auth/signin');
    }

    public function signinAction()
    {
        if (isset($_SESSION['user'])) {
            $this->redirect('/backend/welcome');
        }
        return [
            'title' => "Ingreso de Usuarios",
        ];
    }

    public function doSigninAction()
    {
        $auth    = $this->post('auth');
        $rut     = str_replace("'", "\'", $auth['rut']);
        $pwd     = $auth['password'];
        $usuario = $this->userExists($rut);

        if (empty($usuario)) {
            // User not found
            $_SESSION['message'] = 'Usuario o password invalidos';
            unset($usuario);
            $this->redirect('/frontend/auth/signin');
        } elseif ($usuario['password'] !== sha1($pwd)) {
            // Invalid Password
            $_SESSION['message'] = 'Usuario o password invalidos';
            unset($usuario);
            $this->redirect('/frontend/auth/signin');
        }
        unset($usuario['password']);
        $_SESSION['user'] = $usuario;
        $_SESSION['rol']  = $usuario['rol'];

        if ($usuario['rol'] == 'ADMINISTRADOR') {
            $this->redirect('/backend/usuario');
        } elseif ($usuario['rol'] == 'SECRETARIA') {
            $this->redirect('/backend/atencion');
        }

        $this->redirect('/backend/welcome');
    }

    public function logoutAction()
    {
        unset($_SESSION['user']);
        unset($_SESSION['rol']);
        $this->redirect('/frontend');
    }

    private function userExists($rut)
    {
        return (new Usuario)->customQuery("select * from usuario where rut = '$rut'")->fetch();
    }

}
