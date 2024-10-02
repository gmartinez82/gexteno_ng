<?php

require_once "base/BInsInsumo.php";

class InsInsumo extends BInsInsumo {

    const PREFIJO_INSUMO = 'PRD';
    const PREFIJO_INSUMO_BARCODE = '';
    const PUNTO_MINIMO = 'PUNTO_MINIMO';
    const PUNTO_PEDIDO = 'PUNTO_PEDIDO';
    const PUNTO_MAXIMO = 'PUNTO_MAXIMO';
    const TIPO_LISTA_DEFAULT = 'PRECIO_GENERAL';
    const TIPO_VISUALIZACION_DEFAULT = 'LISTA';
    const PAGINADOR_CANTIDAD_PRODUCTOS = 9;

    static function getSesPagCantidad() {
        $tipo_visualizacion = Gral::getSes('GEXTENO_KYA_INS_INSUMO_GESTION_FILTRO_TIPO_VISUALIZACION');

        if (trim(Gral::getSes(self::SES_PAGINACION_REGISTROS)) == '') {
            if ($tipo_visualizacion == 'GRID') {
                return 12;
            } elseif ($tipo_visualizacion == 'LISTA') {
                return 10;
            } else {
                return 10;
            }
        }
        return Gral::getSes(self::SES_PAGINACION_REGISTROS);
    }

    public function control() {
        $error = new DbError();

        // descripcion
        if (!Ctrl::esVacio($this->getDescripcion())) {
            if (Ctrl::esMaxCaracteres(100, $this->getDescripcion())) {
                $error->addError('No puede ingresar mas de 100 caracteres', 'Descripcion', 'descripcion');
            }
        } else {
            $error->addError(100, 'Descripcion', 'descripcion');
        }

        if (!Ctrl::esVacio($this->getDescripcion())) {
            $o = self::getOxDescripcion($this->getDescripcion());
            if ($o && $o->getId() != $this->getId()) {
                $error->addError(140, 'Descripcion', 'descripcion');
            }
        }

        if (!Ctrl::esVacio($this->getCodigoInterno())) {
            $o = self::getOxCodigoInterno($this->getCodigoInterno());
            if ($o && $o->getId() != $this->getId()) {
                $error->addError(140, 'Codigo Interno', 'codigo_interno');
            }
        }

        // categoria
        if (Ctrl::esNull($this->getInsCategoriaId())) {
            $error->addError(100, 'Categoria', 'ins_categoria_id');
        }

        // marca
        if (Ctrl::esNull($this->getInsMarcaId())) {
            $error->addError(100, 'Marca', 'ins_marca_id');
        }

        // tipo insumo
        if (Ctrl::esNull($this->getInsTipoInsumoId())) {
            $error->addError(100, 'Tipo', 'ins_tipo_insumo_id');
        }

        return $error;
    }

    public function saveDesdeBackend() {
        if ($this->getId() != '') {
            $o = self::getOxId($this->getId());
            $this->setCodigoImportacion($o->getCodigoImportacion());
        }

        $gral_tipo_iva_por_default = GralTipoIva::getGralTipoIvaPorDefault();
        $ins_unidad_medida_unidad = InsUnidadMedida::getOxCodigo(InsUnidadMedida::TIPO_UNIDAD);

        // se carga descripcion corta si es vacio
        if (trim($this->getDescripcionCorta()) == '') {
            $this->setDescripcionCorta($this->getDescripcion());
        }

        // unidad medida
        if (Ctrl::esNull($this->getInsUnidadMedidaId())) {
            $this->setInsUnidadMedidaId($ins_unidad_medida_unidad->getId());
        }

        // tipo iva de venta
        if (Ctrl::esNull($this->getGralTipoIvaVenta())) {
            $this->setGralTipoIvaVenta($gral_tipo_iva_por_default->getId());
        }

        // tipo iva de venta
        if (Ctrl::esNull($this->getGralTipoIvaVentaZ())) {
            $this->setGralTipoIvaVentaZ($gral_tipo_iva_por_default->getId());
        }

        // tipo iva de compra
        if (Ctrl::esNull($this->getGralTipoIvaCompra())) {
            $this->setGralTipoIvaCompra($gral_tipo_iva_por_default->getId());
        }

        // tipo iva de compra
        if (Ctrl::esNull($this->getGralTipoIvaCompraZ())) {
            $this->setGralTipoIvaCompraZ($gral_tipo_iva_por_default->getId());
        }

        // proporcion iva
        if (trim($this->getProporcionIva()) == '') {
            $this->setProporcionIva(100);
            
            // excepcion para tipo de iva exento
            switch ($this->getGralTipoIvaVentaObj()->getCodigo()){
                case GralTipoIva::TIPO_EXENTO:
                    $this->setProporcionIva(0);
                break;
            }
        }
        
        parent::saveDesdeBackend();

        // inicializacion de insumo
        $this->setInicializarInsInsumoNuevo();

        // se setean los codigos en equivalencias
        $this->setInsInsumoCodigosEquivalencias();

        // se setean las claves del insumo
        $this->setInsInsumoClaves();

        // se setean las claves de los atributos del insumo
        $this->setInsInsumoClavesAtributos();

        // se setean las claves para la tienda
        $this->setInsInsumoClavesTienda();
        
        // inicializacion de puntos de stock
        $this->setInicializarPuntosStock();

        // inicializacion de puntos de stock
        $this->setInicializarStockCero();

        // inicializacion de costo cero
        $this->setInicializarCostoCero();

        // inicializacion en listas de precios
        $this->setActualizarListaPrecios();
    }

    public function setInicializarPuntosStock() {
        if ($this->getControlStock()) {
            $pan_panols = PanPanol::getPanPanols(null, null, true);
            foreach ($pan_panols as $pan_panol) {
                // ----------------------------------------------------------------------
                // si no tiene puntos de stock, se registran
                // ----------------------------------------------------------------------
                $array = array(
                    array('campo' => 'ins_insumo_id', 'valor' => $this->getId()),
                    array('campo' => 'pan_panol_id', 'valor' => $pan_panol->getId()),
                );
                $ins_insumo_pan_panol = InsInsumoPanPanol::getOxArray($array);
                if (!$ins_insumo_pan_panol) {
                    $ins_insumo_pan_panol = new InsInsumoPanPanol();
                    $ins_insumo_pan_panol->setInsInsumoId($this->getId());
                    $ins_insumo_pan_panol->setPanPanolId($pan_panol->getId());

                    $ins_insumo_pan_panol->setPuntoMinimo($punto_minimo = 0);
                    $ins_insumo_pan_panol->setPuntoPedido($punto_pedido = 0);
                    $ins_insumo_pan_panol->setPuntoMaximo($punto_maximo = 0);

                    $ins_insumo_pan_panol->save();
                }
            }
        }
    }

    public function setInicializarStockCero() {
        if ($this->getControlStock()) {
            $pan_panols = PanPanol::getPanPanols(null, null, true);
            foreach ($pan_panols as $pan_panol) {
                $ins_stock_resumen_panol = $this->getInsStockResumenEnPanol($pan_panol);

                // ----------------------------------------------------------------------
                // si no tiene resumen de stock, se inicializa
                // ----------------------------------------------------------------------
                if (!$ins_stock_resumen_panol) {
                    $ins_stock_tipo_movimiento_codigo = InsStockTipoMovimiento::TIPO_MOV_INICIALIZACION;
                    $this->setAjusteStockManual($pan_panol, $cantidad_stock = 0, $ins_stock_tipo_movimiento_codigo, $observacion = 'Inicializacion con stock cero');
                }

                $ins_stock_resumen_panol = $this->getInsStockResumenEnPanol($pan_panol);

                // ----------------------------------------------------------------------
                // si actualiza estado de stock
                // ----------------------------------------------------------------------
                PrcProceso::controlStockInsumosTipoEstado($ins_stock_resumen_panol->getId());
            }
        }
    }

    public function setInicializarCostoCero() {
        $ins_insumo_costo_actual = $this->getInsInsumoCostoActual();
        if (!$ins_insumo_costo_actual) {
            $costo = 0;
            $observacion = 'Inicializacion automatica por carga o edicion de producto';
            $descripcion = '';

            $ins_insumo_costo_actual = $this->setInsInsumoCostoActual(
                    $prv_importacion = false, $costo, $observacion, $descripcion
            );
        }
        return $ins_insumo_costo_actual;
    }

    public function setInicializarInsInsumoNuevo() {
        $ins_insumo_instancias = $this->getInsInsumoInstancias();
        if (count($ins_insumo_instancias) == 0) {
            // -----------------------------------------------------------------
            // solo si no tiene instancias creadas se genera una nueva
            // -----------------------------------------------------------------

            $descripcion = 'Nuevo';

            $ins_insumo_instancia = new InsInsumoInstancia();
            $ins_insumo_instancia->setInsInsumoId($this->getId());
            $ins_insumo_instancia->setDescripcion($descripcion);
            $ins_insumo_instancia->setOrden(1);
            $ins_insumo_instancia->setEstado(1);
            $ins_insumo_instancia->save();
        }

        // ---------------------------------------------------------------------
        // se setea el barcode interno
        // ---------------------------------------------------------------------
        $codigo_numero = str_pad($this->getId(), 6, 0, STR_PAD_LEFT);
        $this->setCodigoBarraInterno(self::PREFIJO_INSUMO_BARCODE . $codigo_numero);

        // ---------------------------------------------------------------------
        // se setea el codigo interno, solo si es vacio
        // ---------------------------------------------------------------------
        if ($this->getCodigoInterno() == '') {
            $codigo_numero = str_pad($this->getId(), 6, 0, STR_PAD_LEFT);
            $this->setCodigoInterno(DbConfig::CONFIG_CONF_PROYECTO_MIN . $codigo_numero);
        }

        // ---------------------------------------------------------------------
        // se setea URL para Tienda Integrada
        // ---------------------------------------------------------------------
        if ($this->getUrlTienda() == '') {
            $url_tienda = $this->getId() . '-' . substr(Gral::getStringSaneadoSinCaracteresEspeciales($this->getDescripcion()), 0, 90);
            $this->setUrlTienda($url_tienda);
        }
        
        $this->save();
    }

    /**
     * Metodo que setea los codigos de las equivalencias del insumo 
     */
    public function setInsInsumoCodigosEquivalencias() {

        // se actualizan (si no existen) equivalencias de acuerdo a la marca y codigo de marca elegido
        if ($this->getInsMarcaId() != 'null' && $this->getCodigoMarca() != '') {
            $array = array(
                array('campo' => 'ins_insumo_id', 'valor' => $this->getId()),
                array('campo' => 'ins_marca_id', 'valor' => $this->getInsMarcaId()),
            );
            $ins_insumo_ins_marca = InsInsumoInsMarca::getOxArray($array);
            if (!$ins_insumo_ins_marca) {
                // solo se setea si no existe equivalencia ya cargada para la marca
                $ins_insumo_ins_marca = new InsInsumoInsMarca();
                $ins_insumo_ins_marca->setInsInsumoId($this->getId());
                $ins_insumo_ins_marca->setInsMarcaId($this->getInsMarcaId());
                $ins_insumo_ins_marca->setCodigo($this->getCodigoMarca());
                $ins_insumo_ins_marca->save();
            }
        }

        // se  actualizan (si no existen) equivalencias de acuerdo a la matriz del insumo
        if ($this->getInsMatrizId() != 'null') {
            if ($this->getInsMatriz()->getInsMarcaId() != 'null' && $this->getInsMatriz()->getCodigoPieza() != '') {
                $array = array(
                    array('campo' => 'ins_insumo_id', 'valor' => $this->getId()),
                    array('campo' => 'ins_marca_id', 'valor' => $this->getInsMatriz()->getInsMarcaId()),
                );
                $ins_insumo_ins_marca = InsInsumoInsMarca::getOxArray($array);
                if (!$ins_insumo_ins_marca) {
                    // solo se setea si no existe equivalencia ya cargada para la marca
                    $ins_insumo_ins_marca = new InsInsumoInsMarca();
                    $ins_insumo_ins_marca->setInsInsumoId($this->getId());
                    $ins_insumo_ins_marca->setInsMarcaId($this->getInsMatriz()->getInsMarcaId());
                    $ins_insumo_ins_marca->setCodigo($this->getInsMatriz()->getCodigoPieza());
                    $ins_insumo_ins_marca->save();
                }
            }
        }

        // se  actualizan (si no existen) equivalencias de acuerdo a vinculos con otros insumos de proveedor
        $prv_insumos = $this->getPrvInsumos();
        foreach ($prv_insumos as $prv_insumo) {

            // marca y codigo de marca desde insumo del proveedor
            if ($prv_insumo->getInsMarcaId() != 'null' && $prv_insumo->getCodigoMarca() != '') {
                $array = array(
                    array('campo' => 'ins_insumo_id', 'valor' => $this->getId()),
                    array('campo' => 'ins_marca_id', 'valor' => $prv_insumo->getInsMarcaId()),
                );
                $ins_insumo_ins_marca = InsInsumoInsMarca::getOxArray($array);
                if (!$ins_insumo_ins_marca) {
                    // solo se setea si no existe equivalencia ya cargada para la marca
                    $ins_insumo_ins_marca = new InsInsumoInsMarca();
                    $ins_insumo_ins_marca->setInsInsumoId($this->getId());
                    $ins_insumo_ins_marca->setInsMarcaId($prv_insumo->getInsMarcaId());
                    $ins_insumo_ins_marca->setCodigo($prv_insumo->getCodigoMarca());
                    $ins_insumo_ins_marca->save();
                }
            }

            // marca y codigo de oem desde insumo del proveedor
            if ($prv_insumo->getInsMarcaPieza() != 'null' && $prv_insumo->getCodigoPieza() != '') {
                $array = array(
                    array('campo' => 'ins_insumo_id', 'valor' => $this->getId()),
                    array('campo' => 'ins_marca_id', 'valor' => $prv_insumo->getInsMarcaPieza()),
                );
                $ins_insumo_ins_marca = InsInsumoInsMarca::getOxArray($array);
                if (!$ins_insumo_ins_marca) {
                    // solo se setea si no existe equivalencia ya cargada para la marca
                    $ins_insumo_ins_marca = new InsInsumoInsMarca();
                    $ins_insumo_ins_marca->setInsInsumoId($this->getId());
                    $ins_insumo_ins_marca->setInsMarcaId($prv_insumo->getInsMarcaPieza());
                    $ins_insumo_ins_marca->setCodigo($prv_insumo->getCodigoPieza());
                    $ins_insumo_ins_marca->save();
                }
            }
        }


        return true;
    }

    /**
     * Metodo que retorna los datos "claves" del insumo
     */
    public function getInsInsumoClaves() {
        $claves = '';

        $ins_marca = $this->getInsMarca();

        // ---------------------------------------------------------------------
        // campos propios
        // ---------------------------------------------------------------------
        $claves .= $this->getDescripcion();
        $claves .= ' ' . $this->getCodigoInterno();
        $claves .= ' ' . $ins_marca->getDescripcion();
        $claves .= ' ' . $this->getCodigoMarca();
        $claves .= ' ' . $this->getCodigoBarra();
        $claves .= ' ' . $this->getCodigoBarraInterno();

        // ---------------------------------------------------------------------
        // codigos de marca alternativa
        // ---------------------------------------------------------------------
        $ins_insumo_ins_marcas = $this->getInsInsumoInsMarcas();
        foreach ($ins_insumo_ins_marcas as $ins_insumo_ins_marca) {
            $ins_marca_vinculada = $ins_insumo_ins_marca->getInsMarca();
            if ($ins_marca_vinculada && $ins_marca_vinculada->getId() != $ins_marca->getId()) {
                $claves .= ' ' . $ins_marca_vinculada->getDescripcion();
                $claves .= ' ' . $ins_insumo_ins_marca->getCodigo();
            }
        }

        // ---------------------------------------------------------------------
        // codigos de proveedores
        // ---------------------------------------------------------------------
        $prv_insumos = $this->getPrvInsumos();
        foreach ($prv_insumos as $prv_insumo) {
            $claves .= ' ' . $prv_insumo->getCodigoMarca();
            $claves .= ' ' . $prv_insumo->getCodigoPieza();
            $claves .= ' ' . $prv_insumo->getCodigoProveedor();
        }

        return $claves;
    }

    /**
     * Metodo que retorna los datos "claves" del insumo
     */
    public function getInsInsumoClavesAtributos() {
        $claves = '';

        // ---------------------------------------------------------------------
        // atributos
        // ---------------------------------------------------------------------
        $ins_insumo_ins_atributos = $this->getInsInsumoInsAtributos();
        foreach ($ins_insumo_ins_atributos as $ins_insumo_ins_atributo) {
            $ins_atributo_vinculado = $ins_insumo_ins_atributo->getInsAtributo();
            if ($ins_atributo_vinculado) {
                $claves .= ' ' . $ins_insumo_ins_atributo->getValor();
                $claves .= '' . $ins_insumo_ins_atributo->getInsUnidadMedidaAtributo()->getDescripcionCorta();
            }
        }

        return $claves;
    }
    
    /**
     * Metodo que retorna los datos "claves tienda" del insumo
     */
    public function getInsInsumoClavesTienda() {
        $claves = '';

        $ins_marca = $this->getInsMarca();

        // ---------------------------------------------------------------------
        // campos propios
        // ---------------------------------------------------------------------
        $claves .= $this->getDescripcion();
        $claves .= ' ' . $this->getCodigoInterno();
        $claves .= ' ' . $ins_marca->getDescripcion();
        $claves .= ' ' . $this->getCodigoMarca();
        $claves .= ' ' . $this->getCodigoBarra();
        $claves .= ' ' . $this->getCodigoBarraInterno();

        // ---------------------------------------------------------------------
        // codigos de marca alternativa
        // ---------------------------------------------------------------------
        $ins_insumo_ins_marcas = $this->getInsInsumoInsMarcas();
        foreach ($ins_insumo_ins_marcas as $ins_insumo_ins_marca) {
            $ins_marca_vinculada = $ins_insumo_ins_marca->getInsMarca();
            if ($ins_marca_vinculada && $ins_marca_vinculada->getId() != $ins_marca->getId()) {
                $claves .= ' ' . $ins_marca_vinculada->getDescripcion();
                $claves .= ' ' . $ins_insumo_ins_marca->getCodigo();
            }
        }

        // ---------------------------------------------------------------------
        // codigos de proveedores
        // ---------------------------------------------------------------------
        $prv_insumos = $this->getPrvInsumos();
        foreach ($prv_insumos as $prv_insumo) {
            $claves .= ' ' . $prv_insumo->getCodigoMarca();
            $claves .= ' ' . $prv_insumo->getCodigoPieza();
            $claves .= ' ' . $prv_insumo->getCodigoProveedor();
        }

        return $claves;
    }

    /**
     * Metodo que setea el campo "claves" del insumo
     */
    public function setInsInsumoClaves() {
        $claves = $this->getInsInsumoClaves();

        $this->setClaves($claves);
        $this->save();

        return $claves;
    }

    /**
     * Metodo que setea el campo "claves" de atributos del insumo
     */
    public function setInsInsumoClavesAtributos() {
        $claves = $this->getInsInsumoClavesAtributos();

        $this->setClavesAtributos($claves);
        $this->save();

        return $claves;
    }

    /**
     * Metodo que setea el campo "claves" del insumo
     */
    public function setInsInsumoClavesTienda() {
        $claves = $this->getInsInsumoClavesTienda();
        $claves = Gral::getTextoPluralizado($claves);

        $this->setClavesTienda($claves);
        $this->save();

        return $claves;
    }
    
    /**
     * Metodo que actualiza el insumo en las distintas listas de precios que existen
     */
    public function setActualizarListaPrecios($ins_tipo_lista_precio = false) {
        if (!$ins_tipo_lista_precio) {
            $ins_tipo_lista_precios = InsTipoListaPrecio::getInsTipoListaPrecios();
        } else {
            $ins_tipo_lista_precios[] = $ins_tipo_lista_precio;
        }
        foreach ($ins_tipo_lista_precios as $ins_tipo_lista_precio) {
            $array = array(
                array('campo' => 'ins_insumo_id', 'valor' => $this->getId()),
                array('campo' => 'ins_tipo_lista_precio_id', 'valor' => $ins_tipo_lista_precio->getId()),
            );
            $ins_lista_precio = InsListaPrecio::getOxArray($array);
            if (!$ins_lista_precio) {
                $ins_lista_precio = new InsListaPrecio();
                $ins_lista_precio->setInsInsumoId($this->getId());
                $ins_lista_precio->setInsTipoListaPrecioId($ins_tipo_lista_precio->getId());
                $ins_lista_precio->setHabilitado(1);
                $ins_lista_precio->setPorcentajeIncremento(0);
                $ins_lista_precio->setCalcularImporte($save = false);
                $ins_lista_precio->save();
            } else {
                $ins_lista_precio->setCalcularImporte($save = true);
            }
        }
    }

    /* Método getInfoBtnVolver */

    static function getInfoBtnVolver($indice = false) {
        $array = array(
            'url' => 'ins_insumo_gestion.php',
            'label' => 'Volver al Listado',
        );

        return ($indice) ? $array[$indice] : $array;
    }

