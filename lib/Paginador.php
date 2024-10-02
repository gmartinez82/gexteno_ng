<?php

class Paginador {

    private $registros, $pagina, $total;
    private $rango = 1;

    function __construct($registros = NULL, $pagina = NULL) {
        $this->registros = $registros;
        $this->pagina = $pagina;
    }

    public function getRegistros() {
        return $this->registros;
    }

    public function setRegistros($v) {
        $this->registros = $v;
    }

    public function getPagina() {
        return $this->pagina;
    }

    public function setPagina($v) {
        $this->pagina = $v;
    }

    public function getTotal() {
        return $this->total;
    }

    public function setTotal($v) {
        $this->total = $v;
    }

    public function getRango() {
        return $this->rango;
    }

    public function setRango($v) {
        $this->rango = $v;
    }

    public function getPaginas() {
        if ($this->registros == 0)
            return 1;
        return ceil($this->total / $this->registros);
    }

    public function getInicio($rango = false) {
        if ($rango) {
            $inicio = $this->pagina - $this->rango;
            if ($inicio <= 0)
                $inicio = 1;
            return $inicio;
        }
        return 1;
    }

    public function getFin($rango = false) {
        if ($rango) {
            $fin = $this->pagina + $this->rango;
            if ($fin > $this->getPaginas())
                $fin = $this->getPaginas();
            return $fin;
        }
        return $this->getPaginas();
    }
    
    public function getPaginaSiguiente(){
        $pagina = $this->getPagina();
        $registros = $this->getRegistros();
        $total = $this->getTotal();
        
        $cantidad_paginas = $this->getCantidadPaginas();
        
        if($pagina >= $cantidad_paginas){
            return -1;
        }
        return $pagina + 1;
    }

    public function getCantidadPaginas(){
        $pagina = $this->getPagina();
        $registros = $this->getRegistros();
        $total = $this->getTotal();
        
        $cantidad_paginas = ceil($total / $registros);
        
        return $cantidad_paginas;
    }
    
}

?>