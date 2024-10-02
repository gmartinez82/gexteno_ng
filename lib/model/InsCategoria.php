<?php

require_once "base/BInsCategoria.php";

class InsCategoria extends BInsCategoria {

    const GEN_ARBOL_SEPARADOR = ' ➔ ';
    const GEN_ARBOL_SEPARADOR_CODIGO = '-';

    /*
     * Control de InsCategoria 
     */

    public function control() {
        $error = new DbError();

        // descripcion
        if (!Ctrl::esVacio($this->getDescripcion())) {
            if (Ctrl::esMaxCaracteres(100, $this->getDescripcion())) {
                $error->addError(505, 'Descripcion', 'descripcion');
            }
        } else {
            $error->addError(100, 'Descripcion', 'descripcion');
        }

        $o = self::getOxDescripcion($this->getDescripcion());
        if ($o && $o->getId() != $this->getId()) {
            $error->addError(140, 'Descripcion', 'descripcion');
        }

        // arbol
        if (Ctrl::esNull($this->getGenArbolId())) {
            $error->addError(100, 'Arbol', 'gen_arbol_id');
        }


        return $error;
    }

    public function getFamiliaDescripcion($forzar = false) {
        // ----------------------------------------------------------------------
        // se lee directo del campo
        // ----------------------------------------------------------------------
        $familia_descripcion = parent::getFamiliaDescripcion();
        if (trim($familia_descripcion) != '' && !$forzar) {
            return $familia_descripcion;
        }

        // ----------------------------------------------------------------------
        // sino se deduce leyendo la estructura del arbol
        // ----------------------------------------------------------------------
        $familia_descripcion = $this->getArbolFamiliaDescripcion();

        return $familia_descripcion;
    }

    public function getDescripcionParaRelacion() {
        return $this->getFamiliaDescripcion();
    }

    public function saveDesdeBackend() {
        parent::saveDesdeBackend();

        // ----------------------------------------------------------------------
        // se actualiza familia descripcion
        // ----------------------------------------------------------------------
        $familia_descripcion = $this->getFamiliaDescripcion($forzar = true);
        $this->setFamiliaDescripcion($familia_descripcion);
        
        $familia_codigo = $this->getArbolFamiliaCodigo();
        $this->setCodigo($familia_codigo);
        $this->save();

        // ----------------------------------------------------------------------
        // se reordenan categorias
        // ----------------------------------------------------------------------
        $this->setReordenarCategorias();
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 21/07/2020 18:00
     * Metodo que retordena registros
     */
    public function setReordenarCategorias() {
        $c = new Criterio();
        $c->addTabla(InsCategoria::GEN_TABLA);
        $c->addOrden(InsCategoria::GEN_ATTR_FAMILIA_DESCRIPCION, Criterio::_ASC);
        $c->setCriterios();

        $orden = 0;
        $ins_categorias = InsCategoria::getInsCategorias(null, $c);
        foreach ($ins_categorias as $ins_categoria) {
            $orden++;
            $ins_categoria->setOrden($orden);
            $ins_categoria->save();
        }
    }

    static function getInsCategoriasCmb($estado = true) {
        $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);

        $criterio = new Criterio();

        if ($estado)
            $criterio->add('estado', 1, Criterio::IGUAL);

        $criterio->addTabla('ins_categoria');
        $criterio->addOrden('2');
        $criterio->setCriterios();

        $col = InsCategoria::getInsCategorias($paginador, $criterio);

        foreach ($col as $o) {
            $arr_ordenado[$o->getFamiliaDescripcion()] = $o;
        }
        ksort($arr_ordenado);

        $cont = 0;
        $arr = array();
        foreach ($arr_ordenado as $o) {
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getFamiliaDescripcion();
        }
        return $arr;
    }

    /* Metodo que retorna la descripcion completa del item, considerando su familia completa */

    public function getArbolFamiliaCodigo() {
        $arr_padres = array();
        $padres = self::getArbolItemPadres($this, $arr_padres);

        krsort($arr_padres);
        $familia_codigo = '';
        foreach ($arr_padres as $padre) {
            $familia_codigo .= str_pad($padre->getId(), 4, 0, STR_PAD_LEFT) . InsCategoria::GEN_ARBOL_SEPARADOR_CODIGO;
        }
        return $familia_codigo . str_pad($this->getId(), 4, 0, STR_PAD_LEFT);
    }
    
    public function getInsCategoriasPadres(){
        $arr_padres = array();
        $padres = self::getArbolItemPadres($this, $arr_padres);

        krsort($arr_padres);
        return $arr_padres;
    }
    
