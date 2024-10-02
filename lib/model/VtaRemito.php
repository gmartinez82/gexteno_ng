<?php

require_once "base/BVtaRemito.php";

class VtaRemito extends BVtaRemito {

    const PREFIJO_RMT = 'RMT-';
    
    const REMITIR_SIN_STOCK = true;
    const REMITIR_SIN_AUTORIZAR = true;
    const REMITIR_SIMPLIFICADO = false;

    /**
     * Autor: Gustavo Romo.
     * Fecha: 27/09/2017 09:00 hs.
     * Metodo que genera un remito.
     * @return Obj VtaRemito
     */
    static function setInicializarVtaRemito($vta_presupuesto = false, $vta_orden_venta_ids, $vta_orden_venta_cantidads, $cli_cliente_id = 0, $vta_remito_tipo_despacho_id, $cli_centro_recepcion_id, $gral_sucursal_retiro, $nota_interna = '', $nota_publica = '', $cmb_registrar_movimiento_stock = 0, $cmb_pan_panol_id = 0, $cmb_finalizar_remito = 0, $vta_tipo_remito_id, $gral_empresa_id, $vta_punto_venta_id) {
        
        $vta_punto_venta = VtaPuntoVenta::getOxId($vta_punto_venta_id);
        $gral_sucursal = $vta_punto_venta->getGralSucursalXGralSucursalVtaPuntoVenta();
        
        $vta_remito = new VtaRemito();
        $vta_remito->setVtaRemitoTipoDespachoId($vta_remito_tipo_despacho_id);
        
        if ($cli_cliente_id != 0) {
            $vta_remito->setCliClienteId($cli_cliente_id);
        }
        if ($cli_centro_recepcion_id != 0) {
            $vta_remito->setCliCentroRecepcionId($cli_centro_recepcion_id);
            $vta_remito->setEnDomicilio(1);
        }
        if ($gral_sucursal_retiro != 0) {
            $vta_remito->setGralSucursalRetiro($gral_sucursal_retiro);
        }
        if ($vta_presupuesto) {
            $vta_remito->setVtaPresupuestoId($vta_presupuesto->getId());
        }

        $vta_remito->setFecha(Gral::getFechaActual());
        $vta_remito->setObservacion($nota_interna);
        $vta_remito->setNotaPublica($nota_publica);
        
        $vta_remito->setVtaTipoRemitoId($vta_tipo_remito_id);
        $vta_remito->setGralEmpresaId($gral_empresa_id);
        $vta_remito->setVtaPuntoVentaId($vta_punto_venta_id);
        
        $vta_remito->setNumeroSucursal(str_pad($gral_sucursal->getNumero(), DbConfig::VARS_CANTIDAD_NRO_SUCURSAL, 0, STR_PAD_LEFT));
        $vta_remito->setNumeroPuntoVenta(str_pad($vta_punto_venta->getNumero(), DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA_SIMPLE, 0, STR_PAD_LEFT));
        //$vta_remito->setNumeroRemito($numero_remito);
        
        $vta_remito->setEstado(1);
        $vta_remito->save();

        // se setea el codigo del remito
        $vta_remito->setCodigo(self::PREFIJO_RMT . str_pad($vta_remito->getId(), 8, 0, STR_PAD_LEFT));
        $vta_remito->save();

        // se registra el estado inicial del remito
        $vta_remito->setVtaRemitoEstado(VtaRemitoTipoEstado::TIPO_GENERADO, $nota_interna);

        if (!empty($vta_remito->getId())) {
            foreach ($vta_orden_venta_ids as $vta_orden_venta_id) {
                $vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
                $persona_descripcion = $vta_orden_venta->getPersonaDescripcion();

                if (!$vta_orden_venta->getVtaOrdenVentaEstadoEnRemito()) {
                    $vta_orden_venta->setVtaOrdenVentaEstadoRemision(VtaOrdenVentaTipoEstadoRemision::TIPO_EN_REMITO);
                }

                $vta_remito_vta_orden_venta = new VtaRemitoVtaOrdenVenta();
                $vta_remito_vta_orden_venta->setDescripcion($vta_orden_venta->getDescripcion());
                $vta_remito_vta_orden_venta->setVtaRemitoId($vta_remito->getId());
                $vta_remito_vta_orden_venta->setVtaOrdenVentaId($vta_orden_venta->getId());
                $vta_remito_vta_orden_venta->setInsInsumoId($vta_orden_venta->getInsInsumoId());
                $vta_remito_vta_orden_venta->setCantidad($vta_orden_venta_cantidads[$vta_orden_venta->getId()]);
                $vta_remito_vta_orden_venta->setCodigo('');
                $vta_remito_vta_orden_venta->setObservacion('');
                $vta_remito_vta_orden_venta->setEstado(1);
                $vta_remito_vta_orden_venta->save();
            }
        }

        $vta_remito->setPersonaDescripcion($persona_descripcion);
        $vta_remito->save();

        // ---------------------------------------------------------------------
        // si se realiza movimiento de stock en el mismo registro
        // ---------------------------------------------------------------------
        if($cmb_registrar_movimiento_stock == 1){
            $vta_remito_estado = $vta_remito->setVtaRemitoEstado(VtaRemitoTipoEstado::TIPO_PREPARADO);
            $vta_remito_estado->setNotaInterna('Autorizado desde generacion de remito');
            $vta_remito_estado->save();

            $vta_remito->setPanPanolId($cmb_pan_panol_id);
            $vta_remito->save();

            // -----------------------------------------------------------------
            // se registra movimiento de stock
            // -----------------------------------------------------------------
            $vta_remito->setVtaRemitoRegistrarMovimientoStock();
        }
        
        // ---------------------------------------------------------------------
        // si se registra finalizacion de remito (procedimiento simplificado)
        // ---------------------------------------------------------------------
        if($cmb_finalizar_remito == 1){
            $vta_remito_estado = $vta_remito->setVtaRemitoEstado(VtaRemitoTipoEstado::TIPO_ENTREGADO);
            $vta_remito_estado->setNotaInterna('Procedimiento Simplificado de Remision');        
            $vta_remito_estado->save();
            
            // ---------------------------------------------------------------------
            // se verifica el estado de remision de las OV del remito
            // ---------------------------------------------------------------------
            $vta_remito_vta_orden_ventas = $vta_remito->getVtaRemitoVtaOrdenVentas();
            foreach ($vta_remito_vta_orden_ventas as $vta_remito_vta_orden_venta) {
                $vta_orden_venta = $vta_remito_vta_orden_venta->getVtaOrdenVenta();

                if ($vta_orden_venta->getCantidadDisponibleEnRemito() > 0) {
                    $vta_orden_venta->setVtaOrdenVentaEstadoRemision(VtaOrdenVentaTipoEstadoRemision::TIPO_DESPACHO_PARCIAL, $nota_interna);
                } else {
                    $vta_orden_venta->setVtaOrdenVentaEstadoRemision(VtaOrdenVentaTipoEstadoRemision::TIPO_DESPACHO_TOTAL, $nota_interna);
                }
            }            
        }
        
        // --------------------------------------------------------------------
        // se autogenera el numero de comprobante
        // --------------------------------------------------------------------
        //$vta_remito->setAutogenerarNumeroComprobante();

        return $vta_remito;
    }
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 17/03/2020 20:00 hs.
     * Metodo que genera un remito por venta cta cte inmediata.
     * @return Obj VtaRemito
     */
    static function setInicializarVtaRemitoDesdeVentaInmediataCtacte($vta_presupuesto = false, $vta_orden_venta_ids, $vta_orden_venta_cantidads, $cli_cliente_id = 0, $cli_centro_recepcion_id = 0, $en_domicilio = 0, $pan_panol_id, $observacion = '') {

        $vta_remito = new VtaRemito();
        if ($cli_cliente_id != 0) {
            $vta_remito->setCliClienteId($cli_cliente_id);
        }
        if ($cli_centro_recepcion_id != 0) {
            $vta_remito->setCliCentroRecepcionId($cli_centro_recepcion_id);
        }

        if ($vta_presupuesto) {
            $vta_remito->setVtaPresupuestoId($vta_presupuesto->getId());
        }

        $vta_remito->setFecha(Gral::getFechaActual());
        $vta_remito->setObservacion($observacion);
        $vta_remito->setEstado(1);
        $vta_remito->setEnDomicilio($en_domicilio);
        if($pan_panol_id != 0){
            $vta_remito->setPanPanolId($pan_panol_id);
        }
        $vta_remito->save();

        // se setea el codigo del remito
        $vta_remito->setCodigo(self::PREFIJO_RMT . str_pad($vta_remito->getId(), 8, 0, STR_PAD_LEFT));
        $vta_remito->save();

        // se registra el estado inicial del remito
        $vta_remito->setVtaRemitoEstado(VtaRemitoTipoEstado::TIPO_GENERADO, $observacion);

        if($pan_panol_id != 0){
            // se registra el estado preparadp del remito
            $vta_remito->setVtaRemitoEstado(VtaRemitoTipoEstado::TIPO_PREPARADO, $observacion);
        }

        if (!empty($vta_remito->getId())) {
            foreach ($vta_orden_venta_ids as $vta_orden_venta_id) {
                $vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
                $persona_descripcion = $vta_orden_venta->getPersonaDescripcion();

                if (!$vta_orden_venta->getVtaOrdenVentaEstadoEnRemito()) {
                    $vta_orden_venta->setVtaOrdenVentaEstadoRemision(VtaOrdenVentaTipoEstadoRemision::TIPO_EN_REMITO);
                    $vta_orden_venta->setVtaOrdenVentaEstadoRemision(VtaOrdenVentaTipoEstadoRemision::TIPO_DESPACHO_TOTAL, $observacion = "Venta Inmediata Contado");
                }

                $vta_remito_vta_orden_venta = new VtaRemitoVtaOrdenVenta();
                $vta_remito_vta_orden_venta->setDescripcion($vta_orden_venta->getDescripcion());
                $vta_remito_vta_orden_venta->setVtaRemitoId($vta_remito->getId());
                $vta_remito_vta_orden_venta->setVtaOrdenVentaId($vta_orden_venta->getId());
                $vta_remito_vta_orden_venta->setInsInsumoId($vta_orden_venta->getInsInsumoId());
                $vta_remito_vta_orden_venta->setCantidad($vta_orden_venta_cantidads[$vta_orden_venta->getId()]);
                $vta_remito_vta_orden_venta->setCodigo('');
                $vta_remito_vta_orden_venta->setObservacion('');
                $vta_remito_vta_orden_venta->setEstado(1);
                $vta_remito_vta_orden_venta->save();
            }
        }

        //$vta_remito->setRetiradoPor($retirado_por);
        $vta_remito->setNotaPublica($nota_publica);
        $vta_remito->setPersonaDescripcion($persona_descripcion);
        $vta_remito->save();

        if($pan_panol_id != 0){
            // -------------------------------------------------------------------------
            // se registra movimiento de stock
            // -------------------------------------------------------------------------
            $vta_remito->setVtaRemitoRegistrarMovimientoStock();
        }
        
        // --------------------------------------------------------------------
        // se autogenera el numero de comprobante
        // --------------------------------------------------------------------
        //$vta_remito->setAutogenerarNumeroComprobante();        
        
        return $vta_remito;
    }
    

