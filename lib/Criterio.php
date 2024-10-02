<?php

class Criterio {

    const IGUAL = "=";
    const LIKE = "LIKE";
    const LIKE_ANY = "LIKE_ANY";
    const DISTINTO = "<>";
    const MENOR = "<";
    const MAYOR = ">";
    const MENORIGUAL = "<=";
    const MAYORIGUAL = ">=";
    const IN = "in";
    const IN_ARRAY = "IN_ARRAY";
    const NOTIN = "not in";
    const IS_NULL = "is null";
    const IS_NOT_NULL = "is not null";
    const SINCOMPARADOR = "";
    const VACIO = "VALOR-VACIO";
    //const IGUAL_SC  = "=";
    //const DISTINTO_SC = "<>";
    //const MENOR_SC = "<";
    //const MAYOR_SC = ">";
    //const MENORIGUAL_SC = "<=";
    //const MAYORIGUAL_SC = ">="; 

    const _OR = "OR";
    const _AND = "AND";
    const _ASC = "ASC";
    const _DESC = "DESC";

    private $var_session;
    private $campo, $valor, $comparador, $concatenador, $separador, $comillas;
    private $col_where = array();
    private $join;
    private $col_join = array();
    private $tablas;
    private $col_order = array();
    private $distinct = true;
    private $ambiguo = false;
    private $col_select = array();
    private $where_init = false;
    private $buscador = '';

    function __construct($var_session = 'CRITERIO_UNICO') {

        if ($var_session == 'CRITERIO_UNICO') {
            //$var_session.= rand(1, 99999);
        }
        $this->var_session = $var_session;
    }

    public function getCampo() {
        return $this->campo;
    }

