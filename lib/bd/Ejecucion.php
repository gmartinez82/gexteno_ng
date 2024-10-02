<?php

class Ejecucion {

    private $conn;
    private $sql;
    private $resultado;
    private $ultimo_id;

    function __construct() {
        $this->conn = new Conn();
    }

    public function getSql() {
        return $this->sql;
    }

    public function setSql($v) {
        $this->sql = $v;
    }

    public function getResultado() {
        return $this->resultado;
    }

    public function getResultadoOne() {
        while ($fila = pg_fetch_array($this->resultado))
            return $fila;
    }

    public function execute() {
        //Gral::wLogSql('ejecucion', $this->sql);
        $this->resultado = pg_query($this->conn->getConn(), $this->sql);
        $fila = pg_fetch_row($this->resultado);
        $this->ultimo_id = $fila[0]; // emula mysql_insert_id()
    }

    public function getUltimoId() {
        return $this->ultimo_id;
    }

}

?>