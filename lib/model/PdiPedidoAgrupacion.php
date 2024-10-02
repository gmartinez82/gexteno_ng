<?php

require_once "base/BPdiPedidoAgrupacion.php";

class PdiPedidoAgrupacion extends BPdiPedidoAgrupacion {

    const PREFIJO_CODIGO = "APDI";

    public function getCodigoConCeros() {
        $codigo = self::PREFIJO_CODIGO;
        $codigo .= str_pad($this->getId(), 8, "0", STR_PAD_LEFT);

        return $codigo;
    }

    /**
     * Metodo que registra una agrupacion de oc de manera temporal,
     * permite edicion futura
     * @return PdiPedidoAgrupacion
     */
    static function addPdiPedidoAgrupacionTemporal($pdi_pedido_agrupacion_id, $pan_panol_origen, $pan_panol_destino, $pdi_urgencia_id, $arr_items, $observaciones = '') {
        $pdi_tipo_origen = PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_PANOL);

        // -----------------------------------------------------------------
        // se registra la PdiPedidoAgrupacion
        // -----------------------------------------------------------------
        if ($pdi_pedido_agrupacion_id == 0) {
            $pdi_pedido_agrupacion = new PdiPedidoAgrupacion();
        } else {
            $pdi_pedido_agrupacion = PdiPedidoAgrupacion::getOxId($pdi_pedido_agrupacion_id);

            // -----------------------------------------------------------------
            // se borran todos los items temporales
            // -----------------------------------------------------------------
            $pdi_pedido_agrupacion->deletePdiPedidoAgrupacionItems();
        }

        $pdi_pedido_agrupacion->setPanPanolOrigen($pan_panol_origen);
        $pdi_pedido_agrupacion->setPanPanolDestino($pan_panol_destino);
        $pdi_pedido_agrupacion->setPdiUrgenciaId($pdi_urgencia_id);
        $pdi_pedido_agrupacion->setObservacion($observaciones);
        $pdi_pedido_agrupacion->setEstado(1);
        $pdi_pedido_agrupacion->save();

        // -----------------------------------------------------------------
        // se setea codigo de PdiPedido
        // -----------------------------------------------------------------
        $pdi_pedido_agrupacion->setCodigo($pdi_pedido_agrupacion->getCodigoConCeros());
        $pdi_pedido_agrupacion->save();

        // -----------------------------------------------------------------
        // registrar estado inicial de PdiPedido
        // -----------------------------------------------------------------
        $pdi_pedido_agrupacion_estado = $pdi_pedido_agrupacion->setPdiPedidoAgrupacionEstado(PdiPedidoAgrupacionTipoEstado::TIPO_ESTADO_GENERADO, $observaciones);

        $orden = 0;
        foreach ($arr_items as $i => $arr_item) {
            $orden++;

            $ins_insumo_id = $arr_item['ins_insumo_id'];
            $ins_insumo_descripcion = $arr_item['ins_insumo_descripcion'];
            $cantidad = $arr_item['cantidad'];

            $ins_insumo = InsInsumo::getOxId($ins_insumo_id);

            $pdi_pedido_agrupacion_item = new PdiPedidoAgrupacionItem();
            $pdi_pedido_agrupacion_item->setPdiPedidoAgrupacionId($pdi_pedido_agrupacion->getId());
            $pdi_pedido_agrupacion_item->setInsInsumoId($ins_insumo->getId());
            $pdi_pedido_agrupacion_item->setDescripcion($ins_insumo_descripcion);
            $pdi_pedido_agrupacion_item->setCantidad($cantidad);
            $pdi_pedido_agrupacion_item->setEstado(1);
            $pdi_pedido_agrupacion_item->setOrden($orden);
            $pdi_pedido_agrupacion_item->save();
        }

