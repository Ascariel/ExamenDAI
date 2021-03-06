<?php

namespace Library;

abstract class Controller {

    function get($item, $default=null){
        return (isset($_GET[$item])?$_GET[$item]:$default);
    }

    function post($item, $default=null){
        return (isset($_POST[$item])?$_POST[$item]:$default);
    }

    function isPOST(){
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    function isGET(){
        return $_SERVER['REQUEST_METHOD'] == 'GET';
    }

    function isXmlHttpRequest(){
        return in_array('XMLHttpRequest', array_values(apache_request_headers()));
    }

    function redirect($path){
        header("Location: $path", true, 302); exit;
    }

    function authorizeUser(){
        if (!isset($_SESSION['user'])) {
            $_SESSION['message']='Usuario sin suficientes permisos, ingrese con el rol adecuado';
            // unset($_SESSION['user']);            
            $this->redirect('/frontend/auth/signin?alert=no_autorizado');
        }        
    }

}
