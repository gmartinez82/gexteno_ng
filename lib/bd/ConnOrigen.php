<?php

class ConnOrigen {

    const bd_origen_servidor = 'localhost';
    const bd_origen_usuario = 'postgres';
    const bd_origen_clave = 'Pa$$w0rd2o1oo';
    //const bd_origen_base = 'gexteno_kya_20220712';
    const bd_origen_base = 'gexteno_ng_produccion_20220722';
    const bd_origen_puerto = '5432';

    public $conn;
    public $s;
    public $u;
    public $c;
    public $err_conn = "No pudo conectarse";

    function __construct() {
        $this->conn = pg_connect("host=" . self::bd_origen_servidor . " port='" . self::bd_origen_puerto . "' user=" . self::bd_origen_usuario . " password=" . self::bd_origen_clave . " dbname=" . self::bd_origen_base);
    }

    public function getVConn($caso) {
        switch ($caso) {
            case "s": $var = Gral::getConfig('bd_servidor');
                break;
            case "u": $var = Gral::getConfig('bd_usuario');
                break;
            case "p": $var = Gral::getConfig('bd_clave');
                break;
        }
        return $var;
    }

    public function getDB() {
        return Gral::getConfig('bd_base');
    }

    public function getConn() {
        return $this->conn;
    }

}

//$conn = new Conn();
?>