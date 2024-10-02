<?php

require_once "base/BPdeOrdenPago.php";

class PdeOrdenPago extends BPdeOrdenPago {

    const PREFIJO_ORDEN_PAGO = 'OP-';

    static function setInicializarPdeOrdenPago($prv_proveedor_id, $var_sesion_random, $chk_pde_comprobantes, $txt_pde_comprobante_importe_saldos, $hdn_pde_comprobante_classs, $cmb_gral_fp_forma_pago_ids, $txt_descripcions, $txt_importe_unitarios, $gral_empresa_id, $pde_centro_pedido_id, $txa_observacion, $txt_tributo_importes, $txt_tributo_fechas_db, $txt_tributo_numeros, $txt_p1_comprobante_total_importe_imponible) {
        $gral_mes = GralMes::getOxCodigoNumero(date('m'));

        $prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);

        $pde_orden_pago = new PdeOrdenPago();
        $pde_orden_pago->setPrvProveedorId($prv_proveedor_id);
        $pde_orden_pago->setGralEmpresaId($gral_empresa_id);
        $pde_orden_pago->setPdeCentroPedidoId($pde_centro_pedido_id);
        $pde_orden_pago->setFechaEmision(Gral::getFechaActual());
        if ($gral_mes) {
            $pde_orden_pago->setGralMesId($gral_mes->getId());
        }
        $pde_orden_pago->setAnio(date('Y'));
        $pde_orden_pago->setObservacion($txa_observacion);
        $pde_orden_pago->setEstado(1);

        if ($prv_proveedor) {
            $pde_orden_pago->setRazonSocial($prv_proveedor->getRazonSocial());
            $pde_orden_pago->setDomicilioLegal($prv_proveedor->getDomicilioLegal());
            $pde_orden_pago->setCuit($prv_proveedor->getCuit());
            $pde_orden_pago->setGralCondicionIvaId($prv_proveedor->getGralCondicionIvaId());
            $pde_orden_pago->setGralTipoPersoneriaId($prv_proveedor->getGralTipoPersoneriaId());

            $pde_orden_pago->setPersonaDescripcion($prv_proveedor->getRazonSocial());
        }

        $pde_orden_pago->save();

        // --------------------------------------------------------------------
        // se setea el estado inicial de la op
        // --------------------------------------------------------------------
        $pde_orden_pago->setCodigo(self::PREFIJO_ORDEN_PAGO . str_pad($pde_orden_pago->getId(), 8, 0, STR_PAD_LEFT));
        $pde_orden_pago->save();

        // --------------------------------------------------------------------
        // se registra el estado inicial de la orden de pago
        // --------------------------------------------------------------------
        $pde_orden_pago_estado = $pde_orden_pago->setPdeOrdenPagoEstado(PdeOrdenPagoTipoEstado::TIPO_GENERADO, $txa_observacion);


