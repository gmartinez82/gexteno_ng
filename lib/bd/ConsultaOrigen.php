<?php

class ConsultaOrigen {

    private $conn;
    private $sql;
    private $resultado;
    private $registros;
    private $pagina;
    private $total;

    function __construct() {
        $this->conn = new ConnOrigen();
    }

    public function getSql() {
        $sql = $this->sql;

        if ((int) $this->registros != 0) {
            $desde = ($this->pagina - 1) * $this->registros;
            $sql .= " LIMIT " . $this->registros . " OFFSET " . $desde;
        }

        return $sql;
    }

    public function setSql($v) {
        $this->sql = $v;
    }

    public function getResultado() {
        return $this->resultado;
    }

    // retorna el recordset completo de la consulta

    public function getResultadoOne() {
        while ($fila = pg_fetch_array($this->resultado))
            return $fila;
    }
    
    public function execute() {
        //$this->execute_v1();
        $this->execute_v2();
    }

    /*
     * Version del execute tal como se usaba antes
     * Se utiliza para algunas llamadas particulares
     */
    public function execute_v1() {
        //Gral::wLogSql('consulta', $this->sql);

        $sql = $this->sql;
        //$sql = str_replace('.*', '.id', $sql);

        $this->resultado = pg_exec($this->conn->getConn(), $sql);
        $this->total = pg_num_rows($this->resultado);

        if ($this->registros != 0) {
            $this->resultado = pg_exec($this->conn->getConn(), $this->getSql());
        }
        
        /*
        $pos = strpos($sql, 'FROM tal_tarea_asignada ');
        if ($pos !== false) {
            Gral::pr($sql);
            Gral::pr($this->getSql());
        }
        */
    }
    
    /*
     * Version del execute nueva y optimizada
     */
    public function execute_v2() {

        if ($this->registros != 0) {
            $this->setTotal();
            $this->resultado = pg_exec($this->conn->getConn(), $this->getSql());
        } else {
            $this->resultado = pg_exec($this->conn->getConn(), $this->getSql());
            $this->total = pg_num_rows($this->resultado);
        }
    }

    public function execute_OLDXXX() {
        //Gral::wLogSql('consulta', $this->getSql());

        if ((int) $this->registros == 0) {
            $this->resultado = pg_exec($this->conn->getConn(), $this->sql);
            $this->total = pg_num_rows($this->resultado);
        } else {
            //$this->resultado = pg_exec($this->conn->getConn(), $this->sql);
            $this->resultado = pg_exec($this->conn->getConn(), str_replace('*', 'id', $this->sql));
            $this->total = pg_num_rows($this->resultado);
            $this->resultado = pg_exec($this->conn->getConn(), $this->getSql());
        }
    }

    public function setPaginacion($registros, $pagina) {
        $this->registros = $registros;
        $this->pagina = $pagina;
    }

    public function getTotal() {
        return $this->total;
    }

    public function setTotal() {

        $sql_original = $this->sql;
        //Gral::pr($sql_original);

        $arr_sql = explode('FROM', $sql_original, 2);
        $segunda_cadena = trim($arr_sql[1]);

        $arr_segunda_cadena = explode(' ', $segunda_cadena, 2);
        $tabla = trim($arr_segunda_cadena[0]);

        $arr_segunda_cadena_order_by = explode('ORDER BY', $segunda_cadena);
        $segunda_cadena_sin_order_by = trim($arr_segunda_cadena_order_by[0]);

        $sql_procesado = 'SELECT count(DISTINCT ' . $tabla . '.id) cantidad FROM ' . $segunda_cadena_sin_order_by;
        //Gral::pr($sql_procesado);

        $this->resultado = pg_exec($this->conn->getConn(), $sql_procesado);
        $fila = pg_fetch_array($this->resultado);
        //Gral::pr($fila['cantidad']);

        $this->total = $fila['cantidad'];
        
        /*
        $pos = strpos($sql_original, 'FROM pde_pedido ');
        if ($pos !== false) {
            Gral::pr($sql_original);
            Gral::pr($sql_procesado);
        }
        */
    }

}

?>