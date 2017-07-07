<?php
namespace Controller\Backend;

use Library\Controller;


class WelcomeController extends Controller {
    static $template = 'Layout/base.html.php';

    function indexAction(){
    	$this->authorizeUser();
        return [];
    }

    function statsAction(){
    	return [];
    }
}