        // --------------------------------------------------------------------
        // se vinculan los comprobantes a la orden de pago
        // --------------------------------------------------------------------
        if (!empty($pde_orden_pago->getId()) && is_array($chk_pde_comprobantes)) {
            foreach ($chk_pde_comprobantes as $i => $pde_comprobante_id) {

                $pde_comprobante_class = $hdn_pde_comprobante_classs[$i];
                $pde_comprobante = PdeComprobante::getOxId($pde_comprobante_id, $pde_comprobante_class);

                $txt_pde_comprobante_importe_saldo = $txt_pde_comprobante_importe_saldos[$i];
                $txt_pde_comprobante_importe_saldo = Gral::getImporteDesdePriceFormatToDB($txt_pde_comprobante_importe_saldo);

                /*
                  // cambio el estado en el caso de factura parcial o total
                  if ($pde_oc->getCantidadDisponibleEnFactura() == $cantidad_a_facturar) {
                  $pde_oc->setPdeOcEstadoFacturacion(PdeOcTipoEstadoFacturacion::TIPO_ESTADO_FACTURA_TOTAL);
                  } else {
                  $pde_oc->setPdeOcEstadoFacturacion(PdeOcTipoEstadoFacturacion::TIPO_ESTADO_FACTURA_PARCIAL);
                  }
                 */

                switch ($pde_comprobante_class) {
                    case 'PdeFactura':
                        $pde_orden_pago_pde_vta_factura = new PdeOrdenPagoPdeFactura();
                        $pde_orden_pago_pde_vta_factura->setDescripcion($pde_comprobante->getDescripcion());
                        $pde_orden_pago_pde_vta_factura->setPdeOrdenPagoId($pde_orden_pago->getId());
                        $pde_orden_pago_pde_vta_factura->setPdeFacturaId($pde_comprobante->getId());
                        $pde_orden_pago_pde_vta_factura->setImporteAfectado($txt_pde_comprobante_importe_saldo);
                        $pde_orden_pago_pde_vta_factura->setCodigo('');
                        $pde_orden_pago_pde_vta_factura->setObservacion('');
                        $pde_orden_pago_pde_vta_factura->setEstado(1);
                        $pde_orden_pago_pde_vta_factura->save();
                        break;
                    case 'PdeNotaDebito':
                        $pde_orden_pago_pde_vta_nota_debito = new PdeOrdenPagoPdeNotaDebito();
                        $pde_orden_pago_pde_vta_nota_debito->setDescripcion($pde_comprobante->getDescripcion());
                        $pde_orden_pago_pde_vta_nota_debito->setPdeOrdenPagoId($pde_orden_pago->getId());
                        $pde_orden_pago_pde_vta_nota_debito->setPdeNotaDebitoId($pde_comprobante->getId());
                        $pde_orden_pago_pde_vta_nota_debito->setImporteAfectado($txt_pde_comprobante_importe_saldo);
                        $pde_orden_pago_pde_vta_nota_debito->setCodigo('');
                        $pde_orden_pago_pde_vta_nota_debito->setObservacion('');
                        $pde_orden_pago_pde_vta_nota_debito->setEstado(1);
                        $pde_orden_pago_pde_vta_nota_debito->save();
                        break;
                }
            }
        }


        // --------------------------------------------------------------------
        // se vinculan los comprobantes a la orden de pago
        // --------------------------------------------------------------------
        if (!empty($pde_orden_pago->getId())) {
            foreach ($cmb_gral_fp_forma_pago_ids as $i => $cmb_gral_fp_forma_pago_id) {

                $gral_fp_forma_pago = GralFpFormaPago::getOxId($cmb_gral_fp_forma_pago_id);

                $txt_descripcion = $txt_descripcions[$i];

                $txt_importe_unitario = $txt_importe_unitarios[$i];
                $txt_importe_unitario = Gral::getImporteDesdePriceFormatToDB($txt_importe_unitario);

                $pde_orden_pago_gral_fp_forma_pago = new PdeOrdenPagoGralFpFormaPago();
                $pde_orden_pago_gral_fp_forma_pago->setDescripcion($txt_descripcion);
                $pde_orden_pago_gral_fp_forma_pago->setPdeOrdenPagoId($pde_orden_pago->getId());
                $pde_orden_pago_gral_fp_forma_pago->setGralFpFormaPagoId($gral_fp_forma_pago->getId());
                $pde_orden_pago_gral_fp_forma_pago->setImporteAfectado($txt_importe_unitario);
                $pde_orden_pago_gral_fp_forma_pago->setCodigo('');
                $pde_orden_pago_gral_fp_forma_pago->setObservacion('');
                $pde_orden_pago_gral_fp_forma_pago->setEstado(1);
                $pde_orden_pago_gral_fp_forma_pago->save();

                // -------------------------------------------------------------
                // Se registra el detalle del cheque si existe
                // -------------------------------------------------------------
                $arr_pde_orden_pago_cheque_infos = Gral::getSes('pde_orden_pago_cheque_info' . $var_sesion_random);

                if (!is_null($arr_pde_orden_pago_cheque_infos[$i])) {
                    $pde_orden_pago_gral_fp_forma_pago_cheque = new PdeOrdenPagoGralFpFormaPagoCheque();

                    $arr = $arr_pde_orden_pago_cheque_infos[$i];
                    $cheque_id = $arr['cheque_id'];

                    $pde_orden_pago_gral_fp_forma_pago_cheque->setPdeOrdenPagoId($pde_orden_pago->getId());
                    $pde_orden_pago_gral_fp_forma_pago_cheque->setPdeOrdenPagoGralFpFormaPagoId($pde_orden_pago_gral_fp_forma_pago->getId());
                    $pde_orden_pago_gral_fp_forma_pago_cheque->setGralBancoId($arr['gral_banco_id']);
                    $pde_orden_pago_gral_fp_forma_pago_cheque->setDescripcion($arr['descripcion']);
                    $pde_orden_pago_gral_fp_forma_pago_cheque->setEntregador($arr['entregador']);
                    $pde_orden_pago_gral_fp_forma_pago_cheque->setFirmante($arr['firmante']);
                    $pde_orden_pago_gral_fp_forma_pago_cheque->setNumeroCheque($arr['numero_cheque']);
                    $pde_orden_pago_gral_fp_forma_pago_cheque->setFechaCobro($arr['fecha_cobro']);
                    $pde_orden_pago_gral_fp_forma_pago_cheque->setFechaEmision($arr['fecha_emision']);
                    $pde_orden_pago_gral_fp_forma_pago_cheque->setEstado(1);

                    $pde_orden_pago_gral_fp_forma_pago_cheque->save();

                    // -------------------------------------------------------------
                    // inicializa cheque
                    // -------------------------------------------------------------
                    $fnd_chq_cheque = FndChqCheque::inicializarFndChqChequeDesdePdeOrdenPago($cheque_id, $pde_orden_pago_gral_fp_forma_pago, $arr);
                }
            }
        }

