<?php

require_once "base/BVtaPresupuesto.php";

class VtaPresupuesto extends BVtaPresupuesto {

    const TEXTO_CONSUMIDOR_FINAL = 'CONSUMIDOR FINAL';
    const PRESUPUESTO_ACTIVO = 'KYA_PRESUPUESTO_ACTIVO';
    const PREFIJO_COT = 'COT-';
    const DIAR_VENCIMIENTO_DEFAULT = 10;

    public function getDescripcion() {
        $texto = "";

        $texto = $this->getCodigo();
        $texto .= ' - ';
        $texto .= $this->getPersonaDescripcion();
        $texto .= ' - ';
        $texto .= Gral::getFechaToWEB($this->getFecha());

        return $texto;
    }

    /**
     * Metodo que permite configurar el alcance a nivel de registros de los usuarios
     * @param type $criterio: es el criterio a intervenir
     * @return type
     */
    static function setAplicarFiltrosDeAlcance($criterio) {

        // ---------------------------------------------------------------------
        // se consulta el alcance de sucursales del usuario
        // ---------------------------------------------------------------------
        $us_usuario_autenticado = UsUsuario::autenticado();
        if ($us_usuario_autenticado) {
            $gral_sucursals_autorizadas_ids = $us_usuario_autenticado->getGralSucursalUsUsuariosId();
        }

        $vta_vendedor_autenticado = $us_usuario_autenticado->getVtaVendedor();
        if ($vta_vendedor_autenticado) {
            // -----------------------------------------------------------------
            // si es vendedor
            // -----------------------------------------------------------------
            $vta_tipo_vendedor = $vta_vendedor_autenticado->getVtaTipoVendedor();
            switch ($vta_tipo_vendedor->getCodigo()) {
                case VtaTipoVendedor::TIPO_PREVENTISTA:
                    $criterio->add(VtaPresupuesto::GEN_ATTR_VTA_VENDEDOR_ID, $vta_vendedor_autenticado->getId(), Criterio::IGUAL);
                    $criterio->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_ID);
                    break;
                default:
                    $criterio->add(GralSucursal::GEN_ATTR_ID, $gral_sucursals_autorizadas_ids, Criterio::IN_ARRAY);
                    $criterio->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_ID);
            }
        } else {
            // -----------------------------------------------------------------
            // si no es vendedor
            // -----------------------------------------------------------------
            $criterio->add(GralSucursal::GEN_ATTR_ID, $gral_sucursals_autorizadas_ids, Criterio::IN_ARRAY);
            $criterio->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_ID);
        }

        return $criterio;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 17/07/2017 11:07 hs.
     * Metodo que devuelve el presupuesto activo, si hubiese, sino FALSE
     * @return 
     */
    static function getPresupuestoActivo() {
        $vta_presupuesto = false;

        // consultar si existe presupuesto activo en session e inicializar objeto
        // if (isset(Gral::getSes(self::PRESUPUESTO_ACTIVO))) {
        if (isset($_SESSION[self::PRESUPUESTO_ACTIVO])) {
            $vta_presupuesto_id = Gral::getSes(self::PRESUPUESTO_ACTIVO);
            $vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
        }

        return $vta_presupuesto;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 19/07/2017 11:07 hs.
     * Metodo que registra un nuevo estado para el presupuesto.
     * @return Obj VtaPresupuestoEstado
     */
    public function setVtaPresupuestoEstado($codigo, $observacion = '') {
        // ----------------------------------------------------------------------
        // se actualizan los campos actual de todos los estados del presupuesto
        // ----------------------------------------------------------------------
        $inicial = 1;
        foreach ($this->getVtaPresupuestoEstados() as $vta_presupuesto_estado) {
            $vta_presupuesto_estado->setActual(0);
            $vta_presupuesto_estado->save();

            $inicial = 0;
        }

        // ----------------------------------------------------------------------
        // se agrega el nuevo estado del presupuesto        
        // ----------------------------------------------------------------------
        $vta_presupuesto_tipo_estado = VtaPresupuestoTipoEstado::getOxCodigo($codigo);

        $vta_presupuesto_estado = new VtaPresupuestoEstado();
        $vta_presupuesto_estado->setVtaPresupuestoId($this->getId());
        $vta_presupuesto_estado->setVtaPresupuestoTipoEstadoId($vta_presupuesto_tipo_estado->getId());
        $vta_presupuesto_estado->setInicial($inicial);
        $vta_presupuesto_estado->setActual(1);
        $vta_presupuesto_estado->setObservacion($observacion);
        $vta_presupuesto_estado->save();

        // ----------------------------------------------------------------------
        // actualizamos el estado en vta_presupuesto        
        // ----------------------------------------------------------------------
        $this->setVtaPresupuestoTipoEstadoId($vta_presupuesto_tipo_estado->getId());
        $this->save();

        return $vta_presupuesto_estado;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 17/07/2017 11:07 hs.
     * Metodo que 
     * @return 
     */
    static function inicializarPresupuesto($vta_vendedor_id, $fecha, $ins_tipo_lista_precio_id = false, $cli_cliente_id = false) {

        $ins_tipo_lista_precio = InsTipoListaPrecio::getOxId($ins_tipo_lista_precio_id);

        $vta_vendedor = VtaVendedor::getOxId($vta_vendedor_id);
        if ($vta_vendedor) {
            // --------------------------------------------------------------------------
            // se instancia la sucursal vinculada al vendedor
            // --------------------------------------------------------------------------    
            $gral_sucursal_actual = $vta_vendedor->getGralSucursal();
        }

        // ----------------------------------------------------------------------
        // se determina la lista de precios por default
        // ----------------------------------------------------------------------
        $ins_tipo_lista_precio_default = InsTipoListaPrecio::getOxCodigo(InsTipoListaPrecio::TIPO_PRECIO_GENERAL);

        // ----------------------------------------------------------------------
        // se calcular variables que afectan al presupuesto
        // ----------------------------------------------------------------------
        $fecha_vencimiento = Date::sumarDias($fecha, self::DIAR_VENCIMIENTO_DEFAULT);

        // ----------------------------------------------------------------------
        // se registra el nuevo presupuesto
        // ----------------------------------------------------------------------
        $vta_presupuesto = new VtaPresupuesto();
        $vta_presupuesto->setPersonaDescripcion(self::TEXTO_CONSUMIDOR_FINAL);
        $vta_presupuesto->setVtaVendedorId($vta_vendedor_id);
        $vta_presupuesto->setGralSucursalId($gral_sucursal_actual->getId());
        $vta_presupuesto->setFecha($fecha);
        $vta_presupuesto->setFechaVencimiento($fecha_vencimiento);
        $vta_presupuesto->setFechaEntrega('1900-01-01');
        $vta_presupuesto->setFechaRecordatorio('1900-01-01');
        $vta_presupuesto->setPorcentaje(100);
        $vta_presupuesto->setEstado(0);

        if ($ins_tipo_lista_precio) {
            $vta_presupuesto->setIncluyeLogistica($ins_tipo_lista_precio->getIncluyeLogistica());
        }

        if ($cli_cliente_id) {
            $cli_cliente = CliCliente::getOxId($cli_cliente_id);
            if ($cli_cliente) {
                $vta_presupuesto->setCliClienteId($cli_cliente_id);
                $vta_presupuesto->setPersonaDescripcion($cli_cliente->getDescripcion());
                $vta_presupuesto->setPersonaDocumento($cli_cliente->getCuit());
                $vta_presupuesto->setPersonaEmail($cli_cliente->getEmail());
                $vta_presupuesto->save();
            }
        }

        if ($ins_tipo_lista_precio_id) {
            // ------------------------------------------------------------------
            // se inicializa por default el tipo de lista mostrador
            // ------------------------------------------------------------------
            $vta_presupuesto->setInsTipoListaPrecioId($ins_tipo_lista_precio_id);
        } else {
            $vta_presupuesto->setInsTipoListaPrecioId($ins_tipo_lista_precio_default->getId());
        }

        //----------------------------------------------------------------------
        // se determina el tipo de origen SISTEMA
        //----------------------------------------------------------------------
        $vta_presupuesto_tipo_origen = VtaPresupuestoTipoOrigen::getOxCodigo(VtaPresupuestoTipoOrigen::TIPO_SISTEMA);
        if ($vta_presupuesto_tipo_origen) {
            $vta_presupuesto->setVtaPresupuestoTipoOrigenId($vta_presupuesto_tipo_origen->getId());
        }
        
        $vta_presupuesto->save();
        
        $vta_presupuesto->setCodigo(self::PREFIJO_COT . str_pad($vta_presupuesto->getId(), 8, 0, STR_PAD_LEFT));
        $vta_presupuesto->save();

        // ----------------------------------------------------------------------
        // se setea el estado actual del presupuesto
        // ----------------------------------------------------------------------
        $vta_presupuesto_estado = $vta_presupuesto->setVtaPresupuestoEstado(VtaPresupuestoTipoEstado::TIPO_EN_CURSO, $observacion = '');

        return $vta_presupuesto;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 21/07/2020 23:00 hs.
     * Metodo que agrega cantidad de un InsInsumo existente al presupuesto
     * @return 
     */
    public function setInsumoExistenteAPresupuesto($vta_presupuesto_ins_insumo, $cantidad, $ins_tipo_lista_precio_id, $cli_cliente_id, $ins_insumo_bulto_id = 0) {

        if ($ins_insumo_bulto_id != 0) {
            $ins_insumo_bulto = InsInsumoBulto::getOxId($ins_insumo_bulto_id);
        }

        if ($ins_insumo_bulto) {
            $vta_presupuesto_ins_insumo->setInsInsumoBultoId($ins_insumo_bulto->getId());
            $vta_presupuesto_ins_insumo->setCantidadBulto($ins_insumo_bulto->getCantidad());
        }
        $vta_presupuesto_ins_insumo->setCantidad($cantidad);
        $vta_presupuesto_ins_insumo->save();

        // -----------------------------------------------------------------
        // se recalcula por potenciales afectaciones (recardos o descuentos)
        // -----------------------------------------------------------------
        $vta_presupuesto_ins_insumo->setRecalcularImportePorAfectaciones();

        // -----------------------------------------------------------------
        // se agrega cliente al presupuesto
        // -----------------------------------------------------------------
        if ($cli_cliente_id) {
            $cli_cliente = CliCliente::getOxId($cli_cliente_id);
            if ($cli_cliente) {
                $this->setCliClienteId($cli_cliente_id);
                $this->setPersonaDescripcion($cli_cliente->getDescripcion());
                $this->setPersonaDocumento($cli_cliente->getCuit());
                $this->setPersonaEmail($cli_cliente->getEmail());
                $this->save();
            }
        }

        return $vta_presupuesto_ins_insumo;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 17/07/2017 11:07 hs.
     * Metodo que agrega un InsInsumo al presupuesto
     * @return 
     */
    public function setInsumoAPresupuesto($ins_insumo_id, $cantidad, $ins_tipo_lista_precio_id, $cli_cliente_id, $ins_insumo_bulto_id = 0) {
        $ins_insumo = InsInsumo::getOxId($ins_insumo_id);
        $ins_tipo_lista_precio = InsTipoListaPrecio::getOxId($ins_tipo_lista_precio_id);        
        $gral_tipo_iva_exento = GralTipoIva::getOxCodigo(GralTipoIva::TIPO_EXENTO);

        $ins_lista_precio = $ins_insumo->getInsInsumoListaPrecioXTipoLista($ins_tipo_lista_precio, true);
        
        // ---------------------------------------------------------------------
        // si se indica algun bulto
        // ---------------------------------------------------------------------
        if ($ins_insumo_bulto_id != 0) {
            $ins_insumo_bulto = InsInsumoBulto::getOxId($ins_insumo_bulto_id);
        }else{
            // -----------------------------------------------------------------
            // si el producto tienen logica de bultos y la lista lo exige
            // -----------------------------------------------------------------
            if($ins_tipo_lista_precio && $ins_tipo_lista_precio->getBultoCerrado()){
                $ins_insumo_bulto = $ins_insumo->getInsInsumoBultoMenor($ins_tipo_lista_precio);
            }
        }
        
        // ---------------------------------------------------------------------
        // se controla cantidad minima de venta
        // ---------------------------------------------------------------------
        if($ins_lista_precio->getCantidadMinimaVenta() > $cantidad){
            $cantidad = $ins_lista_precio->getCantidadMinimaVenta();
        }
        
        // ---------------------------------------------------------------------
        // se controla el limite de items del presupuesto
        // ---------------------------------------------------------------------
        if(DbConfig::VARS_CANTIDAD_ITEMS_PRESUPUESTO > 0){
            $vta_presupuesto_ins_insumos = $this->getVtaPresupuestoInsInsumos(null, null, true);        
            if(count($vta_presupuesto_ins_insumos) >= DbConfig::VARS_CANTIDAD_ITEMS_PRESUPUESTO){
                return;
            }
        }
        
        $iva_exceptuado = false;
        
        // -----------------------------------------------------------------
        // se agrega cliente al presupuesto
        // -----------------------------------------------------------------
        if ($cli_cliente_id) {
            $cli_cliente = CliCliente::getOxId($cli_cliente_id);
            if ($cli_cliente) {
                $this->setCliClienteId($cli_cliente_id);
                $this->setPersonaDescripcion($cli_cliente->getDescripcion());
                $this->setGralTipoDocumentoId($cli_cliente->getGralTipoDocumentoId());
                $this->setPersonaDocumento($cli_cliente->getCuit());
                $this->setPersonaEmail($cli_cliente->getEmail());
                
                $gral_condicion_iva = $cli_cliente->getGralCondicionIva();
                $iva_exceptuado = $cli_cliente->getIvaExceptuado();
            }
        }elseif($this->getCliClienteId() != 'null'){
            $iva_exceptuado = $this->getCliCliente()->getIvaExceptuado();            
        }
        
        if ($ins_insumo_bulto_id != 0) {
            $ins_insumo_bulto = InsInsumoBulto::getOxId($ins_insumo_bulto_id);
        }

        // ----------------------------------------------------------------------
        // Asocio el ins_insumo al presupuesto
        // ----------------------------------------------------------------------

        if ($ins_insumo) {
            $vta_presupuesto_ins_insumo = new VtaPresupuestoInsInsumo();
            $vta_presupuesto_ins_insumo->setVtaPresupuestoId($this->getId());
            $vta_presupuesto_ins_insumo->setInsInsumoId($ins_insumo->getId());
            $vta_presupuesto_ins_insumo->setDescripcion($ins_insumo->getDescripcion());

            // -----------------------------------------------------------------
            // se deduce el tipo de IVA de acuerdo al tipo de venta
            // -----------------------------------------------------------------
            if($this->getVtaPresupuestoTipoVenta()->getCodigo() == VtaPresupuestoTipoVenta::TIPO_VENTA_Z){
                $vta_presupuesto_ins_insumo->setGralTipoIvaId($ins_insumo->getGralTipoIvaVentaZ());
            }else{
                $vta_presupuesto_ins_insumo->setGralTipoIvaId($ins_insumo->getGralTipoIvaVenta());
            }

            // -----------------------------------------------------------------
            // se deduce el tipo de IVA de acuerdo a la condicion del cliente
            // -----------------------------------------------------------------
            if($iva_exceptuado){
                $vta_presupuesto_ins_insumo->setGralTipoIvaId($gral_tipo_iva_exento->getId());                
            }
            
            if ($ins_tipo_lista_precio) {
                $ins_lista_precio = $ins_insumo->getInsInsumoListaPrecioXTipoLista($ins_tipo_lista_precio, true);
                $vta_presupuesto_ins_insumo->setInsListaPrecioId($ins_lista_precio->getId());

                $incluye_iva = FALSE;
                $importe_unitario = $ins_insumo->getInsInsumoImporteVentaActual($ins_tipo_lista_precio, $incluye_iva);

                $vta_presupuesto_ins_insumo->setImporteUnitario($importe_unitario);
            }

            if ($ins_insumo_bulto) {
                $vta_presupuesto_ins_insumo->setInsInsumoBultoId($ins_insumo_bulto->getId());
                $vta_presupuesto_ins_insumo->setCantidadBulto($ins_insumo_bulto->getCantidad());
            }

            $vta_presupuesto_ins_insumo->setCantidad($cantidad);
            $vta_presupuesto_ins_insumo->setConflicto(0);
            $vta_presupuesto_ins_insumo->setEstado(1);

            // -----------------------------------------------------------------
            // se registra el costo de insumo
            // -----------------------------------------------------------------
            $ins_insumo_costo = $ins_insumo->getInsInsumoCostoActual();
            if ($ins_insumo_costo) {
                $vta_presupuesto_ins_insumo->setInsInsumoCostoId($ins_insumo_costo->getId());
                $vta_presupuesto_ins_insumo->setImporteCosto($ins_insumo_costo->getCosto());
            }

            $vta_presupuesto_ins_insumo->save();

            // -----------------------------------------------------------------
            // se recalcula por potenciales afectaciones (recardos o descuentos)
            // -----------------------------------------------------------------
            $vta_presupuesto_ins_insumo->setRecalcularImportePorAfectaciones();
        }

        // ---------------------------------------------------------------------
        // hacer un count para la cant de items y actualizar total
        // ---------------------------------------------------------------------
        unset($vta_presupuesto_ins_insumo);

        $importe_subtotal = 0;
        $importe_total = 0;
        $cantidad_items = 0;
        $vta_presupuesto_ins_insumos = $this->getVtaPresupuestoInsInsumos(null, null, true);
        foreach ($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo) {
            $cantidad_items ++;
            $importe_subtotal += $vta_presupuesto_ins_insumo->getImporteUnitario() * $vta_presupuesto_ins_insumo->getCantidad();
            $importe_total += $vta_presupuesto_ins_insumo->getImporteUnitario() * $vta_presupuesto_ins_insumo->getCantidad() * $vta_presupuesto_ins_insumo->getInsInsumo()->getGralTipoIvaVentaObj()->getValorIvaDecimalParaSumarEnCalculo();
        }
        $this->setCantidadItems($cantidad_items);
        $this->setImporteSubtotal($importe_subtotal);
        $this->setImporteTotal($importe_total);

        // -----------------------------------------------------------------
        // se agrega cliente al presupuesto
        // -----------------------------------------------------------------
        if ($cli_cliente_id) {
            $cli_cliente = CliCliente::getOxId($cli_cliente_id);
            if ($cli_cliente) {
                $this->setCliClienteId($cli_cliente_id);
                $this->setPersonaDescripcion($cli_cliente->getDescripcion());
                $this->setGralTipoDocumentoId($cli_cliente->getGralTipoDocumentoId());
                $this->setPersonaDocumento($cli_cliente->getCuit());
                $this->setPersonaEmail($cli_cliente->getEmail());
            }
        }

        $this->save();
    }


    /**
     * Se utiliiza tambien en la tienda al agregar producto al carrito
     *
     * @return void
     */
    public function setActualizarPreciosAPrecioActual(){
        $importe_subtotal = 0;
        $importe_total = 0;
        
        $ins_tipo_lista_precio = $this->getInsTipoListaPrecio();
        
        $vta_presupuesto_ins_insumos = $this->getVtaPresupuestoInsInsumos(null, null, true);
        foreach($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo){
            $ins_insumo = $vta_presupuesto_ins_insumo->getInsInsumo();
            $gral_tipo_iva_venta = $vta_presupuesto_ins_insumo->getInsInsumo()->getGralTipoIvaVentaObj();
            $importe_unitario = $ins_insumo->getInsInsumoImporteVentaActual($ins_tipo_lista_precio, $incluye_iva = false);

            $ins_lista_precio = $ins_insumo->getInsInsumoListaPrecioXTipoLista($ins_tipo_lista_precio, true);
            $vta_presupuesto_ins_insumo->setInsListaPrecioId($ins_lista_precio->getId());

            $vta_presupuesto_ins_insumo->setImporteUnitario($importe_unitario);
            
            $ins_insumo_costo = $ins_insumo->getInsInsumoCostoActual();            
            if ($ins_insumo_costo) {
                $vta_presupuesto_ins_insumo->setInsInsumoCostoId($ins_insumo_costo->getId());
                $vta_presupuesto_ins_insumo->setImporteCosto($ins_insumo_costo->getCosto());
            }
            
            $vta_presupuesto_ins_insumo->save();
            
            $importe_subtotal += $importe_unitario * $vta_presupuesto_ins_insumo->getCantidad();
            $importe_total += $importe_unitario * $vta_presupuesto_ins_insumo->getCantidad() * $gral_tipo_iva_venta->getValorIvaDecimalParaSumarEnCalculo();
            
        }
        
        // ---------------------------------------------------------------------
        // se actualizan total y subtotal del presupuesto
        // ---------------------------------------------------------------------
        $this->setImporteSubtotal($importe_subtotal);
        $this->setImporteTotal($importe_total);
        $this->save();
    }
    
    /**
     * Autor: Gustavo Romo.
     * Fecha: 17/07/2017 11:07 hs.
     * Metodo que asigna un estado de cancelado a vta_presupuesto
     * @return 
     */
    public function cancelarPresupuesto($observacion = '') {
        if ($this->getVtaPresupuestoTipoEstado()->getCodigo() == VtaPresupuestoTipoEstado::TIPO_APROBADO_PARCIAL) {
            $codigo = VtaPresupuestoTipoEstado::TIPO_CANCELADO_PARCIAL;
        } else {
            $codigo = VtaPresupuestoTipoEstado::TIPO_CANCELADO;
        }

        $vta_presupuesto_estado = $this->setVtaPresupuestoEstado($codigo, $observacion);
        return $vta_presupuesto_estado;
    }

    public function setVtaPresupuestoAnular($observacion = '') {

        $vta_orden_ventas = $this->getVtaOrdenVentas();
        foreach ($vta_orden_ventas as $vta_orden_venta) {
            // -----------------------------------------------------------------
            // se cancelan las ordenes de venta
            // -----------------------------------------------------------------
            $vta_orden_venta->setVtaOrdenVentaEstado(VtaOrdenVentaTipoEstado::TIPO_CANCELADO, 'Cancelado por Anulacion de Presupuesto - ' . $observacion);
        }

        // ---------------------------------------------------------------------
        // se anula el presupuesto
        // ---------------------------------------------------------------------
        $vta_presupuesto_estado = $this->setVtaPresupuestoEstado(VtaPresupuestoTipoEstado::TIPO_ANULADO, $observacion);
        return $vta_presupuesto_estado;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 17/07/2017 11:07 hs.
     * Metodo que elimina de sesion el presupuesto activo.
     * @return 
     */
    static function abandonarPresupuesto() {
//        unset(Gral::getSes(self::PRESUPUESTO_ACTIVO));
        unset($_SESSION[self::PRESUPUESTO_ACTIVO]);
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 09/01/2019
     * @modificado_por Esteban Martinez
     * @modificado 10/01/2019
     */
    public function setDuplicarVtaPrespuesto() {
        $user = UsUsuario::autenticado();
        $vta_vendedor = $user->getVtaVendedor();

        $vta_presupuesto_codigo = $this->getCodigo();
        $vta_presupuesto_fecha = Gral::getFechaToWEB($this->getFecha());

        //Items del presupuesto original
        $vta_presupuesto_ins_insumos = $this->getVtaPresupuestoInsInsumos(null, null, true);

        $fecha = date('Y-m-d');
        $fecha_vencimiento = Date::sumarDias($fecha, self::DIAR_VENCIMIENTO_DEFAULT);

        //se copia el objeto. Pero algo sucede con el this que al copiarlo no se puede usar mas
        $vta_presupuesto_nuevo = $this;
        $vta_presupuesto_nuevo->setId(null);

        if ($vta_vendedor) {
            $vta_presupuesto_nuevo->setVtaVendedorId($vta_vendedor->getId());
        }

        $vta_presupuesto_nuevo->setFecha($fecha);
        $vta_presupuesto_nuevo->setFechaVencimiento($fecha_vencimiento);
        $vta_presupuesto_nuevo->setFechaEntrega('1900-01-01');
        $vta_presupuesto_nuevo->setFechaRecordatorio('1900-01-01');
        $vta_presupuesto_nuevo->save();

        foreach ($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo) {
            $vta_presupuesto_ins_insumo_new = $vta_presupuesto_ins_insumo;
            $vta_presupuesto_ins_insumo_new->setId(null);
            $vta_presupuesto_ins_insumo_new->setVtaPresupuestoId($vta_presupuesto_nuevo->getId());
            $vta_presupuesto_ins_insumo_new->save();
        }

        $vta_presupuesto_nuevo->save();

        $vta_presupuesto_nuevo->setCodigo(self::PREFIJO_COT . str_pad($vta_presupuesto_nuevo->getId(), 8, 0, STR_PAD_LEFT));
        $vta_presupuesto_nuevo->save();

        // se setea el estado actual del presupuesto
        $observacion = 'Duplicado desde ' . $vta_presupuesto_codigo . ' - ' . $vta_presupuesto_fecha . ' - ' . $vta_presupuesto_nuevo->getPersonaDescripcion();
        $vta_presupuesto_estado = $vta_presupuesto_nuevo->setVtaPresupuestoEstado(VtaPresupuestoTipoEstado::TIPO_DUPLICADO, $observacion);
        $vta_presupuesto_estado = $vta_presupuesto_nuevo->setVtaPresupuestoEstado(VtaPresupuestoTipoEstado::TIPO_EN_CURSO, $observacion = '');

        return $vta_presupuesto_nuevo;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 19/07/2017 11:07 hs.
     * Metodo que retorna el estado actual del presupuesto.
     * @return Obj VtaPresupuestoEstado
     */
    public function getVtaPresupuestoEstadoActual() {
        $c = new Criterio();
        $c->add(VtaPresupuestoEstado::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaPresupuestoEstado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->addTabla(VtaPresupuestoEstado::GEN_TABLA);
        $c->setCriterios();

        $vta_presupuesto_estados = VtaPresupuestoEstado::getVtaPresupuestoEstados(null, $c);
        foreach ($vta_presupuesto_estados as $vta_presupuesto_estado) {
            return $vta_presupuesto_estado;
        }
        return false;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 19/07/2017 11:00 hs.
     * Metodo que retorna el tipo de estado actual de la importacion.
     * @return Obj VtaPresupuestoEstadoActual
     */
    public function getVtaPresupuestoTipoEstadoActual() {
        $vta_presupuesto_estado_actual = $this->getVtaPresupuestoEstadoActual();
        if ($vta_presupuesto_estado_actual) {
            return $vta_presupuesto_estado_actual->getVtaPresupuestoTipoEstado();
        }
        return false;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 22/09/2017 11:00 hs.
     * Metodo que retorna si el presupuesto esta en un estado terminal.
     * @return Bool
     */
    public function getVtaPresupuestoTipoEstadoActualTerminal() {
        $terminal = false;
        $vta_presupuesto_tipo_estado_actual = $this->getVtaPresupuestoTipoEstado();
        if ($vta_presupuesto_tipo_estado_actual) {
            $terminal = $vta_presupuesto_tipo_estado_actual->getTerminal();
        }
        return $terminal;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 19/07/2017 11:00 hs.
     * Metodo que retorna el estado de un VtaPresupuesto de acuerdo a un codigo de VtaPresupuestoTipoEstado indicado.
     * @return Obj VtaPresupuestoEstado
     */
    public function getVtaPresupuestoEstadoXCodigoDeVtaPresupuestoTipoEstado($codigo) {
        $c = new Criterio();
        $c->add(VtaPresupuestoEstado::GEN_ATTR_VTA_PRESUPUESTO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaPresupuestoTipoEstado::GEN_ATTR_CODIGO, $codigo, Criterio::IGUAL);
        $c->addTabla(VtaPresupuestoEstado::GEN_TABLA);
        $c->addRealJoin(VtaPresupuestoTipoEstado::GEN_TABLA, VtaPresupuestoTipoEstado::GEN_ATTR_ID, VtaPresupuestoEstado::GEN_ATTR_VTA_PRESUPUESTO_TIPO_ESTADO_ID);
        $c->setCriterios();

        $vta_presupuesto_estados = VtaPresupuestoEstado::getVtaPresupuestoEstados(null, $c);
        foreach ($vta_presupuesto_estados as $vta_presupuesto_estado) {
            return $vta_presupuesto_estado;
        }
        return false;
    }

    public function getFechaEntregaSaneado() {
        if ($this->getFechaEntrega() != '1900-01-01') {
            return $this->getFechaEntrega();
        }
        return '';
    }

    public function getFechaRecordatorioSaneado() {
        if ($this->getFechaRecordatorio() != '1900-01-01') {
            return $this->getFechaRecordatorio();
        }
        return '';
    }

    /**
     * Autor: Pablo Rosen.
     * Fecha: 02/04/2018 16:32 hs.
     * Metodo que retorna un array con los valores de iva del presupuestos.
     * @return Float
     */
    public function getArrIvaPresupuesto($porcentaje_iva = 100) {
        $gral_tipo_iva_por_default = GralTipoIva::getGralTipoIvaPorDefault();
        
        $arr_iva = array();
        $vta_presupuesto_ins_insumos = $this->getVtaPresupuestoInsInsumos(null, null, true);
        
        // ----------------------------------------------------------------------
        // Cuando no es simulacion y esta seteado un valor distinto de 100
        // ----------------------------------------------------------------------
        if($porcentaje_iva == 100){
            $porcentaje_iva = $this->getPorcentaje();
        }

        // ----------------------------------------------------------------------
        // IVA de los productos
        // ----------------------------------------------------------------------
        foreach ($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo) {
            $cantidad_bulto = 1;
            $ins_insumo_bulto = $vta_presupuesto_ins_insumo->getInsInsumoBulto();
            if ($ins_insumo_bulto->getId() != 'null') {
                //$cantidad_bulto = $ins_insumo_bulto->getCantidad();
                $cantidad_bulto = $vta_presupuesto_ins_insumo->getCantidadBulto();
            }

            $importe_unitario_con_descuento = $vta_presupuesto_ins_insumo->getImporteUnitarioConDescuento();
            $iva = ($vta_presupuesto_ins_insumo->getGralTipoIva()->getValorIva() / 100) * ($porcentaje_iva / 100) * $importe_unitario_con_descuento * $vta_presupuesto_ins_insumo->getCantidad() * $cantidad_bulto;
            $arr_iva[$vta_presupuesto_ins_insumo->getGralTipoIva()->getCodigo()] = $arr_iva[$vta_presupuesto_ins_insumo->getGralTipoIva()->getCodigo()] + $iva;
        }

        // ----------------------------------------------------------------------
        // IVA de la logistica
        // ----------------------------------------------------------------------
        $arr_iva[$gral_tipo_iva_por_default->getCodigo()] = $arr_iva[$gral_tipo_iva_por_default->getCodigo()] + ($this->getImporteLogistica() * $gral_tipo_iva_por_default->getValorIvaDecimal());

        // ----------------------------------------------------------------------
        // IVA del Recargo
        // ----------------------------------------------------------------------
        $arr_iva[$gral_tipo_iva_por_default->getCodigo()] = $arr_iva[$gral_tipo_iva_por_default->getCodigo()] + ($this->getImporteRecargo() * $gral_tipo_iva_por_default->getValorIvaDecimal());
        
        return $arr_iva;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 17/07/2017 11:07 hs.
     * Metodo que retorna el valor total de iva del presupuestos.
     * @return Float
     */
    public function getIvaPresupuesto($incluir_otros = true) {
        $gral_tipo_iva_por_default = GralTipoIva::getGralTipoIvaPorDefault();

        $vta_presupuesto_ins_insumos = $this->getVtaPresupuestoInsInsumos(null, null, true);

        // ----------------------------------------------------------------------
        // IVA de los productos
        // ----------------------------------------------------------------------
        foreach ($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo) {
            $cantidad_bulto = 1;
            $ins_insumo_bulto = $vta_presupuesto_ins_insumo->getInsInsumoBulto();
            if ($ins_insumo_bulto->getId() != 'null') {
                //$cantidad_bulto = $ins_insumo_bulto->getCantidad();
                $cantidad_bulto = $vta_presupuesto_ins_insumo->getCantidadBulto();
            }

            $importe_unitario_con_descuento = $vta_presupuesto_ins_insumo->getImporteUnitarioConDescuento();
            $iva += ($vta_presupuesto_ins_insumo->getGralTipoIva()->getValorIva() / 100) * $importe_unitario_con_descuento * $vta_presupuesto_ins_insumo->getCantidad() * $cantidad_bulto;
        }

        if($incluir_otros){
            // ----------------------------------------------------------------------
            // IVA de la logistica
            // ----------------------------------------------------------------------
            $iva += $this->getImporteLogistica() * $gral_tipo_iva_por_default->getValorIvaDecimal();

            // ----------------------------------------------------------------------
            // IVA de la Recargo
            // ----------------------------------------------------------------------
            $iva += $this->getImporteRecargo() * $gral_tipo_iva_por_default->getValorIvaDecimal();
        }
        
        return $iva;
    }

    /**
     * Autor: Pablo Rosen.
     * Fecha: 21/01/2018 21:40 hs.
     * Metodo que retorna el monto total del presupuestos SIN descuento y SIN iva.
     * @return Float
     */
    public function getImporteTotalPresupuestoSinDescuentoSinIva() {
        $total_sin_iva = 0;
        $vta_presupuesto_ins_insumos = $this->getVtaPresupuestoInsInsumos(null, null, true);

        foreach ($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo) {

            $cantidad_bulto = 1;
            $ins_insumo_bulto = $vta_presupuesto_ins_insumo->getInsInsumoBulto();
            if ($ins_insumo_bulto->getId() != 'null') {
                //$cantidad_bulto = $ins_insumo_bulto->getCantidad();
                $cantidad_bulto = $vta_presupuesto_ins_insumo->getCantidadBulto();
            }

            $importe_unitario_con_descuento = $vta_presupuesto_ins_insumo->getImporteUnitario();
            $total_sin_iva += $importe_unitario_con_descuento * $vta_presupuesto_ins_insumo->getCantidad() * $cantidad_bulto;
        }
        return $total_sin_iva;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 04/08/2017 10:00 hs.
     * Metodo que retorna el monto total del presupuestos  CON descuento y SIN iva.
     * @return Float
     */
    public function getImporteTotalPresupuestoConDescuentoSinIva() {
        $total_sin_iva = 0;
        $vta_presupuesto_ins_insumos = $this->getVtaPresupuestoInsInsumos(null, null, true);

        foreach ($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo) {
            $cantidad_bulto = 1;
            $ins_insumo_bulto = $vta_presupuesto_ins_insumo->getInsInsumoBulto();
            if ($ins_insumo_bulto->getId() != 'null') {
                //$cantidad_bulto = $ins_insumo_bulto->getCantidad();
                $cantidad_bulto = $vta_presupuesto_ins_insumo->getCantidadBulto();
            }

            $importe_unitario_con_descuento = $vta_presupuesto_ins_insumo->getImporteUnitarioConDescuento();
            $total_sin_iva += $importe_unitario_con_descuento * $vta_presupuesto_ins_insumo->getCantidad() * $cantidad_bulto;
        }
        return $total_sin_iva;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 04/08/2017 10:00 hs.
     * Metodo que retorna el monto total del presupuestos CON iva.
     * @return Float
     */
    public function getImporteSubtotalPresupuestoConIva() {
        $total_con_iva = $this->getImporteTotalPresupuestoConDescuentoSinIva() + $this->getIvaPresupuesto($incluir_otros = false);

        return $total_con_iva;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 04/08/2017 10:00 hs.
     * Metodo que retorna el monto total del presupuestos CON iva.
     * @return Float
     */
    public function getImporteTotalPresupuestoConIva($gral_moneda = false, $importe_tributo = 0, $porcentaje_iva = 100) {
        
        // ----------------------------------------------------------------------
        // Cuando no es simulacion y esta seteado un valor distinto de 100
        // ----------------------------------------------------------------------
        if($porcentaje_iva == 100){
            $porcentaje_iva = $this->getPorcentaje();
        }
        
        $total_con_iva = $this->getImporteTotalPresupuestoConDescuentoSinIva() + ($this->getIvaPresupuesto() * ($porcentaje_iva/100)) + $this->getImporteLogistica() + $this->getImporteRecargo() + $importe_tributo;
        
        if($gral_moneda){
            $gral_moneda_base = GralMoneda::getGralMonedaBase();
            //$tipo_cambio_real = $gral_moneda->getGralMonedaTipoCambioValorActual($gral_moneda_base);
            $tipo_cambio_real = $gral_moneda_base->getGralMonedaTipoCambioValorActual($gral_moneda);
            //Gral::pr($tipo_cambio_real);
            $total_con_iva = $total_con_iva * $tipo_cambio_real;
        }
        
        return $total_con_iva;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 21/09/2017 10:00 hs.
     * Metodo que retorna el monto total del descuento.
     * @return Float
     */
    public function getImporteTotalDescuento() {
        $importe_descuento = 0;
        $vta_presupuesto_ins_insumos = $this->getVtaPresupuestoInsInsumos(null, null, true);

        foreach ($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo) {
            $cantidad_bulto = 1;
            $ins_insumo_bulto = $vta_presupuesto_ins_insumo->getInsInsumoBulto();
            if ($ins_insumo_bulto->getId() != 'null') {
                //$cantidad_bulto = $ins_insumo_bulto->getCantidad();
                $cantidad_bulto = $vta_presupuesto_ins_insumo->getCantidadBulto();
            }

            $importe_unitario_con_descuento = $vta_presupuesto_ins_insumo->getImporteUnitarioConDescuento();
            $importe_unitario_sin_descuento = $vta_presupuesto_ins_insumo->getImporteUnitario();
            $cantidad = $vta_presupuesto_ins_insumo->getCantidad();

            $importe_descuento += ($importe_unitario_sin_descuento - $importe_unitario_con_descuento) * $cantidad * $cantidad_bulto;
        }

        return $importe_descuento;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 21/09/2017 10:00 hs.
     * Metodo que retorna el monto total del descuento.
     * @return Float
     */
    public function getImporteTotalIva($porcentaje_iva = 100) {
        $importe_iva = 0;
        $arr_iva = $this->getArrIvaPresupuesto($porcentaje_iva);

        foreach ($arr_iva as $iva_tipo => $arr_iva_uno) {
            $importe_iva += $arr_iva_uno;
        }

        return $importe_iva;
    }

    /**
     * Autor: Pablo Rosen.
     * Fecha: 21/01/2018 21:40 hs.
     * Metodo que retorna el porcentaje promedio del descuento del presupuesto.
     * @return Float
     */
    public function getPromedioDeDescuento() {
        $importe_descuento = $this->getImporteTotalDescuento();
        $importe_total = $this->getImporteTotalPresupuestoSinDescuentoSinIva();

        $promedio_descuento = ($importe_descuento / $importe_total) * 100;

        return $promedio_descuento;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 14/08/2017 10:00 hs.
     * Metodo que retorna el gral_fp_medio_pago_id.
     * @return Int
     */
    public function getGralFpMedioPagoId() {
        $gral_fp_cuota = $this->getGralFpCuota();
        $gral_fp_medio_pago_id = $gral_fp_cuota->getGralFpMedioPagoId();
        return $gral_fp_medio_pago_id;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 14/08/2017 10:00 hs.
     * Metodo que retorna el objeto GralFpMedioPago.
     * @return Obj GralFpMedioPago
     */
    public function getGralFpMedioPago() {
        $gral_fp_cuota = $this->getGralFpCuota();
        $gral_fp_medio_pago = $gral_fp_cuota->getGralFpMedioPago();
        return $gral_fp_medio_pago;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 18/08/2017 10:00 hs.
     * Metodo que actualiza la cantidad de items y total del presupuesto (NO actualiza importes del InsInsumo)
     * @return 
     */
    public function setActualizarCantItemsYTotalesPresupuesto() {
        // hacer un count para la cant de items y actualizar total
        $importe_subtotal = 0;
        $importe_total = 0;
        $cantidad_items = 0;
        $vta_presupuesto_ins_insumos = $this->getVtaPresupuestoInsInsumos(null, null, true);
        foreach ($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo) {
            $cantidad_items ++;

            $cantidad_bulto = 1;
            $ins_insumo_bulto = $vta_presupuesto_ins_insumo->getInsInsumoBulto();
            if ($ins_insumo_bulto->getId() != 'null') {
                //$cantidad_bulto = $ins_insumo_bulto->getCantidad();
                $cantidad_bulto = $vta_presupuesto_ins_insumo->getCantidadBulto();
            }

            $importe_subtotal += $vta_presupuesto_ins_insumo->getImporteUnitario() * $vta_presupuesto_ins_insumo->getCantidad() * $cantidad_bulto;
            $importe_total += $vta_presupuesto_ins_insumo->getImporteUnitario() * $vta_presupuesto_ins_insumo->getCantidad() * $cantidad_bulto * $vta_presupuesto_ins_insumo->getInsInsumo()->getGralTipoIvaVentaObj()->getValorIvaDecimalParaSumarEnCalculo();
        }
        $importe_logistica = $importe_subtotal * (($this->getPorcentajeLogistica() / 100));
        
        $this->setCantidadItems($cantidad_items);
        $this->setImporteLogistica($importe_logistica);
        $this->setImporteSubtotal($importe_subtotal);
        $this->setImporteTotal($importe_total);
        $this->save();
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 22/08/2017 10:00 hs.
     * Metodo que actualiza los importes de los insumos asociados al presupuesto y los valores 
     * cantidad items y el importe total del vta_presupuesto.
     * se utiliza por ejemplo en el cambio de lista de preios.
     * @return 
     */
    public function setActualizarImporteItemsPresupuestoXInsTipoListaPrecio($ins_tipo_lista_precio_id) {

        // solo se actualiza si cambia la lista de precio, caso contrario no se actualiza
        if ($this->getInsTipoListaPrecioId() == $ins_tipo_lista_precio_id) {
            return;
        }
        
        $importe_subtotal = 0;
        $importe_total = 0;

        $vta_presupuesto_ins_insumos = $this->getVtaPresupuestoInsInsumos(null, null, true);

        if (count($vta_presupuesto_ins_insumos) > 0) {
            foreach ($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo) {
                
                $cantidad = $vta_presupuesto_ins_insumo->getCantidad();

                // -------------------------------------------------------------
                // se controla que el item no haya generado ya OV, en caso de ser asi no se puede modificar mas
                // -------------------------------------------------------------
                $vta_orden_venta = $vta_presupuesto_ins_insumo->getVtaOrdenVenta();
                if ($vta_orden_venta) {
                    continue;
                }

                $ins_insumo = InsInsumo::getOxId($vta_presupuesto_ins_insumo->getInsInsumoId());
                if ($ins_insumo) {
                    $ins_tipo_lista_precio = InsTipoListaPrecio::getOxId($ins_tipo_lista_precio_id);
                    $ins_lista_precio = $ins_insumo->getInsInsumoListaPrecioXTipoLista($ins_tipo_lista_precio, $solo_habilitado = true);
                    
                   if ($ins_tipo_lista_precio) {

                        $importe_venta_unitario = $ins_insumo->getInsInsumoImporteVentaActual($ins_tipo_lista_precio);

                        $ins_lista_precio = $ins_insumo->getInsInsumoListaPrecioXTipoLista($ins_tipo_lista_precio);
                        $vta_presupuesto_ins_insumo->setImporteUnitario($importe_venta_unitario);
                        $vta_presupuesto_ins_insumo->setInsListaPrecioId($ins_lista_precio->getId());

                        $cantidad_items ++;
                        $importe_subtotal += $importe_venta_unitario * $vta_presupuesto_ins_insumo->getCantidad();
                        $importe_total += $importe_venta_unitario * $vta_presupuesto_ins_insumo->getCantidad() * $vta_presupuesto_ins_insumo->getInsInsumo()->getGralTipoIvaVentaObj()->getValorIvaDecimalParaSumarEnCalculo();
                    }
                    
                    // -------------------------------------------------------------
                    // se verifica que la lista exija o no bultos cerrados
                    // -------------------------------------------------------------
                    if($ins_tipo_lista_precio->getBultoCerrado()){

                        $ins_insumo_bulto_actual = $vta_presupuesto_ins_insumo->getInsInsumoBulto();
                        $bulto_habilitado = $ins_insumo->getInsInsumoBultoHabilitadoParaLista($ins_insumo_bulto_actual, $ins_tipo_lista_precio);
                        if(!$bulto_habilitado){
                            // se reemplaza el bulto por el menor posible, en el caso de que la lista no admita el que tiene elegido
                            $ins_insumo_bulto_menor = $ins_insumo->getInsInsumoBultoMenor($ins_tipo_lista_precio);
                            if($ins_insumo_bulto_menor){
                                // la lista exige bultos cerrados
                                $vta_presupuesto_ins_insumo->setInsInsumoBultoId($ins_insumo_bulto_menor->getId());
                                $vta_presupuesto_ins_insumo->setCantidadBulto($ins_insumo_bulto_menor->getCantidad());
                            }else{
                                // la lista exige bultos cerrados, pero no tiene configurado ninguno
                                $vta_presupuesto_ins_insumo->setInsInsumoBultoId(null);
                                $vta_presupuesto_ins_insumo->setCantidadBulto(0);                            
                            }
                        }
                    }else{

                        // la lista NO exige bultos cerrados    
                        $vta_presupuesto_ins_insumo->setInsInsumoBultoId(null);
                        $vta_presupuesto_ins_insumo->setCantidadBulto(0);
                    }
                    
                    // ---------------------------------------------------------
                    // se verifica cumplimiento de los minimos
                    // ---------------------------------------------------------
                    if($ins_lista_precio){
                        if($ins_lista_precio->getCantidadMinimaVenta() > $cantidad){
                            $vta_presupuesto_ins_insumo->setCantidad($ins_lista_precio->getCantidadMinimaVenta());
                        }                        
                    }
                
                    $vta_presupuesto_ins_insumo->save();
                }

            }
        }

        $this->setCantidadItems($cantidad_items);
        $this->setImporteSubtotal($importe_subtotal);
        $this->setImporteTotal($importe_total);
        $this->save();
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 29/08/2017 10:00 hs.
     * Metodo que devuelve vta_presupuesto_ins_insumo por id de ins_insumo.
     * @return VtaPresupuestoInsInsumo
     */
    public function getVtaPresupuestoInsInsumoXInsInsumoId($ins_insumo_id) {

        $vta_presupuesto_ins_insumos = $this->getVtaPresupuestoInsInsumos(null, null, true);

        if (count($vta_presupuesto_ins_insumos) > 0) {
            foreach ($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo) {
                if ($vta_presupuesto_ins_insumo->getInsInsumoId() == $ins_insumo_id)
                    return $vta_presupuesto_ins_insumo;
            }
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 31/03/2018 15:50 hs.
     * Metodo que deduce si la venta que se esta por formalizar es parcial o total de acuerdo a los items del presupuesto.
     * @return 
     */
    public function getEsVentaParcial($arr_chk_vta_presupuesto_ins_insumo) {
        $arr_vta_presupuesto_ins_insumos_seleccionados = array();
        $arr_vta_presupuesto_ins_insumos_seleccionados['TOTAL'] = 1;

        $vta_presupuesto_ins_insumos = $this->getVtaPresupuestoInsInsumos(null, null, true);
        foreach ($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo) {
            if (in_array($vta_presupuesto_ins_insumo->getId(), $arr_chk_vta_presupuesto_ins_insumo)) {
                $arr_vta_presupuesto_ins_insumos_seleccionados['CANTIDAD'] ++;
                $arr_vta_presupuesto_ins_insumos_seleccionados['SELECCIONADOS'][] = $vta_presupuesto_ins_insumo;
            } else {
                $arr_vta_presupuesto_ins_insumos_seleccionados['TOTAL'] = 0;
            }
        }

        return $arr_vta_presupuesto_ins_insumos_seleccionados;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 06/09/2017 10:00 hs.
     * Metodo que genera las ordenes de venta del presupuesto.
     * @return 
     */
    public function setGenerarVtaOrdenVentas($chk_vta_presupuesto_ins_insumo) {
        $vta_orden_ventas = array();
        $vta_orden_ventas_generadas = array();

        $vta_presupuesto_ins_insumos = $this->getVtaPresupuestoInsInsumos(null, null, true);
        $arr_vta_presupuesto_ins_insumos_seleccionados = $this->getEsVentaParcial($chk_vta_presupuesto_ins_insumo);

        if ($arr_vta_presupuesto_ins_insumos_seleccionados['CANTIDAD'] > 0) {

            // ------------------------------------------------------------------
            // se generan las ordenes de venta de acuerdo a los insumos seleccionados
            // ------------------------------------------------------------------
            foreach ($arr_vta_presupuesto_ins_insumos_seleccionados['SELECCIONADOS'] as $vta_presupuesto_ins_insumo) {
                $vta_orden_ventas[] = $vta_presupuesto_ins_insumo->setGenerarVtaOrdenVenta();
            }

            foreach ($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo) {
                // --------------------------------------------------------------
                // se identifica si el item genero ov
                // --------------------------------------------------------------
                $vta_orden_venta = $vta_presupuesto_ins_insumo->getVtaOrdenVenta();
                if ($vta_orden_venta) {
                    $vta_orden_ventas_generadas[] = $vta_orden_venta;
                }
            }

            // ------------------------------------------------------------------
            // se registra excepcion de parcializacion cuando se termina de cerrar el presupuesto
            // ------------------------------------------------------------------
            if ((count($vta_orden_ventas_generadas) == count($vta_presupuesto_ins_insumos))) {
                // --------------------------------------------------------------
                // si es aprobacion total
                // --------------------------------------------------------------
                $this->setVtaPresupuestoEstado(VtaPresupuestoTipoEstado::TIPO_APROBADO);
            } else {
                // --------------------------------------------------------------
                // si es aprobacion parcial
                // --------------------------------------------------------------
                $this->setVtaPresupuestoEstado(VtaPresupuestoTipoEstado::TIPO_APROBADO_PARCIAL);
            }
        }

        // ----------------------------------------------------------------------
        // se genera OV de Logistica, si se debe
        // ----------------------------------------------------------------------
        if (!$this->getInsTipoListaPrecio()->getIncluyeLogistica() && $this->getIncluyeLogistica()) {
            $vta_orden_ventas[] = $this->setGenerarVtaOrdenVentaLogistica();
        }

        return $vta_orden_ventas;
    }

    /**
     * Autor: Pablo Rosenn
     * Fecha: 19/11/2020 18:52 hs.
     * Metodo que genera una orden de venta por costos de logistica
     * @return Obj VtaOrdenVenta
     */
    public function setGenerarVtaOrdenVentaLogistica() {
        $gral_tipo_iva_por_default = GralTipoIva::getGralTipoIvaPorDefault();

        // ----------------------------------------------------------------------
        // se registra la orden de venta
        // ----------------------------------------------------------------------
        $vta_orden_venta = new VtaOrdenVenta();
        $vta_orden_venta->setDescripcion('Logistica de ' . $this->getCodigo());
        $vta_orden_venta->setVtaPresupuestoId($this->getId());
        //$vta_orden_venta->setVtaPresupuestoInsInsumoId($this->getId());
        //$vta_orden_venta->setInsInsumoId($this->getInsInsumoId());
        $vta_orden_venta->setGralTipoIvaId($gral_tipo_iva_por_default->getId());
        $vta_orden_venta->setInsTipoListaPrecioId($this->getInsTipoListaPrecioId());
        $vta_orden_venta->setImporteUnitario($this->getImporteLogistica());
        $vta_orden_venta->setCantidad(1);
        $vta_orden_venta->setDescuento(0);
        $vta_orden_venta->setGralSucursalId($this->getGralSucursalId());

        $vta_orden_venta->setObservacion($observacion = '');
        $vta_orden_venta->setPorcentaje($this->getPorcentaje());
        $vta_orden_venta->setEstado(1);
        $vta_orden_venta->save();

        // ----------------------------------------------------------------------
        // se registra codigo de OV
        // ----------------------------------------------------------------------
        $vta_orden_venta->setCodigo(VtaOrdenVenta::PREFIJO_OV . str_pad($vta_orden_venta->getId(), 8, 0, STR_PAD_LEFT));
        $vta_orden_venta->save();

        // ----------------------------------------------------------------------
        // se registran los estados de la OV
        // ----------------------------------------------------------------------
        $vta_orden_venta->setVtaOrdenVentaEstado(VtaOrdenVentaTipoEstado::TIPO_ACTIVO);
        $vta_orden_venta->setVtaOrdenVentaEstadoRemision(VtaOrdenVentaTipoEstadoRemision::TIPO_NO_REMITIDO);
        $vta_orden_venta->setVtaOrdenVentaEstadoFacturacion(VtaOrdenVentaTipoEstadoFacturacion::TIPO_NO_FACTURADO);

        return $vta_orden_venta;
    }

    public function enviarPresupuestoEmail($enviar = false, $destinatarios = false, $txa_observacion, $archivo_adjunto_urls = false) {
        if (!Mail::MAIL_ACTIVO)
            return false;

        $mail_asunto = Gral::getConfig('gral_cliente') . ' - Presupuesto #' . $this->getCodigo() . ' ' . date('d/m/Y H:i');

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $destinatarios = str_replace(' ', '', $destinatarios);
        $destinatarios = str_replace(',', ';', $destinatarios);
        $arr_destinatarios = explode(";", $destinatarios);

        $param = array(
            'vta_presupuesto_id' => $this->getId(),
            'observacion' => $txa_observacion,
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/GENERAL/index_vta_presupuesto.php";
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
        $vta_presupuesto_enviado = $this->inicializarVtaPresupuestoEnviado($txa_observacion, $destinatarios, $mail_asunto, $msg, $strContenidoPdf);

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

            if (!empty($archivo_adjunto_urls)) {
                foreach ($archivo_adjunto_urls as $nombre_archivo => $contenido_archivo) {
                    $mail->AddStringAttachment($contenido_archivo, $nombre_archivo, 'base64', 'application/pdf');
                }
            }

            $mail->Timeout = 20;

            $envio_ok = $mail->Send();

            if ($envio_ok) {
                // se confirma envio correcto
                $vta_presupuesto_enviado->setConfirmarVtaPresupuestoEnviado(1, VtaPresupuestoEnviado::PRESUPUESTO_ENVIADO_CORRECTAMENTE);
            } else {
                // se confirma envio fallido
                $vta_presupuesto_enviado->setConfirmarVtaPresupuestoEnviado(0, $mail->ErrorInfo);
            }

            return $envio_ok;
        } catch (phpmailerException $e) {
            echo $e->errorMessage(); //Pretty error messages from PHPMailer
        } catch (Exception $e) {
            echo $e->getMessage(); //Boring error messages from anything else!
        }

        return false;
    }

    public function inicializarVtaPresupuestoEnviado($observacion, $destinatarios, $mail_asunto, $mail_contenido, $archivo_adjunto) {
        $vta_presupuesto_enviado = new VtaPresupuestoEnviado();
        $vta_presupuesto_enviado->setDescripcion('');
        $vta_presupuesto_enviado->setVtaPresupuestoId($this->getId());
        $vta_presupuesto_enviado->setAsunto($mail_asunto);
        $vta_presupuesto_enviado->setDestinatario($destinatarios);

        $vta_presupuesto_enviado->setCuerpo(addslashes($mail_contenido));
        $vta_presupuesto_enviado->setAdjunto(base64_encode($archivo_adjunto));

        $vta_presupuesto_enviado->setCodigoEnvio(0);
        $vta_presupuesto_enviado->setObservacion($observacion);
        $vta_presupuesto_enviado->setEstado(0);

        $vta_presupuesto_enviado->save();

        return $vta_presupuesto_enviado;
    }

    public function getNombreArchivoAdjuntoPresupuesto() {
        $nombre = Gral::getConfig('conf_proyecto_min') . '_' . $this->getCodigo() . '_' . $this->getPersonaDescripcion();
        $nombre = str_replace('.', '', $nombre);
        $nombre = str_replace('-', '_', $nombre);
        $nombre = str_replace(' ', '_', $nombre);
        return $nombre . '.pdf';
    }

    /**
     * Metodo que retorna los IDs de los insumos agregados al presupuesto
     */
    public function getArrInsumoIdsEnPresupuesto() {
        $arr_ids = array();
        foreach ($this->getVtaPresupuestoInsInsumos(null, null, true) as $vta_presupuesto_ins_insumo) {
            $arr_ids[$vta_presupuesto_ins_insumo->getInsInsumoId()] = $vta_presupuesto_ins_insumo->getInsInsumoId();
        }
        return $arr_ids;
    }

    public function getVtaOrdenVentasActivas() {
        $c = new Criterio();

        $c->add(VtaPresupuesto::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaOrdenVentaTipoEstado::GEN_ATTR_TERMINAL, 0, Criterio::IGUAL);
        $c->add(VtaOrdenVentaTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);

        $c->addTabla(VtaOrdenVenta::GEN_TABLA);
        $c->addRealJoin(VtaPresupuestoInsInsumo::GEN_TABLA, VtaPresupuestoInsInsumo::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID);
        $c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaPresupuestoInsInsumo::GEN_ATTR_VTA_PRESUPUESTO_ID);

        $c->addRealJoin(VtaOrdenVentaTipoEstado::GEN_TABLA, VtaOrdenVentaTipoEstado::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID);
        $c->addRealJoin(VtaOrdenVentaTipoEstado::GEN_TABLA, VtaOrdenVentaTipoEstado::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID);

        $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas(null, $c);
        return $vta_orden_ventas;
    }

    public function getVtaOrdenVentasActivaARemitirs() {
        $c = new Criterio();

        $c->add(VtaPresupuesto::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaOrdenVentaTipoEstadoRemision::GEN_ATTR_TERMINAL, 0, Criterio::IGUAL);
        $c->add(VtaOrdenVentaTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);

        $c->addTabla(VtaOrdenVenta::GEN_TABLA);
        $c->addRealJoin(VtaPresupuestoInsInsumo::GEN_TABLA, VtaPresupuestoInsInsumo::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID);
        $c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaPresupuestoInsInsumo::GEN_ATTR_VTA_PRESUPUESTO_ID);

        $c->addRealJoin(VtaOrdenVentaTipoEstado::GEN_TABLA, VtaOrdenVentaTipoEstado::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID);
        $c->addRealJoin(VtaOrdenVentaTipoEstadoRemision::GEN_TABLA, VtaOrdenVentaTipoEstadoRemision::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_ID);

        $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas(null, $c);
        return $vta_orden_ventas;
    }

    public function getVtaOrdenVentasActivaAFacturars() {
        $c = new Criterio();

        $c->add(VtaPresupuesto::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaOrdenVentaTipoEstadoFacturacion::GEN_ATTR_TERMINAL, 0, Criterio::IGUAL);

        $c->addTabla(VtaOrdenVenta::GEN_TABLA);
        $c->addRealJoin(VtaPresupuestoInsInsumo::GEN_TABLA, VtaPresupuestoInsInsumo::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID);
        $c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaPresupuestoInsInsumo::GEN_ATTR_VTA_PRESUPUESTO_ID);

        $c->addRealJoin(VtaOrdenVentaTipoEstadoFacturacion::GEN_TABLA, VtaOrdenVentaTipoEstadoFacturacion::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ID);

        $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas(null, $c);
        return $vta_orden_ventas;
    }

    /**
     * Retorna un valor booleano que indica si alguno de los items del presupuesto mueve stock
     * @return boolean
     */
    public function getVtaPresupuestoMueveStock() {
        $presupuesto_mueve_stock = false;

        $vta_presupuesto_ins_insumos = $this->getVtaPresupuestoInsInsumos();
        foreach ($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo) {
            $ins_insumo = $vta_presupuesto_ins_insumo->getInsInsumo();
            if ($ins_insumo->getControlStock()) {
                $presupuesto_mueve_stock = true;
            }
        }
        return $presupuesto_mueve_stock;
    }

    public function setAplicarCalculoLogistica($incluir_logistica) {
        $ins_tipo_lista_precio = $this->getInsTipoListaPrecio();
        if ($incluir_logistica > 0) {
            //$porcentaje_logistica = $ins_tipo_lista_precio->getPorcentajeLogistica();
            $porcentaje_logistica = $incluir_logistica;
            $importe_subtotal = $this->getImporteTotalPresupuestoConDescuentoSinIva();
            $importe_logistica = $importe_subtotal * (($porcentaje_logistica / 100));

            $this->setIncluyeLogistica(1);
            $this->setPorcentajeLogistica($porcentaje_logistica);
            $this->setImporteLogistica($importe_logistica);
        } else {
            $importe_logistica = $importe_subtotal * (($porcentaje_logistica / 100));

            $this->setIncluyeLogistica(0);
            $this->setPorcentajeLogistica(0);
            $this->setImporteLogistica(0);
        }
        $this->save();

        return true;
    }

    static function getVtaPresupuestosEnVtaOrdenVentas($vta_orden_ventas) {
        $vta_presupuestos = array();

        foreach ($vta_orden_ventas as $vta_orden_venta) {
            $cantidad = $vta_orden_venta->getCantidadDisponibleEnFactura();
            if($cantidad > 0){
                $vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();
                $vta_presupuestos[$vta_presupuesto->getId()] = $vta_presupuesto;
            }
        }
        krsort($vta_presupuestos);

        return $vta_presupuestos;
    }

    public function getImporteSubtotalParaComprobante() {
        $cli_cliente = $this->getCliCliente();

        if ($cli_cliente && $cli_cliente->getId() != 'null') {
            switch ($cli_cliente->getGralCondicionIva()->getCodigo()) {
                case GralCondicionIva::TIPO_RESPONSABLE_INSCRIPTO:
                    $importe = $this->getImporteTotalPresupuestoConDescuentoSinIva();
                    break;
                default:
                    $importe = $this->getImporteSubtotalPresupuestoConIva();
            }
        } else {
            $importe = $this->getImporteSubtotalPresupuestoConIva();
        }

        return $importe;
    }

    public function getImporteTotalParaComprobante() {
        $cli_cliente = $this->getCliCliente();

        if ($cli_cliente && $cli_cliente->getId() != 'null') {
            switch ($cli_cliente->getGralCondicionIva()->getCodigo()) {
                case GralCondicionIva::TIPO_RESPONSABLE_INSCRIPTO:
                    $importe = $this->getImporteTotalPresupuestoConIva();
                    break;
                default:
                    $importe = $this->getImporteTotalPresupuestoConIva();
            }
        } else {
            $importe = $this->getImporteTotalPresupuestoConIva();
        }

        return $importe;
    }

    public function getImporteLogisticaParaComprobante() {
        $gral_tipo_iva_por_default = GralTipoIva::getGralTipoIvaPorDefault();

        $cli_cliente = $this->getCliCliente();

        if ($cli_cliente && $cli_cliente->getId() != 'null') {
            switch ($cli_cliente->getGralCondicionIva()->getCodigo()) {
                case GralCondicionIva::TIPO_RESPONSABLE_INSCRIPTO:
                    $importe = $this->getImporteLogistica();
                    break;
                default:
                    $importe = $this->getImporteLogistica() * $gral_tipo_iva_por_default->getValorIvaDecimalParaSumarEnCalculo();
            }
        } else {
            $importe = $this->getImporteLogistica() * $gral_tipo_iva_por_default->getValorIvaDecimalParaSumarEnCalculo();
        }

        return $importe;
    }

    public function getImporteRecargoParaComprobante() {
        $gral_tipo_iva_por_default = GralTipoIva::getGralTipoIvaPorDefault();

        $cli_cliente = $this->getCliCliente();

        if ($cli_cliente && $cli_cliente->getId() != 'null') {
            switch ($cli_cliente->getGralCondicionIva()->getCodigo()) {
                case GralCondicionIva::TIPO_RESPONSABLE_INSCRIPTO:
                    $importe = $this->getImporteRecargo();
                    break;
                default:
                    $importe = $this->getImporteRecargo() * $gral_tipo_iva_por_default->getValorIvaDecimalParaSumarEnCalculo();
            }
        } else {
            $importe = $this->getImporteRecargo() * $gral_tipo_iva_por_default->getValorIvaDecimalParaSumarEnCalculo();
        }

        return $importe;
    }
    
    public function getTiempoDeRegistroEnSegundos() {
        $tiempo = 0;

        $c = new Criterio();
        $c->addTabla(VtaPresupuestoEstado::GEN_TABLA);
        $c->addOrden(VtaPresupuestoEstado::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();
        
        $vta_presupuesto_estado = $this->getVtaPresupuestoEstado($c);
        //Gral::pr($vta_presupuesto_estado->getVtaPresupuestoTipoEstado()->getDescripcion());
        $vta_factura = $this->getVtaFactura();
        if ($vta_factura) {
            
            $c = new Criterio();
            $c->addTabla(VtaFacturaEstado::GEN_TABLA);
            $c->addOrden(VtaFacturaEstado::GEN_ATTR_ID, Criterio::_DESC);
            $c->setCriterios();
            
            $vta_factura_estado = $vta_factura->getVtaFacturaEstado($c);
            //Gral::pr($vta_factura_estado->getVtaFacturaTipoEstado()->getDescripcion());
            
            $horaInicio = new DateTime($vta_factura_estado->getCreado());
            $horaTermino = new DateTime($vta_presupuesto_estado->getCreado());

            $interval = $horaInicio->diff($horaTermino);
            $tiempo = $interval->format('%s seg');
        }
        
        
        return $tiempo;
    }


    //-----------------------------------------------------------
    // Tienda
    //-----------------------------------------------------------
    /**
     * Autor: Pablo Rosen
     * Fecha: 09/08/2021 21:13
     * Metodo que inicializa un presupuesto desde tienda
     * @return 
     */
    static function setAgregarProductoAPresupuestoDesdeTienda($cli_cliente_tienda, $ins_insumo_id, $cantidad, $ins_insumo_bulto) {
        // ---------------------------------------------------------------------
        // recupera o instancia el presupuesto asignado al cliente
        // ---------------------------------------------------------------------
        $vta_presupuesto = self::setInicializarPresupuestoDesdeTienda($cli_cliente_tienda);
        
        $ins_insumo_bulto_id = 0;
        if($ins_insumo_bulto){
            $ins_insumo_bulto_id = $ins_insumo_bulto->getId();        
        }
        
        $ins_tipo_lista_precio_id = $vta_presupuesto->getInsTipoListaPrecioId();
        
        $vta_presupuesto_ins_insumo = $vta_presupuesto->getVtaPresupuestoInsInsumoXInsInsumoId($ins_insumo_id);
        if ($vta_presupuesto_ins_insumo) { 
            // -----------------------------------------------------------------
            // Si existe el insumo en el presupuesto solo actualizo la cantidad
            // -----------------------------------------------------------------
            $vta_presupuesto_ins_insumo->setCantidad($cantidad);
            if($ins_insumo_bulto){
                $vta_presupuesto_ins_insumo->setInsInsumoBultoId($ins_insumo_bulto->getId());
                $vta_presupuesto_ins_insumo->setCantidadBulto($ins_insumo_bulto->getCantidad());
            }else{
                $vta_presupuesto_ins_insumo->setInsInsumoBultoId(null);
                $vta_presupuesto_ins_insumo->setCantidadBulto(1);                
            }
            $vta_presupuesto_ins_insumo->save();
        } else {
            // -----------------------------------------------------------------
            // si no existe se agrega el insumo al presupuesto
            // -----------------------------------------------------------------
            $vta_presupuesto->setInsumoAPresupuesto($ins_insumo_id, $cantidad, $ins_tipo_lista_precio_id, false, $ins_insumo_bulto_id);
        }
    }
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 09/08/2021 21:13
     * Metodo que registra la quita de un producto en un presupuesto en proceso tienda
     * @return 
     */
    static function setQuitarProductoAPresupuestoDesdeTienda($cli_cliente_tienda, $ins_insumo_id){
        $vta_presupuesto = $cli_cliente_tienda->getVtaPresupuestoEnProceso();
        $ins_insumo = InsInsumo::getOxId($ins_insumo_id);
        
        $array = array(
            array('campo' => 'vta_presupuesto_id', 'valor' => $vta_presupuesto->getId()),
            array('campo' => 'ins_insumo_id', 'valor' => $ins_insumo_id),
        );
        $vta_presupuesto_ins_insumo = VtaPresupuestoInsInsumo::getOxArray($array);
        
        if ($vta_presupuesto && $vta_presupuesto_ins_insumo) {
            
            // ---------------------------------------------------------------------
            // se registra la cancelacion del item
            // ---------------------------------------------------------------------
            $vta_presupuesto_ins_insumo->setCancelarItemVtaPresupuestoGestionEdicion($observacion = 'Se quita el item desde proceso en tienda');
            $vta_presupuesto_ins_insumo->save();
            
            $vta_presupuesto->setActualizarCantItemsYTotalesPresupuesto();
            $vta_presupuesto->save();
            
            // ---------------------------------------------------------------------
            // se registra la venta perdida
            // ---------------------------------------------------------------------
            //$vta_venta_perdida_motivo = VtaVentaPerdidaMotivo::getOxCodigo(VtaVentaPerdidaMotivo::MOTIVO_OTRO);            
            //$vta_venta_perdida = $ins_insumo->setVentaPerdida($fecha = date('Y-m-d'), $vta_presupuesto_ins_insumo->getCantidad(), $vta_venta_perdida_motivo->getId(), $observacion, $vta_presupuesto->getId());
            
        }
    }
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 09/08/2021 21:13
     * Metodo que inicializa un presupuesto desde tienda
     * @return 
     */
    static function setInicializarPresupuestoDesdeTienda($cli_cliente_tienda) {

        // ---------------------------------------------------------------------
        // se verifica si el cliente tiene algun presupuesto en proceso tienda
        // ---------------------------------------------------------------------
        if($cli_cliente_tienda){
            $vta_presupuesto = $cli_cliente_tienda->getVtaPresupuestoEnProceso();
            if($vta_presupuesto){
                return $vta_presupuesto;
            }
        }
        
        $fecha = date('Y-m-d');
        $vta_vendedor_asignado = false;

        if ($cli_cliente_tienda) {
            $cli_cliente = $cli_cliente_tienda->getCliCliente();

            // -------------------------------------------------------------------------
            // se inicializa el vendedor asignado para el cliente
            // -------------------------------------------------------------------------
            $vta_vendedor_asignado = $cli_cliente->getVtaVendedorXCliClienteVtaVendedor();
            
            if($cli_cliente->getId() != 'null'){
                $cli_categoria = $cli_cliente->getCliCategoria();

                // -------------------------------------------------------------------------
                // se inicializa descuento financiero, si le corresponde a la categoria
                // -------------------------------------------------------------------------
                if($cli_categoria){
                    $vta_descuento_financiero = $cli_categoria->getVtaDescuentoFinancieroXCliCategoriaVtaDescuentoFinanciero();
                }                
                
            }
        }
        
        // ---------------------------------------------------------------------
        // se vincula al vendedor tienda online
        // ---------------------------------------------------------------------
        if ($vta_vendedor_asignado) {
            // ---------------------------------------------------------------------
            // si tiene vendedor vinculado
            // ---------------------------------------------------------------------
            $vta_vendedor = $vta_vendedor_asignado;
            $gral_sucursal_virtual = GralSucursal::getOxCodigo(GralSucursal::SUCURSAL_VIRTUAL); // se utiliza la sucursal VIRTUAL
        }
        else {
            // ---------------------------------------------------------------------
            // si no tiene vendedor vinculado, e inicializa uno por default
            // ---------------------------------------------------------------------
            $vta_vendedor = VtaVendedor::getOxCodigo(VtaVendedor::VENDEDOR_TIENDA_ONLINE_GEXTENO);
            $gral_sucursal_virtual = GralSucursal::getOxCodigo(GralSucursal::SUCURSAL_VIRTUAL); // se utiliza la sucursal VIRTUAL            
        }

        // ---------------------------------------------------------------------
        // se vincula al comprador tienda online, para comisionar
        // ---------------------------------------------------------------------
        $vta_comprador_tienda_online = VtaComprador::getOxCodigo(VtaComprador::COMPRADOR_TIENDA_ONLINE_GEXTENO);
        
        // ----------------------------------------------------------------------
        // se determina la lista de precios por default
        // ----------------------------------------------------------------------
        if ($cli_cliente_tienda) {
            $ins_tipo_lista_precio_cliente = $cli_cliente_tienda->getInsTipoListaPrecioParaClienteTienda();
        }
        else {
            $ins_tipo_lista_precio_cliente = InsTipoListaPrecio::getOxCodigo(InsTipoListaPrecio::TIPO_PRECIO_VENTA_ONLINE);
        }
        
        // ----------------------------------------------------------------------
        // se inicializan objetos genericos
        // ----------------------------------------------------------------------
        $gral_condicion_iva = GralCondicionIva::getOxCodigo(GralCondicionIva::TIPO_CONSUMIDOR_FINAL);
        $gral_tipo_documento = GralTipoDocumento::getOxCodigo(GralTipoDocumento::TIPO_CUIT);
        
        // ----------------------------------------------------------------------
        // se determinan variables que afectan al presupuesto
        // ----------------------------------------------------------------------
        $fecha_vencimiento = Date::sumarDias($fecha, self::DIAR_VENCIMIENTO_DEFAULT);
        
        // ----------------------------------------------------------------------
        // se registra el nuevo presupuesto
        // ----------------------------------------------------------------------
        $vta_presupuesto = new VtaPresupuesto();

        if ($cli_cliente && $cli_cliente->getId() != 'null') {
            $vta_presupuesto->setCliClienteId($cli_cliente->getId());
            $vta_presupuesto->setPersonaDescripcion($cli_cliente->getDescripcion());
            $vta_presupuesto->setGralCondicionIvaId($cli_cliente->getGralCondicionIvaId());
            $vta_presupuesto->setGralTipoDocumentoId($cli_cliente->getGralTipoDocumentoId());
            $vta_presupuesto->setPersonaDocumento($cli_cliente->getCuit());
            $vta_presupuesto->setPersonaEmail($cli_cliente->getEmail());
            
            if($cli_cliente_tienda){
                // el cliente podria tener multi cliente tienda
                $vta_presupuesto->setPersonaEmail($cli_cliente_tienda->getEmail());                
            }
        }
        elseif ($cli_cliente_tienda) {
            $vta_presupuesto->setPersonaDescripcion($cli_cliente_tienda->getDescripcion());
            $vta_presupuesto->setGralCondicionIvaId($cli_cliente_tienda->getGralCondicionIvaId());
            $vta_presupuesto->setGralTipoDocumentoId($cli_cliente_tienda->getGralTipoDocumentoId());
            $vta_presupuesto->setPersonaDocumento($cli_cliente_tienda->getCuit());
            $vta_presupuesto->setPersonaEmail($cli_cliente_tienda->getEmail());
        }
        else {
            $vta_presupuesto->setPersonaDescripcion(self::TEXTO_CONSUMIDOR_FINAL);
            $vta_presupuesto->setGralCondicionIvaId($gral_condicion_iva->getId());
            $vta_presupuesto->setGralTipoDocumentoId($gral_tipo_documento->getId());
            $vta_presupuesto->setPersonaDocumento('');
            $vta_presupuesto->setPersonaEmail('');
            //$vta_presupuesto->setPersonaTelefono($arr_datos_consumidor_final['telefono']);
        }
        //$vta_presupuesto->setGralEmpresaTransportadoraId();

        if ($vta_descuento_financiero) {
            $vta_presupuesto->setVtaDescuentoFinancieroId($vta_descuento_financiero->getId());
        }

        //$vta_presupuesto->setGralFpFormaPagoId();
        $vta_presupuesto->setVtaVendedorId($vta_vendedor->getId());
        $vta_presupuesto->setVtaCompradorId($vta_comprador_tienda_online->getId());

        $vta_presupuesto->setGralSucursalId($gral_sucursal_virtual->getId());
        $vta_presupuesto->setFecha($fecha);
        $vta_presupuesto->setFechaVencimiento($fecha_vencimiento);
        $vta_presupuesto->setFechaEntrega('1900-01-01');
        $vta_presupuesto->setFechaRecordatorio('1900-01-01');
        $vta_presupuesto->setNotaCliente('');

        $vta_presupuesto->setCantidadItems(0);
        $vta_presupuesto->setImporteTotal(0);

        //----------------------------------------------------------------------
        // se determina el tipo de origen TIENDA
        //----------------------------------------------------------------------
        $vta_presupuesto_tipo_origen = VtaPresupuestoTipoOrigen::getOxCodigo(VtaPresupuestoTipoOrigen::TIPO_TIENDA);
        if ($vta_presupuesto_tipo_origen) {
            $vta_presupuesto->setVtaPresupuestoTipoOrigenId($vta_presupuesto_tipo_origen->getId());
        }

        if ($ins_tipo_lista_precio_cliente) {
            //$vta_presupuesto->setIncluyeLogistica($ins_tipo_lista_precio_cliente->getIncluyeLogistica());
            $vta_presupuesto->setInsTipoListaPrecioId($ins_tipo_lista_precio_cliente->getId());
        }

        $vta_presupuesto->setPorcentaje(100);
        $vta_presupuesto->setEstado(1);
        $vta_presupuesto->save();

        $vta_presupuesto->setCodigo(self::PREFIJO_COT . str_pad($vta_presupuesto->getId(), 8, 0, STR_PAD_LEFT));
        $vta_presupuesto->save();

        // ----------------------------------------------------------------------
        // se setea el estado actual del presupuesto
        // ----------------------------------------------------------------------
        $vta_presupuesto_estado = $vta_presupuesto->setVtaPresupuestoEstado(VtaPresupuestoTipoEstado::TIPO_EN_PROCESO_TIENDA, $observacion = 'Presupuesto Inicializado desde Tienda'); 
        
        if ($cli_cliente_tienda) {
            // ---------------------------------------------------------------------
            // se vincula presupuesto al cli cliente tienda
            // ---------------------------------------------------------------------
            $vta_presupuesto_cli_cliente_tienda = new VtaPresupuestoCliClienteTienda();
            $vta_presupuesto_cli_cliente_tienda->setVtaPresupuestoId($vta_presupuesto->getId());
            $vta_presupuesto_cli_cliente_tienda->setCliClienteTiendaId($cli_cliente_tienda->getId());
            $vta_presupuesto_cli_cliente_tienda->setEstado(1);
            $vta_presupuesto_cli_cliente_tienda->save();
        }        
        
        return $vta_presupuesto;        
    }    

    /**
     * Registra un nuevo pedido realizado desde el sitio
     * @return VtaPedido
     */
    static function setRegistrarNuevoPresupuestoDesdeTienda($cli_cliente_tienda, $arr_datos_consumidor_final, $txa_observacion) {
        $fecha = date('Y-m-d');
        $vta_vendedor_asignado = false;

        if ($cli_cliente_tienda) {
            $cli_cliente = $cli_cliente_tienda->getCliCliente();

            // -------------------------------------------------------------------------
            // se inicializa el vendedor asignado para el cliente
            // -------------------------------------------------------------------------
            $vta_vendedor_asignado = $cli_cliente->getVtaVendedorXCliClienteVtaVendedor();
        }

        // ---------------------------------------------------------------------
        // se verifica si el cliente tiene algun presupuesto en proceso tienda
        // ---------------------------------------------------------------------
        if($cli_cliente_tienda){
            $vta_presupuesto_en_proceso = $cli_cliente_tienda->getVtaPresupuestoEnProceso();   
            
            if(!$vta_presupuesto_en_proceso){
                return false;
            }
        }
        
        // ---------------------------------------------------------------------
        // se obtiene variable de pedido desde session
        // ---------------------------------------------------------------------
        $_PEDIDO_ACTIVO_SESSION = Gral::getSes(VtaPedido::PEDIDO_ACTIVO_SESSION);
        
        // ---------------------------------------------------------------------
        // se controla que la variable de session tenga elementos en el carrito
        // ---------------------------------------------------------------------
        if (!isset($_PEDIDO_ACTIVO_SESSION) || count($_PEDIDO_ACTIVO_SESSION['productos']) == 0) {
            return;
        }

        // ---------------------------------------------------------------------
        // se vincula al vendedor tienda online
        // ---------------------------------------------------------------------
        if ($vta_vendedor_asignado) {
            // ---------------------------------------------------------------------
            // si tiene vendedor vinculado
            // ---------------------------------------------------------------------
            $vta_vendedor = $vta_vendedor_asignado;
            $gral_sucursal_virtual = GralSucursal::getOxCodigo(GralSucursal::SUCURSAL_VIRTUAL); // se utiliza la sucursal VIRTUAL
        }
        else {
            // ---------------------------------------------------------------------
            // si no tiene vendedor vinculado, e inicializa uno por default
            // ---------------------------------------------------------------------
            $vta_vendedor = VtaVendedor::getOxCodigo(VtaVendedor::VENDEDOR_TIENDA_ONLINE_GEXTENO);
            $gral_sucursal_virtual = GralSucursal::getOxCodigo(GralSucursal::SUCURSAL_VIRTUAL); // se utiliza la sucursal VIRTUAL            
        }

        // ---------------------------------------------------------------------
        // se vincula al comprador tienda online, para comisionar
        // ---------------------------------------------------------------------
        $vta_comprador_tienda_online = VtaComprador::getOxCodigo(VtaComprador::COMPRADOR_TIENDA_ONLINE_GEXTENO);

        // ----------------------------------------------------------------------
        // se determina la lista de precios por default
        // ----------------------------------------------------------------------
        if ($cli_cliente_tienda) {
            $ins_tipo_lista_precio_cliente = $cli_cliente_tienda->getInsTipoListaPrecioParaClienteTienda();
        }
        else {
            $ins_tipo_lista_precio_cliente = InsTipoListaPrecio::getOxCodigo(InsTipoListaPrecio::TIPO_PRECIO_VENTA_ONLINE);
        }

        // ----------------------------------------------------------------------
        // se determinan variables que afectan al presupuesto
        // ----------------------------------------------------------------------
        $fecha_vencimiento = Date::sumarDias($fecha, self::DIAR_VENCIMIENTO_DEFAULT);

        // ----------------------------------------------------------------------
        // se determina si se aplica descuento financiero potencial
        // ----------------------------------------------------------------------        
        $vta_descuento_financiero = $arr_datos_consumidor_final['vta_descuento_financiero'];

        // ----------------------------------------------------------------------
        // se determina si se aplica descuento financiero potencial
        // ----------------------------------------------------------------------        
        $vta_presupuesto_tipo_despacho_id = $arr_datos_consumidor_final['vta_presupuesto_tipo_despacho_id'];
        $vta_presupuesto_tipo_despacho = VtaPresupuestoTipoDespacho::getOxId($vta_presupuesto_tipo_despacho_id);

        // ----------------------------------------------------------------------
        // se registra o instancia el nuevo presupuesto
        // ----------------------------------------------------------------------
        if($vta_presupuesto_en_proceso){
            $vta_presupuesto = $vta_presupuesto_en_proceso;
        }else{
            $vta_presupuesto = new VtaPresupuesto();
        }

        if ($cli_cliente && $cli_cliente->getId() != 'null') {
            $vta_presupuesto->setCliClienteId($cli_cliente->getId());
            $vta_presupuesto->setPersonaDescripcion($cli_cliente->getDescripcion());
            $vta_presupuesto->setGralCondicionIvaId($cli_cliente->getGralCondicionIvaId());
            $vta_presupuesto->setGralTipoDocumentoId($cli_cliente->getGralTipoDocumentoId());
            $vta_presupuesto->setPersonaDocumento($cli_cliente->getCuit());
            $vta_presupuesto->setPersonaEmail($cli_cliente->getEmail());
            
            if($cli_cliente_tienda){
                // el cliente podria tener multi cliente tienda
                $vta_presupuesto->setPersonaEmail($cli_cliente_tienda->getEmail());                
            }
        }
        elseif ($cli_cliente_tienda) {
            $vta_presupuesto->setPersonaDescripcion($cli_cliente_tienda->getDescripcion());
            $vta_presupuesto->setGralCondicionIvaId($cli_cliente_tienda->getGralCondicionIvaId());
            $vta_presupuesto->setGralTipoDocumentoId($cli_cliente_tienda->getGralTipoDocumentoId());
            $vta_presupuesto->setPersonaDocumento($cli_cliente_tienda->getCuit());
            $vta_presupuesto->setPersonaEmail($cli_cliente_tienda->getEmail());
        }
        else {
            $vta_presupuesto->setPersonaDescripcion($arr_datos_consumidor_final['nombre'] . ' ' . $arr_datos_consumidor_final['apellido']);
            $vta_presupuesto->setGralCondicionIvaId($arr_datos_consumidor_final['gral_condicion_iva_id']);
            $vta_presupuesto->setGralTipoDocumentoId($arr_datos_consumidor_final['gral_tipo_documento_id']);
            $vta_presupuesto->setPersonaDocumento($arr_datos_consumidor_final['documento']);
            $vta_presupuesto->setPersonaEmail($arr_datos_consumidor_final['email']);
            //$vta_presupuesto->setPersonaTelefono($arr_datos_consumidor_final['telefono']);
        }
        $vta_presupuesto->setGralEmpresaTransportadoraId($arr_datos_consumidor_final['gral_empresa_transportadora_id']);

        if ($vta_descuento_financiero) {
            $vta_presupuesto->setVtaDescuentoFinancieroId($vta_descuento_financiero->getId());
        }

        $vta_presupuesto->setGralFpFormaPagoId($arr_datos_consumidor_final['gral_fp_forma_pago_id']);
        $vta_presupuesto->setVtaPresupuestoTipoDespachoId($arr_datos_consumidor_final['vta_presupuesto_tipo_despacho_id']);
        
        if($vta_presupuesto_tipo_despacho){
            if($vta_presupuesto_tipo_despacho->getCodigo() == VtaPresupuestoTipoDespacho::TIPO_ENVIO_DOMICILIO){
                $vta_presupuesto->setCliCentroRecepcionId($arr_datos_consumidor_final['cli_centro_recepcion_id']);
                $vta_presupuesto->setGralSucursalRetiro('null');
            }elseif($vta_presupuesto_tipo_despacho->getCodigo() == VtaPresupuestoTipoDespacho::TIPO_RETIRO_SUCURSAL){
                $vta_presupuesto->setCliCentroRecepcionId('null');
                $vta_presupuesto->setGralSucursalRetiro($arr_datos_consumidor_final['gral_sucursal_retiro']);
            }
        }
        $vta_presupuesto->setVtaVendedorId($vta_vendedor->getId());
        $vta_presupuesto->setVtaCompradorId($vta_comprador_tienda_online->getId());

        $vta_presupuesto->setGralSucursalId($gral_sucursal_virtual->getId());
        $vta_presupuesto->setFecha($fecha);
        $vta_presupuesto->setFechaVencimiento($fecha_vencimiento);
        $vta_presupuesto->setFechaEntrega('1900-01-01');
        $vta_presupuesto->setFechaRecordatorio('1900-01-01');
        $vta_presupuesto->setNotaCliente($txa_observacion);

        $vta_presupuesto->setCantidadItems($_PEDIDO_ACTIVO_SESSION['resumen']['items']);
        $vta_presupuesto->setImporteTotal($_PEDIDO_ACTIVO_SESSION['resumen']['importe_total']);

        //----------------------------------------------------------------------
        // se determina el tipo de origen TIENDA
        //----------------------------------------------------------------------
        $vta_presupuesto_tipo_origen = VtaPresupuestoTipoOrigen::getOxCodigo(VtaPresupuestoTipoOrigen::TIPO_TIENDA);
        if ($vta_presupuesto_tipo_origen) {
            $vta_presupuesto->setVtaPresupuestoTipoOrigenId($vta_presupuesto_tipo_origen->getId());
        }

        if ($ins_tipo_lista_precio_cliente) {
            //$vta_presupuesto->setIncluyeLogistica($ins_tipo_lista_precio_cliente->getIncluyeLogistica());
            //$vta_presupuesto->setInsTipoListaPrecioId($ins_tipo_lista_precio_cliente->getId());
        }
        
        $vta_presupuesto->setPorcentaje(100);
        $vta_presupuesto->setEstado(1);
        $vta_presupuesto->save();

        $vta_presupuesto->setCodigo(self::PREFIJO_COT . str_pad($vta_presupuesto->getId(), 8, 0, STR_PAD_LEFT));
        $vta_presupuesto->save();

        // ----------------------------------------------------------------------
        // se setea el estado actual del presupuesto
        // ----------------------------------------------------------------------
        $vta_presupuesto_estado = $vta_presupuesto->setVtaPresupuestoEstado(VtaPresupuestoTipoEstado::TIPO_EN_CURSO, $observacion = ''); 
        
        // ---------------------------------------------------------------------
        // se agregan productos al pedido
        // ---------------------------------------------------------------------
        /*
        if (isset($_PEDIDO_ACTIVO_SESSION)) {
            if (count($_PEDIDO_ACTIVO_SESSION['productos']) > 0) {
                foreach ($_PEDIDO_ACTIVO_SESSION['productos'] as $arr_producto) {
                    $producto_id = $arr_producto['producto_id'];
                    $cantidad = $arr_producto['cantidad'];
                    $importe_unitario = $arr_producto['importe_unitario'];
                    $importe_total = $arr_producto['importe_total'];

                    $ins_insumo = InsInsumo::getOxId($producto_id);

                    if ($ins_insumo) {
                        
                        $array = array(
                            array('campo' => 'vta_presupuesto_id', 'valor' => $vta_presupuesto->getId()),
                            array('campo' => 'ins_insumo_id', 'valor' => $ins_insumo->getId()),
                            array('campo' => 'estado', 'valor' => 1),
                        );
                        $vta_presupuesto_ins_insumo = VtaPresupuestoInsInsumo::getOxArray($array);
                        if(!$vta_presupuesto_ins_insumo){
                            $vta_presupuesto_ins_insumo = new VtaPresupuestoInsInsumo();
                        }
                        $vta_presupuesto_ins_insumo->setVtaPresupuestoId($vta_presupuesto->getId());
                        $vta_presupuesto_ins_insumo->setInsInsumoId($ins_insumo->getId());
                        $vta_presupuesto_ins_insumo->setDescripcion($ins_insumo->getDescripcion());

                        $vta_presupuesto_ins_insumo->setGralTipoIvaId($ins_insumo->getGralTipoIvaVenta());

                        if ($ins_tipo_lista_precio_cliente) {
                            $ins_lista_precio = $ins_insumo->getInsInsumoListaPrecioXTipoLista($ins_tipo_lista_precio_cliente, TRUE);
                            $vta_presupuesto_ins_insumo->setInsListaPrecioId($ins_lista_precio->getId());

                            $incluye_iva = FALSE;
                            $importe_unitario = $ins_insumo->getInsInsumoImporteVentaActual($ins_tipo_lista_precio_cliente, $incluye_iva);

                            $vta_presupuesto_ins_insumo->setImporteUnitario($importe_unitario);
                        }

                        //if ($ins_insumo_bulto) {
                        //    $vta_presupuesto_ins_insumo->setInsInsumoBultoId($ins_insumo_bulto->getId());
                        //    $vta_presupuesto_ins_insumo->setCantidadBulto($ins_insumo_bulto->getCantidad());
                        //}

                        $vta_presupuesto_ins_insumo->setCantidad($cantidad);
                        $vta_presupuesto_ins_insumo->setConflicto(0);
                        $vta_presupuesto_ins_insumo->setEstado(1);

                        // -----------------------------------------------------------------
                        // se registra el costo de insumo
                        // -----------------------------------------------------------------
                        $ins_insumo_costo = $ins_insumo->getInsInsumoCostoActual();
                        if ($ins_insumo_costo) {
                            $vta_presupuesto_ins_insumo->setInsInsumoCostoId($ins_insumo_costo->getId());
                            $vta_presupuesto_ins_insumo->setImporteCosto($ins_insumo_costo->getCosto());
                        }

                        $vta_presupuesto_ins_insumo->save();

                        // -----------------------------------------------------------------
                        // se recalcula por potenciales afectaciones (recardos o descuentos)
                        // -----------------------------------------------------------------
                        $vta_presupuesto_ins_insumo->setRecalcularImportePorAfectaciones();
                    }
                }
            }
        }
        */
        if ($cli_cliente_tienda) {
            // ---------------------------------------------------------------------
            // se vincula presupuesto al cli cliente tienda
            // ---------------------------------------------------------------------
            $vta_presupuesto_cli_cliente_tienda = new VtaPresupuestoCliClienteTienda();
            $vta_presupuesto_cli_cliente_tienda->setVtaPresupuestoId($vta_presupuesto->getId());
            $vta_presupuesto_cli_cliente_tienda->setCliClienteTiendaId($cli_cliente_tienda->getId());
            $vta_presupuesto_cli_cliente_tienda->setEstado(1);
            $vta_presupuesto_cli_cliente_tienda->save();
        }

        // ---------------------------------------------------------------------
        // se envia correo de notificacion a empresa
        // ---------------------------------------------------------------------
        $vta_presupuesto->enviarCorreoPresupuestoNuevoAEmpresa($enviar = true, $txa_observacion);

        // ---------------------------------------------------------------------
        // se envia correo de notificacion a cliente
        // ---------------------------------------------------------------------
        $vta_presupuesto->enviarCorreoPresupuestoNuevoACliente();

        // ---------------------------------------------------------------------
        // se limpia variable de session de carrito de pedidos
        // ---------------------------------------------------------------------
        VtaPedido::setCarritoSessionQuitarProductos();

        return $vta_presupuesto;
    }

    /**
     * Envia correo de pedido nuevo a empresa
     */
    public function enviarCorreoPresupuestoNuevoAEmpresa($enviar = true, $observacion = '') {
        if (!Mail::MAIL_ACTIVO) {
            return false;
        }

        $vta_vendedor_asignado = $this->getVtaVendedor();

        $mail_asunto = 'Nuevo Pedido Realizado desde Tienda  ' . $this->getCodigo() . ' ' . date('d/m/Y H:i');

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $destinatarios = str_replace(' ', '', $destinatarios);
        $destinatarios = str_replace(',', ';', $destinatarios);
        $arr_destinatarios = explode(";", $destinatarios);

        $param = array(
            'vta_presupuesto_id' => $this->getId(),
            'observacion' => $observacion,
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/TIENDA/index_vta_presupuesto_empresa.php";
        $msg = Gral::get_include_contents($archivo, $param);

        if (!$enviar) {
            echo $msg;
            return;
        }

        $mail = new PHPMailer();

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
            $mail->AddReplyTo($this->getPersonaEmail());

            $mail->IsHTML(true);
            $mail->Subject = $mail_asunto;

            $mail->Body = $msg;


            if ($vta_vendedor_asignado && Ctrl::esEmail($vta_vendedor_asignado->getEmail())) {
                //$mail->AddAddress($vta_vendedor_asignado->getEmail());
            }
            $mail->AddAddress(Mail::MAIL_CASILLA_PRESUPUESTO_TIENDA);
            $mail->AddAddress(Mail::MAIL_CASILLA_PRESUPUESTO_TIENDA_2);
            $mail->AddAddress(Mail::MAIL_CASILLA_PRESUPUESTO_TIENDA_3);
            //$mail->AddAddress(Mail::MAIL_CASILLA_PRESUPUESTO_TIENDA_4);

            if (Mail::MAIL_CASILLA_AUDITORIA_ADMIN != '') {
                $mail->AddBCC(Mail::MAIL_CASILLA_AUDITORIA_ADMIN);
            }

            $mail->Timeout = 20;

            $envio_ok = $mail->Send();

            return $envio_ok;
        } catch (phpmailerException $e) {
            echo $e->errorMessage(); //Pretty error messages from PHPMailer
        } catch (Exception $e) {
            echo $e->getMessage(); //Boring error messages from anything else!
        }

        return false;
    }

    /**
     * Envia correo de pedido nuevo a cliente
     */
    public function enviarCorreoPresupuestoNuevoACliente($enviar = true, $observacion = '') {
        if (!Mail::MAIL_ACTIVO) {
            return false;
        }

        $mail_asunto = 'Pedido Recibido desde Tienda ' . $this->getCodigo() . ' ' . date('d/m/Y H:i');

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $destinatarios = str_replace(' ', '', $destinatarios);
        $destinatarios = str_replace(',', ';', $destinatarios);
        $arr_destinatarios = explode(";", $destinatarios);

        $param = array(
            'vta_presupuesto_id' => $this->getId(),
            'observacion' => $observacion,
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/TIENDA/index_vta_presupuesto_cliente.php";
        $msg = Gral::get_include_contents($archivo, $param);

        if (!$enviar) {
            echo $msg;
            return;
        }

        $mail = new PHPMailer();

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
            $mail->AddReplyTo(Mail::MAIL_CASILLA_REPLYTO_TIENDA);

            $mail->IsHTML(true);
            $mail->Subject = $mail_asunto;

            $mail->Body = $msg;

            $mail->AddAddress($this->getPersonaEmail());

            if (Mail::MAIL_CASILLA_AUDITORIA_ADMIN != '') {
                $mail->AddBCC(Mail::MAIL_CASILLA_AUDITORIA_ADMIN);
            }

            $mail->Timeout = 20;

            $envio_ok = $mail->Send();

            return $envio_ok;
        } catch (phpmailerException $e) {
            echo $e->errorMessage(); //Pretty error messages from PHPMailer
        } catch (Exception $e) {
            echo $e->getMessage(); //Boring error messages from anything else!
        }

        return false;
    }

    //donde se utilice el pdf agregar un parametro mas y enviar este hash.
    //despues donde se quiera acceder , instanciar objeto y llamar a este metodo, y comprar con hash y hash recibido
    public function getHash() {
        return md5($this->getCreado());
    }
    
    /**
     * 
     * @return boolean
     */
    public function setControlVtaPresupuestoConflicto() {
        $conflicto = false;
        
        $vta_presupuesto_ins_insumos = $this->getVtaPresupuestoInsInsumos(null, null, true);        
        foreach ($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo) {
            
            // -----------------------------------------------------------------
            // se determina si existe conflicto para cada una de los items del presupuesto
            // -----------------------------------------------------------------
            $conflicto_item = $vta_presupuesto_ins_insumo->setControlVtaPresupuestoConflicto();
            if($conflicto_item){
                $conflicto = true;
            }
        }
        
        if($conflicto){
            $this->setConflicto(1);
        }else{
            $this->setConflicto(0);            
        }
        $this->save();
        
        return $conflicto;
    }
    
    public function getCliClienteTienda(){
        $cli_cliente_tienda = $this->getCliClienteTiendaXVtaPresupuestoCliClienteTienda();
        if($cli_cliente_tienda){
            return $cli_cliente_tienda;
        }
        return false;
    }
    
    public function getCliCentroPedido(){
        $cli_cliente_tienda = $this->getCliClienteTiendaXVtaPresupuestoCliClienteTienda();
        if($cli_cliente_tienda){
            return $cli_cliente_tienda->getCliCentroPedido();
        }
        return false;
    }
    
    public function getPorcentajeRecargo(){
        return $this->getRecargo();
    }
    
    public function getIncluyeRecargo(){
        return ($this->getImporteRecargo() != 0) ? true : false;
    }
    
    public function getTextoRecargo(){
        $texto = '';
        
        if($this->getIncluyeRecargo()){
            $texto = ($this->getImporteRecargo() > 0) ? 'Recargo por Forma de Pago' : 'Descuento por Forma de Pago';
        }
        
        return $texto;
    }
    
    /**
     * 
     * @param type $ins_tipo_lista_precio_id
     * @param type $observacion
     */
    public function setCambiarTipoListaPrecio($ins_tipo_lista_precio_id, $observacion){
        
        // ---------------------------------------------------------------------
        // se actualizan precios de productos en presupuesto
        // ---------------------------------------------------------------------
        $this->setActualizarImporteItemsPresupuestoXInsTipoListaPrecio($ins_tipo_lista_precio_id);
        
        // ---------------------------------------------------------------------
        // se actualizan datos de cliente
        // ---------------------------------------------------------------------
        $this->setInsTipoListaPrecioId($ins_tipo_lista_precio_id);

        // ---------------------------------------------------------------------
        // se guarda el presupuesto
        // ---------------------------------------------------------------------
        $this->save();
                
        // ---------------------------------------------------------------------
        // se registra info del cambio de lista a nivel de estado de presupuesto
        // ---------------------------------------------------------------------
        $this->setVtaPresupuestoEstado($this->getVtaPresupuestoTipoEstado()->getCodigo(), 'Cambio de Lista de Precios: '.$observacion);
        
        return true;
    }
    
    /**
     * 
     * @param type $tipo_estado
     * @param type $txa_observacion
     */
    public function setVtaPresupuestoEstadoCustom($tipo_estado, $txa_observacion)
    {
        $this->setVtaPresupuestoEstado($tipo_estado, $txa_observacion);

        switch($tipo_estado)
        {
            case VtaPresupuestoTipoEstado::TIPO_PREAPROBADO: 
                $this->setPreaprobado(1);
                $this->save();
                break;
            case VtaPresupuestoTipoEstado::TIPO_EN_CURSO: 
                $this->setPreaprobado(0);
                $this->save();
                break;
        }
    }
    

}

?>