    public function setCampo($v) {
        $this->campo = $v;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($v) {
        $this->valor = $v;
    }

    public function getComparador() {
        return $this->comparador;
    }

    public function setComparador($v) {
        $this->comparador = $v;
    }

    public function getConcatenador() {
        return $this->concatenador;
    }

    public function setConcatenador($v) {
        $this->concatenador = $v;
    }

    public function getSeparador() {
        return $this->separador;
    }

    public function setComillas($v) {
        $this->comillas = $v;
    }

    public function getComillas() {
        return $this->comillas;
    }

    public function setSeparador($v) {
        $this->separador = $v;
    }
    
    public function getDistinct() {
        if ($this->distinct)
            return "DISTINCT";
        return "";
    }

    public function addDistinct($v) {
        $this->distinct = $v;
    }

    public function addSelect($v) {
        $this->col_select[] = $v;
    }

    public function getSelects() {
        $select_string = "";
        $selects = Gral::getSes($this->var_session . "_SELECT");
        if (is_array($selects)) {
            foreach ($selects as $select) {
                $select_string.= ', ' . $select;
            }
        }
        return $select_string;
    }

    public function getAmbiguo() {
        return ($_SESSION[$this->var_session . "_AMBIGUO"]) ? true : false;
    }

    public function setAmbiguo($v) {
        $this->ambiguo = $v;
    }

    public function getWhereInit() {
        return $this->where_init;
    }

    public function setWhereInit($v) {
        $this->where_init = $v;
    }

    public function setBuscador($v) {
        $this->buscador = $v;
        Gral::setSes($this->var_session . "_BUSCADOR", $this->buscador);
    }

    public function getBuscador() {
        return Gral::getSes($this->var_session . "_BUSCADOR");
    }    

    public function add($campo, $valor, $comparador, $indice = false, $concatenador = 'AND', $comillas = true) {
        $arr = array("campo" => $campo, "valor" => $valor, "comparador" => $comparador, "concatenador" => $concatenador, "comillas" => $comillas);
        if (!$indice)
            $this->col_where[] = $arr;
        else
            $this->col_where[$indice] = $arr;
    }

    public function addTrueInicialEnWhere() {
        $this->add('', 'true', '', false, self::_AND);
    }

    public function addInicioSubconsulta() {
        $arr = array('separador' => '(');
        $this->col_where[] = $arr;
    }

    public function addFinSubconsulta() {
        $arr = array('separador' => ')');
        $this->col_where[] = $arr;
    }

    public function addJoin($j1, $j2) {
        $this->col_join[] = $j1 . " = " . $j2;
    }

    public function getJoin() {
        $col_join = Gral::getSes($this->var_session . "_JOIN");
        return $col_join;
    }

    // nuevo, etapa de test
    public function addRealJoin($tabla, $j1, $j2, $tipo = 'JOIN') {
        $this->col_join[] = ' ' . $tipo . " " . $tabla . " on (" . $j1 . " = " . $j2 . ")";
    }

    public function addTabla($tabla) {
        $this->tablas = $tabla;
    }

    public function getTablas() {
        $tablas = Gral::getSes($this->var_session . "_TABLAS");
        return $tablas;
    }

    public function setCriterios($col = true) {
        if ($col) {
            Gral::setSes($this->var_session, $this->col_where); /* Se guarda en session el criterio de busqueda */
            Gral::setSes($this->var_session . "_TABLAS", $this->tablas); /* Se guarda en session el criterio de busqueda */
            Gral::setSes($this->var_session . "_JOIN", $this->col_join); /* Se guarda en session el criterio de busqueda */
            Gral::setSes($this->var_session . "_ORDEN", $this->col_order); /* Se guarda en session el orden de busqueda */
            Gral::setSes($this->var_session . "_AMBIGUO", $this->ambiguo); /* Se guarda en session el orden de busqueda */
            Gral::setSes($this->var_session . "_SELECT", $this->col_select); /* Se guarda en session el orden de busqueda */
        } else {
            $col_where = array();
            $col_join = array();
            Gral::setSes($this->var_session, $col_where); /* Se limpia en session el criterio de busqueda */
            Gral::setSes($this->var_session . "_TABLAS", ""); /* Se limpia en session el criterio de busqueda */
            Gral::setSes($this->var_session . "_JOIN", $col_join); /* Se limpia en session el criterio de busqueda */
            Gral::setSes($this->var_session . "_AMBIGUO", false); /* Se guarda en session el orden de busqueda */
            Gral::setSes($this->var_session . "_SELECT", ""); /* Se guarda en session el orden de busqueda */
        }
    }

    public function setTabla() {
        Gral::setSes($this->var_session . "_TABLAS", $this->tablas);
    }

    public function setOrden() {
        Gral::setSes($this->var_session . "_ORDEN", $this->col_order); /* Se guarda en session el criterio de busqueda */
    }

    public function setCriteriosInicial() {
        if (!isset($_SESSION[$this->var_session])) {
            Gral::setSes($this->var_session, $this->col_where);
        }
        if (!isset($_SESSION[$this->var_session . "_TABLAS"]))
            Gral::setSes($this->var_session . "_TABLAS", $this->tablas);
        if (!isset($_SESSION[$this->var_session . "_JOIN"]))
            Gral::setSes($this->var_session . "_JOIN", $this->col_join);
        if (!isset($_SESSION[$this->var_session . "_AMBIGUO"]))
            Gral::setSes($this->var_session . "_AMBIGUO", false);
        if (!isset($_SESSION[$this->var_session . "_SELECT"]))
            Gral::setSes($this->var_session . "_SELECT", "");
    }

    public function getCriterios() {
        $col_where = Gral::getSes($this->var_session);
        if (!is_array($col_where)) {
            $col_where = array(); /* Se inicializa si no esta cargada en session */
        }
        $criterios = array();

        foreach ($col_where as $i => $cri) {
            $agrega = false;

            // -----------------------------------------------------------------
            // se agrega si es comparacion de datos
            // -----------------------------------------------------------------
            $comparador = $cri['comparador'];
            $valor = $cri['valor'];

            if (trim($valor) != "" || $valor == self::VACIO) {
                $agrega = true;
            }
            
            // ------------------------------------------------------------------
            // si es un array  y se esta intenando hacer un IN
            // ------------------------------------------------------------------
            if(is_array($valor) && $comparador == self::IN_ARRAY){
                if(count($valor) > 0){
                    $valor = '('.implode(',', $valor).')';                    
                }else{
                    $valor = '(0)';
                }
                $agrega = true;
            }
            //Gral::pr($valor, 'valor');
            //Gral::pr($comparador, 'comparador');

            if ($agrega) {
                if ($valor === self::VACIO) {
                    $valor = "";
                }
                $criterio = new Criterio($this->var_session);
                $criterio->setCampo($cri['campo']);
                $criterio->setValor($valor);
                $criterio->setComparador($cri['comparador']);
                $criterio->setConcatenador($cri['concatenador']);
                $criterio->setComillas($cri['comillas']);

                $criterios[$i] = $criterio;
            }

            // -----------------------------------------------------------------
            // se agrega si es separador de subconsulta
            // -----------------------------------------------------------------
            $agrega_separador_subconsulta = false;
            if(array_key_exists('separador', $cri)){
                $valor = $cri['separador'];
                if (trim($cri['separador']) != ""){
                    $agrega_separador_subconsulta = true;
                }
            }
            if ($agrega_separador_subconsulta) {
                $criterio = new Criterio($this->var_session);
                $criterio->setSeparador($cri['separador']);

                $criterios[$i] = $criterio;
            }
        }

        return $criterios;
    }

    public function getWhere($group = true) {
        /* ----------------------------------------------------------- */
        $where = "";
        $joins = $this->getJoin();
        if (!$joins)
            $joins = array();

        $real_join = '';
        $join = "";
        $i = 0;
        foreach ($joins as $j) {
            $i++;
            $sep = " AND ";
            //if($i > 1) $sep = " AND ";

            if (stripos(strtoupper($j), 'JOIN')) {
                $real_join .= $j;
            } else {
                $join .= $j . $sep;
            }
        }
        //Gral::pr($join);

        /* ----------------------------------------------------------- */
        // se agrega join real
        $where .= $real_join;
        /* ----------------------------------------------------------- */

        $criterios = $this->getCriterios();
        $i = 0;
        $separador_subconsulta = '';
        foreach ($criterios as $c) {
            $i++;

            //$c->setValor(str_replace("*", "%", $c->getValor()));

            // se agregan comodines de LIKE (%) automaticamente
            if ($c->getComparador() == 'LIKE' || $c->getComparador() == 'LIKE_ANY') {

                $c->setValor(str_replace("*", "%", $c->getValor()));

                $palabras = $c->getValor();
                $arr_palabras = explode(' ', $palabras);
                $arr_palabras_formateada = array();

                foreach ($arr_palabras as $palabra) {
                    //$palabra = html_entity_decode($palabra);

                    $palabra = "'%" . $palabra . "%'";

                    $palabra = utf8_encode($palabra); // habilitar para LAE, ahora funciona en local
                    $palabra = utf8_decode($palabra);
                    $palabra = mb_strtoupper($palabra);
                    //$palabra = utf8_encode($palabra); // deshabilitar para LAE, ahora funciona en local
                    //Gral::pr($palabra);
                    $arr_palabras_formateada[] = $palabra;
                }
                $string_de_palabras = implode(',', $arr_palabras_formateada);

                if ($c->getComparador() == 'LIKE'){
                    $c->setValor(" ALL (array[" . $string_de_palabras . "])");
                }
                if ($c->getComparador() == 'LIKE_ANY'){
                    $c->setValor(" ANY (array[" . $string_de_palabras . "])");
                }
            }

            if ($i == 1)
                $where .= " WHERE";
            else
                $where .= ' ' . $c->getConcatenador();
            $where .= $separador_subconsulta;

            // se controla si es o no separador de subconsulta
            if ($c->getSeparador() == '(') { // es separador de subconsulta
                $separador_subconsulta = ' ' . $c->getSeparador();
                continue;
            } elseif ($c->getSeparador() == ')') {
                $where .= ")";
            } else {
                $separador_subconsulta = '';
            }

            $comilla = self::getUsaComilla($c->getComparador(), $c->getValor(), $c->getComillas());
            if ($c->getComparador() == 'LIKE') {
                //$where .= " " . $join . " to_ascii(upper(" . $c->getCampo() . "::varchar), 'latin1') " . $c->getComparador() . " " . $comilla . strtoupper($c->getValor()) . $comilla;
                $where .= " " . $join . " upper(" . $c->getCampo() . "::varchar) " . $c->getComparador() . " " . $comilla . strtoupper($c->getValor()) . $comilla;
            } elseif($c->getComparador() == 'LIKE_ANY'){
                $where .= " " . $join . " upper(" . $c->getCampo() . "::varchar) LIKE " . $comilla . strtoupper($c->getValor()) . $comilla;
            } elseif($c->getComparador() == self::IN_ARRAY){
                $where .= " " . $join . " " . $c->getCampo() . " IN " . $c->getValor();
            } else {
                $where .= " " . $join . " " . $c->getCampo() . " " . $c->getComparador() . " " . $comilla . $c->getValor() . $comilla;
            }
        }
        //if($group) $where .= " GROUP BY 1";
        return $where;
    }

    public function getHaving() {
        /* ----------------------------------------------------------- */
        $criterios = $this->getCriterios();
        $having = "";
        $i = 0;
        foreach ($criterios as $c) {
            $i++;
            $c->setValor(str_replace("*", "%", $c->getValor()));
            if ($i == 1)
                $sep = "HAVING";
            else
                $sep = "AND";
            $having .= " " . $sep . " " . $c->getCampo() . " " . $c->getComparador() . " '" . $c->getValor() . "'";
        }
        return $having;
    }

    public function getValorDeCampo($campo) {
        $criterios = $this->getCriterios();
        //Gral::pr(count($criterios),"cant");
        $valor = "";
        foreach ($criterios as $c) {
            if (trim($c->getCampo()) == trim($campo))
                $valor = $c->getValor();
        }
        return $valor;
    }

    /* setea un campo al criterio en session */

    public function setValorDeCampo($campo, $valor) {
        $col_where = Gral::getSes($this->var_session);
        foreach ($col_where as $i => &$v) {
            if ($v['campo'] == $campo) {
                $v['valor'] = $valor;
            }
            if ($i == $campo) {
                $v['valor'] = $valor;
            }
        }
        Gral::setSes($this->var_session, $col_where);
    }

    /* borra un campo del criterio en session */

    public function delCriterio($campo) {
        $this->setValorDeCampo($campo, '');
    }

    public function getValorDeCampoXPos($posicion) {
        $criterios = $this->getCriterios();
        $c = $criterios[$posicion];

        foreach ($criterios as $i => $c) {
            if ((string) $i == (string) $posicion)
                return $c->getValor();
        }
        return;
    }

    public function getComparadorDeCampo($campo) {
        $criterios = $this->getCriterios();
        //Gral::pr(count($criterios),"cant");
        $valor = "";
        foreach ($criterios as $c) {
            if (trim($c->getCampo()) == trim($campo))
                $valor = $c->getComparador();
        }
        return $valor;
    }

    public function getComparadorDeCampoXPos($posicion) {
        $criterios = $this->getCriterios();
        $c = $criterios[$posicion];

        foreach ($criterios as $i => $c) {
            if ($i == $posicion)
                return $c->getComparador();
        }
        return;
    }

    public function getComparadorDescripcion($p_comparador) {
        foreach (self::getArrComparadores() as $comparador) {
            if ($p_comparador == $comparador['comparador'])
                return $comparador['label'];
        }
        return $p_comparador;
    }

    // order by
    public function addOrden($campo, $orden = self::_ASC) {
        $this->col_order[$campo] = $orden;
    }

    public function getOrden() {
        $orden = '';
        $i = 0;

        $col_order = Gral::getSes($this->var_session . '_ORDEN');
        if (is_array($col_order)) {
            foreach ($col_order as $campo => $ord) {
                $i++;
                if ($i == 1)
                    $sep = ' ORDER BY';
                else
                    $sep = ',';
                $orden .= $sep . ' ' . $campo . ' ' . $ord;
            }
        }
        if ($i == 0)
            $orden = ' ORDER BY 1 DESC';
        return $orden;
    }

    public function getOrdenDato($valor = 'campo') {
        $col_order = Gral::getSes($this->var_session . '_ORDEN');

        if (is_array($col_order)) {
            foreach ($col_order as $campo => $ord) {
                switch ($valor) {
                    case 'campo': return $campo;
                    case 'tipo': return $ord;
                }
            }
        }
        switch ($valor) {
            case 'campo': return '1';
            case 'tipo': return 'desc';
        }
    }

    public function getUsaComilla($comparador, $valor, $comillas) {
        $comilla = "'";
        if ($comparador == self::IN)
            $comilla = "";
        if ($comparador == self::NOTIN)
            $comilla = "";
        if ($comparador == self::IS_NULL)
            $comilla = "";
        if ($comparador == self::IS_NOT_NULL)
            $comilla = "";
        if ($comparador == self::SINCOMPARADOR)
            $comilla = "";
        if ($comparador == self::LIKE)
            $comilla = "";
        if ($comparador == self::LIKE_ANY)
            $comilla = "";

        //if($comparador == self::DISTINTO_SC) $comilla = "";

        if ($valor == 'null')
            $comilla = "";
        if (!$comillas)
            $comilla = "";

        return $comilla;
    }

    static function getArrComparadores() {
        $array = array(
            array('comparador' => Criterio::IGUAL, 'label' => 'Igual a'),
            array('comparador' => Criterio::LIKE, 'label' => 'Contiene a'),
            array('comparador' => Criterio::LIKE_ANY, 'label' => 'Contiene alguno'),
            array('comparador' => Criterio::DISTINTO, 'label' => 'Distinto a'),
            array('comparador' => Criterio::MAYOR, 'label' => 'Mayor a'),
            array('comparador' => Criterio::MAYORIGUAL, 'label' => 'Mayor o Igual a'),
            array('comparador' => Criterio::MENOR, 'label' => 'Menor a'),
            array('comparador' => Criterio::MENORIGUAL, 'label' => 'Menor o Igual a'),
        );
        return $array;
    }

    /* M�todo getComparadores para select */

    static function getComparadoresCmb() {
        $cont = 0;
        $arr = array();

        foreach (self::getArrComparadores() as $comparador) {
            $cont++;
            $arr[$cont]['cod'] = $comparador['comparador'];
            $arr[$cont]['descripcion'] = $comparador['label'];
        }
        return $arr;
    }

}

?>