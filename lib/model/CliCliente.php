<?php

require_once "base/BCliCliente.php";

class CliCliente extends BCliCliente {
    
    const PREFIJO_CLIENTE = 'CLI-';
    const CLIENTE_CONSUMIDOR_FINAL = 'CONSUMIDOR_FINAL';
    
    /* Control */
    public function control() {
        $error = new DbError();
        
        // ---------------------------------------------------------------------
        // descripcion
        // ---------------------------------------------------------------------
        if (!Ctrl::esVacio($this->getDescripcion())) {
            if (Ctrl::esMaxCaracteres(100, $this->getDescripcion())) {
                $error->addError(505, 'Descripcion', 'descripcion');
            } else {
                $o = self::getOxDescripcion($this->getDescripcion());
                if ($o && $o->getId() != $this->getId()) {
                    $error->addError(140, 'Descripcion', 'descripcion');
                }
            }
        } else {
            $error->addError(100, 'Descripcion', 'descripcion');
        }

        // ---------------------------------------------------------------------
        // tipo personeria
        // ---------------------------------------------------------------------
        if (Ctrl::esNull($this->getGralTipoPersoneriaId())) {
            $error->addError(100, 'GralTipoPersoneria', 'gral_tipo_personeria_id');
        }

        // ---------------------------------------------------------------------
        // condiciones iva
        // ---------------------------------------------------------------------
        if (Ctrl::esNull($this->getGralCondicionIvaId())) {
            $error->addError(100, 'GralCondicionIva', 'gral_condicion_iva_id');
        }

        // ---------------------------------------------------------------------
        // tipo cliente
        // ---------------------------------------------------------------------
        if (Ctrl::esNull($this->getCliTipoClienteId())) {
            $error->addError(100, 'CliTipoCliente', 'cli_tipo_cliente_id');
        }
        
        // ---------------------------------------------------------------------
        // tipo documento
        // ---------------------------------------------------------------------
        if (Ctrl::esNull($this->getGralTipoDocumentoId())) {
            $error->addError(100, 'GralTipoDocumento', 'gral_tipo_documento_id');
        }else{
            $geo_pais = $this->getGeoLocalidad()->getGeoProvincia()->getGeoPais();            
            $gral_tipo_documento = $this->getGralTipoDocumento();
            //if ($geo_pais && $geo_pais->getCodigo() == 'PARAGUAY' && $gral_tipo_documento && $gral_tipo_documento->getCodigo() == GralTipoDocumento::TIPO_CUIT) {
            if ($gral_tipo_documento->getCodigo() == GralTipoDocumento::TIPO_CUIT) {
                // -------------------------------------------------
                // se controla formato del RUC
                // -------------------------------------------------
                if (!Ctrl::esRUCValido($this->getCuit())) {
                    $error->addError('Formato de RUC Invalido', 'CUIT', 'cuit');
                }
            }
        }
        
        // ---------------------------------------------------------------------
        // razon social
        // ---------------------------------------------------------------------
        if (!Ctrl::esVacio($this->getRazonSocial())) {
            if (Ctrl::esMaxCaracteres(100, $this->getRazonSocial())) {
                $error->addError(505, 'Razon Social', 'razon_social');
            } else {
                //$o = self::getOxRazonSocial($this->getRazonSocial());
                //if ($o && $o->getId() != $this->getId()) {
                //    $error->addError(140, 'Razon Social', 'razon_social');
                //}
            }
        } else {
            $error->addError(100, 'Razon Social', 'razon_social');
        }

        // ---------------------------------------------------------------------
        // domicilio
        // ---------------------------------------------------------------------
        if (!Ctrl::esVacio($this->getDomicilioLegal())) {
            if (Ctrl::esMaxCaracteres(100, $this->getDomicilioLegal())) {
                $error->addError(505, 'Domicilio Legal', 'domicilio_legal');
            }
        } else {
            $error->addError(100, 'Domicilio Legal', 'domicilio_legal');
        }

        // ---------------------------------------------------------------------
        // domicilio
        // ---------------------------------------------------------------------
        if (!Ctrl::esDigito($this->getNumeroCasa())) {
            $error->addError('Debe ingresar un valor numerico', 'Numero Casa', 'numero_casa');
        }
        
        // ---------------------------------------------------------------------
        // localidad
        // ---------------------------------------------------------------------
        if (Ctrl::esNull($this->getGeoLocalidadId())) {
            $error->addError(100, 'Localidad', 'geo_localidad_id');
        } else {

            // -----------------------------------------------------------------
            // cuit
            // -----------------------------------------------------------------
            if (!Ctrl::esVacio($this->getCuit())) {
                if (Ctrl::esMaxCaracteres(100, $this->getCuit())) {
                    $error->addError(505, 'CUIT', 'cuit');
                } else {
                    //$o = self::getOxCuit($this->getCuit());
                    //if ($o && $o->getId() != $this->getId()) {
                    //    $error->addError('CUIT vinculado a "' . $o->getDescripcion() . '"', 'CUIT', 'cuit');
                    //}
                }
            } else {
                $error->addError(100, 'CUIT', 'cuit');
            }
        }
        
        // ---------------------------------------------------------------------
        // categoria
        // ---------------------------------------------------------------------
        if (Ctrl::esNull($this->getCliCategoriaId())) {
            $error->addError(100, 'CliCategoria', 'cli_categoria_id');
        }
        
        // ---------------------------------------------------------------------
        // grupo
        // ---------------------------------------------------------------------
        if (Ctrl::esNull($this->getCliGrupoId())) {
            
            $o = self::getOxRazonSocial($this->getRazonSocial());
            if ($o && $o->getId() != $this->getId()) {
                $error->addError(140, 'Razon Social', 'razon_social');
            }
            
            $o = self::getOxCuit($this->getCuit());
            if ($o && $o->getId() != $this->getId()) {
                $error->addError('RUC vinculado a "' . $o->getRazonSocial() . ', para vincularlo debe elegir el grupo"', 'CUIT', 'cuit');
            }
        }else{
            $o_rz = self::getOxRazonSocial($this->getRazonSocial());
            $o_d = self::getOxCuit($this->getCuit());
            
            $cli_grupo = CliGrupo::getOxId($this->getCliGrupoId());
            if($cli_grupo){
                //if($o_rz->getRazonSocial() != $this->get)
            }
        }
        
        //Gral::pr($this->getCliGrupoId());
        //Gral::pr($cli_grupo->getCliGrupoId());
        

        return $error;
    }

    /**
    * Metodo que retorna el array para mostrar en el ADM
    * @return array
    */
    public function getArrDescripcionExtendidaParaBackend() {
        $array = array();

        $array = array(
            'razon_social' => array(
                'label' => 'Raz Social',
                'dato' => ($this->getRazonSocial() != $this->getDescripcion()) ? $this->getRazonSocial() : '',
            ),
            'gral_tipo_documento' => array(
                'label' => $this->getGralTipoDocumento()->getDescripcion(),
                'dato' => $this->getCuit(),
            ),
            'cli_tipo_cliente' => array(
                'label' => 'Tipo Cliente',
                'dato' => $this->getCliTipoCliente()->getDescripcion(),
            ),
            'gral_condicion_iva' => array(
                'label' => 'Condicion IVA',
                'dato' => $this->getGralCondicionIva()->getDescripcion(),
            ),
            'gral_tipo_personeria' => array(
                'label' => 'Tipo Pers',
                'dato' => $this->getGralTipoPersoneria()->getDescripcion(),
            ),
            'cli_grupo' => array(
                'label' => 'Grupo',
                'dato' => $this->getCliGrupo()->getDescripcion(),
            ),
            'domicilio' => array(
                'label' => 'Domicilio',
                'dato' => $this->getDomicilioLegal(),
            ),
            'email' => array(
                'label' => 'Email',
                'dato' => $this->getEmail(),
            ),
            'localidad' => array(
                'label' => 'Localidad',
                'dato' => $this->getGeoLocalidad()->getDescripcionFull($incluir_pais = false),
            ),
            'observacion' => array(
                'label' => 'Obs',
                'dato' => $this->getObservacion(),
            ),
        );

        return $array;
    }
    
    public function saveDesdeBackend() {

        $creando = false;
        if($this->getId() == ''){
            $creando = true;
        }
        
        // se asigna por default un tipo de gestion
        $cli_cliente_tipo_gestion_autogestivo = CliClienteTipoGestion::getOxCodigo(CliClienteTipoGestion::TIPO_GESTION_AUTOGESTIVO);
        if (Ctrl::esNull($this->getCliClienteTipoGestionId())) {
            $this->setCliClienteTipoGestionId($cli_cliente_tipo_gestion_autogestivo->getId());
        }
        
        parent::saveDesdeBackend();

        // inicializacion de centro de recepcion
        $this->setInicializarCentroPedido();
        $this->setInicializarCentroRecepcion();
        $this->setInicializarTiposEstados();
        
        // actualizar cliente tienda
        $this->setActualizarClienteTienda();
        
        // inicializar vinculo con vendedor
        $this->setInicializarVendedor();
    }

    /**
     * 
     */
    public function getDescripcionParaSelect() {
        $texto = '';
        $texto.= $this->getDescripcion();
        if(trim($this->getDescripcion()) != trim($this->getRazonSocial())){
            $texto.= ' - Raz Soc: ';
            $texto.= $this->getRazonSocial();
        }
        
        return $texto;
    }

    /**
     * 
     */
     public function getCodigoCliente(){
         return str_pad($this->getId(), 15, 0, STR_PAD_LEFT);
     }

    /**
     * Metodo que inicializa un cliente de manera simple, se utiliza por ejemplo en presupuestos
     */
    static function setInicializarCliClienteSimple($cli_tipo_cliente_id, $tipo_personeria_id, $persona_descripcion, $tipo_documento_id, $persona_documento, $condicion_iva_id, $razon_social, $domicilio_legal, $numero_casa, $email, $telefono, $geo_localidad_id, $iva_exceptuado) {
        $cli_cliente = new self();
        $cli_cliente->setCliTipoClienteId($cli_tipo_cliente_id);
        $cli_cliente->setGralTipoPersoneriaId($tipo_personeria_id);
        $cli_cliente->setDescripcion($persona_descripcion);
        $cli_cliente->setGralTipoDocumentoId($tipo_documento_id);
        $cli_cliente->setCuit($persona_documento);
        $cli_cliente->setGralCondicionIvaId($condicion_iva_id);
        $cli_cliente->setRazonSocial($razon_social);
        $cli_cliente->setDomicilioLegal($domicilio_legal);
        $cli_cliente->setNumeroCasa($numero_casa);
        $cli_cliente->setEmail($email);
        $cli_cliente->setTelefono($telefono);
        $cli_cliente->setGeoLocalidadId($geo_localidad_id);
        $cli_cliente->setIvaExceptuado($iva_exceptuado);
        $cli_cliente->setEstado(1);
        $cli_cliente->save();

        // ---------------------------------------------------------------------
        // inicializacion de centro de recepcion
        // ---------------------------------------------------------------------
        $cli_cliente->setInicializarCentroPedido();
        $cli_cliente->setInicializarCentroRecepcion();

        $cli_cliente->setInicializarVendedor();

        return $cli_cliente;
    }

    public function setInicializarCentroPedido() {
        $cli_centro_pedidos = $this->getCliCentroPedidos();
        if (count($cli_centro_pedidos) == 0) {
            // solo si no tiene registros creados se genera uno
            $cli_centro_pedido = new CliCentroPedido();
            $cli_centro_pedido->setCliClienteId($this->getId());
            $cli_centro_pedido->setDescripcion($this->getDescripcion());
            $cli_centro_pedido->setGeoLocalidadId($this->getGeoLocalidadId());
            $cli_centro_pedido->setDomicilio($this->getDomicilioLegal());
            $cli_centro_pedido->setTelefono($this->getTelefono());
            $cli_centro_pedido->setEmail($this->getEmail());
            $cli_centro_pedido->setOrden(1);
            $cli_centro_pedido->setEstado(1);
            $cli_centro_pedido->save();
        }
    }
    
