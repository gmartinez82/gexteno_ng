<?php

require_once "base/BPdePedido.php";

class PdePedido extends BPdePedido {

    const PREFIJO_CODIGO = "PDE";

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
    
    public function getNombreArchivoAdjuntoPedido() {
        return Gral::getConfig('gral_cliente').' - Orden de Compra #' . $this->getCodigo() . '.pdf';
    }
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 02/06/2013 20:27 hs.
     * Metodo que retorna todos los pedidos no observados aun por el usuario indicado
     * @return type
     */
    static function getPdePedidosNoObservados($us_usuario = false) {
        if (!$us_usuario) {
            $us_usuario = UsUsuario::autenticado();
        }
        $c = new Criterio();
        $c->add(PdePedidoDestinatario::GEN_ATTR_OBSERVADO, 0, Criterio::IGUAL);
        $c->add(PdePedidoDestinatario::GEN_ATTR_US_USUARIO_ID, $us_usuario->getId(), Criterio::IGUAL);
        $c->addTabla(PdePedido::GEN_TABLA);
        $c->addRealJoin(PdePedidoDestinatario::GEN_TABLA, PdePedidoDestinatario::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
        $c->setCriterios();

        $pde_pedidos = PdePedido::getPdePedidos(null, $c);
        return $pde_pedidos;
    }

    static function tienePdePedidosNoObservados($us_usuario = false) {
        $pde_pedidos = self::getPdePedidosNoObservados();
        if (count($pde_pedidos) > 0)
            return true;
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 30/05/2013 15:22 hs.
     * Metodo que registra los destinatarios del pedido externo
     */
    public function setPdePedidoDestinatarios() {
        $user = UsUsuario::autenticado();

        foreach ($this->getPdePedidoDestinatarios() as $pde_pedido_destinatario) {
            $pde_pedido_destinatario->setEstado(0);
            $pde_pedido_destinatario->save();
        }

        $us_usuarios_destinatarios = array();
        //$us_usuarios_destinatarios[] = $user;


        foreach ($this->getPdePedidoDestinatariosUsUsuariosCdn() as $us_usuario) {
            $us_usuarios_destinatarios[] = $us_usuario;
        }

        //if($this->getPdeEstadoActual()->getPdeTipoEstado()->getCodigo() == PdeTipoEstado::TIPO_ESTADO_APROBADO){ // recien cuando es aprobado se vinculan destinatarios proveedor
        if ($this->getPdeEstadoActual()->getPdeTipoEstado()->getPublico()) {
            foreach ($this->getPdePedidoDestinatariosUsUsuariosProveedores() as $us_usuario) {
                $us_usuarios_destinatarios[] = $us_usuario;
            }
        }

        foreach ($us_usuarios_destinatarios as $us_usuario) {
            $leido = 0;
            $observado = 0;
            if ($us_usuario->getId() == $user->getId()) {
                $leido = 1;
                $observado = 1;
            }

            $array = array(
                array('campo' => PdePedidoDestinatario::GEN_ATTR_PDE_PEDIDO_ID, 'valor' => $this->getId()),
                array('campo' => PdePedidoDestinatario::GEN_ATTR_US_USUARIO_ID, 'valor' => $us_usuario->getId())
            );
            $pde_pedido_destinatario = PdePedidoDestinatario::getOxArray($array);
            if (!$pde_pedido_destinatario) {
                $pde_pedido_destinatario = new PdePedidoDestinatario();
            }
            $pde_pedido_destinatario->setPdePedidoId($this->getId());
            $pde_pedido_destinatario->setUsUsuarioId($us_usuario->getId());
            $pde_pedido_destinatario->setLeido($leido);
            $pde_pedido_destinatario->setObservado($observado);
            //$pde_pedido_destinatario->setDestacado(0);
            $pde_pedido_destinatario->setEstado(1);
            $pde_pedido_destinatario->save();
        }
        return true;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/05/2013 17:00 hs.
     * Metodo que actualiza los destinatarios del pedido, para remarcar como no leido y no observado
     */
    public function setPdePedidoDestinatariosAviso() {
        $user = UsUsuario::autenticado();

        foreach ($this->getPdePedidoDestinatarios() as $pde_pedido_destinatario) {
            $leido = 0;
            $observado = 0;
            if ($pde_pedido_destinatario->getUsUsuario()->getId() == $user->getId()) {
                $leido = 1;
                $observado = 1;
            }
            //$pde_pedido_destinatario->setPdePedidoId($this->getId());
            //$pde_pedido_destinatario->setUsUsuarioId($user->getId());
            $pde_pedido_destinatario->setLeido($leido);
            $pde_pedido_destinatario->setObservado($observado);
            //$pde_pedido_destinatario->setEstado(1);
            $pde_pedido_destinatario->save();
        }
    }

    public function setPdePedidoDestinatariosCentroPedidoAviso() {
        $user = UsUsuario::autenticado();

        // se obtienen los IDs de usuarios CDN
        $us_usuarios_ids = false;
        foreach ($this->getPdePedidoDestinatariosUsUsuariosCdn() as $us_usuario) {
            $us_usuarios_ids[] = $us_usuario->getId();
        }
        if ($us_usuarios_ids) {
            $us_usuarios_ids_string = '(' . implode(',', $us_usuarios_ids) . ')';
        } else {
            $us_usuarios_ids_string = '(0)';
        }
        $c = new Criterio();
        $c->add(PdePedidoDestinatario::GEN_ATTR_US_USUARIO_ID, $us_usuarios_ids_string, Criterio::IN);
        $c->addTabla(PdePedidoDestinatario::GEN_TABLA);
        $c->setCriterios();

        foreach ($this->getPdePedidoDestinatarios(null, $c) as $pde_pedido_destinatario) {
            $leido = 0;
            $observado = 0;
            if ($pde_pedido_destinatario->getUsUsuario()->getId() == $user->getId()) {
                $leido = 1;
                $observado = 1;
            }
            //$pde_pedido_destinatario->setPdePedidoId($this->getId());
            //$pde_pedido_destinatario->setUsUsuarioId($user->getId());
            $pde_pedido_destinatario->setLeido($leido);
            $pde_pedido_destinatario->setObservado($observado);
            //$pde_pedido_destinatario->setEstado(1);
            $pde_pedido_destinatario->save();
        }
    }

    public function getPdePedidoDestinatariosUsUsuariosCdn() {
        $us_usuarios_destinatarios = array();

        $pde_centro_pedido = $this->getPdeCentroPedido();

        // se obtienen responsables de pedidos
        $us_grupo_responsable_panol = UsGrupo::getOxCodigo(UsGrupo::CENTRO_PEDIDO_RESPONSABLE);
        $us_usuarios_responsables_panol = $us_grupo_responsable_panol->getUsUsuariosXUsAgrupado();
        foreach ($us_usuarios_responsables_panol as $us_usuario_responsables_panol) {

            // se verifica que el usuario tiene asignado el centro de pedido en cuestion
            $codigo = PdeCentroPedido::PREFIJO_CREDENCIAL . $pde_centro_pedido->getCodigo();
            //if(Login::esAutorizado($us_usuario_responsables_panol, $codigo)){
            if (UsCredencial::getEsAcreditado($codigo, $us_usuario_responsables_panol->getId())) {
                $us_usuarios_destinatarios[] = $us_usuario_responsables_panol;
            }
        }

        // se obtienen auditores de pedidos
        $us_grupo_responsable_panol = UsGrupo::getOxCodigo(UsGrupo::CENTRO_PEDIDO_CONSULTA);
        $us_usuarios_responsables_panol = $us_grupo_responsable_panol->getUsUsuariosXUsAgrupado();
        foreach ($us_usuarios_responsables_panol as $us_usuario_responsables_panol) {

            // se verifica que el usuario tiene asignado el centro de pedido en cuestion
            $codigo = PdeCentroPedido::PREFIJO_CREDENCIAL . $pde_centro_pedido->getCodigo();
            //if(Login::esAutorizado($us_usuario_responsables_panol, $codigo)){
            if (UsCredencial::getEsAcreditado($codigo, $us_usuario_responsables_panol->getId())) {
                $us_usuarios_destinatarios[] = $us_usuario_responsables_panol;
            }
        }

        return $us_usuarios_destinatarios;
    }

    public function getPdePedidoDestinatariosUsUsuariosProveedores() {
        $us_usuarios_destinatarios = array();

        $prv_proveedores = $this->getPrvProveedorsXPdePedidoPrvProveedor();
        foreach ($prv_proveedores as $prv_proveedor) {

            $c = new Criterio();
            $c->add(UsGrupo::GEN_ATTR_CODIGO, UsGrupo::CENTRO_PEDIDO_PROVEEDOR, Criterio::IGUAL);
            $c->add(PrvProveedorUsUsuario::GEN_ATTR_PRV_PROVEEDOR_ID, $prv_proveedor->getId(), Criterio::IGUAL);
            $c->addTabla(UsUsuario::GEN_TABLA);
            $c->addRealJoin(PrvProveedorUsUsuario::GEN_TABLA, PrvProveedorUsUsuario::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
            $c->addRealJoin(UsAgrupado::GEN_TABLA, UsAgrupado::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
            $c->addRealJoin(UsGrupo::GEN_TABLA, UsGrupo::GEN_ATTR_ID, UsAgrupado::GEN_ATTR_US_GRUPO_ID);
            $c->setCriterios();

            $us_usuario_proveedores_pedidos = UsUsuario::getUsUsuarios(null, $c);
            foreach ($us_usuario_proveedores_pedidos as $us_usuario_proveedor_pedido) {
                $us_usuarios_destinatarios[] = $us_usuario_proveedor_pedido;
            }
        }
        return $us_usuarios_destinatarios;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 30/05/2013 16:00 hs.
     * Metodo que retorna los destinatarios del pedido
     */
    public function getPdePedidoDestinatarioUsUsuario($us_usuario = false) {
        if (!$us_usuario) {
            $us_usuario = UsUsuario::autenticado();
        }
        $leido = true;
        $array = array(
            array('campo' => PdePedidoDestinatario::GEN_ATTR_PDE_PEDIDO_ID, 'valor' => $this->getId()),
            array('campo' => PdePedidoDestinatario::GEN_ATTR_US_USUARIO_ID, 'valor' => $us_usuario->getId())
        );
        $pde_pedido_destinatario = PdePedidoDestinatario::getOxArray($array);
        return $pde_pedido_destinatario;
    }

    public function esPdePedidoLeido($us_usuario = false) {
        $leido = true;
        $pde_pedido_destinatario = $this->getPdePedidoDestinatarioUsUsuario($us_usuario);
        if ($pde_pedido_destinatario) {
            if (!$pde_pedido_destinatario->getLeido()) {
                $leido = false;
            }
        }
        return $leido;
    }

    public function setPdePedidoLeido($us_usuario = false) {
        $pde_pedido_destinatario = $this->getPdePedidoDestinatarioUsUsuario($us_usuario);
        if ($pde_pedido_destinatario) {
            $pde_pedido_destinatario->setLeido(1);
            $pde_pedido_destinatario->setObservado(1);
            $pde_pedido_destinatario->save();
        }
        return true;
    }

    public function esPdePedidoDestacado($us_usuario = false) {
        $destacado = false;
        $pde_pedido_destinatario = $this->getPdePedidoDestinatarioUsUsuario($us_usuario);
        if ($pde_pedido_destinatario) {
            if ($pde_pedido_destinatario->getDestacado()) {
                $destacado = true;
            }
        }
        return $destacado;
    }

    public function setPdePedidoDestacado($us_usuario = false) {
        $pde_pedido_destinatario = $this->getPdePedidoDestinatarioUsUsuario($us_usuario);
        if ($pde_pedido_destinatario) {
            if ($pde_pedido_destinatario->getDestacado()) {
                $pde_pedido_destinatario->setDestacado(0);
            } else {
                $pde_pedido_destinatario->setDestacado(1);
            }
            $pde_pedido_destinatario->save();
        }
        return true;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 25/05/2013 22:06 hs.
     * Metodo que registra un nuevo estado para el pedido
     */
    public function setPdePedidoEstado($tipo_estado_codigo, $observaciones) {
        $inicial = 1;
        foreach ($this->getPdeEstados() as $pde_estado) {
            $pde_estado->setActual(0);
            $pde_estado->save();

            $inicial = 0;
        }

        $pde_tipo_estado = PdeTipoEstado::getOxCodigo($tipo_estado_codigo);

        $pde_estado = new PdeEstado();
        $pde_estado->setPdePedidoId($this->getId());
        $pde_estado->setPdeTipoEstadoId($pde_tipo_estado->getId());
        $pde_estado->setInicial($inicial);
        $pde_estado->setActual(1);
        $pde_estado->setObservacion($observaciones);
        $pde_estado->save();

        return $pde_estado;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 22/05/2013 17:28 hs.
     * Metodo que retorna el estado actual del PdePedido
     * @return PdeEstado
     */
    public function getPdeEstadoActual() {
        $c = new Criterio();
        $c->add('pde_pedido_id', $this->getId(), Criterio::IGUAL);
        $c->add('actual', 1, Criterio::IGUAL);
        $c->addTabla('pde_estado');
        $c->setCriterios();

        $pde_estados = PdeEstado::getPdeEstados(new Paginador(1, 1), $c);
        foreach ($pde_estados as $pde_estado) {
            return $pde_estado;
        }
        return false;
    }

    public function getPdeTipoEstadoActual() {
        $pde_tipo_estado = $this->getPdeEstadoActual()->getPdeTipoEstado();
        return $pde_tipo_estado;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 22/05/2013 17:28 hs.
     * Metodo que retorna el estado de un PdePedido de acuerdo a un codigo de PdeTipoEstado indicado
     * @return PdeEstado
     */
    public function getPdeEstadoXCodigoDePdeTipoEstado($valor) {
        $c = new Criterio();
        $c->add('pde_estado.pde_pedido_id', $this->getId(), Criterio::IGUAL);
        $c->add('pde_tipo_estado.codigo', $valor, Criterio::IGUAL);
        $c->addTabla('pde_estado');
        $c->addRealJoin('pde_tipo_estado', 'pde_tipo_estado.id', 'pde_estado.pde_tipo_estado_id');
        $c->setCriterios();

        $pde_estados = PdeEstado::getPdeEstados(new Paginador(1, 1), $c);
        foreach ($pde_estados as $pde_estado) {
            return $pde_estado;
        }
        return false;
    }

    public function setPdePedidoPublicado() {
        $us_usuario = UsUsuario::autenticado();

        // se registra nuevo estado del pedido, PdeEstado
        $pde_estado = $this->setPdePedidoEstado(
                PdeTipoEstado::TIPO_ESTADO_APROBADO, 'Aprobado por Responsable de Pedidos: ' . $us_usuario->getDescripcion()
        );
        // se registran destinatarios del pedido, PdePedidoDestinatario
        $this->setPdePedidoDestinatarios(); // va en el estado APROBADO

        return $pde_estado;
    }

    public function setPdePedidoVencido() {
        // se registra nuevo estado del pedido, PdeEstado
        $pde_estado = $this->setPdePedidoEstado(
                PdeTipoEstado::TIPO_ESTADO_VENCIDO, 'Activado por Control de Vencimientos'
        );

        return $pde_estado;
    }

    public function getPdePedidoDestinatarioXProveedor($prv_proveedor) {
        $us_usuario = $prv_proveedor->getUsUsuarioXPrvProveedorUsUsuario();
        //Gral::prr($us_usuario);
        if ($us_usuario) {
            $array = array(
                array('campo' => 'pde_pedido_id', 'valor' => $this->getId()),
                array('campo' => 'us_usuario_id', 'valor' => $us_usuario->getId()),
            );
            $pde_pedido_destinatario = PdePedidoDestinatario::getOxArray($array);

            if ($pde_pedido_destinatario) {
                return $pde_pedido_destinatario;
            }
        }
        return false;
    }

    public function getPdePedidoPrvProveedorAvisadosXProveedor($prv_proveedor) {
        $array = array(
            array('campo' => 'pde_pedido_id', 'valor' => $this->getId()),
            array('campo' => 'prv_proveedor_id', 'valor' => $prv_proveedor->getId()),
        );
        $pde_pedido_prv_proveedor_avisados = PdePedidoPrvProveedorAvisado::getOsxArray($array);
        return $pde_pedido_prv_proveedor_avisados;
    }

    /* --------------------------------- */
    /* Inicia Cotizaciones del PdePedido */
    /* --------------------------------- */

    /**
     * Autor: Pablo Rosen
     * Fecha: 01/06/2013 20:00 hs.
     * Metodo que agrega una nueva cotizacion a un PdePedido
     * 
     * @param type $prv_proveedor
     * @param type $codigo
     * @param type $cantidad
     * @param type $fecha_entrega
     * @param type $importe_unitario
     * @param type $observacion
     */
    public function addPdeCotizacion(
    $prv_proveedor, $codigo, $ins_marca_id, $cantidad, $fecha_entrega, $gral_moneda_id, $importe_unitario, $observacion, $arr_condicion_pago, $pde_cotizacion_id = false
    ) {
        $importe_total = $importe_unitario * $cantidad;

        if ($codigo == '') {
            $codigo = 'N/D - ' . date('d/m/Y H:i') . ' hs.';
        }
        /*
        $cotizacion_respecto_peso = 0;
        $gral_moneda = GralMoneda::getOxId($gral_moneda_id);
        if ($gral_moneda) {
            $cotizacion_respecto_peso = $gral_moneda->getCotizacionRespectoPeso();
        }
        */
        
        if ($pde_cotizacion_id) {
            $pde_cotizacion = PdeCotizacion::getOxId($pde_cotizacion_id);
        } else {
            $pde_cotizacion = new PdeCotizacion();
        }

        $pde_cotizacion->setPdePedidoId($this->getId());
        $pde_cotizacion->setPrvProveedorId($prv_proveedor->getId());
        $pde_cotizacion->setInsInsumoId($this->getInsInsumoId());
        //$pde_cotizacion->setInsMarcaId($ins_marca_id);
        $pde_cotizacion->setCodigo($codigo);
        $pde_cotizacion->setCantidad($cantidad);
        $pde_cotizacion->setFechaEntrega($fecha_entrega);
        //$pde_cotizacion->setGralMonedaId($gral_moneda_id);
        //$pde_cotizacion->setCotizacionRespectoPeso($cotizacion_respecto_peso);
        $pde_cotizacion->setImporteUnidad($importe_unitario);
        $pde_cotizacion->setImporteTotal($importe_total);
        $pde_cotizacion->setObservacion($observacion);
        $pde_cotizacion->setEstado(1);
        $pde_cotizacion->save();

        /*
        // se registran las condiciones de pago elegidas
        foreach ($arr_condicion_pago as $condicion_pago) {
            $array = array(
                array('campo' => 'pde_cotizacion_id', 'valor' => $pde_cotizacion->getId()),
                array('campo' => 'pde_condicion_pago_id', 'valor' => $condicion_pago),
            );
            $pde_cotizacion_pde_condicion_pago = PdeCotizacionPdeCondicionPago::getOxArray($array);
            if (!$pde_cotizacion_pde_condicion_pago) {
                $pde_cotizacion_pde_condicion_pago = new PdeCotizacionPdeCondicionPago();
            }
            $pde_cotizacion_pde_condicion_pago->setPdeCotizacionId($pde_cotizacion->getId());
            $pde_cotizacion_pde_condicion_pago->setPdeCondicionPagoId($condicion_pago);
            $pde_cotizacion_pde_condicion_pago->save();
        }
        */
        
        // registrar los destinatarios de la cotizacion
        $pde_cotizacion->setPdeCotizacionDestinatarios();

        // se actualiza estado de leido/observado del pedido
        $pde_pedido = $pde_cotizacion->getPdePedido();
        $pde_pedido->setPdePedidoDestinatariosCentroPedidoAviso();

        $pde_tipo_estado_actual = $this->getPdeTipoEstadoActual();
        if ($pde_tipo_estado_actual->getActivo()) {
            // se actualiza el estado del pedido a COTIZADO
            $pde_estado = $this->setPdePedidoEstado(
                    PdeTipoEstado::TIPO_ESTADO_COTIZADO, $pde_pedido->getObservacion()
            );
        }

        return $pde_cotizacion;
    }

    public function getPdeCotizacionsXProveedor($prv_proveedor_id) {
        $c = new Criterio();
        $c->add(PdeCotizacion::GEN_ATTR_PRV_PROVEEDOR_ID, $prv_proveedor_id, Criterio::IGUAL);
        $c->addTabla(PdeCotizacion::GEN_TABLA);
        $c->addOrden(PdeCotizacion::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $pde_cotizacions = $this->getPdeCotizacions(null, $c);
        return $pde_cotizacions;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 02/06/2013 10:24 hs.
     * Metodo que retorna booleano si el pedido tiene alguna cotizacion sin leer/observar para el usuario
     * @return type
     */
    public function tienePdeCotizacionsNoLeido() {
        $no_leido = false;
        foreach ($this->getPdeCotizacions() as $pde_cotizacion) {
            $leido = $pde_cotizacion->esPdeCotizacionLeido();
            if (!$leido)
                $no_leido = true;
        }
        return $no_leido;
    }

    public function getPdeCotizacionsNoLeido() {
        $os = array();
        foreach ($this->getPdeCotizacions() as $pde_cotizacion) {
            $leido = $pde_cotizacion->esPdeCotizacionLeido();
            if (!$leido)
                $os[] = $pde_cotizacion;
        }
        return $os;
    }

    public function setPdeCotizacionsLeido() {
        $os = $this->getPdeCotizacionsNoLeido();
        foreach ($os as $o) {
            $o->setPdeCotizacionLeido();
        }
        return true;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 01/11/2014 18:28 hs.
     * Metodo que retorna booleano si el pedido tiene alguna OC sin leer/observar para el usuario
     * @return type
     */
    public function tienePdeOcsNoLeido() {
        $no_leido = false;
        foreach ($this->getPdeOcs() as $pde_oc) {
            $leido = $pde_oc->esPdeOcLeido();
            if (!$leido)
                $no_leido = true;
        }
        return $no_leido;
    }

    public function getPdeOcsNoLeido() {
        $os = array();
        foreach ($this->getPdeOcs() as $pde_oc) {
            $leido = $pde_oc->esPdeOcLeido();
            if (!$leido)
                $os[] = $pde_oc;
        }
        return $os;
    }

    public function setPdeOcsLeido() {
        $os = $this->getPdeOcsNoLeido();
        foreach ($os as $o) {
            $o->setPdeOcLeido();
        }
        return true;
    }

    public function enviarAvisos($asunto = '', $nuevos = false) {
        // nueva forma, mails en 2do plano
        $pde_pedido_destinatarios = $this->getPdePedidoDestinatarios();
        foreach ($pde_pedido_destinatarios as $pde_pedido_destinatario) {
            $pde_pedido_destinatario->setDescripcion($asunto);
            if ($nuevos) {
                if ($pde_pedido_destinatario->getAvisoEmail() == 0) {
                    $pde_pedido_destinatario->setAvisoEmail(0);
                } else {
                    $pde_pedido_destinatario->setAvisoEmail(1);
                }
            } else {
                $pde_pedido_destinatario->setAvisoEmail(0);
            }
            $pde_pedido_destinatario->save();
        }

        return;

        // manera original, mails al instante
        $pde_pedido_destinatarios = $this->getPdePedidoDestinatarios();
        foreach ($pde_pedido_destinatarios as $pde_pedido_destinatario) {
            $us_usuario_destinatario = $pde_pedido_destinatario->getUsUsuario();
            $user = UsUsuario::autenticado();
            if ($user->getId() != $us_usuario_destinatario->getId()) {
                // aviso por email
                $estado_envio_mail = $this->enviarEmailAviso($asunto, $us_usuario_destinatario);
                if ($estado_envio_mail) {
                    $pde_pedido_destinatario->setAvisoEmail(1);
                    $pde_pedido_destinatario->save();
                }
            }
        }
    }

    public function enviarEmailAviso($asunto, $us_usuario) {
        // control de envio de email activado
        if (!Mail::MAIL_ACTIVO)
            return false;

        $pde_centro_pedido = $this->getPdeCentroPedido();

        // se cargan todos los emails del proveedor, en el caso de que el usuario destinatario sea proveedor
        $arr_emails = false;
        $prv_proveedor = $us_usuario->getPrvProveedorXPrvProveedorUsUsuario();
        //Gral::prr($prv_proveedor);
        //Gral::prr($us_usuario);
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

        Gral::setSes('MECANO_PDE_PEDIDO_ID', $this->getId());
        Gral::setSes('MECANO_US_USUARIO_ID', $us_usuario->getId());

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        if ($prv_proveedor) {
            $archivo = Gral::getPathAbs() . "mailing/plantillas/MECANO/index_pde_pedido_publicacion.php";
            $msg = Gral::get_include_contents($archivo);
        } else {
            $archivo = Gral::getPathAbs() . "mailing/plantillas/MECANO/index_pde_pedido_publicacion_interno.php";
            $msg = Gral::get_include_contents($archivo);
        }

        //echo $msg;
        //return;

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = Mail::MAIL_SECURE_3;
        $mail->SMTPDebug = 2;
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

        $pde_centro_pedido = $this->getPdeCentroPedido();
        $pde_centro_pedido_emails = $pde_centro_pedido->getPdeCentroPedidoEmails(null, null, true); // solo emails activos
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
        //$exito = true;
        if ($exito) {
            if ($arr_emails) {
                foreach ($arr_emails as $arr_email) {

                    // se registra detalle de envio de email para historico de envios
                    $pde_pedido_prv_proveedor_avisado = new PdePedidoPrvProveedorAvisado();
                    $pde_pedido_prv_proveedor_avisado->setPdePedidoId($this->getId());
                    $pde_pedido_prv_proveedor_avisado->setPrvProveedorId($prv_proveedor->getId());
                    $pde_pedido_prv_proveedor_avisado->setEnviadoA($arr_email);
                    $pde_pedido_prv_proveedor_avisado->setLeido(0);
                    $pde_pedido_prv_proveedor_avisado->setLeidoEl(date('Y-m-d H:i:s'));
                    $pde_pedido_prv_proveedor_avisado->save();
                }
            }
        }

        return $exito;
    }
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 07/08/2018 09:16 hs.
     * Metodo que envia la Agrupacion de OC por email al destinatario indicado.
     * @return 
     */
    public function enviarPdePedidoEmail($enviar = false, $destinatarios = false, $txa_observacion, $prv_proveedor) {
        if (!Mail::MAIL_ACTIVO)
            return false;

        $mail_asunto = Gral::getConfig('gral_cliente').' - Pedido de Cotizacion #' . $this->getCodigo() . ' ' . date('d/m/Y H:i');

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $destinatarios = str_replace(' ', '', $destinatarios);
        $destinatarios = str_replace(',', ';', $destinatarios);
        $arr_destinatarios = explode(";", $destinatarios);

        $param = array(
            'pde_pedido_id' => $this->getId(),
            'prv_proveedor_id' => $prv_proveedor->getId(),
            'observacion' => $txa_observacion,
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/GENERAL/index_pde_pedido.php";
        $msg = Gral::get_include_contents($archivo, $param);

        if (!$enviar) {
            echo $msg;
            return;
        }

        $pde_pedido_enviado = $this->inicializarPdePedidoEnviado($txa_observacion, $destinatarios, $mail_asunto, $msg, $strContenidoPdf = '');

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

            $mail->Timeout = 20;

            $envio_ok = $mail->Send();
            if ($envio_ok) {
                $pde_pedido_enviado->setConfirmarPdePedidoEnviado(1, 'Enviado correctamente');
            } else {
                $pde_pedido_enviado->setConfirmarPdePedidoEnviado(0, $mail->ErrorInfo);
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
    public function inicializarPdePedidoEnviado($observacion, $destinatarios, $mail_asunto, $mail_contenido, $archivo_adjunto) {
        $pde_pedido_enviado = new PdePedidoEnviado();
        $pde_pedido_enviado->setDescripcion('');
        $pde_pedido_enviado->setPdePedidoId($this->getId());
        $pde_pedido_enviado->setAsunto($mail_asunto);
        $pde_pedido_enviado->setDestinatario($destinatarios);

        $pde_pedido_enviado->setCuerpo(addslashes($mail_contenido));
        $pde_pedido_enviado->setAdjunto(base64_encode($archivo_adjunto));

        $pde_pedido_enviado->setCodigoEnvio(0);
        $pde_pedido_enviado->setObservacion($observacion);
        $pde_pedido_enviado->setEstado(0);

        $pde_pedido_enviado->save();

        return $pde_pedido_enviado;
    }    

    public function getInsMarcasCmbXPdePedidoInsMarca() {
        $c_marcas = new Criterio();
        $c_marcas->add('pde_pedido_ins_marca.pde_pedido_id', $this->getId(), Criterio::IGUAL);
        $c_marcas->addTabla('ins_marca');
        $c_marcas->addRealJoin('pde_pedido_ins_marca', 'pde_pedido_ins_marca.ins_marca_id', 'ins_marca.id');
        $c_marcas->addOrden('ins_marca.descripcion', 'asc');
        $c_marcas->setCriterios();
        $arr_marcas_cmb = InsMarca::getInsMarcasCmbF(null, $c_marcas);

        return $arr_marcas_cmb;
    }

    public function getPdeCondicionPagosHabilitadas() {
        $pde_centro_pedido = $this->getPdeCentroPedido();

        $c = new Criterio();
        $c->add(PdeCentroPedido::GEN_ATTR_ID, $pde_centro_pedido->getId(), Criterio::IGUAL);
        $c->add(PdeCondicionPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->addTabla(PdeCondicionPago::GEN_TABLA);
        $c->addRealJoin(PdeCondicionPagoPdeCentroPedido::GEN_TABLA, PdeCondicionPagoPdeCentroPedido::GEN_ATTR_PDE_CONDICION_PAGO_ID, PdeCondicionPago::GEN_ATTR_ID);
        $c->addRealJoin(PdeCentroPedido::GEN_TABLA, PdeCentroPedido::GEN_ATTR_ID, PdeCondicionPagoPdeCentroPedido::GEN_ATTR_PDE_CENTRO_PEDIDO_ID);
        $c->addOrden(PdeCondicionPago::GEN_ATTR_ORDEN, Criterio::_ASC);
        $c->setCriterios();

        $os = PdeCondicionPago::getPdeCondicionPagos(null, $c);
        return $os;
    }

    /**
     * @creado_por Pablo Rosen, Esteban Martinez 
     * @creado 16/05/2017
     */
    public function getFechaPublicado() {
        $pde_estado = $this->getPdeEstadoXCodigoDePdeTipoEstado(PdeTipoEstado::TIPO_ESTADO_APROBADO);
        if ($pde_estado) {
            return $pde_estado->getCreado();
        }

        return false;
    }

    /**
     * Retorna los pedidos PDE activos
     * @param pde_centro_pedido_id int centro de pedido
     * @param ins_insumo_id int el insumo
     * @return Collection $pde_pedidos
     * @creado_por Pablo Rosen
     * @creado 25/12/2017 19:36
     */
    static function getPdePedidosActivos($pde_centro_pedido_id, $ins_insumo_id) {
        $criterio = new Criterio();
        $criterio->add(PdeEstado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);

        $criterio->add(InsInsumo::GEN_ATTR_ID, $ins_insumo_id, Criterio::IGUAL);
        $criterio->add(PdeTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        $criterio->add(PdePedido::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $pde_centro_pedido_id, Criterio::IGUAL);
        $criterio->add(PdePedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        
        $criterio->addTabla(PdePedido::GEN_TABLA);
        $criterio->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, PdePedido::GEN_ATTR_INS_INSUMO_ID);
        $criterio->addRealJoin(PdeEstado::GEN_TABLA, PdeEstado::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
        $criterio->addRealJoin(PdeTipoEstado::GEN_TABLA, PdeTipoEstado::GEN_ATTR_ID, PdeEstado::GEN_ATTR_PDE_TIPO_ESTADO_ID);
        $criterio->setCriterios();

        $pde_pedidos = PdePedido::getPdePedidos(null, $criterio);
        return $pde_pedidos;
    }
    
    public function getPdePedidoDescripcionFull(){
        $texto = "";

        $ins_insumo = $this->getInsInsumo();
        $ins_unidad_medida = $ins_insumo->getInsUnidadMedida();
        $pde_estado_actual = $this->getPdeEstadoActual();
        $pde_tipo_estado_actual = $pde_estado_actual->getPdeTipoEstado();
        
        $texto.= $this->getCantidad();
        $texto.= " ";
        $texto.= ($ins_unidad_medida) ? substr($ins_unidad_medida->getDescripcion(), 0, 3) : "";
        $texto.= " ";
        $texto.= substr($pde_tipo_estado_actual->getDescripcion(), 0, 5);
        $texto.= " el ";
        $texto.= Gral::getFechaToWEB($pde_estado_actual->getCreado());

        return $texto;
        
    }

}

?>