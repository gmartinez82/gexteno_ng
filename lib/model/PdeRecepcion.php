<?php

require_once "base/BPdeRecepcion.php";

class PdeRecepcion extends BPdeRecepcion {

    const PREFIJO_CODIGO = "PDR";

    public function getCodigoConCeros() {
        $codigo = self::PREFIJO_CODIGO;
        $codigo.= str_pad($this->getId(), 8, "0", STR_PAD_LEFT);

        return $codigo;
    }

    public function getDescripcion() {
        $texto = $this->getCodigo();
        $texto.= " - ";
        $texto.= Gral::getFechaToWeb($this->getCreado());
        return $texto;
    }

    public function getNombreArchivoAdjuntoRecepcion() {
        return Gral::getConfig('gral_cliente').' - Recepcion de Compra #' . $this->getCodigo() . '.pdf';
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 05/02/2014 10:21 hs.
     * Metodo que retorna todos las recepciones no observados aun por el usuario indicado
     * @return type
     */
    static function getPdeRecepcionsNoObservados($us_usuario = false) {
        if (!$us_usuario) {
            $us_usuario = UsUsuario::autenticado();
        }
        $c = new Criterio();
        $c->add(PdeRecepcionDestinatario::GEN_ATTR_OBSERVADO, 0, Criterio::IGUAL);
        $c->add(PdeRecepcionDestinatario::GEN_ATTR_US_USUARIO_ID, $us_usuario->getId(), Criterio::IGUAL);
        $c->addTabla(PdeRecepcion::GEN_TABLA);
        $c->addRealJoin(PdeRecepcionDestinatario::GEN_TABLA, PdeRecepcionDestinatario::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
        $c->setCriterios();

        $pde_recepcions = Recepcion::getRecepcions(null, $c);
        return $pde_recepcions;
    }

    static function tienePdeRecepcionsNoObservados($us_usuario = false) {
        $pde_recepcions = self::getPdeRecepcionsNoObservados();
        if (count($pde_recepcions) > 0)
            return true;
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 05/02/2014 10:22 hs.
     * Metodo que registra los destinatarios de la recepcion
     */
    public function setPdeRecepcionDestinatarios() {
        $user = UsUsuario::autenticado();

        foreach ($this->getPdeRecepcionDestinatarios() as $pde_recepcion_destinatario) {
            $pde_recepcion_destinatario->setEstado(0);
            $pde_recepcion_destinatario->save();
        }

        $us_usuarios_recepcions = array();
        //$us_usuarios_recepcions[] = $user;


        foreach ($this->getPdeRecepcionDestinatariosUsUsuarios() as $us_usuario) {
            $us_usuarios_destinatarios[] = $us_usuario;
        }

        foreach ($us_usuarios_destinatarios as $us_usuario) {
            $leido = 0;
            $observado = 0;
            if ($us_usuario->getId() == $user->getId()) {
                $leido = 1;
                $observado = 1;
            }

            $array = array(
                array('campo' => PdeRecepcionDestinatario::GEN_ATTR_PDE_RECEPCION_ID, 'valor' => $this->getId()),
                array('campo' => PdeRecepcionDestinatario::GEN_ATTR_US_USUARIO_ID, 'valor' => $us_usuario->getId())
            );
            $pde_recepcion_destinatario = PdeRecepcionDestinatario::getOxArray($array);
            if (!$pde_recepcion_destinatario) {
                $pde_recepcion_destinatario = new PdeRecepcionDestinatario();
            }
            $pde_recepcion_destinatario->setPdeRecepcionId($this->getId());
            $pde_recepcion_destinatario->setUsUsuarioId($us_usuario->getId());
            $pde_recepcion_destinatario->setLeido($leido);
            $pde_recepcion_destinatario->setObservado($observado);
            //$pde_recepcion_destinatario->setDestacado(0);
            $pde_recepcion_destinatario->setEstado(1);
            $pde_recepcion_destinatario->save();
        }
        return true;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 05/02/2014 10:26 hs.
     * Metodo que actualiza los destinatarios de la recepcion, para remarcar como no leido y no observado
     */
    public function setPdeRecepcionDestinatariosAviso() {
        $user = UsUsuario::autenticado();

        foreach ($this->getPdeRecepcionDestinatarios() as $pde_recepcion_destinatario) {
            $leido = 0;
            $observado = 0;
            if ($pde_recepcion_destinatario->getUsUsuario()->getId() == $user->getId()) {
                $leido = 1;
                $observado = 1;
            }
            //$pde_recepcion_destinatario->setPdeRecepcionId($this->getId());
            //$pde_recepcion_destinatario->setUsUsuarioId($user->getId());
            $pde_recepcion_destinatario->setLeido($leido);
            $pde_recepcion_destinatario->setObservado($observado);
            //$pde_recepcion_destinatario->setEstado(1);
            $pde_recepcion_destinatario->save();
        }
    }

    public function getPdeRecepcionDestinatariosUsUsuarios() {
        $us_usuarios_destinatarios = array();

        $pde_centro_pedido = $this->getPdePedido()->getPdeCentroPedido();

        // responsables de centro de pedido
        $us_grupo_responsable = UsGrupo::getOxCodigo(UsGrupo::CENTRO_PEDIDO_RESPONSABLE);
        $us_usuarios_responsables = $us_grupo_responsable->getUsUsuariosXUsAgrupado();
        foreach ($us_usuarios_responsables as $us_usuario_responsables) {

            // se verifica que el usuario tiene asignado el centro de pedido en cuestion
            $codigo = PdeCentroPedido::PREFIJO_CREDENCIAL . $pde_centro_pedido->getCodigo();
            //if(Login::esAutorizado($us_usuario_responsables, $codigo)){
            if (UsCredencial::getEsAcreditado($codigo, $us_usuario_responsables->getId())) {
                $us_usuarios_destinatarios[] = $us_usuario_responsables;
            }

            //$us_usuarios_destinatarios[] = $us_usuario_responsables;
        }

        // responsable de centro de recepcion
        $us_grupo_responsable = UsGrupo::getOxCodigo(UsGrupo::CENTRO_RECEPCION_RESPONSABLE);

        $pde_centro_recepcion = $this->getPdeCentroRecepcion();
        $us_usuarios_responsables = $pde_centro_recepcion->getUsUsuariosXPdeCentroRecepcionUsUsuario();
        foreach ($us_usuarios_responsables as $us_usuario_responsables) {

            // se obtienen los grupos vinculados al usuario
            $arr_grupos = array();
            $us_grupos_del_usuario = $us_usuario_responsables->getUsGruposXUsAgrupado();
            foreach ($us_grupos_del_usuario as $us_grupo_del_usuario) {
                $arr_grupos_codigo[] = $us_grupo_del_usuario->getCodigo();
            }

            // se corrobora que realmente sea un responsable de centro de recepcion
            if (in_array($us_grupo_responsable->getCodigo(), $arr_grupos_codigo)) {

                // se verifica que el usuario tiene asignado el centro de pedido en cuestion
                $codigo = PdeCentroPedido::PREFIJO_CREDENCIAL . $pde_centro_pedido->getCodigo();
                //if(Login::esAutorizado($us_usuario_responsables, $codigo)){
                if (UsCredencial::getEsAcreditado($codigo, $us_usuario_responsables->getId())) {
                    $us_usuarios_destinatarios[] = $us_usuario_responsables;
                }

                //$us_usuarios_destinatarios[] = $us_usuario_responsables;
            }
        }

        return $us_usuarios_destinatarios;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 05/02/2014 10:39 hs.
     * Metodo que retorna los destinatarios de la recepcion
     */
    public function getPdeRecepcionDestinatarioUsUsuario($us_usuario = false) {
        if (!$us_usuario) {
            $us_usuario = UsUsuario::autenticado();
        }
        $leido = true;
        $array = array(
            array('campo' => PdeRecepcionDestinatario::GEN_ATTR_PDE_RECEPCION_ID, 'valor' => $this->getId()),
            array('campo' => PdeRecepcionDestinatario::GEN_ATTR_US_USUARIO_ID, 'valor' => $us_usuario->getId())
        );
        $pde_recepcion_destinatario = PdeRecepcionDestinatario::getOxArray($array);
        return $pde_recepcion_destinatario;
    }

    public function esPdeRecepcionLeido($us_usuario = false) {
        $leido = true;
        $pde_recepcion_destinatario = $this->getPdeRecepcionDestinatarioUsUsuario($us_usuario);
        if ($pde_recepcion_destinatario) {
            if (!$pde_recepcion_destinatario->getLeido()) {
                $leido = false;
            }
        }
        return $leido;
    }

    public function setPdeRecepcionLeido($us_usuario = false) {
        $pde_recepcion_destinatario = $this->getPdeRecepcionDestinatarioUsUsuario($us_usuario);
        if ($pde_recepcion_destinatario) {
            $pde_recepcion_destinatario->setLeido(1);
            $pde_recepcion_destinatario->setObservado(1);
            $pde_recepcion_destinatario->save();
        }
        return true;
    }

    public function esPdeRecepcionDestacado($us_usuario = false) {
        $destacado = false;
        $pde_recepcion_destinatario = $this->getPdeRecepcionDestinatarioUsUsuario($us_usuario);
        if ($pde_recepcion_destinatario) {
            if ($pde_recepcion_destinatario->getDestacado()) {
                $destacado = true;
            }
        }
        return $destacado;
    }

    public function setPdeRecepcionDestacado($us_usuario = false) {
        $pde_recepcion_destinatario = $this->getPdeRecepcionDestinatarioUsUsuario($us_usuario);
        if ($pde_recepcion_destinatario) {
            if ($pde_recepcion_destinatario->getDestacado()) {
                $pde_recepcion_destinatario->setDestacado(0);
            } else {
                $pde_recepcion_destinatario->setDestacado(1);
            }
            $pde_recepcion_destinatario->save();
        }
        return true;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 05/02/2014 10:42 hs.
     * Metodo que registra un nuevo estado para la recepcion
     */
    public function setPdeRecepcionEstado(
    $tipo_estado_codigo, $pde_centro_recepcion_id = null, $pan_panol_id = null, $cantidad = 0, $veh_coche_id = null, $ope_chofer_id = null, $fecha_conciliacion = false, $observaciones
    ) {
        $inicial = 1;
        foreach ($this->getPdeRecepcionEstados() as $pde_recepcion_estado) {
            $pde_recepcion_estado->setActual(0);
            $pde_recepcion_estado->save();

            $inicial = 0;
        }

        $pde_recepcion_tipo_estado = PdeRecepcionTipoEstado::getOxCodigo($tipo_estado_codigo);

        $pde_recepcion_estado = new PdeRecepcionEstado();
        $pde_recepcion_estado->setPdeRecepcionId($this->getId());
        $pde_recepcion_estado->setPdeRecepcionTipoEstadoId($pde_recepcion_tipo_estado->getId());

        $pde_recepcion_estado->setPdeCentroRecepcionId($pde_centro_recepcion_id);
        $pde_recepcion_estado->setPanPanolId($pan_panol_id);
        $pde_recepcion_estado->setCantidad($cantidad);

        $pde_recepcion_estado->setInicial($inicial);
        $pde_recepcion_estado->setActual(1);
        $pde_recepcion_estado->setObservacion($observaciones);
        $pde_recepcion_estado->save();

        // actualizamos el estado en pde recepcion      
        $this->setPdeRecepcionTipoEstadoId($pde_recepcion_tipo_estado->getId());
        $this->save();

        return $pde_recepcion_estado;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 05/02/2014 10:44 hs.
     * Metodo que retorna el estado actual de la recepcion
     * @return PdeEstado
     */
    public function getPdeRecepcionEstadoActual() {
        $c = new Criterio();
        $c->add('pde_recepcion_id', $this->getId(), Criterio::IGUAL);
        $c->add('actual', 1, Criterio::IGUAL);
        $c->addTabla('pde_recepcion_estado');
        $c->setCriterios();

        $pde_recepcion_estados = PdeRecepcionEstado::getPdeRecepcionEstados(null, $c);
        foreach ($pde_recepcion_estados as $pde_recepcion_estado) {
            return $pde_recepcion_estado;
        }
        return false;
    }

    public function getPdeRecepcionTipoEstadoActual() {
        //$pde_recepcion_tipo_estado = $this->getPdeRecepcionEstadoActual()->getPdeRecepcionTipoEstado();
        $pde_recepcion_tipo_estado = $this->getPdeRecepcionTipoEstado();
        return $pde_recepcion_tipo_estado;
    }

    /**
     * Metodo que genera una recepcion de Proveedor sin OC, el tipo de recepcion es extraordinaria
     * @param type $pde_centro_recepcion_id
     * @param type $ins_insumo_id
     * @param type $cantidad
     * @param type $importe_unitario
     * @param type $nro_comprobante
     * @param type $fecha
     * @param type $observacion
     * @return \PdeRecepcion
     */
    static function addPdeRecepcion($pde_centro_recepcion_id, $prv_proveedor_id, $ins_insumo_id, $ins_marca_id, $cantidad, $importe_unitario, $nro_comprobante, $fecha, $observacion) {

        // se genera registro de recepcion, PdeRecepcion
        $pde_tipo_recepcion = PdeTipoRecepcion::getOxCodigo(PdeTipoRecepcion::TIPO_EXTRAORDINARIA);

        $pde_recepcion = new PdeRecepcion();
        $pde_recepcion->setPdeTipoRecepcionId($pde_tipo_recepcion->getId());
        //$pde_recepcion->setPdeOcId($this->getId());
        $pde_recepcion->setPrvProveedorId($prv_proveedor_id);
        //$pde_recepcion->setPdePedidoId($this->getPdePedidoId());
        $pde_recepcion->setPdeCentroRecepcionId($pde_centro_recepcion_id);
        $pde_recepcion->setInsInsumoId($ins_insumo_id);
        //$pde_recepcion->setInsMarcaId($ins_marca_id);
        $pde_recepcion->setNroComprobante($nro_comprobante);
        $pde_recepcion->setCantidad($cantidad);
        $pde_recepcion->setFechaEntrega($fecha);
        $pde_recepcion->setImporteUnidad($importe_unitario);
        $pde_recepcion->setImporteTotal($importe_unitario * $cantidad);
        $pde_recepcion->setVencimiento(date('Y-m-d'));
        $pde_recepcion->setObservacion($observacion);
        $pde_recepcion->setEstado(1);
        $pde_recepcion->save();

        $pde_recepcion->setCodigo($pde_recepcion->getCodigoConCeros());
        $pde_recepcion->save();

        // se registra estado de la recepcion, PdeRecepcionEstado
        $pde_recepcion_estado = $pde_recepcion->setPdeRecepcionEstado(
                PdeRecepcionTipoEstado::TIPO_RECIBIDO_DE_PROVEEDOR, $pde_centro_recepcion_id = $pde_recepcion->getPdeCentroRecepcionId(), $pan_panol_id = null, $cantidad = $pde_recepcion->getCantidad(), $veh_coche_id = null, $ope_chofer_id = null, $fecha_conciliacion = false, $observaciones = $observacion
        );

        // se registran destinatarios de la recepcion, PdeRecepcionDestinatario
        $pde_recepcion->setPdeRecepcionDestinatarios();

        return $pde_recepcion;
    }

    /**
     * Metodo que retorna el panol correspondiente al despacho de recepcion
     * @return type
     */
    public function getPanPanol() {
        $codigo = PdeRecepcionTipoEstado::TIPO_DESPACHADO_A_PANOL;
        $pde_recepcion_estado_despachado = $this->getPdeRecepcionEstadoXCodigoDePdeRecepcionTipoEstado($codigo);

        $pan_panol = false;
        if ($pde_recepcion_estado_despachado) {
            $pan_panol = $pde_recepcion_estado_despachado->getPanPanol();
        }

        return $pan_panol;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 06/02/2014 16:48 hs.
     * Metodo que retorna el estado de un PdeRecepcion de acuerdo a un codigo de PdeRecepcionTipoEstado indicado
     * @return PdiEstado
     */
    public function getPdeRecepcionEstadoXCodigoDePdeRecepcionTipoEstado($valor) {
        $c = new Criterio();
        $c->add('pde_recepcion_estado.pde_recepcion_id', $this->getId(), Criterio::IGUAL);
        $c->add('pde_recepcion_tipo_estado.codigo', $valor, Criterio::IGUAL);
        $c->addTabla('pde_recepcion_estado');
        $c->addRealJoin('pde_recepcion_tipo_estado', 'pde_recepcion_tipo_estado.id', 'pde_recepcion_estado.pde_recepcion_tipo_estado_id');
        $c->setCriterios();

        $pde_recepcion_estados = PdeRecepcionEstado::getPdeRecepcionEstados(null, $c);
        foreach ($pde_recepcion_estados as $pde_recepcion_estado) {
            return $pde_recepcion_estado;
        }
        return false;
    }

    public function enviarAvisos($asunto = '') {
        return false;
        
        // nueva forma, mails en 2do plano
        $pde_recepcion_destinatarios = $this->getPdeRecepcionDestinatarios();
        foreach ($pde_recepcion_destinatarios as $pde_recepcion_destinatario) {
            $pde_recepcion_destinatario->setDescripcion($asunto);
            $pde_recepcion_destinatario->setAvisoEmail(0);
            $pde_recepcion_destinatario->save();
        }
        return true;
    }

    public function enviarEmailAviso($asunto, $us_usuario) {
        // control de envio de email activado
        if (!Mail::MAIL_ACTIVO)
            return false;

        $pde_centro_pedido = $this->getPdePedido()->getPdeCentroPedido();

        // se cargan todos los emails del proveedor, en el caso de que el usuario destinatario sea proveedor
        $arr_emails = false;
        $prv_proveedor = $us_usuario->getPrvProveedorXPrvProveedorUsUsuario();
        if ($prv_proveedor) {
            $prv_emails = $prv_proveedor->getPrvEmails(null, null, true); // solo emails activos
            foreach ($prv_emails as $prv_email) {
                $email_descripcion = $prv_email->getDescripcion();

                // se controla de que el formato del email sea correcto, cuando si es proveedor
                if (Ctrl::esEmail($email_descripcion)) {
                    $arr_emails[] = $email_descripcion;
                }
            }
        } else {
            // se controla de que el formato del email sea correcto, cuando no es proveedor
            if (!Ctrl::esEmail($us_usuario->getEmail())) {
                return false;
            }
        }


        Gral::setSes('MECANO_PDE_RECEPCION_ID', $this->getId());
        Gral::setSes('MECANO_US_USUARIO_ID', $us_usuario->getId());

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $archivo = Gral::getPathAbs() . "mailing/plantillas/MECANO/index_pde_recepcion.php";
        $msg = Gral::get_include_contents($archivo);

        //echo $msg;
        //return;

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = Mail::MAIL_SECURE_3;
        //$mail->SMTPDebug = 2;
        $mail->CharSet = "UTF-8";

        $mail->Host = Mail::MAIL_SERVIDOR_ENVIO_3;
        $mail->Username = Mail::MAIL_CASILLA_USUARIO_3;
        $mail->Password = Mail::MAIL_PASS_ENVIO_3;
        $mail->Port = Mail::MAIL_PUERTO_ENVIO_3;

        // excepcion para CP Asuncion
        if ($pde_centro_pedido->getCodigo() == 'ASUNCION') {
            $mail->Username = Mail::MAIL_CASILLA_ENVIO_SOL;
            $mail->Password = Mail::MAIL_PASS_ENVIO_SOL;
        }
        // excepcion para CP Formosa
        if ($pde_centro_pedido->getCodigo() == 'FORMOSA') {
            $mail->Username = Mail::MAIL_CASILLA_ENVIO_CDS;
            $mail->Password = Mail::MAIL_PASS_ENVIO_CDS;
        }
        // excepcion para CP Test
        if ($pde_centro_pedido->getCodigo() == 'TEST') {
            $mail->Username = Mail::MAIL_CASILLA_ENVIO_CDS;
            $mail->Password = Mail::MAIL_PASS_ENVIO_CDS;
        }

        $mail->From = Mail::MAIL_CASILLA_REMITENTE;
        $mail->FromName = Mail::MAIL_NOMBRE_REMITENTE;
        $mail->FromName = $pde_centro_pedido->getEmailPrefijo();

        if ($arr_emails) {
            foreach ($arr_emails as $arr_email) {
                $mail->AddAddress($arr_email);
            }
        } else {
            $mail->AddAddress($us_usuario->getEmail());
        }
        $mail->AddBCC(Mail::MAIL_CASILLA_AUDITORIA_ADMIN);

        //$mail->AddReplyTo(Mail::MAIL_CASILLA_REPLYTO);
        //$mail->AddReplyTo(Mail::MAIL_CASILLA_RESPONSABLE_PDE_PEDIDO);

        $pde_centro_pedido = $this->getPdePedido()->getPdeCentroPedido();
        $pde_centro_pedido_emails = $pde_centro_pedido->getPdeCentroPedidoEmails(null, null, true);
        foreach ($pde_centro_pedido_emails as $pde_centro_pedido_email) {
            $email_centro_pedido_responsable = $pde_centro_pedido_email->getDescripcion();
            if (Ctrl::esEmail($email_centro_pedido_responsable)) {
                $mail->AddReplyTo($email_centro_pedido_responsable);
            }
        }

        $mail->IsHTML(true);
        $mail->Subject = $asunto;

        $mail->Body = $msg;
        //Gral::prr($mail);
        $exito = $mail->Send();
        return $exito;
    }

    public function getImporteUnidadIva() {
        $importe = $this->getImporteUnidad();
        $gral_tipo_iva_compra = $this->getInsInsumo()->getGralTipoIvaCompraObj();

        return $importe * $gral_tipo_iva_compra->getValorIvaDecimal();
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/07/2018 19:35
     * @return Obj PdeFactura
     */
    public function getPdeFactura() {
        $pde_factura_pde_recepcions = $this->getPdeFacturaPdeRecepcions();

        foreach ($pde_factura_pde_recepcions as $pde_factura_pde_recepcion) {
            return $pde_factura_pde_recepcion->getPdeFactura();
        }

        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/07/2018 19:35
     * @return Obj PdeRecepcionEstadoFacturacion
     */
    public function setPdeRecepcionEstadoFacturacion($codigo, $observacion = '') {
        $inicial = 1;
        foreach ($this->getPdeRecepcionEstadoFacturacions() as $pde_recepcion_estado_facturacion) {
            $pde_recepcion_estado_facturacion->setActual(0);
            $pde_recepcion_estado_facturacion->save();

            $inicial = 0;
        }

        // se agrega el nuevo estado de la orden de venta
        $pde_recepcion_tipo_estado_facturacion = PdeRecepcionTipoEstadoFacturacion::getOxCodigo($codigo);

        $pde_recepcion_estado_facturacion = new PdeRecepcionEstadoFacturacion();
        $pde_recepcion_estado_facturacion->setPdeRecepcionId($this->getId());
        $pde_recepcion_estado_facturacion->setPdeRecepcionTipoEstadoFacturacionId($pde_recepcion_tipo_estado_facturacion->getId());
        $pde_recepcion_estado_facturacion->setInicial($inicial);
        $pde_recepcion_estado_facturacion->setActual(1);
        $pde_recepcion_estado_facturacion->setObservacion($observacion);
        $pde_recepcion_estado_facturacion->save();

        // actualizamos el estado en pde_recepcion        
        $this->setPdeRecepcionTipoEstadoFacturacionId($pde_recepcion_tipo_estado_facturacion->getId());
        $this->save();

        return $pde_recepcion_estado_facturacion;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/07/2018 19:35
     * @return Obj PdeRecepcionEstado
     */
    public function getPdeRecepcionEstadoFacturacionActual() {
        $c = new Criterio();
        $c->add(PdeRecepcionEstadoFacturacion::GEN_ATTR_PDE_RECEPCION_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PdeRecepcionEstadoFacturacion::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->addTabla(PdeRecepcionEstadoFacturacion::GEN_TABLA);
        $c->setCriterios();

        $pde_recepcion_estado_facturacions = PdeRecepcionEstadoFacturacion::getPdeRecepcionEstadoFacturacions(null, $c);
        foreach ($pde_recepcion_estado_facturacions as $pde_recepcion_estado_facturacion) {
            return $pde_recepcion_estado_facturacion;
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/07/2018 19:35
     * @return Obj PdeRecepcionEstadoFacturacion
     */
    public function getPdeRecepcionTipoEstadoFacturacionActual() {
        $pde_recepcion_actual = $this->getPdeRecepcionEstadoFacturacionActual();
        if ($pde_recepcion_actual) {
            return $pde_recepcion_actual->getPdeRecepcionTipoEstadoFacturacion();
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/07/2018 19:35
     * @return Bool
     */
    public function getPdeRecepcionTipoEstadoFacturacionActualTerminal() {
        $terminal = $this->getPdeRecepcionTipoEstadoFacturacionActual()->getTerminal();
        return $terminal;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/07/2018 19:35
     * @return Obj PdeRecepcionEstado
     */
    public function getPdeRecepcionEstadoEnFactura() {
        $pde_recepcion_tipo_estado_facturacion = PdeRecepcionTipoEstadoFacturacion::getOxCodigo(PdeRecepcionTipoEstadoFacturacion::TIPO_NO_FACTURADO);

        $c = new Criterio();
        $c->add(PdeRecepcionEstadoFacturacion::GEN_ATTR_PDE_RECEPCION_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PdeRecepcionEstadoFacturacion::GEN_ATTR_PDE_RECEPCION_TIPO_ESTADO_FATURACION_ID, $pde_recepcion_tipo_estado_facturacion->getId(), Criterio::IGUAL);
        $c->addTabla(PdeRecepcionEstadoFacturacion::GEN_TABLA);
        $c->setCriterios();

        $pde_recepcion_estado_facturacions = PdeRecepcionEstadoFacturacion::getPdeRecepcionEstadoFacturacions(null, $c);
        foreach ($pde_recepcion_estado_facturacions as $pde_recepcion_estado_facturacion) {
            return $pde_recepcion_estado_facturacion;
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/07/2018 19:35
     * @return Float
     */
    public function getCantidadDisponibleEnFactura() {
        $cantidad_disponible = $this->getCantidad();

        $pde_factura_pde_recepcions = $this->getPdeFacturaPdeRecepcions(null, null, true);
        foreach ($pde_factura_pde_recepcions as $pde_factura_pde_recepcion) {
            $cantidad_disponible -= $pde_factura_pde_recepcion->getCantidad();
        }

        return $cantidad_disponible;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/07/2018 19:35
     * @return Float
     */
    public function getCantidadEnFactura($pde_factura = false) {
        $cantidad_en_factura = 0;
        $criterio = new Criterio();

        if ($pde_factura) {
            $criterio->add('pde_factura_id', $pde_factura->getId(), Criterio::IGUAL);
        }
        $criterio->addTabla(PdeFacturaPdeRecepcion::GEN_TABLA);
        $criterio->setCriterios();

        $pde_factura_pde_recepcions = $this->getPdeFacturaPdeRecepcions(null, $criterio, true);

        foreach ($pde_factura_pde_recepcions as $pde_factura_pde_recepcion) {
            $cantidad_en_factura += $pde_factura_pde_recepcion->getCantidad();
        }

        return $cantidad_en_factura;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 27/08/2018 18:39
     * Metodo que genera codigo EPL para impresion de etiqueta
     * @return String
     */
    public function getEtiquetaRecepcionEPL($cantidad = 1) {
        $fecha_recepcion = Gral::getFechaToWEB($this->getFechaEntrega());
        $costo_en_letras = Gral::getNumeroEnLetrasCodificadoPorPalabraClave($this->getImporteUnidad()).' '.$this->getImporteUnidad();
        $costo_en_letras = Gral::getNumeroEnLetrasCodificadoPorPalabraClave($this->getImporteUnidad());
        $proveedor_id = $this->getPrvProveedorId();

        $texto = 'N
q540
A0,10,0,4,1,1,N," ' . $this->getInsInsumo()->getCodigoInterno() . '"
A0,45,0,3,1,1,N,"' . $this->getInsInsumo()->getDescripcionCorta() . '"
A100,80,0,1,1,2,R,"             '.Gral::getConfig('gral_cliente').'             "
B100,110,0,1,3,0,60,N,"' . $this->getInsInsumo()->getCodigoBarraInterno() . '"
A0,190,0,3,1,1,N,"' . $fecha_recepcion . '"
A250,190,0,3,1,1,N,"' . $costo_en_letras . '"
A500,190,0,3,1,1,N,"' . $proveedor_id . '"
P' . $cantidad . ',1
        ';

        return $texto;
    }

}

?>