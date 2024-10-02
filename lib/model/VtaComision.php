<?php

require_once "base/BVtaComision.php";

class VtaComision extends BVtaComision {

    const PREFIJO_COMISION = 'CMS-';

    static function setInicializarVtaComision($vta_preventista_id, $vta_comprador_id, $vta_vendedor_id, $var_sesion_random, $vta_comprobantes, $importe_base_comisionables, $porcentaje_comisions, $importe_comisions, $vta_comprobante_classs, $gral_fp_forma_pago_ids, $descripcions, $importe_unitarios, $observacion) {

        // ---------------------------------------------------------------------
        // se registra la comision
        // ---------------------------------------------------------------------
        $vta_comision = new VtaComision();

        if ($vta_preventista_id != 0) {
            // preventista
            $vta_preventista = VtaPreventista::getOxId($vta_preventista_id);
            if ($vta_preventista) {
                $vta_comision->setPersonaDescripcion($vta_preventista->getDescripcion());
            }
            $vta_comision->setVtaPreventistaId($vta_preventista_id);
        }
        if ($vta_comprador_id != 0) {
            // comprador
            $vta_comprador = VtaComprador::getOxId($vta_comprador_id);
            if ($vta_comprador) {
                $vta_comision->setPersonaDescripcion($vta_comprador->getDescripcion());
            }
            $vta_comision->setVtaCompradorId($vta_comprador_id);
        }
        if ($vta_vendedor_id != 0) {
            // vendedor
            $vta_vendedor = VtaVendedor::getOxId($vta_vendedor_id);
            if ($vta_vendedor) {
                $vta_comision->setPersonaDescripcion($vta_vendedor->getDescripcion());
            }
            $vta_comision->setVtaVendedorId($vta_vendedor_id);
        }

        $vta_comision->setFechaEmision(Gral::getFechaActual());
        $vta_comision->setObservacion($observacion);
        $vta_comision->setEstado(1);
        $vta_comision->save();

        // --------------------------------------------------------------------
        // se setea el estado inicial de la comision
        // --------------------------------------------------------------------
        $vta_comision->setCodigo(self::PREFIJO_COMISION . str_pad($vta_comision->getId(), 8, 0, STR_PAD_LEFT));
        $vta_comision->save();

        // ---------------------------------------------------------------------
        // se cambia el estado de la comision
        // ---------------------------------------------------------------------
        if (!empty($vta_comision->getId())) {
            $vta_comision_estado = $vta_comision->setVtaComisionEstado(VtaComisionTipoEstado::TIPO_GENERADO, $observacion);
        }

        // ---------------------------------------------------------------------
        // se vinculan los comprobantes a la comision
        // ---------------------------------------------------------------------
        if (!empty($vta_comision->getId())) {
            foreach ($vta_comprobantes as $i => $vta_comprobante_id) {

                $vta_comprobante_class = $vta_comprobante_classs[$i];
                $vta_comprobante = VtaComprobante::getOxId($vta_comprobante_id, $vta_comprobante_class);

                $importe_base_comisionable = $importe_base_comisionables[$i];
                $porcentaje_comision = $porcentaje_comisions[$i];
                $porcentaje_comision = Gral::getImporteDesdePriceFormatToDB($porcentaje_comision);
                $importe_comision = $importe_comisions[$i];

                if($importe_base_comisionable == 0){
                    // excepcion para no agregar a la liquidacion comprobantes no comisionables, por error
                    continue;
                }
                
                switch ($vta_comprobante_class) {
                    case 'VtaFactura':
                        $vta_comision_vta_factura = new VtaComisionVtaFactura();
                        $vta_comision_vta_factura->setDescripcion($vta_comprobante->getDescripcion());
                        $vta_comision_vta_factura->setVtaComisionId($vta_comision->getId());
                        $vta_comision_vta_factura->setVtaFacturaId($vta_comprobante->getId());

                        $vta_comision_vta_factura->setBaseComisionable($importe_base_comisionable);
                        $vta_comision_vta_factura->setImporteAfectado($importe_base_comisionable);
                        $vta_comision_vta_factura->setPorcentajeComision($porcentaje_comision);
                        $vta_comision_vta_factura->setImporteComision($importe_comision);

                        $vta_comision_vta_factura->setCodigo('');
                        $vta_comision_vta_factura->setObservacion('');
                        $vta_comision_vta_factura->setEstado(1);
                        $vta_comision_vta_factura->save();
                        break;
                    case 'VtaAjusteDebe':
                        $vta_comision_vta_ajuste_debe = new VtaComisionVtaAjusteDebe();
                        $vta_comision_vta_ajuste_debe->setDescripcion($vta_comprobante->getDescripcion());
                        $vta_comision_vta_ajuste_debe->setVtaComisionId($vta_comision->getId());
                        $vta_comision_vta_ajuste_debe->setVtaAjusteDebeId($vta_comprobante->getId());

                        $vta_comision_vta_ajuste_debe->setBaseComisionable($importe_base_comisionable);
                        $vta_comision_vta_ajuste_debe->setImporteAfectado($importe_base_comisionable);
                        $vta_comision_vta_ajuste_debe->setPorcentajeComision($porcentaje_comision);
                        $vta_comision_vta_ajuste_debe->setImporteComision($importe_comision);

                        $vta_comision_vta_ajuste_debe->setCodigo('');
                        $vta_comision_vta_ajuste_debe->setObservacion('');
                        $vta_comision_vta_ajuste_debe->setEstado(1);
                        $vta_comision_vta_ajuste_debe->save();
                        break;
                }
            }
        }

        // ---------------------------------------------------------------------
        // se vinculan las formas de pago a la comision
        // ---------------------------------------------------------------------
        if (!empty($vta_comision->getId())) {
            foreach ($gral_fp_forma_pago_ids as $i => $gral_fp_forma_pago_id) {

                $gral_fp_forma_pago = GralFpFormaPago::getOxId($gral_fp_forma_pago_id);

                $descripcion = $descripcions[$i];

                $importe_unitario = $importe_unitarios[$i];
                $importe_unitario = Gral::getImporteDesdePriceFormatToDB($importe_unitario);

                $vta_comision_gral_fp_forma_pago = new VtaComisionGralFpFormaPago();
                $vta_comision_gral_fp_forma_pago->setDescripcion($descripcion);
                $vta_comision_gral_fp_forma_pago->setVtaComisionId($vta_comision->getId());
                $vta_comision_gral_fp_forma_pago->setGralFpFormaPagoId($gral_fp_forma_pago->getId());
                $vta_comision_gral_fp_forma_pago->setImporteAfectado($importe_unitario);
                $vta_comision_gral_fp_forma_pago->setCodigo('');
                $vta_comision_gral_fp_forma_pago->setObservacion('');
                $vta_comision_gral_fp_forma_pago->setEstado(1);
                $vta_comision_gral_fp_forma_pago->save();

                // -------------------------------------------------------------
                // Se registra el detalle del cheque si existe
                // -------------------------------------------------------------
                $arr_vta_comision_cheque_infos = Gral::getSes('vta_comision_cheque_info'.$var_sesion_random);

                if (!is_null($arr_vta_comision_cheque_infos[$i])) {
                    $vta_comision_gral_fp_forma_pago_cheque = new VtaComisionGralFpFormaPagoCheque();

                    $arr       = $arr_vta_comision_cheque_infos[$i];
                    $cheque_id = $arr['cheque_id'];

                    $vta_comision_gral_fp_forma_pago_cheque->setVtaComisionId($vta_comision->getId());
                    $vta_comision_gral_fp_forma_pago_cheque->setVtaComisionGralFpFormaPagoId($vta_comision_gral_fp_forma_pago->getId());
                    $vta_comision_gral_fp_forma_pago_cheque->setGralBancoId($arr['gral_banco_id']);
                    $vta_comision_gral_fp_forma_pago_cheque->setDescripcion($arr['descripcion']);
                    $vta_comision_gral_fp_forma_pago_cheque->setEntregador($arr['entregador']);
                    $vta_comision_gral_fp_forma_pago_cheque->setFirmante($arr['firmante']);
                    $vta_comision_gral_fp_forma_pago_cheque->setNumeroCheque($arr['numero_cheque']);
                    $vta_comision_gral_fp_forma_pago_cheque->setFechaCobro($arr['fecha_cobro']);
                    $vta_comision_gral_fp_forma_pago_cheque->setFechaEmision($arr['fecha_emision']);
                    $vta_comision_gral_fp_forma_pago_cheque->setEstado(1);

                    $vta_comision_gral_fp_forma_pago_cheque->save();
                    
                    // -------------------------------------------------------------
                    // inicializa cheque
                    // -------------------------------------------------------------
                    $fnd_chq_cheque = FndChqCheque::inicializarFndChqChequeDesdeVtaComision($cheque_id, $vta_comision_gral_fp_forma_pago, $arr);
                }
            }
        }

        return $vta_comision;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 21/09/2018 19:13 hs.
     * Metodo que registra un nuevo estado de la orden de pago.
     * @return Obj VtaComisionEstado
     */
    public function setVtaComisionEstado($codigo, $observacion = '', $txa_nota_interna = '', $txa_nota_publica = '') {
        $inicial = 1;
        $vta_comision_estado = false;

        // se agrega el nuevo estado del orden de pago
        $vta_comision_tipo_estado = VtaComisionTipoEstado::getOxCodigo($codigo);

        if ($vta_comision_tipo_estado) {
            foreach ($this->getVtaComisionEstados() as $vta_comision_estado) {
                $vta_comision_estado->setActual(0);
                $vta_comision_estado->save();
                $inicial = 0;
            }

            $vta_comision_estado = new VtaComisionEstado();
            $vta_comision_estado->setVtaComisionId($this->getId());
            $vta_comision_estado->setVtaComisionTipoEstadoId($vta_comision_tipo_estado->getId());
            $vta_comision_estado->setNotaInterna($txa_nota_interna);
            $vta_comision_estado->setNotaPublica($txa_nota_publica);

            $vta_comision_estado->setInicial($inicial);
            $vta_comision_estado->setActual(1);
            $vta_comision_estado->setObservacion($observacion);
            $vta_comision_estado->save();

            // actualizamos el estado en vta_comision      
            $this->setVtaComisionTipoEstadoId($vta_comision_tipo_estado->getId());
            $this->save();
        }

        // ---------------------------------------------------------------------
        // se registran los movimientos contables, si lo requiere
        // ---------------------------------------------------------------------
        //$this->setRegistrarContabilidad();
        // ---------------------------------------------------------------------

        return $vta_comision_estado;
    }

    /**
     * Registro de los movimientos contables de la operacion
     */
    public function setRegistrarContabilidad() {
        return;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 05/11/2018 19:26
     * Metodo que retorna el estado actual de la orden de pago
     * @return Obj VtaComisionEstado
     */
    public function getVtaComisionEstadoActual() {
        $c = new Criterio();
        $c->add(VtaComisionEstado::GEN_ATTR_VTA_COMISION_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaComisionEstado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->addTabla(VtaComisionEstado::GEN_TABLA);
        $c->setCriterios();

        $vta_comision_estados = VtaComisionEstado::getVtaComisionEstados(null, $c);
        foreach ($vta_comision_estados as $vta_comision_estado) {
            return $vta_comision_estado;
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 20/01/2019 20:00
     * 
     * @return Col VtaFactura
     */
    static function getVtaComprobantesAComisionar($fecha_desde, $fecha_hasta, $vta_preventista_id, $vta_comprador_id, $vta_vendedor_id, $gral_actividad_id, $gral_escenario_id, $ver_todos = false, $ver_otros = false) {
        if (!$vta_preventista_id && !$vta_comprador_id && !$vta_vendedor_id) {
            return array();
        }

        $vta_comprobantes_no_comisionados = array();

        // ---------------------------------------------------------------------
        // se consultan las facturas saldadas de un comisionista en un rango de fechas
        // ---------------------------------------------------------------------
        $c = new Criterio();
        $c->add(VtaFacturaTipoEstado::GEN_ATTR_ANULADO, 0, Criterio::IGUAL); // que no hayan sido anuladas

        if (!$ver_todos) {
            $c->add(VtaFacturaTipoEstado::GEN_ATTR_CODIGO, VtaFacturaTipoEstado::TIPO_SALDADO, Criterio::IGUAL); // solo saldadas completas
        }

        $c->add(VtaFactura::GEN_ATTR_FECHA_EMISION, $fecha_desde, Criterio::MAYORIGUAL);
        $c->add(VtaFactura::GEN_ATTR_FECHA_EMISION, $fecha_hasta, Criterio::MENORIGUAL);

        if ($vta_preventista_id) {
            $c->add(VtaFactura::GEN_ATTR_VTA_PREVENTISTA_ID, $vta_preventista_id, Criterio::IGUAL);
        }
        if ($vta_comprador_id) {
            $c->add(VtaFactura::GEN_ATTR_VTA_COMPRADOR_ID, $vta_comprador_id, Criterio::IGUAL);
        }
        if ($vta_vendedor_id) {
            $c->add(VtaFactura::GEN_ATTR_VTA_VENDEDOR_ID, $vta_vendedor_id, Criterio::IGUAL);
        }
        if ($gral_actividad_id) {
            $c->add(VtaFactura::GEN_ATTR_GRAL_ACTIVIDAD_ID, $gral_actividad_id, Criterio::IGUAL);
        }
        if ($gral_escenario_id) {
            $c->add(VtaFactura::GEN_ATTR_GRAL_ESCENARIO_ID, $gral_escenario_id, Criterio::IGUAL);
        }

        $c->addTabla(VtaFactura::GEN_TABLA);
        $c->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_ASC);
        $c->addRealJoin(VtaFacturaTipoEstado::GEN_TABLA, VtaFacturaTipoEstado::GEN_ATTR_ID, VtaFactura::GEN_ATTR_VTA_FACTURA_TIPO_ESTADO_ID);
        $c->addRealJoin(VtaComisionVtaFactura::GEN_TABLA, VtaComisionVtaFactura::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID, 'LEFT JOIN');
        $c->addRealJoin(VtaComision::GEN_TABLA, VtaComision::GEN_ATTR_ID, VtaComisionVtaFactura::GEN_ATTR_VTA_COMISION_ID, 'LEFT JOIN');
        $c->addRealJoin(VtaComisionTipoEstado::GEN_TABLA, VtaComisionTipoEstado::GEN_ATTR_ID, VtaComision::GEN_ATTR_VTA_COMISION_TIPO_ESTADO_ID, 'LEFT JOIN');
        $c->setCriterios();

        //$p = new Paginador(5, 1);
        $p = null;

        $vta_facturas = VtaFactura::getVtaFacturas($p, $c);

        foreach ($vta_facturas as $vta_factura) {
            // ---------------------------------------------------------------------
            // se recorren las facturas y se verifica cual no fue comisionada aun
            // ---------------------------------------------------------------------
            $vta_comision_activa = $vta_factura->getVtaComisionActiva($vta_preventista_id, $vta_comprador_id, $vta_vendedor_id);
            if(!$vta_comision_activa){ // solo se agregan las no comisionadas
                $vta_comprobantes_no_comisionados[] = $vta_factura;
            }else{
                //Gral::pr('Factura '.$vta_factura->getNumeroFacturaCompleto().' comisionada en '.$vta_comision_activa->getCodigo());
            }
        }

        if ($ver_otros) {
            // ---------------------------------------------------------------------
            // se consultan los ajustes debe saldados de un comisionista en un rango de fechas
            // ---------------------------------------------------------------------
            $c = new Criterio();
            $c->add(VtaAjusteDebeTipoEstado::GEN_ATTR_ANULADO, 0, Criterio::IGUAL); // que no hayan sido anuladas

            if (!$ver_todos) {
                $c->add(VtaAjusteDebeTipoEstado::GEN_ATTR_CODIGO, VtaAjusteDebeTipoEstado::TIPO_SALDADO, Criterio::IGUAL); // solo saldadas completas
            }

            $c->add(VtaAjusteDebe::GEN_ATTR_FECHA_EMISION, $fecha_desde, Criterio::MAYORIGUAL);
            $c->add(VtaAjusteDebe::GEN_ATTR_FECHA_EMISION, $fecha_hasta, Criterio::MENORIGUAL);

            if ($vta_preventista_id) {
                $c->add(VtaAjusteDebe::GEN_ATTR_VTA_PREVENTISTA_ID, $vta_preventista_id, Criterio::IGUAL);
            }
            if ($vta_comprador_id) {
                $c->add(VtaAjusteDebe::GEN_ATTR_VTA_COMPRADOR_ID, $vta_comprador_id, Criterio::IGUAL);
            }
            if ($vta_vendedor_id) {
                $c->add(VtaAjusteDebe::GEN_ATTR_VTA_VENDEDOR_ID, $vta_vendedor_id, Criterio::IGUAL);
            }
            if ($gral_actividad_id) {
                $c->add(VtaAjusteDebe::GEN_ATTR_GRAL_ACTIVIDAD_ID, $gral_actividad_id, Criterio::IGUAL);
            }
            if ($gral_escenario_id) {
                $c->add(VtaAjusteDebe::GEN_ATTR_GRAL_ESCENARIO_ID, $gral_escenario_id, Criterio::IGUAL);
            }

            $c->addTabla(VtaAjusteDebe::GEN_TABLA);
            $c->addOrden(VtaAjusteDebe::GEN_ATTR_ID, Criterio::_ASC);
            $c->addRealJoin(VtaAjusteDebeTipoEstado::GEN_TABLA, VtaAjusteDebeTipoEstado::GEN_ATTR_ID, VtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID);
            $c->addRealJoin(VtaComisionVtaAjusteDebe::GEN_TABLA, VtaComisionVtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_ID, VtaAjusteDebe::GEN_ATTR_ID, 'LEFT JOIN');
            $c->addRealJoin(VtaComision::GEN_TABLA, VtaComision::GEN_ATTR_ID, VtaComisionVtaAjusteDebe::GEN_ATTR_VTA_COMISION_ID, 'LEFT JOIN');
            $c->addRealJoin(VtaComisionTipoEstado::GEN_TABLA, VtaComisionTipoEstado::GEN_ATTR_ID, VtaComision::GEN_ATTR_VTA_COMISION_TIPO_ESTADO_ID, 'LEFT JOIN');
            $c->setCriterios();

            //$p = new Paginador(5, 1);
            $p = null;

            $vta_ajuste_debes = VtaAjusteDebe::getVtaAjusteDebes($p, $c);

            foreach ($vta_ajuste_debes as $vta_ajuste_debe) {
                // ---------------------------------------------------------------------
                // se recorren los ajustes debe y se verifica cual no fue comisionada aun
                // ---------------------------------------------------------------------
                $vta_comision_activa = $vta_ajuste_debe->getVtaComisionActiva($vta_preventista_id, $vta_comprador_id, $vta_vendedor_id);
                if (!$vta_comision_activa) { // solo se agregan los no comisionadas
                    $vta_comprobantes_no_comisionados[] = $vta_ajuste_debe;
                } else {
                    //Gral::pr('ajuste Debe '.$vta_ajuste_debe->getNumeroFacturaCompleto().' comisionada en '.$vta_comision_activa->getCodigo());
                }
            }
        }
        
        return $vta_comprobantes_no_comisionados;
    }

    public function getVtaComprobantes() {

        $pde_facturas = $this->getVtaFacturasXVtaComisionVtaFactura();
        $pde_nota_debitos = array();

        $pde_comprobantes = array_merge($pde_facturas, $pde_nota_debitos);
        return $pde_comprobantes;
    }

    public function getVtaComisionVtaComprobantes() {

        $vta_comision_vta_facturas = $this->getVtaComisionVtaFacturas();
        $vta_comision_vta_ajuste_debes = $this->getVtaComisionVtaAjusteDebes();

        $vta_orden_venta_vta_comprobantes = array_merge($vta_comision_vta_facturas, $vta_comision_vta_ajuste_debes);
        return $vta_orden_venta_vta_comprobantes;
    }

    public function getVtaComisionTotal() {
        $import_total = 0;

        $vta_comision_gral_fp_forma_pagos = $this->getVtaComisionGralFpFormaPagos();
        foreach ($vta_comision_gral_fp_forma_pagos as $vta_comision_gral_fp_forma_pago) {
            $import_total += $vta_comision_gral_fp_forma_pago->getImporteAfectado();
        }

        return $import_total;
    }

    public function getVtaComisionTotalComprobantes() {
        $import_total = 0;

        $vta_comision_vta_facturas = $this->getVtaComisionVtaFacturas();
        foreach ($vta_comision_vta_facturas as $vta_comision_vta_factura) {
            $import_total += $vta_comision_vta_factura->getImporteAfectado();
        }

        return $import_total;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 24/09/2018 14:55 hs.
     * Metodo que envio la OP por email
     * @return 
     */
    public function enviarVtaComisionEmail($enviar = false, $destinatarios = false, $txa_observacion, $archivo_adjunto_urls = false) {
        if (!Mail::MAIL_ACTIVO)
            return false;

        $mail_asunto = Gral::getConfig('gral_cliente').' - Orden de Comision #' . $this->getCodigo() . ' ' . date('d/m/Y H:i');

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $destinatarios = str_replace(' ', '', $destinatarios);
        $destinatarios = str_replace(',', ';', $destinatarios);
        $arr_destinatarios = explode(";", $destinatarios);

        $param = array(
            'vta_comision_id' => $this->getId(),
            'observacion' => $txa_observacion,
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/GENERAL/index_vta_comision.php";
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

        $vta_comision_enviado = $this->inicializarVtaComisionEnviado($txa_observacion, $destinatarios, $mail_asunto, $msg, $strContenidoPdf);

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
                $vta_comision_enviado->setConfirmarVtaComisionEnviado(1, 'Enviado Correctamente');
            } else {
                $vta_comision_enviado->setConfirmarVtaComisionEnviado(0, $mail->ErrorInfo);
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
     * Autor: Pablo Rosen
     * Fecha: 24/09/2018 14:55 hs.
     * Metodo que Inicializa el envio por mail de la OP.
     * @return VtaComisionEnviado
     */
    public function inicializarVtaComisionEnviado($observacion, $destinatarios, $mail_asunto, $mail_contenido, $archivo_adjunto) {
        $vta_comision_enviado = new VtaComisionEnviado();
        $vta_comision_enviado->setDescripcion('');
        $vta_comision_enviado->setVtaComisionId($this->getId());
        $vta_comision_enviado->setAsunto($mail_asunto);
        $vta_comision_enviado->setDestinatario($destinatarios);

        $vta_comision_enviado->setCuerpo(addslashes($mail_contenido));
        $vta_comision_enviado->setAdjunto(base64_encode($archivo_adjunto));

        $vta_comision_enviado->setCodigoEnvio(0);
        $vta_comision_enviado->setObservacion($observacion);
        $vta_comision_enviado->setEstado(0);

        $vta_comision_enviado->save();

        return $vta_comision_enviado;
    }

    public function getNombreArchivoAdjuntoComision() {
        $nombre = Gral::getConfig('conf_proyecto_min').'_' . $this->getCodigo() . '_' . $this->getPersonaDescripcion();
        $nombre = str_replace(',', '', $nombre);
        $nombre = str_replace('.', '', $nombre);
        $nombre = str_replace('-', '_', $nombre);
        $nombre = str_replace(' ', '_', $nombre);
        return $nombre . '.pdf';
    }

    
    /**
     * @creado_por Esteban Martinez
     * @creado 11/05/2019
     */ 
    public function setVtaComisionAnular($observacion = ''){
        $vta_comision_estado = $this->setVtaComisionEstado(VtaComisionTipoEstado::TIPO_ANULADO, $observacion);
        
        $vta_comision_gral_fp_forma_pagos = $this->getVtaComisionGralFpFormaPagos();
        foreach($vta_comision_gral_fp_forma_pagos as $vta_comision_gral_fp_forma_pago){
            $fnd_chq_cheque = $vta_comision_gral_fp_forma_pago->getFndChqCheque();
            if($fnd_chq_cheque){
                $fnd_chq_cheque->setRetrotraerFndChqChequeTipoEstado('Comision Anulada: '.$observacion);
            }
        }

        return $vta_comision_estado;
    }
    
    /**
     * @creado_por Esteban Martinez
     * @creado 11/05/2019
     */ 
    public function setVtaComisionPagar($observacion = ''){
        $vta_comision_estado = $this->setVtaComisionEstado(VtaComisionTipoEstado::TIPO_PAGADO, $observacion);
        
        $vta_comision_gral_fp_forma_pagos = $this->getVtaComisionGralFpFormaPagos();
        foreach($vta_comision_gral_fp_forma_pagos as $vta_comision_gral_fp_forma_pago){
            $fnd_chq_cheque = $vta_comision_gral_fp_forma_pago->getFndChqCheque();
            if($fnd_chq_cheque){
                $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_ENTREGADO, 'Comision Pagada: '.$observacion);
            }
        }
        
        return $vta_comision_estado;
    }

    static function setModificarPorcentajesDeComprobantes($cmb_vta_preventista_id, $cmb_vta_comprador_id, $cmb_vta_vendedor_id, $chk_vta_comprobantes, $hdn_vta_comprobante_classs, $txt_porcentaje_valor, $txa_porcentaje_observacion) {
        $vta_preventista = VtaPreventista::getOxId($cmb_vta_preventista_id);
        $vta_comprador = VtaComprador::getOxId($cmb_vta_comprador_id);
        $vta_vendedor = VtaVendedor::getOxId($cmb_vta_vendedor_id);

        foreach ($chk_vta_comprobantes as $i => $vta_comprobante_id) {
            $class = $hdn_vta_comprobante_classs[$i];
            $vta_comprobante = $class::getOxId($vta_comprobante_id);
            switch ($class) {
                case VtaFactura::GEN_CLASE:
                    if ($vta_preventista) {
                        $array = array(
                            array('campo' => VtaComisionVtaFacturaConfiguracion::GEN_ATTR_MIN_VTA_FACTURA_ID, 'valor' => $vta_comprobante->getId()),
                            array('campo' => VtaComisionVtaFacturaConfiguracion::GEN_ATTR_MIN_VTA_PREVENTISTA_ID, 'valor' => $vta_preventista->getId()),
                            array('campo' => 'estado', 'valor' => 1),
                        );
                    } elseif ($vta_comprador) {
                        $array = array(
                            array('campo' => VtaComisionVtaFacturaConfiguracion::GEN_ATTR_MIN_VTA_FACTURA_ID, 'valor' => $vta_comprobante->getId()),
                            array('campo' => VtaComisionVtaFacturaConfiguracion::GEN_ATTR_MIN_VTA_COMPRADOR_ID, 'valor' => $vta_comprador->getId()),
                            array('campo' => 'estado', 'valor' => 1),
                        );
                    } elseif ($vta_vendedor) {
                        $array = array(
                            array('campo' => VtaComisionVtaFacturaConfiguracion::GEN_ATTR_MIN_VTA_FACTURA_ID, 'valor' => $vta_comprobante->getId()),
                            array('campo' => VtaComisionVtaFacturaConfiguracion::GEN_ATTR_MIN_VTA_VENDEDOR_ID, 'valor' => $vta_vendedor->getId()),
                            array('campo' => 'estado', 'valor' => 1),
                        );
                    }
                    $vta_comision_vta_factura_configuracion = VtaComisionVtaFacturaConfiguracion::getOxArray($array);
                    if (!$vta_comision_vta_factura_configuracion) {
                        $vta_comision_vta_factura_configuracion = new VtaComisionVtaFacturaConfiguracion();
                        $vta_comision_vta_factura_configuracion->setVtaFacturaId($vta_comprobante->getId());

                        if ($vta_preventista) {
                            $vta_comision_vta_factura_configuracion->setVtaPreventistaId($vta_preventista->getId());
                        } elseif ($vta_comprador) {
                            $vta_comision_vta_factura_configuracion->setVtaVendedorId($vta_comprador->getId());
                        } elseif ($vta_vendedor) {
                            $vta_comision_vta_factura_configuracion->setVtaVendedorId($vta_vendedor->getId());
                        }

                        $vta_comision_vta_factura_configuracion->setPorcentajeComision($txt_porcentaje_valor);
                        $vta_comision_vta_factura_configuracion->setObservacion($txa_porcentaje_observacion);
                        $vta_comision_vta_factura_configuracion->setEstado(1);
                        $vta_comision_vta_factura_configuracion->save();
                    } else {
                        $vta_comision_vta_factura_configuracion->setPorcentajeComision($txt_porcentaje_valor);
                        $vta_comision_vta_factura_configuracion->setObservacion($txa_porcentaje_observacion);
                        $vta_comision_vta_factura_configuracion->setEstado(1);
                        $vta_comision_vta_factura_configuracion->save();
                    }
                    break;
                case VtaAjusteDebe::GEN_CLASE:
                    if ($vta_preventista) {
                        $array = array(
                            array('campo' => VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_ID, 'valor' => $vta_comprobante->getId()),
                            array('campo' => VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_MIN_VTA_PREVENTISTA_ID, 'valor' => $vta_preventista->getId()),
                            array('campo' => 'estado', 'valor' => 1),
                        );
                    } elseif ($vta_comprador) {
                        $array = array(
                            array('campo' => VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_ID, 'valor' => $vta_comprobante->getId()),
                            array('campo' => VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_MIN_VTA_COMPRADOR_ID, 'valor' => $vta_comprador->getId()),
                            array('campo' => 'estado', 'valor' => 1),
                        );
                    } elseif ($vta_vendedor) {
                        $array = array(
                            array('campo' => VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_ID, 'valor' => $vta_comprobante->getId()),
                            array('campo' => VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_MIN_VTA_VENDEDOR_ID, 'valor' => $vta_vendedor->getId()),
                            array('campo' => 'estado', 'valor' => 1),
                        );
                    }
                    $vta_comision_vta_ajuste_debe_configuracion = VtaComisionVtaAjusteDebeConfiguracion::getOxArray($array);
                    if (!$vta_comision_vta_ajuste_debe_configuracion) {
                        $vta_comision_vta_ajuste_debe_configuracion = new VtaComisionVtaAjusteDebeConfiguracion();
                        $vta_comision_vta_ajuste_debe_configuracion->setVtaAjusteDebeId($vta_comprobante->getId());

                        if ($vta_preventista) {
                            $vta_comision_vta_ajuste_debe_configuracion->setVtaPreventistaId($vta_preventista->getId());
                        } elseif ($vta_comprador) {
                            $vta_comision_vta_ajuste_debe_configuracion->setVtaVendedorId($vta_comprador->getId());
                        } elseif ($vta_vendedor) {
                            $vta_comision_vta_ajuste_debe_configuracion->setVtaVendedorId($vta_vendedor->getId());
                        }

                        $vta_comision_vta_ajuste_debe_configuracion->setPorcentajeComision($txt_porcentaje_valor);
                        $vta_comision_vta_ajuste_debe_configuracion->setObservacion($txa_porcentaje_observacion);
                        $vta_comision_vta_ajuste_debe_configuracion->setEstado(1);
                        $vta_comision_vta_ajuste_debe_configuracion->save();
                    } else {
                        $vta_comision_vta_ajuste_debe_configuracion->setPorcentajeComision($txt_porcentaje_valor);
                        $vta_comision_vta_ajuste_debe_configuracion->setObservacion($txa_porcentaje_observacion);
                        $vta_comision_vta_ajuste_debe_configuracion->setEstado(1);
                        $vta_comision_vta_ajuste_debe_configuracion->save();
                    }                    
                    break;
            }
        }
    }

    static function getPorcentajeComisionParaComprobante($vta_preventista, $vta_comprador, $vta_vendedor, $vta_comprobante) {
        $arr_porcentaje_comision_personalizado = false;

        $class = get_class($vta_comprobante);
        switch ($class) {
            case VtaFactura::GEN_CLASE:
                if ($vta_preventista) {
                    $array = array(
                        array('campo' => VtaComisionVtaFacturaConfiguracion::GEN_ATTR_MIN_VTA_FACTURA_ID, 'valor' => $vta_comprobante->getId()),
                        array('campo' => VtaComisionVtaFacturaConfiguracion::GEN_ATTR_MIN_VTA_PREVENTISTA_ID, 'valor' => $vta_preventista->getId()),
                        array('campo' => 'estado', 'valor' => 1),
                    );
                } elseif ($vta_comprador) {
                    $array = array(
                        array('campo' => VtaComisionVtaFactura::GEN_ATTR_MIN_VTA_FACTURA_ID, 'valor' => $vta_comprobante->getId()),
                        array('campo' => VtaComisionVtaFacturaConfiguracion::GEN_ATTR_MIN_VTA_COMPRADOR_ID, 'valor' => $vta_comprador->getId()),
                        array('campo' => 'estado', 'valor' => 1),
                    );
                } elseif ($vta_vendedor) {
                    $array = array(
                        array('campo' => VtaComisionVtaFactura::GEN_ATTR_MIN_VTA_FACTURA_ID, 'valor' => $vta_comprobante->getId()),
                        array('campo' => VtaComisionVtaFacturaConfiguracion::GEN_ATTR_MIN_VTA_VENDEDOR_ID, 'valor' => $vta_vendedor->getId()),
                        array('campo' => 'estado', 'valor' => 1),
                    );
                }
                $vta_comision_vta_factura_configuracion = VtaComisionVtaFacturaConfiguracion::getOxArray($array);
                if ($vta_comision_vta_factura_configuracion) {

                    // ----------------------------------------------------------
                    // se recupera el porcentaje de comision customizado para el comisionista y el comprobante
                    // ----------------------------------------------------------
                    $arr_porcentaje_comision_personalizado['porcentaje_comision'] = $vta_comision_vta_factura_configuracion->getPorcentajeComision();
                    $arr_porcentaje_comision_personalizado['observacion'] = $vta_comision_vta_factura_configuracion->getObservacion();
                }
                break;
            case VtaAjusteDebe::GEN_CLASE:
                if ($vta_preventista) {
                    $array = array(
                        array('campo' => VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_ID, 'valor' => $vta_comprobante->getId()),
                        array('campo' => VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_MIN_VTA_PREVENTISTA_ID, 'valor' => $vta_preventista->getId()),
                        array('campo' => 'estado', 'valor' => 1),
                    );
                } elseif ($vta_comprador) {
                    $array = array(
                        array('campo' => VtaComisionVtaAjusteDebe::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_ID, 'valor' => $vta_comprobante->getId()),
                        array('campo' => VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_MIN_VTA_COMPRADOR_ID, 'valor' => $vta_comprador->getId()),
                        array('campo' => 'estado', 'valor' => 1),
                    );
                } elseif ($vta_vendedor) {
                    $array = array(
                        array('campo' => VtaComisionVtaAjusteDebe::GEN_ATTR_MIN_VTA_AJUSTE_DEBE_ID, 'valor' => $vta_comprobante->getId()),
                        array('campo' => VtaComisionVtaAjusteDebeConfiguracion::GEN_ATTR_MIN_VTA_VENDEDOR_ID, 'valor' => $vta_vendedor->getId()),
                        array('campo' => 'estado', 'valor' => 1),
                    );
                }
                $vta_comision_vta_ajuste_debe_configuracion = VtaComisionVtaAjusteDebeConfiguracion::getOxArray($array);
                if ($vta_comision_vta_ajuste_debe_configuracion) {

                    // ----------------------------------------------------------
                    // se recupera el porcentaje de comision customizado para el comisionista y el comprobante
                    // ----------------------------------------------------------
                    $arr_porcentaje_comision_personalizado['porcentaje_comision'] = $vta_comision_vta_ajuste_debe_configuracion->getPorcentajeComision();
                    $arr_porcentaje_comision_personalizado['observacion'] = $vta_comision_vta_ajuste_debe_configuracion->getObservacion();
                }
                break;
        }

        return $arr_porcentaje_comision_personalizado;
    }

}

?>