        return $pdi_pedido_agrupacion;
    }

    /**
     * [addPdiPedidoAgrupacion description]
     * @param [type] $pdi_pedido_agrupacion_id [description]
     * @param [type] $pan_panol_origen         [description]
     * @param [type] $pan_panol_destino        [description]
     * @param [type] $pdi_urgencia_id          [description]
     * @param [type] $arr_items                [description]
     * @param string $observaciones            [description]
     */
    static function addPdiPedidoAgrupacion($pdi_pedido_agrupacion_id, $pan_panol_origen, $pan_panol_destino, $pdi_urgencia_id, $arr_items, $observaciones = '') {
        $pdi_tipo_origen = PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_PANOL);

        // -----------------------------------------------------------------
        // se registra la PdiPedidoAgrupacion
        // -----------------------------------------------------------------
        if ($pdi_pedido_agrupacion_id == 0) {
            $pdi_pedido_agrupacion = new PdiPedidoAgrupacion();
        } else {
            $pdi_pedido_agrupacion = PdiPedidoAgrupacion::getOxId($pdi_pedido_agrupacion_id);

            // -----------------------------------------------------------------
            // se borran todos los items temporales
            // -----------------------------------------------------------------
            $pdi_pedido_agrupacion->deletePdiPedidoAgrupacionItems();
        }

        $pdi_pedido_agrupacion->setPanPanolOrigen($pan_panol_origen);
        $pdi_pedido_agrupacion->setPanPanolDestino($pan_panol_destino);
        $pdi_pedido_agrupacion->setPdiUrgenciaId($pdi_urgencia_id);
        $pdi_pedido_agrupacion->setObservacion($observaciones);
        $pdi_pedido_agrupacion->setEstado(1);
        $pdi_pedido_agrupacion->save();

        // -----------------------------------------------------------------
        // se setea codigo de PdiPedido
        // -----------------------------------------------------------------
        $pdi_pedido_agrupacion->setCodigo($pdi_pedido_agrupacion->getCodigoConCeros());
        $pdi_pedido_agrupacion->save();

        // -----------------------------------------------------------------
        // registrar estado inicial de PdiPedido
        // -----------------------------------------------------------------
        $pdi_pedido_agrupacion_estado = $pdi_pedido_agrupacion->setPdiPedidoAgrupacionEstado(PdiPedidoAgrupacionTipoEstado::TIPO_ESTADO_APROBADO, $observaciones);

        $orden = 0;
        foreach ($arr_items as $i => $arr_item) {
            $orden++;

            $ins_insumo_id = $arr_item['ins_insumo_id'];
            $ins_insumo_descripcion = $arr_item['ins_insumo_descripcion'];
            $cantidad = $arr_item['cantidad'];

            $ins_insumo = InsInsumo::getOxId($ins_insumo_id);

            // -----------------------------------------------------------------
            // se registra la PdiPedido
            // -----------------------------------------------------------------
            $pdi_pedido = new PdiPedido();

            $pdi_pedido->setInsInsumoId($ins_insumo->getId());
            $pdi_pedido->setPdiTipoOrigenId($pdi_tipo_origen->getId());
            $pdi_pedido->setPdiUrgenciaId($pdi_urgencia_id);
            $pdi_pedido->setPanPanolOrigen($pdi_pedido_agrupacion->getPanPanolOrigen());
            $pdi_pedido->setPanPanolDestino($pdi_pedido_agrupacion->getPanPanolDestino());
            $pdi_pedido->setPdiPedidoAgrupacionId($pdi_pedido_agrupacion->getId());
            //$pdi_pedido->setCantidad($cantidad);
            $pdi_pedido->setEstado(1);
            $pdi_pedido->setOrden($orden);
            $pdi_pedido->save();

            // -----------------------------------------------------------------
            // se setea codigo de PdiPedido
            // -----------------------------------------------------------------
            $pdi_pedido->setCodigo($pdi_pedido->getCodigoConCeros());
            $pdi_pedido->save();

            // -----------------------------------------------------------------
            // registrar estado inicial de PdiPedido
            // -----------------------------------------------------------------
            $pdi_pedido_estado = $pdi_pedido->setPdiPedidoEstado(PdiTipoEstado::TIPO_ESTADO_SOLICITADO, $cantidad, $observaciones);

            // se registran destinatarios del pedido, PdiPedidoDestinatario
            $pdi_pedido->setPdiPedidoDestinatarios();

            // se registra Movimiento de Stock Reservado
            $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_RESERVA);

            // se envia aviso ---------------------------------------------------------------------
            $asunto = 'PDI Pedido Interno Nuevo #' . $pdi_pedido->getCodigo() . ' ' . date('d/m/Y H:m');
            $pdi_pedido->enviarAvisos($asunto);

            $pdi_pedido_agrupacion->deletePdiPedidoAgrupacionItems();
        }

        return $pdi_pedido_agrupacion;
    }

    /**
     * [setPdiPedidoAgrupacionEstado description]
     * @param [type] $tipo_estado_codigo [description]
     * @param [type] $observaciones      [description]
     */
    public function setPdiPedidoAgrupacionEstado($tipo_estado_codigo, $observaciones) {
        $inicial = 1;
        foreach ($this->getPdiPedidoAgrupacionEstados() as $pdi_pedido_agrupacion_estado) {
            $pdi_pedido_agrupacion_estado->setActual(0);
            $pdi_pedido_agrupacion_estado->save();

            $inicial = 0;
        }

        $pdi_pedido_agrupacion_tipo_estado = PdiPedidoAgrupacionTipoEstado::getOxCodigo($tipo_estado_codigo);

        $pdi_pedido_agrupacion_estado = new PdiPedidoAgrupacionEstado();
        $pdi_pedido_agrupacion_estado->setPdiPedidoAgrupacionId($this->getId());
        $pdi_pedido_agrupacion_estado->setPdiPedidoAgrupacionTipoEstadoId($pdi_pedido_agrupacion_tipo_estado->getId());
        $pdi_pedido_agrupacion_estado->setInicial($inicial);
        $pdi_pedido_agrupacion_estado->setActual(1);
        $pdi_pedido_agrupacion_estado->setObservacion($observaciones);
        $pdi_pedido_agrupacion_estado->save();

        // se setea el estado en pde oc
        $this->setPdiPedidoAgrupacionTipoEstadoId($pdi_pedido_agrupacion_tipo_estado->getId());
        $this->save();

        return $pdi_pedido_agrupacion_estado;
    }

    /**
     * [addPdiPedidoAceptacionAgrupacion description]
     * @param [type] $arr_items [description]
     */
    public function addPdiPedidoAceptacionAgrupacion($arr_items, $observaciones = '') {
        $orden = 0;
        foreach ($arr_items as $i => $arr_item) {
            $orden++;

            $pdi_pedido_id = $arr_item['pdi_pedido_id'];
            $cantidad_aceptada = $arr_item['cantidad_aceptada'];

            /*             * ************************************************* */
            $pdi_pedido = PdiPedido::getOxId($pdi_pedido_id);

            $pdi_estado = $pdi_pedido->getPdiEstadoActual();

            // se registra estado del pedido, PdiEstado
            $pdi_estado_nuevo = $pdi_pedido->setPdiPedidoEstado(PdiTipoEstado::TIPO_ESTADO_ACEPTADO, $cantidad_aceptada, $observaciones);

            // se registran destinatarios del pedido, PdiPedidoDestinatario
            $pdi_pedido->setPdiPedidoDestinatariosAviso();

            // se anula el registro de reserva en movimientos
            $pdi_pedido->setAnularReserva('APROBACION');

            // ---------------------------------------------------------------------
            // Se registra la reserva
            // ---------------------------------------------------------------------
            $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_RESERVA);
            $ins_insumo = $pdi_pedido->getInsInsumo();
            $ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado_nuevo, $ins_stock_tipo_movimiento);
            // ---------------------------------------------------------------------

            $ins_insumo = $pdi_pedido->getInsInsumo();

            // se realiza control de stock post movimiento
            $pan_panol = PanPanol::getOxId($pdi_pedido->getPanPanolDestino());
            InsInsumo::execPrcControlPuntosStock($ins_insumo, $pan_panol);

            // se envia aviso ---------------------------------------------------------------------
            $asunto = 'PDI Pedido Interno Aceptado #' . $pdi_pedido->getCodigo() . ' ' . date('d/m/Y H:m');
            $pdi_pedido->enviarAvisos($asunto);
            // ------------------------------------------------------------------------------------
        }

        //return $pde_recepcion_agrupacion;
    }

    /**
     * [addPdiPedidoDespacharAgrupacion description]
     * @param [type] $arr_items [description]
     */
    public function addPdiPedidoDespacharAgrupacion($arr_items, $observaciones = '') {
        $orden = 0;
        foreach ($arr_items as $i => $arr_item) {
            $orden++;

            $pdi_pedido_id = $arr_item['pdi_pedido_id'];
            $cantidad_aceptada = $arr_item['cantidad_aceptada'];

            /*             * ************************************************* */
            $pdi_pedido = PdiPedido::getOxId($pdi_pedido_id);

            $pdi_estado = $pdi_pedido->getPdiEstadoActual();

            // se registra estado del pedido, PdiEstado
            $pdi_estado_nuevo = $pdi_pedido->setPdiPedidoEstado(PdiTipoEstado::TIPO_ESTADO_DESPACHADO, $cantidad_aceptada, $observaciones);

            // se registran destinatarios del pedido, PdiPedidoDestinatario
            $pdi_pedido->setPdiPedidoDestinatariosAviso();

            // se anula el registro de reserva en movimientos
            $pdi_pedido->setAnularReserva('APROBADA');

            // se registra Movimiento de Stock Reservado
            $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_SALIDA);

            $ins_insumo = $pdi_pedido->getInsInsumo();
            //$ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado_nuevo, $ins_stock_tipo_movimiento, $activo = true);
            if ($ins_insumo) {
                $ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado_nuevo, $ins_stock_tipo_movimiento, false, false);
            }

            // se realiza control de stock post movimiento
            $pan_panol = PanPanol::getOxId($pdi_pedido->getPanPanolDestino());
            InsInsumo::execPrcControlPuntosStock($ins_insumo, $pan_panol);

            // se envia aviso ---------------------------------------------------------------------
            $asunto = 'PDI Pedido Interno Despachado #' . $pdi_pedido->getCodigo() . ' ' . date('d/m/Y H:m');
            $pdi_pedido->enviarAvisos($asunto);
            // ------------------------------------------------------------------------------------
        }
    }

    /**
     * [addPdiPedidoRecibirAgrupacion description]
     * @param [type] $arr_items [description]
     */
    public function addPdiPedidoRecibirAgrupacion($arr_items, $observaciones = '') {
        $orden = 0;
        foreach ($arr_items as $i => $arr_item) {
            $orden++;

            $pdi_pedido_id = $arr_item['pdi_pedido_id'];
            $cantidad_aceptada = $arr_item['cantidad_aceptada'];

            /*             * ************************************************* */
            $pdi_pedido = PdiPedido::getOxId($pdi_pedido_id);

            $pdi_estado = $pdi_pedido->getPdiEstadoActual();

            // se registra estado del pedido, PdiEstado
            $pdi_estado_nuevo = $pdi_pedido->setPdiPedidoEstado(PdiTipoEstado::TIPO_ESTADO_RECIBIDO, $cantidad_aceptada, $observaciones);

            // se registra Movimiento de Stock Reservado
            $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_INGRESO);

            $ins_insumo = $pdi_pedido->getInsInsumo();
            //$ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado_nuevo, $ins_stock_tipo_movimiento, $activo = true);
            if ($ins_insumo) {
                $ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado_nuevo, $ins_stock_tipo_movimiento, false, false);
            }

            // se realiza control de stock post movimiento
            $pan_panol = PanPanol::getOxId($pdi_pedido->getPanPanolDestino());
            InsInsumo::execPrcControlPuntosStock($ins_insumo, $pan_panol);

            // se envia aviso ---------------------------------------------------------------------
            $asunto = 'PDI Pedido Interno Recibido #' . $pdi_pedido->getCodigo() . ' ' . date('d/m/Y H:m');
            $pdi_pedido->enviarAvisos($asunto);
            // ------------------------------------------------------------------------------------
        }
    }

    public function getNombreArchivoAdjuntoPedidoAgrupacion() {
        $nombre = Gral::getConfig('conf_proyecto_min') . '_' . $this->getCodigo() . '_' . $this->getId();
        $nombre = str_replace('.', '', $nombre);
        $nombre = str_replace('-', '_', $nombre);
        $nombre = str_replace(' ', '_', $nombre);

        return $nombre . '.pdf';
    }

    /**
     * [getPdiPedidoXTipoEstado description]
     * @param  [type] $pdi_tipo_estado_codigo [description]
     * @return [type]                  [description]
     */
    public function getPdiPedidosXTipoEstado($pdi_tipo_estado_codigo) {
        $cont = 0;
        $arr_pedidos = array();
        $pdi_pedidos = $this->getPdiPedidos();
        foreach ($pdi_pedidos as $pdi_pedido) {
            $pdi_estado = $pdi_pedido->getPdiEstadoXCodigoDePdiTipoEstado($pdi_tipo_estado_codigo);
            if ($pdi_estado) {
                $pdi_pedido = $pdi_estado->getPdiPedido();
                $arr_pedidos[] = $pdi_pedido;
            }
        }
        return $arr_pedidos;
    }

    public function getCantidadSolicitada() {
        $cantidad_solicitada = count($this->getPdiPedidosXTipoEstado(PdiTipoEstado::TIPO_ESTADO_SOLICITADO));
        return $cantidad_solicitada;
    }

    public function getCantidadDisponibleParaSolicitar() {
        
    }

    public function getCantidadAceptada() {
        $cantidad_aceptada = count($this->getPdiPedidosXTipoEstado(PdiTipoEstado::TIPO_ESTADO_ACEPTADO));
        return $cantidad_aceptada;
    }

    public function getCantidadDisponibleParaAceptar() {
        $cantidad_solicitada = $this->getCantidadSolicitada();
        $cantidad_aceptada = $this->getCantidadAceptada();
        $cantidad_disponible_para_aceptar = $cantidad_solicitada - $cantidad_aceptada;
        return $cantidad_disponible_para_aceptar;
    }

    public function getCantidadDespachada() {
        $cantidad_despachada = count($this->getPdiPedidosXTipoEstado(PdiTipoEstado::TIPO_ESTADO_DESPACHADO));
        return $cantidad_despachada;
    }

    public function getCantidadDisponibleParaDespachar() {
        $cantidad_aceptada = $this->getCantidadAceptada();
        $cantidad_despachada = $this->getCantidadDespachada();
        $cantidad_disponible_para_despachar = $cantidad_aceptada - $cantidad_despachada;
        return $cantidad_disponible_para_despachar;
    }

    public function getCantidadRecibida() {
        $cantidad_despachada = count($this->getPdiPedidosXTipoEstado(PdiTipoEstado::TIPO_ESTADO_RECIBIDO));
        return $cantidad_despachada;
    }

    public function getCantidadDisponibleParaRecibir() {
        $cantidad_despachada = $this->getCantidadDespachada();
        $cantidad_recibida = $this->getCantidadRecibida();
        $cantidad_disponible_para_recibir = $cantidad_despachada - $cantidad_recibida;
        return $cantidad_disponible_para_recibir;
    }

    public function getCantidadRechazada() {
        $cantidad_rechazada = count($this->getPdiPedidosXTipoEstado(PdiTipoEstado::TIPO_ESTADO_RECHAZADO));
        return $cantidad_rechazada;
    }

    public function getCantidadDisponibleParaRechazar() {
        $pdi_pedidos = $this->getPdiPedidosDisponiblesParaRechazar();
        $cantidad_disponible_para_rechazar = count($pdi_pedidos);
        return $cantidad_disponible_para_rechazar;
    }

    public function getPdiPedidosDisponiblesParaRechazar() {
        $criterio = new Criterio();
        $criterio->addTabla(PdiPedido::GEN_TABLA);
        $criterio->addRealJoin(PdiTipoEstado::GEN_TABLA, PdiTipoEstado::GEN_ATTR_ID, PdiPedido::GEN_ATTR_PDI_TIPO_ESTADO_ID);
        $criterio->add(PdiPedido::GEN_ATTR_PDI_PEDIDO_AGRUPACION_ID, $this->getId(), Criterio::IGUAL);
        $criterio->add(PdiTipoEstado::GEN_ATTR_INICIAL, 1, Criterio::IGUAL);
        $criterio->setCriterios();
        $pdi_pedidos = PdiPedido::getPdiPedidos(null, $criterio);
        return $pdi_pedidos;
    }

    static function getPdiPedidoAgrupacionItemsActivos($pan_panol_id, $ins_insumo_id, $pdi_pedido_agrupacion_id = false) {
        $criterio = new Criterio();

        if ($pdi_pedido_agrupacion_id) {
            $criterio->add(PdiPedidoAgrupacion::GEN_ATTR_ID, $pdi_pedido_agrupacion_id, Criterio::DISTINTO);
        }

        $criterio->add(InsInsumo::GEN_ATTR_ID, $ins_insumo_id, Criterio::IGUAL);
        $criterio->add(PdiPedidoAgrupacionTipoEstado::GEN_ATTR_CODIGO, PdiPedidoAgrupacionTipoEstado::TIPO_ESTADO_GENERADO, Criterio::IGUAL);
        $criterio->add(PdiPedidoAgrupacion::GEN_ATTR_PAN_PANOL_ORIGEN, $pan_panol_id, Criterio::IGUAL);
        $criterio->add(PdiPedidoAgrupacion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);

        $criterio->addTabla(PdiPedidoAgrupacionItem::GEN_TABLA);
        $criterio->addRealJoin(PdiPedidoAgrupacion::GEN_TABLA, PdiPedidoAgrupacion::GEN_ATTR_ID, PdiPedidoAgrupacionItem::GEN_ATTR_PDI_PEDIDO_AGRUPACION_ID);
        $criterio->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, PdiPedidoAgrupacionItem::GEN_ATTR_INS_INSUMO_ID);
        $criterio->addRealJoin(PdiPedidoAgrupacionTipoEstado::GEN_TABLA, PdiPedidoAgrupacionTipoEstado::GEN_ATTR_ID, PdiPedidoAgrupacion::GEN_ATTR_PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_ID);
        $criterio->setCriterios();

        $pdi_pedido_agrupacion_items = PdiPedidoAgrupacionItem::getPdiPedidoAgrupacionItems(null, $criterio);
        return $pdi_pedido_agrupacion_items;
    }

    public function enviarPdiPedidoAgrupacionEmail($enviar = false, $destinatarios = false, $txa_observacion, $archivo_adjunto_urls = false) {
        if (!Mail::MAIL_ACTIVO)
            return false;

        $mail_asunto = Gral::getConfig('gral_cliente') . ' - Pedido #' . $this->getCodigo() . ' ' . date('d/m/Y H:i');

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $destinatarios = str_replace(' ', '', $destinatarios);
        $destinatarios = str_replace(',', ';', $destinatarios);
        $arr_destinatarios = explode(";", $destinatarios);

        $param = array(
            'pdi_pedido_agrupacion_id' => $this->getId(),
            'observacion' => $txa_observacion,
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/GENERAL/index_pdi_pedido_agrupacion.php";
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

        $pdi_pedido_agrupacion_enviado = $this->inicializarPdiPedidoAgrupacionEnviado($txa_observacion, $destinatarios, $mail_asunto, $msg, $strContenidoPdf);

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
                $pdi_pedido_agrupacion_enviado->setConfirmarPdiPedidoAgrupacionEnviado(1, 'Enviado correctamente');
            } else {
                $pdi_pedido_agrupacion_enviado->setConfirmarPdiPedidoAgrupacionEnviado(0, $mail->ErrorInfo);
            }

            return $envio_ok;
        } catch (phpmailerException $e) {
            echo $e->errorMessage(); //Pretty error messages from PHPMailer
        } catch (Exception $e) {
            echo $e->getMessage(); //Boring error messages from anything else!
        }

        return false;
    }

    public function inicializarPdiPedidoAgrupacionEnviado($observacion, $destinatarios, $mail_asunto, $mail_contenido, $archivo_adjunto) {
        $pdi_pedido_agrupacion_enviado = new PdiPedidoAgrupacionEnviado();
        $pdi_pedido_agrupacion_enviado->setDescripcion('');
        $pdi_pedido_agrupacion_enviado->setPdiPedidoAgrupacionId($this->getId());
        $pdi_pedido_agrupacion_enviado->setAsunto($mail_asunto);
        $pdi_pedido_agrupacion_enviado->setDestinatario($destinatarios);

        $pdi_pedido_agrupacion_enviado->setCuerpo(addslashes($mail_contenido));
        $pdi_pedido_agrupacion_enviado->setAdjunto(base64_encode($archivo_adjunto));

        $pdi_pedido_agrupacion_enviado->setCodigoEnvio(0);
        $pdi_pedido_agrupacion_enviado->setObservacion($observacion);
        $pdi_pedido_agrupacion_enviado->setEstado(0);

        $pdi_pedido_agrupacion_enviado->save();

        return $pdi_pedido_agrupacion_enviado;
    }

}

?>