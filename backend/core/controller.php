<?php
import('helper.httphelper');

abstract class Controller {

    public function __construct($method='', $arg='') {
        $this->model = MVCEngineHelper::getModel($this); 
        $this->view = MVCEngineHelper::getView($this);
        if(method_exists($this, $method)) {
            call_user_func([$this, $method], $arg); 
        } else {
            HTTPHelper::go(DEFAULT_VIEW);
        }
    }
}
?>
