<?php

require_once "base/BPdeOcAgrupacion.php";

class PdeOcAgrupacion extends BPdeOcAgrupacion {

    const PREFIJO_CODIGO = "AOC";

    public function getCodigoConCeros() {
        $codigo = self::PREFIJO_CODIGO;
        $codigo .= str_pad($this->getId(), 8, "0", STR_PAD_LEFT);

        return $codigo;
    }

    public function getDescripcion() {
        $texto = $this->getCodigo();
        $texto .= " - ";
        $texto .= Gral::getFechaToWeb($this->getCreado());
        return $texto;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 07/08/2018 09:16 hs.
     * Metodo que registra un nuevo estado para la Orden de Compra
     */
    public function setPdeOcAgrupacionEstado($tipo_estado_codigo, $observaciones) {
        $inicial = 1;
        foreach ($this->getPdeOcAgrupacionEstados() as $pde_oc_agrupacion_estado) {
            $pde_oc_agrupacion_estado->setActual(0);
            $pde_oc_agrupacion_estado->save();

            $inicial = 0;
        }

        $pde_oc_agrupacion_tipo_estado = PdeOcAgrupacionTipoEstado::getOxCodigo($tipo_estado_codigo);

        $pde_oc_agrupacion_estado = new PdeOcAgrupacionEstado();
        $pde_oc_agrupacion_estado->setPdeOcAgrupacionId($this->getId());
        $pde_oc_agrupacion_estado->setPdeOcAgrupacionTipoEstadoId($pde_oc_agrupacion_tipo_estado->getId());
        $pde_oc_agrupacion_estado->setInicial($inicial);
        $pde_oc_agrupacion_estado->setActual(1);
        $pde_oc_agrupacion_estado->setObservacion($observaciones);
        $pde_oc_agrupacion_estado->save();

        // se setea el estado en pde oc
        $this->setPdeOcAgrupacionTipoEstadoId($pde_oc_agrupacion_tipo_estado->getId());
        $this->save();

        return $pde_oc_agrupacion_estado;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 07/08/2018 09:16 hs.
     * Metodo que retorna el estado actual del PdeOc
     * @return PdeOcAgrupacionEstado
     */
    public function getPdeOcAgrupacionEstadoActual() {
        $c = new Criterio();
        $c->add(PdeOcAgrupacionEstado::GEN_ATTR_PDE_OC_AGRUPACION_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PdeOcAgrupacionEstado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->addTabla(PdeOcAgrupacionEstado::GEN_TABLA);
        $c->setCriterios();

        $pde_oc_agrupacion_estados = PdeOcAgrupacionEstado::getPdeOcAgrupacionEstados(new Paginador(1, 1), $c);
        foreach ($pde_oc_agrupacion_estados as $pde_oc_agrupacion_estado) {
            return $pde_oc_agrupacion_estado;
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 07/08/2018 09:16 hs.
     * Metodo que retorna el tipo de estado actual del PdeOc
     * @return PdeOcAgrupacionTipoEstado
     */
    public function getPdeOcAgrupacionTipoEstadoActual() {
        $pde_oc_agrupacion_estado_actual = $this->getPdeOcAgrupacionEstadoActual();
        if ($pde_oc_agrupacion_estado_actual) {
            return $pde_oc_agrupacion_estado_actual->getPdeOcAgrupacionTipoEstado();
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 07/08/2018 09:16 hs.
     * Metodo que retorna el estado de un PdeOc de acuerdo a un codigo de PdeOcAgrupacionTipoEstado indicado
     * @return PdeEstado
     */
    public function getPdeOcAgrupacionEstadoXCodigoDePdeOcAgrupacionTipoEstado($valor) {
        $c = new Criterio();
        $c->add(PdeOcAgrupacionEstado::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PdeOcAgrupacionTipoEstado::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
        $c->addTabla(PdeOcAgrupacionEstado::GEN_TABLA);
        $c->addRealJoin(PdeOcAgrupacionTipoEstado::GEN_TABLA, PdeOcAgrupacionTipoEstado::GEN_ATTR_ID, PdeOcAgrupacionEstado::GEN_ATTR_PDE_OC_TIPO_ESTADO_ID);
        $c->setCriterios();

        $pde_oc_agrupacion_estados = PdeOcAgrupacionEstado::getPdeOcAgrupacionEstados(null, $c);
        foreach ($pde_oc_agrupacion_estados as $pde_oc_agrupacion_estado) {
            return $pde_oc_agrupacion_estado;
        }
        return false;
    }

    /**
     * Metodo que retorna el costo total estimado de la AOC
     */
    public function getCostoTotalEstimado() {
        $importe = 0;

        $pde_ocs = $this->getPdeOcs();
        foreach ($pde_ocs as $pde_oc) {
            $importe += ($pde_oc->getImporteTotal());
        }

        $pde_oc_agrupacion_items = $this->getPdeOcAgrupacionItems();
        foreach ($pde_oc_agrupacion_items as $pde_oc_agrupacion_item) {
            $importe_con_descuento = PdeOcAgrupacion::getImporteConDescuentoComercial($pde_oc_agrupacion_item->getPrvDescuentoComercialId(), $pde_oc_agrupacion_item->getImporteUnidad());
            $importe += $importe_con_descuento * $pde_oc_agrupacion_item->getCantidad();

            //$importe += ($pde_oc_agrupacion_item->getImporteUnidad() * $pde_oc_agrupacion_item->getCantidad());
        }

        return $importe;
    }

    /**
     * Metodo que retorna el costo total estimado de la AOC
     */
    public function getImporteSubtotal() {
        $importe = $this->getCostoTotalEstimado();
        return $importe;
    }
    
    /**
     * Metodo que retorna el costo total estimado de la AOC
     */
    public function getImporteTotalConIva() {
        $importe = 0;

        $pde_ocs = $this->getPdeOcs();
        foreach ($pde_ocs as $pde_oc) {
            $gral_tipo_iva = $pde_oc->getInsInsumo()->getGralTipoIvaCompraObj();

            $importe_con_descuento = PdeOcAgrupacion::getImporteConDescuentoComercial($pde_oc->getPrvDescuentoComercialId(), $pde_oc->getImporteUnidad());
            $iva = ($gral_tipo_iva->getValorIva() / 100) * $importe_con_descuento * $pde_oc->getCantidad();
            
            $importe += ($pde_oc->getImporteTotal()) + $iva;
        }

        $pde_oc_agrupacion_items = $this->getPdeOcAgrupacionItems();
        foreach ($pde_oc_agrupacion_items as $pde_oc_agrupacion_item) {
            $gral_tipo_iva = $pde_oc_agrupacion_item->getInsInsumo()->getGralTipoIvaCompraObj();

            $importe_con_descuento = PdeOcAgrupacion::getImporteConDescuentoComercial($pde_oc_agrupacion_item->getPrvDescuentoComercialId(), $pde_oc_agrupacion_item->getImporteUnidad());
            $iva = ($gral_tipo_iva->getValorIva() / 100) * $importe_con_descuento * $pde_oc_agrupacion_item->getCantidad();
            
            $importe += $importe_con_descuento * $pde_oc_agrupacion_item->getCantidad() + $iva;
        }

        return $importe;
    }

    /**
     * Autor: Pablo Rosen.
     * Fecha: 02/11/2020 09:48 hs.
     * Metodo que retorna un array con los valores de iva de la AOC.
     * @return Float
     */
    public function getArrTipoIvas() {
        $arr_iva = array();

        $pde_ocs = $this->getPdeOcs();
        foreach ($pde_ocs as $pde_oc) {
            $gral_tipo_iva = $pde_oc->getInsInsumo()->getGralTipoIvaCompraObj();
            
            $importe_con_descuento = PdeOcAgrupacion::getImporteConDescuentoComercial($pde_oc->getPrvDescuentoComercialId(), $pde_oc->getImporteUnidad());
            $iva = ($gral_tipo_iva->getValorIva() / 100) * $importe_con_descuento * $pde_oc->getCantidad();
            $arr_iva[$gral_tipo_iva->getCodigo()] = $arr_iva[$gral_tipo_iva->getCodigo()] + $iva;
        }

        $pde_oc_agrupacion_items = $this->getPdeOcAgrupacionItems();
        foreach ($pde_oc_agrupacion_items as $pde_oc_agrupacion_item) {
            $gral_tipo_iva = $pde_oc_agrupacion_item->getInsInsumo()->getGralTipoIvaCompraObj();
            
            $importe_con_descuento = PdeOcAgrupacion::getImporteConDescuentoComercial($pde_oc_agrupacion_item->getPrvDescuentoComercialId(), $pde_oc_agrupacion_item->getImporteUnidad());
            $iva = ($gral_tipo_iva->getValorIva() / 100) * $importe_con_descuento * $pde_oc_agrupacion_item->getCantidad();
            $arr_iva[$gral_tipo_iva->getCodigo()] = $arr_iva[$gral_tipo_iva->getCodigo()] + $iva;
        }

        return $arr_iva;
    }
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 07/08/2018 09:16 hs.
     * Metodo que envia la Agrupacion de OC por email al destinatario indicado.
     * @return 
     */
    public function enviarPdeOcAgrupacionEmail($enviar = false, $destinatarios = false, $txa_observacion, $archivo_adjunto_urls = false) {
        if (!Mail::MAIL_ACTIVO)
            return false;

        $mail_asunto = Gral::getConfig('gral_cliente') . ' - Orden de Compra #' . $this->getCodigo() . ' ' . date('d/m/Y H:i');

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $destinatarios = str_replace(' ', '', $destinatarios);
        $destinatarios = str_replace(',', ';', $destinatarios);
        $arr_destinatarios = explode(";", $destinatarios);

        $param = array(
            'pde_oc_agrupacion_id' => $this->getId(),
            'observacion' => $txa_observacion,
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/GENERAL/index_pde_oc_agrupacion.php";
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

        $pde_oc_agrupacion_enviado = $this->inicializarPdeOcAgrupacionEnviado($txa_observacion, $destinatarios, $mail_asunto, $msg, $strContenidoPdf);

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
            $mail->AddReplyTo(Mail::MAIL_CASILLA_REPLYTO_COMPRAS);

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
                $pde_oc_agrupacion_enviado->setConfirmarPdeOcAgrupacionEnviado(1, 'Enviado correctamente');
            } else {
                $pde_oc_agrupacion_enviado->setConfirmarPdeOcAgrupacionEnviado(0, $mail->ErrorInfo);
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
     * Metodo que Inicializa el envio por mail del factura.
     * @return VtaFacturaEnviado
     */
    public function inicializarPdeOcAgrupacionEnviado($observacion, $destinatarios, $mail_asunto, $mail_contenido, $archivo_adjunto) {
        $pde_oc_agrupacion_enviado = new PdeOcAgrupacionEnviado();
        $pde_oc_agrupacion_enviado->setDescripcion('');
        $pde_oc_agrupacion_enviado->setPdeOcAgrupacionId($this->getId());
        $pde_oc_agrupacion_enviado->setAsunto($mail_asunto);
        $pde_oc_agrupacion_enviado->setDestinatario($destinatarios);

        $pde_oc_agrupacion_enviado->setCuerpo(addslashes($mail_contenido));
        $pde_oc_agrupacion_enviado->setAdjunto(base64_encode($archivo_adjunto));

        $pde_oc_agrupacion_enviado->setCodigoEnvio(0);
        $pde_oc_agrupacion_enviado->setObservacion($observacion);
        $pde_oc_agrupacion_enviado->setEstado(0);

        $pde_oc_agrupacion_enviado->save();

        return $pde_oc_agrupacion_enviado;
    }

    public function getNombreArchivoAdjuntoOrdenCompraAgrupacion() {
        $nombre = Gral::getConfig('conf_proyecto_min') . '_' . $this->getCodigo() . '_' . $this->getPrvProveedor()->getDescripcion();
        $nombre = str_replace('.', '', $nombre);
        $nombre = str_replace('-', '_', $nombre);
        $nombre = str_replace(' ', '_', $nombre);
        return $nombre . '.pdf';
    }

    /**
     * Metodo que registra una agrupacion de oc de manera temporal,
     * permite edicion futura
     * @return PdeOcAgrupacion
     */
    static function addPdeOcAgrupacionTemporal(
    $pde_oc_agrupacion_id, $pde_centro_pedido_id, $prv_proveedor_id, $pde_centro_recepcion_id, $vencimiento, $prv_descuento_financiero_id, $iva_incluido, $arr_items, $observaciones = ''
    ) {

        $pde_oc_tipo_origen = PdeOcTipoOrigen::getOxCodigo(PdeOcTipoOrigen::TIPO_MASIVA);

        // -----------------------------------------------------------------
        // se registra la PdeOcAgrupacion
        // -----------------------------------------------------------------
        if ($pde_oc_agrupacion_id == 0) {
            $pde_oc_agrupacion = new PdeOcAgrupacion();
        } else {
            $pde_oc_agrupacion = PdeOcAgrupacion::getOxId($pde_oc_agrupacion_id);

            // -----------------------------------------------------------------
            // se borran todos los items temporales
            // -----------------------------------------------------------------
            $pde_oc_agrupacion->deletePdeOcAgrupacionItems();
        }
        $pde_oc_agrupacion->setPdeOcTipoOrigenId($pde_oc_tipo_origen->getId()); // origen
        $pde_oc_agrupacion->setPdeCentroPedidoId($pde_centro_pedido_id);
        $pde_oc_agrupacion->setPrvProveedorId($prv_proveedor_id);
        $pde_oc_agrupacion->setPdeCentroRecepcionId($pde_centro_recepcion_id);
        $pde_oc_agrupacion->setPrvDescuentoFinancieroId($prv_descuento_financiero_id);
        $pde_oc_agrupacion->setIvaIncluido($iva_incluido);
        $pde_oc_agrupacion->setFechaEntrega($vencimiento);
        $pde_oc_agrupacion->setVencimiento($vencimiento);
        $pde_oc_agrupacion->setObservacion($observaciones);
        $pde_oc_agrupacion->setEstado(1);
        $pde_oc_agrupacion->save();

        // -----------------------------------------------------------------
        // se setea codigo de PdeOcAgrupacion
        // -----------------------------------------------------------------
        $pde_oc_agrupacion->setCodigo($pde_oc_agrupacion->getCodigoConCeros());
        $pde_oc_agrupacion->save();

        // -----------------------------------------------------------------
        // registrar estado inicial de PdeOcAgrupacion
        // -----------------------------------------------------------------
        $pde_oc_agrupacion_estado = $pde_oc_agrupacion->setPdeOcAgrupacionEstado(
                PdeOcAgrupacionTipoEstado::TIPO_ESTADO_GENERADO, $observaciones
        );

        $orden = 0;
        foreach ($arr_items as $i => $arr_item) {
            $orden++;

            $prv_insumo = false;
            $prv_insumo_costo = false;

            $ins_insumo_id = $arr_item['ins_insumo_id'];
            $ins_insumo_descripcion = $arr_item['ins_insumo_descripcion'];
            $cantidad = $arr_item['cantidad'];
            $prv_insumo_id = $arr_item['prv_insumo_id'];
            $prv_insumo_costo_id = $arr_item['prv_insumo_costo_id'];
            $importe_oc = $arr_item['importe_oc'];
            $prv_descuento_comercial_id = $arr_item['prv_descuento_comercial_id'];
            $afecta_costo = $arr_item['afecta_costo'];
            
            $ins_insumo = InsInsumo::getOxId($ins_insumo_id);
            if (!is_null($prv_insumo_id)) {
                $prv_insumo = PrvInsumo::getOxId($prv_insumo_id);
            }
            if (!is_null($prv_insumo_costo_id)) {
                $prv_insumo_costo = PrvInsumoCosto::getOxId($prv_insumo_costo_id);
            }

            // se identifica el IVA de compra del producto
            $gral_tipo_iva = $ins_insumo->getGralTipoIvaCompraObj();
            
            if($iva_incluido){
                // -------------------------------------------------------------
                // se quita el IVA para guardar en BD si el importe se cargo con IVA Incluido
                // -------------------------------------------------------------
                $importe_oc = $importe_oc /  $gral_tipo_iva->getValorIvaDecimalParaSumarEnCalculo();
            }
            
            $pde_oc_agrupacion_item = new PdeOcAgrupacionItem();
            $pde_oc_agrupacion_item->setPdeOcAgrupacionId($pde_oc_agrupacion->getId());
            $pde_oc_agrupacion_item->setInsInsumoId($ins_insumo->getId());
            $pde_oc_agrupacion_item->setDescripcion($ins_insumo_descripcion);
            $pde_oc_agrupacion_item->setCantidad($cantidad);
            if ($prv_insumo) {
                $pde_oc_agrupacion_item->setPrvInsumoId($prv_insumo->getId());
            }
            if ($prv_insumo_costo) {
                $pde_oc_agrupacion_item->setPrvInsumoCostoId($prv_insumo_costo->getId());

                $importe_esperado = $prv_insumo_costo->getImporteNeto();

                // se afecta el importe esperado con el descuento comercial, si lo hubiese
                $importe_esperado = PdeOcAgrupacion::getImporteConDescuentoComercial($prv_descuento_comercial_id, $importe_esperado);

                $pde_oc_agrupacion_item->setImporteEsperado($importe_esperado);
            }

            $pde_oc_agrupacion_item->setIvaIncluido($iva_incluido);
            $pde_oc_agrupacion_item->setGralTipoIvaId($gral_tipo_iva->getId());
            $pde_oc_agrupacion_item->setImporteUnidad($importe_oc);
            $pde_oc_agrupacion_item->setAfectaCosto($afecta_costo);
            $pde_oc_agrupacion_item->setPrvDescuentoFinancieroId($prv_descuento_financiero_id);
            $pde_oc_agrupacion_item->setPrvDescuentoComercialId($prv_descuento_comercial_id);
            $pde_oc_agrupacion_item->setEstado(1);
            $pde_oc_agrupacion_item->setOrden($orden);
            $pde_oc_agrupacion_item->save();
        }

        return $pde_oc_agrupacion;
    }

    /**
     * Metodo que registra una agrupacion de oc y genera nuevas PdeOcs a en instancia inicial APROBADA
     * @return PdeOcAgrupacion
     */
    static function addPdeOcAgrupacion(
    $pde_oc_agrupacion_id, $pde_centro_pedido_id, $prv_proveedor_id, $pde_centro_recepcion_id, $vencimiento, $prv_descuento_financiero_id, $iva_incluido, $arr_items, $observaciones = ''
    ) {

        $pde_oc_tipo_origen = PdeOcTipoOrigen::getOxCodigo(PdeOcTipoOrigen::TIPO_MASIVA);
        $prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);

        // -----------------------------------------------------------------
        // se registra la PdeOcAgrupacion
        // -----------------------------------------------------------------
        if ($pde_oc_agrupacion_id == 0) {
            $pde_oc_agrupacion = new PdeOcAgrupacion();
        } else {
            $pde_oc_agrupacion = PdeOcAgrupacion::getOxId($pde_oc_agrupacion_id);
        }
        $pde_oc_agrupacion->setPdeOcTipoOrigenId($pde_oc_tipo_origen->getId()); // origen
        $pde_oc_agrupacion->setPdeCentroPedidoId($pde_centro_pedido_id);
        $pde_oc_agrupacion->setPrvProveedorId($prv_proveedor_id);
        $pde_oc_agrupacion->setPdeCentroRecepcionId($pde_centro_recepcion_id);
        $pde_oc_agrupacion->setPrvDescuentoFinancieroId($prv_descuento_financiero_id);
        $pde_oc_agrupacion->setIvaIncluido($iva_incluido);
        $pde_oc_agrupacion->setFechaEntrega($vencimiento);
        $pde_oc_agrupacion->setVencimiento($vencimiento);
        $pde_oc_agrupacion->setObservacion($observaciones);
        $pde_oc_agrupacion->setEstado(1);
        $pde_oc_agrupacion->save();

        // -----------------------------------------------------------------
        // se setea codigo de PdeOcAgrupacion
        // -----------------------------------------------------------------
        $pde_oc_agrupacion->setCodigo($pde_oc_agrupacion->getCodigoConCeros());
        $pde_oc_agrupacion->save();

        // registrar estado inicial de PdeOcAgrupacion
        $pde_oc_agrupacion_estado = $pde_oc_agrupacion->setPdeOcAgrupacionEstado(
                PdeOcAgrupacionTipoEstado::TIPO_ESTADO_APROBADO, $observaciones
        );

        $orden = 0;
        foreach ($arr_items as $i => $arr_item) {
            $orden++;

            $prv_insumo = false;
            $prv_insumo_costo = false;

            $ins_insumo_id = $arr_item['ins_insumo_id'];
            $ins_insumo_descripcion = $arr_item['ins_insumo_descripcion'];
            $cantidad = $arr_item['cantidad'];
            $prv_insumo_id = $arr_item['prv_insumo_id'];
            $prv_insumo_costo_id = $arr_item['prv_insumo_costo_id'];
            $importe_oc = $arr_item['importe_oc'];
            $afecta_costo = $arr_item['afecta_costo'];
            $prv_descuento_comercial_id = $arr_item['prv_descuento_comercial_id'];

            $ins_insumo = InsInsumo::getOxId($ins_insumo_id);
            if (!is_null($prv_insumo_id)) {
                $prv_insumo = PrvInsumo::getOxId($prv_insumo_id);
            }
            if (!is_null($prv_insumo_costo_id)) {
                $prv_insumo_costo = PrvInsumoCosto::getOxId($prv_insumo_costo_id);
            }

            // se afecta al importe oc con el descuento comercial, si lo hubiese
            $importe_oc = PdeOcAgrupacion::getImporteConDescuentoComercial($prv_descuento_comercial_id, $importe_oc);
            
            // se identifica el IVA de compra del producto
            $gral_tipo_iva = $ins_insumo->getGralTipoIvaCompraObj();
            
            if($iva_incluido){
                // -------------------------------------------------------------
                // se quita el IVA para guardar en BD si el importe se cargo con IVA Incluido
                // -------------------------------------------------------------
                $importe_oc = $importe_oc /  $gral_tipo_iva->getValorIvaDecimalParaSumarEnCalculo();
            }
            
            // -----------------------------------------------------------------
            // se registra la PdeOc
            // -----------------------------------------------------------------
            $pde_oc = new PdeOc();

            $pde_oc->setPdeOcTipoOrigenId($pde_oc_tipo_origen->getId()); // origen
            $pde_oc->setPdeCentroPedidoId($pde_centro_pedido_id);
            $pde_oc->setPdeOcAgrupacionId($pde_oc_agrupacion->getId());

            $pde_oc->setIvaIncluido($iva_incluido);
            $pde_oc->setGralTipoIvaId($gral_tipo_iva->getId());
            
            $pde_oc->setPrvProveedorId($prv_proveedor_id);
            $pde_oc->setInsInsumoId($ins_insumo->getId());
            $pde_oc->setPdeCentroRecepcionId($pde_centro_recepcion_id);
            $pde_oc->setCantidad($cantidad);
            $pde_oc->setFechaEntrega($vencimiento);
            $pde_oc->setVencimiento($vencimiento);
            $pde_oc->setPrvDescuentoFinancieroId($prv_descuento_financiero_id);
            $pde_oc->setPrvDescuentoComercialId($prv_descuento_comercial_id);

            if ($prv_insumo) {
                $pde_oc->setPrvInsumoId($prv_insumo->getId());
            }
            if ($prv_insumo_costo) {
                $pde_oc->setPrvInsumoCostoId($prv_insumo_costo->getId());

                $importe_esperado = $prv_insumo_costo->getImporteNeto();

                // se afecta al importe esperado con el descuento comercial, si lo hubiese
                $importe_esperado = PdeOcAgrupacion::getImporteConDescuentoComercial($prv_descuento_comercial_id, $importe_esperado);
                $pde_oc->setImporteEsperado($importe_esperado);
            }

            $pde_oc->setImporteUnidad($importe_oc);
            $pde_oc->setImporteTotal($importe_oc * $cantidad);
            $pde_oc->setAfectaCosto($afecta_costo);

            $pde_oc->setEstado(1);
            $pde_oc->setOrden($orden);
            $pde_oc->save();

            // -----------------------------------------------------------------
            // se setea codigo de PdeOc
            // -----------------------------------------------------------------
            $pde_oc->setCodigo($pde_oc->getCodigoConCeros());
            $pde_oc->save();

            // -----------------------------------------------------------------
            // registrar estado inicial de PdeOc
            // -----------------------------------------------------------------
            $pde_oc_estado = $pde_oc->setPdeOcEstado(
                    PdeOcTipoEstado::TIPO_ESTADO_APROBADO, $observaciones
            );

            // -----------------------------------------------------------------
            // se registra el estado de recepcion inicial de PdeOc
            // -----------------------------------------------------------------
            $pde_oc_estado_recepcion = $pde_oc->setPdeOcEstadoRecepcion(
                    PdeOcTipoEstadoRecepcion::TIPO_ESTADO_NO_RECIBIDO, $observaciones
            );

            // -----------------------------------------------------------------
            // se registra el estado de facturacion inicial de PdeOc
            // -----------------------------------------------------------------
            $pde_oc_estado_facturacion = $pde_oc->setPdeOcEstadoFacturacion(
                    PdeOcTipoEstadoFacturacion::TIPO_ESTADO_NO_FACTURADO, $observaciones
            );

            // -----------------------------------------------------------------
            // registrar destinatarios de PdeOc
            // -----------------------------------------------------------------
            //$pde_oc->setPdeOcDestinatarios(); // no se usa por el momento porque no hay modulo de proveedores implementado
            // -----------------------------------------------------------------
            // se afecta el costo del insumo si asi se define con el check afecta_costo
            // -----------------------------------------------------------------
            if ($afecta_costo) {
                $ins_insumo_costo = $ins_insumo->setInsInsumoCostoActual(
                        $prv_importacion = false, $importe_oc, $observacion = 'Actualización de Costo por #' . $pde_oc_agrupacion->getCodigo() . ' a proveedor "' . trim($prv_proveedor->getDescripcion()) . '"', $descripcion = false, $ins_stock_transformacion = false, $ins_stock_transformacion_destino = false
                );
            }

            /*
              // -----------------------------------------------------------------
              // se afecta el costo del prv insumo si existe, sino se crea vinculo con proveedor
              // -----------------------------------------------------------------
              $prv_insumo = $ins_insumo->getPrvInsumoDeProveedor($prv_proveedor);
              if (!$prv_insumo) {
              // -----------------------------------------------------------------
              // Se crea vinculo con proveedor (PrvInsumo)
              // -----------------------------------------------------------------
              $prv_insumo = PrvInsumo::setPrvInsumoNuevo($prv_proveedor_id, $ins_insumo->getCodigoMarca(), $codigo_pieza = '', $codigo_proveedor = 'NOTIENE', $ins_insumo->getDescripcion(), $observacion = 'Creación desde #' . $pde_oc_agrupacion->getCodigo(), $ins_insumo_id = $ins_insumo->getId(), $ins_marca_id = $ins_insumo->getInsMarcaId(), $ins_marca_pieza = false, $ins_matriz_id = false, $prv_importacion = false, $importe_oc, $descuento = 0, $numero_importacion = 0, $fecha = false
              );
              }else{
              // -----------------------------------------------------------------
              // Se actualiza PrvInsumoCosto con el valor negociado
              // -----------------------------------------------------------------
              }
             */
            
            // -----------------------------------------------------------------
            // se borran todos los items temporales
            // -----------------------------------------------------------------
            $pde_oc_agrupacion->deletePdeOcAgrupacionItems();
            
            // -----------------------------------------------------------------
            //se actualiza resumen (tabla de extension _importe)
            // -----------------------------------------------------------------
            $pde_oc->setActualizarResumenComprobante();
        }

        return $pde_oc_agrupacion;
    }

    public function setPdeOcAgrupacionGenerarOCs() {
        $arr_items = array();

        $pde_oc_agrupacion_id = $this->getId();
        $cmb_pde_centro_pedido_id = $this->getPdeCentroPedidoId();
        $cmb_prv_proveedor_id = $this->getPrvProveedorId();
        $cmb_pde_centro_recepcion_id = $this->getPdeCentroRecepcionId();
        $txt_vencimiento = $this->getVencimiento();
        $txa_observacion = $this->getObservacion();

        $pde_oc_agrupacion_items = $this->getPdeOcAgrupacionItems();
        foreach ($pde_oc_agrupacion_items as $pde_oc_agrupacion_item) {
            $ins_insumo = $pde_oc_agrupacion_item->getInsInsumo();
            $prv_insumo = $pde_oc_agrupacion_item->getPrvInsumo();
            $prv_insumo_costo_actual = $pde_oc_agrupacion_item->getPrvInsumoCosto();

            $arr_items[] = array(
                'ins_insumo_id' => $ins_insumo->getId(),
                'ins_insumo_descripcion' => $ins_insumo->getDescripcion(),
                'cantidad' => $pde_oc_agrupacion_item->getCantidad(),
                'prv_insumo_id' => ($prv_insumo) ? $prv_insumo->getId() : 'null',
                'prv_insumo_costo_id' => ($prv_insumo_costo_actual) ? $prv_insumo_costo_actual->getId() : 'null',
            );
        }
        if (count($arr_items) > 0) {
            //PdeOcAgrupacion::addPdeOcAgrupacion(
            //        $pde_oc_agrupacion_id, $cmb_pde_centro_pedido_id, $cmb_prv_proveedor_id, $cmb_pde_centro_recepcion_id, $txt_vencimiento, $arr_items, $txa_observacion
            //);
        }
    }

    /**
     * Metodo que registra una recepcion masiva desde una AOC
     * @return PdeOcAgrupacion
     */
    public function addPdeRecepcionAgrupacion(
    $txt_fecha_recepcion, $cmb_pde_centro_pedido_id, $cmb_pde_centro_recepcion_id, $cmb_pan_panol_id, $arr_items, $observacion = ''
    ) {

        // -----------------------------------------------------------------
        // se registra la PdeRecepcionAgrupacion
        // -----------------------------------------------------------------
        $pde_recepcion_agrupacion = new PdeRecepcionAgrupacion();

        $pde_recepcion_agrupacion->setFechaEntrega($txt_fecha_recepcion);
        $pde_recepcion_agrupacion->setPdeCentroRecepcionId($cmb_pde_centro_recepcion_id);
        $pde_recepcion_agrupacion->setPrvProveedorId($this->getPrvProveedorId());
        $pde_recepcion_agrupacion->setObservacion($observacion);
        $pde_recepcion_agrupacion->setEstado(1);
        $pde_recepcion_agrupacion->save();

        // -----------------------------------------------------------------
        // se setea codigo de PdeOcAgrupacion
        // -----------------------------------------------------------------
        $pde_recepcion_agrupacion->setCodigo($pde_recepcion_agrupacion->getCodigoConCeros());
        $pde_recepcion_agrupacion->save();


        $orden = 0;
        foreach ($arr_items as $i => $arr_item) {
            $orden++;

            $pde_oc_id = $arr_item['pde_oc_id'];
            $cantidad_recibida = $arr_item['cantidad_recibida'];
            $importe_unitario = $arr_item['importe_unitario'];

            $pan_panol_id = $cmb_pan_panol_id;

            $pde_oc = PdeOc::getOxId($pde_oc_id);
            $ins_insumo = $pde_oc->getInsInsumo();

            // -------------------------------------------------------------
            // se registra la recepcion de la orden de compra
            // -------------------------------------------------------------            
            $pde_recepcion = $pde_oc->addPdeRecepcion(
                    $pde_recepcion_agrupacion->getPdeCentroRecepcionId(), $ins_insumo->getId(), $cantidad_recibida, $importe_unitario, $nro_comprobante = "0000-00000000", $pde_recepcion_agrupacion->getFechaEntrega(), $observacion
            );

            // -------------------------------------------------------------
            // se registra estado de la recepcion, PdeRecepcionEstado
            // -------------------------------------------------------------
            $pde_recepcion_estado = $pde_recepcion->setPdeRecepcionEstado(
                    PdeRecepcionTipoEstado::TIPO_RECIBIDO_POR_PANOL, $pde_centro_recepcion_id = $cmb_pde_centro_recepcion_id, $pan_panol_id, $cantidad_recibida, $veh_coche_id = null, $ope_chofer_id = null, $fecha_conciliacion = false, $observacion
            );

            // -------------------------------------------------------------
            // se registra aviso destinatarios de la recepcion, PdeRecepcionDestinatario
            // -------------------------------------------------------------
            //$pde_recepcion->setPdeRecepcionDestinatariosAviso();


            if ($ins_insumo->getControlStock()) {
                $ins_stock_tipo_movimiento_codigo = InsStockTipoMovimiento::TIPO_MOV_INGRESO;
                // -------------------------------------------------------------
                // se registra pedido para control y actualizacion de stock
                // -------------------------------------------------------------
                $pdi_pedido = PdiPedido::setPdiPedidoPorMovimientoManualDeInsumo(
                                $ins_insumo->getId(), $pan_panol_id, $pan_panol_id, $cantidad_recibida, $observacion = 'Recepcion Masiva de Compra ' . $pde_recepcion->getCodigo(), $ins_stock_tipo_movimiento_codigo
                );
            }
        }

        return $pde_recepcion_agrupacion;
    }

    /**
     * Retorna los pedidos PDE OC activos
     * @param pde_centro_pedido_id int centro de pedido
     * @param ins_insumo_id int el insumo
     * @return Collection $pde_pedidos
     * @creado_por Pablo Rosen
     * @creado 17/10/2017 09:26
     */
    static function getPdeOcAgrupacionItemsActivos($pde_centro_pedido_id, $ins_insumo_id, $pde_oc_agrupacion_id = false) {
        $criterio = new Criterio();

        if ($pde_oc_agrupacion_id) {
            $criterio->add(PdeOcAgrupacion::GEN_ATTR_ID, $pde_oc_agrupacion_id, Criterio::DISTINTO);
        }
        $criterio->add(InsInsumo::GEN_ATTR_ID, $ins_insumo_id, Criterio::IGUAL);
        $criterio->add(PdeOcAgrupacionTipoEstado::GEN_ATTR_CODIGO, PdeOcAgrupacionTipoEstado::TIPO_ESTADO_GENERADO, Criterio::IGUAL);
        $criterio->add(PdeOcAgrupacion::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $pde_centro_pedido_id, Criterio::IGUAL);
        $criterio->add(PdeOcAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);

        $criterio->addTabla(PdeOcAgrupacionItem::GEN_TABLA);
        $criterio->addRealJoin(PdeOcAgrupacion::GEN_TABLA, PdeOcAgrupacion::GEN_ATTR_ID, PdeOcAgrupacionItem::GEN_ATTR_PDE_OC_AGRUPACION_ID);
        $criterio->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, PdeOcAgrupacionItem::GEN_ATTR_INS_INSUMO_ID);
        $criterio->addRealJoin(PdeOcAgrupacionTipoEstado::GEN_TABLA, PdeOcAgrupacionTipoEstado::GEN_ATTR_ID, PdeOcAgrupacion::GEN_ATTR_PDE_OC_AGRUPACION_TIPO_ESTADO_ID);
        $criterio->setCriterios();

        $pde_oc_agrupacion_items = PdeOcAgrupacionItem::getPdeOcAgrupacionItems(null, $criterio);
        return $pde_oc_agrupacion_items;
    }

    static function getImporteConDescuentoComercial($prv_descuento_comercial_id, $importe) {
        $importe_descuento_comercial = 0;

        if ($prv_descuento_comercial_id != 'null' && $prv_descuento_comercial_id != '') {
            $importe_oc_con_descuento_comercial = $importe;
            $prv_descuento_comercial = PrvDescuentoComercial::getOxId($prv_descuento_comercial_id);
            if ($prv_descuento_comercial) {
                $porcentaje_descuento = $prv_descuento_comercial->getPorcentajeDescuento();
                $importe_descuento_comercial = (($importe * $porcentaje_descuento) / 100);
                $importe_con_descuento_comercial = $importe - $importe_descuento_comercial;
                $importe = $importe_con_descuento_comercial;
            }
        }

        return $importe;
    }

}

?>