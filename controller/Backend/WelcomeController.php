<?php
namespace Controller\Backend;

use Library\Controller;
use Model\Company;
use Model\User;


class WelcomeController extends Controller {
    static $template = 'Layout/base.html.php';

    function indexAction(){
    	$this->authorizeUser();
        return [];
    }
}