    static function getInsCategoriasPrincipales($cantidad = 10)
    {
        $criterio = new Criterio();
        $criterio->add(InsCategoria::GEN_ATTR_INS_CATEGORIA_PADRE, ' and true', Criterio::IS_NULL);
        //$criterio->add(InsCategoria::GEN_ATTR_ID, 1, Criterio::IGUAL);
        $criterio->add(InsCategoria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $criterio->addTabla(InsCategoria::GEN_TABLA);
        $criterio->addOrden('2');
        $criterio->setCriterios();

         $p = new Paginador($cantidad, 1);

        $col = InsCategoria::getInsCategorias($p, $criterio);
        return $col;
    }

    static function getCategoriasPrincipalesParaTienda()
    {
        /*
            ALIMENTOS.
            ALUMINIO.
            ART DE LIMPIEZA.
            CARTONES
            CARTULINAS.
            COTILLON.
            FILMS.
            HILOS
            LAMINAS.
            MADERA.
            MAQUINAS.
            MOLDES.
            PAPELES.
            PLASTICOS
            POLIESTIRENO.
            POLIPAPEL.
            POLIPROPILENO.
            POLIESTIRENO.
            TELGOPOR.
         */
        $arr[] = InsCategoria::getOxCodigo('0001'); // ALIMENTOS
        $arr[] = InsCategoria::getOxCodigo('0006'); // ALUMINIO
        $arr[] = InsCategoria::getOxCodigo('0038'); // ART DE LIMPIEZA
        $arr[] = InsCategoria::getOxCodigo('0077'); // CARTONES
        $arr[] = InsCategoria::getOxCodigo('0166'); // CARTULINAS
        $arr[] = InsCategoria::getOxCodigo('0176'); // COTILLON
        $arr[] = InsCategoria::getOxCodigo('0219'); // FILMS
        $arr[] = InsCategoria::getOxCodigo('0267'); // HILOS
        $arr[] = InsCategoria::getOxCodigo('0279'); // LAMINAS
        $arr[] = InsCategoria::getOxCodigo('0356'); // MADERA
        $arr[] = InsCategoria::getOxCodigo('0359'); // MAQUINAS
        $arr[] = InsCategoria::getOxCodigo('0411'); // MOLDES
        $arr[] = InsCategoria::getOxCodigo('0440'); // PAPELES
        $arr[] = InsCategoria::getOxCodigo('0739'); // PLASTICOS
        $arr[] = InsCategoria::getOxCodigo('0832'); // POLIESTIRENO
        $arr[] = InsCategoria::getOxCodigo('0884'); // POLIPAPEL
        $arr[] = InsCategoria::getOxCodigo('0906'); // POLIPROPILENO
        $arr[] = InsCategoria::getOxCodigo('0914'); // TELGOPOR
        
        //criterio que traiga todas las categorias con padre null

        //$ins_categoria_principal = InsCategoria::getOxId(1);
        $ins_categorias_padres = self::getInsCategoriasPrincipales($cantidad = 7);
        foreach($ins_categorias_padres  as $ins_categorias_padre){
            //$arr[] = $ins_categorias_padre;
        }
        return $arr;
    }
    
    static function getCategoriasParaTienda($ins_categoria_padre = false, $incluir_padres = false)
    {
        $ins_categorias_full = array();
        
        if($incluir_padres){
            $ins_categoria_padre_obj = InsCategoria::getOxId($ins_categoria_padre);
            $arr_padres = $ins_categoria_padre_obj->getInsCategoriasPadres();
            //Gral::prr($arr_padres);
        }
        
        $criterio = new Criterio();
        if($ins_categoria_padre){
            $criterio->add(InsCategoria::GEN_ATTR_INS_CATEGORIA_PADRE, $ins_categoria_padre, Criterio::IGUAL);
        }else{
            $criterio->add(InsCategoria::GEN_ATTR_INS_CATEGORIA_PADRE, ' and true', Criterio::IS_NULL);            
        }
        $criterio->add(InsCategoria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $criterio->addTabla(InsCategoria::GEN_TABLA);
        $criterio->addOrden(InsCategoria::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
        $criterio->setCriterios();

        //$p = new Paginador($cantidad, 1);
        $p = null;

        $ins_categorias = InsCategoria::getInsCategorias($p, $criterio);
        
        $ins_categorias_full = array_merge($arr_padres, array($ins_categoria_padre_obj), $ins_categorias);        
        return $ins_categorias_full;
    }
    
    public function getInsInsumosVinculadosACategoriaDesdeColeccionDeInsumos($ins_insumos){
        $arr = array();
        foreach($ins_insumos as $ins_insumo){
            $ins_categoria = $ins_insumo->getInsCategoria();
            $pos = strpos($ins_categoria->getCodigo(), $this->getCodigo());

            //if($ins_categoria->getId() == $this->getId()){
            if($pos !== false){
                $arr[] = $ins_insumo;
            }
        }
        return $arr;
    }

    
}

?>