<?php

require_once "base/BPdeOc.php";

class PdeOc extends BPdeOc {

    const PREFIJO_CODIGO = "OC";

    public function getCodigoConCeros() {
        $codigo = self::PREFIJO_CODIGO;
        $codigo .= str_pad($this->getId(), 8, "0", STR_PAD_LEFT);
        //$codigo.= str_pad($this->getPdePedido()->getId(), 8, "0", STR_PAD_LEFT);

        return $codigo;
    }

    public function getDescripcion() {
        $texto = $this->getCodigo();
        $texto .= " - ";
        $texto .= Gral::getFechaToWeb($this->getCreado());
        return $texto;
    }

    public function getNombreArchivoAdjuntoOrdenCompra() {
        $nombre = Gral::getConfig('conf_proyecto_min') . '_' . $this->getCodigo() . '_' . $this->getPrvProveedor()->getDescripcion();
        $nombre = str_replace('.', '', $nombre);
        $nombre = str_replace('-', '_', $nombre);
        $nombre = str_replace(' ', '_', $nombre);
        return $nombre . '.pdf';
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 02/06/2013 20:27 hs.
     * Metodo que retorna todos las ordenes de compra no observadas aun por el usuario indicado
     * @return type
     */
    static function getPdeOcsNoObservados($us_usuario = false) {
        if (!$us_usuario) {
            $us_usuario = UsUsuario::autenticado();
        }
        $c = new Criterio();
        $c->add(PdeOcDestinatario::GEN_ATTR_OBSERVADO, 0, Criterio::IGUAL);
        $c->add(PdeOcDestinatario::GEN_ATTR_US_USUARIO_ID, $us_usuario->getId(), Criterio::IGUAL);
        $c->addTabla(PdeOc::GEN_TABLA);
        $c->addRealJoin(PdeOcDestinatario::GEN_TABLA, PdeOcDestinatario::GEN_ATTR_PDE_OC_ID, PdeOc::GEN_ATTR_ID);
        $c->setCriterios();

        $pde_ocs = PdeOc::getPdeOcs(null, $c);
        return $pde_ocs;
    }

    static function tienePdeOcsNoObservados($us_usuario = false) {
        $pde_ocs = self::getPdeOcsNoObservados();
        if (count($pde_ocs) > 0)
            return true;
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 02/06/2013 17:46 hs.
     * Metodo que registra los destinatarios de la orden de compra
     */
    public function setPdeOcDestinatarios() {
        $user = UsUsuario::autenticado();

        foreach ($this->getPdeOcDestinatarios() as $pde_oc_destinatario) {
            $pde_oc_destinatario->setEstado(0);
            $pde_oc_destinatario->save();
        }

        $us_usuarios_destinatarios = array();
        //$us_usuarios_destinatarios[] = $user;
        // destinatarios CDN
        foreach ($this->getPdeOcDestinatariosUsUsuariosCdn() as $us_usuario) {
            $us_usuarios_destinatarios[] = $us_usuario;
        }

        // destinatarios de recepcion
        foreach ($this->getPdeOcDestinatariosUsUsuariosCdnCentroRecepcion() as $us_usuario) {
            $us_usuarios_destinatarios[] = $us_usuario;
        }

        // destinatarios proveedores
        foreach ($this->getPdeOcDestinatariosUsUsuariosProveedor() as $us_usuario) {
            $us_usuarios_destinatarios[] = $us_usuario;
        }

        foreach ($us_usuarios_destinatarios as $us_usuario) {
            $leido = 0;
            $observado = 0;
            if ($user) {
                if ($us_usuario->getId() == $user->getId()) {
                    $leido = 1;
                    $observado = 1;
                }
            }

            $array = array(
                array('campo' => PdeOcDestinatario::GEN_ATTR_PDE_OC_ID, 'valor' => $this->getId()),
                array('campo' => PdeOcDestinatario::GEN_ATTR_US_USUARIO_ID, 'valor' => $us_usuario->getId())
            );
            $pde_oc_destinatario = PdeOcDestinatario::getOxArray($array);
            if (!$pde_oc_destinatario) {
                $pde_oc_destinatario = new PdeOcDestinatario();
            }
            $pde_oc_destinatario->setPdeOcId($this->getId());
            $pde_oc_destinatario->setUsUsuarioId($us_usuario->getId());
            $pde_oc_destinatario->setLeido($leido);
            $pde_oc_destinatario->setObservado($observado);
            //$pde_oc_destinatario->setDestacado(0);
            $pde_oc_destinatario->setEstado(1);
            $pde_oc_destinatario->save();
        }
        return true;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 28/10/2014 12:08 hs.
     * Metodo que regulariza los destinatarios de la orden de compra
     */
    public function setPdeOcDestinatariosRegularizacion() {
        $asunto = '';

        foreach ($this->getPdeOcDestinatarios() as $pde_oc_destinatario) {
            $pde_oc_destinatario->setEstado(0);
            $pde_oc_destinatario->save();

            if ($pde_oc_destinatario->getDescripcion() != '') {
                $asunto = $pde_oc_destinatario->getDescripcion();
            }
        }

        $us_usuarios_destinatarios = array();
        //$us_usuarios_destinatarios[] = $user;
        // destinatarios CDN
        foreach ($this->getPdeOcDestinatariosUsUsuariosCdn() as $us_usuario) {
            $us_usuarios_destinatarios[] = $us_usuario;
        }

        // destinatarios de recepcion
        foreach ($this->getPdeOcDestinatariosUsUsuariosCdnCentroRecepcion() as $us_usuario) {
            $us_usuarios_destinatarios[] = $us_usuario;
        }

        // destinatarios proveedores
        foreach ($this->getPdeOcDestinatariosUsUsuariosProveedor() as $us_usuario) {
            $us_usuarios_destinatarios[] = $us_usuario;
        }

        foreach ($us_usuarios_destinatarios as $us_usuario) {
            $array = array(
                array('campo' => PdeOcDestinatario::GEN_ATTR_PDE_OC_ID, 'valor' => $this->getId()),
                array('campo' => PdeOcDestinatario::GEN_ATTR_US_USUARIO_ID, 'valor' => $us_usuario->getId())
            );
            $pde_oc_destinatario = PdeOcDestinatario::getOxArray($array);
            if (!$pde_oc_destinatario) {
                if ($asunto == '') {
                    $asunto = "PDE Orden de Compra Aprobada #" . $this->getCodigo();
                }
                $pde_oc_destinatario = new PdeOcDestinatario();
                $pde_oc_destinatario->setDescripcion($asunto);
                $pde_oc_destinatario->setLeido(1);
                $pde_oc_destinatario->setObservado(1);
                $pde_oc_destinatario->setAvisoEmail(1);
            }
            $pde_oc_destinatario->setPdeOcId($this->getId());
            $pde_oc_destinatario->setUsUsuarioId($us_usuario->getId());
            //$pde_oc_destinatario->setDestacado(0);
            $pde_oc_destinatario->setEstado(1);
            $pde_oc_destinatario->save();
        }
        return true;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 02/06/2013 17:49 hs.
     * Metodo que actualiza los destinatarios de la orden de compra, para remarcar como no leido y no observado
     */
    public function setPdeOcDestinatariosAviso() {
        $user = UsUsuario::autenticado();

        foreach ($this->getPdeOcDestinatarios() as $pde_oc_destinatario) {
            $leido = 0;
            $observado = 0;
            if ($user) {
                if ($pde_oc_destinatario->getUsUsuario()->getId() == $user->getId()) {
                    $leido = 1;
                    $observado = 1;
                }
            }
            //$pde_oc_destinatario->setPdePedidoId($this->getId());
            //$pde_oc_destinatario->setUsUsuarioId($user->getId());
            $pde_oc_destinatario->setLeido($leido);
            $pde_oc_destinatario->setObservado($observado);
            //$pde_oc_destinatario->setEstado(1);
            $pde_oc_destinatario->save();
        }
    }

    public function getPdeOcDestinatariosUsUsuariosCdn() {
        $us_usuarios_destinatarios = array();

        $pde_centro_pedido = $this->getPdePedido()->getPdeCentroPedido();

        // se obtienen responsables de pedido
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
        /*
          // responsables de pedido
          $us_grupo_responsable_panol = UsGrupo::getOxCodigo(UsGrupo::CENTRO_PEDIDO_RESPONSABLE);
          $us_usuarios_responsables_panol = $us_grupo_responsable_panol->getUsUsuariosXUsAgrupado();
          foreach($us_usuarios_responsables_panol as $us_usuario_responsables_panol){
          $us_usuarios_destinatarios[] = $us_usuario_responsables_panol;
          }
         */
        return $us_usuarios_destinatarios;
    }

    public function getPdeOcDestinatariosUsUsuariosCdnCentroRecepcion() {
        $us_usuarios_destinatarios = array();

        // responsables de pedido
        $us_grupo_responsable_panol = UsGrupo::getOxCodigo(UsGrupo::CENTRO_RECEPCION_RESPONSABLE);
        $us_usuarios_responsables_panol = $us_grupo_responsable_panol->getUsUsuariosXUsAgrupado();

        $c = new Criterio();
        $c->add(UsGrupo::GEN_ATTR_CODIGO, UsGrupo::CENTRO_RECEPCION_RESPONSABLE, Criterio::IGUAL);
        //$c->add(UsCredencial::GEN_ATTR_CODIGO, PdeCentroRecepcion::PREFIJO_CREDENCIAL.$this->getPdeCentroRecepcion()->getCodigo(), Criterio::IGUAL);
        $c->add(PdeCentroRecepcionUsUsuario::GEN_ATTR_PDE_CENTRO_RECEPCION_ID, $this->getPdeCentroRecepcionId(), Criterio::IGUAL);
        $c->addTabla(UsUsuario::GEN_TABLA);
        $c->addRealJoin(UsAgrupado::GEN_TABLA, UsAgrupado::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
        $c->addRealJoin(UsGrupo::GEN_TABLA, UsGrupo::GEN_ATTR_ID, UsAgrupado::GEN_ATTR_US_GRUPO_ID);
        $c->addRealJoin(PdeCentroRecepcionUsUsuario::GEN_TABLA, PdeCentroRecepcionUsUsuario::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
        //$c->addRealJoin(UsAcreditado::GEN_TABLA, UsAcreditado::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
        //$c->addRealJoin(UsCredencial::GEN_TABLA, UsCredencial::GEN_ATTR_ID, UsAcreditado::GEN_ATTR_US_CREDENCIAL_ID);
        $c->setCriterios();
        $us_usuarios_responsables_panol = UsUsuario::getUsUsuarios(null, $c);
        foreach ($us_usuarios_responsables_panol as $us_usuario_responsables_panol) {
            $us_usuarios_destinatarios[] = $us_usuario_responsables_panol;
        }

        return $us_usuarios_destinatarios;
    }

    public function getPdeOcDestinatariosUsUsuariosProveedor() {
        $us_usuarios_destinatarios = array();
        return $us_usuarios_destinatarios;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 02/06/2013 17:53 hs.
     * Metodo que retorna los destinatarios de la orden de compra
     */
    public function getPdeOcDestinatarioUsUsuario($us_usuario = false) {
        if (!$us_usuario) {
            $us_usuario = UsUsuario::autenticado();
        }
        $leido = true;
        $array = array(
            array('campo' => PdeOcDestinatario::GEN_ATTR_PDE_OC_ID, 'valor' => $this->getId()),
            array('campo' => PdeOcDestinatario::GEN_ATTR_US_USUARIO_ID, 'valor' => $us_usuario->getId())
        );
        $pde_oc_destinatario = PdeOcDestinatario::getOxArray($array);
        return $pde_oc_destinatario;
    }

    public function esPdeOcLeido($us_usuario = false) {
        $leido = true;
        $pde_oc_destinatario = $this->getPdeOcDestinatarioUsUsuario($us_usuario);
        if ($pde_oc_destinatario) {
            if (!$pde_oc_destinatario->getLeido()) {
                $leido = false;
            }
        }
        return $leido;
    }

    public function setPdeOcLeido($us_usuario = false) {
        $pde_oc_destinatario = $this->getPdeOcDestinatarioUsUsuario($us_usuario);
        if ($pde_oc_destinatario) {
            $pde_oc_destinatario->setLeido(1);
            $pde_oc_destinatario->setObservado(1);
            $pde_oc_destinatario->save();
        }
        return true;
    }

    public function esPdeOcDestacado($us_usuario = false) {
        $destacado = false;
        $pde_oc_destinatario = $this->getPdeOcDestinatarioUsUsuario($us_usuario);
        if ($pde_oc_destinatario) {
            if ($pde_oc_destinatario->getDestacado()) {
                $destacado = true;
            }
        }
        return $destacado;
    }

    public function setPdeOcDestacado($us_usuario = false) {
        $pde_oc_destinatario = $this->getPdeOcDestinatarioUsUsuario($us_usuario);
        if ($pde_oc_destinatario) {
            if ($pde_oc_destinatario->getDestacado()) {
                $pde_oc_destinatario->setDestacado(0);
            } else {
                $pde_oc_destinatario->setDestacado(1);
            }
            $pde_oc_destinatario->save();
        }
        return true;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 02/06/2013 16:54 hs.
     * Metodo que registra un nuevo estado para la Orden de Compra
     */
    public function setPdeOcEstado($tipo_estado_codigo, $observaciones) {
        $inicial = 1;
        foreach ($this->getPdeOcEstados() as $pde_oc_estado) {
            $pde_oc_estado->setActual(0);
            $pde_oc_estado->save();

            $inicial = 0;
        }

        $pde_oc_tipo_estado = PdeOcTipoEstado::getOxCodigo($tipo_estado_codigo);

        $pde_oc_estado = new PdeOcEstado();
        $pde_oc_estado->setPdeOcId($this->getId());
        $pde_oc_estado->setPdeOcTipoEstadoId($pde_oc_tipo_estado->getId());
        $pde_oc_estado->setInicial($inicial);
        $pde_oc_estado->setActual(1);
        $pde_oc_estado->setObservacion($observaciones);
        $pde_oc_estado->save();

        // se setea el estado en pde oc
        $this->setPdeOcTipoEstadoId($pde_oc_tipo_estado->getId());
        $this->save();

        return $pde_oc_estado;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 02/06/2013 17:13 hs.
     * Metodo que retorna el estado actual del PdeOc
     * @return PdeOcEstado
     */
    public function getPdeOcEstadoActual() {
        $c = new Criterio();
        $c->add(PdeOcEstado::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PdeOcEstado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->addTabla(PdeOcEstado::GEN_TABLA);
        $c->setCriterios();

        $pde_oc_estados = PdeOcEstado::getPdeOcEstados(new Paginador(1, 1), $c);
        foreach ($pde_oc_estados as $pde_oc_estado) {
            return $pde_oc_estado;
        }
        return false;
    }

    public function getPdeOcTipoEstadoActual() {
        $pde_oc_estado_actual = $this->getPdeOcEstadoActual();
        if ($pde_oc_estado_actual) {
            return $pde_oc_estado_actual->getPdeOcTipoEstado();
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: Fecha: 02/06/2013 17:13 hs.
     * Metodo que retorna el estado de un PdeOc de acuerdo a un codigo de PdeOcTipoEstado indicado
     * @return PdeEstado
     */
    public function getPdeOcEstadoXCodigoDePdeOcTipoEstado($valor) {
        $c = new Criterio();
        $c->add(PdeOcEstado::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PdeOcTipoEstado::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
        $c->addTabla(PdeOcEstado::GEN_TABLA);
        $c->addRealJoin(PdeOcTipoEstado::GEN_TABLA, PdeOcTipoEstado::GEN_ATTR_ID, PdeOcEstado::GEN_ATTR_PDE_OC_TIPO_ESTADO_ID);
        $c->setCriterios();

        $pde_oc_estados = PdeOcEstado::getPdeOcEstados(null, $c);
        foreach ($pde_oc_estados as $pde_oc_estado) {
            return $pde_oc_estado;
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 09/08/2018 19:36
     * @return Obj PdeOcEstadoRecepcion
     */
    public function setPdeOcEstadoRecepcion($codigo, $observacion = '') {
        $inicial = 1;
        foreach ($this->getPdeOcEstadoRecepcions() as $pde_oc_estado_recepcion) {
            $pde_oc_estado_recepcion->setActual(0);
            $pde_oc_estado_recepcion->save();

            $inicial = 0;
        }

        // se agrega el nuevo estado de la orden de venta
        $pde_oc_tipo_estado_recepcion = PdeOcTipoEstadoRecepcion::getOxCodigo($codigo);

        $pde_oc_estado_recepcion = new PdeOcEstadoRecepcion();
        $pde_oc_estado_recepcion->setPdeOcId($this->getId());
        $pde_oc_estado_recepcion->setPdeOcTipoEstadoRecepcionId($pde_oc_tipo_estado_recepcion->getId());
        $pde_oc_estado_recepcion->setInicial($inicial);
        $pde_oc_estado_recepcion->setActual(1);
        $pde_oc_estado_recepcion->setObservacion($observacion);
        $pde_oc_estado_recepcion->save();

        // actualizamos el estado en pde_oc        
        $this->setPdeOcTipoEstadoRecepcionId($pde_oc_tipo_estado_recepcion->getId());
        $this->save();

        return $pde_oc_estado_recepcion;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 09/08/2018 19:36
     * @return Obj PdeOcEstado
     */
    public function getPdeOcEstadoRecepcionActual() {
        $c = new Criterio();
        $c->add(PdeOcEstadoRecepcion::GEN_ATTR_PDE_RECEPCION_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PdeOcEstadoRecepcion::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->addTabla(PdeOcEstadoRecepcion::GEN_TABLA);
        $c->setCriterios();

        $pde_oc_estado_recepcions = PdeOcEstadoRecepcion::getPdeOcEstadoRecepcions(null, $c);
        foreach ($pde_oc_estado_recepcions as $pde_oc_estado_recepcion) {
            return $pde_oc_estado_recepcion;
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 09/08/2018 19:36
     * @return Obj PdeOcEstadoRecepcion
     */
    public function getPdeOcTipoEstadoRecepcionActual() {
        $pde_oc_actual = $this->getPdeOcEstadoRecepcionActual();
        if ($pde_oc_actual) {
            return $pde_oc_actual->getPdeOcTipoEstadoRecepcion();
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 09/08/2018 19:36
     * @return Bool
     */
    public function getPdeOcTipoEstadoRecepcionActualTerminal() {
        $terminal = $this->getPdeOcTipoEstadoRecepcionActual()->getTerminal();
        return $terminal;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 09/08/2018 19:36
     * @return Obj PdeOcEstadoFacturacion
     */
    public function setPdeOcEstadoFacturacion($codigo, $observacion = '') {
        $inicial = 1;
        foreach ($this->getPdeOcEstadoFacturacions() as $pde_oc_estado_facturacion) {
            $pde_oc_estado_facturacion->setActual(0);
            $pde_oc_estado_facturacion->save();

            $inicial = 0;
        }

        // se agrega el nuevo estado de la orden de venta
        $pde_oc_tipo_estado_facturacion = PdeOcTipoEstadoFacturacion::getOxCodigo($codigo);

        $pde_oc_estado_facturacion = new PdeOcEstadoFacturacion();
        $pde_oc_estado_facturacion->setPdeOcId($this->getId());
        $pde_oc_estado_facturacion->setPdeOcTipoEstadoFacturacionId($pde_oc_tipo_estado_facturacion->getId());
        $pde_oc_estado_facturacion->setInicial($inicial);
        $pde_oc_estado_facturacion->setActual(1);
        $pde_oc_estado_facturacion->setObservacion($observacion);
        $pde_oc_estado_facturacion->save();

        // actualizamos el estado en pde_oc        
        $this->setPdeOcTipoEstadoFacturacionId($pde_oc_tipo_estado_facturacion->getId());
        $this->save();

        return $pde_oc_estado_facturacion;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 09/08/2018 19:36
     * @return Obj PdeOcEstado
     */
    public function getPdeOcEstadoFacturacionActual() {
        $c = new Criterio();
        $c->add(PdeOcEstadoFacturacion::GEN_ATTR_PDE_RECEPCION_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PdeOcEstadoFacturacion::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->addTabla(PdeOcEstadoFacturacion::GEN_TABLA);
        $c->setCriterios();

        $pde_oc_estado_facturacions = PdeOcEstadoFacturacion::getPdeOcEstadoFacturacions(null, $c);
        foreach ($pde_oc_estado_facturacions as $pde_oc_estado_facturacion) {
            return $pde_oc_estado_facturacion;
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 09/08/2018 19:36
     * @return Obj PdeOcEstadoFacturacion
     */
    public function getPdeOcTipoEstadoFacturacionActual() {
        $pde_oc_actual = $this->getPdeOcEstadoFacturacionActual();
        if ($pde_oc_actual) {
            return $pde_oc_actual->getPdeOcTipoEstadoFacturacion();
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 09/08/2018 19:36
     * @return Bool
     */
    public function getPdeOcTipoEstadoFacturacionActualTerminal() {
        $terminal = $this->getPdeOcTipoEstadoFacturacionActual()->getTerminal();
        return $terminal;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 09/08/2018 19:36
     * @return Obj PdeOcEstado
     */
    public function getPdeOcEstadoEnFactura() {
        $pde_oc_tipo_estado_facturacion = PdeOcTipoEstadoFacturacion::getOxCodigo(PdeOcTipoEstadoFacturacion::TIPO_NO_FACTURADO);

        $c = new Criterio();
        $c->add(PdeOcEstadoFacturacion::GEN_ATTR_PDE_RECEPCION_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PdeOcEstadoFacturacion::GEN_ATTR_PDE_RECEPCION_TIPO_ESTADO_FATURACION_ID, $pde_oc_tipo_estado_facturacion->getId(), Criterio::IGUAL);
        $c->addTabla(PdeOcEstadoFacturacion::GEN_TABLA);
        $c->setCriterios();

        $pde_oc_estado_facturacions = PdeOcEstadoFacturacion::getPdeOcEstadoFacturacions(null, $c);
        foreach ($pde_oc_estado_facturacions as $pde_oc_estado_facturacion) {
            return $pde_oc_estado_facturacion;
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 09/08/2018 19:36
     * @return Obj PdeFactura
     */
    public function getPdeFactura() {
        $pde_factura_pde_ocs = $this->getPdeFacturaPdeOcs();

        foreach ($pde_factura_pde_ocs as $pde_factura_pde_oc) {
            return $pde_factura_pde_oc->getPdeFactura();
        }

        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 09/08/2018 19:36
     * @return Float
     */
    public function getCantidadDisponibleEnFactura() {
        $cantidad_disponible = $this->getCantidad();

        $pde_factura_pde_ocs = $this->getPdeFacturaPdeOcs(null, null, true);
        foreach ($pde_factura_pde_ocs as $pde_factura_pde_oc) {
            $cantidad_disponible -= $pde_factura_pde_oc->getCantidad();
        }

        return $cantidad_disponible;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 09/08/2018 19:36
     * @return Float
     */
    public function getCantidadEnFactura($pde_factura = false) {
        $cantidad_en_factura = 0;
        $criterio = new Criterio();

        if ($pde_factura) {
            $criterio->add('pde_factura_id', $pde_factura->getId(), Criterio::IGUAL);
        }
        $criterio->addTabla(PdeFacturaPdeOc::GEN_TABLA);
        $criterio->setCriterios();

        $pde_factura_pde_ocs = $this->getPdeFacturaPdeOcs(null, $criterio, true);

        foreach ($pde_factura_pde_ocs as $pde_factura_pde_oc) {
            $cantidad_en_factura += $pde_factura_pde_oc->getCantidad();
        }

        return $cantidad_en_factura;
    }

    public function setPdeOcRetrasado() {
        // se registra nuevo estado de la OC, PdeEstado
        $pde_oc_estado = $this->setPdeOcEstado(
                PdeOcTipoEstado::TIPO_ESTADO_RETRASADO, 'Activado por Control de Vencimientos'
        );

        return $pde_oc_estado;
    }

    /* --------------------------------- */
    /* Inicia Oc de PdeCotizacion */
    /* --------------------------------- */

    public function addPdeOcReclamo($motivo_id = null, $observaciones = '') {
        // se registra el reclamo de la orden de compra
        $pde_oc_reclamo = new PdeOcReclamo();
        $pde_oc_reclamo->setPdeOcId($this->getId());
        $pde_oc_reclamo->setPdeOcReclamoMotivoId($motivo_id);
        $pde_oc_reclamo->setPrvProveedorId($this->getPrvProveedorId());
        $pde_oc_reclamo->setObservacion($observaciones);
        $pde_oc_reclamo->setEstado(1);
        $pde_oc_reclamo->save();

        $pde_oc_reclamo->setCodigo($pde_oc_reclamo->getCodigoConCeros());
        $pde_oc_reclamo->save();

        // se registran los destinatarios del reclamo
        $pde_oc_reclamo->setPdeOcReclamoDestinatarios();
        return $pde_oc_reclamo;
    }

    public function enviarAvisos($asunto = '') {
        // nueva forma, mails en 2do plano
        $pde_oc_destinatarios = $this->getPdeOcDestinatarios();
        foreach ($pde_oc_destinatarios as $pde_oc_destinatario) {
            $pde_oc_destinatario->setDescripcion($asunto);
            $pde_oc_destinatario->setAvisoEmail(0);
            $pde_oc_destinatario->save();
        }

        return;

        // manera original, mails al instante
        $pde_oc_destinatarios = $this->getPdeOcDestinatarios();
        foreach ($pde_oc_destinatarios as $pde_oc_destinatario) {
            $us_usuario_destinatario = $pde_oc_destinatario->getUsUsuario();
            $user = UsUsuario::autenticado();
            if ($user->getId() != $us_usuario_destinatario->getId()) {
                // aviso por email
                $estado_envio_mail = $this->enviarEmailAviso($asunto, $us_usuario_destinatario);
                if ($estado_envio_mail) {
                    $pde_oc_destinatario->setAvisoEmail(1);
                    $pde_oc_destinatario->save();
                }
            }
        }
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


        Gral::setSes('MECANO_PDE_OC_ID', $this->getId());
        Gral::setSes('MECANO_US_USUARIO_ID', $us_usuario->getId());

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $archivo = Gral::getPathAbs() . "mailing/plantillas/MECANO/index_pde_oc.php";
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
        return $exito;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 07/08/2018 09:16 hs.
     * Metodo que envia la Agrupacion de OC por email al destinatario indicado.
     * @return 
     */
    public function enviarPdeOcEmail($enviar = false, $destinatarios = false, $txa_observacion, $archivo_adjunto_urls = false) {
        if (!Mail::MAIL_ACTIVO)
            return false;

        $mail_asunto = Gral::getConfig('gral_cliente') . ' - Orden de Compra #' . $this->getCodigo() . ' ' . date('d/m/Y H:i');

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $destinatarios = str_replace(' ', '', $destinatarios);
        $destinatarios = str_replace(',', ';', $destinatarios);
        $arr_destinatarios = explode(";", $destinatarios);

        $param = array(
            'pde_oc_id' => $this->getId(),
            'observacion' => $txa_observacion,
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/GENERAL/index_pde_oc.php";
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

        $pde_oc_enviado = $this->inicializarPdeOcEnviado($txa_observacion, $destinatarios, $mail_asunto, $msg, $strContenidoPdf);

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
                $pde_oc_enviado->setConfirmarPdeOcEnviado(1, 'Enviado correctamente');
            } else {
                $pde_oc_enviado->setConfirmarPdeOcEnviado(0, $mail->ErrorInfo);
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
    public function inicializarPdeOcEnviado($observacion, $destinatarios, $mail_asunto, $mail_contenido, $archivo_adjunto) {
        $pde_oc_enviado = new PdeOcEnviado();
        $pde_oc_enviado->setDescripcion('');
        $pde_oc_enviado->setPdeOcId($this->getId());
        $pde_oc_enviado->setAsunto($mail_asunto);
        $pde_oc_enviado->setDestinatario($destinatarios);

        $pde_oc_enviado->setCuerpo(addslashes($mail_contenido));
        $pde_oc_enviado->setAdjunto(base64_encode($archivo_adjunto));

        $pde_oc_enviado->setCodigoEnvio(0);
        $pde_oc_enviado->setObservacion($observacion);
        $pde_oc_enviado->setEstado(0);

        $pde_oc_enviado->save();

        return $pde_oc_enviado;
    }

    /**
     * Metodo que genera una nueva PdeOc a en instancia inicial APROBADA
     * @param type $prv_proveedor_id
     * @param type $ins_insumo_id
     * @param type $ins_marca_id
     * @param type $cantidad
     * @param type $importe_unidad
     * @param type $pde_centro_recepcion_id
     * @param type $vencimiento
     * @param type $observaciones
     * @return \PdeOc
     */
    static function addPdeOc(
    $pde_centro_pedido_id, $prv_proveedor_id, $ins_insumo_id, $ins_marca_id, $cantidad, $gral_moneda_id, $importe_unidad, $iva_incluido, $pde_centro_recepcion_id, $vencimiento, $observaciones = ''
    ) {
        $ins_insumo = InsInsumo::getOxId($ins_insumo_id);
        $gral_tipo_iva = $ins_insumo->getGralTipoIvaCompraObj();

        if($iva_incluido){
            $importe_unidad = $importe_unidad / $gral_tipo_iva->getValorIvaDecimalParaSumarEnCalculo();
        }
        
        $pde_oc_tipo_origen = PdeOcTipoOrigen::getOxCodigo(PdeOcTipoOrigen::TIPO_DIRECTA);

        // registrar la PdeOc
        $pde_oc = new PdeOc();

        $pde_oc->setPdeOcTipoOrigenId($pde_oc_tipo_origen->getId()); // origen
        $pde_oc->setPdeCentroPedidoId($pde_centro_pedido_id);

        $pde_oc->setPrvProveedorId($prv_proveedor_id);
        $pde_oc->setInsInsumoId($ins_insumo_id);
        $pde_oc->setPdeCentroRecepcionId($pde_centro_recepcion_id);
        $pde_oc->setCantidad($cantidad);
        $pde_oc->setFechaEntrega($vencimiento);
        $pde_oc->setVencimiento($vencimiento);
        $pde_oc->setImporteUnidad($importe_unidad);
        $pde_oc->setImporteTotal($importe_unidad * $cantidad);
        $pde_oc->setIvaIncluido($iva_incluido);
        $pde_oc->setGralTipoIvaId($gral_tipo_iva->getId());
        $pde_oc->setEstado(1);
        $pde_oc->save();

        //----------------------------------------------------------------------
        // se setea codigo de PdeOc
        //----------------------------------------------------------------------
        $pde_oc->setCodigo($pde_oc->getCodigoConCeros());
        $pde_oc->save();

        //----------------------------------------------------------------------
        // se registra el estado inicial de PdeOc
        //----------------------------------------------------------------------
        $pde_oc_estado = $pde_oc->setPdeOcEstado(
                PdeOcTipoEstado::TIPO_ESTADO_APROBADO, $observaciones
        );

        //----------------------------------------------------------------------
        // se registra el estado de recepcion inicial de PdeOc
        //----------------------------------------------------------------------
        $pde_oc_estado_recepcion = $pde_oc->setPdeOcEstadoRecepcion(
                PdeOcTipoEstadoRecepcion::TIPO_ESTADO_NO_RECIBIDO, $observaciones
        );

        //----------------------------------------------------------------------
        // se registra el estado de facturacion inicial de PdeOc
        //----------------------------------------------------------------------
        $pde_oc_estado_facturacion = $pde_oc->setPdeOcEstadoFacturacion(
                PdeOcTipoEstadoFacturacion::TIPO_ESTADO_NO_FACTURADO, $observaciones
        );

        //----------------------------------------------------------------------
        // registrar destinatarios de PdeOc
        //----------------------------------------------------------------------
        $pde_oc->setPdeOcDestinatarios();

        //----------------------------------------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //----------------------------------------------------------------------
        $pde_oc->setActualizarResumenComprobante();
        
        return $pde_oc;
    }

    /**
     * Metodo que genera una recepcion de una OC recibida en un Centro de Recepcion
     * @param type $pde_centro_recepcion_id
     * @param type $ins_insumo_id
     * @param type $cantidad
     * @param type $importe_unitario
     * @param type $nro_comprobante
     * @param type $fecha
     * @param type $observacion
     * @return \PdeRecepcion
     */
    public function addPdeRecepcion(
    $pde_centro_recepcion_id, $ins_insumo_id, $cantidad, $importe_unitario, $nro_comprobante, $fecha, $observacion
    ) {
        /*
          // se define la moneda base, de acuerdo a la moneda del centro de pedido
          $gral_moneda_base = $this->getPdePedido()->getPdeCentroPedido()->getGralMoneda();

          $cotizacion_respecto_peso = 0;
          $cotizacion_respecto_base = 0;
          $gral_moneda = $this->getGralMoneda();
          if ($gral_moneda) {
          $cotizacion_respecto_peso = $gral_moneda->getCotizacionRespectoPeso();
          $cotizacion_respecto_base = $gral_moneda->getTasaConversion($gral_moneda_base);
          }
         */
        
                // se quita el iva si se esta operanco con iva incluido
        if($this->getIvaIncluido()){
            $gral_tipo_iva = $this->getGralTipoIva();
            $importe_unitario = $importe_unitario / $gral_tipo_iva->getValorIvaDecimalParaSumarEnCalculo();               
        }

        $ins_insumo = InsInsumo::getOxId($ins_insumo_id);

        // se genera registro de recepcion, PdeRecepcion
        $pde_tipo_recepcion = PdeTipoRecepcion::getOxCodigo(PdeTipoRecepcion::TIPO_PROGRAMADA);

        $pde_recepcion = new PdeRecepcion();
        $pde_recepcion->setPdeTipoRecepcionId($pde_tipo_recepcion->getId());
        $pde_recepcion->setPdeOcId($this->getId());
        $pde_recepcion->setPrvProveedorId($this->getPrvProveedorId());
        $pde_recepcion->setPdePedidoId($this->getPdePedidoId());
        $pde_recepcion->setPdeCentroRecepcionId($pde_centro_recepcion_id);
        $pde_recepcion->setInsInsumoId($ins_insumo_id);
        //$pde_recepcion->setInsMarcaId($this->getInsMarcaId());
        $pde_recepcion->setNroComprobante($nro_comprobante);
        $pde_recepcion->setCantidad($cantidad);
        $pde_recepcion->setFechaEntrega($fecha);
        //$pde_recepcion->setGralMonedaId($gral_moneda->getId());
        //$pde_recepcion->setCotizacionRespectoPeso($cotizacion_respecto_base);
        $pde_recepcion->setImporteUnidad($importe_unitario);
        $pde_recepcion->setImporteTotal($importe_unitario * $cantidad);
        $pde_recepcion->setVencimiento($this->getVencimiento());
        $pde_recepcion->setObservacion($observacion);
        $pde_recepcion->setEstado(1);
        $pde_recepcion->save();

        $pde_recepcion->setCodigo($pde_recepcion->getCodigoConCeros());
        $pde_recepcion->save();

        // se registra estado de la recepcion, PdeRecepcionEstado
        $pde_recepcion_estado = $pde_recepcion->setPdeRecepcionEstado(
                PdeRecepcionTipoEstado::TIPO_RECIBIDO_DE_PROVEEDOR, $pde_centro_recepcion_id = $pde_recepcion->getPdeCentroRecepcionId(), $pan_panol_id = null, $cantidad = $pde_recepcion->getCantidad(), $veh_coche_id = null, $ope_chofer_id = null, $fecha_conciliacion = false, $observaciones = $observacion
        );

        // se registra estado de la recepcion, PdeRecepcionEstado
        $pde_recepcion_estado = $pde_recepcion->setPdeRecepcionEstadoFacturacion(
                PdeRecepcionTipoEstadoFacturacion::TIPO_NO_FACTURADO, $observaciones = $observacion
        );

        // se registran destinatarios de la recepcion, PdeRecepcionDestinatario
        //$pde_recepcion->setPdeRecepcionDestinatarios();
        // registrar estado de PdeOc
        $pde_oc_estado = $this->setPdeOcEstado(
                $pde_oc_tipo_estado_codigo, $observaciones = $observacion
        );

        // se modifica el estado del pedido que dio origen a la OC
        $pde_pedido = $pde_recepcion->getPdeOc()->getPdePedido();
        $pde_pedido->setPdePedidoEstado(
                $pde_tipo_estado_codigo, $observaciones = $observacion
        );

        // ---------------------------------------------------------------------
        // cambio de estados
        // ---------------------------------------------------------------------        
        if ($this->getCantidadTotalRecibida() < $this->getCantidad()) {
            // ---------------------------------------------------------------------
            // recepcion parcial
            // ---------------------------------------------------------------------
            // registrar estado de PdeOc
            $pde_oc_estado = $this->setPdeOcEstado(
                    PdeOcTipoEstado::TIPO_ESTADO_RECIBIDO_PARCIAL, $observaciones = $observacion
            );

            // se registra el estado de recepcion parcial de PdeOc
            $pde_oc_estado_recepcion = $this->setPdeOcEstadoRecepcion(
                    PdeOcTipoEstadoRecepcion::TIPO_ESTADO_RECEPCION_PARCIAL, $observaciones
            );

            // se modifica el estado del pedido que dio origen a la OC
            $pde_pedido = $this->getPdePedido();
            if ($pde_pedido) {
                $pde_pedido->setPdePedidoEstado(
                        PdeTipoEstado::TIPO_ESTADO_RECIBIDO_PARCIAL, $observaciones = $observacion
                );
            }
        } else {
            // ---------------------------------------------------------------------
            // recepcion total
            // ---------------------------------------------------------------------
            // registrar estado de PdeOc
            $pde_oc_estado = $this->setPdeOcEstado(
                    PdeOcTipoEstado::TIPO_ESTADO_RECIBIDO, $observaciones = $observacion
            );

            // se registra el estado de recepcion parcial de PdeOc
            $pde_oc_estado_recepcion = $this->setPdeOcEstadoRecepcion(
                    PdeOcTipoEstadoRecepcion::TIPO_ESTADO_RECEPCION_TOTAL, $observaciones
            );

            // se modifica el estado del pedido que dio origen a la OC
            $pde_pedido = $this->getPdePedido();
            if ($pde_pedido) {
                $pde_pedido->setPdePedidoEstado(
                        PdeTipoEstado::TIPO_ESTADO_RECIBIDO, $observaciones = $observacion
                );
            }
        }

        // registrar destinatarios de PdeOc
        //$this->setPdeOcDestinatarios();

        return $pde_recepcion;
    }

    public function getPdeRecepcionsActivas() {
        $c = new Criterio();
        $c->add(PdeRecepcion::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PdeRecepcionTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        $c->addTabla(PdeRecepcion::GEN_TABLA);
        $c->addRealJoin(PdeRecepcionTipoEstado::GEN_TABLA, PdeRecepcionTipoEstado::GEN_ATTR_ID, PdeRecepcion::GEN_ATTR_PDE_RECEPCION_TIPO_ESTADO_ID);
        $c->addOrden(PdeRecepcion::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $pde_recepcions = PdeRecepcion::getPdeRecepcions(null, $c);
        return $pde_recepcions;
    }

    /**
     * Metodo que retorna la cantidad total de insumos recibida corresp a la OC en una o mas recepciones
     * @return type
     */
    public function getCantidadTotalRecibida() {
        $cantidad = 0;

        $pde_recepcions = $this->getPdeRecepcions();
        foreach ($pde_recepcions as $pde_recepcion) {
            $cantidad += $pde_recepcion->getCantidad();
        }

        return $cantidad;
    }

    /**
     * Metodo que retorna la cantidad maxima que falta recibir de la OC
     * @return type
     */
    public function getCantidadTotalPorRecibir() {
        return $this->getCantidad() - $this->getCantidadTotalRecibida();
    }

    /**
     * Metodo que retorna la cantidad total de insumos recibida corresp a la OC en una o mas recepciones
     * @return type
     */
    public function getCantidadTotalFacturada() {
        $cantidad = 0;

        $pde_factura_pde_ocs = $this->getPdeFacturaPdeOcs(null, null, true);
        foreach ($pde_factura_pde_ocs as $pde_factura_pde_oc) {
            $cantidad += $pde_factura_pde_oc->getCantidad();
        }

        return $cantidad;
    }

    /**
     * Metodo que retorna la cantidad maxima que falta recibir de la OC
     * @return type
     */
    public function getCantidadTotalPorFacturar() {
        return $this->getCantidad() - $this->getCantidadTotalFacturada();
    }

    /**
     * Retorna los pedidos PDE OC activos
     * @param pde_centro_pedido_id int centro de pedido
     * @param ins_insumo_id int el insumo
     * @return Collection $pde_pedidos
     * @creado_por Pablo Rosen
     * @creado 25/12/2017 19:47
     */
    static function getPdeOcsActivos($pde_centro_pedido_id, $ins_insumo_id) {
        $criterio = new Criterio();

        $criterio->add(InsInsumo::GEN_ATTR_ID, $ins_insumo_id, Criterio::IGUAL);
        $criterio->add(PdeOcTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        $criterio->add(PdeOc::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $pde_centro_pedido_id, Criterio::IGUAL);
        $criterio->add(PdeOc::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);

        $criterio->addTabla(PdeOc::GEN_TABLA);
        $criterio->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, PdeOc::GEN_ATTR_INS_INSUMO_ID);
        $criterio->addRealJoin(PdeOcTipoEstado::GEN_TABLA, PdeOcTipoEstado::GEN_ATTR_ID, PdeOc::GEN_ATTR_PDE_OC_TIPO_ESTADO_ID);
        $criterio->setCriterios();

        $pde_ocs = PdeOc::getPdeOcs(null, $criterio);
        return $pde_ocs;
    }

    public function getPdeOcDescripcionFull() {
        $texto = "";

        $ins_insumo = $this->getInsInsumo();
        $ins_unidad_medida = $ins_insumo->getInsUnidadMedida();
        $pde_oc_estado_actual = $this->getPdeOcEstadoActual();
        $pde_oc_tipo_estado_actual = $pde_oc_estado_actual->getPdeOcTipoEstado();
        $prv_proveedor = $this->getPrvProveedor();

        $texto .= $this->getCantidad();
        $texto .= " ";
        $texto .= ($ins_unidad_medida) ? substr($ins_unidad_medida->getDescripcion(), 0, 3) : "";
        $texto .= " ";
        $texto .= substr($pde_oc_tipo_estado_actual->getDescripcion(), 0, 5);
        $texto .= " (";
        $texto .= $prv_proveedor->getDescripcion();
        $texto .= ") el ";
        $texto .= Gral::getFechaToWEB($pde_oc_estado_actual->getCreado());

        return $texto;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 07/05/2019
     * @modificado_por Esteban Martinez
     * @modificado 11/05/2019
     */
    public function getPdeOcTipoEstadoFacturacionAnterior() {
        $criterio = new Criterio();
        $criterio->addTabla(PdeOcEstadoFacturacion::GEN_TABLA);
        $criterio->add(PdeOcEstadoFacturacion::GEN_ATTR_PDE_OC_ID, $this->getId(), Criterio::IGUAL);
        $criterio->add(PdeOcEstadoFacturacion::GEN_ATTR_ACTUAL, 0, Criterio::IGUAL);
        $criterio->addOrden(PdeOcEstadoFacturacion::GEN_ATTR_ID, Criterio::_DESC);
        $criterio->setCriterios();
        $fnd_chq_estados_facturacions = PdeOcEstadoFacturacion::getPdeOcEstadoFacturacions(null, $criterio, true);

        if (count($fnd_chq_estados_facturacions) > 0) {
            foreach ($fnd_chq_estados_facturacions as $fnd_chq_estado_facturacion) {
                return $fnd_chq_estado_facturacion->getPdeOcTipoEstadoFacturacion();
            }
        } else {
            return $this->getPdeOcTipoEstadoFacturacion();
        }
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 07/05/2019
     */
    public function setRetrotraerPdeOcTipoEstadoFacturacion($observacion = '') {
        $pde_factura_tipo_estado_facturacion = $this->getPdeOcTipoEstadoFacturacionAnterior();
        $this->setPdeOcEstadoFacturacion($pde_factura_tipo_estado_facturacion->getCodigo(), $observacion);
    }

    /**
     * Metodo que recalcula el estado de facturacion de la OC
     */
    public function setRecalcularTipoEstadoDeFacturacion($observacion = '') {
        $pde_factura_pde_ocs = $this->getPdeFacturaPdeOcs(null, null, true);
        $cantidad_facturada = count($pde_factura_pde_ocs);
        $cantidad_oc = $this->getCantidad();

        if ($cantidad_oc == $cantidad_facturada) {
            $pde_oc_estado_facturacion = $this->setPdeOcEstadoFacturacion(PdeOcTipoEstadoFacturacion::TIPO_ESTADO_FACTURA_TOTAL, $observacion);
        } elseif ($cantidad_facturada == 0) {
            $pde_oc_estado_facturacion = $this->setPdeOcEstadoFacturacion(PdeOcTipoEstadoFacturacion::TIPO_ESTADO_NO_FACTURADO, $observacion);
        } else {
            $pde_oc_estado_facturacion = $this->setPdeOcEstadoFacturacion(PdeOcTipoEstadoFacturacion::TIPO_ESTADO_FACTURA_PARCIAL, $observacion);
        }

        return $pde_oc_estado_facturacion;
    }

    /**
     * Actualiza el resumen de comprobante (su extension importe)
     * @return [Object] [Objeto Comprobante Importe]
     */
    public function setActualizarResumenComprobante() {
        $pde_oc_importe = $this->getPdeOcImporte();

        if (!$pde_oc_importe) {
            $pde_oc_importe = new PdeOcImporte();
        }

        $importe_subtotal = 0;
        $importe_iva = 0;
        $importe_tributo = 0;
        $importe_total = $this->getImporteTotal();

        $pde_oc_importe->setDescripcion($this->getCodigo());
        $pde_oc_importe->setPdeOcId($this->getId());
        $pde_oc_importe->setImporteSubtotal($importe_subtotal);
        $pde_oc_importe->setImporteIva($importe_iva);
        $pde_oc_importe->setImporteTributo($importe_tributo);
        $pde_oc_importe->setImporteTotal($importe_total);
        $pde_oc_importe->setEstado(1);
        $pde_oc_importe->save();

        return $pde_oc_importe;
    }

    /**
     * Retorna un resumen de comprobante (su extension importe)
     * @return [Object] [Objeto Comprobante Importe]
     */
    public function getResumenComprobante() {
        $o = $this->getPdeOcImporte();
        if ($o) {
            return $o;
        }        

        return new PdeOcImporte();
    }
    
    /**
     * 
     * @return type
     */
    public function getImporteUnidadNeto(){
        if($this->getIvaIncluido()){
            $importe = $this->getImporteUnidadConIva();
        }else{
            $importe = $this->getImporteUnidad();            
        }
        return $importe;
    }
    
    
    /**
     * 
     * @return type
     */
    public function getImporteUnidadConIva(){
        $gral_tipo_iva = $this->getGralTipoIva();
        $importe = $this->getImporteUnidad();
     
        $importe_con_iva = $importe * $gral_tipo_iva->getValorIvaDecimalParaSumarEnCalculo();
        return $importe_con_iva;
    }
    
    /**
     * 
     * @return type
     */
    public function getImporteTotalConIva(){
        $gral_tipo_iva = $this->getGralTipoIva();
        $importe = $this->getImporteTotal();
        
        $importe_con_iva = $importe * $gral_tipo_iva->getValorIvaDecimalParaSumarEnCalculo();
        return $importe_con_iva;
    }

}

?>