    /**
     * Autor: Pablo Rosen
     * Fecha: 17/10/2017 17:00 hs.
     * Metodo que genera un remito por venta contado inmediata.
     * @return Obj VtaRemito
     */
    static function setInicializarVtaRemitoDesdeVentaInmediataContado($vta_presupuesto = false, $vta_orden_venta_ids, $vta_orden_venta_cantidads, $cli_cliente_id = 0, $cli_centro_recepcion_id = 0, $en_domicilio = 0, $pan_panol_id, $observacion = '', $vta_tipo_remito_id, $gral_empresa_id, $vta_punto_venta_id) {

        $vta_punto_venta = VtaPuntoVenta::getOxId($vta_punto_venta_id);
        $gral_sucursal = $vta_punto_venta->getGralSucursalXGralSucursalVtaPuntoVenta();
        
        $vta_remito = new VtaRemito();
        if ($cli_cliente_id != 0) {
            $vta_remito->setCliClienteId($cli_cliente_id);
        }
        if ($cli_centro_recepcion_id != 0) {
            $vta_remito->setCliCentroRecepcionId($cli_centro_recepcion_id);
        }

        if ($vta_presupuesto) {
            $vta_remito->setVtaPresupuestoId($vta_presupuesto->getId());
        }

        $vta_remito->setFecha(Gral::getFechaActual());
        $vta_remito->setObservacion($observacion);
        $vta_remito->setEstado(1);
        $vta_remito->setEnDomicilio($en_domicilio);
        $vta_remito->setPanPanolId($pan_panol_id);
        
        $vta_remito->setVtaTipoRemitoId($vta_tipo_remito_id);
        $vta_remito->setGralEmpresaId($gral_empresa_id);
        $vta_remito->setVtaPuntoVentaId($vta_punto_venta_id);
        
        $vta_remito->setNumeroSucursal(str_pad($gral_sucursal->getNumero(), DbConfig::VARS_CANTIDAD_NRO_SUCURSAL, 0, STR_PAD_LEFT));
        $vta_remito->setNumeroPuntoVenta(str_pad($vta_punto_venta->getNumero(), DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA_SIMPLE, 0, STR_PAD_LEFT));
        //$vta_remito->setNumeroRemito($numero_remito);
        
        $vta_remito->save();

        // se setea el codigo del remito
        $vta_remito->setCodigo(self::PREFIJO_RMT . str_pad($vta_remito->getId(), 8, 0, STR_PAD_LEFT));
        $vta_remito->save();

        // se registra el estado inicial del remito
        $vta_remito->setVtaRemitoEstado(VtaRemitoTipoEstado::TIPO_GENERADO, $observacion);

        // se registra el estado preparadp del remito
        $vta_remito->setVtaRemitoEstado(VtaRemitoTipoEstado::TIPO_PREPARADO, $observacion);

        // se registra el estado entregado del remito
        $vta_remito->setVtaRemitoEstado(VtaRemitoTipoEstado::TIPO_ENTREGADO, $observacion);        

        if (!empty($vta_remito->getId())) {
            foreach ($vta_orden_venta_ids as $vta_orden_venta_id) {
                $vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
                $persona_descripcion = $vta_orden_venta->getPersonaDescripcion();

                if (!$vta_orden_venta->getVtaOrdenVentaEstadoEnRemito()) {
                    $vta_orden_venta->setVtaOrdenVentaEstadoRemision(VtaOrdenVentaTipoEstadoRemision::TIPO_EN_REMITO);
                    $vta_orden_venta->setVtaOrdenVentaEstadoRemision(VtaOrdenVentaTipoEstadoRemision::TIPO_DESPACHO_TOTAL, $observacion = "Venta Inmediata Contado");
                }

                $vta_remito_vta_orden_venta = new VtaRemitoVtaOrdenVenta();
                $vta_remito_vta_orden_venta->setDescripcion($vta_orden_venta->getDescripcion());
                $vta_remito_vta_orden_venta->setVtaRemitoId($vta_remito->getId());
                $vta_remito_vta_orden_venta->setVtaOrdenVentaId($vta_orden_venta->getId());
                $vta_remito_vta_orden_venta->setInsInsumoId($vta_orden_venta->getInsInsumoId());
                $vta_remito_vta_orden_venta->setCantidad($vta_orden_venta_cantidads[$vta_orden_venta->getId()]);
                $vta_remito_vta_orden_venta->setCodigo('');
                $vta_remito_vta_orden_venta->setObservacion('');
                $vta_remito_vta_orden_venta->setEstado(1);
                $vta_remito_vta_orden_venta->save();
            }
        }

        $vta_remito->setPersonaDescripcion($persona_descripcion);
        $vta_remito->save();

        // -------------------------------------------------------------------------
        // se registra movimiento de stock
        // -------------------------------------------------------------------------
        $vta_remito->setVtaRemitoRegistrarMovimientoStock();
        
        // --------------------------------------------------------------------
        // se autogenera el numero de comprobante
        // --------------------------------------------------------------------
        //$vta_remito->setAutogenerarNumeroComprobante();        

        return $vta_remito;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 27/07/2020 18:00 hs.
     * Metodo que modifica los datos basicos del comprobante
     * @return Obj VtaRemito
     */
    public function setModificarDatosComprobante($nota_interna, $nota_publica, $nro_sucursal, $nro_punto_venta, $nro_comprobante) {

        $this->setNotaPublica($nota_publica);
        $this->setObservacion($nota_interna);

        if (UsCredencial::getEsAcreditado('VTA_REMITO_GESTION_ACCION_MODIFICAR_NRO_COMPROBANTE')) {
            $numero_comprobante_completo = $nro_sucursal.'-'.$nro_punto_venta.'-'.$nro_comprobante;
            
            $this->setNumeroSucursal($nro_sucursal);
            $this->setNumeroPuntoVenta($nro_punto_venta);
            $this->setNumeroRemito($nro_comprobante);
            $this->setNumeroRemitoCompleto($numero_comprobante_completo);
        }
        
        $this->save();
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 27/09/2017 08:00 hs.
     * Metodo que registra un nuevo estado del remito.
     * @return Obj VtaRemitoEstado
     */
    public function setVtaRemitoEstado($codigo, $observacion = '') {
        $inicial = 1;
        $vta_remito_estado = false;

        // se agrega el nuevo estado del remito
        $vta_remito_tipo_estado = VtaRemitoTipoEstado::getOxCodigo($codigo);

        if ($vta_remito_tipo_estado) {
            foreach ($this->getVtaRemitoEstados() as $vta_remito_estado) {
                $vta_remito_estado->setActual(0);
                $vta_remito_estado->save();
                $inicial = 0;
            }


            $vta_remito_estado = new VtaRemitoEstado();
            $vta_remito_estado->setVtaRemitoId($this->getId());
            $vta_remito_estado->setVtaRemitoTipoEstadoId($vta_remito_tipo_estado->getId());
            $vta_remito_estado->setInicial($inicial);
            $vta_remito_estado->setActual(1);
            $vta_remito_estado->setNotaInterna($observacion);
            $vta_remito_estado->setObservacion('');
            $vta_remito_estado->save();

            // actualizamos el estado en vta_remito      
            $this->setVtaRemitoTipoEstadoId($vta_remito_tipo_estado->getId());
            $this->save();
        }

        return $vta_remito_estado;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 27/09/2017 11:07 hs.
     * Metodo que retorna el estado actual del remito.
     * @return Obj VtaRemitoEstado
     */
    public function getVtaRemitoEstadoActual() {
        $c = new Criterio();
        $c->add(VtaRemitoEstado::GEN_ATTR_VTA_REMITO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaRemitoEstado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->addTabla(VtaRemitoEstado::GEN_TABLA);
        $c->setCriterios();

        $vta_remito_estados = VtaRemitoEstado::getVtaRemitoEstados(null, $c);
        foreach ($vta_remito_estados as $vta_remito_estado) {
            return $vta_remito_estado;
        }
        return false;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 27/09/2017 11:00 hs.
     * Metodo que retorna el tipo de estado actual del remito.
     * @return Obj VtaRemitoEstado
     */
    public function getVtaRemitoTipoEstadoActual() {
        return $this->getVtaRemitoTipoEstado();

        $vta_remito_actual = $this->getVtaRemitoEstadoActual();
        if ($vta_remito_actual) {
            return $vta_remito_actual->getVtaRemitoTipoEstado();
        }
        return false;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 27/09/2017 11:00 hs.
     * Metodo que retorna si el remito esta en un estado terminal.
     * @return Bool
     */
    public function getVtaRemitoTipoEstadoActualTerminal() {
        $terminal = $this->getVtaRemitoTipoEstadoActual()->getTerminal();
        return $terminal;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 22/11/2017 21:08.
     * Metodo que retorna el estado de un remito de acuerdo a un codigo indicado
     * @return PdiEstado
     */
    public function getVtaRemitoEstadoXCodigoDeVtaRemitoTipoEstado($valor) {
        $c = new Criterio();
        $c->add(VtaRemitoEstado::GEN_ATTR_VTA_REMITO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaRemitoTipoEstado::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
        $c->addTabla(VtaRemitoEstado::GEN_TABLA);
        $c->addRealJoin(VtaRemitoTipoEstado::GEN_TABLA, VtaRemitoTipoEstado::GEN_ATTR_ID, VtaRemitoEstado::GEN_ATTR_VTA_REMITO_TIPO_ESTADO_ID);
        $c->setCriterios();

        $vta_remito_estados = VtaRemitoEstado::getVtaRemitoEstados(null, $c);
        foreach ($vta_remito_estados as $vta_remito_estado) {
            return $vta_remito_estado;
        }
        return false;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 27/09/2017 11:00 hs.
     * Metodo que retorna el usuario.
     * @return VtaVendedor
     */
    public function getVtaVendedor() {
        $vta_vendedor = UsUsuario::getOxId($this->getCreadoPor());
        return $vta_vendedor;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 27/09/2017 11:00 hs.
     * Metodo que retorna la cantidad VtaRemitoVtaOrdenVenta.
     * @return Integer
     */
    public function getCantidadItemsRemito() {
        $items = $this->getVtaRemitoVtaOrdenVentas(null, null, true);
        return count($items);
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 18/10/2017 11:00 hs.
     * Metodo que envia el remito por email.
     * @return 
     */
    public function enviarRemitoEmail($enviar = false, $destinatarios = false, $txa_observacion, $archivo_adjunto_urls = false) {
        if (!Mail::MAIL_ACTIVO)
            return false;

        $mail_asunto = Gral::getConfig('gral_cliente').' - Remito #' . $this->getCodigo() . ' ' . date('d/m/Y H:i');

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $destinatarios = str_replace(' ', '', $destinatarios);
        $destinatarios = str_replace(',', ';', $destinatarios);
        $arr_destinatarios = explode(";", $destinatarios);

        $param = array(
            'vta_remito_id' => $this->getId(),
            'observacion' => $txa_observacion,
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/GENERAL/index_vta_remito.php";
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

        $vta_remito_enviado = $this->inicializarVtaRemitoEnviado($txa_observacion, $destinatarios, $mail_asunto, $msg, $strContenidoPdf);

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
                $vta_remito_enviado->setConfirmarVtaRemitoEnviado(1, VtaRemitoEnviado::REMITO_ENVIADO_CORRECTAMENTE);
            } else {
                $vta_remito_enviado->setConfirmarVtaRemitoEnviado(0, $mail->ErrorInfo);
            }

            return $envio_ok;
        } catch (phpmailerException $e) {
            echo $e->errorMessage(); //Pretty error messages from PHPMailer
        } catch (Exception $e) {
            echo $e->getMessage(); //Boring error messages from anything else!
        }

        return false;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 19/10/2017 11:00 hs.
     * Metodo que Inicializa el envio por mail del remito.
     * @return VtaRemitoEnviado
     */
    public function inicializarVtaRemitoEnviado($observacion, $destinatarios, $mail_asunto, $mail_contenido, $archivo_adjunto) {
        $vta_remito_enviado = new VtaRemitoEnviado();
        $vta_remito_enviado->setDescripcion('');
        $vta_remito_enviado->setVtaRemitoId($this->getId());
        $vta_remito_enviado->setAsunto($mail_asunto);
        $vta_remito_enviado->setDestinatario($destinatarios);

        $vta_remito_enviado->setCuerpo(addslashes($mail_contenido));
        $vta_remito_enviado->setAdjunto(base64_encode($archivo_adjunto));

        $vta_remito_enviado->setCodigoEnvio(0);
        $vta_remito_enviado->setObservacion($observacion);
        $vta_remito_enviado->setEstado(0);

        $vta_remito_enviado->save();

        return $vta_remito_enviado;
    }

    public function getNombreArchivoAdjuntoRemito() {
        return Gral::getConfig('conf_proyecto_min').' - Remito #' . $this->getCodigo() . '.pdf';
    }

    public function getControlEstado($txt_vta_remito_tipo_estado) {
        $vta_remito_estado = $this->getVtaRemitoEstadoActual();
        if ($vta_remito_estado->getVtaRemitoTipoEstado()->getCodigo() == $txt_vta_remito_tipo_estado) {
            return true;
        }
        return false;
    }

    public function getVtaOrdenVentas() {

        $c = new Criterio();
        $c->add(VtaRemitoVtaOrdenVenta::GEN_ATTR_VTA_REMITO_ID, $this->getId(), Criterio::IGUAL);

        $c->addTabla(VtaOrdenVenta::GEN_TABLA);
        $c->addRealJoin(VtaRemitoVtaOrdenVenta::GEN_TABLA, VtaRemitoVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, VtaOrdenVenta::GEN_ATTR_ID);

        $c->setCriterios();

        $vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas(null, $c);
        if (count($vta_orden_ventas) > 0) {
            return $vta_orden_ventas;
        }
        return false;
    }

    public function getVtaPresupuesto_OLD() {
        $vta_orden_ventas = $this->getVtaOrdenVentas();

        foreach ($vta_orden_ventas as $vta_orden_venta) {
            return $vta_orden_venta->getVtaPresupuesto();
        }
        return false;
    }

    /**
     * Retorna un valor booleano que indica si alguno de los items del remito mueve stock
     * @return boolean
     */
    public function getVtaRemitoMueveStock() {
        $remito_mueve_stock = false;

        $vta_remito_vta_orden_ventas = $this->getVtaRemitoVtaOrdenVentas();
        foreach ($vta_remito_vta_orden_ventas as $vta_remito_vta_orden_venta) {
            $vta_orden_venta = $vta_remito_vta_orden_venta->getVtaOrdenVenta();
            $ins_insumo = $vta_orden_venta->getInsInsumo();
            if ($ins_insumo->getControlStock()) {
                $remito_mueve_stock = true;
            }
        }
        return $remito_mueve_stock;
    }

    public function setVtaRemitoRegistrarMovimientoStock() {
        foreach ($this->getVtaRemitoVtaOrdenVentas() as $vta_remito_vta_orden_venta) {
            $vta_orden_venta = $vta_remito_vta_orden_venta->getVtaOrdenVenta();
            $vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();
            $ins_insumo = $vta_orden_venta->getInsInsumo();
            $cantidad = $vta_remito_vta_orden_venta->getCantidad();
            if ($ins_insumo->getControlStock()) {
                // -------------------------------------------------------------
                // se registra pedido para control y actualizacion de stock
                // -------------------------------------------------------------
                $ins_stock_tipo_movimiento_codigo = InsStockTipoMovimiento::TIPO_MOV_SALIDA;

                $pan_panol_id = 1; // hardcodeado panol inicial, se debe dinamizar
                $pan_panol = $this->getPanPanol();
                if($pan_panol){
                    $pan_panol_id = $pan_panol->getId();
                }

                $pdi_pedido = PdiPedido::setPdiPedidoPorRemisionDeInsumo(
                                $ins_insumo->getId(), $panol_origen = $pan_panol_id, $panol_destino = $pan_panol_id, $cantidad, $observacion = 'Remision por Venta ' . $this->getCodigo().' en Presupuesto '.$vta_presupuesto->getCodigo().' a Cliente '.$vta_presupuesto->getPersonaDescripcion(), $ins_stock_tipo_movimiento_codigo
                );
            }
            
            // ---------------------------------------------------------------------------------
            // si el insumo esta compuesto por otros, debemos afectar el stock de su composicion
            // ---------------------------------------------------------------------------------
            $ins_insumo_composicions = $ins_insumo->getInsInsumoComposicions(null, null, true);
            foreach($ins_insumo_composicions as $ins_insumo_composicion)
            {
                $ins_insumo_hijo = $ins_insumo_composicion->getInsInsumoComposicionObj();
                if ($ins_insumo_hijo->getControlStock())
                {
                    $cantidad_composicion = $ins_insumo_composicion->getCantidad() * $cantidad;

                    // -------------------------------------------------------------
                    // se registra pedido para control y actualizacion de stock de la composicion
                    // -------------------------------------------------------------
                    $ins_stock_tipo_movimiento_codigo = InsStockTipoMovimiento::TIPO_MOV_SALIDA;

                    $pan_panol_id = 1; // hardcodeado panol inicial, se debe dinamizar
                    $pan_panol = $this->getPanPanol();
                    if($pan_panol){
                        $pan_panol_id = $pan_panol->getId();
                    }

                    $pdi_pedido = PdiPedido::setPdiPedidoPorRemisionDeInsumo(
                                    $ins_insumo_hijo->getId(), $panol_origen = $pan_panol_id, $panol_destino = $pan_panol_id, $cantidad_composicion, $observacion = 'Remision por Venta de '.$ins_insumo->getDescripcion().' (COMBO) en ' . $this->getCodigo().' en Presupuesto '.$vta_presupuesto->getCodigo().' a Cliente '.$vta_presupuesto->getPersonaDescripcion(), $ins_stock_tipo_movimiento_codigo
                    );
                }
            }
        }

        return true;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 27/08/2018 18:39
     * Metodo que genera codigo EPL para impresion de etiqueta
     * @return String
     */
    public function getEtiquetaRemisionEPL($cantidad = 1) {
        $texto = 'N
q540
;Q135,10
A50,35,0,1,1,2,R,"  '.Gral::getConfig('gral_cliente').' - Insumos de Panol  "
;LO100,130,550,10
B50,80,0,1,3,0,80,N,"' . $this->getCodigo() . '"
A50,180,0,3,1,1,N,"' . $this->getDescripcion() . '"
A50,210,0,2,1,1,N,"Cod: ' . $this->getCodigo() . '"
P' . $cantidad . ',1            
        ';

        return $texto;
    }
        
    /**
     * Registro de hoja de ruta
     *
     * @param [int] $vta_hoja_ruta_id
     * @return [object] $vta_hoja_ruta_vta_remito
     */
    public function setHojaRuta($vta_hoja_ruta_id)
    {
        //--------------------------------------
        // se desvincula la hoja de ruta actual
        //--------------------------------------
        $this->setDesvincularHojaRuta();

        //--------------------------------------
        // se vincula nueva hoja de ruta
        //--------------------------------------
        $array = array(
            array('campo' => 'vta_remito_id', 'valor' => $this->getId()),
            array('campo' => 'estado', 'valor' => 1),
        );
        $vta_hoja_ruta_vta_remito = VtaHojaRutaVtaRemito::getOxArray($array);
        
        if (!$vta_hoja_ruta_vta_remito)
        {
            $vta_hoja_ruta_vta_remito = new VtaHojaRutaVtaRemito();
        }
        $vta_hoja_ruta_vta_remito->setVtaHojaRutaId($vta_hoja_ruta_id);
        $vta_hoja_ruta_vta_remito->setVtaRemitoId($this->getId());
        $vta_hoja_ruta_vta_remito->setEstado(1);
        $vta_hoja_ruta_vta_remito->save();
        
        return $vta_hoja_ruta_vta_remito;
    }
    
    /**
     * Desvincula un remito a una hoja de ruta seteando en 0 el estado
     *
     * @return void
     */
    public function setDesvincularHojaRuta()
    {
        // se borran los registros
        $this->deleteVtaHojaRutaVtaRemitos();
        //return true;
        
        
        /*$vta_hoja_ruta_vta_remitos = $this->getVtaHojaRutaVtaRemitos(null, null, true);
        foreach($vta_hoja_ruta_vta_remitos as $vta_hoja_ruta_vta_remito)
        {
            $vta_hoja_ruta_vta_remito->setEstado(0);
            $vta_hoja_ruta_vta_remito->save();
        }*/        
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getVtaHojaRutaActiva()
    {
        $criterio = new Criterio();
        $criterio->addTabla(VtaHojaRuta::GEN_TABLA);
        $criterio->addRealJoin(VtaHojaRutaVtaRemito::GEN_TABLA, VtaHojaRutaVtaRemito::GEN_ATTR_VTA_HOJA_RUTA_ID, VtaHojaRuta::GEN_ATTR_ID);
        $criterio->addRealJoin(VtaRemito::GEN_TABLA, VtaRemito::GEN_ATTR_ID, VtaHojaRutaVtaRemito::GEN_ATTR_VTA_REMITO_ID);
        $criterio->add(VtaHojaRutaVtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $criterio->add(VtaHojaRutaVtaRemito::GEN_ATTR_VTA_REMITO_ID, $this->getId(), Criterio::IGUAL);
        $criterio->setCriterios();
        
        $vta_hoja_rutas = VtaHojaRuta::getVtaHojaRutas(null, $criterio);
        foreach($vta_hoja_rutas as $vta_hoja_ruta){
            return $vta_hoja_ruta;
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
     * @param type $arr_filtros
     * @return type
     */
    static function getVtaRemitosVinculablesAVtaHojaRuta($arr_filtros)
    {
        $criterio = new Criterio();
        $criterio->add(VtaRemitoTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);

        if(isset($arr_filtros['vta_hoja_ruta_id']))
        {
            $criterio->add(VtaHojaRuta::GEN_ATTR_ID, $arr_filtros['vta_hoja_ruta_id'], Criterio::IGUAL);
        }
        
        if(isset($arr_filtros['fecha_desde']) && $arr_filtros['fecha_desde'] != '')
        {
            $criterio->add(VtaRemito::GEN_ATTR_FECHA, $arr_filtros['fecha_desde'], Criterio::MAYORIGUAL);
        }

        if(isset($arr_filtros['fecha_hasta']) && $arr_filtros['fecha_hasta'] != '')
        {
            $criterio->add(VtaRemito::GEN_ATTR_FECHA, $arr_filtros['fecha_hasta'], Criterio::MENORIGUAL);
        }

        if(isset($arr_filtros['geo_localidad_id']) && $arr_filtros['geo_localidad_id'] != 0)
        {
            $criterio->add(GeoLocalidad::GEN_ATTR_ID, $arr_filtros['geo_localidad_id'], Criterio::IGUAL);
        }

        if(isset($arr_filtros['buscador']) && $arr_filtros['buscador'] != '')
        {
            $criterio->addInicioSubconsulta();
            $criterio->add(VtaRemito::GEN_ATTR_CODIGO, $arr_filtros['buscador'], Criterio::LIKE);
            $criterio->add(CliCliente::GEN_ATTR_DESCRIPCION, $arr_filtros['buscador'], Criterio::LIKE, false, Criterio::_OR);            
            $criterio->addFinSubconsulta();
        }

        
        //------------------------------------------------------
        //esta condicion es temporal
        //------------------------------------------------------
        //$criterio->add(VtaRemito::GEN_ATTR_CREADO, '2022-03-01', Criterio::MAYORIGUAL);
        
        $criterio->addTabla(VtaRemito::GEN_TABLA);
        $criterio->addRealJoin(CliCentroRecepcion::GEN_TABLA, CliCentroRecepcion::GEN_ATTR_ID, VtaRemito::GEN_ATTR_CLI_CENTRO_RECEPCION_ID, 'LEFT JOIN');
        $criterio->addRealJoin(GeoLocalidad::GEN_TABLA, GeoLocalidad::GEN_ATTR_ID, CliCentroRecepcion::GEN_ATTR_GEO_LOCALIDAD_ID, 'LEFT JOIN');
        $criterio->addRealJoin(GralRutaGeoLocalidad::GEN_TABLA, GralRutaGeoLocalidad::GEN_ATTR_GEO_LOCALIDAD_ID, GeoLocalidad::GEN_ATTR_ID, 'LEFT JOIN');
        $criterio->addRealJoin(GralRuta::GEN_TABLA, GralRuta::GEN_ATTR_ID, GralRutaGeoLocalidad::GEN_ATTR_GRAL_RUTA_ID, 'LEFT JOIN');
        $criterio->addRealJoin(VtaHojaRuta::GEN_TABLA, VtaHojaRuta::GEN_ATTR_GRAL_RUTA_ID, GralRuta::GEN_ATTR_ID, 'LEFT JOIN');
        $criterio->addRealJoin(VtaRemitoTipoEstado::GEN_TABLA, VtaRemitoTipoEstado::GEN_ATTR_ID, VtaRemito::GEN_ATTR_VTA_REMITO_TIPO_ESTADO_ID, 'LEFT JOIN');
        
        $criterio->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaRemito::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
        
        $criterio->setCriterios();

        $vta_remitos = VtaRemito::getVtaRemitos(null, $criterio);
        return $vta_remitos;
    }
    
    /**
     * Metodo que retorna los remitos vinculados a la factura
     * @return type
     */
    public function getVtaFacturasVinculadas(){
        $vta_facturas_vinculadas = array();
        
        $vta_orden_ventas = $this->getVtaOrdenVentasXVtaRemitoVtaOrdenVenta();
        foreach($vta_orden_ventas as $vta_orden_venta){
            $vta_facturas = $vta_orden_venta->getVtaFacturasXVtaFacturaVtaOrdenVenta();
            foreach($vta_facturas as $vta_factura){
                $vta_facturas_vinculadas[$vta_factura->getId()] = $vta_factura;
            }
        }
        
        return $vta_facturas_vinculadas;
    }
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 09/09/2022 15:00 hs.
     * Metodo que retorna el numero de comprobante formato
     * @return String
     */
    public function getNumeroComprobanteCompleto() {
        $gral_sucursal = $this->getGralSucursal();
        $vta_punto_venta = $this->getVtaPuntoVenta();

        $numero_sucursal = $gral_sucursal->getNumero();
        $numero_punto_venta = $vta_punto_venta->getNumero();
        $numero_comprobante = $this->getNumeroRemito();

        return str_pad($numero_sucursal, DbConfig::VARS_CANTIDAD_NRO_SUCURSAL, 0, STR_PAD_LEFT) . '-' . str_pad($numero_punto_venta, DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA_SIMPLE, 0, STR_PAD_LEFT) . '-' . str_pad($numero_comprobante, DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE, 0, STR_PAD_LEFT);
    }    
    
    /**
     * Metodo que retorna el ultimo numero de comprobante asignado
     * @return boolean
     */
    public function getUltimoNumeroComprobante(){
        $ultimo = 0;

        $c = new Criterio();
        $c->addSelect(self::GEN_ATTR_NUMERO_REMITO.'::INTEGER');
        $c->add(self::GEN_ATTR_VTA_TIPO_REMITO_ID, $this->getVtaTipoRemitoId(), Criterio::IGUAL);
        $c->add(self::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getVtaPuntoVentaId(), Criterio::IGUAL);
        $c->add(self::GEN_ATTR_NUMERO_REMITO, Criterio::VACIO, Criterio::DISTINTO);
        $c->addTabla(self::GEN_TABLA);
        $c->addOrden(self::GEN_ATTR_NUMERO_REMITO.'::INTEGER', Criterio::_DESC);
        $c->setCriterios();
        
        $p = new Paginador(1, 1);
        
        $vta_remitos = VtaRemito::getVtaRemitos($p, $c);
        foreach($vta_remitos as $vta_remito){
            $numero_comprobante = $vta_remito->getNumeroRemito();
            $numero_comprobante_numerico = (int) $numero_comprobante;
            $ultimo = $numero_comprobante_numerico;
        }
        return $ultimo;
    }
        
    /**
     * Metodo que retorna el proximo numero de comprobante que debe asignado
     * @return boolean
     */
    public function getProximoNumeroComprobante(){
        $ultimo = $this->getUltimoNumeroComprobante();
        $proximo = $ultimo + 1;
        return $proximo;
    }
    
    /**
     * Metodo que registra el proximo numero de comprobante automatico
     * @return boolean
     */
    public function setAutogenerarNumeroComprobante(){
        $vta_punto_venta = $this->getVtaPuntoVenta();
        //$cae = $this->getCae();
        $numero_sucursal = $this->getNumeroSucursal();
        $numero_punto_venta = $this->getNumeroPuntoVenta();
        
        if($vta_punto_venta->getAutoincremental()){
            //if(trim($cae) == ''){
            if(true){
                $numero_comprobante = $this->getProximoNumeroComprobante();
                $numero_comprobante_pad = str_pad($numero_comprobante, DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE, 0, STR_PAD_LEFT);
                $numero_comprobante_completo = $numero_sucursal.'-'.$numero_punto_venta.'-'.$numero_comprobante_pad;
                $this->setNumeroRemito($numero_comprobante_pad);
                $this->setNumeroRemitoCompleto($numero_comprobante_completo);
                //$this->setCae(ConfVariable::CODIGO_CAE_ALTERNATIVO);
                $this->save();
                //Gral::prr($this);
                
                return true;
            }
        }
        return false;
    } 
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 09/09/2022 15:30
     * Metodo que reasigna el numero de comprobante al registro, en el caso de 
     * posibles errores de impresion o danio del papel
     * @param type $nro_comprobante
     * @param type $nota_interna
     */
    public function setAsignarNumeroComprobante($nro_comprobante, $nota_interna){
        
        $numero_comprobante_actual = $this->getNumeroRemito();
        $numero_comprobante_nuevo = $nro_comprobante;
                
        $vta_remito_tipo_estado = $this->getVtaRemitoTipoEstado();
        
        // --------------------------------------------------------------------
        // se deja registro de la asignacion, en el estado
        // --------------------------------------------------------------------        
        $this->setVtaRemitoEstado($vta_remito_tipo_estado->getCodigo(), 'Asignacion de Numero de Comprobante - Nro '.$numero_comprobante_nuevo.' - '.$nota_interna);
                
        // ---------------------------------------------------------------------
        // se reasigna el numero de factura
        // ---------------------------------------------------------------------
        $numero_sucursal = $this->getNumeroSucursal();
        $numero_punto_venta = $this->getNumeroPuntoVenta();
        $numero_comprobante_pad = str_pad($nro_comprobante, DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE, 0, STR_PAD_LEFT);
        $numero_comprobante_completo = $numero_sucursal.'-'.$numero_punto_venta.'-'.$numero_comprobante_pad;
        
        $this->setNumeroRemito($numero_comprobante_pad);
        $this->setNumeroRemitoCompleto($numero_comprobante_completo);
        $this->save();        
    }
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 09/09/2022 15:30
     * Metodo que reasigna el numero de comprobante al registro, en el caso de 
     * posibles errores de impresion o danio del papel
     * @param type $nro_comprobante
     * @param type $nota_interna
     */
    public function setReasignarNumeroComprobante($nro_comprobante, $nota_interna){
        
        $numero_comprobante_actual = $this->getNumeroRemito();
        $numero_comprobante_nuevo = $nro_comprobante;
        
        // ---------------------------------------------------------------------
        // se genera una nuevo remito con estado de ANULADA con el numero que se modifico
        // ---------------------------------------------------------------------
        $vta_remito = clone $this;
        $vta_remito->setId(null, false);
        $vta_remito->save();
        
        // --------------------------------------------------------------------
        // se setea el codigo de la factura
        // --------------------------------------------------------------------
        $vta_remito->setCodigo(self::PREFIJO_RMT . str_pad($vta_remito->getId(), 8, 0, STR_PAD_LEFT));
        $vta_remito->save();
        
        $vta_remito->setVtaRemitoEstado(VtaRemitoTipoEstado::TIPO_ANULADO_RENUMERADO, 'Reasignacion de Numero de Comprobante - Cambia '.$numero_comprobante_actual.' por '.$numero_comprobante_nuevo.' - '.$nota_interna);
        
        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        //$vta_remito->setActualizarResumenComprobante();
        
        // ---------------------------------------------------------------------
        // se reasigna el numero de factura
        // ---------------------------------------------------------------------
        $numero_sucursal = $this->getNumeroSucursal();
        $numero_punto_venta = $this->getNumeroPuntoVenta();
        $numero_comprobante_pad = str_pad($nro_comprobante, DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE, 0, STR_PAD_LEFT);
        $numero_comprobante_completo = $numero_sucursal.'-'.$numero_punto_venta.'-'.$numero_comprobante_pad;
        
        $this->setNumeroRemito($numero_comprobante_pad);
        $this->setNumeroRemitoCompleto($numero_comprobante_completo);
        $this->save();   

        $vta_remito_tipo_estado_actual = $this->getVtaRemitoTipoEstado();
        
        $this->setVtaRemitoEstado($vta_remito_tipo_estado_actual->getCodigo(), 'Reasignacion de Numero de Comprobante - Cambia '.$numero_comprobante_actual.' por '.$numero_comprobante_nuevo.' - Genero Factura de Transicion '.$vta_remito->getCodigo().' - '.$nota_interna);        
    }
    
    /**
     * 
     * @return boolean
     */
    public function getTieneNumeroComprobanteAsignado(){
        if($this->getNumeroRemito() != ''){
            return true;
        }
        
        return false;
    }
}

?>