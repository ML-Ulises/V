<?php
class HTTPHelper {

    # Genera respuesta de error 404
    public static function error_response() {
        header("HTTP/1.1 404 Not Found");
        exit();
    }

    public static function exit_by_forbiden() {
        header("HTTP/1.1 403 Permisos insuficientes");
        exit();
    }

    public static function go($uri='') {
        exit(header("Location: $uri"));
    }

}

?>