        // --------------------------------------------------------------------
        // se vinculan tributos a la Factura
        // --------------------------------------------------------------------
        $pde_orden_pago->setAgregarTributos($txt_tributo_importes, $txt_tributo_fechas_db, $txt_tributo_numeros, $txt_p1_comprobante_total_importe_imponible);

        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $pde_orden_pago->setActualizarResumenComprobante();

        return $pde_orden_pago;
    }

    /**
     * [setAgregarTributos description]
     * @param [type] $txt_comprobante_tributos [description]
     */
    public function setAgregarTributos($txt_tributo_importes, $txt_tributo_fechas_db, $txt_tributo_numeros, $txt_p1_comprobante_total_importe_imponible) {
        // ---------------------------------------------------------------------
        // se eliminan los tributos existentes para cargarlos nuevamente
        // ---------------------------------------------------------------------
        $this->deletePdeOrdenPagoPdeTributos();

        if (is_array($txt_tributo_importes)) {
            foreach ($txt_tributo_importes as $pde_tributo_id => $txt_tributo_importe) {
                $pde_tributo = PdeTributo::getOxId($pde_tributo_id);

                $txt_tributo_fecha_db = $txt_tributo_fechas_db[$pde_tributo_id];
                $txt_tributo_numero = $txt_tributo_numeros[$pde_tributo_id];

                $anio = substr($txt_tributo_fecha_db, 0, 4);

                $arr_tributo_numero = $pde_tributo->getArrRetencionNumeroProximoParaCodigo($anio);
                $tributo_codigo = $arr_tributo_numero['codigo'];
                $tributo_numero = $arr_tributo_numero['numero'];
                $tributo_anio = $arr_tributo_numero['anio'];

                $txt_tributo_importe = Gral::getImporteDesdePriceFormatToDB($txt_tributo_importe);

                if ($txt_tributo_importe != 0) {
                    $array = array(
                        array('campo' => 'pde_orden_pago_id', 'valor' => $this->getId()),
                        array('campo' => 'pde_tributo_id', 'valor' => $pde_tributo->getId()),
                    );

                    $pde_orden_pago_pde_tributo = PdeOrdenPagoPdeTributo::getOxArray($array);
                    if (!$pde_orden_pago_pde_tributo) {
                        $pde_orden_pago_pde_tributo = new PdeOrdenPagoPdeTributo();
                        $pde_orden_pago_pde_tributo->setPdeOrdenPagoId($this->getId());
                        $pde_orden_pago_pde_tributo->setPdeTributoId($pde_tributo->getId());
                    }

                    $importe_tributo = $txt_tributo_importe;
                    $importe_imponible = 0;
                    $alicuota_porcentual = 0;
                    $alicuota_decimal = 0;

                    if (trim($txt_p1_comprobante_total_importe_imponible) != 0) {
                        $importe_imponible = $txt_p1_comprobante_total_importe_imponible;
                        $alicuota_porcentual = ($txt_tributo_importe / $importe_imponible) * 100;
                        $alicuota_decimal = ($txt_tributo_importe / $importe_imponible);
                    }

                    if (trim($txt_tributo_numero) != '') {
                        $pde_orden_pago_pde_tributo->setCodigo($txt_tributo_numero);
                    } else {
                        $pde_orden_pago_pde_tributo->setCodigo($tributo_codigo);
                    }
                    $pde_orden_pago_pde_tributo->setDescripcion($tributo_codigo);
                    $pde_orden_pago_pde_tributo->setFechaEmision($txt_tributo_fecha_db);
                    $pde_orden_pago_pde_tributo->setImporteImponible($importe_imponible);
                    $pde_orden_pago_pde_tributo->setImporteTributo($importe_tributo);
                    $pde_orden_pago_pde_tributo->setAlicuotaPorcentual($alicuota_porcentual);
                    $pde_orden_pago_pde_tributo->setAlicuotaDecimal($alicuota_decimal);
                    $pde_orden_pago_pde_tributo->setEstado($tributo_anio); // temporal por ausencia de campos numero y anio
                    $pde_orden_pago_pde_tributo->setOrden($tributo_numero); // temporal por ausencia de campos numero y anio
                    //$pde_orden_pago_pde_tributo->setEstado(1); // temporal por ausencia de campos numero y anio
                    $pde_orden_pago_pde_tributo->save();

                    //Gral::prr($pde_orden_pago_pde_tributo);
                }
            }
        }
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 21/09/2018 19:13 hs.
     * Metodo que registra un nuevo estado de la orden de pago.
     * @return Obj PdeOrdenPagoEstado
     */
    public function setPdeOrdenPagoEstado($codigo, $observacion = '', $cmb_prv_preventista_id = false, $cmb_gral_empresa_transportadora_id = false, $txt_guia = '', $txa_nota_publica = '') {
        $inicial = 1;
        $pde_orden_pago_estado = false;

        // se agrega el nuevo estado del orden de pago
        $pde_orden_pago_tipo_estado = PdeOrdenPagoTipoEstado::getOxCodigo($codigo);

        if ($pde_orden_pago_tipo_estado) {
            foreach ($this->getPdeOrdenPagoEstados() as $pde_orden_pago_estado) {
                $pde_orden_pago_estado->setActual(0);
                $pde_orden_pago_estado->save();
                $inicial = 0;
            }

            $pde_orden_pago_estado = new PdeOrdenPagoEstado();
            $pde_orden_pago_estado->setPdeOrdenPagoId($this->getId());
            $pde_orden_pago_estado->setPdeOrdenPagoTipoEstadoId($pde_orden_pago_tipo_estado->getId());
            if ($cmb_prv_preventista_id) {
                $pde_orden_pago_estado->setPrvPreventistaId($cmb_prv_preventista_id);
            }
            if ($cmb_gral_empresa_transportadora_id) {
                $pde_orden_pago_estado->setGralEmpresaTransportadoraId($cmb_gral_empresa_transportadora_id);
            }
            $pde_orden_pago_estado->setGuia($txt_guia);
            $pde_orden_pago_estado->setNotaPublica($txa_nota_publica);

            $pde_orden_pago_estado->setInicial($inicial);
            $pde_orden_pago_estado->setActual(1);
            $pde_orden_pago_estado->setObservacion($observacion);
            $pde_orden_pago_estado->save();

            // actualizamos el estado en pde_orden_pago      
            $this->setPdeOrdenPagoTipoEstadoId($pde_orden_pago_tipo_estado->getId());
            $this->save();
        }

        // ---------------------------------------------------------------------
        // se registran los movimientos contables, si lo requiere
        // ---------------------------------------------------------------------
        //$this->setRegistrarContabilidad();
        // ---------------------------------------------------------------------

        return $pde_orden_pago_estado;
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
     * @return Obj PdeOrdenPagoEstado
     */
    public function getPdeOrdenPagoEstadoActual() {
        $c = new Criterio();
        $c->add(PdeOrdenPagoEstado::GEN_ATTR_PDE_ORDEN_PAGO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PdeOrdenPagoEstado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->addTabla(PdeOrdenPagoEstado::GEN_TABLA);
        $c->setCriterios();

        $pde_orden_pago_estados = PdeOrdenPagoEstado::getPdeOrdenPagoEstados(null, $c);
        foreach ($pde_orden_pago_estados as $pde_orden_pago_estado) {
            return $pde_orden_pago_estado;
        }
        return false;
    }

    public function getPdeComprobantes() {

        $pde_facturas = $this->getPdeFacturasXPdeOrdenPagoPdeFactura();
        $pde_nota_debitos = $this->getPdeNotaDebitosXPdeOrdenPagoPdeNotaDebito();

        $pde_comprobantes = array_merge($pde_facturas, $pde_nota_debitos);
        return $pde_comprobantes;
    }

    public function getPdeOrdenPagoPdeComprobantes() {

        $pde_orden_pago_pde_facturas = $this->getPdeOrdenPagoPdeFacturas(null, null, true);
        $pde_orden_pago_pde_nota_debitos = $this->getPdeOrdenPagoPdeNotaDebitos(null, null, true);

        $pde_orden_venta_pde_comprobantes = array_merge($pde_orden_pago_pde_facturas, $pde_orden_pago_pde_nota_debitos);
        return $pde_orden_venta_pde_comprobantes;
    }

    public function getPdeOrdenPagoTotal() {
        $import_total = 0;

        $pde_orden_pago_gral_fp_forma_pagos = $this->getPdeOrdenPagoGralFpFormaPagos(null, null, true);
        foreach ($pde_orden_pago_gral_fp_forma_pagos as $pde_orden_pago_gral_fp_forma_pago) {
            $import_total += $pde_orden_pago_gral_fp_forma_pago->getImporteAfectado();
        }

        return $import_total;
    }

    public function getPdeOrdenPagoTotalComprobantes() {
        $import_total = 0;

        $pde_orden_pago_pde_facturas = $this->getPdeOrdenPagoPdeFacturas(null, null, true);
        foreach ($pde_orden_pago_pde_facturas as $pde_orden_pago_pde_factura) {
            $import_total += $pde_orden_pago_pde_factura->getImporteAfectado();
        }

        $pde_orden_pago_pde_nota_debitos = $this->getPdeOrdenPagoPdeNotaDebitos(null, null, true);
        foreach ($pde_orden_pago_pde_nota_debitos as $pde_orden_pago_pde_nota_debito) {
            $import_total += $pde_orden_pago_pde_nota_debito->getImporteAfectado();
        }

        return $import_total;
    }

    public function getPdeOrdenPagoTotalRetenciones() {
        $total_importe_retenciones = 0;
        //$pde_orden_pago_pde_tributos = $this->getPdeOrdenPagoPdeTributos(null, null, true); // activar cuando se use correctamente el campo estado
        $pde_orden_pago_pde_tributos = $this->getPdeOrdenPagoPdeTributos();
        foreach ($pde_orden_pago_pde_tributos as $pde_orden_pago_pde_tributo) {
            $importe_comprobante_tributo = $pde_orden_pago_pde_tributo->getImporteTributo();
            $total_importe_retenciones += $importe_comprobante_tributo;
        }

        return $total_importe_retenciones;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 24/09/2018 14:55 hs.
     * Metodo que envio la OP por email
     * @return 
     */
    public function enviarOrdenPagoEmail($enviar = false, $destinatarios = false, $txa_observacion, $archivo_adjunto_urls = false) {
        if (!Mail::MAIL_ACTIVO)
            return false;

        $mail_asunto = Gral::getConfig('gral_cliente') . ' - Orden de Pago #' . $this->getCodigo() . ' ' . date('d/m/Y H:i');

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $destinatarios = str_replace(' ', '', $destinatarios);
        $destinatarios = str_replace(',', ';', $destinatarios);
        $arr_destinatarios = explode(";", $destinatarios);

        $param = array(
            'pde_orden_pago_id' => $this->getId(),
            'observacion' => $txa_observacion,
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/GENERAL/index_pde_orden_pago.php";
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

        $pde_orden_pago_enviado = $this->inicializarPdeOrdenPagoEnviado($txa_observacion, $destinatarios, $mail_asunto, $msg, $strContenidoPdf);

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
                $pde_orden_pago_enviado->setConfirmarPdeOrdenPagoEnviado(1, 'Enviado Correctamente');
            } else {
                $pde_orden_pago_enviado->setConfirmarPdeOrdenPagoEnviado(0, $mail->ErrorInfo);
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
     * @return PdeOrdenPagoEnviado
     */
    public function inicializarPdeOrdenPagoEnviado($observacion, $destinatarios, $mail_asunto, $mail_contenido, $archivo_adjunto) {
        $pde_orden_pago_enviado = new PdeOrdenPagoEnviado();
        $pde_orden_pago_enviado->setDescripcion('');
        $pde_orden_pago_enviado->setPdeOrdenPagoId($this->getId());
        $pde_orden_pago_enviado->setAsunto($mail_asunto);
        $pde_orden_pago_enviado->setDestinatario($destinatarios);

        $pde_orden_pago_enviado->setCuerpo(addslashes($mail_contenido));
        $pde_orden_pago_enviado->setAdjunto(base64_encode($archivo_adjunto));

        $pde_orden_pago_enviado->setCodigoEnvio(0);
        $pde_orden_pago_enviado->setObservacion($observacion);
        $pde_orden_pago_enviado->setEstado(0);

        $pde_orden_pago_enviado->save();

        return $pde_orden_pago_enviado;
    }

    public function getNombreArchivoAdjuntoOrdenPago() {
        $nombre = Gral::getConfig('conf_proyecto_min') . '_' . $this->getCodigo() . '_' . $this->getPersonaDescripcion();
        $nombre = str_replace('.', '', $nombre);
        $nombre = str_replace('-', '_', $nombre);
        $nombre = str_replace(' ', '_', $nombre);
        return $nombre . '.pdf';
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 11/05/2019
     */
    public function setPdeOrdenPagoAnular($observacion = '') {
        $pde_orden_pago_estado = $this->setPdeOrdenPagoEstado(PdeOrdenPagoTipoEstado::TIPO_ANULADO, $observacion);

        // ---------------------------------------------------------------------
        // se consulta si la OP tiene cheques vinculados para retrotreaer su estado
        // ---------------------------------------------------------------------        
        $pde_orden_pago_gral_fp_forma_pagos = $this->getPdeOrdenPagoGralFpFormaPagos();
        foreach ($pde_orden_pago_gral_fp_forma_pagos as $pde_orden_pago_gral_fp_forma_pago) {
            $fnd_chq_cheque = $pde_orden_pago_gral_fp_forma_pago->getFndChqCheque();
            if ($fnd_chq_cheque) {
                $fnd_chq_cheque->setRetrotraerFndChqChequeTipoEstado('Orden de Pago Anulada: ' . $observacion);
            }
        }

        // ---------------------------------------------------------------------
        // se consulta si la OP tiene recibos vinculados para anular y desimputar
        // ---------------------------------------------------------------------        
        $pde_recibo_vinculado = $this->getPdeRecibo();
        if ($pde_recibo_vinculado) {
            // ---------------------------------------------------------------------
            // se desimputa el recivo
            // ---------------------------------------------------------------------        
            $pde_recibo_vinculado->setDesvincularComprobantesConciliados($recursivo = true);

            // ---------------------------------------------------------------------
            // se anula el recibo
            // ---------------------------------------------------------------------   
            $pde_recibo_estado = $pde_recibo_vinculado->setPdeReciboAnular($observacion);
        }

        return $pde_orden_pago_estado;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 11/05/2019
     */
    public function setPdeOrdenPagoRechazar($observacion = '') {
        $pde_orden_pago_estado = $this->setPdeOrdenPagoEstado(PdeOrdenPagoTipoEstado::TIPO_RECHAZADO, $observacion);

        $pde_orden_pago_gral_fp_forma_pagos = $this->getPdeOrdenPagoGralFpFormaPagos();
        foreach ($pde_orden_pago_gral_fp_forma_pagos as $pde_orden_pago_gral_fp_forma_pago) {
            $fnd_chq_cheque = $pde_orden_pago_gral_fp_forma_pago->getFndChqCheque();
            if ($fnd_chq_cheque) {
                $fnd_chq_cheque->setRetrotraerFndChqChequeTipoEstado('Orden de Pago Rechazada: ' . $observacion);
            }
        }

        return $pde_orden_pago_estado;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 11/05/2019
     */
    public function setPdeOrdenPagoPagoPreventista($observacion = '', $prv_preventista_id, $nota_publica = '') {
        $pde_orden_pago_estado = $this->setPdeOrdenPagoEstado(PdeOrdenPagoTipoEstado::TIPO_PAGO_PREVENTISTA, $observacion, $prv_preventista_id, false, false, $nota_publica);

        $pde_orden_pago_gral_fp_forma_pagos = $this->getPdeOrdenPagoGralFpFormaPagos();
        foreach ($pde_orden_pago_gral_fp_forma_pagos as $pde_orden_pago_gral_fp_forma_pago) {
            $fnd_chq_cheque = $pde_orden_pago_gral_fp_forma_pago->getFndChqCheque();
            if ($fnd_chq_cheque) {
                $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_ENTREGADO, 'Orden de Pago Pagada a Preventista: ' . $observacion);
            }
        }

        return $pde_orden_pago_estado;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 11/05/2019
     */
    public function setPdeOrdenPagoPagoEnviado($observacion = '', $gral_empresa_transportadora_id, $guia, $nota_publica = '') {
        // -------------------------------------------------------------
        // Se cambia el estado de la orden de pago a enviado
        // -------------------------------------------------------------
        $pde_orden_pago_estado = $this->setPdeOrdenPagoEstado(PdeOrdenPagoTipoEstado::TIPO_PAGO_ENVIADO, $observacion, false, $gral_empresa_transportadora_id, $guia, $nota_publica);

        $pde_orden_pago_gral_fp_forma_pagos = $this->getPdeOrdenPagoGralFpFormaPagos();
        foreach ($pde_orden_pago_gral_fp_forma_pagos as $pde_orden_pago_gral_fp_forma_pago) {

            $fnd_chq_cheque = $pde_orden_pago_gral_fp_forma_pago->getFndChqCheque();
            if ($fnd_chq_cheque) {
                // -------------------------------------------------------------
                // Se cambia el estado del cheque a entregado
                // -------------------------------------------------------------
                $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_ENTREGADO, 'Orden de Pago Enviada: ' . $observacion);

                // -------------------------------------------------------------
                // Se desvincula el cheque de la caja
                // -------------------------------------------------------------
                $fnd_chq_cheque->setDesvincularDeCaja();
            }
        }

        return $pde_orden_pago_estado;
    }

    /**
     * Actualiza el resumen de comprobante (su extension importe)
     * @return [Object] [Objeto Comprobante Importe]
     */
    public function setActualizarResumenComprobante() {
        $pde_orden_pago_importe = $this->getPdeOrdenPagoImporte();

        if (!$pde_orden_pago_importe) {
            $pde_orden_pago_importe = new PdeOrdenPagoImporte();
        }

        $importe_subtotal = 0;
        $importe_iva = 0;
        $importe_tributo = 0;
        $importe_total = $this->getPdeOrdenPagoTotal();

        $pde_orden_pago_importe->setDescripcion($this->getCodigo());
        $pde_orden_pago_importe->setPdeOrdenPagoId($this->getId());
        $pde_orden_pago_importe->setImporteSubtotal($importe_subtotal);
        $pde_orden_pago_importe->setImporteIva($importe_iva);
        $pde_orden_pago_importe->setImporteTributo($importe_tributo);
        $pde_orden_pago_importe->setImporteTotal($importe_total);
        $pde_orden_pago_importe->setEstado(1);
        $pde_orden_pago_importe->save();

        return $pde_orden_pago_importe;
    }

    /**
     * Retorna un resumen de comprobante (su extension importe)
     * @return [Object] [Objeto Comprobante Importe]
     */
    public function getResumenComprobante() {
        if ($this->getPdeOrdenPagoImporte()) {
            return $this->getPdeOrdenPagoImporte();
        }

        return new PdeOrdenPagoImporte();
    }

}

?>