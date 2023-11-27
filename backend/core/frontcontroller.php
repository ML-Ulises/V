<?php

import('core.apphandler');
import('helper.mvchelper');
import('helper.httphelper');
import('core.controller');

class FrontController {

    static function start() {
        [$module, $controller, $method, $arg] = ApplicationHandler::handler();

        $fileController = MVCEngineHelper::setName('file', $controller);
        $fileModel = MVCEngineHelper::setName('file', $controller);

        $controller = MVCEngineHelper::setName('controller', $controller);
        $method = MVCEngineHelper::setName('method', $method);

        $fileController  = APP_DIR . "appmodules/$module/controllers/$fileController.php";
        $fileModel = APP_DIR . "appmodules/$module/models/$fileModel.php";

        if(file_exists($fileModel) || file_exists($fileController)) {
            $file = file_exists($fileController) ? $fileController : $fileModel;
            require_once "$file";
            $controller = new $controller($method, $arg);         
        } else {
            HTTPHelper::go(DEFAULT_VIEW);
        }
    }
    
    public static function check_access() {
        [$module, $controller, $method, $arg] = ApplicationHandler::handler();

        if(defined('RESTRICT_ALL_ACCESS')) {
            if(RESTRICT_ALL_ACCESS && ($method != 'user')) {
                //SessionHandler()->check_state(REQUERID_LEVEL);
            }
        }
        
        if(file_exists(APP_DIR . "appmodules/$module/access.php")) {
            require_once APP_DIR . "appmodules/$module/access.php";
        }
    }
}

?>
