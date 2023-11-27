<?php

class ApplicationHandler {

    private static $uri = '';
    private static $requests = array();

    protected static $module = '';
    protected static $controller = '';
    protected static $action = '';
    protected static $args = '';



    static function handler() {
        self::setUri();
        self::uriToArray();
        self::getComponent();
        self::check();
        return array(self::$module, 
                     self::$controller,
                     self::$action,
                     self::$args
                );
    }

    private static function setUri() {
        $serverUri = $_SERVER['REQUEST_URI'];
        self::$uri = substr($serverUri, 1);
    }

    private static function uriToArray() {
        self::$requests = explode("/", self::$uri);
        if (count(self::$requests)<=3)
            self::$requests[3]=[];
    }

    private static function getComponent() {
        [self::$module, self::$controller, self::$action, self::$args] = self::$requests;

    }

    private static function check() {
        $isEmptyModule = empty(self::$module);
        $isEmptyController = empty(self::$controller);
        $isEmptyAction = empty(self::$action);
        if($isEmptyModule || $isEmptyController || $isEmptyAction) HTTPHelper::go(DEFAULT_VIEW);
    }

}

?>