    /**
     * Metodo que retorna el costo actual del insumo
     * @return boolean
     */
    public function getInsInsumoCostoActual($pde_centro_pedido = false) {
        $c = new Criterio();
        $c->add(InsInsumoCosto::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(InsInsumoCosto::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->addTabla(InsInsumoCosto::GEN_TABLA);
        $c->setCriterios();

        $ins_insumo_costos = InsInsumoCosto::getInsInsumoCostos(new Paginador(1, 1), $c);
        foreach ($ins_insumo_costos as $ins_insumo_costo) {
            return $ins_insumo_costo;
        }
        return false;
    }

    /**
     * Metodo que retorna el costo actual del insumo
     * @return boolean
     */
    public function getInsInsumoCostoEnFecha($fecha, $pde_centro_pedido = false) {
        $c = new Criterio();
        $c->add(InsInsumoCosto::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(InsInsumoCosto::GEN_ATTR_CREADO, $fecha.' 00:00:00', Criterio::MENORIGUAL);
        $c->addTabla(InsInsumoCosto::GEN_TABLA);
        $c->addOrden(InsInsumoCosto::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();

        $ins_insumo_costos = InsInsumoCosto::getInsInsumoCostos(new Paginador(1, 1), $c);
        foreach ($ins_insumo_costos as $ins_insumo_costo) {
            return $ins_insumo_costo;
        }
        return false;
    }
    
    /**
     * Metodo que retorna el costo actual del insumo
     * @return float
     */
    public function getInsInsumoImporteVentaActual($ins_tipo_lista_precio = false, $incluye_iva = false) {

        //return 0; // temporal

        $ins_lista_precio = $this->getInsInsumoListaPrecioXTipoLista($ins_tipo_lista_precio);

        if ($ins_lista_precio) {
            $importe_venta = $ins_lista_precio->getImporteVenta();

            if ($incluye_iva) {
                $gral_tipo_iva_venta = GralTipoIva::getOxId($this->getGralTipoIvaVenta());
                if ($gral_tipo_iva_venta) {
                    $importe_venta = $importe_venta * $gral_tipo_iva_venta->getValorIvaDecimalParaSumarEnCalculo();
                }
            }

            return $importe_venta;
        }
        return false;
    }

    /**
     * Metodo que retorna la lista de precios para un tipo de lista determinado
     * @return float
     */
    public function getInsInsumoListaPrecioXTipoLista($ins_tipo_lista_precio = false, $solo_habilitado = true) {
        $c = new Criterio();
        $c->add(InsInsumo::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);

        if ($solo_habilitado) {
            $c->add(InsListaPrecio::GEN_ATTR_HABILITADO, 1, Criterio::IGUAL);
        }

        if ($ins_tipo_lista_precio) {
            $c->add(InsTipoListaPrecio::GEN_ATTR_ID, $ins_tipo_lista_precio->getId(), Criterio::IGUAL);
        }
        $c->addTabla(InsListaPrecio::GEN_TABLA);
        $c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, InsListaPrecio::GEN_ATTR_INS_INSUMO_ID);
        $c->addRealJoin(InsTipoListaPrecio::GEN_TABLA, InsTipoListaPrecio::GEN_ATTR_ID, InsListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID);
        $c->setCriterios();

        $p = new Paginador(1, 1);

        $ins_lista_precios = InsListaPrecio::getInsListaPrecios($p, $c);
        foreach ($ins_lista_precios as $ins_lista_precio) {
            return $ins_lista_precio;
        }
        return false;
    }

    static function getOrdenarPorCmb() {
        $cont = 0;
        $arr = array();

        $cont++;
        $arr[$cont]['cod'] = 'importe-venta-mayor';
        $arr[$cont]['descripcion'] = 'Mayor Importe de Venta';

        $cont++;
        $arr[$cont]['cod'] = 'importe-venta-menor';
        $arr[$cont]['descripcion'] = 'Menor Importe de Venta';

        $cont++;
        $arr[$cont]['cod'] = 'costo-fecha-mayor';
        $arr[$cont]['descripcion'] = 'Mayor Fecha de Act Costo';

        $cont++;
        $arr[$cont]['cod'] = 'costo-fecha-menor';
        $arr[$cont]['descripcion'] = 'Menor Fecha de Act Costo';

        $cont++;
        $arr[$cont]['cod'] = 'descripcion';
        $arr[$cont]['descripcion'] = 'Descripcion';

        $cont++;
        $arr[$cont]['cod'] = 'codigo_interno';
        $arr[$cont]['descripcion'] = 'Codigo Interno';

        return $arr;
    }

    static function getInsInsumosParaVentaOnline() {

        $c = new Criterio();
        //$c->add(InsInsumo::GEN_ATTR_ID, 16110, Criterio::IGUAL);
        $c->add(InsTipoListaPrecio::GEN_ATTR_CODIGO, InsTipoListaPrecio::TIPO_PRECIO_VENTA_ONLINE, Criterio::IGUAL);
        $c->add(InsListaPrecio::GEN_ATTR_HABILITADO, 1, Criterio::IGUAL);
        $c->add(InsInsumo::GEN_ATTR_VENTA_WEB, 1, Criterio::IGUAL);
        $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->addTabla(InsInsumo::GEN_TABLA);
        $c->addRealJoin(InsListaPrecio::GEN_TABLA, InsListaPrecio::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
        $c->addRealJoin(InsTipoListaPrecio::GEN_TABLA, InsTipoListaPrecio::GEN_ATTR_ID, InsListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID);
        $c->setOrden(InsInsumo::GEN_ATTR_DESCRIPCION);
        $c->setCriterios();

        $p = new Paginador(10, 1);
        $p = null;

        $ins_insumos = InsInsumo::getInsInsumos($p, $c);
        return $ins_insumos;
    }

    /*
     * Se vincula el insumo a las distintas listas de precios
     */

    public function setActualizarListasDePrecios() {
        $ins_lista_precios = $this->getInsListaPrecios();
        foreach ($ins_lista_precios as $ins_lista_precio) {

            // se llama al metodo que calcula el importe en lista de precios
            $ins_lista_precio->setCalcularImporte($save = true);
        }
    }

    public function getArrEtiquetasParaWeb() {

        $arr = array();

        // se obtienen las etiquetas desde vinculo con ins etiquetas
        $ins_etiquetas = $this->getInsEtiquetasXInsInsumoInsEtiqueta();
        foreach ($ins_etiquetas as $ins_etiqueta) {
            //$arr[] = $ins_etiqueta->getDescripcion(); // nose usan mas
        }

        // se agrega la marca del insumo como etiqueta de la tienda
        $ins_marca = $this->getInsMarca();
        if ($ins_marca) {
            $arr[] = 'PRODUCTOS ' . $ins_marca->getDescripcion();
        }

        // se generan etiquetas por vinculo con modelos y marcas de vehiculos
        $veh_modelos = $this->getVehModelosXInsInsumoVehModelo();
        foreach ($veh_modelos as $veh_modelo) {
            $veh_marca = $veh_modelo->getVehMarca();

            $arr[] = 'MARCA ' . $veh_marca->getDescripcion();
            $arr[] = 'MODELO ' . $veh_modelo->getDescripcion();
        }

        // se eliminan etiquetas duplicadas en el array
        $arr = array_unique($arr);

        return $arr;
    }

    static function setNuevoInsInsumo(
    $ins_matriz = false, $descripcion, $codigo_marca, $ins_marca_id, $observacion = ''
    ) {

        $gral_tipo_iva = GralTipoIva::getOxCodigo('21'); // IVA 21 %
        $ins_unidad_medida = InsUnidadMedida::getOxCodigo('UNIDAD');

        if ($ins_matriz && $ins_matriz->getId() == '') {
            //$ins_matriz = new InsMatriz();
            //$ins_matriz->setDescripcion($descripcion);
            //$ins_matriz->setCodigoPieza($codigo_pieza);
            //$ins_matriz->setInsMarcaId($ins_marca_pieza);
            $ins_matriz->setEstado('1');
            $ins_matriz->setObservacion('');
            $ins_matriz->setOrden('1');
            $ins_matriz->save();
        }

        $ins_insumo = new InsInsumo();
        $ins_insumo->setInsMarcaId($ins_marca_id);
        $ins_insumo->setCodigoMarca($codigo_marca);
        $ins_insumo->setInsMatrizId($ins_matriz->getId());
        $ins_insumo->setDescripcion($descripcion);
        $ins_insumo->setDescripcionCorta($descripcion);

        if ($gral_tipo_iva) {
            $ins_insumo->setGralTipoIvaCompra($gral_tipo_iva->getId());
            $ins_insumo->setGralTipoIvaVenta($gral_tipo_iva->getId());
        }
        if ($ins_unidad_medida) {
            $ins_insumo->setInsUnidadMedidaId($ins_unidad_medida->getId());
        }

        $ins_insumo->setVentaWeb(0); // no habilitado para tienda
        $ins_insumo->setEsComprable(1); // se determina que el insumo se puede comprar

        $ins_insumo->setEstado(1);
        $ins_insumo->setObservacion('');
        $ins_insumo->setOrden(0);
        $ins_insumo->save();

        // inicializacion de insumo
        $ins_insumo->setInicializarInsInsumoNuevo();

        // se setean las claves del insumo
        $ins_insumo->setInsInsumoClaves();

        // actualizacion en listas de precios
        $ins_insumo->setActualizarListaPrecios();

        return $ins_insumo;
    }

    /**
     * Metodo que registra el costo del insumo de acuerdo a distintos origenes de costo
     * @return InsInsumoCosto
     */
    public function setInsInsumoCostoActual(
    $prv_importacion = false, $costo = false, $observacion = false, $descripcion = false, $ins_stock_transformacion = false, $ins_stock_transformacion_destino = false, $iva_incluido = false
    ) {
        $ins_insumo_costos = $this->getInsInsumoCostos();
        $inicial = (count($ins_insumo_costos) > 0) ? 0 : 1;

        // se actualiza el campo actual de los anteriores costos del insumo
        $ejec = new Ejecucion();
        $sql = 'UPDATE ins_insumo_costo SET actual = 0 WHERE ins_insumo_id = ' . $this->getId() . ' AND actual = 1';
        $ejec->setSql($sql);
        $ejec->execute();
        
        if($iva_incluido){
            $gral_tipo_iva = $this->getGralTipoIvaVentaObj();
            $costo = $costo / $gral_tipo_iva->getValorIvaDecimalParaSumarEnCalculo();            
        }

        // se inserta el nuevo costo del insumo
        $ins_insumo_costo = new InsInsumoCosto();
        $ins_insumo_costo->setInsInsumoId($this->getId());

        if ($prv_importacion) {
            // si se modifica el costo a partir del proceso de importacion de listas
            $ins_insumo_costo->setPrvImportacionId($prv_importacion->getId());
            $ins_insumo_costo->setPrvProveedorId($prv_importacion->getPrvProveedorId());
            $ins_insumo_costo->setCosto($costo);
            $ins_insumo_costo->setDescripcion($descripcion);
            $ins_insumo_costo->setObservacion($observacion);
        } elseif ($ins_stock_transformacion) {
            // si es por transformacion
            $pde_centro_pedido = $ins_stock_transformacion->getPanPanol()->getPdeCentroPedido();
            $ins_insumo_origen = $ins_stock_transformacion->getInsInsumo();
            $cantidad_origen = $ins_stock_transformacion->getCantidad();
            $ins_insumo_origen_costo_actual = $ins_insumo_origen->getInsInsumoCostoActual($pde_centro_pedido); // costo actual del insumo
            if ($ins_insumo_origen_costo_actual) {

                // costo origen
                $costo_origen_actual = $ins_insumo_origen_costo_actual->getCosto();

                // cantidad destino
                $cantidad_destino = $ins_stock_transformacion_destino->getCantidad();

                // se calcula el costo origen por la cantidad a tranformar, luego se divide por la cantidad destino
                $ins_insumo_costo->setCosto($costo_origen_actual / ($cantidad_destino / $cantidad_origen));

                $descripcion = "Transformacion";
                $observacion = "Se actualiza automaticamente por proceso de transformacion de insumos. Transformacion #" . $ins_stock_transformacion->getId();

                $ins_insumo_costo->setDescripcion($descripcion);
                $ins_insumo_costo->setObservacion($observacion);
            }
            $ins_insumo_costo->setInsStockTransformacionId($ins_stock_transformacion->getId());
        } else {
            $ins_insumo_costo->setCosto($costo);
            $ins_insumo_costo->setDescripcion($descripcion);
            $ins_insumo_costo->setObservacion($observacion);
        }

        $ins_insumo_costo->setFecha(date('Y-m-d H:i:s'));
        $ins_insumo_costo->setActual(1);
        $ins_insumo_costo->setInicial($inicial);
        $ins_insumo_costo->setEstado(1);
        $ins_insumo_costo->save();

        // actualizacion en listas de precios
        $this->setActualizarListaPrecios();

        return $ins_insumo_costo;
    }

    /**
     * Metodo que retorna los insumos vinculados a este
     * @return type
     */
    public function getInsInsumoVinculadosOrdenados($tienda_mayorista = false) {
        $c = new Criterio();
        if($tienda_mayorista){
            $c->add(InsInsumo::GEN_ATTR_VENTA_MAYORISTA, 1, Criterio::IGUAL);            
        }
        $c->add(InsInsumoVinculado::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(InsInsumo::GEN_TABLA);
        $c->addRealJoin(InsInsumoVinculado::GEN_TABLA, InsInsumoVinculado::GEN_ATTR_INS_INSUMO_VINCULADO, InsInsumo::GEN_ATTR_ID);
        $c->addOrden(InsInsumo::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
        $c->setCriterios();

        $p = new Paginador(8, 1);
        //$p = null;

        $ins_insumos = InsInsumo::getInsInsumos($p, $c);
        return $ins_insumos;
    }

    /**
     * Metodo que retorna los insumos similares a este
     * @return type
     */
    public function getInsInsumoSimilarsOrdenados($tienda_mayorista = false) {
        $c = new Criterio();
        if($tienda_mayorista){
            $c->add(InsInsumo::GEN_ATTR_VENTA_MAYORISTA, 1, Criterio::IGUAL);            
        }
        $c->add(InsInsumoSimilar::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(InsInsumo::GEN_TABLA);
        $c->addRealJoin(InsInsumoSimilar::GEN_TABLA, InsInsumoSimilar::GEN_ATTR_INS_INSUMO_SIMILAR, InsInsumo::GEN_ATTR_ID);
        $c->addOrden(InsInsumo::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
        $c->setCriterios();

        $p = new Paginador(8, 1);
        //$p = null;

        $ins_insumos = InsInsumo::getInsInsumos($p, $c);
        return $ins_insumos;
    }

    /**
     * Metodo que retorna los insumos vinculados a este
     * @return type
     */
    public function getInsInsumoMismaCategoriasOrdenados($tienda_mayorista = false) {
        $c = new Criterio();
        if($tienda_mayorista){
            $c->add(InsInsumo::GEN_ATTR_VENTA_MAYORISTA, 1, Criterio::IGUAL);            
        }
        $c->add(InsCategoria::GEN_ATTR_ID, $this->getInsCategoriaId(), Criterio::IGUAL);
        $c->add(InsInsumo::GEN_ATTR_ID, $this->getId(), Criterio::DISTINTO);
        $c->addTabla(InsInsumo::GEN_TABLA);
        $c->addRealJoin(InsCategoria::GEN_TABLA, InsCategoria::GEN_ATTR_ID, InsInsumo::GEN_ATTR_INS_CATEGORIA_ID);
        $c->addOrden(InsInsumo::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
        $c->setCriterios();

        $p = new Paginador(8, 1);
        //$p = null;

        $ins_insumos = InsInsumo::getInsInsumos($p, $c);
        return $ins_insumos;
    }

    static function getInsInsumosSugeridos($descripcion, $codigo_marca, $codigo_pieza, $codigo_proveedor) {
        $descripcion = (trim($descripcion) != '') ? $descripcion : '---------';
        $codigo_marca = (trim($codigo_marca) != '') ? $codigo_marca : '---------';
        $codigo_pieza = (trim($codigo_pieza) != '') ? $codigo_pieza : '---------';
        $codigo_proveedor = (trim($codigo_proveedor) != '') ? $codigo_proveedor : '---------';

        // se buscan directamente en ins insumo
        $criterio_insumo = new Criterio();
        $criterio_insumo->setAmbiguo(true);

        //$criterio_insumo->add(InsInsumo::GEN_ATTR_DESCRIPCION, $descripcion, Criterio::LIKE, false, Criterio::_OR);

        $criterio_insumo->add(InsInsumo::GEN_ATTR_CODIGO_MARCA, $codigo_marca, Criterio::LIKE, false, Criterio::_OR);
        $criterio_insumo->add(InsInsumo::GEN_ATTR_CODIGO_INTERNO, $codigo_marca, Criterio::LIKE, false, Criterio::_OR);
        $criterio_insumo->add(PrvInsumo::GEN_ATTR_CODIGO_MARCA, $codigo_marca, Criterio::LIKE, false, Criterio::_OR);
        $criterio_insumo->add(PrvInsumo::GEN_ATTR_CODIGO_PROVEEDOR, $codigo_marca, Criterio::LIKE, false, Criterio::_OR);
        $criterio_insumo->add(InsInsumoInsMarca::GEN_ATTR_CODIGO, $codigo_marca, Criterio::LIKE, false, Criterio::_OR);

        $criterio_insumo->add(InsInsumo::GEN_ATTR_CODIGO_MARCA, $codigo_proveedor, Criterio::LIKE, false, Criterio::_OR);
        $criterio_insumo->add(InsInsumo::GEN_ATTR_CODIGO_INTERNO, $codigo_proveedor, Criterio::LIKE, false, Criterio::_OR);
        $criterio_insumo->add(PrvInsumo::GEN_ATTR_CODIGO_MARCA, $codigo_proveedor, Criterio::LIKE, false, Criterio::_OR);
        $criterio_insumo->add(PrvInsumo::GEN_ATTR_CODIGO_PROVEEDOR, $codigo_proveedor, Criterio::LIKE, false, Criterio::_OR);
        $criterio_insumo->add(InsInsumoInsMarca::GEN_ATTR_CODIGO, $codigo_proveedor, Criterio::LIKE, false, Criterio::_OR);

        //$criterio_insumo->add(InsInsumo::GEN_ATTR_CLAVES, $codigo_marca, Criterio::LIKE, false, Criterio::_OR);
        //$criterio_insumo->add(InsInsumo::GEN_ATTR_CLAVES, $codigo_proveedor, Criterio::LIKE, false, Criterio::_OR);

        $criterio_insumo->addTabla(InsInsumo::GEN_TABLA);
        $criterio_insumo->addRealJoin(InsInsumoInsMarca::GEN_TABLA, InsInsumoInsMarca::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID, 'LEFT JOIN');
        $criterio_insumo->addRealJoin(InsMarca::GEN_TABLA, InsMarca::GEN_ATTR_ID, InsInsumoInsMarca::GEN_ATTR_INS_MARCA_ID, 'LEFT JOIN');
        $criterio_insumo->addRealJoin(PrvInsumo::GEN_TABLA, PrvInsumo::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID, 'LEFT JOIN');
        $criterio_insumo->setCriterios();

        $ins_insumos = InsInsumo::getInsInsumos($p = new Paginador(10, 1), $criterio_insumo);

        return $ins_insumos;
    }

    /**
     * Metodo que busca y retorna los insumos que tienen la descripcion enviada
     * @return type
     */
    static function controlDescripcionInsInsumoDuplicado($descripcion) {
        $descripcion = trim($descripcion);

        $criterio_insumo = new Criterio();
        $criterio_insumo->add(InsInsumo::GEN_ATTR_DESCRIPCION, $descripcion, Criterio::IGUAL, false, Criterio::_OR);
        $criterio_insumo->addTabla(InsInsumo::GEN_TABLA);
        $criterio_insumo->setCriterios();

//        $p = new Paginador(10, 1);
        $p = null;
        $ins_insumos = InsInsumo::getInsInsumos($p, $criterio_insumo);
        return $ins_insumos;
    }

    /**
     * Metodo que busca y retorna las matrices que tienen la descripcion enviada
     * @return type
     */
    static function controlDescripcionInsMatrizDuplicada($descripcion) {
        $descripcion = trim($descripcion);

        $criterio_matriz = new Criterio();
        $criterio_matriz->add(InsMatriz::GEN_ATTR_DESCRIPCION, $descripcion, Criterio::IGUAL, false, Criterio::_OR);
        $criterio_matriz->addTabla(InsMatriz::GEN_TABLA);
        $criterio_matriz->setCriterios();

//        $p = new Paginador(10, 1);
        $p = null;
        $ins_matrizs = InsMatriz::getInsMatrizs($p, $criterio_matriz);
        return $ins_matrizs;
    }

    static function controlCombinacionInsMarcaIdCodMarcaDuplicada($codigo_marca, $marca_id) {
        if ($codigo_marca != '' && $marca_id != '') {
            $criterio_insumo = new Criterio();
            $criterio_insumo->add(InsInsumo::GEN_ATTR_CODIGO_MARCA, $codigo_marca, Criterio::IGUAL);
            $criterio_insumo->add(InsInsumo::GEN_ATTR_INS_MARCA_ID, $marca_id, Criterio::IGUAL);
            $criterio_insumo->addTabla(InsInsumo::GEN_TABLA);
            $criterio_insumo->setCriterios();

            $p = null;
            $ins_insumos = InsInsumo::getInsInsumos($p, $criterio_insumo);

            if (count($ins_insumos) > 0) {
                return true;
            }
        }
        return false;
    }

    static function controlCombinacionInsMarcaIdCodOemDuplicada($codigo_oem, $marca_pieza_id) {
        if ($codigo_oem != '' && $marca_pieza_id != '') {
            $criterio_matriz = new Criterio();
            $criterio_matriz->add(InsMatriz::GEN_ATTR_CODIGO_PIEZA, $codigo_oem, Criterio::IGUAL);
            $criterio_matriz->add(InsMatriz::GEN_ATTR_INS_MARCA_ID, $marca_pieza_id, Criterio::IGUAL);
            $criterio_matriz->addTabla(InsMatriz::GEN_TABLA);
            $criterio_matriz->setCriterios();

//        $p = new Paginador(10, 1);
            $p = null;
            $ins_matrizs = InsMatriz::getInsMatrizs($p, $criterio_matriz);
//        return $ins_matrizs;

            if (count($ins_matrizs) > 0) {
                return true;
            }
        }
        return false;
    }

    /**
     * Autor: Gustavo Romo
     * Fecha: Octubre 2017
     * @param type $vta_vendedor_id
     * @return type
     */
    public function getDescuentoMaximoXVtaVendedor($vta_vendedor_id) {
        $descuento_maximo = 0;

        // se obtienen las etiquetas desde vinculo con ins etiquetas
        $ins_etiquetas = $this->getInsEtiquetasXInsInsumoInsEtiqueta();
        //Gral::prr($ins_etiquetas);
        // si el insumo no tiene etiquetas no se aplica descuento
        if (count($ins_etiquetas) == 0) {
            return 0;
        }

        foreach ($ins_etiquetas as $ins_etiqueta) {
            $c = new Criterio();
            $c->add(VtaVendedorDescuento::GEN_ATTR_VTA_VENDEDOR_ID, $vta_vendedor_id, Criterio::IGUAL);
            //$ins_etiqueta_id = $ins_etiqueta->getId();
            $c->add(VtaVendedorDescuento::GEN_ATTR_INS_ETIQUETA_ID, $ins_etiqueta->getId(), Criterio::IGUAL);
            $c->addTabla(VtaVendedorDescuento::GEN_TABLA);
            $c->setCriterios();

            $vta_vendedor_descuentos = VtaVendedorDescuento::getVtaVendedorDescuentos(null, $c);
            foreach ($vta_vendedor_descuentos as $vta_vendedor_descuento) {
                if ($vta_vendedor_descuento->getDescuentoMaximo() > $descuento_maximo) {
                    $descuento_maximo = $vta_vendedor_descuento->getDescuentoMaximo();
                }
            }
        }

        return $descuento_maximo;
    }

    public function getInfoAdicionalExtendidaParaTienda() {

        $ins_marca = $this->getInsMarca();
        if ($ins_marca) {
            $ins_marca_descripcion = $ins_marca->getDescripcion();
        }

        $ins_insumo_ins_marcas = $this->getInsInsumoInsMarcas();

        $id = $this->getId();
        $codigo_marca = $this->getCodigoMarca();

        $texto = '<div class="atributos">';

        // ---------------------------------------------------
        // marca del insumo
        // ---------------------------------------------------
        $texto .= '<div class="par atributo"><label class="label" style="color: #AC3825;">Marca:</label> <label class="dato"><strong style="color: #000;">' . $ins_marca_descripcion . '</strong></label></div>';

        // ---------------------------------------------------
        // codigo de marca del insumo
        // ---------------------------------------------------
        $texto .= '<div class="par atributo"><label class="label" style="color: #AC3825;">Codigo de Marca:</label> <label class="dato"><strong style="color: #000;">' . $codigo_marca . '</strong></label></div>';

        // ---------------------------------------------------
        // marcas vinculadas del insumo
        // ---------------------------------------------------
        foreach ($ins_insumo_ins_marcas as $ins_insumo_ins_marca) {
            $ins_marca_vinculada = $ins_insumo_ins_marca->getInsMarca();
            $codigo_marca_vinculada = $ins_insumo_ins_marca->getCodigo();
            $texto .= '<div class="par atributo"><label class="label" style="color: #AC3825;">Cod REF ' . $ins_marca_vinculada->getDescripcion() . ':</label> <label class="dato"><strong style="color: #000;">' . $codigo_marca_vinculada . '</strong></label></div>';
        }

        // ---------------------------------------------------
        // id de LE del insumo
        // ---------------------------------------------------
        $texto .= '<div class="par atributo"><label class="label" style="color: #AC3825;">ID LE:</label> <label class="dato"><strong style="color: #000;">LE-' . $id . '</strong></label></div>';

        $texto .= '</div>';

        $texto .= '<div class="observaciones">';
        $texto .= str_replace('|', '/', $this->getObservacion()); // se quita el caracter | porque se utiliza como separador en el CSV de la tienda
        $texto .= '</div>';


        return $texto;
    }

    public function enviarFichaTecnicaEmail($enviar = false, $destinatarios = false, $txa_observacion = "", $txt_descripcion = false) {
        if (!Mail::MAIL_ACTIVO)
            return false;

        $mail_asunto = Gral::getConfig('gral_cliente') . ' - Ficha Tecnica #' . $this->getId() . ' ' . date('d/m/Y H:i');

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $destinatarios = str_replace(' ', '', $destinatarios);
        $destinatarios = str_replace(',', ';', $destinatarios);
        $arr_destinatarios = explode(";", $destinatarios);

        $param = array(
            'ins_insumo_id' => $this->getId(),
            'descripcion' => $txt_descripcion,
            'observacion' => $txa_observacion,
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/GENERAL/index_ins_insumo_ficha_tecnica.php";
        $msg = Gral::get_include_contents($archivo, $param);

        if (!$enviar) {
            echo $msg;
            return;
        }

        if (!empty($archivo_adjunto_urls)) {
            foreach ($archivo_adjunto_urls as $nombre_archivo => $contenido_archivo) {
                $strContenidoPdf = $contenido_archivo;
            }
        }

        // ---------------------------------------------------------------------
        // se inicializa registro de envio de correo
        // ---------------------------------------------------------------------
        $ins_insumo_enviado = $this->inicializarInsInsumoEnviado($txa_observacion, $destinatarios, $mail_asunto, $msg, $strContenidoPdf);


        $mail = new PHPMailer(); // defaults to using php "mail()"

        try {
            //$mail->SetLanguage('es', 'language/');
            $mail->IsSMTP(); //indico a la clase que use SMTP
            $mail->SMTPAuth = true;
            $mail->SMTPDebug = 0;
            if (Mail::MAIL_SECURE != '') {
                $mail->SMTPSecure = Mail::MAIL_SECURE;
            }
            $mail->CharSet = 'UTF-8';

            $mail->Host = Mail::MAIL_SERVIDOR_ENVIO; // SMTP server
            $mail->Username = Mail::MAIL_CASILLA_USUARIO;
            $mail->Password = Mail::MAIL_PASS_ENVIO;
            $mail->Port = Mail::MAIL_PUERTO_ENVIO;

            $mail->From = Mail::MAIL_CASILLA_ENVIO;
            $mail->FromName = Mail::MAIL_NOMBRE_REMITENTE;
            $mail->AddReplyTo(Mail::MAIL_CASILLA_REPLYTO);

            $mail->IsHTML(true);
            $mail->Subject = $mail_asunto;

            $mail->Body = $msg;

            if (!empty($arr_destinatarios)) {
                foreach ($arr_destinatarios as $arr_destinatario) {
                    if (filter_var($arr_destinatario, FILTER_VALIDATE_EMAIL)) { // comprobarEmail($destinatario)
                        $mail->AddAddress($arr_destinatario); //destinatarios
                    }
                }
            }

            // -----------------------------------------------------------------
            // se adjuntan las imagenes
            // -----------------------------------------------------------------
            $ins_insumo_imagens = $this->getInsInsumoImagens();

            foreach ($ins_insumo_imagens as $ins_insumo_imagen) {
                $path_archivo = $ins_insumo_imagen->getPathImagen();
                $contenido_archivo = file_get_contents($path_archivo);
                $nombre_archivo = $ins_insumo_imagen->getArchivo();

                $mime = File::getMimeFromTipo($ins_insumo_imagen->getTipo());
                $mail->AddStringAttachment($contenido_archivo, $nombre_archivo, 'base64', $mime);
            }

            $mail->Timeout = 20;

            $envio_ok = $mail->Send();

            if ($envio_ok) {
                // se confirma envio correcto
                $ins_insumo_enviado->setConfirmarInsInsumoEnviado(1, InsInsumoEnviado::INSUMO_ENVIADO_CORRECTAMENTE);
            } else {
                // se confirma envio fallido
                $ins_insumo_enviado->setConfirmarInsInsumoEnviado(0, $mail->ErrorInfo);
            }


            return $envio_ok;
        } catch (phpmailerException $e) {
            echo $e->errorMessage(); //Pretty error messages from PHPMailer
        } catch (Exception $e) {
            echo $e->getMessage(); //Boring error messages from anything else!
        }

        return false;
    }

    public function inicializarInsInsumoEnviado($observacion, $destinatarios, $mail_asunto, $mail_contenido, $archivo_adjunto) {
        $ins_insumo_enviado = new InsInsumoEnviado();
        $ins_insumo_enviado->setDescripcion('');
        $ins_insumo_enviado->setInsInsumoId($this->getId());
        $ins_insumo_enviado->setAsunto($mail_asunto);
        $ins_insumo_enviado->setDestinatario($destinatarios);

        $ins_insumo_enviado->setCuerpo(addslashes($mail_contenido));
        $ins_insumo_enviado->setAdjunto(base64_encode($archivo_adjunto));

        $ins_insumo_enviado->setCodigoEnvio(0);
        $ins_insumo_enviado->setObservacion($observacion);
        $ins_insumo_enviado->setEstado(0);

        $ins_insumo_enviado->save();

        return $ins_insumo_enviado;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 22/05/2013 17:00 hs
     * Metodo que retorna los valores de Puntos de Minimo, Pedido y Maximo de un Insumo en un Panol determinado
     * @param type $pan_panol
     * @return type
     */
    public function getInsInsumoPuntosEnPanol($pan_panol) {
        $punto_minimo = $this->getPuntoMinimo();
        $punto_pedido = $this->getPuntoPedido();
        $punto_maximo = $this->getPuntoMaximo();

        $c = new Criterio();
        $c->add(InsInsumoPanPanol::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(InsInsumoPanPanol::GEN_ATTR_PAN_PANOL_ID, $pan_panol->getId(), Criterio::IGUAL);
        $c->addTabla(InsInsumoPanPanol::GEN_TABLA);
        $c->setCriterios();
        $ins_insumo_pan_panols = InsInsumoPanPanol::getInsInsumoPanPanols(null, $c);
        foreach ($ins_insumo_pan_panols as $ins_insumo_pan_panol) {
            $punto_minimo = $ins_insumo_pan_panol->getPuntoMinimo();
            $punto_pedido = $ins_insumo_pan_panol->getPuntoPedido();
            $punto_maximo = $ins_insumo_pan_panol->getPuntoMaximo();
        }

        $arr = array(
            self::PUNTO_MINIMO => $punto_minimo,
            self::PUNTO_PEDIDO => $punto_pedido,
            self::PUNTO_MAXIMO => $punto_maximo,
        );
        return $arr;
    }
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 22/05/2013 17:00 hs
     * Metodo que retorna los valores de Puntos de Minimo, Pedido y Maximo de un Insumo en un Panol determinado
     * @param type $pan_panol
     * @return type
     */
    public function getInsInsumoPuntosSugeridosEnPanol($pan_panol) {
        $punto_minimo = 0;
        $punto_pedido = 0;
        $punto_maximo = 0;

        $c = new Criterio();
        $c->add(InsInsumoPanPanol::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(InsInsumoPanPanol::GEN_ATTR_PAN_PANOL_ID, $pan_panol->getId(), Criterio::IGUAL);
        $c->addTabla(InsInsumoPanPanol::GEN_TABLA);
        $c->setCriterios();
        $ins_insumo_pan_panols = InsInsumoPanPanol::getInsInsumoPanPanols(null, $c);
        foreach ($ins_insumo_pan_panols as $ins_insumo_pan_panol) {
            $punto_minimo = $ins_insumo_pan_panol->getPuntoMinimoSugerido();
            $punto_pedido = $ins_insumo_pan_panol->getPuntoPedidoSugerido();
            $punto_maximo = $ins_insumo_pan_panol->getPuntoMaximoSugerido();
        }

        $arr = array(
            self::PUNTO_MINIMO => $punto_minimo,
            self::PUNTO_PEDIDO => $punto_pedido,
            self::PUNTO_MAXIMO => $punto_maximo,
        );
        return $arr;
    }
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 22/05/2013 17:00 hs
     * Metodo que retorna los valores de Puntos de Minimo, Pedido y Maximo de un Insumo en un Panol determinado
     * @param type $pan_panol
     * @return type
     */
    public function getInsInsumoPuntosSugeridosEnPanol_OLD($pan_panol) {

        $gral_sucursal = $pan_panol->getGralSucursalXGralSucursalPanPanol();
        
        if($gral_sucursal){

            //Gral::pr('--------------------------------------------------------------------------------------------------------------------------');
            //Gral::pr($this->getDescripcion());
            //Gral::pr($gral_sucursal->getDescripcion());
            // -----------------------------------------------------------------
            // se consultan productos vendidos historicamente por la sucursal
            // -----------------------------------------------------------------
            $c = new Criterio();
            $c->add(InsInsumo::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
            $c->add(GralSucursal::GEN_ATTR_ID, $gral_sucursal->getId(), Criterio::IGUAL);
            $c->add(VtaOrdenVenta::GEN_ATTR_CREADO, '2021-01-01', Criterio::MAYORIGUAL);
            $c->add(VtaOrdenVenta::GEN_ATTR_CREADO, date('Y-m-d'), Criterio::MENORIGUAL);
            $c->add(VtaOrdenVentaTipoEstado::GEN_ATTR_CODIGO, VtaOrdenVentaTipoEstado::TIPO_FINALIZADO, Criterio::IGUAL);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVentaTipoEstado::GEN_TABLA, VtaOrdenVentaTipoEstado::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID);
            $c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID);
            $c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID);
            $c->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_ID);
            $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas(null, $c);
            foreach($vta_orden_ventas as $vta_orden_venta){
                $arr_fecha = Date::getArrFecha($vta_orden_venta->getCreado());
                
                $arr_periodo[$arr_fecha['mes']]+= $vta_orden_venta->getCantidad();
            }
            //Gral::prr($arr_periodo);
            
            if(count($arr_periodo) > 0){
                $punto_minimo = 1000000;
                $punto_maximo = 0;
                foreach($arr_periodo as $cantidad){
                    if($cantidad < $punto_minimo){
                        $punto_minimo = $cantidad;
                    }
                    if($cantidad > $punto_maximo){
                        $punto_maximo = $cantidad;
                    }
                }
                $punto_minimo = floor($punto_minimo / 4); // se divide por 4 para tener un dato semanal
                $punto_maximo = floor($punto_maximo / 4); // se divide por 4 para tener un dato semanal

                $punto_pedido = floor(($punto_minimo + $punto_maximo) / 2);
            }
            $arr = array(
                self::PUNTO_MINIMO => $punto_minimo,
                self::PUNTO_PEDIDO => $punto_pedido,
                self::PUNTO_MAXIMO => $punto_maximo,
            );
            //Gral::prr($arr);
            return $arr;
        }
        
        return false;
    }
    
    public function setInsInsumoPuntosSugeridosEnPanol($pan_panol, $punto_minimo, $punto_pedido_punto_maximo) {
        
    }    

    /**
     * Metodo que registra un movimiento de stock del insumo
     * @param type $pdi_pedido
     * @param type $pdi_estado
     * @param type $ins_stock_tipo_movimiento
     * @param type $ins_insumo_identificado_tipo_estado_anterior
     * @param type $ins_insumo_identificado_tipo_estado_nuevo
     * @return boolean
     */
    public function setInsStockMovimiento(
    $pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento, $ins_insumo_identificado_tipo_estado_anterior = false, $ins_insumo_identificado_tipo_estado_nuevo = false, $observacion = ''
    ) {
        $multiplicador = 1;
        //$ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_RESERVA);
        if (!$ins_stock_tipo_movimiento->getSuma()) {
            $multiplicador = -1;
        }

        // el movimiento de stock se aplica sobre el panol correspondiente de acuerdo al tipo de movimiento
        // puede ser panol ORIGEN o DESTINO
        switch ($ins_stock_tipo_movimiento->getCodigo()) {
            case InsStockTipoMovimiento::TIPO_MOV_INICIALIZACION:
            case InsStockTipoMovimiento::TIPO_MOV_AJUSTE_POSITIVO:
            case InsStockTipoMovimiento::TIPO_MOV_AJUSTE_NEGATIVO:
            case InsStockTipoMovimiento::TIPO_MOV_INGRESO:
            case InsStockTipoMovimiento::TIPO_MOV_REINGRESO:
                $pan_panol = PanPanol::getOxId($pdi_pedido->getPanPanolOrigen());
                break;
            default:
                $pan_panol = PanPanol::getOxId($pdi_pedido->getPanPanolDestino());
        }

        // si existe tipo de estado anterior, si es insumo identificable siempre existe estado anterior
        if ($ins_insumo_identificado_tipo_estado_anterior) {
            $cantidad = 0;
            $cantidad_pasivo = 0;


            // se deduce el movimiento de stock pasivo o activo de acuerdo a los estados de los insumos
            if ($pdi_pedido->getPanPanolOrigen() == $pdi_pedido->getPanPanolDestino()) {
                // si se mueve en el mismo panol
                if ($ins_insumo_identificado_tipo_estado_anterior->getStockActivo()) {
                    $cantidad = 1 * (-1);

                    // excepcion para movimientos negativos
                    if (!$ins_stock_tipo_movimiento->getSuma()) {
                        $cantidad = $cantidad * (-1); // no debe cambiar el numero, ya que es para cambiar el signo
                    }

                    if ($ins_insumo_identificado_tipo_estado_nuevo->getStockPasivo()) {
                        $cantidad_pasivo = 1 * (1);
                    } elseif ($ins_insumo_identificado_tipo_estado_nuevo->getStockActivo()) {
                        $cantidad = 0;

                        // excepcion para modulo de envios, ya que el panol origen es igual al panol destino
                        if ($pdi_pedido->getPdiTipoOrigen()->getCodigo() == PdiTipoOrigen::TIPO_ORIGEN_ENVIO) {
                            $cantidad = 1 * (1); // debe ser positivo porque es salida y el tipo movimiento cambia el signo
                        }
                    }
                } elseif ($ins_insumo_identificado_tipo_estado_anterior->getStockPasivo()) {
                    $cantidad_pasivo = 1 * (-1);

                    // excepcion para movimientos negativos
                    if (!$ins_stock_tipo_movimiento->getSuma()) {
                        $cantidad_pasivo = $cantidad_pasivo * (-1); // no debe cambiar el numero, ya que es para cambiar el signo
                    }

                    if ($ins_insumo_identificado_tipo_estado_nuevo->getStockActivo()) {
                        $cantidad = 1 * (1);
                    } elseif ($ins_insumo_identificado_tipo_estado_nuevo->getStockPasivo()) {
                        $cantidad_pasivo = 0;

                        // excepcion para modulo de envios, ya que el panol origen es igual al panol destino
                        if ($pdi_pedido->getPdiTipoOrigen()->getCodigo() == PdiTipoOrigen::TIPO_ORIGEN_ENVIO) {
                            $cantidad_pasivo = 1 * (1); // debe ser positivo porque es salida y el tipo movimiento cambia el signo
                        }
                    }
                } else {
                    if ($ins_insumo_identificado_tipo_estado_nuevo->getStockActivo()) {
                        $cantidad = 1 * (1);
                    } elseif ($ins_insumo_identificado_tipo_estado_nuevo->getStockPasivo()) {
                        $cantidad_pasivo = 1 * (1);
                    }
                }
            } else {
                // si se mueve entre distintos panoles
                if ($ins_insumo_identificado_tipo_estado_anterior->getStockActivo()) {
                    $cantidad = 1 * (1);
                } elseif ($ins_insumo_identificado_tipo_estado_anterior->getStockPasivo()) {
                    $cantidad_pasivo = 1 * (1);
                } else {
                    if ($ins_insumo_identificado_tipo_estado_nuevo->getStockActivo()) {
                        $cantidad = 1 * (1);
                    } elseif ($ins_insumo_identificado_tipo_estado_nuevo->getStockPasivo()) {
                        $cantidad_pasivo = 1 * (1);
                    }
                }
            }
        } else {
            // si no es insumo identificable
            $cantidad = $pdi_estado->getCantidad();
            $cantidad_pasivo = 0;
        }

        // se registra Movimiento de Stock Reservado
        $ins_stock_movimiento = new InsStockMovimiento();
        $ins_stock_movimiento->setInsStockTipoMovimientoId($ins_stock_tipo_movimiento->getId());
        $ins_stock_movimiento->setInsInsumoId($this->getId());
        $ins_stock_movimiento->setPdiPedidoId($pdi_pedido->getId());
        $ins_stock_movimiento->setPanPanolId($pan_panol->getId());
        $ins_stock_movimiento->setCantidad($cantidad * $multiplicador);
        $ins_stock_movimiento->setCantidadPasivo($cantidad_pasivo * $multiplicador);
        $ins_stock_movimiento->setFechahora(date('Y-m-d H:i:s'));
        $ins_stock_movimiento->setEstado(1);
        $ins_stock_movimiento->save();

        // se recalcula Resumen de Stock  
        $ins_stock_resumen = InsStockResumen::setRecalcularStockInsumo($pan_panol, $this);

        //se cargan cantidades actuales desde ins_stock_resumen (fotografia de la realidad)
        $ins_stock_movimiento->setCantidadReal($ins_stock_resumen->getCantidadReal());
        $ins_stock_movimiento->setCantidadComprometida($ins_stock_resumen->getCantidadComprometida());

        // se actualiza en el registro de movimiento la cantidad actual de stock, para info historica
        $ins_stock_movimiento->setOrden($ins_stock_resumen->getCantidadReal());
        //$ins_stock_movimiento->setObservacion('Disponibles: ' . $ins_stock_resumen->getCantidad() . ' - Reservados: ' . $ins_stock_resumen->getCantidadComprometida() . ' - Total en Stock: ' . $ins_stock_movimiento->getOrden());
        $ins_stock_movimiento->setObservacion($observacion);
        $ins_stock_movimiento->save();

        // se redefine el estado de stock del insumo
        PrcProceso::controlStockInsumosTipoEstado($ins_stock_resumen->getId());

        return true;
    }

    /**
     * Metodo que registra un movimiento de stock de un insumo en un panol determinado, sin registrar pedido
     * Se utiliza para realizar ajustes de stock particularmente por anomalias en movimientos de cubiertas
     * @param type $cantidad
     * @param type $cantidad_pasivo
     * @param type $pan_panol
     * @return boolean
     */
    public function setInsStockMovimientoDirecto(
    $cantidad, $cantidad_pasivo, $pan_panol
    ) {

        if ($cantidad < 0 || $cantidad_pasivo < 0) {
            $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_AJUSTE_NEGATIVO);
        } else {
            $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_AJUSTE_POSITIVO);
        }

        // se registra Movimiento de Stock Reservado
        $ins_stock_movimiento = new InsStockMovimiento();
        $ins_stock_movimiento->setDescripcion('Ajuste Directo');
        $ins_stock_movimiento->setInsStockTipoMovimientoId($ins_stock_tipo_movimiento->getId());
        $ins_stock_movimiento->setInsInsumoId($this->getId());
        //$ins_stock_movimiento->setPdiPedidoId();
        $ins_stock_movimiento->setPanPanolId($pan_panol->getId());
        $ins_stock_movimiento->setCantidad($cantidad);
        $ins_stock_movimiento->setCantidadPasivo($cantidad_pasivo);
        $ins_stock_movimiento->setFechahora(date('Y-m-d H:i:s'));
        $ins_stock_movimiento->setEstado(1);
        $ins_stock_movimiento->save();

        // se recalcula Resumen de Stock  
        $ins_stock_resumen = InsStockResumen::setRecalcularStockInsumo($pan_panol, $this);

        //se cargan cantidades actuales desde ins_stock_resumen (fotografia de la realidad)
        $ins_stock_movimiento->setCantidadReal($ins_stock_resumen->getCantidadReal());
        $ins_stock_movimiento->setCantidadComprometida($ins_stock_resumen->getCantidadComprometida());

        // se actualiza en el registro de movimiento la cantidad actual de stock, para info historica
        $ins_stock_movimiento->setOrden($ins_stock_resumen->getCantidadReal());
        $ins_stock_movimiento->setObservacion('Disponibles: ' . $ins_stock_resumen->getCantidad() . ' - Reservados: ' . $ins_stock_resumen->getCantidadComprometida() . ' - Total en Stock: ' . $ins_stock_movimiento->getOrden());
        $ins_stock_movimiento->save();

        return true;
    }

    public function setInsStockMovimientoDesdeGestionOt($panol_id, $cantidad, $ins_stock_tipo_movimiento) {
        $multiplicador = 1;
        //$ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_RESERVA);
        if (!$ins_stock_tipo_movimiento->getSuma()) {
            $multiplicador = -1;
        }

        $pan_panol = PanPanol::getOxId($panol_id);

        // se registra Movimiento de Stock Reservado
        $ins_stock_movimiento = new InsStockMovimiento();
        $ins_stock_movimiento->setInsStockTipoMovimientoId($ins_stock_tipo_movimiento->getId());
        $ins_stock_movimiento->setInsInsumoId($this->getId());
        $ins_stock_movimiento->setPdiPedidoId(null);
        $ins_stock_movimiento->setPanPanolId($pan_panol->getId());
        $ins_stock_movimiento->setCantidad($cantidad * $multiplicador);
        $ins_stock_movimiento->setFechahora(date('Y-m-d H:i:s'));
        $ins_stock_movimiento->setEstado(1);
        $ins_stock_movimiento->save();

        // se recalcula Resumen de Stock  
        $ins_stock_resumen = InsStockResumen::setRecalcularStockInsumo($pan_panol, $this);

        //se cargan cantidades actuales desde ins_stock_resumen (fotografia de la realidad)
        $ins_stock_movimiento->setCantidadReal($ins_stock_resumen->getCantidadReal());
        $ins_stock_movimiento->setCantidadComprometida($ins_stock_resumen->getCantidadComprometida());

        // se actualiza en el registro de movimiento la cantidad actual de stock, para info historica
        $ins_stock_movimiento->setOrden($ins_stock_resumen->getCantidadReal());
        $ins_stock_movimiento->setObservacion('Disponibles: ' . $ins_stock_resumen->getCantidad() . ' - Reservados: ' . $ins_stock_resumen->getCantidadComprometida() . ' - Total en Stock: ' . $ins_stock_movimiento->getOrden());
        $ins_stock_movimiento->save();

        return true;
    }

    /**
     * 
     * @param type $pan_panol
     * @return boolean
     */
    public function getInsStockResumenEnPanol($pan_panol) {
        $c = new Criterio();
        $c->add(InsStockResumen::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(InsStockResumen::GEN_ATTR_PAN_PANOL_ID, $pan_panol->getId(), Criterio::IGUAL);
        $c->addTabla(InsStockResumen::GEN_TABLA);
        $c->setCriterios();

        $ins_stock_resumens = InsStockResumen::getInsStockResumens(new Paginador(1, 1), $c);
        foreach ($ins_stock_resumens as $ins_stock_resumen) {
            return $ins_stock_resumen;
        }
        return false;
    }

    /**
     * 
     * @param type $pan_panol
     * @return boolean
     */
    public function getInsInsumoReservasActivasCantidadEnPanol($pan_panol) {
        $c = new Criterio();
        $c->add(InsStockMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID, $pan_panol->getId(), Criterio::IGUAL);
        $c->add(InsStockTipoMovimiento::GEN_ATTR_CODIGO, InsStockTipoMovimiento::TIPO_MOV_RESERVA, Criterio::IGUAL);
        $c->addTabla(InsStockMovimiento::GEN_TABLA);
        $c->addRealJoin(InsStockTipoMovimiento::GEN_TABLA, InsStockTipoMovimiento::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_INS_STOCK_TIPO_MOVIMIENTO_ID);
        $c->setCriterios();

        $cantidad = 0;
        //$p = new Paginador(100, 1);
        $p = null;
        $ins_stock_movimientos = InsStockMovimiento::getInsStockMovimientos($p, $c);
        foreach ($ins_stock_movimientos as $ins_stock_movimiento) {
            $cantidad += abs($ins_stock_movimiento->getCantidad());
        }
        return $cantidad;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 24/06/2013 16:14 hs
     * Metodo que realiza el control de Puntos de Stock de acuerdo a las configuraciones del Sistema y 
     * genera PdiPedidos Automaticos y Alertas en el Sistema.
     * 
     * @param type $ins_insumo
     * @param type $pan_panol
     */
    static function execPrcControlPuntosStock($ins_insumo, $pan_panol) {
        return false;

        $ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol);
        $arr_puntos = $ins_insumo->getInsInsumoPuntosEnPanol($pan_panol);

        $cantidad_actual = $ins_stock_resumen->getCantidad();
        $punto_minimo = $arr_puntos[InsInsumo::PUNTO_MINIMO];
        $punto_pedido = $arr_puntos[InsInsumo::PUNTO_PEDIDO];
        $punto_maximo = $arr_puntos[InsInsumo::PUNTO_MAXIMO];

        // excepcion para cuando no está configurado un punto de pedido, entonce se omite el proceso
        if ($punto_pedido == 0)
            return false;

        $cantidad_a_solicitar = $punto_pedido - $cantidad_actual;
        $cantidad_a_solicitar = $cantidad_a_solicitar + ceil(($punto_maximo - $punto_pedido) / 2);

        if ($cantidad_actual > $punto_pedido) {
            // controlar que no sea mayor a maximo, sino ALERTA
            if ($cantidad_actual > $punto_maximo) {
                // Alerta Superior a Maximo
            }
        } elseif ($cantidad_actual <= $punto_pedido) {

            // crear nuevo pedido automatico, controlando que no haya pedido en espera vigente
            $c = new Criterio();
            $c->add(PdiPedido::GEN_ATTR_INS_INSUMO_ID, $ins_insumo->getId(), Criterio::IGUAL);
            $c->add(PdiPedido::GEN_ATTR_PAN_PANOL_ORIGEN, $pan_panol->getId(), Criterio::IGUAL);
            $c->add(PdiPedido::GEN_ATTR_PAN_PANOL_DESTINO, $pan_panol->getId(), Criterio::DISTINTO);
            $c->add(PdiEstado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
            $c->add(PdiTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
            $c->addTabla(PdiPedido::GEN_TABLA);
            $c->addRealJoin(PdiEstado::GEN_TABLA, PdiEstado::GEN_ATTR_PDI_PEDIDO_ID, PdiPedido::GEN_ATTR_ID);
            $c->addRealJoin(PdiTipoEstado::GEN_TABLA, PdiTipoEstado::GEN_ATTR_ID, PdiEstado::GEN_ATTR_PDI_TIPO_ESTADO_ID);
            $c->setCriterios();

            $pdi_pedidos = PdiPedido::getPdiPedidos(null, $c);
            //Gral::prr($pdi_pedidos);
            if (count($pdi_pedidos) == 0) { // si es cero no hay pedido activo actualmente de ese insumo en ese panol
                $pdi_pedido = new PdiPedido();
                $pdi_pedido->setInsInsumoId($ins_insumo->getId());
                $pdi_pedido->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_PROCESO)->getId());
                $pdi_pedido->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_ALTA)->getId());
                $pdi_pedido->setPanPanolOrigen($pan_panol->getId());
                $pdi_pedido->setPanPanolDestino($pan_panol->getId());
                //$pdi_pedido->setObservacion($pdi_pedido_txa_observacion);
                $pdi_pedido->setEstado(1);
                $pdi_pedido->save();
                $pdi_pedido->setCodigo($pdi_pedido->getCodigoConCeros());
                $pdi_pedido->save();

                // se registra estado del pedido, PdiEstado
                $pdi_estado = $pdi_pedido->setPdiPedidoEstado(
                        PdiTipoEstado::TIPO_ESTADO_GENERADO, $cantidad_a_solicitar, ''
                );

                // se registran destinatarios del pedido, PdiPedidoDestinatario
                $pdi_pedido->setPdiPedidoDestinatarios();
            }

            //controlar que no sea menor al minimo, sino ALERTA
            if ($cantidad_actual <= $punto_minimo) {
                // Alerta Inferior a Minimo
            }
        }
        //Gral::prr($ins_stock_resumen);
        //Gral::prr($arr_puntos);        
    }

    /**
     * Metodo que retorna origen de datos para combo de insumos discriminado por categorias
     * @param type $ins_categoria_id
     */
    static function getInsInsumosCmbFXInsCategoria($ins_categoria_id = null) {
        $c = new Criterio();
        if ($ins_categoria_id) {
            $c->add(InsInsumo::GEN_ATTR_INS_CATEGORIA_ID, $ins_categoria_id, Criterio::IGUAL);
        }
        $c->addTabla(InsInsumo::GEN_TABLA);
        $c->addOrden(InsInsumo::GEN_ATTR_DESCRIPCION, 'asc');
        $c->setCriterios();
        return parent::getInsInsumosCmbF(null, $c);
    }

    public function getTieneUbicacionEnPanol($pan_panol) {
        // ubicacion y puntos de stock

        $array = array(
            array('campo' => 'ins_insumo_id', 'valor' => $this->getId()),
            array('campo' => 'pan_panol_id', 'valor' => $pan_panol->getId()),
        );
        $ins_insumo_pan_panol = InsInsumoPanPanol::getOxArray($array);
        if ($ins_insumo_pan_panol) {
            $ubicado = false;

            if ($ins_insumo_pan_panol->getPanUbiPisoId() != 'null') {
                $ubicado = true;
            }
            if ($ins_insumo_pan_panol->getPanUbiPasilloId() != 'null') {
                $ubicado = true;
            }
            if ($ins_insumo_pan_panol->getPanUbiEstanteId() != 'null') {
                $ubicado = true;
            }
            if ($ins_insumo_pan_panol->getPanUbiAlturaId() != 'null') {
                $ubicado = true;
            }
            return $ubicado;
        }
        return false;
    }

    public function getUbicacionEnPanol($pan_panol) {
        $ins_insumo = $this;

        $array = array(
            array('campo' => 'ins_insumo_id', 'valor' => $ins_insumo->getId()),
            array('campo' => 'pan_panol_id', 'valor' => $pan_panol->getId()),
        );
        $ins_insumo_pan_panol = InsInsumoPanPanol::getOxArray($array);
        if ($ins_insumo_pan_panol) {
            return $ins_insumo_pan_panol;
        }
        return false;
    }

    static function getInsInsumosConsumiblesCmb() {
        $criterio = new Criterio();
        $criterio->add(InsInsumo::GEN_ATTR_ES_CONSUMIBLE, 1, Criterio::IGUAL);
        $criterio->addTabla(InsInsumo::GEN_TABLA);
        $criterio->addOrden(InsInsumo::GEN_ATTR_DESCRIPCION);
        $criterio->setCriterios();
        $paginador = null;

        $arr = InsInsumo::getInsInsumosCmbF($paginador, $criterio);
        return $arr;
    }

    static function getInsInsumosComprablesCmb() {
        $criterio = new Criterio();
        $criterio->add(InsInsumo::GEN_ATTR_ES_COMPRABLE, 1, Criterio::IGUAL);
        $criterio->addTabla(InsInsumo::GEN_TABLA);
        $criterio->addOrden(InsInsumo::GEN_ATTR_DESCRIPCION);
        $criterio->setCriterios();
        $paginador = null;

        $arr = InsInsumo::getInsInsumosCmbF($paginador, $criterio);
        return $arr;
    }

    static function getInsInsumosTransformablesOrigenCmb() {
        $criterio = new Criterio();
        $criterio->add(InsInsumo::GEN_ATTR_ES_TRANSFORMABLE_ORIGEN, 1, Criterio::IGUAL);
        $criterio->addTabla(InsInsumo::GEN_TABLA);
        $criterio->addOrden(InsInsumo::GEN_ATTR_DESCRIPCION);
        $criterio->setCriterios();
        $paginador = null;

        $arr = InsInsumo::getInsInsumosCmbF($paginador, $criterio);
        return $arr;
    }

    static function getInsInsumosTransformablesDestinoCmb() {
        $criterio = new Criterio();
        $criterio->add(InsInsumo::GEN_ATTR_ES_TRANSFORMABLE_DESTINO, 1, Criterio::IGUAL);
        $criterio->addTabla(InsInsumo::GEN_TABLA);
        $criterio->addOrden(InsInsumo::GEN_ATTR_DESCRIPCION);
        $criterio->setCriterios();
        $paginador = null;

        $arr = InsInsumo::getInsInsumosCmbF($paginador, $criterio);
        return $arr;
    }

    public function getBarcodeInternoCodigoEPL($cantidad = 1) {
        $texto = 'N
q540
A0,10,0,4,1,1,N," ' . $this->getCodigoInterno() . '"
A0,45,0,3,1,1,N,"' . $this->getDescripcionCorta() . '"
A100,80,0,1,1,2,R,"             ' . Gral::getConfig('gral_cliente') . '             "
B100,110,0,1,3,0,60,N,"' . $this->getCodigoBarraInterno() . '"
P' . $cantidad . ',1
        ';

        return $texto;
    }

    /**
     * Metodo que retorna los proveedores propuestos de acuerdo al insumo indicado, para realizar un pedido
     */
    public function getPrvProveedorsPropuestosParaPdePedido($pde_centro_pedido_id = false) {
        //$prv_proveedors = PrvProveedor::getPrvProveedors();

        $ins_categoria = $this->getInsCategoria();
        if (trim($ins_categoria->getCodigo() != '')) {
            $prv_rubro = PrvRubro::getOxCodigo($ins_categoria->getCodigo());
        }

        $arr_proveedors = array();

        // ----------------- OCs -------------------------------
        // se obtienen los proveedores de compras anteriores
        $pde_ocs = $this->getPdeOcs();
        foreach ($pde_ocs as $pde_oc) {
            // se controla que pertenezca al centro de pedido
            if ($pde_oc->getPdePedido()->getPdeCentroPedidoId() != $pde_centro_pedido_id)
                continue;

            $arr_proveedors[$pde_oc->getPrvProveedorId()] = $pde_oc->getPrvProveedor();
        }

        // --------------- Cotizaciones -------------------------
        // se obtienen los proveedores de cotizaciones anteriores
        $pde_cotizacions = $this->getPdeCotizacions();
        foreach ($pde_cotizacions as $pde_cotizacion) {
            // se controla que pertenezca al centro de pedido
            if ($pde_cotizacion->getPdePedido()->getPdeCentroPedidoId() != $pde_centro_pedido_id)
                continue;

            $arr_proveedors[$pde_cotizacion->getPrvProveedorId()] = $pde_cotizacion->getPrvProveedor();
        }

        // ---------------- Pedidos -----------------------------
        // se obtienen los proveedores de pedidos anteriores
        $pde_pedidos = $this->getPdePedidos();
        foreach ($pde_pedidos as $pde_pedido) {
            // se controla que pertenezca al centro de pedido
            if ($pde_pedido->getPdeCentroPedidoId() != $pde_centro_pedido_id)
                continue;

            $prv_proveedors = $pde_pedido->getPrvProveedorsXPdePedidoPrvProveedor();
            foreach ($prv_proveedors as $prv_proveedor) {
                $arr_proveedors[$prv_proveedor->getId()] = $prv_proveedor;
            }
        }

        // ---------------- x Rubro ------------------------------
        // se obtienen proveedores de vinculacion con rubros del insumo
        if ($prv_rubro) {
            //$prv_proveedors = $prv_rubro->getPrvProveedorsXPrvProveedorPrvRubro();
            $c = new Criterio();
            if ($pde_centro_pedido_id) {
                $c->add(PdeCentroPedido::GEN_ATTR_ID, $pde_centro_pedido_id, Criterio::IGUAL);
            }
            $c->add(PrvRubro::GEN_ATTR_ID, $prv_rubro->getId(), Criterio::IGUAL);
            $c->addTabla(PrvProveedor::GEN_TABLA);
            $c->addRealJoin(PrvProveedorPrvRubro::GEN_TABLA, PrvProveedorPrvRubro::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addRealJoin(PrvRubro::GEN_TABLA, PrvRubro::GEN_ATTR_ID, PrvProveedorPrvRubro::GEN_ATTR_PRV_RUBRO_ID);
            $c->addRealJoin(PdeCentroPedidoPrvProveedor::GEN_TABLA, PdeCentroPedidoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
            $c->addRealJoin(PdeCentroPedido::GEN_TABLA, PdeCentroPedido::GEN_ATTR_ID, PdeCentroPedidoPrvProveedor::GEN_ATTR_PDE_CENTRO_PEDIDO_ID);
            $c->addOrden(PrvProveedor::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
            $c->setCriterios();
            $prv_proveedors = PrvProveedor::getPrvProveedors(null, $c);
        }
        foreach ($prv_proveedors as $prv_proveedor) {
            //$arr_proveedors[$prv_proveedor->getId()] = $prv_proveedor;
        }

        // ---------------- x Insumo -------------------------------------------
        // se obtienen proveedores de vinculacion con insumo directo
        $c = new Criterio();
        if ($pde_centro_pedido_id) {
            $c->add(PdeCentroPedido::GEN_ATTR_ID, $pde_centro_pedido_id, Criterio::IGUAL);
        }
        $c->add(InsInsumo::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(PrvProveedor::GEN_TABLA);
        $c->addRealJoin(InsInsumoPrvProveedor::GEN_TABLA, InsInsumoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
        $c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, InsInsumoPrvProveedor::GEN_ATTR_INS_INSUMO_ID);
        $c->addRealJoin(PdeCentroPedidoPrvProveedor::GEN_TABLA, PdeCentroPedidoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
        $c->addRealJoin(PdeCentroPedido::GEN_TABLA, PdeCentroPedido::GEN_ATTR_ID, PdeCentroPedidoPrvProveedor::GEN_ATTR_PDE_CENTRO_PEDIDO_ID);
        $c->addOrden(PrvProveedor::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
        $c->setCriterios();
        $prv_proveedors = PrvProveedor::getPrvProveedors(null, $c);
        foreach ($prv_proveedors as $prv_proveedor) {
            $arr_proveedors[$prv_proveedor->getId()] = $prv_proveedor;
        }

        // ---------------- x PrvInsumo -------------------------------------------
        // se obtienen proveedores de vinculacion con insumo por listas de precio
        $c = new Criterio();
        if ($pde_centro_pedido_id) {
            //$c->add(PdeCentroPedido::GEN_ATTR_ID, $pde_centro_pedido_id, Criterio::IGUAL);
        }
        $c->add(InsInsumo::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(PrvProveedor::GEN_TABLA);
        $c->addRealJoin(PrvInsumo::GEN_TABLA, PrvInsumo::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
        $c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, PrvInsumo::GEN_ATTR_INS_INSUMO_ID);
        //$c->addRealJoin(PdeCentroPedidoPrvProveedor::GEN_TABLA, PdeCentroPedidoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
        //$c->addRealJoin(PdeCentroPedido::GEN_TABLA, PdeCentroPedido::GEN_ATTR_ID, PdeCentroPedidoPrvProveedor::GEN_ATTR_PDE_CENTRO_PEDIDO_ID);
        $c->addOrden(PrvProveedor::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
        $c->setCriterios();
        $prv_proveedors = PrvProveedor::getPrvProveedors(null, $c);
        foreach ($prv_proveedors as $prv_proveedor) {
            $arr_proveedors[$prv_proveedor->getId()] = $prv_proveedor;
        }

        return $arr_proveedors;
    }

    /**
     * Metodo que retorna la ultima recepcion del insumo comprado a un proveedor indicado, y marca indicada
     * @param type $prv_proveedor_id
     * @param type $ins_marca_id
     * @return boolean
     */
    public function getUltimaPdeRecepcionXProveedor($prv_proveedor_id) {
        $c = new Criterio();
        $c->add(PdeRecepcion::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PdeRecepcion::GEN_ATTR_PRV_PROVEEDOR_ID, $prv_proveedor_id, Criterio::IGUAL);
        $c->addTabla(PdeRecepcion::GEN_TABLA);
        $c->addOrden(PdeRecepcion::GEN_ATTR_ID, 'desc');
        $c->setCriterios();
        $pde_recepcions = PdeRecepcion::getPdeRecepcions(new Paginador(1, 1), $c);

        foreach ($pde_recepcions as $pde_recepcion) {
            return $pde_recepcion;
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Creado: 01/08/2018 21:18h
     * Metodo que retorna el PrvInsumo de un Proveedor para el insumo en cuestion, si lo tuviese
     * @param type $prv_proveedor
     */
    public function getPrvInsumoDeProveedor($prv_proveedor) {
        $c = new Criterio();
        $c->add(PrvInsumo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PrvInsumo::GEN_ATTR_PRV_PROVEEDOR_ID, $prv_proveedor->getId(), Criterio::IGUAL);
        $c->addTabla(PrvInsumo::GEN_TABLA);
        $c->addOrden(PrvInsumo::GEN_ATTR_ID, 'desc');
        $c->setCriterios();
        $prv_insumos = PrvInsumo::getPrvInsumos(new Paginador(1, 1), $c);

        foreach ($prv_insumos as $prv_insumo) {
            return $prv_insumo;
        }
        return false;
    }

    public function getVtaOrdenVentasUltimos($cli_cliente_id = false, $cantidad = 10) {
        $c = new Criterio();
        $c->add(VtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
        if($cli_cliente_id){
            $c->add(VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID, $cli_cliente_id, Criterio::IGUAL);
        }
        $c->addTabla(VtaOrdenVenta::GEN_TABLA);
        $c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID);
        $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();

        $p = new Paginador($cantidad, 1);

        $vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas($p, $c);

        return $vta_orden_ventas;
    }

    public function getPdeOcsUltimos() {
        $c = new Criterio();
        $c->add(PdeOc::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(PdeOc::GEN_TABLA);
        $c->addOrden(PdeOc::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();

        $p = new Paginador(5, 1);

        $pde_ocs = PdeOc::getPdeOcs($p, $c);

        return $pde_ocs;
    }

    public function getInsInsumoImagensMercadolibre() {
        $c = new Criterio();
        $c->add(InsInsumoImagen::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(InsTipoImagen::GEN_ATTR_CODIGO, InsTipoImagen::TIPO_MERCADOLIBRE, Criterio::IGUAL);
        $c->add(InsInsumoImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->addTabla(InsInsumoImagen::GEN_TABLA);
        $c->addRealJoin(InsTipoImagen::GEN_TABLA, InsTipoImagen::GEN_ATTR_ID, InsInsumoImagen::GEN_ATTR_INS_TIPO_IMAGEN_ID);
        $c->addOrden(InsInsumoImagen::GEN_ATTR_ORDEN, Criterio::_ASC);
        $c->setCriterios();

        $ins_insumo_imagens = InsInsumoImagen::getInsInsumoImagens(null, $c);
        return $ins_insumo_imagens;
    }

    public function setPublicarEnML() {
        $ins_venta_ml_infos = $this->getInsVentaMlInfos();
        $ins_venta_ml_info = $ins_venta_ml_infos[0];

        if ($ins_venta_ml_info) {
            $result = MlGeneral::setPublicar($this, $ins_venta_ml_info);

            $body = $result['body'];
            $httpCode = $result['httpCode'];

            if ($httpCode >= 200 && $httpCode < 400) { // success
                $ml_id = $body->id;
                $ml_permalink = $body->permalink;
                $ml_start_time = $body->start_time;
                $ml_expiration_time = $body->expiration_time;
                $ml_seller = $body->seller;
                $ml_price = $body->price;
                $ml_base_price = $body->base_price;
                $ml_status = $body->status;
                $ml_initial_quantity = $body->initial_quantity;
                $ml_available_quantity = $body->available_quantity;
                $ml_sold_quantity = $body->sold_quantity;

                $ml_item_status = MlItemStatus::getOxCodigoMl($body->status);

                $ins_venta_ml_info->setMlPrice($ml_price);
                $ins_venta_ml_info->setMlIdentificador($ml_id);
                $ins_venta_ml_info->setMlPermalink($ml_permalink);
                $ins_venta_ml_info->setMlStartTime($ml_start_time);
                $ins_venta_ml_info->setMlExpirationTime($ml_expiration_time);
                $ins_venta_ml_info->setMlSeller($ml_seller);
                $ins_venta_ml_info->setMlStatus($ml_status);
                $ins_venta_ml_info->setMlInitialQuantity($ml_initial_quantity);
                $ins_venta_ml_info->setMlAvailableQuantity($ml_available_quantity);
                $ins_venta_ml_info->setMlSoldQuantity($ml_sold_quantity);
                $ins_venta_ml_info->setMlUltimaActualizacion(date('Y-m-d H:i:s'));

                if ($ml_item_status) {
                    $ins_venta_ml_info->setMlItemStatusId($ml_item_status->getId());
                }
                $ins_venta_ml_info->setEditado(0);
                $ins_venta_ml_info->setEstado(1);
                $ins_venta_ml_info->setPublicado(1);
                $ins_venta_ml_info->save();
                //Gral::prr($ins_venta_ml_info);
            }

            return $result;
        }
    }

    public function setActualizarEnML() {
        $ins_venta_ml_infos = $this->getInsVentaMlInfos();
        $ins_venta_ml_info = $ins_venta_ml_infos[0];

        if ($ins_venta_ml_info) {
            // -----------------------------------------------------------------
            // se recalcula precio para la publicacion
            // -----------------------------------------------------------------
            $ins_venta_ml_info->setRecalcularPrecioParaML();

            // -----------------------------------------------------------------
            // se actualiza publicacion en ML
            // -----------------------------------------------------------------
            $result = MlGeneral::setActualizar($this, $ins_venta_ml_info);

            $body = $result['body'];
            $httpCode = $result['httpCode'];

            if ($httpCode >= 200 && $httpCode < 400) { // success
                $ml_id = $body->id;
                $ml_permalink = $body->permalink;
                $ml_start_time = $body->start_time;
                $ml_expiration_time = $body->expiration_time;
                $ml_seller = $body->seller;
                $ml_price = $body->price;
                $ml_base_price = $body->base_price;
                $ml_status = $body->status;
                $ml_initial_quantity = $body->initial_quantity;
                $ml_available_quantity = $body->available_quantity;
                $ml_sold_quantity = $body->sold_quantity;

                $ml_item_status = MlItemStatus::getOxCodigoMl($body->status);

                $ins_venta_ml_info->setMlPrice($ml_price);
                $ins_venta_ml_info->setMlIdentificador($ml_id);
                $ins_venta_ml_info->setMlPermalink($ml_permalink);
                $ins_venta_ml_info->setMlStartTime($ml_start_time);
                $ins_venta_ml_info->setMlExpirationTime($ml_expiration_time);
                $ins_venta_ml_info->setMlSeller($ml_seller);
                $ins_venta_ml_info->setMlStatus($ml_status);
                $ins_venta_ml_info->setMlInitialQuantity($ml_initial_quantity);
                $ins_venta_ml_info->setMlAvailableQuantity($ml_available_quantity);
                $ins_venta_ml_info->setMlSoldQuantity($ml_sold_quantity);
                $ins_venta_ml_info->setMlUltimaActualizacion(date('Y-m-d H:i:s'));

                if ($ml_item_status) {
                    $ins_venta_ml_info->setMlItemStatusId($ml_item_status->getId());
                }
                $ins_venta_ml_info->setEditado(0);
                $ins_venta_ml_info->setEstado(1);
                $ins_venta_ml_info->setPublicado(1);
                $ins_venta_ml_info->save();
                //Gral::prr($ins_venta_ml_info);
            }

            return $result;
        }
    }

    public function setPausarEnML() {
        $ins_venta_ml_infos = $this->getInsVentaMlInfos();
        $ins_venta_ml_info = $ins_venta_ml_infos[0];

        if ($ins_venta_ml_info) {
            $result = MlGeneral::setPausar($this, $ins_venta_ml_info);

            $body = $result['body'];
            $httpCode = $result['httpCode'];

            if ($httpCode >= 200 && $httpCode < 400) { // success
                $ml_id = $body->id;
                $ml_permalink = $body->permalink;
                $ml_start_time = $body->start_time;
                $ml_expiration_time = $body->expiration_time;
                $ml_seller = $body->seller;
                $ml_price = $body->price;
                $ml_base_price = $body->base_price;
                $ml_status = $body->status;
                $ml_initial_quantity = $body->initial_quantity;
                $ml_available_quantity = $body->available_quantity;
                $ml_sold_quantity = $body->sold_quantity;

                $ml_item_status = MlItemStatus::getOxCodigoMl($body->status);

                $ins_venta_ml_info->setMlPrice($ml_price);
                $ins_venta_ml_info->setMlIdentificador($ml_id);
                $ins_venta_ml_info->setMlPermalink($ml_permalink);
                $ins_venta_ml_info->setMlStartTime($ml_start_time);
                $ins_venta_ml_info->setMlExpirationTime($ml_expiration_time);
                $ins_venta_ml_info->setMlSeller($ml_seller);
                $ins_venta_ml_info->setMlStatus($ml_status);
                $ins_venta_ml_info->setMlInitialQuantity($ml_initial_quantity);
                $ins_venta_ml_info->setMlAvailableQuantity($ml_available_quantity);
                $ins_venta_ml_info->setMlSoldQuantity($ml_sold_quantity);
                $ins_venta_ml_info->setMlUltimaActualizacion(date('Y-m-d H:i:s'));

                if ($ml_item_status) {
                    $ins_venta_ml_info->setMlItemStatusId($ml_item_status->getId());
                }
                $ins_venta_ml_info->setEstado(1);
                $ins_venta_ml_info->setPublicado(1);
                $ins_venta_ml_info->save();
                //Gral::prr($ins_venta_ml_info);
            }

            return $result;
        }
    }

    public function setReactivarEnML() {
        $ins_venta_ml_infos = $this->getInsVentaMlInfos();
        $ins_venta_ml_info = $ins_venta_ml_infos[0];

        if ($ins_venta_ml_info) {
            $result = MlGeneral::setReactivar($this, $ins_venta_ml_info);

            $body = $result['body'];
            $httpCode = $result['httpCode'];

            if ($httpCode >= 200 && $httpCode < 400) { // success
                $ml_id = $body->id;
                $ml_permalink = $body->permalink;
                $ml_start_time = $body->start_time;
                $ml_expiration_time = $body->expiration_time;
                $ml_seller = $body->seller;
                $ml_price = $body->price;
                $ml_base_price = $body->base_price;
                $ml_status = $body->status;
                $ml_initial_quantity = $body->initial_quantity;
                $ml_available_quantity = $body->available_quantity;
                $ml_sold_quantity = $body->sold_quantity;

                $ml_item_status = MlItemStatus::getOxCodigoMl($body->status);

                $ins_venta_ml_info->setMlPrice($ml_price);
                $ins_venta_ml_info->setMlIdentificador($ml_id);
                $ins_venta_ml_info->setMlPermalink($ml_permalink);
                $ins_venta_ml_info->setMlStartTime($ml_start_time);
                $ins_venta_ml_info->setMlExpirationTime($ml_expiration_time);
                $ins_venta_ml_info->setMlSeller($ml_seller);
                $ins_venta_ml_info->setMlStatus($ml_status);
                $ins_venta_ml_info->setMlInitialQuantity($ml_initial_quantity);
                $ins_venta_ml_info->setMlAvailableQuantity($ml_available_quantity);
                $ins_venta_ml_info->setMlSoldQuantity($ml_sold_quantity);
                $ins_venta_ml_info->setMlUltimaActualizacion(date('Y-m-d H:i:s'));

                if ($ml_item_status) {
                    $ins_venta_ml_info->setMlItemStatusId($ml_item_status->getId());
                }
                $ins_venta_ml_info->setEstado(1);
                $ins_venta_ml_info->setPublicado(1);
                $ins_venta_ml_info->save();
                //Gral::prr($ins_venta_ml_info);
            }

            return $result;
        }
    }

    public function setDespublicarEnML() {
        $ins_venta_ml_infos = $this->getInsVentaMlInfos();
        $ins_venta_ml_info = $ins_venta_ml_infos[0];

        if ($ins_venta_ml_info) {
            $result = MlGeneral::setDespublicar($this, $ins_venta_ml_info);

            $body = $result['body'];
            $httpCode = $result['httpCode'];

            if ($httpCode >= 200 && $httpCode < 400) { // success
                $ml_id = $body->id;
                $ml_permalink = $body->permalink;
                $ml_start_time = $body->start_time;
                $ml_expiration_time = $body->expiration_time;
                $ml_seller = $body->seller;
                $ml_price = $body->price;
                $ml_base_price = $body->base_price;
                $ml_status = $body->status;
                $ml_initial_quantity = $body->initial_quantity;
                $ml_available_quantity = $body->available_quantity;
                $ml_sold_quantity = $body->sold_quantity;

                $ml_item_status = MlItemStatus::getOxCodigoMl($body->status);

                $ins_venta_ml_info->setMlPrice($ml_price);
                $ins_venta_ml_info->setMlIdentificador($ml_id);
                $ins_venta_ml_info->setMlPermalink($ml_permalink);
                $ins_venta_ml_info->setMlStartTime($ml_start_time);
                $ins_venta_ml_info->setMlExpirationTime($ml_expiration_time);
                $ins_venta_ml_info->setMlSeller($ml_seller);
                $ins_venta_ml_info->setMlStatus($ml_status);
                $ins_venta_ml_info->setMlInitialQuantity($ml_initial_quantity);
                $ins_venta_ml_info->setMlAvailableQuantity($ml_available_quantity);
                $ins_venta_ml_info->setMlSoldQuantity($ml_sold_quantity);
                $ins_venta_ml_info->setMlUltimaActualizacion(date('Y-m-d H:i:s'));

                if ($ml_item_status) {
                    $ins_venta_ml_info->setMlItemStatusId($ml_item_status->getId());
                }
                $ins_venta_ml_info->setEstado(1);
                $ins_venta_ml_info->setPublicado(0);
                $ins_venta_ml_info->save();
                //Gral::prr($ins_venta_ml_info);
            }

            return $result;
        }
    }

    public function getPublicacionEnML() {
        $ins_venta_ml_infos = $this->getInsVentaMlInfos(null, null, true);
        $ins_venta_ml_info = $ins_venta_ml_infos[0];

        if ($ins_venta_ml_info) {
            $result = MlGeneral::getPublicacion($ins_venta_ml_info);
            return $result;
        }
        return false;
    }

    public function getInsInsumoInsAtributoXInsAtributo($ins_atributo) {
        $c = new Criterio();
        $c->add(InsInsumoInsAtributo::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(InsInsumoInsAtributo::GEN_ATTR_INS_ATRIBUTO_ID, $ins_atributo->getId(), Criterio::IGUAL);
        $c->addTabla(InsInsumoInsAtributo::GEN_TABLA);
        $c->setCriterios();

        $ins_insumo_ins_atributos = InsInsumoInsAtributo::getInsInsumoInsAtributos(null, $c);
        foreach ($ins_insumo_ins_atributos as $ins_insumo_ins_atributo) {
            return $ins_insumo_ins_atributo;
        }
        return false;
    }

    /**
     * Autor: Pablo Rosenberger
     * Fecha: 14/07/2020 20:007
     * Metodo que retorna la politica de descuento para el insumo
     * @param type $ins_tipo_lista_precio
     * @return VtaPoliticaDescuento o boolean
     */
    public function getVtaPoliticaDescuentoActiva($ins_tipo_lista_precio = false) {
        $ins_categoria = $this->getInsCategoria();

        // ----------------------------------------------------------------------
        // se determina si hay politica de descuento por insumo
        // ----------------------------------------------------------------------        
        $c = new Criterio();
        $c->add(VtaPoliticaDescuento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(InsInsumo::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(InsTipoListaPrecio::GEN_ATTR_ID, $ins_tipo_lista_precio->getId(), Criterio::IGUAL);
        $c->addTabla(VtaPoliticaDescuento::GEN_TABLA);
        $c->addRealJoin(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_TABLA, VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, VtaPoliticaDescuento::GEN_ATTR_ID);
        $c->addRealJoin(InsTipoListaPrecio::GEN_TABLA, InsTipoListaPrecio::GEN_ATTR_ID, VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID);
        $c->addRealJoin(VtaPoliticaDescuentoRango::GEN_TABLA, VtaPoliticaDescuentoRango::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, VtaPoliticaDescuento::GEN_ATTR_ID);
        $c->addRealJoin(VtaPoliticaDescuentoInsInsumo::GEN_TABLA, VtaPoliticaDescuentoInsInsumo::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, VtaPoliticaDescuento::GEN_ATTR_ID);
        $c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, VtaPoliticaDescuentoInsInsumo::GEN_ATTR_INS_INSUMO_ID);
        $c->setCriterios();

        $vta_politica_descuentos = VtaPoliticaDescuento::getVtaPoliticaDescuentos(null, $c);
        foreach ($vta_politica_descuentos as $vta_politica_descuento) {
            return $vta_politica_descuento;
        }

        // ----------------------------------------------------------------------
        // se determina si hay politica de descuento por categoria de insumo
        // se itera entre todos sus padres hasta llegar al raiz
        // ----------------------------------------------------------------------        
        $raiz = false;
        do {
            $c = new Criterio();
            $c->add(VtaPoliticaDescuento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            $c->add(InsCategoria::GEN_ATTR_ID, $ins_categoria->getId(), Criterio::IGUAL);
            $c->add(InsTipoListaPrecio::GEN_ATTR_ID, $ins_tipo_lista_precio->getId(), Criterio::IGUAL);
            $c->addTabla(VtaPoliticaDescuento::GEN_TABLA);
            $c->addRealJoin(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_TABLA, VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, VtaPoliticaDescuento::GEN_ATTR_ID);
            $c->addRealJoin(InsTipoListaPrecio::GEN_TABLA, InsTipoListaPrecio::GEN_ATTR_ID, VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID);
            $c->addRealJoin(VtaPoliticaDescuentoRango::GEN_TABLA, VtaPoliticaDescuentoRango::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, VtaPoliticaDescuento::GEN_ATTR_ID);
            $c->addRealJoin(VtaPoliticaDescuentoInsCategoria::GEN_TABLA, VtaPoliticaDescuentoInsCategoria::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, VtaPoliticaDescuento::GEN_ATTR_ID);
            $c->addRealJoin(InsCategoria::GEN_TABLA, InsCategoria::GEN_ATTR_ID, VtaPoliticaDescuentoInsCategoria::GEN_ATTR_INS_CATEGORIA_ID);
            $c->setCriterios();

            $vta_politica_descuentos = VtaPoliticaDescuento::getVtaPoliticaDescuentos(null, $c);
            foreach ($vta_politica_descuentos as $vta_politica_descuento) {
                return $vta_politica_descuento;
            }

            // ------------------------------------------------------------------
            // se comienza a iterar entre sus padres
            // ------------------------------------------------------------------
            $ins_categoria_padre = $ins_categoria->tieneArbolItemPadre();
            if ($ins_categoria_padre) {
                $ins_categoria_padre = $ins_categoria->getInsCategoriaPadreObj();
                $ins_categoria = $ins_categoria_padre;
            } else {
                $raiz = true;
            }
        } while (!$raiz);

        return false;
    }

    /**
     * Autor: Pablo Rosenberger
     * Fecha: 14/07/2020 20:007
     * Metodo que retorna el rango activo de politica de descuento para la condicion de venta que se esta realizando
     * @param type $ins_tipo_lista_precio
     * @param type $cantidad
     * @return VtaPoliticaDescuentoRango o boolean
     */
    public function getVtaPoliticaDescuentoRangoActiva($ins_tipo_lista_precio, $cantidad) {
        $ins_categoria = $this->getInsCategoria();

        // ----------------------------------------------------------------------
        // se determina si hay politica de descuento por insumo
        // ----------------------------------------------------------------------        
        $c = new Criterio();
        $c->add(VtaPoliticaDescuento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(VtaPoliticaDescuentoRango::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(InsInsumo::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(InsTipoListaPrecio::GEN_ATTR_ID, $ins_tipo_lista_precio->getId(), Criterio::IGUAL);
        $c->add(VtaPoliticaDescuentoRango::GEN_ATTR_CANTIDAD_DESDE, $cantidad, Criterio::MENORIGUAL);
        $c->add(VtaPoliticaDescuentoRango::GEN_ATTR_CANTIDAD_HASTA, $cantidad, Criterio::MAYORIGUAL);
        $c->addTabla(VtaPoliticaDescuentoRango::GEN_TABLA);
        $c->addRealJoin(VtaPoliticaDescuento::GEN_TABLA, VtaPoliticaDescuento::GEN_ATTR_ID, VtaPoliticaDescuentoRango::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID);
        $c->addRealJoin(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_TABLA, VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, VtaPoliticaDescuento::GEN_ATTR_ID);
        $c->addRealJoin(InsTipoListaPrecio::GEN_TABLA, InsTipoListaPrecio::GEN_ATTR_ID, VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID);
        $c->addRealJoin(VtaPoliticaDescuentoInsInsumo::GEN_TABLA, VtaPoliticaDescuentoInsInsumo::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, VtaPoliticaDescuento::GEN_ATTR_ID);
        $c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, VtaPoliticaDescuentoInsInsumo::GEN_ATTR_INS_INSUMO_ID);
        $c->setCriterios();

        $vta_politica_descuento_rangos = VtaPoliticaDescuentoRango::getVtaPoliticaDescuentoRangos(null, $c);
        foreach ($vta_politica_descuento_rangos as $vta_politica_descuento_rango) {
            return $vta_politica_descuento_rango;
        }

        // ----------------------------------------------------------------------
        // se determina si hay politica de descuento por categoria de insumo
        // se itera entre todos sus padres hasta llegar al raiz
        // ----------------------------------------------------------------------        
        $raiz = false;
        do {
            $c = new Criterio();
            $c->add(VtaPoliticaDescuento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            $c->add(VtaPoliticaDescuentoRango::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            $c->add(InsCategoria::GEN_ATTR_ID, $ins_categoria->getId(), Criterio::IGUAL);
            $c->add(InsTipoListaPrecio::GEN_ATTR_ID, $ins_tipo_lista_precio->getId(), Criterio::IGUAL);
            $c->add(VtaPoliticaDescuentoRango::GEN_ATTR_CANTIDAD_DESDE, $cantidad, Criterio::MENORIGUAL);
            $c->add(VtaPoliticaDescuentoRango::GEN_ATTR_CANTIDAD_HASTA, $cantidad, Criterio::MAYORIGUAL);
            $c->addTabla(VtaPoliticaDescuentoRango::GEN_TABLA);
            $c->addRealJoin(VtaPoliticaDescuento::GEN_TABLA, VtaPoliticaDescuento::GEN_ATTR_ID, VtaPoliticaDescuentoRango::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID);
            $c->addRealJoin(VtaPoliticaDescuentoInsTipoListaPrecio::GEN_TABLA, VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, VtaPoliticaDescuento::GEN_ATTR_ID);
            $c->addRealJoin(InsTipoListaPrecio::GEN_TABLA, InsTipoListaPrecio::GEN_ATTR_ID, VtaPoliticaDescuentoInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID);
            $c->addRealJoin(VtaPoliticaDescuentoInsCategoria::GEN_TABLA, VtaPoliticaDescuentoInsCategoria::GEN_ATTR_VTA_POLITICA_DESCUENTO_ID, VtaPoliticaDescuento::GEN_ATTR_ID);
            $c->addRealJoin(InsCategoria::GEN_TABLA, InsCategoria::GEN_ATTR_ID, VtaPoliticaDescuentoInsCategoria::GEN_ATTR_INS_CATEGORIA_ID);
            $c->setCriterios();

            $vta_politica_descuento_rangos = VtaPoliticaDescuentoRango::getVtaPoliticaDescuentoRangos(null, $c);
            foreach ($vta_politica_descuento_rangos as $vta_politica_descuento_rango) {
                return $vta_politica_descuento_rango;
            }
            // ------------------------------------------------------------------
            // se comienza a iterar entre sus padres
            // ------------------------------------------------------------------
            $ins_categoria_padre = $ins_categoria->tieneArbolItemPadre();
            if ($ins_categoria_padre) {
                $ins_categoria_padre = $ins_categoria->getInsCategoriaPadreObj();
                $ins_categoria = $ins_categoria_padre;
            } else {
                $raiz = true;
            }
        } while (!$raiz);

        return false;
    }

    public function setAjusteStockManual($pan_panol, $cantidad, $ins_stock_tipo_movimiento_codigo, $observacion = '') {

        $pdi_pedido = new PdiPedido();
        $pdi_pedido->setInsInsumoId($this->getId());
        $pdi_pedido->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_AJUSTE_PANOL)->getId());
        $pdi_pedido->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_BAJA)->getId());
        $pdi_pedido->setPanPanolOrigen($pan_panol->getId());
        $pdi_pedido->setPanPanolDestino($pan_panol->getId());
        $pdi_pedido->setObservacion($observacion);
        $pdi_pedido->setEstado(1);
        $pdi_pedido->save();

        $pdi_pedido->setCodigo($pdi_pedido->getCodigoConCeros());
        $pdi_pedido->save();

        // se registra estado del pedido, PdiEstado
        $pdi_estado = $pdi_pedido->setPdiPedidoEstado(
                PdiTipoEstado::TIPO_ESTADO_AJUSTADO, $cantidad, $observacion
        );

        // se registran destinatarios del pedido, PdiPedidoDestinatario
        $pdi_pedido->setPdiPedidoDestinatarios();

        $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo($ins_stock_tipo_movimiento_codigo);
        $this->setInsStockMovimiento($pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento, false, false, $observacion);

        return true;
    }

    /**
     * Metodo que retorna el costo actual del insumo
     * @return boolean
     */
    public function getInsInsumoCostosEvolucion() {
        $c = new Criterio();
        $c->add(InsInsumoCosto::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(InsInsumoCosto::GEN_TABLA);
        $c->setCriterios();

        $ins_insumo_costos = InsInsumoCosto::getInsInsumoCostos(null, $c);
        return $ins_insumo_costos;
    }

    /**
     * Metodo que retorna el costo actual del insumo
     * @return boolean
     */
    public function getInsInsumoCostosEnFecha($fecha = false) {
        if (!$fecha)
            $fecha = date('Y-m-d');

        $c = new Criterio();
        $c->add(InsInsumoCosto::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(InsInsumoCosto::GEN_ATTR_FECHA, $fecha, Criterio::MENORIGUAL);
        $c->addTabla(InsInsumoCosto::GEN_TABLA);
        $c->setCriterios();

        $ins_insumo_costos = InsInsumoCosto::getInsInsumoCostos(null, $c);
        foreach ($ins_insumo_costos as $ins_insumo_costo) {
            return $ins_insumo_costo;
        }
        return false;
    }

    /**
     * 
     * @param type $ins_tipo_lista_precio
     * @return type
     */
    public function getInsInsumoBultosOrdenados($ins_tipo_lista_precio = false) {
        
        $c = new Criterio();
        $c->add(InsInsumoBulto::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
        if($ins_tipo_lista_precio){
            $c->add(InsTipoListaPrecio::GEN_ATTR_ID, $ins_tipo_lista_precio->getId(), Criterio::IGUAL);
        }
        $c->addTabla(InsInsumoBulto::GEN_TABLA);
        $c->addRealJoin(InsInsumoBultoInsTipoListaPrecio::GEN_TABLA, InsInsumoBultoInsTipoListaPrecio::GEN_ATTR_INS_INSUMO_BULTO_ID, InsInsumoBulto::GEN_ATTR_ID);
        $c->addRealJoin(InsTipoListaPrecio::GEN_TABLA, InsTipoListaPrecio::GEN_ATTR_ID, InsInsumoBultoInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID);
        $c->addOrden(InsInsumoBulto::GEN_ATTR_CANTIDAD, Criterio::_ASC);
        $c->setCriterios();

        $ins_insumo_bultos = InsInsumoBulto::getInsInsumoBultos(null, $c);
        return $ins_insumo_bultos;
    }

    /**
     * 
     * @param type $ins_tipo_lista_precio
     * @return type
     */
    public function getInsInsumoBultosOrdenadosCmb($ins_tipo_lista_precio = false) {
        $c = new Criterio();
        $c->add(InsInsumoBulto::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
        if($ins_tipo_lista_precio){
            $c->add(InsTipoListaPrecio::GEN_ATTR_ID, $ins_tipo_lista_precio->getId(), Criterio::IGUAL);
        }
        $c->addTabla(InsInsumoBulto::GEN_TABLA);
        $c->addRealJoin(InsInsumoBultoInsTipoListaPrecio::GEN_TABLA, InsInsumoBultoInsTipoListaPrecio::GEN_ATTR_INS_INSUMO_BULTO_ID, InsInsumoBulto::GEN_ATTR_ID);
        $c->addRealJoin(InsTipoListaPrecio::GEN_TABLA, InsTipoListaPrecio::GEN_ATTR_ID, InsInsumoBultoInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID);
        $c->addOrden(InsInsumoBulto::GEN_ATTR_CANTIDAD, Criterio::_ASC);
        $c->setCriterios();

        $os = InsInsumoBulto::getInsInsumoBultosCmbF(null, $c);
        return $os;
    }
    
    /**
     * 
     */
    public function getInsInsumoBultoMenor($ins_tipo_lista_precio = false){
        $ins_insumo_bultos = $this->getInsInsumoBultosOrdenados($ins_tipo_lista_precio);
        foreach($ins_insumo_bultos as $ins_insumo_bulto){
            return $ins_insumo_bulto;
        }
        return false;
    }
    
    /**
     * 
     * @param type $ins_insumo_bulto
     * @param type $ins_tipo_lista_precio
     */
    public function getInsInsumoBultoHabilitadoParaLista($ins_insumo_bulto, $ins_tipo_lista_precio){
        $ins_insumo_bultos = $this->getInsInsumoBultosOrdenados($ins_tipo_lista_precio);
        foreach($ins_insumo_bultos as $ins_insumo_bulto_uno){
            if($ins_insumo_bulto->getId() == $ins_insumo_bulto_uno->getId()){
                return true;
            }
        }
        return false;
    }
    
    public function getCantidadDiasUltimoAjuste($pan_panol) {
        $cantidad_dias = 0;
        
        $c = new Criterio();
        $c->add(InsStockMovimiento::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID, $pan_panol->getId(), Criterio::IGUAL);
        
        $c->addInicioSubconsulta();
        $c->add(InsStockTipoMovimiento::GEN_ATTR_CODIGO, InsStockTipoMovimiento::TIPO_MOV_AJUSTE_POSITIVO, Criterio::IGUAL);
        $c->add(InsStockTipoMovimiento::GEN_ATTR_CODIGO, InsStockTipoMovimiento::TIPO_MOV_AJUSTE_NEGATIVO, Criterio::IGUAL, false, Criterio::_OR);
        $c->addFinSubconsulta();
        
        $c->addTabla(InsStockMovimiento::GEN_TABLA);
        $c->addRealJoin(InsStockTipoMovimiento::GEN_TABLA, InsStockTipoMovimiento::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_INS_STOCK_TIPO_MOVIMIENTO_ID);
        $c->addOrden(InsStockMovimiento::GEN_ATTR_ID, Criterio::_DESC);
        //$c->addOrden(InsStockMovimiento::GEN_ATTR_FECHAHORA, Criterio::_DESC);
        $c->setCriterios();
        $p = new Paginador(1, 1);
        $ins_stock_movimientos = InsStockMovimiento::getInsStockMovimientos($p, $c);
        
        foreach($ins_stock_movimientos as $ins_stock_movimiento){
            $fechahora = $ins_stock_movimiento->getFechahora();
            $cantidad_dias = Date::getDiferenciaTiempo('d', $fechahora, date('Y-m-d'));
        }
        return $cantidad_dias;
    }
    
    public function getCantidadAjustesInsumo($pan_panol) {
        
        $c = new Criterio();
        $c->add(InsStockMovimiento::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID, $pan_panol->getId(), Criterio::IGUAL);

        $c->addInicioSubconsulta();
        $c->add(InsStockTipoMovimiento::GEN_ATTR_CODIGO, InsStockTipoMovimiento::TIPO_MOV_AJUSTE_POSITIVO, Criterio::IGUAL);
        $c->add(InsStockTipoMovimiento::GEN_ATTR_CODIGO, InsStockTipoMovimiento::TIPO_MOV_AJUSTE_NEGATIVO, Criterio::IGUAL, false, Criterio::_OR);
        $c->addFinSubconsulta();
        
        $c->addTabla(InsStockMovimiento::GEN_TABLA);
        $c->addRealJoin(InsStockTipoMovimiento::GEN_TABLA, InsStockTipoMovimiento::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_INS_STOCK_TIPO_MOVIMIENTO_ID);
        $c->addOrden(InsStockMovimiento::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();
        $p = null;
        $ins_stock_movimientos = InsStockMovimiento::getInsStockMovimientos($p, $c);
        
        return count($ins_stock_movimientos);
    }
    
    //----------------------------------------
    //Tienda
    //----------------------------------------

    static function getArrFiltrosParaBuscador($filtros, $ins_insumos_buscador = false, $arr_filtros_para_buscador = false) {
        $arr_filtros_para_buscador = array();
        $condicion_iva_discrimina_iva = false;

        $arr_filtros_para_buscador['MOSTRAR_FILTROS'] = 0;
        $arr_filtros_para_buscador['FILTROS_ACTIVOS'] = 0;

        $arr_filtros_para_buscador['TIPO_LISTA_PRECIO'] = $filtros['ins_tipo_lista_precio_cliente'];
        $arr_filtros_para_buscador['CONDICION_IVA'] = $filtros['gral_condicion_iva_cliente'];
        $arr_filtros_para_buscador['ORDEN'] = $filtros['orden'];        
        $arr_filtros_para_buscador['VISUALIZACION'] = $filtros['visualizacion'];


        $gral_condicion_iva_cliente = GralCondicionIva::getOxId($filtros['gral_condicion_iva_cliente']);
        if ($gral_condicion_iva_cliente) {
            if ($gral_condicion_iva_cliente->getIvaDiscriminado() == 1) {
                $condicion_iva_discrimina_iva = true;
            }
        }

        $arr_filtros_para_buscador['DISCRIMINA_IVA'] = $condicion_iva_discrimina_iva;

        // ---------------------------------------------------------------------
        // Etiquetas
        // ---------------------------------------------------------------------
        $etiquetas = $filtros['etiquetas'];
        if ($etiquetas != 0) {
            $arr_etiquetas = explode(',', $etiquetas);
            if (is_array($arr_etiquetas) && count($arr_etiquetas) > 1) {
                // busqueda por multi etiquetas
                $arr_filtros_para_buscador['ETIQUETAS']['FILTRO']['TIPO'] = 'MULTI';
            }
            else {
                // busqueda por una sola etiqueta
                $arr_filtros_para_buscador['ETIQUETAS']['FILTRO']['TIPO'] = 'UNO';
            }
            $arr_filtros_para_buscador['ETIQUETAS']['FILTRO']['ACTIVO'] = 1;
            $arr_filtros_para_buscador['ETIQUETAS']['FILTRO']['STRING_IN'] = '(' . implode(',', $arr_etiquetas) . ')';
            $arr_filtros_para_buscador['MOSTRAR_FILTROS'] = 1;
            $arr_filtros_para_buscador['FILTROS_ACTIVOS'] = 1;
        }
        $ins_etiquetas = InsEtiqueta::getInsEtiquetasParaTienda();
        foreach ($ins_etiquetas as $ins_etiqueta) {
            $agregar = true;
            if($ins_insumos_buscador){
                $agregar = false;
                //$arr_insumos = $ins_etiqueta->getInsInsumosVinculadosAEtiquetaDesdeColeccionDeInsumos($ins_insumos_buscador);
                if(count($arr_insumos) > 0){
                    $agregar = true;
                }
            }
            if($agregar){
                $arr_filtros_para_buscador['ETIQUETAS']['DATOS'][$ins_etiqueta->getId()] = array(
                    'id' => $ins_etiqueta->getId(),
                    'descripcion' => $ins_etiqueta->getDescripcion(),
                    'codigo' => $ins_etiqueta->getCodigo(),
                    'relevancia' => $ins_etiqueta->getRelevancia(),
                    'elegida' => in_array($ins_etiqueta->getId(), $arr_etiquetas) ? 1 : 0,
                    'encontrados' => count($arr_insumos),
                );
            }
        }

        // ---------------------------------------------------------------------
        // Categorias
        // ---------------------------------------------------------------------
        $categorias_string_like_any = '';
        $categorias = $filtros['categorias'];
        if ($categorias != 0) {
            $arr_categorias = explode(',', $categorias);
            if (is_array($arr_categorias) && count($arr_categorias) > 1) {
                // busqueda por multi categorias
                $arr_filtros_para_buscador['CATEGORIAS']['FILTRO']['TIPO'] = 'MULTI';
                
                // se instancian objetos para obtener el codigo
                foreach($arr_categorias as $arr_categoria){
                    $ins_categoria = InsCategoria::getOxId($arr_categoria);
                    if($ins_categoria){
                        $categorias_string_like_any.= $ins_categoria->getCodigo().' ';
                    }
                }
            }
            else {
                // busqueda por una sola categoria
                $arr_filtros_para_buscador['CATEGORIAS']['FILTRO']['TIPO'] = 'UNO';
                $arr_filtros_para_buscador['CATEGORIAS']['FILTRO']['ID'] = $categorias;
                
                // se instancia objeto para obtener el codigo
                $ins_categoria = InsCategoria::getOxId($categorias);
                if($ins_categoria){
                    $categorias_string_like_any.= $ins_categoria->getCodigo().' ';
                }
            }
            $arr_filtros_para_buscador['CATEGORIAS']['FILTRO']['ACTIVO'] = 1;
            $arr_filtros_para_buscador['CATEGORIAS']['FILTRO']['STRING_IN'] = '(' . implode(',', $arr_categorias) . ')';
            $arr_filtros_para_buscador['CATEGORIAS']['FILTRO']['STRING_LIKE_ANY'] = trim($categorias_string_like_any);
            $arr_filtros_para_buscador['MOSTRAR_FILTROS'] = 1;
            $arr_filtros_para_buscador['FILTROS_ACTIVOS'] = 1;
        }
        
        if ($categorias != 0) {
            $ins_categorias = InsCategoria::getCategoriasPrincipalesParaTienda();            
            $ins_categorias_filtradas = InsCategoria::getCategoriasParaTienda($categorias, $incluir_padres = true); 
            $ins_categorias = array_merge($ins_categorias_filtradas, $ins_categorias);
            //Gral::prr($ins_categorias);
        }else{
            $ins_categorias = InsCategoria::getCategoriasPrincipalesParaTienda();            
        }
        foreach ($ins_categorias as $ins_categoria) {
            $agregar = true;
            if($ins_insumos_buscador){
                $agregar = false;
                //$agregar = true;
                //$arr_insumos = $ins_categoria->getInsInsumosVinculadosACategoriaDesdeColeccionDeInsumos($ins_insumos_buscador);
                if(count($arr_insumos) > 0){
                    $agregar = true;
                }
            }
            
            if(true){
                $arr_filtros_para_buscador['CATEGORIAS']['DATOS'][$ins_categoria->getId()] = array(
                    'id' => $ins_categoria->getId(),
                    'descripcion' => $ins_categoria->getDescripcion(),
                    'descripcion_familia' => $ins_categoria->getFamiliaDescripcion(),
                    'codigo' => $ins_categoria->getCodigo(),
                    'elegida' => in_array($ins_categoria->getId(), $arr_categorias) ? 1 : 0,
                    'encontrados' => count($arr_insumos),
                );
            }
        }

        // ---------------------------------------------------------------------
        // Marcas
        // ---------------------------------------------------------------------
        $marcas = $filtros['marcas'];
        if ($marcas != 0) {
            $arr_marcas = explode(',', $marcas);
            if (is_array($arr_marcas) && count($arr_marcas) > 1) {
                // busqueda por multi marcas
                $arr_filtros_para_buscador['MARCAS']['FILTRO']['TIPO'] = 'MULTI';
            }
            else {
                // busqueda por una sola marca
                $arr_filtros_para_buscador['MARCAS']['FILTRO']['TIPO'] = 'UNO';
            }
            $arr_filtros_para_buscador['MARCAS']['FILTRO']['ACTIVO'] = 1;
            $arr_filtros_para_buscador['MARCAS']['FILTRO']['STRING_IN'] = '(' . implode(',', $arr_marcas) . ')';
            $arr_filtros_para_buscador['MOSTRAR_FILTROS'] = 1;
            $arr_filtros_para_buscador['FILTROS_ACTIVOS'] = 1;
        }
        $ins_marcas = InsMarca::getInsMarcasParaTienda();
        foreach ($ins_marcas as $ins_marca) {

            $arr_filtros_para_buscador['MARCAS']['DATOS'][$ins_marca->getId()] = array(
                'id' => $ins_marca->getId(),
                'descripcion' => $ins_marca->getDescripcion(),
                'codigo' => $ins_marca->getCodigo(),
                'relevancia' => $ins_marca->getRelevancia(),
                'elegida' => in_array($ins_marca->getId(), $arr_marcas) ? 1 : 0,
            );
        }

        // ---------------------------------------------------------------------
        // Importe desde
        // ---------------------------------------------------------------------
        $importe_desde = $filtros['importe_desde'];
        if ($importe_desde != 0) {
            $arr_filtros_para_buscador['IMPORTE_DESDE']['FILTRO']['TIPO'] = 'UNO';
            $arr_filtros_para_buscador['IMPORTE_DESDE']['FILTRO']['ACTIVO'] = 1;
            $arr_filtros_para_buscador['IMPORTE_DESDE']['FILTRO']['IMPORTE'] = $importe_desde;
            $arr_filtros_para_buscador['MOSTRAR_FILTROS'] = 1;
            $arr_filtros_para_buscador['FILTROS_ACTIVOS'] = 1;
        }

        // ---------------------------------------------------------------------
        // Importe hasta
        // ---------------------------------------------------------------------
        $importe_hasta = $filtros['importe_hasta'];
        if ($importe_hasta != 0) {
            $arr_filtros_para_buscador['IMPORTE_HASTA']['FILTRO']['TIPO'] = 'UNO';
            $arr_filtros_para_buscador['IMPORTE_HASTA']['FILTRO']['ACTIVO'] = 1;
            $arr_filtros_para_buscador['IMPORTE_HASTA']['FILTRO']['IMPORTE'] = $importe_hasta;
            $arr_filtros_para_buscador['MOSTRAR_FILTROS'] = 1;
            $arr_filtros_para_buscador['FILTROS_ACTIVOS'] = 1;
        }


        // ---------------------------------------------------------------------
        // busqueda por texto
        // ---------------------------------------------------------------------
        $buscar = $filtros['buscar'];
        if ($buscar != '') {
            $arr_filtros_para_buscador['TEXTO']['FILTRO']['TIPO'] = 'UNO';
            $arr_filtros_para_buscador['TEXTO']['FILTRO']['ACTIVO'] = 1;
            $arr_filtros_para_buscador['TEXTO']['FILTRO']['STRING_LIKE'] = '%' . $buscar . '%';
            $arr_filtros_para_buscador['TEXTO']['FILTRO']['STRING'] = $buscar;
            $arr_filtros_para_buscador['MOSTRAR_FILTROS'] = 1;
            $arr_filtros_para_buscador['FILTROS_ACTIVOS'] = 1;
        }

        // ---------------------------------------------------------------------
        // se almacena en session el array de filtros
        // ---------------------------------------------------------------------
        Gral::setSes(VtaPedido::TIENDA_INSUMOS_FILTROS, $arr_filtros_para_buscador);

        return $arr_filtros_para_buscador;
    }

    static function getInsInsumosParaBuscador($arr_filtros_para_buscador, $paginador, $cli_cliente_tienda = false) {
        $ins_tipo_lista_precio_cliente_id = $arr_filtros_para_buscador['TIPO_LISTA_PRECIO'];
        //Gral::prr($arr_filtros_para_buscador);
        
        $cli_cliente = false;
        if($cli_cliente_tienda){
            $cli_cliente = $cli_cliente_tienda->getCliCliente();
        }
        
        $c = new Criterio();
        $c->addDistinct(true);
        $c->add(PanTipoPanol::GEN_ATTR_CODIGO, PanTipoPanol::TIPO_PRINCIPAL, Criterio::IGUAL);
        $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        
        if($cli_cliente){
            $c->add(InsInsumo::GEN_ATTR_VENTA_MAYORISTA, 1, Criterio::IGUAL);            
        }else{
            $c->add(InsInsumo::GEN_ATTR_VENTA_WEB, 1, Criterio::IGUAL);            
        }
        
        $c->add(InsTipoListaPrecio::GEN_ATTR_ID, $ins_tipo_lista_precio_cliente_id, Criterio::IGUAL);
        $c->add(InsListaPrecio::GEN_ATTR_HABILITADO, 1, Criterio::IGUAL);
        $c->add(InsListaPrecio::GEN_ATTR_IMPORTE_VENTA, 0, Criterio::MAYOR);

        if ($arr_filtros_para_buscador['ETIQUETAS']) {
            $c->add(InsEtiqueta::GEN_ATTR_ID, $arr_filtros_para_buscador['ETIQUETAS']['FILTRO']['STRING_IN'], Criterio::IN);
        }

        if ($arr_filtros_para_buscador['CATEGORIAS']) {
            //$c->add(InsCategoria::GEN_ATTR_ID, $arr_filtros_para_buscador['CATEGORIAS']['FILTRO']['STRING_IN'], Criterio::IN);
            $c->add(InsCategoria::GEN_ATTR_CODIGO, $arr_filtros_para_buscador['CATEGORIAS']['FILTRO']['STRING_LIKE_ANY'], Criterio::LIKE_ANY);
        }

        if ($arr_filtros_para_buscador['MARCAS']) {
            $c->add(InsMarca::GEN_ATTR_ID, $arr_filtros_para_buscador['MARCAS']['FILTRO']['STRING_IN'], Criterio::IN);
        }

        if ($arr_filtros_para_buscador['IMPORTE_DESDE'] || $arr_filtros_para_buscador['IMPORTE_HASTA']) {
            $c->add(InsTipoListaPrecio::GEN_ATTR_ID, $arr_filtros_para_buscador['TIPO_LISTA_PRECIO'], Criterio::IGUAL);

            if ($arr_filtros_para_buscador['DISCRIMINA_IVA'] == 1) {
                if ($arr_filtros_para_buscador['IMPORTE_DESDE']) {
                    $c->add(InsListaPrecio::GEN_ATTR_IMPORTE_VENTA, $arr_filtros_para_buscador['IMPORTE_DESDE']['FILTRO']['IMPORTE'], Criterio::MAYORIGUAL);
                }

                if ($arr_filtros_para_buscador['IMPORTE_HASTA']) {
                    $c->add(InsListaPrecio::GEN_ATTR_IMPORTE_VENTA, $arr_filtros_para_buscador['IMPORTE_HASTA']['FILTRO']['IMPORTE'], Criterio::MENORIGUAL);
                }
            }
            elseif ($arr_filtros_para_buscador['DISCRIMINA_IVA'] == 0) {
                if ($arr_filtros_para_buscador['IMPORTE_DESDE']) {
                    $c->add(InsListaPrecio::GEN_ATTR_IMPORTE_VENTA . "* (1 + (" . GralTipoIva::GEN_ATTR_VALOR_IVA . " / 100))", $arr_filtros_para_buscador['IMPORTE_DESDE']['FILTRO']['IMPORTE'], Criterio::MAYORIGUAL, false, 'AND', false);
                }

                if ($arr_filtros_para_buscador['IMPORTE_HASTA']) {
                    $c->add(InsListaPrecio::GEN_ATTR_IMPORTE_VENTA . "* (1 + (" . GralTipoIva::GEN_ATTR_VALOR_IVA . " / 100))", $arr_filtros_para_buscador['IMPORTE_HASTA']['FILTRO']['IMPORTE'], Criterio::MENORIGUAL, false, 'AND', false);
                }
            }
        }

        if ($arr_filtros_para_buscador['TEXTO']) {
            $c->addInicioSubconsulta();
            $c->add(InsInsumo::GEN_ATTR_DESCRIPCION, $arr_filtros_para_buscador['TEXTO']['FILTRO']['STRING_LIKE'], Criterio::LIKE, false, Criterio::_AND);
            $c->add(InsInsumo::GEN_ATTR_CODIGO_INTERNO, $arr_filtros_para_buscador['TEXTO']['FILTRO']['STRING_LIKE'], Criterio::LIKE, false, Criterio::_OR);
            $c->add(InsInsumo::GEN_ATTR_OBSERVACION, $arr_filtros_para_buscador['TEXTO']['FILTRO']['STRING_LIKE'], Criterio::LIKE, false, Criterio::_OR);
            $c->add(InsInsumo::GEN_ATTR_CLAVES_TIENDA, $arr_filtros_para_buscador['TEXTO']['FILTRO']['STRING_LIKE'], Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();
        }

        $c->addTabla(InsInsumo::GEN_TABLA);
        $c->addRealJoin(InsVentaWebInfo::GEN_TABLA, InsVentaWebInfo::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID, 'LEFT JOIN');

        $c->addRealJoin(InsStockResumen::GEN_TABLA, InsStockResumen::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID, 'LEFT JOIN');
        $c->addRealJoin(InsStockResumenTipoEstado::GEN_TABLA, InsStockResumenTipoEstado::GEN_ATTR_ID, InsStockResumen::GEN_ATTR_INS_STOCK_RESUMEN_TIPO_ESTADO_ID, 'LEFT JOIN');
        $c->addRealJoin(PanPanol::GEN_TABLA, PanPanol::GEN_ATTR_ID, InsStockResumen::GEN_ATTR_PAN_PANOL_ID, 'LEFT JOIN');
        $c->addRealJoin(PanTipoPanol::GEN_TABLA, PanTipoPanol::GEN_ATTR_ID, PanPanol::GEN_ATTR_PAN_TIPO_PANOL_ID, 'LEFT JOIN');

        $c->addRealJoin(InsListaPrecio::GEN_TABLA, InsListaPrecio::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
        $c->addRealJoin(InsTipoListaPrecio::GEN_TABLA, InsTipoListaPrecio::GEN_ATTR_ID, InsListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID);

        $c->addRealJoin(InsCategoria::GEN_TABLA, InsCategoria::GEN_ATTR_ID, InsInsumo::GEN_ATTR_INS_CATEGORIA_ID, 'LEFT JOIN');
        $c->addRealJoin(InsTipoInsumo::GEN_TABLA, InsTipoInsumo::GEN_ATTR_ID, InsInsumo::GEN_ATTR_INS_TIPO_INSUMO_ID, 'LEFT JOIN');

        $c->addRealJoin(InsInsumoInsEtiqueta::GEN_TABLA, InsInsumoInsEtiqueta::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID, 'LEFT JOIN');
        $c->addRealJoin(InsEtiqueta::GEN_TABLA, InsEtiqueta::GEN_ATTR_ID, InsInsumoInsEtiqueta::GEN_ATTR_INS_ETIQUETA_ID, 'LEFT JOIN');

        $c->addRealJoin(InsInsumoInsAtributo::GEN_TABLA, InsInsumoInsAtributo::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID, 'LEFT JOIN');
        $c->addRealJoin(InsAtributo::GEN_TABLA, InsAtributo::GEN_ATTR_ID, InsInsumoInsAtributo::GEN_ATTR_INS_ATRIBUTO_ID, 'LEFT JOIN');

        $c->addRealJoin(InsMarca::GEN_TABLA, InsMarca::GEN_ATTR_ID, InsInsumo::GEN_ATTR_INS_MARCA_ID, 'LEFT JOIN');
        $c->addRealJoin(GralTipoIva::GEN_TABLA, GralTipoIva::GEN_ATTR_ID, InsInsumo::GEN_ATTR_GRAL_TIPO_IVA_VENTA, 'LEFT JOIN');

        if ($arr_filtros_para_buscador['ORDEN'] != '') {
            switch ($arr_filtros_para_buscador['ORDEN']) {
                case 'disponibilidad-stock-mayor':
                    $c->addOrden(InsStockResumenTipoEstado::GEN_ATTR_ORDEN, Criterio::_ASC);
                    $c->addSelect(InsStockResumenTipoEstado::GEN_ATTR_ORDEN_TIENDA);
                    break;
                case 'importe-venta-mayor':
                    $c->addOrden(InsListaPrecio::GEN_ATTR_IMPORTE_VENTA, Criterio::_DESC.' nulls last');
                    $c->addSelect(InsListaPrecio::GEN_ATTR_IMPORTE_VENTA);
                    break;
                case 'importe-venta-menor':
                    $c->addOrden(InsListaPrecio::GEN_ATTR_IMPORTE_VENTA, Criterio::_ASC.' nulls last');
                    $c->addSelect(InsListaPrecio::GEN_ATTR_IMPORTE_VENTA);
                    break;
                case 'descripcion':
                    $c->addOrden(InsInsumo::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                    break;
                case 'codigo_interno':
                    $c->addOrden(InsInsumo::GEN_ATTR_CODIGO_INTERNO, Criterio::_ASC);
                    break;
                case 'marca':
                    $c->addOrden(InsMarca::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
                    $c->addSelect(InsMarca::GEN_ATTR_DESCRIPCION);
                    break;
                case 'mas-recientes':
                    $c->addOrden(InsInsumo::GEN_ATTR_ID, Criterio::_DESC);
                    break;
                default:
                    $c->addOrden(InsMarca::GEN_ATTR_RELEVANCIA, Criterio::_DESC);
                    $c->addSelect(InsMarca::GEN_ATTR_RELEVANCIA);
                    $c->addOrden(InsStockResumenTipoEstado::GEN_ATTR_ORDEN_TIENDA, Criterio::_ASC);
                    $c->addSelect(InsStockResumenTipoEstado::GEN_ATTR_ORDEN_TIENDA);
                    $c->addOrden(InsInsumo::GEN_ATTR_ID, Criterio::_DESC);
            }
        }
        else {
            $c->addOrden(InsMarca::GEN_ATTR_RELEVANCIA, Criterio::_DESC);
            $c->addSelect(InsMarca::GEN_ATTR_RELEVANCIA);
            $c->addOrden(InsStockResumenTipoEstado::GEN_ATTR_ORDEN_TIENDA, Criterio::_ASC);
            $c->addSelect(InsStockResumenTipoEstado::GEN_ATTR_ORDEN_TIENDA);
            $c->setOrden(InsInsumo::GEN_ATTR_ID, Criterio::_DESC);
        }

        $c->setCriterios();

        $ins_insumos = InsInsumo::getInsInsumos($paginador, $c);
        return $ins_insumos;
    }

    static function getInsInsumosDestacadosParaHome($cli_cliente_tienda) {
        // ---------------------------------------------------------------------
        // se identifica el cliente
        // ---------------------------------------------------------------------
        if($cli_cliente_tienda){
            $cli_cliente = $cli_cliente_tienda->getCliCliente();
            if($cli_cliente){
                $cli_categoria = $cli_cliente->getCliCategoria();
            }
        }

        $c = new Criterio();
        if($cli_categoria && $cli_categoria->getEsMayorista()){
            $c->add(InsInsumo::GEN_ATTR_VENTA_MAYORISTA, 1, Criterio::IGUAL);
        }else{
            $c->add(InsInsumo::GEN_ATTR_VENTA_WEB, 1, Criterio::IGUAL);            
        }
        $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(InsVentaWebInfo::GEN_ATTR_DESTACADO, 1, Criterio::IGUAL);
        $c->addTabla(InsInsumo::GEN_TABLA);
        $c->addRealJoin(InsVentaWebInfo::GEN_TABLA, InsVentaWebInfo::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID, 'LEFT JOIN');
        $c->addOrden(InsInsumo::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();

        $p = new Paginador(12, 1);
        $p = new Paginador(100, 1);
        //$p = null;

        $ins_insumos = InsInsumo::getInsInsumos($p, $c);
        shuffle($ins_insumos); // se ordena en PHP
        $ins_insumos = array_splice($ins_insumos, 0, 8); // solo los N primeros
        
        return $ins_insumos;
    }
    
    static function getInsInsumosDestacadosParaCategoria($cli_cliente_tienda, $arr_filtros_para_buscador) {
        // ---------------------------------------------------------------------
        // se identifica el cliente
        // ---------------------------------------------------------------------
        if($cli_cliente_tienda){
            $cli_cliente = $cli_cliente_tienda->getCliCliente();
            if($cli_cliente){
                $cli_categoria = $cli_cliente->getCliCategoria();
            }
        }
        
        // ---------------------------------------------------------------------
        // se identifica la categoria
        // ---------------------------------------------------------------------
        //Gral::prr($arr_filtros_para_buscador);
        $categoria_codigo = $arr_filtros_para_buscador['CATEGORIAS']['FILTRO']['STRING_LIKE_ANY'];
        //Gral::pr($categoria_codigo);

        $c = new Criterio();
        if($cli_categoria && $cli_categoria->getEsMayorista()){
            $c->add(InsInsumo::GEN_ATTR_VENTA_MAYORISTA, 1, Criterio::IGUAL);
        }else{
            $c->add(InsInsumo::GEN_ATTR_VENTA_WEB, 1, Criterio::IGUAL);            
        }
        $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(InsVentaWebInfo::GEN_ATTR_DESTACADO, 1, Criterio::IGUAL);
        $c->add(InsCategoria::GEN_ATTR_CODIGO, $categoria_codigo, Criterio::LIKE_ANY);
        $c->addTabla(InsInsumo::GEN_TABLA);
        $c->addRealJoin(InsVentaWebInfo::GEN_TABLA, InsVentaWebInfo::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID, 'LEFT JOIN');
        $c->addRealJoin(InsCategoria::GEN_TABLA, InsCategoria::GEN_ATTR_ID, InsInsumo::GEN_ATTR_INS_CATEGORIA_ID, 'LEFT JOIN');
        $c->addOrden(InsInsumo::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();

        $p = new Paginador(6, 1);
        $p = new Paginador(100, 1);
        //$p = null;

        $ins_insumos = InsInsumo::getInsInsumos($p, $c);
        shuffle($ins_insumos); // se ordena en PHP
        $ins_insumos = array_splice($ins_insumos, 0, 6); // solo los N primeros
        
        return $ins_insumos;
    }

    public function getUrlParaContactoWhatsapp($vta_vendedor_asignado = false) {
        if($vta_vendedor_asignado && false){
        $url = "https://api.whatsapp.com/send?phone=" . $vta_vendedor_asignado->getCelular() .
                "&text=Hola ".$vta_vendedor_asignado->getNombre().", quisiera consultarte por el producto *" . $this->getCodigoInterno() . " - " . $this->getDescripcion() . "*.";
            
        }else{
        $url = "https://api.whatsapp.com/send?phone=" . DbConfig::getNroTelefonoWspActivo('numero') .
                "&text=Hola, quisiera consultar por el producto *" . $this->getCodigoInterno() . " - " . $this->getDescripcion() . "*.";            
        }
        return $url;
    }

    /**
     * Este metodo llamar en cada parte de la tienda donde se muestre descripcion de producto
     * @return [type] [description]
     */
    public function getDescripcionTienda() {
        return $this->getDescripcion();
    }

    public function getInsInsumoImagensParaTienda() {
        $c = new Criterio();
        $c->add(InsInsumoImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(InsInsumoImagen::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
        
        //$c->addInicioSubconsulta();
        //$c->add(InsTipoImagen::GEN_ATTR_CODIGO, InsTipoImagen::TIPO_FOTO, Criterio::IGUAL);
        //$c->add(InsTipoImagen::GEN_ATTR_CODIGO, InsTipoImagen::TIPO_DESPIECE, Criterio::IGUAL, false, Criterio::_OR);
        //$c->add(InsTipoImagen::GEN_ATTR_CODIGO, InsTipoImagen::TIPO_SIN_PROCESAR, Criterio::IGUAL, false, Criterio::_OR);
        //$c->addFinSubconsulta();
        
        $c->addTabla(InsInsumoImagen::GEN_TABLA);
        //$c->addRealJoin(InsTipoImagen::GEN_TABLA, InsTipoImagen::GEN_ATTR_ID, InsInsumoImagen::GEN_ATTR_INS_TIPO_IMAGEN_ID);
        //$c->addOrden(InsTipoImagen::GEN_ATTR_ORDEN, Criterio::_ASC);
        $c->addOrden(InsInsumoImagen::GEN_ATTR_ORDEN, Criterio::_ASC);
        $c->setCriterios();

        $p = new Paginador(5, 1);
        $p = new Paginador(1, 1);
        
        $ins_insumo_imagens = InsInsumoImagen::getInsInsumoImagens($p, $c);
        return $ins_insumo_imagens;
    }

    public function getPathImagenPrincipalParaTienda($thumb = false) {
        $c = new Criterio();
        $c->add(InsInsumoImagen::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(InsInsumoImagen::GEN_ATTR_INS_INSUMO_ID, $this->getId(), Criterio::IGUAL);
        $c->addInicioSubconsulta();
        $c->add(InsTipoImagen::GEN_ATTR_CODIGO, InsTipoImagen::TIPO_FOTO, Criterio::IGUAL);
        $c->add(InsTipoImagen::GEN_ATTR_CODIGO, InsTipoImagen::TIPO_DESPIECE, Criterio::IGUAL, false, Criterio::_OR);
        $c->add(InsTipoImagen::GEN_ATTR_CODIGO, InsTipoImagen::TIPO_SIN_PROCESAR, Criterio::IGUAL, false, Criterio::_OR);
        $c->addFinSubconsulta();
        $c->addTabla(InsInsumoImagen::GEN_TABLA);
        $c->addRealJoin(InsTipoImagen::GEN_TABLA, InsTipoImagen::GEN_ATTR_ID, InsInsumoImagen::GEN_ATTR_INS_TIPO_IMAGEN_ID);
        $c->addOrden(InsInsumoImagen::GEN_ATTR_ORDEN, Criterio::_ASC);
        $c->setCriterios();

        $ins_insumo_imagens = InsInsumoImagen::getInsInsumoImagens(new Paginador(1, 1), $c);
        foreach($ins_insumo_imagens as $ins_insumo_imagen){
            return $ins_insumo_imagen->getPathImagenParaTienda($thumb);
        }

        return Gral::getPath('path_http') . 'imgs/no-imagen-tienda.jpg';
    }

    static function getInsInsumosOrdenarPorParaTiendaOnlineCmb() {
        $cont = 0;
        $arr = array();

        $cont++;
        $arr[$cont]['cod'] = 'disponibilidad-stock-mayor';
        $arr[$cont]['descripcion'] = 'Disponibilidad de Stock';
        
        $cont++;
        $arr[$cont]['cod'] = 'importe-venta-mayor';
        $arr[$cont]['descripcion'] = 'Mayor Importe de Venta';

        $cont++;
        $arr[$cont]['cod'] = 'importe-venta-menor';
        $arr[$cont]['descripcion'] = 'Menor Importe de Venta';

        $cont++;
        $arr[$cont]['cod'] = 'descripcion';
        $arr[$cont]['descripcion'] = 'Alfabeticamente';

        $cont++;
        $arr[$cont]['cod'] = 'marca';
        $arr[$cont]['descripcion'] = 'Marcas';

        $cont++;
        $arr[$cont]['cod'] = 'mas-recientes';
        $arr[$cont]['descripcion'] = 'Mas Recientes';
        
        return $arr;
    }

    static function getInsInsumosVisualizacionPorParaTiendaOnlineCmb() {
        $cont = 0;
        $arr = array();

        $cont++;
        $arr[$cont]['cod'] = 'grid';
        $arr[$cont]['descripcion'] = 'Grilla de Productos';
        
        $cont++;
        $arr[$cont]['cod'] = 'list';
        $arr[$cont]['descripcion'] = 'Lista de Productos';

        return $arr;
    }

    public function getArrStockResumenGeneralSemaforoTienda() {
        $relevancia_maxima = 0;

        $arr_stock_panoles = $this->getArrStockResumenPanolesSemaforoTienda();
        foreach ($arr_stock_panoles as $arr_stock_panol) {
            $relevancia = $arr_stock_panol['tipo-estado-relevancia'];
            if ($relevancia > $relevancia_maxima) {
                $relevancia_maxima = $relevancia;
                $arr_stock_general = $arr_stock_panol;
            }
        }

        return $arr_stock_general;
    }

    public function getArrStockResumenPanolesSemaforoTienda() {

        $pan_panols = PanPanol::getPanPanols(null, null, true);
        foreach ($pan_panols as $pan_panol) {
            // -----------------------------------------------------------------
            // exclusion temporal, agregar un campo a pan panol para controlar el
            // caracter publico de un deposito
            // -----------------------------------------------------------------
            /*if($pan_panol->getCodigo() == PanPanol::PANOL_LAE_BUENOS_AIRES){
                continue;
            }*/
            $arr_stock = $this->getArrStockResumenEnPanolSemaforoTienda($pan_panol);
            $arr_stock_panoles[$pan_panol->getId()] = $arr_stock;
        }

        return $arr_stock_panoles;
    }

    public function getArrStockResumenEnPanolSemaforoTienda($pan_panol) {
        $arr_stock['panol-id'] = $pan_panol->getId();
        $arr_stock['panol-descripcion'] = $pan_panol->getDescripcion();
        $arr_stock['panol-codigo-corto'] = $pan_panol->getCodigoCorto();

        $ins_stock_resumen = $this->getInsStockResumenEnPanol($pan_panol);
        if ($ins_stock_resumen && $ins_stock_resumen->getCantidad() > 0) {
            switch ($ins_stock_resumen->getInsStockResumenTipoEstado()->getCodigo()) {
                case InsStockResumenTipoEstado::TIPO_EXCEDIDO:
                case InsStockResumenTipoEstado::TIPO_REGULAR:
                case InsStockResumenTipoEstado::TIPO_REQUIERE_PEDIDO:
                    $arr_stock['tipo-estado-codigo'] = 'DISPONIBLE';
                    $arr_stock['tipo-estado-descripcion'] = 'Disponible';
                    $arr_stock['tipo-estado-descripcion-corta'] = 'D';
                    $arr_stock['tipo-estado-relevancia'] = 3;
                    break;
                case InsStockResumenTipoEstado::TIPO_MENOR_MINIMO:
                    $arr_stock['tipo-estado-codigo'] = 'POCO-DISPONIBLE';
                    $arr_stock['tipo-estado-descripcion'] = 'Disponible';
                    $arr_stock['tipo-estado-descripcion-corta'] = 'D';
                    $arr_stock['tipo-estado-relevancia'] = 2;
                    break;
                case InsStockResumenTipoEstado::TIPO_NO_INICIALIZADO:
                    $arr_stock['tipo-estado-codigo'] = 'NO-DISPONIBLE';
                    $arr_stock['tipo-estado-descripcion'] = 'No Disponible';
                    $arr_stock['tipo-estado-descripcion-corta'] = 'N/D';
                    $arr_stock['tipo-estado-relevancia'] = 1;
                    break;
                default:
            }
        }else{
            $arr_stock['tipo-estado-codigo'] = 'NO-DISPONIBLE';
            $arr_stock['tipo-estado-descripcion'] = 'No Disponible';
            $arr_stock['tipo-estado-descripcion-corta'] = 'N/D';
            $arr_stock['tipo-estado-relevancia'] = 1;            
        }

        return $arr_stock;
    }
    
    /**
     * 
     */
    public function getInsCategoriaPrincipal(){
        $codigo = $this->getCodigo();
        $arr_codigo = explode('-', $codigo);
        
    }
    
    /**
     * 
     * @param type $pdf
     * @param type $x
     * @param type $y
     */
    public function getFichaParaTCPDFChico($pdf, $x = 0, $y = 0){
        
        $x_descripcion = $x + 0.99;
        $y_descripcion = $y + 3;
        
        $x_qr = $x + 5;
        $y_qr = $y + 20;
        
        $x_logo = $x + 3;
        $y_logo = $y + 60;

        $x_codigo = $x + 28;
        $y_codigo = $y + 61;
        
        $x_rectangulo = $x;
        $y_rectangulo = $y;        
        
        $id = $this->getId();
        $codigo = $this->getCodigoBarraInterno();
        $codigo_interno = $this->getCodigoInterno();
        $codigo_barra_numerico = str_replace(InsInsumo::PREFIJO_INSUMO_BARCODE,'', $codigo);
        $codigo_barra_numerico = substr($codigo_barra_numerico, -6);
        
        $url = Gral::getPathHttpTienda().'mods/precios/precio.php?id='.$this->getId().'&hash='.$this->getHash();
        
        //$codigo_barra_numerico = 33011;

        // --------------------------------------------------------------------
        // Rectangulo
        // --------------------------------------------------------------------
        $style_rect = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(150, 150, 150));
        $pdf->Rect($x_rectangulo, $y_rectangulo, 47, 69, 'D', array('all' => $style_rect));
        
        // -------------------------------------------------------------------------
        // descripcion corta
        // -------------------------------------------------------------------------
        $pdf->setXY($x_descripcion, $y_descripcion);
        $pdf->SetFont('dejavusans', '', 10);    
        $pdf->MultiCell('45%', 4, $this->getDescripcionCorta(), 0, 'C', false);
        
        // -------------------------------------------------------------------------
        // qrcode
        // -------------------------------------------------------------------------
        // set style for barcode
        $style = array(
            'border' => 2,
            'dash' => 0,
            'color' => array(0, 0, 0),
            'vpadding' => 'auto',
            'hpadding' => 'auto',
            //'fgcolor' => array(250, 2, 1),
            'fgcolor' => array(0, 0, 0),
            'bgcolor' => false, //array(255,255,255)
            'module_width' => 1, // width of a single module in points
            'module_height' => 1 // height of a single module in points
        );
        
        $pdf->write2DBarcode($url, 'QRCODE,L', $x_qr, $y_qr, 37, 37, $style, 'N');

        // -------------------------------------------------------------------------
        // enlace
        // -------------------------------------------------------------------------
        $pdf->Link($x_descripcion, $y_descripcion, 45, 15, rawurldecode($url));
        
        // -------------------------------------------------------------------------
        // logo empresa
        // -------------------------------------------------------------------------
        $pdf->Image(Gral::getPathAbs().DbConfig::PATH_LOGO_EMPRESA_PDF_ETIQUETA, $x_logo, $y_logo, 20);
        
        // -------------------------------------------------------------------------
        // codigo interno 
        // -------------------------------------------------------------------------
        $pdf->SetFont('dejavusans', 'B', 8);    
        $pdf->setXY($x_codigo, $y_codigo);
        $pdf->Cell(10, 4, $codigo_interno, 0, 1, 'C', false);       
    }

    /**
     * 
     * @param type $pdf
     * @param type $x
     * @param type $y
     */
    public function getFichaParaTCPDFMediano($pdf, $x = 0, $y = 0){
        
        $x_descripcion = $x + 0.99;
        $y_descripcion = $y + 3;
        
        $x_qr = $x + 18;
        $y_qr = $y + 32;
        
        $x_logo = $x + 20;
        $y_logo = $y + 110;

        $x_codigo = $x + 36.5;
        $y_codigo = $y + 95;
        
        $x_rectangulo = $x;
        $y_rectangulo = $y;        
        
        $id = $this->getId();
        $codigo = $this->getCodigoBarraInterno();
        $codigo_interno = $this->getCodigoInterno();
        $codigo_barra_numerico = str_replace(InsInsumo::PREFIJO_INSUMO_BARCODE,'', $codigo);
        $codigo_barra_numerico = substr($codigo_barra_numerico, -6);
        
        $url = Gral::getPathHttpTienda().'mods/precios/precio.php?id='.$this->getId().'&hash='.$this->getHash();
        
        //$codigo_barra_numerico = 33011;

        // --------------------------------------------------------------------
        // Rectangulo
        // --------------------------------------------------------------------
        $style_rect = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(150, 150, 150));
        $pdf->Rect($x_rectangulo, $y_rectangulo, 94, 130, 'D', array('all' => $style_rect));
        
        // -------------------------------------------------------------------------
        // descripcion corta
        // -------------------------------------------------------------------------
        $pdf->setXY($x_descripcion, $y_descripcion);
        $pdf->SetFont('dejavusans', '', 16);
        $pdf->MultiCell('85%', 4, $this->getDescripcionCorta(), 0, 'C', false);
        
        // -------------------------------------------------------------------------
        // qrcode
        // -------------------------------------------------------------------------
        // set style for barcode
        $style = array(
            'border' => 2,
            'dash' => 0,
            'color' => array(0, 0, 0),
            'vpadding' => 'auto',
            'hpadding' => 'auto',
            //'fgcolor' => array(250, 2, 1),
            'fgcolor' => array(0, 0, 0),
            'bgcolor' => false, //array(255,255,255)
            'module_width' => 1, // width of a single module in points
            'module_height' => 1 // height of a single module in points
        );
        
        $pdf->write2DBarcode($url, 'QRCODE,L', $x_qr, $y_qr, 55, 55, $style, 'N');
        
        // -------------------------------------------------------------------------
        // enlace
        // -------------------------------------------------------------------------
        $pdf->Link($x_descripcion, $y_descripcion, 90, 15, rawurldecode($url));
        
        // -------------------------------------------------------------------------
        // logo empresa
        // -------------------------------------------------------------------------
        $pdf->Image(Gral::getPathAbs().DbConfig::PATH_LOGO_EMPRESA_PDF_ETIQUETA, $x_logo, $y_logo, 45);
        
        // -------------------------------------------------------------------------
        // codigo interno 
        // -------------------------------------------------------------------------
        $pdf->SetFont('dejavusans', 'B', 20);    
        $pdf->setXY($x_codigo, $y_codigo);
        $pdf->Cell(20, 4, $codigo_interno, 0, 1, 'C', false);
    }
    
    /**
     * 
     * @param type $pdf
     * @param type $x
     * @param type $y
     */
    public function getFichaParaTCPDFGrande($pdf, $x = 0, $y = 0){
        
        $x_descripcion = $x + 95;
        $y_descripcion = $y + 3;
        
        $x_rectangulo_imagen = $x + 2;
        $y_rectangulo_imagen = $y + 2;
        
        $x_qr = $x + 118;
        $y_qr = $y + 35;
        
        $x_codigo = $x + 133;
        $y_codigo = $y + 95;
        
        $x_logo = $x + 110;
        $y_logo = $y + 105;
        
        $x_rectangulo = $x;
        $y_rectangulo = $y;        
        
        $id = $this->getId();
        $codigo = $this->getCodigoBarraInterno();
        $codigo_interno = $this->getCodigoInterno();
        $codigo_barra_numerico = str_replace(InsInsumo::PREFIJO_INSUMO_BARCODE,'', $codigo);
        $codigo_barra_numerico = substr($codigo_barra_numerico, -6);
        
        $url = Gral::getPathHttpTienda().'mods/precios/precio.php?id='.$this->getId().'&hash='.$this->getHash();
        
        //$codigo_barra_numerico = 33011;

        // --------------------------------------------------------------------
        // Rectangulo
        // --------------------------------------------------------------------
        $style_rect = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(150, 150, 150));
        $pdf->Rect($x_rectangulo, $y_rectangulo, 197, 130, 'D', array('all' => $style_rect));
        
        // -------------------------------------------------------------------------
        // descripcion corta
        // -------------------------------------------------------------------------
        $pdf->setXY($x_descripcion, $y_descripcion);
        $pdf->SetFont('dejavusans', '', 18);    
        $pdf->MultiCell('100%', 4, $this->getDescripcionCorta(), 0, 'L', false);
        
        // --------------------------------------------------------------------
        // Rectangulo IMAGEN
        // --------------------------------------------------------------------
        $style_rect = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(200, 200, 200));
        //$pdf->Rect($x_rectangulo_imagen, $y_rectangulo_imagen, 85, 120, 'D', array('all' => $style_rect));
        $pdf->Image($this->getPathImagenPrincipal(), $x_rectangulo_imagen, $y_rectangulo_imagen, 85);
        
        // -------------------------------------------------------------------------
        // qrcode
        // -------------------------------------------------------------------------
        // set style for barcode
        $style = array(
            'border' => 2,
            'dash' => 0,
            'color' => array(0, 0, 0),
            'vpadding' => 'auto',
            'hpadding' => 'auto',
            //'fgcolor' => array(250, 2, 1),
            'fgcolor' => array(0, 0, 0),
            'bgcolor' => false, //array(255,255,255)
            'module_width' => 1, // width of a single module in points
            'module_height' => 1 // height of a single module in points
        );
        
        $pdf->write2DBarcode($url, 'QRCODE,L', $x_qr, $y_qr, 50, 50, $style, 'N');
        
        // -------------------------------------------------------------------------
        // enlace
        // -------------------------------------------------------------------------
        $pdf->Link($x_descripcion, $y_descripcion, 90, 15, rawurldecode($url));

        // -------------------------------------------------------------------------
        // codigo interno 
        // -------------------------------------------------------------------------
        $pdf->SetFont('dejavusans', 'B', 18);    
        $pdf->setXY($x_codigo, $y_codigo);
        $pdf->Cell(20, 4, $codigo_interno, 0, 1, 'C', false);
        
        // -------------------------------------------------------------------------
        // logo empresa
        // -------------------------------------------------------------------------
        $pdf->Image(Gral::getPathAbs().DbConfig::PATH_LOGO_EMPRESA_PDF_ETIQUETA, $x_logo, $y_logo, 60);
    }
    
    /**
     * 
     * @param type $pdf
     * @param type $x
     * @param type $y
     */
    public function getQRParaTCPDFChico($pdf, $x = 0, $y = 0){
        
        $x_qr = $x + 1;
        $y_qr = $y + 1;

        $x_descripcion = $x + 26;
        $y_descripcion = $y + 4;
                
        $x_logo = $x + 60;
        $y_logo = $y + 16;

        $x_codigo = $x + 26;
        $y_codigo = $y + 19;
        
        $x_rectangulo = $x;
        $y_rectangulo = $y;        
        
        $id = $this->getId();
        $codigo_barra_interno = $this->getCodigoBarraInterno();
        $codigo_interno = $this->getCodigoInterno();
        $codigo_barra_numerico = str_replace(InsInsumo::PREFIJO_INSUMO_BARCODE,'', $codigo);
        $codigo_barra_numerico = substr($codigo_barra_numerico, -6);
                
        //$codigo_barra_numerico = 33011;

        // --------------------------------------------------------------------
        // Rectangulo
        // --------------------------------------------------------------------
        $style_rect = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(150, 150, 150));
        $pdf->Rect($x_rectangulo, $y_rectangulo, 100, 26, 'D', array('all' => $style_rect));
        
        // -------------------------------------------------------------------------
        // descripcion corta
        // -------------------------------------------------------------------------
        $pdf->setXY($x_descripcion, $y_descripcion);
        $pdf->SetFont('dejavusans', 'B', 11);    
        $pdf->MultiCell('70%', 4, $this->getDescripcionCorta(), 0, 'L', false);
        
        // -------------------------------------------------------------------------
        // qrcode
        // -------------------------------------------------------------------------
        // set style for barcode
        $style = array(
            'border' => 0,
            'dash' => 0,
            'color' => array(0, 0, 0),
            'vpadding' => 'auto',
            'hpadding' => 'auto',
            //'fgcolor' => array(250, 2, 1),
            'fgcolor' => array(0, 0, 0),
            'bgcolor' => false, //array(255,255,255)
            'module_width' => 1, // width of a single module in points
            'module_height' => 1 // height of a single module in points
        );
        
        $pdf->write2DBarcode($codigo_barra_interno, 'QRCODE,L', $x_qr, $y_qr, 25, 25, $style, 'N');
        
        // -------------------------------------------------------------------------
        // logo empresa
        // -------------------------------------------------------------------------
        $pdf->Image(Gral::getPathAbs().DbConfig::PATH_LOGO_EMPRESA_PDF_ETIQUETA, $x_logo, $y_logo, 30);
        
        // -------------------------------------------------------------------------
        // codigo interno 
        // -------------------------------------------------------------------------
        $pdf->SetFont('dejavusans', 'B', 8);    
        $pdf->setXY($x_codigo, $y_codigo);
        $pdf->Cell(10, 4, $codigo_interno, 0, 1, 'L', false);
    }
    
    /**
     * 
     */
    public function getHtmlInsumoBultoConfiguracion(){
        $ins_insumo_bultos = $this->getInsInsumoBultos(null, null, true);
        include Gral::getPathAbs() . 'admin/ajax/modulos/ins_insumo_gestion/html_insumo_bulto_configuracion.php';
    }
    
    /**
     * 
     */
    public function getAltaMostrarBloqueRelacionVtaPoliticaDescuentoInsInsumo(){
        return false;
    }
    
    /**
     * Obtiene los Insumos con proceso productivo configurado
     * @return array
     * @creado_por Esteban, Pablo
     */
    static function getInsInsumosConPrdProcesoProductivoCmb() {
        $c = new Criterio();
        
        $c->addTabla(InsInsumo::GEN_TABLA);
        $c->addRealJoin(PrdProcesoProductivo::GEN_TABLA, PrdProcesoProductivo::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
        $c->add(PrdProcesoProductivo::GEN_ATTR_CONFIGURADO, 1, Criterio::IGUAL);
        $c->addOrden(InsInsumo::GEN_ATTR_DESCRIPCION, 'asc');
        $c->setCriterios();
        return self::getInsInsumosCmbF(null, $c);
    }
}

?>
