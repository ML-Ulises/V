<?php
import('appmodules.users.models.user');
import('appmodules.users.views.user');

#[AllowDynamicProperties]
class UserController extends Controller {
    function add(){
        $this->view->add();
    }
    function save(){
        $dataArrived =  $_POST;
        $this->view->show($dataArrived);
    }
}
?>