    public function setInicializarCentroRecepcion() {
        $cli_centro_recepcions = $this->getCliCentroRecepcions();
        if (count($cli_centro_recepcions) == 0) {
            // solo si no tiene registros creados se genera uno
            $cli_centro_recepcion = new CliCentroRecepcion();
            $cli_centro_recepcion->setCliClienteId($this->getId());
            $cli_centro_recepcion->setDescripcion($this->getDescripcion());
            $cli_centro_recepcion->setGeoLocalidadId($this->getGeoLocalidadId());
            $cli_centro_recepcion->setDomicilio($this->getDomicilioLegal());
            $cli_centro_recepcion->setTelefono($this->getTelefono());
            $cli_centro_recepcion->setEmail($this->getEmail());
            $cli_centro_recepcion->setCodigoPostal($this->getCodigoPostal());
            $cli_centro_recepcion->setOrden(1);
            $cli_centro_recepcion->setEstado(1);
            $cli_centro_recepcion->save();
        }
    }
    
    /**
     * 
     */
    public function setInicializarTiposEstados(){
        // ---------------------------------------------------------------------
        // tipo de estado
        // ---------------------------------------------------------------------
        $cli_cliente_estados = $this->getCliClienteEstados(null, null, true);
        if(count($cli_cliente_estados) == 0){
            $this->setCliClienteEstadoDesdeBackend(CliClienteTipoEstado::TIPO_ESTADO_HABILITADO, 'Inicializacion');
        }
        
        // ---------------------------------------------------------------------
        // tipo de estado de venta
        // ---------------------------------------------------------------------
        $cli_cliente_estado_ventas = $this->getCliClienteEstadoVentas(null, null, true);
        if(count($cli_cliente_estado_ventas) == 0){
            $this->setCliClienteEstadoVentaDesdeBackend(CliClienteTipoEstadoVenta::TIPO_ESTADO_LEAD, 'Inicializacion');
        }

        return true;
    }
    
    /**
     * 
     */
    public function setActualizarClienteTienda(){
        $cli_cliente_tienda = $this->getCliClienteTienda();
        if($cli_cliente_tienda){
            $cli_cliente_tienda->setGralTipoPersoneriaId($this->getGralTipoPersoneriaId());
            $cli_cliente_tienda->setGralCondicionIvaId($this->getGralCondicionIvaId());
            $cli_cliente_tienda->save();
        }
    }
    
    /**
     * 
     */
    public function setInicializarVendedor(){
        $vta_vendedors_vinculados = $this->getVtaVendedors();
        $user = UsUsuario::autenticado();
        $vta_vendedor_autenticado = $user->getVtaVendedor();
        if($vta_vendedor_autenticado){
            
            // si es vendedor de telemarketing se autovincula el cliente que se esta creando
            if(count($vta_vendedors_vinculados) == 0){
                switch($vta_vendedor_autenticado->getGralSucursal()->getCodigo()){
                    case GralSucursal::SUCURSAL_TELEMARKETING:
                    case GralSucursal::SUCURSAL_PREVENTA:
                        if($this->getCliClienteTipoGestion()->getCodigo() == CliClienteTipoGestion::TIPO_GESTION_VENDEDOR){
                            $cli_cliente_vta_vendedor = new CliClienteVtaVendedor();
                            $cli_cliente_vta_vendedor->setCliClienteId($this->getId());
                            $cli_cliente_vta_vendedor->setVtaVendedorId($vta_vendedor_autenticado->getId());
                            $cli_cliente_vta_vendedor->setEstado(1);
                            $cli_cliente_vta_vendedor->save();
                        }
                        break;
                }
            }
        }
    }

    /**
     * 
     */
    public function cambiarEstado(){
        parent::cambiarEstado();
        
        // ---------------------------------------------------------------------
        // se registra la tabla de trazabilidad de estados
        // ---------------------------------------------------------------------
        if($this->getEstado()){
            $this->setCliClienteEstadoDesdeBackend(CliClienteTipoEstado::TIPO_ESTADO_HABILITADO, 'Habilitacion de Cliente');
        }else{
            $this->setCliClienteEstadoDesdeBackend(CliClienteTipoEstado::TIPO_ESTADO_NO_HABILITADO, 'Deshabilitacion de Cliente');
        }        
    }    

    public function getVtaPreventistas() {
        $c = new Criterio();
        $c->add('cli_cliente_vta_preventista.cli_cliente_id', $this->getId(), Criterio::IGUAL);
        $c->addTabla('vta_preventista');
        $c->addRealJoin('cli_cliente_vta_preventista', 'cli_cliente_vta_preventista.vta_preventista_id', 'vta_preventista.id');
        $c->addOrden(2);
        $c->setCriterios();

        $vta_preventistas = VtaPreventista::getVtaPreventistas(null, $c);
        return $vta_preventistas;
    }

    public function getVtaPreventistasCmb() {
        // se obtiene la coleccion correspondiente al cliente
        $os = $this->getVtaPreventistas();

        $cont = 0;
        $arr = array();
        foreach ($os as $o) {
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getDescripcion();
        }
        return $arr;
    }

    public function getVtaCompradors() {
        $c = new Criterio();
        $c->add('cli_cliente_vta_comprador.cli_cliente_id', $this->getId(), Criterio::IGUAL);
        $c->addTabla('vta_comprador');
        $c->addRealJoin('cli_cliente_vta_comprador', 'cli_cliente_vta_comprador.vta_comprador_id', 'vta_comprador.id');
        $c->addOrden(2);
        $c->setCriterios();

        $vta_compradors = VtaComprador::getVtaCompradors(null, $c);
        return $vta_compradors;
    }

    public function getVtaCompradorsCmb() {
        // se obtiene la coleccion correspondiente al cliente
        $os = $this->getVtaCompradors();

        $cont = 0;
        $arr = array();
        foreach ($os as $o) {
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getDescripcion();
        }
        return $arr;
    }

    public function getVtaVendedors() {
        $c = new Criterio();
        $c->add('cli_cliente_vta_vendedor.cli_cliente_id', $this->getId(), Criterio::IGUAL);
        $c->addTabla('vta_vendedor');
        $c->addRealJoin('cli_cliente_vta_vendedor', 'cli_cliente_vta_vendedor.vta_vendedor_id', 'vta_vendedor.id');
        $c->addOrden(2);
        $c->setCriterios();

        $vta_vendedors = VtaVendedor::getVtaVendedors(null, $c);
        return $vta_vendedors;
    }

    public function getVtaVendedorsmb() {
        // se obtiene la coleccion correspondiente al cliente
        $os = $this->getVtaVendedors();

        $cont = 0;
        $arr = array();
        foreach ($os as $o) {
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getDescripcion();
        }
        return $arr;
    }

    public function getInsTipoListaPrecios() {
        $c = new Criterio();
        $c->add('cli_cliente_ins_tipo_lista_precio.cli_cliente_id', $this->getId(), Criterio::IGUAL);
        $c->addTabla('ins_tipo_lista_precio');
        $c->addRealJoin('cli_cliente_ins_tipo_lista_precio', 'cli_cliente_ins_tipo_lista_precio.ins_tipo_lista_precio_id', 'ins_tipo_lista_precio.id');
        $c->addOrden(2);
        $c->setCriterios();

        $ins_tipo_lista_precios = InsTipoListaPrecio::getInsTipoListaPrecios(null, $c);
        return $ins_tipo_lista_precios;
    }

    public function getInsTipoListaPreciosCmb() {
        // se obtiene la coleccion correspondiente al cliente
        $os = $this->getInsTipoListaPrecios();

        $cont = 0;
        $arr = array();
        foreach ($os as $o) {
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getDescripcion();
        }
        return $arr;
    }

    public function getGralFpCuotas() {
        $c = new Criterio();
        $c->add('cli_cliente_gral_fp_cuota.cli_cliente_id', $this->getId(), Criterio::IGUAL);
        $c->addTabla('gral_fp_cuota');
        $c->addRealJoin('cli_cliente_gral_fp_cuota', 'cli_cliente_gral_fp_cuota.gral_fp_cuota_id', 'gral_fp_cuota.id');
        $c->addOrden(2);
        $c->setCriterios();

        $gral_fp_cuotas = GralFpCuota::getGralFpCuotas(null, $c);
        return $gral_fp_cuotas;
    }

