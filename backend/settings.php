<?php
    const PRODUCTION = false;
    ini_set('display_errors', PRODUCTION==false);
    ini_set('display_startup_errors', PRODUCTION==false);
    error_reporting(E_ALL);

    session_start();
    date_default_timezone_set("America/Mexico_City");
    
    const DB_HOST = "localhost";
    const DB_USER = "usuarioX";
    const DB_PASS = "XXXXX";
    const DB_NAME = "bdX";
    const DB_PORT = "3306";

    const APP_DIR = __DIR__ . "/";
    const STATIC_DIR = APP_DIR . "static/";
    const DEFAULT_VIEW = "/static/index.html";

    class Driver { 
        const MYSQL='mysql';
        const POSTGRES='pgsql';
    }

    import('core.db.IPersistence');
    import('core.db.DataBase');
    import('core.db.DAO');
    import('core.db.MySql');
    import('core.db.Postgres');
    import('core.db.ConnectionDB');

    const DB_DRIVER =Driver::MYSQL; #-- driver de mysql por defecto
    require_once "connectioninfo";
    DataBase::setConnectionDB(new MySql(CONNECTION_INFO));

    function import($pathResource='') {
        $file = APP_DIR . str_replace('.', '/', $pathResource);
        if(!file_exists("$file.php")) 
            exit("FATAL ERROR: No module named $pathResource");
        require_once "$file.php";
    }

?>