    public function getVtaOrdenVentasActivas($vta_presupuesto = false) {
        $c = new Criterio();

        // los presupuestos del cliente
        $c->add(CliCliente::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaOrdenVentaTipoEstado::GEN_ATTR_TERMINAL, 0, Criterio::IGUAL);

        if($vta_presupuesto){
            $c->add(VtaPresupuesto::GEN_ATTR_ID, $vta_presupuesto->getId(), Criterio::IGUAL);
        }

        $c->addTabla(VtaOrdenVenta::GEN_TABLA);
        //$c->addRealJoin(VtaPresupuestoInsInsumo::GEN_TABLA, VtaPresupuestoInsInsumo::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID);
        //$c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaPresupuestoInsInsumo::GEN_ATTR_VTA_PRESUPUESTO_ID);
        $c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID);
        $c->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID);

        $c->addRealJoin(VtaOrdenVentaTipoEstado::GEN_TABLA, VtaOrdenVentaTipoEstado::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID);

        $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas(null, $c);
        return $vta_orden_ventas;
    }

    public function getVtaOrdenVentasActivaRemitos($vta_presupuesto = false) {
        $c = new Criterio();

        // los presupuestos del cliente
        $c->add(CliCliente::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaOrdenVentaTipoEstadoRemision::GEN_ATTR_TERMINAL, 0, Criterio::IGUAL);
        $c->add(VtaOrdenVentaTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);

        if($vta_presupuesto){
            $c->add(VtaPresupuesto::GEN_ATTR_ID, $vta_presupuesto->getId(), Criterio::IGUAL);
        }

        $c->addTabla(VtaOrdenVenta::GEN_TABLA);
        //$c->addRealJoin(VtaPresupuestoInsInsumo::GEN_TABLA, VtaPresupuestoInsInsumo::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID);
        //$c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaPresupuestoInsInsumo::GEN_ATTR_VTA_PRESUPUESTO_ID);
        $c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID);
        $c->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID);

        $c->addRealJoin(VtaOrdenVentaTipoEstado::GEN_TABLA, VtaOrdenVentaTipoEstado::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID);
        $c->addRealJoin(VtaOrdenVentaTipoEstadoRemision::GEN_TABLA, VtaOrdenVentaTipoEstadoRemision::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_ID);

        $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas(null, $c);
        return $vta_orden_ventas;
    }

    public function getVtaOrdenVentasActivaRemitoAjustes($vta_presupuesto = false) {
        $c = new Criterio();

        // los presupuestos del cliente
        $c->add(CliCliente::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaOrdenVentaTipoEstadoRemision::GEN_ATTR_TERMINAL, 0, Criterio::IGUAL);
        $c->add(VtaOrdenVentaTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);

        if($vta_presupuesto){
            $c->add(VtaPresupuesto::GEN_ATTR_ID, $vta_presupuesto->getId(), Criterio::IGUAL);
        }

        $c->addTabla(VtaOrdenVenta::GEN_TABLA);
        //$c->addRealJoin(VtaPresupuestoInsInsumo::GEN_TABLA, VtaPresupuestoInsInsumo::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID);
        //$c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaPresupuestoInsInsumo::GEN_ATTR_VTA_PRESUPUESTO_ID);
        $c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID);
        $c->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID);

        $c->addRealJoin(VtaOrdenVentaTipoEstado::GEN_TABLA, VtaOrdenVentaTipoEstado::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID);
        $c->addRealJoin(VtaOrdenVentaTipoEstadoRemision::GEN_TABLA, VtaOrdenVentaTipoEstadoRemision::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_ID);

        $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas(null, $c);
        return $vta_orden_ventas;
    }

    public function getVtaOrdenVentasActivaFacturas($vta_presupuesto = false) {
        $c = new Criterio();

        // los presupuestos del cliente
        $c->add(CliCliente::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaOrdenVentaTipoEstadoFacturacion::GEN_ATTR_TERMINAL, 0, Criterio::IGUAL);
        $c->add(VtaOrdenVentaTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);

        $c->add(VtaOrdenVenta::GEN_ATTR_CREADO, '2018-09-01 00:00:00', Criterio::MAYORIGUAL);

        if($vta_presupuesto){
            $c->add(VtaPresupuesto::GEN_ATTR_ID, $vta_presupuesto->getId(), Criterio::IGUAL);
        }
        
        $c->addTabla(VtaOrdenVenta::GEN_TABLA);
        //$c->addRealJoin(VtaPresupuestoInsInsumo::GEN_TABLA, VtaPresupuestoInsInsumo::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID);
        //$c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaPresupuestoInsInsumo::GEN_ATTR_VTA_PRESUPUESTO_ID);
        $c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID);
        $c->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID);

        $c->addRealJoin(VtaOrdenVentaTipoEstado::GEN_TABLA, VtaOrdenVentaTipoEstado::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID);
        $c->addRealJoin(VtaOrdenVentaTipoEstadoFacturacion::GEN_TABLA, VtaOrdenVentaTipoEstadoFacturacion::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ID);

        $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas(null, $c);
        return $vta_orden_ventas;
    }

    public function getVtaOrdenVentasActivaAjusteDebes($vta_presupuesto = false) {
        $c = new Criterio();

        // los presupuestos del cliente
        $c->add(CliCliente::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaOrdenVentaTipoEstadoFacturacion::GEN_ATTR_TERMINAL, 0, Criterio::IGUAL);
        $c->add(VtaOrdenVentaTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);

        $c->add(VtaOrdenVenta::GEN_ATTR_CREADO, '2018-09-01 00:00:00', Criterio::MAYORIGUAL);

        if($vta_presupuesto){
            $c->add(VtaPresupuesto::GEN_ATTR_ID, $vta_presupuesto->getId(), Criterio::IGUAL);
        }

        $c->addTabla(VtaOrdenVenta::GEN_TABLA);
        //$c->addRealJoin(VtaPresupuestoInsInsumo::GEN_TABLA, VtaPresupuestoInsInsumo::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_INS_INSUMO_ID);
        //$c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaPresupuestoInsInsumo::GEN_ATTR_VTA_PRESUPUESTO_ID);
        $c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID);
        $c->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID);

        $c->addRealJoin(VtaOrdenVentaTipoEstado::GEN_TABLA, VtaOrdenVentaTipoEstado::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID);
        $c->addRealJoin(VtaOrdenVentaTipoEstadoFacturacion::GEN_TABLA, VtaOrdenVentaTipoEstadoFacturacion::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ID);

        $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas(null, $c);
        return $vta_orden_ventas;
    }

    static function getCliClientesCmbXCliGrupo($cli_cliente, $estado = true) {
        $cli_grupo_id = $cli_cliente->getCliGrupoId();
        $criterio = new Criterio();

        if ($estado) {
            $criterio->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        }

        $criterio->add(CliCliente::GEN_ATTR_CLI_GRUPO_ID, $cli_grupo_id, Criterio::IGUAL);
        $criterio->add(CliCliente::GEN_ATTR_ID, $cli_cliente->getId(), Criterio::IGUAL, false, Criterio::_OR);
        $criterio->addTabla(CliCliente::GEN_TABLA);
        $criterio->setCriterios();

        $arr = self::getCliClientesCmbF(null, $criterio);

        return $arr;
    }
    
    static function getCliClientesCmbXAlcance() {
         // en otros proyectos se programa el alcance
        $arr = self::getCliClientesCmbF(null, null);

        return $arr;
    }

    /**
     * Autor: Pablo Rosen
     * Creado: 13/10/2018 22:56
     * Metodo que retorna un booleano si el cliente tiene una exencion activa para el tributo indicado
     * @param type $vta_tributo
     * @return boolean
     */
    public function getVtaTributoExencionActiva($vta_tributo) {
        $c = new Criterio();
        $c->add(VtaTributoExencion::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaTributoExencion::GEN_ATTR_VTA_TRIBUTO_ID, $vta_tributo->getId(), Criterio::IGUAL);
        $c->add(VtaTributoExencion::GEN_ATTR_FECHA_INICIO, date('Y-m-d'), Criterio::MENORIGUAL);
        $c->add(VtaTributoExencion::GEN_ATTR_FECHA_FIN, date('Y-m-d'), Criterio::MAYORIGUAL);
        $c->add(VtaTributoExencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->addTabla(VtaTributoExencion::GEN_TABLA);
        $c->addOrden(VtaTributoExencion::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();

        $p = new Paginador(1, 1);

        $vta_tributo_exencions = VtaTributoExencion::getVtaTributoExencions($p, $c);
        foreach ($vta_tributo_exencions as $vta_tributo_exencion) {
            return $vta_tributo_exencion;
        }
        return false;
    }

    public function getSaldoDeCuentaEnFecha($gral_empresa_id, $fecha, $vta_comprobantes = false, $incluir_ajustes = false) {
        if(!$gral_empresa_id){
            $gral_empresa_id = GralEmpresa::getGralEmpresaPorDefault()->getId();
        }
        
        $fecha_desde = '2010-01-01';
        $fecha_hasta = $fecha;
        $gral_mes_id = false;
        $anio = false;
        $cli_cliente_id = $this->getId();
        $incluir_recibos = true;

        $orden = 'DESC';
        $vta_vendedor_id = false; 
        //$incluir_ajustes = true;
        $cli_categoria_id = false;
        
        if (!$vta_comprobantes) {
            // ---------------------------------------------------------------------
            // se consultan los comprobantes que afectan el saldo de cuenta
            // ---------------------------------------------------------------------
            $vta_comprobantes = VtaComprobante::getVtaComprobantes($gral_empresa_id, $fecha_desde, $fecha_hasta, $gral_mes_id, $anio, $cli_cliente_id, $incluir_recibos, $orden, $vta_vendedor_id, $incluir_ajustes, $cli_categoria_id);
        }

        foreach ($vta_comprobantes as $vta_comprobante) {
            $class = get_class($vta_comprobante);
            switch ($class) {
                case 'VtaFactura': $vta_facturas[] = $vta_comprobante;
                    break;
                case 'VtaNotaDebito': $vta_nota_debitos[] = $vta_comprobante;
                    break;
                case 'VtaNotaCredito': $vta_nota_creditos[] = $vta_comprobante;
                    break;
                case 'VtaRecibo': $vta_recibos[] = $vta_comprobante;
                    break;
                case 'VtaAjusteDebe': $vta_ajustes_debe[] = $vta_comprobante;
                    break;
                case 'VtaAjusteHaber': $vta_ajustes_haber[] = $vta_comprobante;
                    break;
            }
        }

        $arr_comprobante_totales = VtaComprobante::getArrTotales($vta_facturas, $vta_nota_debitos, $vta_nota_creditos, $vta_recibos, $vta_ajustes_debe, $vta_ajustes_haber);
        //Gral::prr($arr_comprobante_totales);
        return $arr_comprobante_totales;
    }

    public function getSaldoDeCuentaEnFechaImporte($gral_empresa_id, $fecha, $vta_comprobantes = false, $incluir_ajustes = false) {
        if(!$gral_empresa_id){
            $gral_empresa_id = GralEmpresa::getGralEmpresaPorDefault()->getId();
        }
        $importe_total_saldo_inicial_en_fecha = 0;
        
        $arr_comprobante_totales_saldo_a_fecha = $this->getSaldoDeCuentaEnFecha($gral_empresa_id, $fecha, $vta_comprobantes, $incluir_ajustes);
        //Gral::prr($arr_comprobante_totales_saldo_a_fecha);

        $importe_total_debe_saldo_en_fecha = $arr_comprobante_totales_saldo_a_fecha['RESUMEN']['IMPORTE_SALDO_DEBE'];
        $importe_total_haber_saldo_en_fecha = $arr_comprobante_totales_saldo_a_fecha['RESUMEN']['IMPORTE_SALDO_HABER'];

        if ($importe_total_debe_saldo_en_fecha != 0) {
            $importe_total_saldo_inicial_en_fecha = ($importe_total_debe_saldo_en_fecha);
        } elseif ($importe_total_haber_saldo_en_fecha != 0) {
            $importe_total_saldo_inicial_en_fecha = ($importe_total_haber_saldo_en_fecha) * (-1);
        }

        return $importe_total_saldo_inicial_en_fecha;
    }
    
    /**
     * Autor: Pablo Rosen
     * Creado: 03/07/2020 13:42
     * Metodo que retorna los valores limites de cuenta corriente de un cliente
     * @return int
     */
    public function getArrLimitesCtacte() {
        $arr = array(
            'limite_importe' => 0,
            'limite_dias' => 0,
        );
        return $arr;
    }

    /**
     * Autor: Pablo Rosen
     * Creado: 03/07/2020 13:42
     * Metodo que retorna los mensajes de alerta de ctacte para un cliente
     * @return int
     */
    public function getArrMensajesAlertaCtacteCliente() {
        $arr = array();

        $arr_limites_ctacte = $this->getArrLimitesCtacte();
        $fecha_limite = Date::sumarDias(date('Y-m-d'), (-1) * $arr_limites_ctacte['limite_dias']);

        $vta_comprobantes_nosaldados = $this->getVtaComprobantesNoSaldadas($fecha_limite);
        //Gral::prr($vta_comprobantes_nosaldados);

        if (count($vta_comprobantes_nosaldados) > 0) {
            //$importe_total_saldo = $this->getSaldoDeCuentaEnFechaImporte($gral_empresa_id, $fecha = date('Y-m-d'));

            $vta_comprobante_nosaldado_masantiguo = $vta_comprobantes_nosaldados[0];

            $importe_total_deuda = 0;
            foreach($vta_comprobantes_nosaldados as $vta_comprobante_nosaldado){
                $saldo_imputable = $vta_comprobante_nosaldado->getSaldoImputable();
                $importe_total_deuda+=$saldo_imputable;
            }
            
            $arr[] = array(
                'tipo' => 'resumen-con-detalle',
                'codigo' => 1005,
                'descripcion' => 'El cliente "' . $this->getDescripcion() . '" tiene ' . count($vta_comprobantes_nosaldados)
                . ' comprobantes no pagados desde el ' . Gral::getFechaToWEB($vta_comprobante_nosaldado_masantiguo->getFechaEmision())
                . ' (hace ' . Date::getDiferenciaTiempo('d', $vta_comprobante_nosaldado_masantiguo->getFechaEmision(), date('Y-m-d')) . ' dias)'
                . ' por un total aprox de ' . Gral::_echoImp($importe_total_deuda, false, true)
            );

            foreach ($vta_comprobantes_nosaldados as $vta_comprobante_nosaldado) {
                $vta_comprobante_tipo_estado = $vta_comprobante_nosaldado->getVtaComprobanteTipoEstado();
                $saldo_imputable = $vta_comprobante_nosaldado->getSaldoImputable();

                $arr[] = array(
                    'tipo' => 'detalle',
                    'codigo' => 1005,
                    'descripcion' => '- ' . $vta_comprobante_nosaldado->getNumeroComprobanteCompletoFull() . ' '
                    . ' emitido el ' . Gral::getFechaToWEB($vta_comprobante_nosaldado->getFechaEmision())
                    . ' por un importe de ' . Gral::_echoImp($vta_comprobante_nosaldado->getImporteTotalComprobante(), false, true)
                    . ' en estado ' . $vta_comprobante_tipo_estado->getDescripcion()
                    . ' - Saldo a Pagar ' . Gral::_echoImp($saldo_imputable, false, true),
                    'importe_imputable' => $saldo_imputable,
                );
            }
            
            // agregar limites de importe de ctacte
        }

        return $arr;
    }

    public function getVtaComprobantesNoSaldadas($fecha_limite = false) {
        $gral_empresa = false;

        // -----------------------------------------------------------------------------
        // Se obtienen facturas pendientes
        // -----------------------------------------------------------------------------
        $c = new Criterio();
        $c->add(VtaFactura::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaFacturaTipoEstado::GEN_ATTR_GESTIONABLE, 1, Criterio::IGUAL);

        if ($gral_empresa) {
            $c->add(VtaFactura::GEN_ATTR_GRAL_EMPRESA_ID, $gral_empresa->getId(), Criterio::IGUAL);
        }
        if ($fecha_limite) {
            $c->add(VtaFactura::GEN_ATTR_FECHA_EMISION, $fecha_limite, Criterio::MENORIGUAL);
        }

        $c->addTabla(VtaFactura::GEN_TABLA);
        $c->addRealJoin(VtaFacturaTipoEstado::GEN_TABLA, VtaFacturaTipoEstado::GEN_ATTR_ID, VtaFactura::GEN_ATTR_VTA_FACTURA_TIPO_ESTADO_ID);
        $c->addOrden(VtaFactura::GEN_ATTR_FECHA_EMISION, Criterio::_ASC);
        $c->setCriterios();

        $vta_facturas = VtaFactura::getVtaFacturas($p = null, $c);

        // -----------------------------------------------------------------------------
        // Se obtienen ND pendientes
        // -----------------------------------------------------------------------------
        $c = new Criterio();
        $c->add(VtaNotaDebito::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaNotaDebitoTipoEstado::GEN_ATTR_GESTIONABLE, 1, Criterio::IGUAL);

        if ($gral_empresa) {
            $c->add(VtaNotaDebito::GEN_ATTR_GRAL_EMPRESA_ID, $gral_empresa->getId(), Criterio::IGUAL);
        }
        if ($fecha_limite) {
            $c->add(VtaNotaDebito::GEN_ATTR_FECHA_EMISION, $fecha_limite, Criterio::MENORIGUAL);
        }

        $c->addTabla(VtaNotaDebito::GEN_TABLA);
        $c->addRealJoin(VtaNotaDebitoTipoEstado::GEN_TABLA, VtaNotaDebitoTipoEstado::GEN_ATTR_ID, VtaNotaDebito::GEN_ATTR_VTA_NOTA_DEBITO_TIPO_ESTADO_ID);
        $c->addOrden(VtaNotaDebito::GEN_ATTR_FECHA_EMISION, Criterio::_ASC);
        $c->setCriterios();

        $vta_nota_debitos = VtaNotaDebito::getVtaNotaDebitos($p = null, $c);

        // -----------------------------------------------------------------------------
        // Se obtienen ajustes debe pendientes
        // -----------------------------------------------------------------------------
        $c = new Criterio();
        $c->add(VtaAjusteDebe::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaAjusteDebeTipoEstado::GEN_ATTR_GESTIONABLE, 1, Criterio::IGUAL);

        if ($gral_empresa) {
            $c->add(VtaAjusteDebe::GEN_ATTR_GRAL_EMPRESA_ID, $gral_empresa->getId(), Criterio::IGUAL);
        }
        if ($fecha_limite) {
            $c->add(VtaAjusteDebe::GEN_ATTR_FECHA_EMISION, $fecha_limite, Criterio::MENORIGUAL);
        }

        $c->addTabla(VtaAjusteDebe::GEN_TABLA);
        $c->addRealJoin(VtaAjusteDebeTipoEstado::GEN_TABLA, VtaAjusteDebeTipoEstado::GEN_ATTR_ID, VtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID);
        $c->addOrden(VtaAjusteDebe::GEN_ATTR_FECHA_EMISION, Criterio::_ASC);
        $c->setCriterios();

        $vta_ajuste_debes = VtaAjusteDebe::getVtaAjusteDebes($p = null, $c);
        
        $vta_comprobantes = array_merge($vta_facturas, $vta_nota_debitos, $vta_ajuste_debes);
        return $vta_comprobantes;
    }
    
    static function getInfoBtnVolver($indice = false) {
        $array = array(
            'url' => 'cli_cliente_gestion.php',
            'label' => 'Volver al Listado',
        );

        return ($indice) ? $array[$indice] : $array;
    } 
    
    /**
     * Meetodo que devuelve la lista de precio para el cli cliente
     * @return type
     */
    public function getInsTipoListaPrecioParaCliente() {

        $ins_tipo_lista_precio = $this->getInsTipoListaPrecioXCliClienteInsTipoListaPrecio();
        if ($ins_tipo_lista_precio) {
            // ------------------------------------------------------------------
            // si tiene lista de precio personalizada
            // ------------------------------------------------------------------
            return $ins_tipo_lista_precio;
        } else {
            // ------------------------------------------------------------------
            // si tiene lista de precio heredada por categoria
            // ------------------------------------------------------------------
            $cli_categoria = $this->getCliCategoria();
            $ins_tipo_lista_precio = $cli_categoria->getInsTipoListaPrecioXCliCategoriaInsTipoListaPrecio();
            if ($ins_tipo_lista_precio) {
                return $ins_tipo_lista_precio;
            }
        }

        // ----------------------------------------------------------------------
        // en el caso que no tenga lista de precio asignada
        // ----------------------------------------------------------------------
        $ins_tipo_lista_precio = InsTipoListaPrecio::getOxCodigo(InsTipoListaPrecio::TIPO_PRECIO_MAYORISTA);

        return $ins_tipo_lista_precio;
    }
    
    /**
     * Metodo que inicializa un cli cliente tienda a partir de un cli cliente
     * @return \CliClienteTienda
     */
    public function setInicializarCliClienteTienda($cli_centro_pedido, $clave = '') {   
        
        $cli_cliente_tienda = $cli_centro_pedido->getCliClienteTienda();
        
        // ----------------------------------------------------------------------
        // si no hay cli cliente tienda para el cliente, se inicializa
        // ----------------------------------------------------------------------
        if (!$cli_cliente_tienda) {
            $cli_cliente_tienda = new CliClienteTienda();
            $cli_cliente_tienda->setCliClienteId($this->getId());
            $cli_cliente_tienda->setCliCentroPedidoId($cli_centro_pedido->getId());
            $cli_cliente_tienda->setDescripcion(trim($this->getDescripcion()));
            $cli_cliente_tienda->setApellido(trim($this->getDescripcion()));
            $cli_cliente_tienda->setNombre($cli_centro_pedido->getDescripcion());
            $cli_cliente_tienda->setGralTipoDocumentoId($this->getGralTipoDocumentoId());
            $cli_cliente_tienda->setGralTipoPersoneriaId($this->getGralTipoPersoneriaId());
            $cli_cliente_tienda->setGralCondicionIvaId($this->getGralCondicionIvaId());
            $cli_cliente_tienda->setRazonSocial(trim($this->getRazonSocial()));
            $cli_cliente_tienda->setCuit($this->getCuit());
            $cli_cliente_tienda->setDomicilioLegal(trim($this->getDomicilioLegal()));
            $cli_cliente_tienda->setTelefono(trim($this->getTelefono()));
            $cli_cliente_tienda->setTelefonoWhatsapp(trim($this->getTelefonoWhatsapp()));
            $cli_cliente_tienda->setEmail(strtolower(trim($this->getEmail())));
            $cli_cliente_tienda->setCodigoPostal($this->getCodigoPostal());
            $cli_cliente_tienda->setGeoLocalidadId($this->getGeoLocalidadId());
            $cli_cliente_tienda->setUsuario($this->getCuit());
            $cli_cliente_tienda->setEstado(1);
            $cli_cliente_tienda->save();
            
            // ------------------------------------------------------------------
            // se setea el codigo
            // ------------------------------------------------------------------
            $cli_cliente_tienda->setCodigo(CliClienteTienda::PREFIJO_CLIENTE . str_pad($cli_cliente_tienda->getId(), 8, 0, STR_PAD_LEFT));
            $cli_cliente_tienda->save();
            
            // ------------------------------------------------------------------
            // se setea nueva clave para el cliente tienda
            // ------------------------------------------------------------------
            $cli_cliente_tienda->setNuevaClave($clave);
        }
        return $cli_cliente_tienda;
    }
    
    /**
     * 
     */
    public function getArrVentasEnPeriodo($txt_filtro_desde, $txt_filtro_hasta, $cmb_busqueda, $cmb_gral_sucursal_id, $cmb_vendedor_id, $solo_propias, $vta_presupuesto_tipo_emision_id) {
        
        // ---------------------------------------------------------------------
        // inicializamos valores del array
        // ---------------------------------------------------------------------
        $arr_ventas_en_periodo[$this->getId()]['CLI_CLIENTE_ID'] = $this->getId();
        $arr_ventas_en_periodo[$this->getId()]['CLI_CLIENTE_DESCRIPCION'] = $this->getDescripcion();
        $arr_ventas_en_periodo[$this->getId()]['CANTIDAD_VENTAS'] = 0;
        $arr_ventas_en_periodo[$this->getId()]['CANTIDAD_OVS'] = 0;
        $arr_ventas_en_periodo[$this->getId()]['IMPORTE_TOTAL'] = 0;
        $arr_ventas_en_periodo[$this->getId()]['ULTIMA_FECHA_VENTA_EN_RANGO_BUSCADO'] = false;
        $arr_ventas_en_periodo[$this->getId()]['ULTIMA_FECHA_VENTA'] = false;
        $arr_ventas_en_periodo[$this->getId()]['ULTIMA_FECHA_VENTA_DIFERENCIA_DIAS'] = -1;
        $arr_ventas_en_periodo[$this->getId()]['ULTIMA_FECHA_VENTA_DIFERENCIA_SEMANAS'] = -1;
        $arr_ventas_en_periodo[$this->getId()]['CLIENTE_TIPO_ESTADO_VENTA'] = 0;
        $arr_ventas_en_periodo[$this->getId()]['CLIENTE_TIPO_ESTADO_VENTA_DESCRIPCION'] = '';
        $arr_presupuestos_ids = array();
        
        // ---------------------------------------------------------------------
        // 1° consulta - Obtenemos los clientes entre el rango de fecha consultado
        // ---------------------------------------------------------------------
        $criterio = new Criterio();
        $criterio->addDistinct(true);
        $criterio->add(CliCliente::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        
        if($solo_propias){
            if($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_SUCURSAL){
                $criterio->add(GralSucursal::GEN_ATTR_ID, $cmb_gral_sucursal_id, Criterio::IGUAL);                
            }elseif($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_VENDEDOR){
                $criterio->add(VtaVendedor::GEN_ATTR_ID, $cmb_vendedor_id, Criterio::IGUAL);                
            }
        }

        if($vta_presupuesto_tipo_emision_id){
            $criterio->add(VtaPresupuestoTipoEmision::GEN_ATTR_ID, $vta_presupuesto_tipo_emision_id, Criterio::IGUAL);
        }
        
        if ($txt_filtro_desde != '') {
            $criterio->add(VtaOrdenVenta::GEN_ATTR_CREADO, $txt_filtro_desde . ' 00:00:00', Criterio::MAYORIGUAL);
        }

        if ($txt_filtro_hasta != '') {
            $criterio->add(VtaOrdenVenta::GEN_ATTR_CREADO, $txt_filtro_hasta . ' 23:59:59', Criterio::MENORIGUAL);
        }

        $criterio->addTabla(VtaOrdenVenta::GEN_TABLA);
        $criterio->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID);
        $criterio->addRealJoin(VtaPresupuestoTipoEmision::GEN_TABLA, VtaPresupuestoTipoEmision::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_VTA_PRESUPUESTO_TIPO_EMISION_ID);
        $criterio->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_VTA_VENDEDOR_ID);
        $criterio->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_ID);
        $criterio->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID);
        $criterio->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
        $criterio->setCriterios();
        
        $vta_orden_ventas_en_rango = VtaOrdenVenta::getVtaOrdenVentas(null, $criterio);
        //Gral::prr($vta_orden_ventas);
        //exit;
        
        // ---------------------------------------------------------------------
        // 2° consulta - Obtenemos la ultima fecha de compra de un cliente que NO esta entre el rango de fecha
        // ---------------------------------------------------------------------
        $criterio = new Criterio();
        $criterio->addDistinct(true);
        $criterio->add(CliCliente::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        
        if($solo_propias){
            if($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_SUCURSAL){
                $criterio->add(GralSucursal::GEN_ATTR_ID, $cmb_gral_sucursal_id, Criterio::IGUAL);                
            }elseif($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_VENDEDOR){
                $criterio->add(VtaVendedor::GEN_ATTR_ID, $cmb_vendedor_id, Criterio::IGUAL);                
            }
        }

        if($vta_presupuesto_tipo_emision_id){
            $criterio->add(VtaPresupuestoTipoEmision::GEN_ATTR_ID, $vta_presupuesto_tipo_emision_id, Criterio::IGUAL);
        }
        
        if ($txt_filtro_desde != '') {
            //$criterio->add(VtaOrdenVenta::GEN_ATTR_CREADO, $txt_filtro_desde . ' 23:59:59', Criterio::MENOR);
        }

        $criterio->addTabla(VtaOrdenVenta::GEN_TABLA);
        $criterio->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID);
        $criterio->addRealJoin(VtaPresupuestoTipoEmision::GEN_TABLA, VtaPresupuestoTipoEmision::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_VTA_PRESUPUESTO_TIPO_EMISION_ID);
        $criterio->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_VTA_VENDEDOR_ID);
        $criterio->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID);
        $criterio->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
        $criterio->setCriterios();
        
        $vta_orden_ventas_anteriores = VtaOrdenVenta::getVtaOrdenVentas(null, $criterio);
        //Gral::prr($vta_orden_ventas_anteriores);
        //exit;
        
        foreach($vta_orden_ventas_en_rango as $vta_orden_venta){
            $vta_orden_venta_importe = $vta_orden_venta->getResumenComprobante();
            $importe_total = $vta_orden_venta_importe->getImporteTotal();
            
            $fecha_ov = substr($vta_orden_venta->getCreado(), 0, 10);
            $cantidad_dias = Date::getDiferenciaTiempo($caso = 'd', $fecha_ov, date('Y-m-d'));

            if(!array_key_exists($vta_orden_venta->getVtaPresupuestoId(), $arr_presupuestos_ids)){
                $arr_presupuestos_ids[$vta_orden_venta->getVtaPresupuestoId()] = $vta_orden_venta->getVtaPresupuestoId(); 
                $arr_ventas_en_periodo[$this->getId()]['CANTIDAD_VENTAS']++;
            }
            
            $arr_ventas_en_periodo[$this->getId()]['CANTIDAD_OVS']++;
            $arr_ventas_en_periodo[$this->getId()]['IMPORTE_TOTAL']+=$importe_total;            
            if($fecha_ov >= $txt_filtro_desde && $fecha_ov <= $txt_filtro_hasta){
                $arr_ventas_en_periodo[$this->getId()]['ULTIMA_FECHA_VENTA_EN_RANGO_BUSCADO'] = $fecha_ov;
            }
            $arr_ventas_en_periodo[$this->getId()]['ULTIMA_FECHA_VENTA'] = $fecha_ov;            
            $arr_ventas_en_periodo[$this->getId()]['ULTIMA_FECHA_VENTA_DIFERENCIA_DIAS'] = $cantidad_dias;            
            $arr_ventas_en_periodo[$this->getId()]['ULTIMA_FECHA_VENTA_DIFERENCIA_SEMANAS'] = floor($cantidad_dias / 7);
        }
        
        foreach($vta_orden_ventas_anteriores as $vta_orden_venta){
            $fecha_ov = substr($vta_orden_venta->getCreado(), 0, 10);
            $cantidad_dias = Date::getDiferenciaTiempo($caso = 'd', $fecha_ov, date('Y-m-d'));
            
            //if(trim($arr_ventas_en_periodo[$this->getId()]['ULTIMA_FECHA_VENTA']) === false){
                $arr_ventas_en_periodo[$this->getId()]['ULTIMA_FECHA_VENTA'] = $fecha_ov;
                $arr_ventas_en_periodo[$this->getId()]['ULTIMA_FECHA_VENTA_DIFERENCIA_DIAS'] = $cantidad_dias;
                $arr_ventas_en_periodo[$this->getId()]['ULTIMA_FECHA_VENTA_DIFERENCIA_SEMANAS'] = floor($cantidad_dias / 7);
            //}
        }
        
        $cli_cliente_tipo_estado_venta = $this->getCliClienteTipoEstadoVenta();
        if($cli_cliente_tipo_estado_venta){
            $arr_ventas_en_periodo[$this->getId()]['CLIENTE_TIPO_ESTADO_VENTA'] = $cli_cliente_tipo_estado_venta->getId();
            $arr_ventas_en_periodo[$this->getId()]['CLIENTE_TIPO_ESTADO_VENTA_DESCRIPCION'] = $cli_cliente_tipo_estado_venta->getDescripcion();
            $arr_ventas_en_periodo[$this->getId()]['CLIENTE_TIPO_ESTADO_VENTA_COLOR'] = $cli_cliente_tipo_estado_venta->getColor();
            $arr_ventas_en_periodo[$this->getId()]['CLIENTE_TIPO_ESTADO_VENTA_SECUNDARIO'] = $cli_cliente_tipo_estado_venta->getColorSecundario();
        }
        
        /*
        if($arr_ventas_en_periodo[$this->getId()]['ULTIMA_FECHA_VENTA_DIFERENCIA_DIAS'] >= 0 && $arr_ventas_en_periodo[$this->getId()]['ULTIMA_FECHA_VENTA_DIFERENCIA_DIAS'] <= 30){
            $arr_ventas_en_periodo[$this->getId()]['CLIENTE_TIPO_ESTADO_VENTA'] = 1;
            $arr_ventas_en_periodo[$this->getId()]['CLIENTE_TIPO_ESTADO_VENTA_DESCRIPCION'] = 'Activo';
        }elseif($arr_ventas_en_periodo[$this->getId()]['ULTIMA_FECHA_VENTA_DIFERENCIA_DIAS'] > 30 && $arr_ventas_en_periodo[$this->getId()]['ULTIMA_FECHA_VENTA_DIFERENCIA_DIAS'] <= 60){
            $arr_ventas_en_periodo[$this->getId()]['CLIENTE_TIPO_ESTADO_VENTA'] = 2;
            $arr_ventas_en_periodo[$this->getId()]['CLIENTE_TIPO_ESTADO_VENTA_DESCRIPCION'] = 'Semi Activos';
        }elseif($arr_ventas_en_periodo[$this->getId()]['ULTIMA_FECHA_VENTA_DIFERENCIA_DIAS'] > 60 && $arr_ventas_en_periodo[$this->getId()]['ULTIMA_FECHA_VENTA_DIFERENCIA_DIAS'] <= 90){
            $arr_ventas_en_periodo[$this->getId()]['CLIENTE_TIPO_ESTADO_VENTA'] = 3;
            $arr_ventas_en_periodo[$this->getId()]['CLIENTE_TIPO_ESTADO_VENTA_DESCRIPCION'] = 'Inactivos';
        }elseif($arr_ventas_en_periodo[$this->getId()]['ULTIMA_FECHA_VENTA_DIFERENCIA_DIAS'] > 90 && $arr_ventas_en_periodo[$this->getId()]['ULTIMA_FECHA_VENTA_DIFERENCIA_DIAS'] <= 120){
            $arr_ventas_en_periodo[$this->getId()]['CLIENTE_TIPO_ESTADO_VENTA'] = 4;
            $arr_ventas_en_periodo[$this->getId()]['CLIENTE_TIPO_ESTADO_VENTA_DESCRIPCION'] = 'Zona Critica';
        }elseif($arr_ventas_en_periodo[$this->getId()]['ULTIMA_FECHA_VENTA_DIFERENCIA_DIAS'] > 120){
            $arr_ventas_en_periodo[$this->getId()]['CLIENTE_TIPO_ESTADO_VENTA'] = 5;
            $arr_ventas_en_periodo[$this->getId()]['CLIENTE_TIPO_ESTADO_VENTA_DESCRIPCION'] = 'Baja';
        }else{
            $arr_ventas_en_periodo[$this->getId()]['CLIENTE_TIPO_ESTADO_VENTA'] = 0;
            $arr_ventas_en_periodo[$this->getId()]['CLIENTE_TIPO_ESTADO_VENTA_DESCRIPCION'] = 'Sin Ventas';
        }
        */
        
        return $arr_ventas_en_periodo;
    }
    
    /*
     * Autor: Baez Julian
     * Fecha: 28/10/2022 13:00
     */
    static function getArrVentasEnPeriodo_2($cmb_busqueda, $cli_clientes, $widget_cmb_vta_vendedor_id, $widget_cmb_gral_sucursal_id, $txt_filtro_desde, $txt_filtro_hasta, $solo_propias, $vta_presupuesto_tipo_emision_id, $cmb_ordenamiento, $cmb_ordenamiento_modo) {
        
        // -----------------------------------------------------------------
        // Inicializamos Valores de Array
        // -----------------------------------------------------------------
        $arr_ventas_en_periodo['RESUMEN']['TOTAL_IMPORTE_VENTAS'] = 0;
        $arr_ventas_en_periodo['RESUMEN']['TOTAL_SALDO_DEUDOR_CLIENTES'] = 0;
        $arr_ventas_en_periodo['RESUMEN']['CANTIDAD_VENTAS'] = 0;
        $arr_ventas_en_periodo['RESUMEN']['CLIENTES_VINCULADOS'] = 0;
        $arr_ventas_en_periodo['RESUMEN']['CLIENTES_VENDIDOS'] = 0;
        $arr_ventas_en_periodo['RESUMEN']['CLIENTES_NO_VENDIDOS'] = 0;
        
        $cli_cliente_tipo_estado_ventas = CliClienteTipoEstadoVenta::getCliClienteTipoEstadoVentas(null, null, true, array(array('campo' => 'orden', 'orden' => 'asc')));
        //Gral::prr($cli_cliente_tipo_estado_ventas);
        $cli_cliente_periodicidad_gestions = CliClientePeriodicidadGestion::getCliClientePeriodicidadGestions(null, null, true, array(array('campo' => 'orden', 'orden' => 'asc')));
        //Gral::prr($cli_cliente_periodicidad_gestions);
        //exit;
        
        foreach ($cli_cliente_tipo_estado_ventas as $cli_cliente_tipo_estado_venta) {
            $arr_ventas_en_periodo['RESUMEN']['CLIENTE_TIPO_ESTADO_VENTA'][$cli_cliente_tipo_estado_venta->getCodigo()] = 0;
        }
        foreach ($cli_cliente_periodicidad_gestions as $cli_cliente_periodicidad_gestion) {
            $arr_ventas_en_periodo['RESUMEN']['CLIENTE_PERIODICIDAD_GESTION'][$cli_cliente_periodicidad_gestion->getCodigo()] = 0;
        }
        
        // ---------------------------------------------------------------------
        // Inicializamos Totalizadores
        // ---------------------------------------------------------------------
        $resumen_total_importe_ventas = 0;
        $resumen_total_saldo_deudor_clientes = 0;
        $resumen_cantidad_ventas = 0;
        $resumen_clientes_vinculados = 0;
        $resumen_clientes_vendidos = 0;
        $resumen_clientes_no_vendidos = 0;
        
        foreach ($cli_clientes as $cli_cliente) {
            // -----------------------------------------------------------------
            // Inicializamos Valores de Array
            // -----------------------------------------------------------------
            $arr_presupuestos_ids = array();

            $arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['CLI_CLIENTE_ID'] = 0;
            $arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['CLI_CLIENTE_DESCRIPCION'] = '';
            $arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['CANTIDAD_VENTAS'] = 0;
            $arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['CANTIDAD_OVS'] = 0;
            $arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['IMPORTE_TOTAL'] = 0;
            $arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['ULTIMA_FECHA_VENTA_EN_RANGO_BUSCADO'] = false;
            $arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['ULTIMA_FECHA_VENTA'] = false;
            $arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['ULTIMA_FECHA_VENTA_DIFERENCIA_DIAS'] = -1;
            $arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['ULTIMA_FECHA_VENTA_DIFERENCIA_SEMANAS'] = -1;
            $arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['CLIENTE_TIPO_ESTADO_VENTA_CODIGO'] = '';
            $arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['SALDO_DEUDOR_CLIENTE'] = 0;
            
            // -----------------------------------------------------------------
            // 1° Consulta - Obtenemos los clientes entre el rango de fecha consultado
            // -----------------------------------------------------------------
            $criterio = new Criterio();
            $criterio->addDistinct(true);
            $criterio->add(CliCliente::GEN_ATTR_ID, $cli_cliente->getId(), Criterio::IGUAL);
            if($solo_propias){
                if($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_VENDEDOR){
                    $criterio->add(VtaVendedor::GEN_ATTR_ID, $widget_cmb_vta_vendedor_id, Criterio::IGUAL);                    
                }else{
                    $criterio->add(GralSucursal::GEN_ATTR_ID, $widget_cmb_gral_sucursal_id, Criterio::IGUAL);                    
                }
            }
            if($vta_presupuesto_tipo_emision_id){
                $criterio->add(VtaPresupuestoTipoEmision::GEN_ATTR_ID, $vta_presupuesto_tipo_emision_id, Criterio::IGUAL);
            }
            if ($txt_filtro_desde != '') {
                $criterio->add(VtaOrdenVenta::GEN_ATTR_CREADO, $txt_filtro_desde . ' 00:00:00', Criterio::MAYORIGUAL);
            }
            if ($txt_filtro_hasta != '') {
                $criterio->add(VtaOrdenVenta::GEN_ATTR_CREADO, $txt_filtro_hasta . ' 23:59:59', Criterio::MENORIGUAL);
            }
            $criterio->addTabla(VtaOrdenVenta::GEN_TABLA);
            $criterio->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID);
            $criterio->addRealJoin(VtaPresupuestoTipoEmision::GEN_TABLA, VtaPresupuestoTipoEmision::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_VTA_PRESUPUESTO_TIPO_EMISION_ID);
            $criterio->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID);
            $criterio->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_VTA_VENDEDOR_ID, 'LEFT JOIN');
            $criterio->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_ID, 'LEFT JOIN');
            $criterio->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
            $criterio->setCriterios();
            $vta_orden_ventas_en_rango = VtaOrdenVenta::getVtaOrdenVentas(null, $criterio);
            //Gral::prr($vta_orden_ventas_en_rango);
            //exit;

            // -----------------------------------------------------------------
            // 2° Consulta - Obtenemos la ultima fecha de compra de un cliente que NO esta entre el rango de fecha
            // -----------------------------------------------------------------
            $criterio = new Criterio();
            $criterio->addDistinct(true);
            $criterio->add(CliCliente::GEN_ATTR_ID, $cli_cliente->getId(), Criterio::IGUAL);
            if($solo_propias){
                if($cmb_busqueda == GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_VENDEDOR){
                    $criterio->add(VtaVendedor::GEN_ATTR_ID, $widget_cmb_vta_vendedor_id, Criterio::IGUAL);                    
                }else{
                    $criterio->add(GralSucursal::GEN_ATTR_ID, $widget_cmb_gral_sucursal_id, Criterio::IGUAL);                    
                }
            }
            if($vta_presupuesto_tipo_emision_id){
                $criterio->add(VtaPresupuestoTipoEmision::GEN_ATTR_ID, $vta_presupuesto_tipo_emision_id, Criterio::IGUAL);
            }
            if ($txt_filtro_desde != '') {
                //$criterio->add(VtaOrdenVenta::GEN_ATTR_CREADO, $txt_filtro_desde . ' 23:59:59', Criterio::MENOR);
            }
            $criterio->addTabla(VtaOrdenVenta::GEN_TABLA);
            $criterio->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID);
            $criterio->addRealJoin(VtaPresupuestoTipoEmision::GEN_TABLA, VtaPresupuestoTipoEmision::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_VTA_PRESUPUESTO_TIPO_EMISION_ID);
            $criterio->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID);
            $criterio->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_VTA_VENDEDOR_ID, 'LEFT JOIN');
            $criterio->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_ID, 'LEFT JOIN');
            $criterio->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
            $criterio->setCriterios();
            $vta_orden_ventas_anteriores = VtaOrdenVenta::getVtaOrdenVentas(null, $criterio);
            //Gral::prr($vta_orden_ventas_anteriores);
            //exit;
            
            // -----------------------------------------------------------------
            // Settear Valores de Array
            // -----------------------------------------------------------------
            $arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['CLI_CLIENTE_ID'] = $cli_cliente->getId();
            $arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['CLI_CLIENTE_DESCRIPCION'] = $cli_cliente->getDescripcion();
            
            foreach($vta_orden_ventas_en_rango as $vta_orden_venta){
                $vta_orden_venta_importe = $vta_orden_venta->getResumenComprobante();
                $importe_total = $vta_orden_venta_importe->getImporteTotal();
                $fecha_ov = substr($vta_orden_venta->getCreado(), 0, 10);
                $cantidad_dias = Date::getDiferenciaTiempo($caso = 'd', $fecha_ov, date('Y-m-d'));

                if(!array_key_exists($vta_orden_venta->getVtaPresupuestoId(), $arr_presupuestos_ids)){
                    $arr_presupuestos_ids[$vta_orden_venta->getVtaPresupuestoId()] = $vta_orden_venta->getVtaPresupuestoId(); 
                    $arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['CANTIDAD_VENTAS']++;
                    $resumen_cantidad_ventas++;
                }

                $arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['CANTIDAD_OVS']++;
                $arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['IMPORTE_TOTAL']+=$importe_total;
                if($fecha_ov >= $txt_filtro_desde && $fecha_ov <= $txt_filtro_hasta){
                    $arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['ULTIMA_FECHA_VENTA_EN_RANGO_BUSCADO'] = $fecha_ov;
                }
                $arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['ULTIMA_FECHA_VENTA'] = $fecha_ov;            
                $arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['ULTIMA_FECHA_VENTA_DIFERENCIA_DIAS'] = $cantidad_dias;            
                $arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['ULTIMA_FECHA_VENTA_DIFERENCIA_SEMANAS'] = floor($cantidad_dias / 7);
                
                $resumen_total_importe_ventas = $resumen_total_importe_ventas + $importe_total;
            }
            
            foreach($vta_orden_ventas_anteriores as $vta_orden_venta){
                $fecha_ov = substr($vta_orden_venta->getCreado(), 0, 10);
                $cantidad_dias = Date::getDiferenciaTiempo($caso = 'd', $fecha_ov, date('Y-m-d'));
                
                $arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['ULTIMA_FECHA_VENTA'] = $fecha_ov;
                $arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['ULTIMA_FECHA_VENTA_DIFERENCIA_DIAS'] = $cantidad_dias;
                $arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['ULTIMA_FECHA_VENTA_DIFERENCIA_SEMANAS'] = floor($cantidad_dias / 7);
            }
            
            $cli_cliente_tipo_estado_venta_codigo = $cli_cliente->getCliClienteTipoEstadoVenta()->getCodigo();
            $cli_cliente_periodicidad_gestion_codigo = $cli_cliente->getCliClientePeriodicidadGestion()->getCodigo();
            $arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['CLIENTE_TIPO_ESTADO_VENTA_CODIGO'] = $cli_cliente_tipo_estado_venta_codigo;
            $arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['CLIENTE_PERIODICIDAD_GESTION'] = $cli_cliente_periodicidad_gestion_codigo;
            
            $arr_ventas_en_periodo['RESUMEN']['CLIENTE_TIPO_ESTADO_VENTA'][$cli_cliente_tipo_estado_venta_codigo]++;
            $arr_ventas_en_periodo['RESUMEN']['CLIENTE_PERIODICIDAD_GESTION'][$cli_cliente_periodicidad_gestion_codigo]++;
            
            // -----------------------------------------------------------------
            // Se identifica si el cliente tuvo o no ventas en el periodo indicado
            // -----------------------------------------------------------------
            if($arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['CANTIDAD_VENTAS'] > 0){
                $resumen_clientes_vendidos++;
            }
            
            //$saldo_deudor = $cli_cliente->getResumenCuentaCliente()->getCuentaActual();
            //$arr_ventas_en_periodo['DETALLE'][$cli_cliente->getId()]['SALDO_DEUDOR_CLIENTE'] = $saldo_deudor;
            //$resumen_total_saldo_deudor_clientes = $resumen_total_saldo_deudor_clientes + $saldo_deudor;
        }
        
        // ---------------------------------------------------------------------
        // Settear Valores Totalizadores de Array
        // ---------------------------------------------------------------------
        $resumen_clientes_vinculados = count($cli_clientes);
        $resumen_clientes_no_vendidos = $resumen_clientes_vinculados - $resumen_clientes_vendidos;
        
        $arr_ventas_en_periodo['RESUMEN']['TOTAL_IMPORTE_VENTAS'] = $resumen_total_importe_ventas;
        $arr_ventas_en_periodo['RESUMEN']['TOTAL_SALDO_DEUDOR_CLIENTES'] = $resumen_total_saldo_deudor_clientes;
        $arr_ventas_en_periodo['RESUMEN']['CANTIDAD_VENTAS'] = $resumen_cantidad_ventas;
        $arr_ventas_en_periodo['RESUMEN']['CLIENTES_VINCULADOS'] = $resumen_clientes_vinculados;
        $arr_ventas_en_periodo['RESUMEN']['CLIENTES_VENDIDOS'] = $resumen_clientes_vendidos;
        $arr_ventas_en_periodo['RESUMEN']['CLIENTES_NO_VENDIDOS'] = $resumen_clientes_no_vendidos;
        
        // ---------------------------------------------------------------------
        // Ordenamiento de Array (Indice DETALLE)
        // ---------------------------------------------------------------------
        if ($cmb_ordenamiento == GralSiNo::GRAL_SINO_VENDEDOR_ALFABETICO) {
            $arr_ventas_en_periodo['DETALLE'] = Gral::getOrdenarArrayUsort($arr_ventas_en_periodo['DETALLE'], $orden = 'CLI_CLIENTE_DESCRIPCION', $cmb_ordenamiento_modo);
        }
        if ($cmb_ordenamiento == GralSiNo::GRAL_SINO_VENDEDOR_CANTIDAD_VENTAS) {
            $arr_ventas_en_periodo['DETALLE'] = Gral::getOrdenarArrayUsort($arr_ventas_en_periodo['DETALLE'], $orden = 'CANTIDAD_VENTAS', $cmb_ordenamiento_modo);
        }
        if ($cmb_ordenamiento == GralSiNo::GRAL_SINO_VENDEDOR_IMPORTE_TOTAL) {
            $arr_ventas_en_periodo['DETALLE'] = Gral::getOrdenarArrayUsort($arr_ventas_en_periodo['DETALLE'], $orden = 'IMPORTE_TOTAL', $cmb_ordenamiento_modo);
        }
        if ($cmb_ordenamiento == GralSiNo::GRAL_SINO_VENDEDOR_DIFERENCIA_DIAS) {
            $arr_ventas_en_periodo['DETALLE'] = Gral::getOrdenarArrayUsort($arr_ventas_en_periodo['DETALLE'], $orden = 'ULTIMA_FECHA_VENTA_DIFERENCIA_DIAS', $cmb_ordenamiento_modo);
        }
        
        //Gral::prr($arr_ventas_en_periodo);
        //exit;
        
        return $arr_ventas_en_periodo;
    }
    
    public function getVtaOrdenVentasUltimasActivas($cantidad = 10, $fecha_desde = false, $fecha_hasta = false) {
        
        // ---------------------------------------------------------------------
        // se obtienen ultimas ordenes de venta del cliente
        // ---------------------------------------------------------------------
        $criterio = new Criterio();
        $criterio->addDistinct(true);
        $criterio->add(VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID, $this->getId(), Criterio::IGUAL);
        $criterio->add(VtaOrdenVentaTipoEstado::GEN_ATTR_CODIGO, VtaOrdenVentaTipoEstado::TIPO_CANCELADO, Criterio::DISTINTO);
        if($fecha_desde){
            $criterio->add(VtaOrdenVenta::GEN_ATTR_CREADO, $fecha_desde.' 00:00:00', Criterio::MAYORIGUAL);            
        }
        if($fecha_hasta){
            $criterio->add(VtaOrdenVenta::GEN_ATTR_CREADO, $fecha_hasta.' 00:00:00', Criterio::MENORIGUAL);            
        }
        $criterio->addTabla(VtaOrdenVenta::GEN_TABLA);
        $criterio->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID);
        $criterio->addRealJoin(VtaOrdenVentaTipoEstado::GEN_TABLA, VtaOrdenVentaTipoEstado::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID);
        $criterio->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_DESC);
        $criterio->setCriterios();
        
        $p = new Paginador($cantidad, 1);
        
        $vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas($p, $criterio);
        
        return $vta_orden_ventas;
    }
    
    /*
     * Autor: Baez Julian
     * Fecha: 9/1/2023 13:00
     */
    public function getUltimoVtaPresupuestoAprobado($fecha_hasta = false){
        $criterio = new Criterio();
        $criterio->addDistinct(true);
        $criterio->add(CliCliente::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        if($fecha_hasta){
            $criterio->add(VtaPresupuesto::GEN_ATTR_FECHA, $fecha_hasta, Criterio::MENORIGUAL);            
        }
        $criterio->addTabla(VtaPresupuesto::GEN_TABLA);
        $criterio->addRealJoin(VtaPresupuestoTipoEstado::GEN_TABLA, VtaPresupuestoTipoEstado::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_VTA_PRESUPUESTO_TIPO_ESTADO_ID);
        $criterio->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID);
        $criterio->addRealJoin(VtaOrdenVenta::GEN_TABLA, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID); // haya generado alguna OV
        $criterio->addOrden(VtaPresupuesto::GEN_ATTR_FECHA, Criterio::_DESC);
        $criterio->setCriterios();
        
        $p = new Paginador(1, 1);
        
        $vta_presupuestos = VtaPresupuesto::getVtaPresupuestos($p, $criterio);

        foreach($vta_presupuestos as $vta_presupuesto) {
            return $vta_presupuesto;                
        }
        
        return false;
    }
    
    /**
     * 
     */
    public function setActualizarTipoEstadoVenta(){
        // ---------------------------------------------------------------------
        // se actualiza el estado de venta de acuerdo a la fecha de su ultima venta
        // ---------------------------------------------------------------------
        $creado = $this->getCreado();
        $creado_diferencia_dias = Date::getDiferenciaTiempo('d', $creado, date('Y-m-d'));
        Gral::pr($creado, '$creado');
        Gral::pr($creado_diferencia_dias, '$creado_diferencia_dias');

        $vta_presupuesto_aprobado = $this->getUltimoVtaPresupuestoAprobado();
        
        if($creado_diferencia_dias < 90){
            // -----------------------------------------------------------------
            // puede ser lead (no tiene ventas) o prospecto (tiene alguna venta)
            // -----------------------------------------------------------------
            if($vta_presupuesto_aprobado){
                // -------------------------------------------------------------
                // es un prospecto
                // -------------------------------------------------------------
                $cli_cliente_tipo_estado_venta_codigo = CliClienteTipoEstadoVenta::TIPO_ESTADO_PROSPECTO;
            }else{
                // -------------------------------------------------------------
                // es un lead
                // -------------------------------------------------------------
                $cli_cliente_tipo_estado_venta_codigo = CliClienteTipoEstadoVenta::TIPO_ESTADO_LEAD;                
            }
            
        }else{
            // -----------------------------------------------------------------
            // ya ingresa al funnel (embudo) de ventas
            // -----------------------------------------------------------------
            if($vta_presupuesto_aprobado){
                $fecha = $vta_presupuesto_aprobado->getFecha();
                $cantidad_dias = Date::getDiferenciaTiempo($caso = 'd', $fecha, date('Y-m-d'));

                if($cantidad_dias == 0){
                    $fecha_hasta = Date::sumarDias(date('Y-m-d'), -30);
                    $vta_presupuesto_anterior = $this->getUltimoVtaPresupuestoAprobado($fecha_hasta);

                    if(!$vta_presupuesto_anterior){
                        //$cli_cliente_tipo_estado_venta_codigo = CliClienteTipoEstadoVenta::TIPO_ESTADO_NUEVO;            
                        $cli_cliente_tipo_estado_venta_codigo = CliClienteTipoEstadoVenta::TIPO_ESTADO_ACTIVO;
                    }else{
                        $cli_cliente_tipo_estado_venta_codigo = CliClienteTipoEstadoVenta::TIPO_ESTADO_ACTIVO;                    
                    }

                }elseif($cantidad_dias >= 0 && $cantidad_dias <= 30){
                    $cli_cliente_tipo_estado_venta_codigo = CliClienteTipoEstadoVenta::TIPO_ESTADO_ACTIVO;
                }elseif($cantidad_dias > 30 && $cantidad_dias <= 60){
                    $cli_cliente_tipo_estado_venta_codigo = CliClienteTipoEstadoVenta::TIPO_ESTADO_SEMIACTIVO;
                }elseif($cantidad_dias > 60 && $cantidad_dias <= 90){
                    $cli_cliente_tipo_estado_venta_codigo = CliClienteTipoEstadoVenta::TIPO_ESTADO_INACTIVO;
                }elseif($cantidad_dias > 90 && $cantidad_dias <= 120){
                    $cli_cliente_tipo_estado_venta_codigo = CliClienteTipoEstadoVenta::TIPO_ESTADO_ZONA_CRITICA;
                }elseif($cantidad_dias > 120){
                    $cli_cliente_tipo_estado_venta_codigo = CliClienteTipoEstadoVenta::TIPO_ESTADO_BAJA;
                }
            }else{
                $cli_cliente_tipo_estado_venta_codigo = CliClienteTipoEstadoVenta::TIPO_ESTADO_SIN_VENTAS;
            }
        }
                
        // ---------------------------------------------------------------------
        // se compara el nuevo estado con el actual, si es distinto se agrega nuevo
        // ---------------------------------------------------------------------
        $cli_cliente_tipo_estado_venta_actual = $this->getCliClienteTipoEstadoVenta();
        if($cli_cliente_tipo_estado_venta_codigo != $cli_cliente_tipo_estado_venta_actual->getCodigo()){
            $cli_cliente_estado_venta = $this->setCliClienteEstadoVentaDesdeBackend($cli_cliente_tipo_estado_venta_codigo, 'Actualizacion Automatica');
        }
        
        return $cli_cliente_estado_venta;
    }
    
    /*
     * Autor: Baez Julian
     * Fecha: 12/1/2023 13:00
     */
    static function getArrayDatosExtras($cli_clientes, $cantidad_meses_cerrados) {
        
        $arr_datos_extras_clientes = array();
        
        $fecha_hasta = Date::getUltimaFechaMesAnterior();
        // En la siguiente linea restamos 1, ya que de la fecha actual nos vamos 1 mes atras para el 1er mes cerrado
        $fecha_desde_anio_mes = Date::sumarMeses(substr($fecha_hasta, 0, 7), -($cantidad_meses_cerrados - 1));
        $fecha_desde = Date::getPrimeraFechaDelMes(substr($fecha_desde_anio_mes, 5, 2), substr($fecha_desde_anio_mes, 0, 4));

        $arr_rango = Date::getArrayFechasXRango($fecha_desde, $fecha_hasta, Date::PERIODICIDAD_ANUAL_MENSUAL);
        
        $arr_meses = array();
        foreach($arr_rango as $i => $periodo){
            $arr_periodo = Date::getArrAnioMesDesdePeriodo($periodo);
            $fecha_inicial_mes = $arr_periodo['anio'].'-'.$arr_periodo['mes'].'-'.'01';
            $fecha_final_mes = Date::getUltimaFechaDelMes($arr_periodo['mes'], $arr_periodo['anio']);

            $arr_meses[$periodo]['DESCRIPCION'] = Date::getMesLetras($arr_periodo['mes']);
            $arr_meses[$periodo]['FECHA_INICIAL'] = $fecha_inicial_mes;
            $arr_meses[$periodo]['FECHA_FINAL'] = $fecha_final_mes;
            
            $arr_datos_extras_clientes['DATOS']['PERIODO'][$periodo] = $periodo;
        }
        //Gral::prr($arr_meses);exit;
        
        foreach ($cli_clientes as $cli_cliente) {

            $arr_datos_extras_clientes['DATOS']['CLIENTE'][$cli_cliente->getId()]['DESCRIPCION'] = $cli_cliente->getDescripcion();

            $totalizador_ov = 0;
            $totalizador_importe_ventas = 0;
            $totalizador_cantidad_dias_vendidos = 0;
            $arr_temporal_para_media = array();
            foreach ($arr_meses as $i => $arr_mes) {

                $criterio = new Criterio();
                $criterio->addDistinct(true);
                //VtaOrdenVenta::setAplicarFiltrosDeAlcance($criterio);//aca
                $criterio->add(VtaOrdenVenta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                $criterio->add(VtaOrdenVentaTipoEstado::GEN_ATTR_CODIGO, VtaOrdenVentaTipoEstado::TIPO_CANCELADO, Criterio::DISTINTO);

                if ($arr_mes['FECHA_INICIAL'] != '') {
                    //$criterio->add(VtaOrdenVenta::GEN_ATTR_CREADO, $arr_mes['FECHA_INICIAL'] . ' 00:00:00', Criterio::MAYORIGUAL);
                    $criterio->add(VtaPresupuesto::GEN_ATTR_FECHA, $arr_mes['FECHA_INICIAL'], Criterio::MAYORIGUAL);
                }
                if ($arr_mes['FECHA_FINAL'] != '') {
                    //$criterio->add(VtaOrdenVenta::GEN_ATTR_CREADO, $arr_mes['FECHA_FINAL'] . ' 23:59:59', Criterio::MENORIGUAL);
                    $criterio->add(VtaPresupuesto::GEN_ATTR_FECHA, $arr_mes['FECHA_FINAL'] . ' 23:59:59', Criterio::MENORIGUAL);
                }
                if($cli_cliente->getId()){
                    $criterio->add(CliCliente::GEN_ATTR_ID, $cli_cliente->getId(), Criterio::IGUAL);
                }

                $criterio->addTabla(VtaOrdenVenta::GEN_TABLA);
                $criterio->addRealJoin(VtaOrdenVentaTipoEstado::GEN_TABLA, VtaOrdenVentaTipoEstado::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID, 'LEFT JOIN');
                $criterio->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID, 'LEFT JOIN');
                $criterio->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
                // Con la siguiente linea buscamos traer solamente OV que correspondan a insumos (asi evitar logisticas, entre otros)
                //$criterio->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID);
                $criterio->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, 'LEFT JOIN');
                $criterio->addOrden(VtaOrdenVenta::GEN_ATTR_CREADO, Criterio::_ASC);
                $criterio->setCriterios();
                $vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas(null, $criterio);
                //Gral::prr($vta_orden_ventas);exit;

                $cantidad_ov = 0;
                $importe_ventas = 0;
                $cantidad_dias_vendidos = 0;
                $fecha_anterior_para_total_mes = '1111-11-11';
                foreach ($vta_orden_ventas as $vta_orden_venta) {
                    $vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();

                    $cantidad_ov++;
                    //$importe_total_con_iva = $vta_presupuesto->getImporteTotalPresupuestoConIva(false, 0);
                    $importe_total_con_iva = $vta_orden_venta->getImporteTotalConIva();
                    $importe_ventas = $importe_ventas + $importe_total_con_iva;
                    
                    if ($vta_presupuesto->getFecha() <> $fecha_anterior_para_total_mes) {
                        $cantidad_dias_vendidos++;
                        $fecha_anterior_para_total_mes = $vta_presupuesto->getFecha();
                    }

                    $arr_datos_extras_clientes['DATOS']['CLIENTE'][$cli_cliente->getId()]['PERIODO'][$i][$vta_presupuesto->getFecha()]['CANTIDAD_OV']++;
                    $arr_datos_extras_clientes['DATOS']['CLIENTE'][$cli_cliente->getId()]['PERIODO'][$i][$vta_presupuesto->getFecha()]['IMPORTE_VENTAS']+= $importe_total_con_iva;
                }

                $arr_datos_extras_clientes['DATOS']['CLIENTE'][$cli_cliente->getId()]['PERIODO'][$i]['TOTAL']['CANTIDAD_OV'] = $cantidad_ov;
                $arr_datos_extras_clientes['DATOS']['CLIENTE'][$cli_cliente->getId()]['PERIODO'][$i]['TOTAL']['IMPORTE_VENTAS'] = $importe_ventas;
                $arr_datos_extras_clientes['DATOS']['CLIENTE'][$cli_cliente->getId()]['PERIODO'][$i]['TOTAL']['CANTIDAD_DIAS_VENDIDOS'] = $cantidad_dias_vendidos;
                if ($cantidad_dias_vendidos == 0) {
                    $ventas_cada_cuantos_dias = 0;
                } else {
                    $ventas_cada_cuantos_dias = ceil(22 / $cantidad_dias_vendidos);
                }
                $arr_datos_extras_clientes['DATOS']['CLIENTE'][$cli_cliente->getId()]['PERIODO'][$i]['TOTAL']['VENTAS_CADA_CUANTOS_DIAS'] = $ventas_cada_cuantos_dias;
                $arr_temporal_para_media[] = $ventas_cada_cuantos_dias;

                $totalizador_ov = $totalizador_ov + $cantidad_ov;
                $totalizador_importe_ventas = $totalizador_importe_ventas + $importe_ventas;
                $totalizador_cantidad_dias_vendidos = $totalizador_cantidad_dias_vendidos + $cantidad_dias_vendidos;
            }
            
            $meses_auditados = count($arr_meses);
            $meses_vendidos = 0;
            foreach($arr_datos_extras_clientes['DATOS']['CLIENTE'][$cli_cliente->getId()]['PERIODO'] as $arr_periodo_uno){
                if($arr_periodo_uno['TOTAL']['CANTIDAD_OV'] > 0){
                    $meses_vendidos++;
                }
            }            
            $meses_vendidos_promedio = ($meses_vendidos / $meses_auditados) * 100;

            $arr_datos_extras_clientes['DATOS']['CLIENTE'][$cli_cliente->getId()]['TOTALIZADOR']['CANTIDAD_OV'] = $totalizador_ov;
            $arr_datos_extras_clientes['DATOS']['CLIENTE'][$cli_cliente->getId()]['TOTALIZADOR']['IMPORTE_VENTAS'] = $totalizador_importe_ventas;
            $arr_datos_extras_clientes['DATOS']['CLIENTE'][$cli_cliente->getId()]['TOTALIZADOR']['IMPORTE_VENTAS_PROMEDIO'] = $totalizador_importe_ventas / $meses_auditados;
            $arr_datos_extras_clientes['DATOS']['CLIENTE'][$cli_cliente->getId()]['TOTALIZADOR']['CANTIDAD_DIAS_VENDIDOS'] = $totalizador_cantidad_dias_vendidos;
            $arr_datos_extras_clientes['DATOS']['CLIENTE'][$cli_cliente->getId()]['TOTALIZADOR']['MEDIANA'] = Gral::getMediana($arr_temporal_para_media);
            $arr_datos_extras_clientes['DATOS']['CLIENTE'][$cli_cliente->getId()]['TOTALIZADOR']['MESES_AUDITADOS'] = $meses_auditados;
            $arr_datos_extras_clientes['DATOS']['CLIENTE'][$cli_cliente->getId()]['TOTALIZADOR']['MESES_VENDIDOS'] = $meses_vendidos;
            $arr_datos_extras_clientes['DATOS']['CLIENTE'][$cli_cliente->getId()]['TOTALIZADOR']['MESES_VENDIDOS_PORCENTAJE'] = $meses_vendidos_promedio;
        }
        
        return $arr_datos_extras_clientes;
    }
    
    /**
     * 
     */
    public function getEsClientePotencialParaSeguimiento($arr_datos_extras_cliente){        
        //Gral::prr($arr_datos_extras_cliente);        
        
        $cli_cliente_tipo_gestion = $this->getCliClienteTipoGestion();
        switch($cli_cliente_tipo_gestion->getCodigo()){
            case CliClienteTipoGestion::TIPO_GESTION_AUTOGESTIVO:
                $meses_vendidos_porcentaje = $arr_datos_extras_cliente['TOTALIZADOR']['MESES_VENDIDOS_PORCENTAJE'];
                $importe_ventas_promedio = $arr_datos_extras_cliente['TOTALIZADOR']['IMPORTE_VENTAS_PROMEDIO'];

                if($meses_vendidos_porcentaje >= 50 && $importe_ventas_promedio >= 1500000){ // Guaranies
                    return true;
                }
            break;
        }
        
        return false;
    }
    
    /**
     * 
     */
    public function getRuc(){
        return $this->getCuit();
    }
    
    /**
     * 
     */
    public function getRucNumero(){
        $arr = explode('-', $this->getCuit());
        return $arr[0];
    }
    
    /**
     * 
     */
    public function getRucDV(){
        $arr = explode('-', $this->getCuit());
        return $arr[1];        
    }
    
    /**
     * 
     */
    public function getEmailPrincipalUnico(){
        $email = $this->getEmail();
        $arr_email = explode(";", $email);
        
        $email_principal = trim($arr_email[0]);
        if(Ctrl::esEmail($email_principal)){
            return $email_principal;
        }
        return false;
    }
    
    /**
     * 
     */
    public function getInfoRucDesdeSifen(){
        if($this->getGralTipoDocumento()->getCodigo() == GralTipoDocumento::TIPO_CUIT){
            $ruc_numero = $this->getRucNumero();
            $arr_cliente = Ekuatia::getEkuatiaConsultaRuc(123, $ruc_numero);
            //Gral::prr($arr_cliente);

            $cli_cliente_info_sifen = $this->getCliClienteInfoSifen();
            if(!$cli_cliente_info_sifen){
                $cli_cliente_info_sifen = new CliClienteInfoSifen();
                $cli_cliente_info_sifen->setCliClienteId($this->getId());
                $cli_cliente_info_sifen->setEstado(1);            
            }
            // ---------------------------------------------------------------------
            // dCodRes 0500 No Existe
            // dCodRes 0502 RUC encontrado
            // ---------------------------------------------------------------------

            $dCodRes = $arr_cliente->dCodRes;
            $dMsgRes = $arr_cliente->dMsgRes;

            $cli_cliente_info_sifen->setSifenDcodres($dCodRes);            
            $cli_cliente_info_sifen->setSifenDmsgres($dMsgRes);            

            if($dCodRes == '0502'){ 
                // -----------------------------------------------------------------
                // RUC encontrado
                // -----------------------------------------------------------------
                $xContRUC = $arr_cliente->xContRUC;

                $xContRUC_dRUCCons = $xContRUC->dRUCCons;
                $xContRUC_dRazCons = $xContRUC->dRazCons;
                $xContRUC_dCodEstCons = $xContRUC->dCodEstCons;
                $xContRUC_dDesEstCons = $xContRUC->dDesEstCons;
                $xContRUC_dRUCFactElec = $xContRUC->dRUCFactElec;

                $cli_cliente_info_sifen->setSifenXcontrucDruccons($xContRUC_dRUCCons);
                $cli_cliente_info_sifen->setSifenXcontrucDrazcons($xContRUC_dRazCons);
                $cli_cliente_info_sifen->setSifenXcontrucDcodestcons($xContRUC_dCodEstCons);
                $cli_cliente_info_sifen->setSifenXcontrucDdesestcons($xContRUC_dDesEstCons);
                $cli_cliente_info_sifen->setSifenXcontrucDrucfactelec($xContRUC_dRUCFactElec);

                //$cli_cliente_info_sifen->setDescripcion($xContRUC_dRUCCons.' - '.$xContRUC_dRazCons.' - '.$xContRUC_dDesEstCons);
                $cli_cliente_info_sifen->setCodigo($xContRUC_dRUCCons);

            }elseif($dCodRes == '0500'){ 
                // -----------------------------------------------------------------
                // No Existe en SIFEN
                // -----------------------------------------------------------------
                //$cli_cliente_info_sifen->setDescripcion('RUC '.$ruc_numero.' No Existe en SIFEN');
                $cli_cliente_info_sifen->setCodigo('-1');
            }else{
                // -----------------------------------------------------------------
                // Sin respuesta de SIFEN
                // -----------------------------------------------------------------
                //$cli_cliente_info_sifen->setDescripcion('Sin Respuesta de SIFEN para '.$ruc_numero);
                $cli_cliente_info_sifen->setCodigo('-2');
            }

            $cli_cliente_info_sifen->save();
            //Gral::prr($cli_cliente_info_sifen);
            
            return $cli_cliente_info_sifen;
        }
        return false;
    }
    
    /**
     * 
     */
    public function getHtmlBloqueClienteInfoSifen(){        
        $cli_cliente_info_sifen = $this->getCliClienteInfoSifen();
        include DbConfig::PATH_ABSOLUTO."admin/ajax/modulos/cli_cliente_gestion/html_bloque_cliente_info_sifen.php";
    }

    /**
     * 
     */
    static function getHtmlBloqueClienteNuevoInfoSifen($documento){
        $arr_cliente = Ekuatia::getEkuatiaConsultaRuc(123, $documento);
        //Gral::prr($arr_cliente);
        include DbConfig::PATH_ABSOLUTO."admin/ajax/modulos/cli_cliente_gestion/html_bloque_cliente_nuevo_info_sifen.php";
    }
    
}

?>