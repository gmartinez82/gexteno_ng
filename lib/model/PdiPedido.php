<?php

require_once "base/BPdiPedido.php";

class PdiPedido extends BPdiPedido {

    const PREFIJO_CODIGO = "PDI";

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
    
    public function getDescripcionRecepcionPDI() {
        $pdi_estado = $this->getPdiEstadoActual();
        $pdi_tipo_estado = $pdi_estado->getPdiTipoEstado();
        $pdi_tipo_origen = $this->getPdiTipoOrigen();
        
        if($pdi_tipo_origen->getCodigo() == PdiTipoOrigen::TIPO_ORIGEN_PANOL && $pdi_tipo_estado->getCodigo() == PdiTipoEstado::TIPO_ESTADO_RECIBIDO){
            $pan_panol_origen = $this->getPanPanolOrigenObj();
            $pan_panol_destino = $this->getPanPanolDestinoObj();
            $texto = 'Recibido por Deposito '.$pan_panol_origen->getDescripcion().' el '.Gral::getFechaToWEB($pdi_estado->getCreado()).' <br /> Remitido desde '.$pan_panol_destino->getDescripcion();
        }
        return $texto;
    }    

    /**
     * Autor: Pablo Rosen
     * Fecha: 02/06/2013 20:27 hs.
     * Metodo que retorna todos los pedidos no observados aun por el usuario indicado
     * @return type
     */
    static function getPdiPedidosNoObservados($us_usuario = false) {
        if (!$us_usuario) {
            $us_usuario = UsUsuario::autenticado();
        }
        $c = new Criterio();
        $c->add(PdiPedidoDestinatario::GEN_ATTR_OBSERVADO, 0, Criterio::IGUAL);
        $c->add(PdiPedidoDestinatario::GEN_ATTR_US_USUARIO_ID, $us_usuario->getId(), Criterio::IGUAL);
        $c->addTabla(PdiPedido::GEN_TABLA);
        $c->addRealJoin(PdiPedidoDestinatario::GEN_TABLA, PdiPedidoDestinatario::GEN_ATTR_PDI_PEDIDO_ID, PdiPedido::GEN_ATTR_ID);
        $c->setCriterios();

        $pdi_pedidos = PdiPedido::getPdiPedidos(null, $c);
        return $pdi_pedidos;
    }

    static function tienePdiPedidosNoObservados($us_usuario = false) {
        $pdi_pedidos = self::getPdiPedidosNoObservados();
        if (count($pdi_pedidos) > 0)
            return true;
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 22/05/2013 17:00 hs.
     * Metodo que registra los destinatarios del pedido
     */
    public function setPdiPedidoDestinatarios() {
        return; // no usado temporalmente
        
        $user = UsUsuario::autenticado();

        foreach ($this->getPdiPedidoDestinatarios() as $pdi_pedido_destinatario) {
            $pdi_pedido_destinatario->setEstado(0);
            $pdi_pedido_destinatario->save();
        }

        $us_usuarios_destinatarios = array();
        //$us_usuarios_destinatarios[] = $user;

        $pan_panol_origen = PanPanol::getOxId($this->getPanPanolOrigen());
        foreach ($this->getPdiPedidoDestinatariosUsUsuarios($pan_panol_origen) as $us_usuario) {
            $us_usuarios_destinatarios[] = $us_usuario;
        }

        $pan_panol_destino = PanPanol::getOxId($this->getPanPanolDestino());
        foreach ($this->getPdiPedidoDestinatariosUsUsuarios($pan_panol_destino) as $us_usuario) {
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
                array('campo' => PdiPedidoDestinatario::GEN_ATTR_PDI_PEDIDO_ID, 'valor' => $this->getId()),
                array('campo' => PdiPedidoDestinatario::GEN_ATTR_US_USUARIO_ID, 'valor' => $us_usuario->getId())
            );
            $pdi_pedido_destinatario = PdiPedidoDestinatario::getOxArray($array);
            if (!$pdi_pedido_destinatario) {
                $pdi_pedido_destinatario = new PdiPedidoDestinatario();
            }
            $pdi_pedido_destinatario->setPdiPedidoId($this->getId());
            $pdi_pedido_destinatario->setUsUsuarioId($us_usuario->getId());
            $pdi_pedido_destinatario->setLeido($leido);
            $pdi_pedido_destinatario->setObservado($observado);
            //$pdi_pedido_destinatario->setDestacado(0);
            $pdi_pedido_destinatario->setEstado(1);
            $pdi_pedido_destinatario->save();
        }
        return true;
    }

    public function getPdiPedidoDestinatariosUsUsuarios($pan_panol) {
        $us_usuarios_destinatarios = array();
        if (!$pan_panol)
            return $us_usuarios_destinatarios;

        $us_grupo_responsable_panol = UsGrupo::getOxCodigo(UsGrupo::PANOL_RESPONSABLE);
        $us_usuarios_responsables_panol = $us_grupo_responsable_panol->getUsUsuariosXUsAgrupado();
        foreach ($us_usuarios_responsables_panol as $us_usuario_responsables_panol) {
            $credenciales = $us_usuario_responsables_panol->getCredenciales();
            $acreditado = array_search($pan_panol->getCodigoDeCredencial(), $credenciales);
            if (trim($acreditado) != '') {
                $us_usuarios_destinatarios[] = $us_usuario_responsables_panol;
            }
        }
        return $us_usuarios_destinatarios;
    }

    public function setPdiPedidoDestinatariosDeshabilitar() {
        $us_usuarios_destinatarios = array();

        foreach ($this->getPdiPedidoDestinatariosUsUsuarios() as $us_usuario) {
            $us_usuarios_destinatarios[] = $us_usuario;
        }
        foreach ($us_usuarios_destinatarios as $us_usuario_destinatario) {
            $us_usuario_destinatario->setEstado(0);
            $us_usuario_destinatario->save();
        }
        return true;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/05/2013 17:00 hs.
     * Metodo que actualiza los destinatarios del pedido, para remarcar como no leido y no observado
     */
    public function setPdiPedidoDestinatariosAviso() {
        $user = UsUsuario::autenticado();

        foreach ($this->getPdiPedidoDestinatarios() as $pdi_pedido_destinatario) {
            $leido = 0;
            $observado = 0;
            if ($user) {
                if ($pdi_pedido_destinatario->getUsUsuario()->getId() == $user->getId()) {
                    $leido = 1;
                    $observado = 1;
                }
            }
            //$pdi_pedido_destinatario->setPdiPedidoId($this->getId());
            //$pdi_pedido_destinatario->setUsUsuarioId($user->getId());
            $pdi_pedido_destinatario->setLeido($leido);
            $pdi_pedido_destinatario->setObservado($observado);
            //$pdi_pedido_destinatario->setEstado(1);
            $pdi_pedido_destinatario->save();
        }
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 22/05/2013 17:00 hs.
     * Metodo que registra los destinatarios del pedido
     */
    public function getPdiPedidoDestinatarioUsUsuario($us_usuario = false) {
        if (!$us_usuario) {
            $us_usuario = UsUsuario::autenticado();
        }
        $array = array(
            array('campo' => PdiPedidoDestinatario::GEN_ATTR_PDI_PEDIDO_ID, 'valor' => $this->getId()),
            array('campo' => PdiPedidoDestinatario::GEN_ATTR_US_USUARIO_ID, 'valor' => $us_usuario->getId())
        );
        $pdi_pedido_destinatario = PdiPedidoDestinatario::getOxArray($array);
        return $pdi_pedido_destinatario;
    }

    public function esPdiPedidoLeido($us_usuario = false) {
        $leido = true;
        $pdi_pedido_destinatario = $this->getPdiPedidoDestinatarioUsUsuario($us_usuario);
        if ($pdi_pedido_destinatario) {
            if (!$pdi_pedido_destinatario->getLeido()) {
                $leido = false;
            }
        }
        return $leido;
    }

    public function setPdiPedidoLeido($us_usuario = false) {
        $pdi_pedido_destinatario = $this->getPdiPedidoDestinatarioUsUsuario($us_usuario);
        if ($pdi_pedido_destinatario) {
            $pdi_pedido_destinatario->setLeido(1);
            $pdi_pedido_destinatario->setObservado(1);
            $pdi_pedido_destinatario->save();
        }
        return true;
    }

    public function esPdiPedidoDestacado($us_usuario = false) {
        $destacado = false;
        $pdi_pedido_destinatario = $this->getPdiPedidoDestinatarioUsUsuario($us_usuario);
        if ($pdi_pedido_destinatario) {
            if ($pdi_pedido_destinatario->getDestacado()) {
                $destacado = true;
            }
        }
        return $destacado;
    }

    public function setPdiPedidoDestacado($us_usuario = false) {
        $pdi_pedido_destinatario = $this->getPdiPedidoDestinatarioUsUsuario($us_usuario);
        if ($pdi_pedido_destinatario) {
            if ($pdi_pedido_destinatario->getDestacado()) {
                $pdi_pedido_destinatario->setDestacado(0);
            } else {
                $pdi_pedido_destinatario->setDestacado(1);
            }
            $pdi_pedido_destinatario->save();
        }
        return true;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 25/05/2013 22:06 hs.
     * Metodo que registra un nuevo estado para el pedido
     */
    public function setPdiPedidoEstado($tipo_estado_codigo, $cantidad, $observaciones) {
        $inicial = 1;
        foreach ($this->getPdiEstados() as $pdi_estado) {
            $pdi_estado->setActual(0);
            $pdi_estado->save();

            $inicial = 0;
        }

        $pdi_tipo_estado = PdiTipoEstado::getOxCodigo($tipo_estado_codigo);

        $pdi_estado = new PdiEstado();
        $pdi_estado->setPdiPedidoId($this->getId());
        $pdi_estado->setPdiTipoEstadoId($pdi_tipo_estado->getId());
        $pdi_estado->setInicial($inicial);
        $pdi_estado->setActual(1);
        $pdi_estado->setCantidad($cantidad);
        $pdi_estado->setObservacion($observaciones);
        $pdi_estado->setFechahora(date('Y-m-d H:i:s'));

        //Esteban 10/06/2017
        $ins_insumo = $this->getInsInsumo();
        $pan_panol_destino = PanPanol::getOxId($this->getPanPanolDestino());
        if ($pan_panol_destino) {
            $ins_stock_resumen_destino = $ins_insumo->getInsStockResumenEnPanol($pan_panol_destino);
        }

        if ($ins_stock_resumen_destino) {
            $pdi_estado->setCantidadStockReal($ins_stock_resumen_destino->getCantidadReal());
            $pdi_estado->setCantidadStockComprometida($ins_stock_resumen_destino->getCantidadComprometida());
        }


        //Esteban 28/06/2017
        //Si el tipo de estado determina venta entonces comparar las cantidades para marcar como venta perdida
        if ($pdi_tipo_estado->getDeterminaVenta() == 1) {
            $cantidad_disponible = $pdi_estado->getCantidadStockReal() - $pdi_estado->getCantidadStockComprometida();
            if ($cantidad > $cantidad_disponible) {
                $pdi_estado->setVentaPerdida(1);

                //en el pedido se marca como venta perdida*
                $this->setVentaPerdida(1);
                $this->save();
            }
        }

        $pdi_estado->save();

        //se actualiza el tipo de estado en el Pedido.
        $this->setPdiTipoEstadoId($pdi_estado->getPdiTipoEstadoId());
        $this->save();

        return $pdi_estado;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 22/05/2013 17:28 hs.
     * Metodo que retorna el estado actual del PdiPedido
     * @return PdiEstado
     */
    public function getPdiEstadoActual() {
        $c = new Criterio();
        $c->add('pdi_pedido_id', $this->getId(), Criterio::IGUAL);
        $c->add('actual', 1, Criterio::IGUAL);
        $c->addTabla('pdi_estado');
        $c->setCriterios();

        $pdi_estados = PdiEstado::getPdiEstados(null, $c);
        foreach ($pdi_estados as $pdi_estado) {
            return $pdi_estado;
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 22/05/2013 17:28 hs.
     * Metodo que retorna el estado de un PdiPedido de acuerdo a un codigo de PdiTipoEstado indicado
     * @return PdiEstado
     */
    public function getPdiEstadoXCodigoDePdiTipoEstado($valor) {
        $c = new Criterio();
        $c->add('pdi_estado.pdi_pedido_id', $this->getId(), Criterio::IGUAL);
        $c->add('pdi_tipo_estado.codigo', $valor, Criterio::IGUAL);
        $c->addTabla('pdi_estado');
        $c->addRealJoin('pdi_tipo_estado', 'pdi_tipo_estado.id', 'pdi_estado.pdi_tipo_estado_id');
        $c->setCriterios();

        $pdi_estados = PdiEstado::getPdiEstados(new Paginador(1, 1), $c);
        foreach ($pdi_estados as $pdi_estado) {
            return $pdi_estado;
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/05/2013 00:28 hs.
     * Metodo que retorna el InsStockMovimiento de un PdiPedido de acuerdo a un codigo de InsStockTipoMovimiento indicado
     * @return PdiEstado
     */
    public function getInsStockMovimientoXCodigoDeInsStockTipoMovimiento($valor) {
        $c = new Criterio();
        $c->add('ins_stock_movimiento.pdi_pedido_id', $this->getId(), Criterio::IGUAL);
        $c->add('ins_stock_tipo_movimiento.codigo', $valor, Criterio::IGUAL);
        $c->addTabla('ins_stock_movimiento');
        $c->addRealJoin('ins_stock_tipo_movimiento', 'ins_stock_tipo_movimiento.id', 'ins_stock_movimiento.ins_stock_tipo_movimiento_id');
        $c->setCriterios();

        $ins_stock_movimientos = InsStockMovimiento::getInsStockMovimientos(null, $c);
        foreach ($ins_stock_movimientos as $ins_stock_movimiento) {
            return $ins_stock_movimiento;
        }
        return false;
    }

    public function getPdiPedidoMovimientos() {
        $arr = array();

        switch ($this->getPdiTipoOrigen()->getCodigo()) {
            case PdiTipoOrigen::TIPO_ORIGEN_OPERARIO: // origen operario
                // solicitado
                $pdi_estado = $this->getPdiEstadoXCodigoDePdiTipoEstado(PdiTipoEstado::TIPO_ESTADO_SOLICITADO);
                if ($pdi_estado) {
                    $arr[PdiTipoEstado::TIPO_ESTADO_SOLICITADO] = array('CANTIDAD' => $pdi_estado->getCantidad(), 'FECHA' => Gral::getFechaToWEB($pdi_estado->getFechahora()));
                } else {
                    $arr[PdiTipoEstado::TIPO_ESTADO_SOLICITADO] = array('CANTIDAD' => '-', 'FECHA' => '-');
                }

                // despachado
                $pdi_estado = $this->getPdiEstadoXCodigoDePdiTipoEstado(PdiTipoEstado::TIPO_ESTADO_ENTREGADO);
                if ($pdi_estado) {
                    $arr[PdiTipoEstado::TIPO_ESTADO_DESPACHADO] = array('CANTIDAD' => $pdi_estado->getCantidad(), 'FECHA' => Gral::getFechaToWEB($pdi_estado->getFechahora()));
                } else {
                    $arr[PdiTipoEstado::TIPO_ESTADO_DESPACHADO] = array('CANTIDAD' => '-', 'FECHA' => '-');
                }

                // entregado
                $pdi_estado = $this->getPdiEstadoXCodigoDePdiTipoEstado(PdiTipoEstado::TIPO_ESTADO_CONSUMIDO);
                if ($pdi_estado) {
                    $arr[PdiTipoEstado::TIPO_ESTADO_RECIBIDO] = array('CANTIDAD' => $pdi_estado->getCantidad(), 'FECHA' => Gral::getFechaToWEB($pdi_estado->getFechahora()));
                } else {
                    $arr[PdiTipoEstado::TIPO_ESTADO_RECIBIDO] = array('CANTIDAD' => '-', 'FECHA' => '-');
                }

                break;

            case PdiTipoOrigen::TIPO_ORIGEN_PANOL: // origen operario
                // solicitado
                $pdi_estado = $this->getPdiEstadoXCodigoDePdiTipoEstado(PdiTipoEstado::TIPO_ESTADO_SOLICITADO);
                if ($pdi_estado) {
                    $arr[PdiTipoEstado::TIPO_ESTADO_SOLICITADO] = array('CANTIDAD' => $pdi_estado->getCantidad(), 'FECHA' => Gral::getFechaToWEB($pdi_estado->getFechahora()));
                } else {
                    $arr[PdiTipoEstado::TIPO_ESTADO_SOLICITADO] = array('CANTIDAD' => '-', 'FECHA' => '-');
                }

                // aceptado
                $pdi_estado = $this->getPdiEstadoXCodigoDePdiTipoEstado(PdiTipoEstado::TIPO_ESTADO_ACEPTADO);
                if ($pdi_estado) {
                    $arr[PdiTipoEstado::TIPO_ESTADO_ACEPTADO] = array('CANTIDAD' => $pdi_estado->getCantidad(), 'FECHA' => Gral::getFechaToWEB($pdi_estado->getFechahora()));
                } else {
                    $arr[PdiTipoEstado::TIPO_ESTADO_ACEPTADO] = array('CANTIDAD' => '-', 'FECHA' => '-');
                }

                // despachado
                $pdi_estado = $this->getPdiEstadoXCodigoDePdiTipoEstado(PdiTipoEstado::TIPO_ESTADO_DESPACHADO);
                if ($pdi_estado) {
                    $arr[PdiTipoEstado::TIPO_ESTADO_DESPACHADO] = array('CANTIDAD' => $pdi_estado->getCantidad(), 'FECHA' => Gral::getFechaToWEB($pdi_estado->getFechahora()));
                } else {
                    $arr[PdiTipoEstado::TIPO_ESTADO_DESPACHADO] = array('CANTIDAD' => '-', 'FECHA' => '-');
                }

                // entregado
                $pdi_estado = $this->getPdiEstadoXCodigoDePdiTipoEstado(PdiTipoEstado::TIPO_ESTADO_RECIBIDO);
                if ($pdi_estado) {
                    $arr[PdiTipoEstado::TIPO_ESTADO_RECIBIDO] = array('CANTIDAD' => $pdi_estado->getCantidad(), 'FECHA' => Gral::getFechaToWEB($pdi_estado->getFechahora()));
                } else {
                    $arr[PdiTipoEstado::TIPO_ESTADO_RECIBIDO] = array('CANTIDAD' => '-', 'FECHA' => '-');

                    /*
                      // ajustado (Excepcion para Ajustes de Stock)
                      $pdi_estado = $this->getPdiEstadoXCodigoDePdiTipoEstado(PdiTipoEstado::TIPO_ESTADO_AJUSTADO);
                      if($pdi_estado){
                      $arr[PdiTipoEstado::TIPO_ESTADO_RECIBIDO] = array('CANTIDAD' => $pdi_estado->getCantidad(), 'FECHA' => Gral::getFechaToWEB($pdi_estado->getFechahora()));
                      }else{
                      $arr[PdiTipoEstado::TIPO_ESTADO_RECIBIDO] = array('CANTIDAD' => '-', 'FECHA' => '-');
                      }
                     */
                    // comprado y recepcionado
                    $pdi_estado = $this->getPdiEstadoXCodigoDePdiTipoEstado(PdiTipoEstado::TIPO_ESTADO_COMPRADO);
                    if ($pdi_estado) {
                        $arr[PdiTipoEstado::TIPO_ESTADO_RECIBIDO] = array('CANTIDAD' => $pdi_estado->getCantidad(), 'FECHA' => Gral::getFechaToWEB($pdi_estado->getFechahora()));
                    } else {
                        $arr[PdiTipoEstado::TIPO_ESTADO_RECIBIDO] = array('CANTIDAD' => '-', 'FECHA' => '-');
                    }
                }

                break;

            case PdiTipoOrigen::TIPO_ORIGEN_PROCESO: // origen operario
                // solicitado
                $pdi_estado = $this->getPdiEstadoXCodigoDePdiTipoEstado(PdiTipoEstado::TIPO_ESTADO_GENERADO);
                if ($pdi_estado) {
                    $arr[PdiTipoEstado::TIPO_ESTADO_SOLICITADO] = array('CANTIDAD' => $pdi_estado->getCantidad(), 'FECHA' => Gral::getFechaToWEB($pdi_estado->getFechahora()));
                } else {
                    $arr[PdiTipoEstado::TIPO_ESTADO_SOLICITADO] = array('CANTIDAD' => '-', 'FECHA' => '-');
                }

                // despachado
                $pdi_estado = $this->getPdiEstadoXCodigoDePdiTipoEstado(PdiTipoEstado::TIPO_ESTADO_ENTREGADO);
                if ($pdi_estado) {
                    $arr[PdiTipoEstado::TIPO_ESTADO_DESPACHADO] = array('CANTIDAD' => $pdi_estado->getCantidad(), 'FECHA' => Gral::getFechaToWEB($pdi_estado->getFechahora()));
                } else {
                    $arr[PdiTipoEstado::TIPO_ESTADO_DESPACHADO] = array('CANTIDAD' => '-', 'FECHA' => '-');
                }

                // entregado
                $pdi_estado = $this->getPdiEstadoXCodigoDePdiTipoEstado(PdiTipoEstado::TIPO_ESTADO_CONSUMIDO);
                if ($pdi_estado) {
                    $arr[PdiTipoEstado::TIPO_ESTADO_RECIBIDO] = array('CANTIDAD' => $pdi_estado->getCantidad(), 'FECHA' => Gral::getFechaToWEB($pdi_estado->getFechahora()));
                } else {
                    $arr[PdiTipoEstado::TIPO_ESTADO_RECIBIDO] = array('CANTIDAD' => '-', 'FECHA' => '-');
                }

                break;
        }

        return $arr;
    }

    public function setAnularReserva($caso) {
        $ins_stock_movimiento = $this->getInsStockMovimientoXCodigoDeInsStockTipoMovimiento(InsStockTipoMovimiento::TIPO_MOV_RESERVA);
        if ($ins_stock_movimiento) {
            $ins_stock_movimiento->setCodigo($caso);
            $ins_stock_movimiento->setEstado(0);
            $ins_stock_movimiento->save();
        }

        return $ins_stock_movimiento;
    }

    public function addPdePedido($urgencia_id, $cantidad, $vencimiento, $observacion) {
        $pde_pedido = new PdePedido();
        $pde_pedido->setPdiPedidoId($this->getId());
        $pde_pedido->setInsInsumoId($this->getInsInsumoId());
        $pde_pedido->setPdeUrgenciaId($urgencia_id);
        $pde_pedido->setCantidad($cantidad);
        $pde_pedido->setVencimiento($vencimiento);
        $pde_pedido->setObservacion($observacion);
        $pde_pedido->setEstado(1);
        $pde_pedido->save();
        $pde_pedido->setCodigo($pde_pedido->getCodigoConCeros());
        $pde_pedido->save();

        // se registra estado del pedido, PdeEstado
        $pde_estado = $pde_pedido->setPdePedidoEstado(
                PdeTipoEstado::TIPO_ESTADO_SOLICITADO, $pde_pedido->getObservacion()
        );

        // se registran destinatarios del pedido, PdePedidoDestinatario
        $pde_pedido->setPdePedidoDestinatarios(); // va en el estado APROBADO
        return $pde_pedido;
    }

    public function getPdiOrigenTooltip() {
        $texto = '';
        switch ($this->getPdiTipoOrigen()->getCodigo()) {
            case PdiTipoOrigen::TIPO_ORIGEN_PANOL:
                $texto = PanPanol::getOxId($this->getPanPanolOrigen())->getDescripcion();
                break;
            case PdiTipoOrigen::TIPO_ORIGEN_OPERARIO:
                $texto = $this->getOpeOperario()->getDescripcion() . ' - ';
                $texto.= PanPanol::getOxId($this->getPanPanolOrigen())->getDescripcion();
                break;
            case PdiTipoOrigen::TIPO_ORIGEN_PROCESO:
                $texto = $this->getPdiTipoOrigen()->getDescripcion() . ' - ';
                $texto.= PanPanol::getOxId($this->getPanPanolOrigen())->getDescripcion();
                break;
            case PdiTipoOrigen::TIPO_ORIGEN_AJUSTE:
                $texto = $this->getPdiTipoOrigen()->getDescripcion() . ' - ';
                $texto.= $this->getCreadoPorDescripcion();
                break;
            case PdiTipoOrigen::TIPO_ORIGEN_AJUSTE_PANOL:
                $texto = $this->getPdiTipoOrigen()->getDescripcion() . ' - ';
                $texto.= $this->getCreadoPorDescripcion();
                break;
            case PdiTipoOrigen::TIPO_ORIGEN_NEUMATICO:
                $texto = $this->getPdiTipoOrigen()->getDescripcion() . ' - ';
                $texto.= $this->getCreadoPorDescripcion();
                break;
            case PdiTipoOrigen::TIPO_ORIGEN_ENVIO:
                $texto = $this->getPdiTipoOrigen()->getDescripcion() . ' - ';
                $texto.= $this->getCreadoPorDescripcion();
                break;
            case PdiTipoOrigen::TIPO_ORIGEN_ENTREGA_OPERARIO:
                $texto = $this->getPdiTipoOrigen()->getDescripcion() . ' - ';
                $texto.= $this->getCreadoPorDescripcion();
                break;
            case PdiTipoOrigen::TIPO_ORIGEN_VENTA:
                $texto = $this->getPdiTipoOrigen()->getDescripcion() . ' - ';
                $texto.= $this->getCreadoPorDescripcion();
                break;
            case PdiTipoOrigen::TIPO_ORIGEN_TRANSFORMACION:
                $texto = $this->getPdiTipoOrigen()->getDescripcion() . ' - ';
                $texto.= $this->getCreadoPorDescripcion();
                break;
        }

        return $texto;
    }

    public function getPdiOrigenDescripcion() {
        $texto = '';
        switch ($this->getPdiTipoOrigen()->getCodigo()) {
            case PdiTipoOrigen::TIPO_ORIGEN_PANOL:
                $texto = PanPanol::getOxId($this->getPanPanolOrigen())->getDescripcion() . ' - ' . Gral::getFechaHoraToWEB($this->getCreado());
                break;
            case PdiTipoOrigen::TIPO_ORIGEN_OPERARIO:
                $texto = $this->getOpeOperario()->getDescripcion();
                break;
            case PdiTipoOrigen::TIPO_ORIGEN_PROCESO:
                $texto = $this->getPdiTipoOrigen()->getDescripcion();
                break;
            case PdiTipoOrigen::TIPO_ORIGEN_AJUSTE:
                $texto = $this->getCreadoPorDescripcion() . ' - ' . Gral::getFechaHoraToWEB($this->getCreado());
                break;
            case PdiTipoOrigen::TIPO_ORIGEN_AJUSTE_PANOL:
                $texto = $this->getCreadoPorDescripcion() . ' - ' . Gral::getFechaHoraToWEB($this->getCreado());
                break;
            case PdiTipoOrigen::TIPO_ORIGEN_NEUMATICO:
                $texto = $this->getCreadoPorDescripcion() . ' - ' . Gral::getFechaHoraToWEB($this->getCreado());
                break;
            case PdiTipoOrigen::TIPO_ORIGEN_ENVIO:
                $texto = $this->getCreadoPorDescripcion() . ' - ' . Gral::getFechaHoraToWEB($this->getCreado());
                break;
            case PdiTipoOrigen::TIPO_ORIGEN_ENTREGA_OPERARIO:
                $texto = $this->getCreadoPorDescripcion() . ' - ' . Gral::getFechaHoraToWEB($this->getCreado());
                break;
            case PdiTipoOrigen::TIPO_ORIGEN_VENTA:
                $texto = $this->getCreadoPorDescripcion() . ' - ' . Gral::getFechaHoraToWEB($this->getCreado());
                break;
            case PdiTipoOrigen::TIPO_ORIGEN_TRANSFORMACION:
                $texto = $this->getCreadoPorDescripcion() . ' - ' . Gral::getFechaHoraToWEB($this->getCreado());
                break;
        }

        return $texto;
    }

    public function enviarAvisos($asunto = '') {
        return;

        $pdi_pedido_destinatarios = $this->getPdiPedidoDestinatarios();
        foreach ($pdi_pedido_destinatarios as $pdi_pedido_destinatario) {
            $us_usuario_destinatario = $pdi_pedido_destinatario->getUsUsuario();
            $user = UsUsuario::autenticado();
            if ($user->getId() != $us_usuario_destinatario->getId()) {
                // aviso por email
                $estado_envio_mail = $this->enviarEmailAviso($asunto, $us_usuario_destinatario);
                if ($estado_envio_mail) {
                    $pdi_pedido_destinatario->setAvisoEmail(1);
                    $pdi_pedido_destinatario->save();
                }
            }
        }
    }

    public function enviarEmailAviso($asunto, $us_usuario) {
        // control de envio de email activado
        if (!Mail::MAIL_ACTIVO)
            return false;

        // se controla de que el formato del email sea correcto
        if (!Ctrl::esEmail($us_usuario->getEmail())) {
            return false;
        }

        Gral::setSes('MECANO_PDI_PEDIDO_ID', $this->getId());
        Gral::setSes('MECANO_US_USUARIO_ID', $us_usuario->getId());

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $archivo = Gral::getPathAbs() . "mailing/plantillas/MECANO/index_pdi_pedido.php";
        $msg = Gral::get_include_contents($archivo);

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

        $mail->From = Mail::MAIL_CASILLA_REMITENTE;
        $mail->FromName = Mail::MAIL_NOMBRE_REMITENTE;

        $mail->AddAddress($us_usuario->getEmail());
        $mail->AddBCC(Mail::MAIL_CASILLA_AUDITORIA_ADMIN);

        $mail->AddReplyTo(Mail::MAIL_CASILLA_REPLYTO);

        $mail->IsHTML(true);
        $mail->Subject = $asunto;

        $mail->Body = $msg;
        $exito = $mail->Send();
        return $exito;
    }

    /**
     * Metodo que retorna los insumos identificados vinculados al pedido
     * @return type
     */
    public function getInsInsumoIdentificadosVinculados() {
        return;

        $ins_insumo_identificados = array();

        $ins_insumo_identificado_movimientos = $this->getInsInsumoIdentificadoMovimientos();
        foreach ($ins_insumo_identificado_movimientos as $ins_insumo_identificado_movimiento) {
            $ins_insumo_identificados[$ins_insumo_identificado_movimiento->getInsInsumoIdentificadoId()] = $ins_insumo_identificado_movimiento->getInsInsumoIdentificado();
        }
        return $ins_insumo_identificados;
    }

    /**
     * Metodo que registra ajustes de movimientos de insumos por asignaciones particulares (Ajustes)
     * @param type $ins_insumo_identificado_id
     * @param type $panol_origen
     * @param type $panol_destino
     * @param type $observacion
     */
    static function setPdiPedidoAjustePorMovimientoDeInsumoIdentificado($ins_insumo_identificado_id, $panol_origen, $panol_destino, $observacion = '') {
        $ins_insumo_identificado = InsInsumoIdentificado::getOxId($ins_insumo_identificado_id);
        $ins_insumo_identificado_movimiento_actual = $ins_insumo_identificado->getInsInsumoIdentificadoMovimientoActual();
        $ins_insumo = $ins_insumo_identificado->getInsInsumo();

        $ins_insumo_identificado_tipo_estado_actual = $ins_insumo_identificado_movimiento_actual->getInsInsumoIdentificadoTipoEstado();

        // se crea un nuevo pedido
        $pdi_pedido = new PdiPedido();
        $pdi_pedido->setInsInsumoId($ins_insumo->getId());
        $pdi_pedido->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_PANOL)->getId());
        $pdi_pedido->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_BAJA)->getId());
        $pdi_pedido->setPanPanolOrigen($panol_origen);
        $pdi_pedido->setPanPanolDestino($panol_destino);
        $pdi_pedido->setEstado(1);

        $pdi_pedido->save();
        $pdi_pedido->setCodigo($pdi_pedido->getCodigoConCeros());
        $pdi_pedido->save();

        // se registra estado del pedido, PdiEstado
        $pdi_estado = $pdi_pedido->setPdiPedidoEstado(
                PdiTipoEstado::TIPO_ESTADO_AJUSTADO, $cantidad = 1, $observacion
        );

        // se registran destinatarios del pedido, PdiPedidoDestinatario
        $pdi_pedido->setPdiPedidoDestinatarios();

        // se registra el movimiento de stock
        $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_AJUSTE_NEGATIVO);
        $ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento, $ins_insumo_identificado_tipo_estado_actual, $ins_insumo_identificado_tipo_estado_actual);

        // se registra el movimiento del insumo identificado
        $array_insumo_movimiento = array(
            'identificado_id' => $ins_insumo_identificado->getId(),
            'instancia_id' => $ins_insumo_identificado_movimiento_actual->getInsInsumoInstanciaId(),
            'km' => $ins_insumo_identificado_movimiento_actual->getKm(),
            'tipo_estado_id' => $ins_insumo_identificado_movimiento_actual->getInsInsumoIdentificadoTipoEstadoId()
        );

        $descripcion = 'Egreso de Pañol por Ajuste de Stock';
        $ins_tipo_movimiento = InsTipoMovimiento::getOxCodigo(InsTipoMovimiento::TIPO_PANOL_EGRESO);
        $ins_insumo_identificado->setInsInsumoIdentificadoActual($descripcion, $ins_tipo_movimiento->getId(), $pdi_pedido->getId(), $array_insumo_movimiento, $panol_origen, null, $observacion);
    }

    /**
     * Metodo que registra ajustes de movimientos de insumos por asignaciones particulares (Ajustes)
     * @param type $ins_insumo_identificado_id
     * @param type $panol_origen
     * @param type $panol_destino
     * @param type $observacion
     */
    static function setPdiPedidoPorMovimientoManualDeInsumoIdentificado(
    $ins_insumo_identificado_id, $panol_origen, $panol_destino, $observacion = '', $ins_insumo_identificado_tipo_estado_codigo, $ins_stock_tipo_movimiento_codigo, $movimiento_descripcion = '', $movimiento_tipo_codigo
    ) {
        $ins_insumo_identificado = InsInsumoIdentificado::getOxId($ins_insumo_identificado_id);
        $ins_insumo_identificado_movimiento_actual = $ins_insumo_identificado->getInsInsumoIdentificadoMovimientoActual();
        $ins_insumo = $ins_insumo_identificado->getInsInsumo();

        // se incializa valor de km de movimiento
        $km_movimiento = $ins_insumo_identificado_movimiento_actual->getKm();

        // se deduce insumo asingado actual o final
        $tal_insumo_asignado_actual_o_final = $ins_insumo_identificado->getTalInsumoAsignadoActual();
        if (!$tal_insumo_asignado_actual_o_final) {
            $tal_insumo_asignado_actual_o_final = $ins_insumo_identificado->getTalInsumoAsignadoFinal();
            if (!$tal_insumo_asignado_actual_o_final) {
                $tal_insumo_asignado_actual_o_final = new TalInsumoAsignado();
            }
        } else {
            // si el insumo identificado ya fue asignado a un coche
            $km_movimiento = $tal_insumo_asignado_actual_o_final->getKmInsumoConsumo();

            // excepcion para cuando existe un cambio de instancia
            if ($tal_insumo_asignado_actual_o_final->getInsInsumoInstanciaId() != $ins_insumo_identificado_movimiento_actual->getInsInsumoInstanciaId()) {
                $km_movimiento = $ins_insumo_identificado_movimiento_actual->getKm();
            }
        }

        $ins_insumo_identificado_tipo_estado_actual = $ins_insumo_identificado_movimiento_actual->getInsInsumoIdentificadoTipoEstado();
        $ins_insumo_identificado_tipo_estado = InsInsumoIdentificadoTipoEstado::getOxCodigo($ins_insumo_identificado_tipo_estado_codigo);

        // se obtiene la instancia actual del insumo identificado
        if ($ins_insumo_identificado_movimiento_actual->getId() != '') {
            $ins_insumo_instancia_id = $ins_insumo_identificado_movimiento_actual->getInsInsumoInstanciaId();
        } else {
            // en el caso de que no tenga instancia actual, se define la instancia inicial.
            $ins_insumo_instancia_id = $ins_insumo_identificado->getInsInsumoInstanciaInicial()->getId();
        }

        if ($ins_insumo_identificado_tipo_estado_actual->getId() == $ins_insumo_identificado_tipo_estado->getId()) {
            return;
        }

        // se crea un nuevo pedido
        $pdi_pedido = new PdiPedido();
        $pdi_pedido->setInsInsumoId($ins_insumo->getId());
        $pdi_pedido->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_AJUSTE)->getId());
        $pdi_pedido->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_BAJA)->getId());
        $pdi_pedido->setPanPanolOrigen($panol_origen);
        $pdi_pedido->setPanPanolDestino($panol_destino);
        $pdi_pedido->setEstado(1);

        $pdi_pedido->save();
        $pdi_pedido->setCodigo($pdi_pedido->getCodigoConCeros());
        $pdi_pedido->save();

        // se registra estado del pedido, PdiEstado
        $pdi_estado = $pdi_pedido->setPdiPedidoEstado(
                PdiTipoEstado::TIPO_ESTADO_AJUSTADO, $cantidad = 1, $observacion
        );

        // se registran destinatarios del pedido, PdiPedidoDestinatario
        $pdi_pedido->setPdiPedidoDestinatarios();

        // se registra el movimiento de stock
        $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo($ins_stock_tipo_movimiento_codigo);
        $ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento, $ins_insumo_identificado_tipo_estado_actual, $ins_insumo_identificado_tipo_estado);

        // se registra el movimiento del insumo identificado
        $array_insumo_movimiento = array(
            'identificado_id' => $ins_insumo_identificado->getId(),
            'instancia_id' => $ins_insumo_instancia_id,
            //'km' => $tal_insumo_asignado_actual_o_final->getKmInsumoConsumo(),
            'km' => $km_movimiento,
            'km_total' => $tal_insumo_asignado_actual_o_final->getKmActualInsumo(),
            'tipo_estado_id' => $ins_insumo_identificado_tipo_estado->getId()
        );

        $descripcion = $movimiento_descripcion;
        $ins_tipo_movimiento = InsTipoMovimiento::getOxCodigo($movimiento_tipo_codigo);
        $ins_insumo_identificado->setInsInsumoIdentificadoActual($descripcion, $ins_tipo_movimiento->getId(), $pdi_pedido->getId(), $array_insumo_movimiento, $panol_origen, null, $observacion);
    }

    /**
     * Metodo que registra ajustes de movimientos de insumos en casos estados DESCONOCIDOS
     * @param type $ins_insumo_identificado_id
     * @param type $panol_origen
     * @param type $panol_destino
     * @param type $observacion
     */
    static function setPdiPedidoPorMovimientoManualDesconocidoDeInsumoIdentificado(
    $ins_insumo_identificado_id, $panol_origen, $panol_destino, $observacion = '', $ins_insumo_identificado_tipo_estado_codigo, $ins_stock_tipo_movimiento_codigo, $movimiento_descripcion = '', $movimiento_tipo_codigo
    ) {
        $ins_insumo_identificado = InsInsumoIdentificado::getOxId($ins_insumo_identificado_id);
        $ins_insumo_identificado_movimiento_actual = $ins_insumo_identificado->getInsInsumoIdentificadoMovimientoActual();
        $ins_insumo = $ins_insumo_identificado->getInsInsumo();

        // se incializa valor de km de movimiento
        $km_movimiento = $ins_insumo_identificado_movimiento_actual->getKm();

        // se deduce insumo asingado actual o final
        $tal_insumo_asignado_actual_o_final = $ins_insumo_identificado->getTalInsumoAsignadoActual();
        if (!$tal_insumo_asignado_actual_o_final) {
            $tal_insumo_asignado_actual_o_final = $ins_insumo_identificado->getTalInsumoAsignadoFinal();
            if (!$tal_insumo_asignado_actual_o_final) {
                $tal_insumo_asignado_actual_o_final = new TalInsumoAsignado();
            }
        } else {
            // si el insumo identificado ya fue asignado a un coche
            $km_movimiento = $tal_insumo_asignado_actual_o_final->getKmInsumoConsumo();

            // excepcion para cuando existe un cambio de instancia
            if ($tal_insumo_asignado_actual_o_final->getInsInsumoInstanciaId() != $ins_insumo_identificado_movimiento_actual->getInsInsumoInstanciaId()) {
                $km_movimiento = $ins_insumo_identificado_movimiento_actual->getKm();
            }
        }

        $ins_insumo_identificado_tipo_estado_actual = $ins_insumo_identificado_movimiento_actual->getInsInsumoIdentificadoTipoEstado();
        $ins_insumo_identificado_tipo_estado = InsInsumoIdentificadoTipoEstado::getOxCodigo($ins_insumo_identificado_tipo_estado_codigo);

        // se omite si se elige el estado actual
        if ($ins_insumo_identificado_tipo_estado_actual->getId() == $ins_insumo_identificado_tipo_estado->getId()) {
            return;
        }

        // se crea un nuevo pedido
        $pdi_pedido = new PdiPedido();
        $pdi_pedido->setInsInsumoId($ins_insumo->getId());
        $pdi_pedido->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_AJUSTE)->getId());
        $pdi_pedido->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_BAJA)->getId());
        $pdi_pedido->setPanPanolOrigen($panol_origen);
        $pdi_pedido->setPanPanolDestino($panol_destino);
        $pdi_pedido->setEstado(1);

        $pdi_pedido->save();
        $pdi_pedido->setCodigo($pdi_pedido->getCodigoConCeros());
        $pdi_pedido->save();

        // se registra estado del pedido, PdiEstado
        $pdi_estado = $pdi_pedido->setPdiPedidoEstado(
                PdiTipoEstado::TIPO_ESTADO_AJUSTADO, $cantidad = 1, $observacion
        );

        // se registran destinatarios del pedido, PdiPedidoDestinatario
        $pdi_pedido->setPdiPedidoDestinatarios();

        // se registra el movimiento de stock
        $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo($ins_stock_tipo_movimiento_codigo);
        $ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento, $ins_insumo_identificado_tipo_estado_actual, $ins_insumo_identificado_tipo_estado);

        // se registra el movimiento del insumo identificado
        $array_insumo_movimiento = array(
            'identificado_id' => $ins_insumo_identificado->getId(),
            'instancia_id' => $ins_insumo_identificado_movimiento_actual->getInsInsumoInstanciaId(),
            //'km' => $tal_insumo_asignado_actual_o_final->getKmInsumoConsumo(),
            'km' => $km_movimiento,
            'km_total' => $tal_insumo_asignado_actual_o_final->getKmActualInsumo(),
            'tipo_estado_id' => $ins_insumo_identificado_tipo_estado->getId()
        );

        $descripcion = $movimiento_descripcion;
        $ins_tipo_movimiento = InsTipoMovimiento::getOxCodigo($movimiento_tipo_codigo);
        $ins_insumo_identificado->setInsInsumoIdentificadoActual($descripcion, $ins_tipo_movimiento->getId(), $pdi_pedido->getId(), $array_insumo_movimiento, null, null, $observacion);
    }

    /**
     * Metodo que registra ajustes de movimientos de insumos por asignaciones particulares (Ajustes)
     * @param type $ins_insumo_identificado_id
     * @param type $panol_origen
     * @param type $panol_destino
     * @param type $observacion
     */
    static function setPdiPedidoPorCambioUbicacionManualDeInsumoIdentificado(
    $ins_insumo_identificado_id, $panol_origen, $panol_destino, $observacion = '', $ins_insumo_identificado_tipo_estado_codigo, $movimiento_descripcion = '', $movimiento_tipo_codigo
    ) {
        $ins_insumo_identificado = InsInsumoIdentificado::getOxId($ins_insumo_identificado_id);
        $ins_insumo_identificado_movimiento_actual = $ins_insumo_identificado->getInsInsumoIdentificadoMovimientoActual();
        $ins_insumo = $ins_insumo_identificado->getInsInsumo();

        // se incializa valor de km de movimiento
        $km_movimiento = $ins_insumo_identificado_movimiento_actual->getKm();

        // se deduce insumo asingado actual o final
        $tal_insumo_asignado_actual_o_final = $ins_insumo_identificado->getTalInsumoAsignadoActual();
        if (!$tal_insumo_asignado_actual_o_final) {
            $tal_insumo_asignado_actual_o_final = $ins_insumo_identificado->getTalInsumoAsignadoFinal();
            if (!$tal_insumo_asignado_actual_o_final) {
                $tal_insumo_asignado_actual_o_final = new TalInsumoAsignado();
            }
        } else {
            // si el insumo identificado ya fue asignado a un coche
            $km_movimiento = $tal_insumo_asignado_actual_o_final->getKmInsumoConsumo();

            // excepcion para cuando existe un cambio de instancia
            if ($tal_insumo_asignado_actual_o_final->getInsInsumoInstanciaId() != $ins_insumo_identificado_movimiento_actual->getInsInsumoInstanciaId()) {
                $km_movimiento = $ins_insumo_identificado_movimiento_actual->getKm();
            }
        }

        $ins_insumo_identificado_tipo_estado_actual = $ins_insumo_identificado_movimiento_actual->getInsInsumoIdentificadoTipoEstado();
        $ins_insumo_identificado_tipo_estado = InsInsumoIdentificadoTipoEstado::getOxCodigo($ins_insumo_identificado_tipo_estado_codigo);

        // se omite si se cambia al mismo panol
        if ($panol_origen == $panol_destino) {
            return;
        }

        // se crea un nuevo pedido
        $pdi_pedido = new PdiPedido();
        $pdi_pedido->setInsInsumoId($ins_insumo->getId());
        $pdi_pedido->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_AJUSTE)->getId());
        $pdi_pedido->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_BAJA)->getId());
        $pdi_pedido->setPanPanolOrigen($panol_origen);
        $pdi_pedido->setPanPanolDestino($panol_destino);
        $pdi_pedido->setEstado(1);

        $pdi_pedido->save();
        $pdi_pedido->setCodigo($pdi_pedido->getCodigoConCeros());
        $pdi_pedido->save();

        // se registra estado del pedido, PdiEstado
        $pdi_estado = $pdi_pedido->setPdiPedidoEstado(
                PdiTipoEstado::TIPO_ESTADO_AJUSTADO, $cantidad = 1, $observacion
        );

        // se registran destinatarios del pedido, PdiPedidoDestinatario
        $pdi_pedido->setPdiPedidoDestinatarios();

        // se registra el movimiento de stock de ingreso del panol origen
        $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_INGRESO);
        $ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento, $ins_insumo_identificado_tipo_estado_actual, $ins_insumo_identificado_tipo_estado);

        if ($panol_destino != 'null') {
            // se registra el movimiento de stock de salida del panol destino
            $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_SALIDA);
            $ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento, $ins_insumo_identificado_tipo_estado_actual, $ins_insumo_identificado_tipo_estado);
        }

        // se registra el movimiento del insumo identificado
        $array_insumo_movimiento = array(
            'identificado_id' => $ins_insumo_identificado->getId(),
            'instancia_id' => $ins_insumo_identificado_movimiento_actual->getInsInsumoInstanciaId(),
            //'km' => $tal_insumo_asignado_actual_o_final->getKmInsumoConsumo(),
            'km' => $km_movimiento,
            'km_total' => $tal_insumo_asignado_actual_o_final->getKmActualInsumo(),
            'tipo_estado_id' => $ins_insumo_identificado_tipo_estado->getId()
        );

        $descripcion = $movimiento_descripcion;
        $ins_tipo_movimiento = InsTipoMovimiento::getOxCodigo($movimiento_tipo_codigo);
        $ins_insumo_identificado->setInsInsumoIdentificadoActual($descripcion, $ins_tipo_movimiento->getId(), $pdi_pedido->getId(), $array_insumo_movimiento, $panol_origen, null, $observacion);
    }

    /**
     * Metodo que registra ajustes de movimientos de insumos por modificaciones de datos del insumo
     * @param type $ins_insumo_identificado_id
     * @param type $observacion
     */
    static function setPdiPedidoPorCambioDeDatosManualDeInsumoIdentificado(
    $ins_insumo_identificado, $observacion = ''
    ) {
        $ins_insumo_identificado_actual = InsInsumoIdentificado::getOxId($ins_insumo_identificado->getId());
        $ins_insumo_identificado_movimiento_actual = $ins_insumo_identificado->getInsInsumoIdentificadoMovimientoActual();
        $ins_insumo_actual = $ins_insumo_identificado_actual->getInsInsumo();
        $ins_insumo = $ins_insumo_identificado->getInsInsumo();

        // se deduce insumo asingado actual o final
        $tal_insumo_asignado_actual_o_final = $ins_insumo_identificado->getTalInsumoAsignadoActual();
        if (!$tal_insumo_asignado_actual_o_final) {
            $tal_insumo_asignado_actual_o_final = $ins_insumo_identificado->getTalInsumoAsignadoFinal();
            if (!$tal_insumo_asignado_actual_o_final) {
                $tal_insumo_asignado_actual_o_final = new TalInsumoAsignado();
            }
        }

        // se registran las modificaciones del insumo identificado
        $ins_insumo_identificado->saveDesdeBackend();

        // ************************************************************************************************************************
        // se omite si no se modifica el insumo
        if ($ins_insumo_identificado_actual->getInsInsumoId() == $ins_insumo_identificado->getInsInsumoId()) {
            return;
        }
        // si actualmente el insumo no se encuentra en un panol, no se ajusta stock
        if ($ins_insumo_identificado_movimiento_actual->getPanPanolId() == 'null') {
            return;
        }

        $ins_insumo_identificado_tipo_estado_actual = $ins_insumo_identificado_movimiento_actual->getInsInsumoIdentificadoTipoEstado();
        $pan_panol = $ins_insumo_identificado_movimiento_actual->getPanPanol();

        $cantidad = 0;
        $cantidad_pasivo = 0;

        if ($ins_insumo_identificado_tipo_estado_actual->getStockActivo()) {
            $cantidad = 1;
        } elseif ($ins_insumo_identificado_tipo_estado_actual->getStockPasivo()) {
            $cantidad_pasivo = 1;
        }

        $ins_insumo->setInsStockMovimientoDirecto(
                $cantidad, $cantidad_pasivo, $pan_panol
        );

        $ins_insumo_actual->setInsStockMovimientoDirecto(
                $cantidad * (-1), $cantidad_pasivo * (-1), $pan_panol
        );



        return;


        $ins_insumo_identificado_tipo_estado_actual = $ins_insumo_identificado_movimiento_actual->getInsInsumoIdentificadoTipoEstado();
        $ins_insumo_identificado_tipo_estado = $ins_insumo_identificado_tipo_estado_actual; // se mantiene en el mismo estado
        // se omite si no se modifica el insumo
        if ($ins_insumo_identificado_actual->getInsInsumoId() == $ins_insumo_identificado->getInsInsumoId()) {
            return;
        }
        // si actualmente el insumo no se encuentra en un panol, no se ajusta stock
        if ($ins_insumo_identificado_movimiento_actual->getPanPanolId() == 'null') {
            return;
        }

        $panol_origen = $ins_insumo_identificado_movimiento_actual->getPanPanolId();
        $panol_destino = $ins_insumo_identificado_movimiento_actual->getPanPanolId();

        // se crea un nuevo pedido
        $pdi_pedido = new PdiPedido();
        $pdi_pedido->setInsInsumoId($ins_insumo_actual->getId());
        $pdi_pedido->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_AJUSTE)->getId());
        $pdi_pedido->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_BAJA)->getId());
        $pdi_pedido->setPanPanolOrigen($panol_origen);
        $pdi_pedido->setPanPanolDestino($panol_destino);
        $pdi_pedido->setEstado(1);

        $pdi_pedido->save();
        $pdi_pedido->setCodigo($pdi_pedido->getCodigoConCeros());
        $pdi_pedido->save();

        // se registra estado del pedido, PdiEstado
        $pdi_estado = $pdi_pedido->setPdiPedidoEstado(
                PdiTipoEstado::TIPO_ESTADO_AJUSTADO, $cantidad = 1, $observacion
        );

        // se registran destinatarios del pedido, PdiPedidoDestinatario
        $pdi_pedido->setPdiPedidoDestinatarios();

        // se registra el movimiento de stock de ingreso del insumo nuevo
        $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_INGRESO);
        $ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento, $ins_insumo_identificado_tipo_estado_actual, $ins_insumo_identificado_tipo_estado);

        // se registra el movimiento de stock de salida del insumo anterior
        $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_SALIDA);
        $ins_insumo_actual->setInsStockMovimiento($pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento, $ins_insumo_identificado_tipo_estado_actual, $ins_insumo_identificado_tipo_estado);

        // se deduce la instancia nueva del insumo identificado
        $ins_insumo_instancia_actual = $ins_insumo_identificado_movimiento_actual->getInsInsumoInstancia();
        $orden = $ins_insumo_instancia_actual->getOrden();
        $ins_insumo_instancia_nueva = $ins_insumo_actual->getInsInsumoInstanciaRespectivaEnInsInsumo($orden);

        // se registra el movimiento del insumo identificado
        $array_insumo_movimiento = array(
            'identificado_id' => $ins_insumo_identificado->getId(),
            'instancia_id' => $ins_insumo_instancia_nueva->getId(),
            'km' => $tal_insumo_asignado_actual_o_final->getKmInsumoConsumo(),
            'km_total' => $tal_insumo_asignado_actual_o_final->getKmActualInsumo(),
            'tipo_estado_id' => $ins_insumo_identificado_tipo_estado->getId()
        );

        $descripcion = 'Se modificaron datos del insumo identificado';
        $ins_tipo_movimiento = InsTipoMovimiento::getOxCodigo(InsTipoMovimiento::TIPO_AJUSTE_MANUAL);
        $ins_insumo_identificado->setInsInsumoIdentificadoActual($descripcion, $ins_tipo_movimiento->getId(), $pdi_pedido->getId(), $array_insumo_movimiento, $panol_origen, null, $observacion);
    }

    /**
     * Metodo que registra ajustes de movimientos de insumos por asignaciones desde el Modulo de NEUMATICOS
     */
    static function setPdiPedidoPorAsignacionDesdeModNeumaticos(
    $tal_tarea_resuelta_id, $array_entrante, $array_saliente, $pan_panol_salida_id
    ) {

        $ins_insumo_identificado_entrante_id = $array_entrante['identificado_id'];
        $ins_insumo_identificado_saliente_id = $array_saliente['identificado_id'];

        $ins_insumo_identificado_entrante = InsInsumoIdentificado::getOxId($ins_insumo_identificado_entrante_id);
        $ins_insumo_identificado_saliente = InsInsumoIdentificado::getOxId($ins_insumo_identificado_saliente_id);

        $existe_array_entrante = ($ins_insumo_identificado_entrante_id != 0) ? true : false;
        $existe_array_saliente = ($ins_insumo_identificado_saliente_id != 0) ? true : false;

        if ($existe_array_entrante) {
            // ARRAY_ENTRANTE

            $ins_insumo = $ins_insumo_identificado_entrante->getInsInsumo();
            $ins_insumo_identificado_entrante_movimiento_actual = $ins_insumo_identificado_entrante->getInsInsumoIdentificadoMovimientoActual();
            $pan_panol = $ins_insumo_identificado_entrante_movimiento_actual->getPanPanol();

            $ins_insumo_identificado_tipo_estado_actual = $ins_insumo_identificado_entrante_movimiento_actual->getInsInsumoIdentificadoTipoEstado();
            $ins_insumo_identificado_tipo_estado = InsInsumoIdentificadoTipoEstado::getOxCodigo(InsInsumoIdentificadoTipoEstado::TIPO_EN_USO);

            if ($pan_panol->getId() != 'null') {

                $panol_origen = $pan_panol->getId();
                $panol_destino = $pan_panol->getId();

                // se crea un nuevo pedido
                $pdi_pedido_entrante = new PdiPedido();
                $pdi_pedido_entrante->setInsInsumoId($ins_insumo->getId());
                $pdi_pedido_entrante->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_NEUMATICO)->getId());
                $pdi_pedido_entrante->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_BAJA)->getId());
                $pdi_pedido_entrante->setPanPanolOrigen($panol_origen);
                $pdi_pedido_entrante->setPanPanolDestino($panol_destino);
                $pdi_pedido_entrante->setEstado(1);

                $pdi_pedido_entrante->save();
                $pdi_pedido_entrante->setCodigo($pdi_pedido_entrante->getCodigoConCeros());
                $pdi_pedido_entrante->save();

                // se registra estado del pedido, PdiEstado
                $pdi_estado = $pdi_pedido_entrante->setPdiPedidoEstado(
                        PdiTipoEstado::TIPO_ESTADO_AJUSTADO, $cantidad = 1, $observacion = 'Asignación desde Mód Neumáticos'
                );

                // se registran destinatarios del pedido, PdiPedidoDestinatario
                $pdi_pedido_entrante->setPdiPedidoDestinatarios();

                // se registra el movimiento de stock
                $ins_stock_tipo_movimiento_codigo = InsStockTipoMovimiento::TIPO_MOV_SALIDA;
                $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo($ins_stock_tipo_movimiento_codigo);
                $ins_insumo->setInsStockMovimiento($pdi_pedido_entrante, $pdi_estado, $ins_stock_tipo_movimiento, $ins_insumo_identificado_tipo_estado_actual, $ins_insumo_identificado_tipo_estado);
            }
        }

        if ($existe_array_saliente) {
            // ARRAY SALIENTE

            $ins_insumo = $ins_insumo_identificado_saliente->getInsInsumo();
            $ins_insumo_identificado_saliente_movimiento_actual = $ins_insumo_identificado_saliente->getInsInsumoIdentificadoMovimientoActual();

            $ins_insumo_identificado_tipo_estado_actual = $ins_insumo_identificado_saliente_movimiento_actual->getInsInsumoIdentificadoTipoEstado();
            $ins_insumo_identificado_tipo_estado = InsInsumoIdentificadoTipoEstado::getOxId($array_saliente['tipo_estado_id']);


            if ($pan_panol_salida_id != 0) {

                $panol_origen = $pan_panol_salida_id;
                $panol_destino = $pan_panol_salida_id;

                // se crea un nuevo pedido
                $pdi_pedido_saliente = new PdiPedido();
                $pdi_pedido_saliente->setInsInsumoId($ins_insumo->getId());
                $pdi_pedido_saliente->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_NEUMATICO)->getId());
                $pdi_pedido_saliente->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_BAJA)->getId());
                $pdi_pedido_saliente->setPanPanolOrigen($panol_origen);
                $pdi_pedido_saliente->setPanPanolDestino($panol_destino);
                $pdi_pedido_saliente->setEstado(1);

                $pdi_pedido_saliente->save();
                $pdi_pedido_saliente->setCodigo($pdi_pedido_saliente->getCodigoConCeros());
                $pdi_pedido_saliente->save();

                // se registra estado del pedido, PdiEstado
                $pdi_estado = $pdi_pedido_saliente->setPdiPedidoEstado(
                        PdiTipoEstado::TIPO_ESTADO_AJUSTADO, $cantidad = 1, $observacion
                );

                // se registran destinatarios del pedido, PdiPedidoDestinatario
                $pdi_pedido_saliente->setPdiPedidoDestinatarios();

                // se registra el movimiento de stock
                $ins_stock_tipo_movimiento_codigo = InsStockTipoMovimiento::TIPO_MOV_INGRESO;
                $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo($ins_stock_tipo_movimiento_codigo);
                $ins_insumo->setInsStockMovimiento($pdi_pedido_saliente, $pdi_estado, $ins_stock_tipo_movimiento, $ins_insumo_identificado_tipo_estado_actual, $ins_insumo_identificado_tipo_estado);
            }
        }

        TalInsumoAsignado::setInsumoAsignadoIdentificadoNuevo($tal_tarea_resuelta_id, $array_entrante, $array_saliente, $pan_panol_salida_id, $pdi_pedido_entrante, $pdi_pedido_saliente);
        return true;
    }

    /**
     * Metodo que registra ajustes de movimientos de insumos por quitas desde el Modulo de NEUMATICOS
     */
    static function setPdiPedidoPorQuitaDesdeModNeumaticos(
    $array_saliente, $pan_panol_salida_id
    ) {

        $ins_insumo_identificado_saliente_id = $array_saliente['identificado_id'];
        $ins_insumo_identificado_saliente = InsInsumoIdentificado::getOxId($ins_insumo_identificado_saliente_id);
        $existe_array_saliente = ($ins_insumo_identificado_saliente_id != 0) ? true : false;

        if ($existe_array_saliente) {
            // ARRAY SALIENTE

            $ins_insumo = $ins_insumo_identificado_saliente->getInsInsumo();
            $ins_insumo_identificado_saliente_movimiento_actual = $ins_insumo_identificado_saliente->getInsInsumoIdentificadoMovimientoActual();

            $ins_insumo_identificado_tipo_estado_actual = $ins_insumo_identificado_saliente_movimiento_actual->getInsInsumoIdentificadoTipoEstado();
            $ins_insumo_identificado_tipo_estado = InsInsumoIdentificadoTipoEstado::getOxId($array_saliente['tipo_estado_id']);


            if ($pan_panol_salida_id != 0) {

                $panol_origen = $pan_panol_salida_id;
                $panol_destino = $pan_panol_salida_id;

                // se crea un nuevo pedido
                $pdi_pedido_saliente = new PdiPedido();
                $pdi_pedido_saliente->setInsInsumoId($ins_insumo->getId());
                $pdi_pedido_saliente->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_NEUMATICO)->getId());
                $pdi_pedido_saliente->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_BAJA)->getId());
                $pdi_pedido_saliente->setPanPanolOrigen($panol_origen);
                $pdi_pedido_saliente->setPanPanolDestino($panol_destino);
                $pdi_pedido_saliente->setEstado(1);

                $pdi_pedido_saliente->save();
                $pdi_pedido_saliente->setCodigo($pdi_pedido_saliente->getCodigoConCeros());
                $pdi_pedido_saliente->save();

                // se registra estado del pedido, PdiEstado
                $pdi_estado = $pdi_pedido_saliente->setPdiPedidoEstado(
                        PdiTipoEstado::TIPO_ESTADO_AJUSTADO, $cantidad = 1, $observacion
                );

                // se registran destinatarios del pedido, PdiPedidoDestinatario
                $pdi_pedido_saliente->setPdiPedidoDestinatarios();

                // se registra el movimiento de stock
                $ins_stock_tipo_movimiento_codigo = InsStockTipoMovimiento::TIPO_MOV_INGRESO;
                $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo($ins_stock_tipo_movimiento_codigo);
                $ins_insumo->setInsStockMovimiento($pdi_pedido_saliente, $pdi_estado, $ins_stock_tipo_movimiento, $ins_insumo_identificado_tipo_estado_actual, $ins_insumo_identificado_tipo_estado);
            }
        }

        TalInsumoAsignado::setInsumoAsignadoIdentificadoQuitar($array_saliente, $pan_panol_salida_id, $pdi_pedido_saliente);
        return true;
    }

    /**
     * Metodo que registra ajustes stock por movimientos de insumos, se utilizan cuando se recibe una OC o Recepcion
     * @param type $ins_insumo_identificado_id
     * @param type $panol_origen
     * @param type $panol_destino
     * @param type $observacion
     */
    static function setPdiPedidoPorMovimientoManualDeInsumo(
    $ins_insumo_id, $panol_origen, $panol_destino, $cantidad, $observacion = '', $ins_stock_tipo_movimiento_codigo
    ) {

        $ins_insumo = InsInsumo::getOxId($ins_insumo_id);

        // se crea un nuevo pedido
        $pdi_pedido = new PdiPedido();
        $pdi_pedido->setInsInsumoId($ins_insumo->getId());
        $pdi_pedido->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_PANOL)->getId());
        $pdi_pedido->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_BAJA)->getId());
        $pdi_pedido->setPanPanolOrigen($panol_origen);
        $pdi_pedido->setPanPanolDestino($panol_destino);
        $pdi_pedido->setEstado(1);
        $pdi_pedido->save();
        
        $pdi_pedido->setCodigo($pdi_pedido->getCodigoConCeros());
        $pdi_pedido->save();

        // se registra estado del pedido, PdiEstado
        $pdi_estado = $pdi_pedido->setPdiPedidoEstado(
                PdiTipoEstado::TIPO_ESTADO_COMPRADO, $cantidad, $observacion
        );

        // se registran destinatarios del pedido, PdiPedidoDestinatario
        $pdi_pedido->setPdiPedidoDestinatarios();

        // se registra el movimiento de stock
        $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo($ins_stock_tipo_movimiento_codigo);
        $ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento, false, false, $observacion);

        return $pdi_pedido;
    }

    /**
     * Metodo que registra ajustes stock por movimientos de insumos, se utilizan cuando se recibe una OC o Recepcion
     * @param type $ins_insumo_identificado_id
     * @param type $panol_origen
     * @param type $panol_destino
     * @param type $observacion
     */
    static function setPdiPedidoPorRemisionDeInsumo(
    $ins_insumo_id, $panol_origen, $panol_destino, $cantidad, $observacion = '', $ins_stock_tipo_movimiento_codigo
    ) {

        $ins_insumo = InsInsumo::getOxId($ins_insumo_id);

        // se crea un nuevo pedido
        $pdi_pedido = new PdiPedido();
        $pdi_pedido->setInsInsumoId($ins_insumo->getId());
        $pdi_pedido->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_PANOL)->getId());
        $pdi_pedido->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_BAJA)->getId());
        $pdi_pedido->setPanPanolOrigen($panol_origen);
        $pdi_pedido->setPanPanolDestino($panol_destino);
        $pdi_pedido->setEstado(1);
        $pdi_pedido->save();
        
        $pdi_pedido->setCodigo($pdi_pedido->getCodigoConCeros());
        $pdi_pedido->save();

        // se registra estado del pedido, PdiEstado
        $pdi_estado = $pdi_pedido->setPdiPedidoEstado(
                PdiTipoEstado::TIPO_ESTADO_REMITIDO, $cantidad, $observacion
        );

        // se registran destinatarios del pedido, PdiPedidoDestinatario
        $pdi_pedido->setPdiPedidoDestinatarios();

        // se registra el movimiento de stock
        $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo($ins_stock_tipo_movimiento_codigo);
        $ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento, false, false, $observacion);

        return $pdi_pedido;
    }

    /**
     * Metodo que registra ajustes stock por movimientos de insumos, se utilizan cuando se recibe una OC o Recepcion
     * @param type $ins_insumo_identificado_id
     * @param type $panol_origen
     * @param type $panol_destino
     * @param type $observacion
     */
    static function setPdiPedidoPorDevolucionDeInsumoEnNC(
    $ins_insumo_id, $panol_origen, $panol_destino, $cantidad, $observacion = '', $ins_stock_tipo_movimiento_codigo
    ) {

        $ins_insumo = InsInsumo::getOxId($ins_insumo_id);

        // se crea un nuevo pedido
        $pdi_pedido = new PdiPedido();
        $pdi_pedido->setInsInsumoId($ins_insumo->getId());
        $pdi_pedido->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_AJUSTE)->getId());
        $pdi_pedido->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_BAJA)->getId());
        $pdi_pedido->setPanPanolOrigen($panol_origen);
        $pdi_pedido->setPanPanolDestino($panol_destino);
        $pdi_pedido->setEstado(1);
        $pdi_pedido->save();
        
        $pdi_pedido->setCodigo($pdi_pedido->getCodigoConCeros());
        $pdi_pedido->save();

        // se registra estado del pedido, PdiEstado
        $pdi_estado = $pdi_pedido->setPdiPedidoEstado(
                PdiTipoEstado::TIPO_ESTADO_DEVUELTO, $cantidad, $observacion
        );

        // se registran destinatarios del pedido, PdiPedidoDestinatario
        $pdi_pedido->setPdiPedidoDestinatarios();

        // se registra el movimiento de stock
        $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo($ins_stock_tipo_movimiento_codigo);
        $ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento, false, false, $observacion);

        return $pdi_pedido;
    }
    
    /**
     * Metodo que registra ajustes stock por movimientos de insumos, se utilizan cuando se recibe una OC o Recepcion
     * @param type $ins_insumo_identificado_id
     * @param type $panol_origen
     * @param type $panol_destino
     * @param type $observacion
     */
    static function setPdiPedidoPorAjusteImportacionDeInsumo(
    $ins_insumo_id, $panol_origen, $panol_destino, $cantidad, $observacion = '', $ins_stock_tipo_movimiento_codigo
    ) {

        $ins_insumo = InsInsumo::getOxId($ins_insumo_id);

        // se crea un nuevo pedido
        $pdi_pedido = new PdiPedido();
        $pdi_pedido->setInsInsumoId($ins_insumo->getId());
        $pdi_pedido->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_PANOL)->getId());
        $pdi_pedido->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_BAJA)->getId());
        $pdi_pedido->setPanPanolOrigen($panol_origen);
        $pdi_pedido->setPanPanolDestino($panol_destino);
        $pdi_pedido->setEstado(1);
        $pdi_pedido->save();
        
        $pdi_pedido->setCodigo($pdi_pedido->getCodigoConCeros());
        $pdi_pedido->save();

        // se registra estado del pedido, PdiEstado
        $pdi_estado = $pdi_pedido->setPdiPedidoEstado(
                PdiTipoEstado::TIPO_ESTADO_AJUSTADO, $cantidad, $observacion
        );

        // se registran destinatarios del pedido, PdiPedidoDestinatario
        $pdi_pedido->setPdiPedidoDestinatarios();

        // se registra el movimiento de stock
        $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo($ins_stock_tipo_movimiento_codigo);
        $ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento, false, false, $observacion);

        return $pdi_pedido;
    }

    /**
     * Metodo que registra un pedido por los envios de neumaticos e insumos identificados desde Mod Envios
     * @param type $chk_identificado_id
     * @param type $pan_panol_origen_id
     * @param type $pan_panol_destino_id
     */
    static function setPdiPedidoPorInsEnvioDeInsumoIdentificado(
    $ins_envio, $chk_identificado_id, $pan_panol_origen_id, $pan_panol_destino_id
    ) {
        $pan_panol_origen = PanPanol::getOxId($pan_panol_origen_id);
        $pan_panol_destino = PanPanol::getOxId($pan_panol_destino_id);

        $arr_insumos = array();

        // se reorganizan los insumos identificados agrupandolos por insumos
        foreach ($chk_identificado_id as $identificado_id) {
            $ins_insumo_identificado = InsInsumoIdentificado::getOxId($identificado_id);
            $ins_insumo = $ins_insumo_identificado->getInsInsumo();

            $arr_insumos[$ins_insumo->getId()][] = $ins_insumo_identificado;
        }


        // se registran los insumos identificados que se vinculan al envio
        foreach ($arr_insumos as $insumo_id => $v) {
            $ins_insumo = InsInsumo::getOxId($insumo_id);

            // se crea un nuevo pedido
            $pdi_pedido_saliente = new PdiPedido();
            $pdi_pedido_saliente->setInsInsumoId($insumo_id);
            $pdi_pedido_saliente->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_ENVIO)->getId());
            $pdi_pedido_saliente->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_BAJA)->getId());
            $pdi_pedido_saliente->setPanPanolOrigen($pan_panol_origen->getId());
            $pdi_pedido_saliente->setPanPanolDestino($pan_panol_origen->getId());
            $pdi_pedido_saliente->setEstado(1);

            $pdi_pedido_saliente->save();
            $pdi_pedido_saliente->setCodigo($pdi_pedido_saliente->getCodigoConCeros());
            $pdi_pedido_saliente->save();

            // se registra estado del pedido, PdiEstado
            $pdi_estado = $pdi_pedido_saliente->setPdiPedidoEstado(
                    PdiTipoEstado::TIPO_ESTADO_AJUSTADO, $cantidad = count($v), // cantidad de insumos identificados enviados de este insumo
                    $observacion = 'Despachado desde Mód Envíos - ' . $ins_envio->getCodigo()
            );

            // se registran destinatarios del pedido, PdiPedidoDestinatario
            $pdi_pedido_saliente->setPdiPedidoDestinatarios();


            foreach ($v as $ins_insumo_identificado) {
                //$ins_insumo_identificado = InsInsumoIdentificado::getOxId($identificado_id);
                $ins_insumo_identificado_movimiento_actual = $ins_insumo_identificado->getInsInsumoIdentificadoMovimientoActual();
                $ins_insumo_identificado_tipo_estado_actual = $ins_insumo_identificado_movimiento_actual->getInsInsumoIdentificadoTipoEstado();
                $ins_insumo_identificado_tipo_estado = $ins_insumo_identificado_movimiento_actual->getInsInsumoIdentificadoTipoEstado();

                // se registra el movimiento de stock
                $ins_stock_tipo_movimiento_codigo = InsStockTipoMovimiento::TIPO_MOV_SALIDA;
                $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo($ins_stock_tipo_movimiento_codigo);
                $ins_insumo->setInsStockMovimiento($pdi_pedido_saliente, $pdi_estado, $ins_stock_tipo_movimiento, $ins_insumo_identificado_tipo_estado_actual, $ins_insumo_identificado_tipo_estado);


                // se registra por cada insumo identificado el movimiento de insumo identificado de SALIDA de Panol
                $array_insumo_movimiento = array(
                    'identificado_id' => $ins_insumo_identificado->getId(),
                    'instancia_id' => $ins_insumo_identificado_movimiento_actual->getInsInsumoInstanciaId(),
                    'km' => $ins_insumo_identificado_movimiento_actual->getKm(),
                    'tipo_estado_id' => $ins_insumo_identificado_movimiento_actual->getInsInsumoIdentificadoTipoEstadoId()
                );
                $descripcion = 'Egreso de ' . $pan_panol_origen->getDescripcion();
                $ins_tipo_movimiento = InsTipoMovimiento::getOxCodigo(InsTipoMovimiento::TIPO_PANOL_EGRESO);
                $ins_insumo_identificado->setInsInsumoIdentificadoActual($descripcion, $ins_tipo_movimiento->getId(), $pdi_pedido_saliente->getId(), $array_insumo_movimiento, $pan_panol_id = null, $veh_coche_id = null, $observaciones = 'Por Envio ' . $ins_envio->getCodigo());
            }
        }
    }

    /**
     * Metodo que registra un pedido por los recepciones de envios internos de neumaticos e insumos identificados desde Mod Envios
     * @param type $chk_identificado_id
     * @param type $pan_panol_origen_id
     * @param type $pan_panol_destino_id
     */
    static function setPdiPedidoPorInsEnvioRecepcionDeInsumoIdentificado(
    $ins_envio, $chk_ins_envio_ins_insumo_identificado_id, $pan_panol_origen_id, $pan_panol_destino_id
    ) {
        $pan_panol_origen = PanPanol::getOxId($pan_panol_origen_id);
        $pan_panol_destino = PanPanol::getOxId($pan_panol_destino_id);

        $arr_insumos = array();

        // se reorganizan los insumos identificados agrupandolos por insumos
        foreach ($chk_ins_envio_ins_insumo_identificado_id as $ins_envio_ins_insumo_identificado_id) {
            $ins_envio_ins_insumo_identificado = InsEnvioInsInsumoIdentificado::getOxId($ins_envio_ins_insumo_identificado_id);
            $ins_insumo_identificado = $ins_envio_ins_insumo_identificado->getInsInsumoIdentificado();

            $ins_insumo = $ins_insumo_identificado->getInsInsumo();

            $arr_insumos[$ins_insumo->getId()][] = $ins_insumo_identificado;
        }


        // se registran los insumos identificados que se vinculan al envio
        foreach ($arr_insumos as $insumo_id => $v) {
            $ins_insumo = InsInsumo::getOxId($insumo_id);

            // se crea un nuevo pedido
            $pdi_pedido_entrante = new PdiPedido();
            $pdi_pedido_entrante->setInsInsumoId($insumo_id);
            $pdi_pedido_entrante->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_ENVIO)->getId());
            $pdi_pedido_entrante->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_BAJA)->getId());
            $pdi_pedido_entrante->setPanPanolOrigen($pan_panol_destino->getId());
            $pdi_pedido_entrante->setPanPanolDestino($pan_panol_destino->getId());
            $pdi_pedido_entrante->setEstado(1);

            $pdi_pedido_entrante->save();
            $pdi_pedido_entrante->setCodigo($pdi_pedido_entrante->getCodigoConCeros());
            $pdi_pedido_entrante->save();

            // se registra estado del pedido, PdiEstado
            $pdi_estado = $pdi_pedido_entrante->setPdiPedidoEstado(
                    PdiTipoEstado::TIPO_ESTADO_AJUSTADO, $cantidad = count($v), // cantidad de insumos identificados enviados de este insumo
                    $observacion = 'Recibido desde Mód Envíos - ' . $ins_envio->getCodigo()
            );

            // se registran destinatarios del pedido, PdiPedidoDestinatario
            $pdi_pedido_entrante->setPdiPedidoDestinatarios();


            foreach ($v as $ins_insumo_identificado) {
                //$ins_insumo_identificado = InsInsumoIdentificado::getOxId($identificado_id);
                $ins_insumo_identificado_movimiento_actual = $ins_insumo_identificado->getInsInsumoIdentificadoMovimientoActual();
                $ins_insumo_identificado_tipo_estado_actual = $ins_insumo_identificado_movimiento_actual->getInsInsumoIdentificadoTipoEstado();
                $ins_insumo_identificado_tipo_estado = $ins_insumo_identificado_movimiento_actual->getInsInsumoIdentificadoTipoEstado();

                // se registra el movimiento de stock
                $ins_stock_tipo_movimiento_codigo = InsStockTipoMovimiento::TIPO_MOV_INGRESO;
                $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo($ins_stock_tipo_movimiento_codigo);
                $ins_insumo->setInsStockMovimiento($pdi_pedido_entrante, $pdi_estado, $ins_stock_tipo_movimiento, $ins_insumo_identificado_tipo_estado_actual, $ins_insumo_identificado_tipo_estado);


                // se registra por cada insumo identificado el movimiento de insumo identificado de SALIDA de Panol
                $array_insumo_movimiento = array(
                    'identificado_id' => $ins_insumo_identificado->getId(),
                    'instancia_id' => $ins_insumo_identificado_movimiento_actual->getInsInsumoInstanciaId(),
                    'km' => $ins_insumo_identificado_movimiento_actual->getKm(),
                    'tipo_estado_id' => $ins_insumo_identificado_movimiento_actual->getInsInsumoIdentificadoTipoEstadoId()
                );
                $descripcion = 'Ingreso a ' . $pan_panol_destino->getDescripcion();
                $ins_tipo_movimiento = InsTipoMovimiento::getOxCodigo(InsTipoMovimiento::TIPO_PANOL_INGRESO);
                $ins_insumo_identificado->setInsInsumoIdentificadoActual($descripcion, $ins_tipo_movimiento->getId(), $pdi_pedido_entrante->getId(), $array_insumo_movimiento, $pan_panol_destino->getId(), $veh_coche_id = null, $observaciones = 'Por Envio ' . $ins_envio->getCodigo());
            }
        }
    }

    /**
     * Metodo que registra un pedido por las cancelaciones de envios internos de neumaticos e insumos identificados desde Mod Envios
     * @param type $chk_identificado_id
     * @param type $pan_panol_origen_id
     * @param type $pan_panol_destino_id
     */
    static function setPdiPedidoPorInsEnvioCancelacionDeInsumoIdentificado(
    $ins_envio, $pan_panol_origen_id, $pan_panol_destino_id
    ) {
        $pan_panol_origen = PanPanol::getOxId($pan_panol_origen_id);
        $pan_panol_destino = PanPanol::getOxId($pan_panol_destino_id);
        $ins_envio_ins_insumo_identificados = $ins_envio->getInsEnvioInsInsumoIdentificados();

        $arr_insumos = array();

        // se reorganizan los insumos identificados agrupandolos por insumos
        foreach ($ins_envio_ins_insumo_identificados as $ins_envio_ins_insumo_identificado) {
            $ins_insumo_identificado = $ins_envio_ins_insumo_identificado->getInsInsumoIdentificado();

            $ins_insumo = $ins_insumo_identificado->getInsInsumo();

            $arr_insumos[$ins_insumo->getId()][] = $ins_insumo_identificado;
        }


        // se registran los insumos identificados que se vinculan al envio
        foreach ($arr_insumos as $insumo_id => $v) {
            $ins_insumo = InsInsumo::getOxId($insumo_id);

            // se crea un nuevo pedido
            $pdi_pedido_entrante = new PdiPedido();
            $pdi_pedido_entrante->setInsInsumoId($insumo_id);
            $pdi_pedido_entrante->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_ENVIO)->getId());
            $pdi_pedido_entrante->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_BAJA)->getId());
            $pdi_pedido_entrante->setPanPanolOrigen($pan_panol_origen->getId());
            $pdi_pedido_entrante->setPanPanolDestino($pan_panol_origen->getId());
            $pdi_pedido_entrante->setEstado(1);

            $pdi_pedido_entrante->save();
            $pdi_pedido_entrante->setCodigo($pdi_pedido_entrante->getCodigoConCeros());
            $pdi_pedido_entrante->save();

            // se registra estado del pedido, PdiEstado
            $pdi_estado = $pdi_pedido_entrante->setPdiPedidoEstado(
                    PdiTipoEstado::TIPO_ESTADO_AJUSTADO, $cantidad = count($v), // cantidad de insumos identificados enviados de este insumo
                    $observacion = 'Cancelado desde Mód Envíos - ' . $ins_envio->getCodigo()
            );

            // se registran destinatarios del pedido, PdiPedidoDestinatario
            $pdi_pedido_entrante->setPdiPedidoDestinatarios();


            foreach ($v as $ins_insumo_identificado) {
                //$ins_insumo_identificado = InsInsumoIdentificado::getOxId($identificado_id);
                $ins_insumo_identificado_movimiento_actual = $ins_insumo_identificado->getInsInsumoIdentificadoMovimientoActual();
                $ins_insumo_identificado_tipo_estado_actual = $ins_insumo_identificado_movimiento_actual->getInsInsumoIdentificadoTipoEstado();
                $ins_insumo_identificado_tipo_estado = $ins_insumo_identificado_movimiento_actual->getInsInsumoIdentificadoTipoEstado();

                // se registra el movimiento de stock
                $ins_stock_tipo_movimiento_codigo = InsStockTipoMovimiento::TIPO_MOV_INGRESO;
                $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo($ins_stock_tipo_movimiento_codigo);
                $ins_insumo->setInsStockMovimiento($pdi_pedido_entrante, $pdi_estado, $ins_stock_tipo_movimiento, $ins_insumo_identificado_tipo_estado_actual, $ins_insumo_identificado_tipo_estado);


                // se registra por cada insumo identificado el movimiento de insumo identificado de SALIDA de Panol
                $array_insumo_movimiento = array(
                    'identificado_id' => $ins_insumo_identificado->getId(),
                    'instancia_id' => $ins_insumo_identificado_movimiento_actual->getInsInsumoInstanciaId(),
                    'km' => $ins_insumo_identificado_movimiento_actual->getKm(),
                    'tipo_estado_id' => $ins_insumo_identificado_movimiento_actual->getInsInsumoIdentificadoTipoEstadoId()
                );
                $descripcion = 'ReIngreso a ' . $pan_panol_origen->getDescripcion() . ' por Cancelación de Envío';
                $ins_tipo_movimiento = InsTipoMovimiento::getOxCodigo(InsTipoMovimiento::TIPO_PANOL_INGRESO);
                $ins_insumo_identificado->setInsInsumoIdentificadoActual($descripcion, $ins_tipo_movimiento->getId(), $pdi_pedido_entrante->getId(), $array_insumo_movimiento, $pan_panol_origen->getId(), $veh_coche_id = null, $observaciones = 'Por Envio ' . $ins_envio->getCodigo());
            }
        }
    }

    /**
     * Metodo que registra ajustes de movimientos de insumos por ventas de insumos
     * @param type $ins_insumo_identificado_id
     * @param type $panol_origen
     * @param type $panol_destino
     * @param type $observacion
     */
    static function setPdiPedidoPorVentaDeInsumoIdentificado(
    $pde_ov, $ins_insumo_identificado_id, $observacion = ''
    ) {
        $ins_insumo_identificado = InsInsumoIdentificado::getOxId($ins_insumo_identificado_id);
        $ins_insumo_identificado_movimiento_actual = $ins_insumo_identificado->getInsInsumoIdentificadoMovimientoActual();
        $ins_insumo = $ins_insumo_identificado->getInsInsumo();

        // se deduce insumo asingado actual o final
        $tal_insumo_asignado_actual_o_final = $ins_insumo_identificado->getTalInsumoAsignadoActual();
        if (!$tal_insumo_asignado_actual_o_final) {
            $tal_insumo_asignado_actual_o_final = $ins_insumo_identificado->getTalInsumoAsignadoFinal();
            if (!$tal_insumo_asignado_actual_o_final) {
                $tal_insumo_asignado_actual_o_final = new TalInsumoAsignado();
            }
        }

        $ins_insumo_identificado_tipo_estado_actual = $ins_insumo_identificado_movimiento_actual->getInsInsumoIdentificadoTipoEstado();
        $ins_insumo_identificado_tipo_estado = InsInsumoIdentificadoTipoEstado::getOxCodigo(InsInsumoIdentificadoTipoEstado::TIPO_VENDIDA);
        $ins_insumo_instancia = $ins_insumo_identificado_movimiento_actual->getInsInsumoInstancia();

        $panol_origen = $ins_insumo_identificado_movimiento_actual->getPanPanolId();
        $panol_destino = $ins_insumo_identificado_movimiento_actual->getPanPanolId();

        // se crea un nuevo pedido
        $pdi_pedido = new PdiPedido();
        $pdi_pedido->setInsInsumoId($ins_insumo->getId());
        $pdi_pedido->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_VENTA)->getId());
        $pdi_pedido->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_BAJA)->getId());
        $pdi_pedido->setPanPanolOrigen($panol_origen);
        $pdi_pedido->setPanPanolDestino($panol_destino);
        $pdi_pedido->setEstado(1);

        $pdi_pedido->save();
        $pdi_pedido->setCodigo($pdi_pedido->getCodigoConCeros());
        $pdi_pedido->save();

        // se registra estado del pedido, PdiEstado
        $pdi_estado = $pdi_pedido->setPdiPedidoEstado(
                PdiTipoEstado::TIPO_ESTADO_AJUSTADO, $cantidad = 1, $observacion
        );

        // se registran destinatarios del pedido, PdiPedidoDestinatario
        $pdi_pedido->setPdiPedidoDestinatarios();

        // se registra el movimiento de stock
        $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_BAJA);
        $ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento, $ins_insumo_identificado_tipo_estado_actual, $ins_insumo_identificado_tipo_estado);

        // se registra el movimiento del insumo identificado
        $array_insumo_movimiento = array(
            'identificado_id' => $ins_insumo_identificado->getId(),
            'instancia_id' => $ins_insumo_instancia->getId(),
            'km' => $tal_insumo_asignado_actual_o_final->getKmInsumoConsumo(),
            'km_total' => $tal_insumo_asignado_actual_o_final->getKmActualInsumo(),
            'tipo_estado_id' => $ins_insumo_identificado_tipo_estado->getId()
        );

        $descripcion = 'Venta de Insumo';
        $ins_tipo_movimiento = InsTipoMovimiento::getOxCodigo(InsTipoMovimiento::TIPO_VENTA);
        $ins_insumo_identificado->setInsInsumoIdentificadoActual($descripcion, $ins_tipo_movimiento->getId(), $pdi_pedido->getId(), $array_insumo_movimiento, $panol_origen, null, $observacion, null, null, null, $pde_ov->getId());
    }

    /**
     * Metodo que registra ajustes de movimientos de insumos por ventas de insumos
     * @param type $ins_insumo_identificado_id
     * @param type $panol_origen
     * @param type $panol_destino
     * @param type $observacion
     */
    static function setPdiPedidoPorVentaAnuladaDeInsumoIdentificado(
    $pde_ov, $ins_insumo_identificado_id, $observacion = ''
    ) {
        $ins_insumo_identificado = InsInsumoIdentificado::getOxId($ins_insumo_identificado_id);
        $ins_insumo_identificado_movimiento_actual = $ins_insumo_identificado->getInsInsumoIdentificadoMovimientoActual();
        $ins_insumo = $ins_insumo_identificado->getInsInsumo();

        // se deduce insumo asingado actual o final
        $tal_insumo_asignado_actual_o_final = $ins_insumo_identificado->getTalInsumoAsignadoActual();
        if (!$tal_insumo_asignado_actual_o_final) {
            $tal_insumo_asignado_actual_o_final = $ins_insumo_identificado->getTalInsumoAsignadoFinal();
            if (!$tal_insumo_asignado_actual_o_final) {
                $tal_insumo_asignado_actual_o_final = new TalInsumoAsignado();
            }
        }

        $ins_insumo_identificado_tipo_estado_actual = $ins_insumo_identificado_movimiento_actual->getInsInsumoIdentificadoTipoEstado();
        $ins_insumo_identificado_tipo_estado = InsInsumoIdentificadoTipoEstado::getOxCodigo(InsInsumoIdentificadoTipoEstado::TIPO_PARA_DESCARTE);
        $ins_insumo_instancia = $ins_insumo_identificado_movimiento_actual->getInsInsumoInstancia();

        $panol_origen = $ins_insumo_identificado_movimiento_actual->getPanPanolId();
        $panol_destino = $ins_insumo_identificado_movimiento_actual->getPanPanolId();

        // se crea un nuevo pedido
        $pdi_pedido = new PdiPedido();
        $pdi_pedido->setInsInsumoId($ins_insumo->getId());
        $pdi_pedido->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_AJUSTE)->getId());
        $pdi_pedido->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_BAJA)->getId());
        $pdi_pedido->setPanPanolOrigen($panol_origen);
        $pdi_pedido->setPanPanolDestino($panol_destino);
        $pdi_pedido->setEstado(1);

        $pdi_pedido->save();
        $pdi_pedido->setCodigo($pdi_pedido->getCodigoConCeros());
        $pdi_pedido->save();

        // se registra estado del pedido, PdiEstado
        $pdi_estado = $pdi_pedido->setPdiPedidoEstado(
                PdiTipoEstado::TIPO_ESTADO_AJUSTADO, $cantidad = 1, $observacion
        );

        // se registran destinatarios del pedido, PdiPedidoDestinatario
        $pdi_pedido->setPdiPedidoDestinatarios();

        // se registra el movimiento de stock
        $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_AJUSTE_POSITIVO);
        $ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento, $ins_insumo_identificado_tipo_estado_actual, $ins_insumo_identificado_tipo_estado);

        // se registra el movimiento del insumo identificado
        $array_insumo_movimiento = array(
            'identificado_id' => $ins_insumo_identificado->getId(),
            'instancia_id' => $ins_insumo_instancia->getId(),
            'km' => $tal_insumo_asignado_actual_o_final->getKmInsumoConsumo(),
            'km_total' => $tal_insumo_asignado_actual_o_final->getKmActualInsumo(),
            'tipo_estado_id' => $ins_insumo_identificado_tipo_estado->getId()
        );

        $descripcion = 'Anulacion de Venta ' . $pde_ov->getCodigo();
        $ins_tipo_movimiento = InsTipoMovimiento::getOxCodigo(InsTipoMovimiento::TIPO_AJUSTE_MANUAL);
        $ins_insumo_identificado->setInsInsumoIdentificadoActual($descripcion, $ins_tipo_movimiento->getId(), $pdi_pedido->getId(), $array_insumo_movimiento, $panol_origen, null, $observacion, null, null, null, null);
    }

    /**
     * Metodo que registra ajustes stock por transformaciones de insumos
     */
    static function setPdiPedidoPorTransformacionDeInsumo(
    $vp_arr_origen, $vp_arr_destino
    ) {
        foreach ($vp_arr_origen as $arr_origen) {
            $panol_id = $arr_origen['panol_id'];
            $insumo_id = $arr_origen['insumo_id'];
            $cantidad = $arr_origen['cantidad'];

            $pan_panol = PanPanol::getOxId($panol_id);
            $ins_insumo_origen = InsInsumo::getOxId($insumo_id);
            $cantidad_origen = $cantidad;
        }

        // se crea un nuevo pedido
        $pdi_pedido = new PdiPedido();
        $pdi_pedido->setInsInsumoId($ins_insumo_origen->getId());
        $pdi_pedido->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_TRANSFORMACION)->getId());
        $pdi_pedido->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_BAJA)->getId());
        $pdi_pedido->setPanPanolOrigen($pan_panol->getId());
        $pdi_pedido->setPanPanolDestino($pan_panol->getId());
        $pdi_pedido->setEstado(1);

        $pdi_pedido->save();
        $pdi_pedido->setCodigo($pdi_pedido->getCodigoConCeros());
        $pdi_pedido->save();

        // se registra estado del pedido, PdiEstado
        $pdi_estado = $pdi_pedido->setPdiPedidoEstado(
                PdiTipoEstado::TIPO_ESTADO_AJUSTADO, $cantidad_origen, $observacion = 'Transformado a Otro(s) ' . count($vp_arr_destino) . ' Insumos'
        );

        // se registran destinatarios del pedido, PdiPedidoDestinatario
        $pdi_pedido->setPdiPedidoDestinatarios();

        // se registra el movimiento de stock
        $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_AJUSTE_NEGATIVO);
        $ins_insumo_origen->setInsStockMovimiento($pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento, false, false, $observacion);


        // se registran pedidos y stock de tranformaciones
        foreach ($vp_arr_destino as $arr_destino) {
            $panol_id = $arr_destino['panol_id'];
            $insumo_id = $arr_destino['insumo_id'];
            $cantidad = $arr_destino['cantidad'];

            $pan_panol = PanPanol::getOxId($panol_id);
            $ins_insumo_destino = InsInsumo::getOxId($insumo_id);
            $cantidad_destino = $cantidad;

            // se crea un nuevo pedido
            $pdi_pedido = new PdiPedido();
            $pdi_pedido->setInsInsumoId($ins_insumo_destino->getId());
            $pdi_pedido->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_TRANSFORMACION)->getId());
            $pdi_pedido->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_BAJA)->getId());
            $pdi_pedido->setPanPanolOrigen($pan_panol->getId());
            $pdi_pedido->setPanPanolDestino($pan_panol->getId());
            $pdi_pedido->setEstado(1);

            $pdi_pedido->save();
            $pdi_pedido->setCodigo($pdi_pedido->getCodigoConCeros());
            $pdi_pedido->save();

            // se registra estado del pedido, PdiEstado
            $pdi_estado = $pdi_pedido->setPdiPedidoEstado(
                    PdiTipoEstado::TIPO_ESTADO_AJUSTADO, $cantidad_destino, $observacion = 'Transformado desde: ' . $ins_insumo_origen->getDescripcion()
            );

            // se registran destinatarios del pedido, PdiPedidoDestinatario
            $pdi_pedido->setPdiPedidoDestinatarios();

            // se registra el movimiento de stock
            $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_AJUSTE_POSITIVO);
            $ins_insumo_destino->setInsStockMovimiento($pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento, false, false, $observacion);
        }


        return $pdi_pedido;
    }

    /**
     * 
     * @param type $asunto
     */
    public function setRetrotraerMovimientoStock($asunto = '') {
        //return;
        // se obtienen los movimientos de stock vinculados al insumo
        $ins_stock_movimientos = $this->getInsStockMovimientos();
        foreach ($ins_stock_movimientos as $ins_stock_movimiento) {
            $ins_stock_movimiento->setCodigo('RETROTRAIDO');
            $ins_stock_movimiento->setObservacion($asunto);
            $ins_stock_movimiento->setEstado(0);
            $ins_stock_movimiento->save();
        }

        // se recalcula Resumen de Stock  
        $ins_insumo = $this->getInsInsumo();
        $pan_panol_id = $this->getPanPanolDestino();
        $pan_panol = PanPanol::getOxId($pan_panol_id);
        InsStockResumen::setRecalcularStockInsumo($pan_panol, $ins_insumo);
    }

    public function setRetrotraerInsumoAsignado() {
        //$tal_insumo_asignado = $tal_insumo_solicitado->getTalInsumoAsignado();
        //Gral::prr($tal_insumo_asignado);
        //$tal_insumo_asignado->setTalInsumoAsignadoRetrotraer();

        $ins_insumo = $this->getInsInsumo();
        $tal_insumo_solicitado = $this->getTalInsumoSolicitado();
        $tal_tarea_resuelta = $tal_insumo_solicitado->getTalTareaResuelta();
        $tal_tarea_asignada = $tal_tarea_resuelta->getTalTareaAsignada();
        $tal_orden_trabajo = $tal_tarea_asignada->getTalOrdenTrabajo();
        $veh_coche = $tal_orden_trabajo->getVehCoche();

        $tal_tarea_base = $tal_tarea_resuelta->getTalTareaBase();

        // Se identifica el insumo asignado, para eliminarlo
        //Gral::prr($tal_insumo_solicitado);
        if ($tal_insumo_solicitado) {

            // se identifica insumo actualmente imputado en coche por ultimo movimiento
            $c = new Criterio();
            $c->add(TalInsumoAsignado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
            $c->add(TalInsumoAsignado::GEN_ATTR_INS_INSUMO_ID, $ins_insumo->getId(), Criterio::IGUAL);
            $c->add(TalTareaResuelta::GEN_ATTR_TAL_TAREA_BASE_ID, $tal_tarea_base->getId(), Criterio::IGUAL);
            $c->add(TalOrdenTrabajo::GEN_ATTR_VEH_COCHE_ID, $veh_coche->getId(), Criterio::IGUAL);
            $c->addTabla(TalInsumoAsignado::GEN_TABLA);
            $c->addRealJoin(TalTareaResuelta::GEN_TABLA, TalTareaResuelta::GEN_ATTR_ID, TalInsumoAsignado::GEN_ATTR_TAL_TAREA_RESUELTA_ID);
            $c->addRealJoin(TalTareaAsignada::GEN_TABLA, TalTareaAsignada::GEN_ATTR_ID, TalTareaResuelta::GEN_ATTR_TAL_TAREA_ASIGNADA_ID);
            $c->addRealJoin(TalOrdenTrabajo::GEN_TABLA, TalOrdenTrabajo::GEN_ATTR_ID, TalTareaAsignada::GEN_ATTR_TAL_ORDEN_TRABAJO_ID);
            $c->setCriterios();

            $p = new Paginador(1, 1);
            $os = TalInsumoAsignado::getTalInsumoAsignados($p, $c);
            foreach ($os as $o) {
                //Gral::prr($o);
                // se identifica insumo actualmente imputado en coche por ultimo movimiento
                $c = new Criterio();
                $c->add(TalInsumoAsignado::GEN_ATTR_TAL_TAREA_RESUELTA_ID, $o->getTalTareaResueltaId(), Criterio::IGUAL);
                $c->add(TalInsumoAsignado::GEN_ATTR_AGRUPACION, $o->getAgrupacion(), Criterio::IGUAL);
                $c->add(TalInsumoAsignado::GEN_ATTR_INS_INSUMO_ID, $ins_insumo->getId(), Criterio::IGUAL);
                $c->add(TalTareaResuelta::GEN_ATTR_TAL_TAREA_BASE_ID, $tal_tarea_base->getId(), Criterio::IGUAL);
                $c->add(TalOrdenTrabajo::GEN_ATTR_VEH_COCHE_ID, $veh_coche->getId(), Criterio::IGUAL);
                $c->addTabla(TalInsumoAsignado::GEN_TABLA);
                $c->addRealJoin(TalTareaResuelta::GEN_TABLA, TalTareaResuelta::GEN_ATTR_ID, TalInsumoAsignado::GEN_ATTR_TAL_TAREA_RESUELTA_ID);
                $c->addRealJoin(TalTareaAsignada::GEN_TABLA, TalTareaAsignada::GEN_ATTR_ID, TalTareaResuelta::GEN_ATTR_TAL_TAREA_ASIGNADA_ID);
                $c->addRealJoin(TalOrdenTrabajo::GEN_TABLA, TalOrdenTrabajo::GEN_ATTR_ID, TalTareaAsignada::GEN_ATTR_TAL_ORDEN_TRABAJO_ID);
                $c->setCriterios();

                $os_historial = TalInsumoAsignado::getTalInsumoAsignados($p = null, $c);
                foreach ($os_historial as $o_historial) {
                    //Gral::prr($o_historial);
                    // se eliminan las asignaciones correspondientes al insumo actual
                    $o_historial->delete();
                }
            }
        }

        // se identifica el anterior insumo imputado, siempre que exista, para reactivarlo
        $c = new Criterio();
        $c->add(TalInsumoAsignado::GEN_ATTR_FINAL, 1, Criterio::IGUAL);
        $c->add(TalInsumoAsignado::GEN_ATTR_INS_INSUMO_ID, $ins_insumo->getId(), Criterio::IGUAL);
        $c->add(TalTareaResuelta::GEN_ATTR_TAL_TAREA_BASE_ID, $tal_tarea_base->getId(), Criterio::IGUAL);
        $c->add(TalOrdenTrabajo::GEN_ATTR_VEH_COCHE_ID, $veh_coche->getId(), Criterio::IGUAL);
        $c->addTabla(TalInsumoAsignado::GEN_TABLA);
        $c->addRealJoin(TalTareaResuelta::GEN_TABLA, TalTareaResuelta::GEN_ATTR_ID, TalInsumoAsignado::GEN_ATTR_TAL_TAREA_RESUELTA_ID);
        $c->addRealJoin(TalTareaAsignada::GEN_TABLA, TalTareaAsignada::GEN_ATTR_ID, TalTareaResuelta::GEN_ATTR_TAL_TAREA_ASIGNADA_ID);
        $c->addRealJoin(TalOrdenTrabajo::GEN_TABLA, TalOrdenTrabajo::GEN_ATTR_ID, TalTareaAsignada::GEN_ATTR_TAL_ORDEN_TRABAJO_ID);
        $c->addOrden(TalInsumoAsignado::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();

        $p = new Paginador(1, 1);
        $os = TalInsumoAsignado::getTalInsumoAsignados($p, $c);
        foreach ($os as $o) {
            //Gral::prr($o);
            // se reactiva la ultima asignacion finalizada
            $o->setActual(1);
            $o->setFinal(0);
            $o->save();
        }
    }

    public function getEsInsumoActualmenteImputado() {

        $ins_insumo = $this->getInsInsumo();
        $tal_insumo_solicitado = $this->getTalInsumoSolicitado();
        $tal_tarea_resuelta = $tal_insumo_solicitado->getTalTareaResuelta();
        $tal_tarea_asignada = $tal_tarea_resuelta->getTalTareaAsignada();
        $tal_orden_trabajo = $tal_tarea_asignada->getTalOrdenTrabajo();
        $veh_coche = $tal_orden_trabajo->getVehCoche();

        $tal_tarea_base = $tal_tarea_resuelta->getTalTareaBase();

        $c = new Criterio();
        $c->add(TalInsumoAsignado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->add(TalInsumoAsignado::GEN_ATTR_INS_INSUMO_ID, $ins_insumo->getId(), Criterio::IGUAL);
        $c->add(TalTareaResuelta::GEN_ATTR_TAL_TAREA_BASE_ID, $tal_tarea_base->getId(), Criterio::IGUAL);
        $c->add(TalOrdenTrabajo::GEN_ATTR_VEH_COCHE_ID, $veh_coche->getId(), Criterio::IGUAL);
        $c->add(TalInsumoSolicitado::GEN_ATTR_ID, $tal_insumo_solicitado->getId(), Criterio::IGUAL);
        $c->addTabla(TalInsumoAsignado::GEN_TABLA);
        $c->addRealJoin(TalTareaResuelta::GEN_TABLA, TalTareaResuelta::GEN_ATTR_ID, TalInsumoAsignado::GEN_ATTR_TAL_TAREA_RESUELTA_ID);
        $c->addRealJoin(TalTareaAsignada::GEN_TABLA, TalTareaAsignada::GEN_ATTR_ID, TalTareaResuelta::GEN_ATTR_TAL_TAREA_ASIGNADA_ID);
        $c->addRealJoin(TalOrdenTrabajo::GEN_TABLA, TalOrdenTrabajo::GEN_ATTR_ID, TalTareaAsignada::GEN_ATTR_TAL_ORDEN_TRABAJO_ID);
        $c->addRealJoin(TalInsumoSolicitado::GEN_TABLA, TalInsumoSolicitado::GEN_ATTR_ID, TalInsumoAsignado::GEN_ATTR_TAL_INSUMO_SOLICITADO_ID);
        $c->addOrden(TalInsumoAsignado::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();

        $p = new Paginador(1, 1);
        $os = TalInsumoAsignado::getTalInsumoAsignados($p, $c);
        //Gral::prr($os);
        foreach ($os as $o) {
            return true;
        }
        return false;
    }

    /**
     * Los pedidos con estado SOLICITADO para el usuario en sesion. 
     * Se puede determinar si el usuario SOLICITO o le SOLICITARON
     * @param string $tipo_origen
     * @return Collection $pdi_pedidos
     * @creado_por Esteban Martinez
     * @creado 21/11/2017
     */
    static function getPdiPedidoConEstadoSolicitado($tipo_origen) {
        $user = UsUsuario::autenticado();
        // se inicializan los galpons que el usuario puede gestionar
        $string_panoles_permitidos_para_in_ids = PanPanol::getArrayPanPanolIdsXCredencialParaComparadorIn();
        //$string_panoles_permitidos_para_in_ids = '(3, 5)';

        $criterio = new Criterio();
        $criterio->addDistinct(true);
        $criterio->addTabla('pdi_pedido');
        $criterio->addRealJoin('pdi_estado', 'pdi_estado.pdi_pedido_id', 'pdi_pedido.id');
        $criterio->addRealJoin('pdi_tipo_origen', 'pdi_tipo_origen.id', 'pdi_pedido.pdi_tipo_origen_id');
        $criterio->addRealJoin('pdi_tipo_estado', 'pdi_tipo_estado.id', 'pdi_estado.pdi_tipo_estado_id');

        $criterio->add('pdi_estado.actual', 1, Criterio::IGUAL);
        $criterio->add('pdi_tipo_origen.requiere_atencion', 1, Criterio::IGUAL);
        $criterio->add('pdi_tipo_estado.codigo', PdiTipoEstado::TIPO_ESTADO_SOLICITADO, Criterio::IGUAL);

        if (!$user->getAbsoluto()) {
            $criterio->addInicioSubconsulta();

            if ($tipo_origen == "origen") {
                $criterio->add('pdi_pedido.pan_panol_origen', $string_panoles_permitidos_para_in_ids, Criterio::IN, false, Criterio::_AND);
            } elseif ($tipo_origen == "destino") {
                $criterio->add('pdi_pedido.pan_panol_destino', $string_panoles_permitidos_para_in_ids, Criterio::IN, false, Criterio::_AND);
            }

            $criterio->addFinSubconsulta();
        }

        $criterio->setCriterios();

        $paginador = null;
        $pdi_pedidos = PdiPedido::getPdiPedidos($paginador, $criterio);

        return $pdi_pedidos;
    }

    /**
     * Los pedidos con estado ACEPTADO para el usuario en sesion. 
     * Se puede determinar si el usuario ACEPTO o le ACEPTARON
     * @param string $tipo_origen
     * @return Collection $pdi_pedidos
     * @creado_por Esteban Martinez
     * @creado 22/11/2017
     */
    static function getPdiPedidoConEstadoAceptado($tipo_origen) {
        $user = UsUsuario::autenticado();
        // se inicializan los galpons que el usuario puede gestionar
        $string_panoles_permitidos_para_in_ids = PanPanol::getArrayPanPanolIdsXCredencialParaComparadorIn();
        //$string_panoles_permitidos_para_in_ids = '(3, 5)';

        $criterio = new Criterio();
        $criterio->addDistinct(true);
        $criterio->addTabla('pdi_pedido');
        $criterio->addRealJoin('pdi_estado', 'pdi_estado.pdi_pedido_id', 'pdi_pedido.id');
        $criterio->addRealJoin('pdi_tipo_origen', 'pdi_tipo_origen.id', 'pdi_pedido.pdi_tipo_origen_id');
        $criterio->addRealJoin('pdi_tipo_estado', 'pdi_tipo_estado.id', 'pdi_estado.pdi_tipo_estado_id');

        $criterio->add('pdi_estado.actual', 1, Criterio::IGUAL);
        $criterio->add('pdi_tipo_origen.requiere_atencion', 1, Criterio::IGUAL);
        $criterio->add('pdi_tipo_estado.codigo', PdiTipoEstado::TIPO_ESTADO_ACEPTADO, Criterio::IGUAL);

        if (!$user->getAbsoluto()) {
            $criterio->addInicioSubconsulta();

            if ($tipo_origen == "origen") {
                $criterio->add('pdi_pedido.pan_panol_origen', $string_panoles_permitidos_para_in_ids, Criterio::IN, false, Criterio::_AND);
            } elseif ($tipo_origen == "destino") {
                $criterio->add('pdi_pedido.pan_panol_destino', $string_panoles_permitidos_para_in_ids, Criterio::IN, false, Criterio::_AND);
            }

            $criterio->addFinSubconsulta();
        }

        $criterio->setCriterios();

        $paginador = null;
        $pdi_pedidos = PdiPedido::getPdiPedidos($paginador, $criterio);

        return $pdi_pedidos;
    }

    /**
     * Los pedidos con estado DESPACHADO para el usuario en sesion. 
     * Se puede determinar si el usuario DESPACHO o le DESPACHARON
     * @param string $tipo_origen
     * @return Collection $pdi_pedidos
     * @creado_por Esteban Martinez
     * @creado 22/11/2017
     */
    static function getPdiPedidoConEstadoDespachado($tipo_origen) {
        $user = UsUsuario::autenticado();
        // se inicializan los galpons que el usuario puede gestionar
        $string_panoles_permitidos_para_in_ids = PanPanol::getArrayPanPanolIdsXCredencialParaComparadorIn();
        //$string_panoles_permitidos_para_in_ids = '(3, 5)';

        $criterio = new Criterio();
        $criterio->addDistinct(true);
        $criterio->addTabla('pdi_pedido');
        $criterio->addRealJoin('pdi_estado', 'pdi_estado.pdi_pedido_id', 'pdi_pedido.id');
        $criterio->addRealJoin('pdi_tipo_origen', 'pdi_tipo_origen.id', 'pdi_pedido.pdi_tipo_origen_id');
        $criterio->addRealJoin('pdi_tipo_estado', 'pdi_tipo_estado.id', 'pdi_estado.pdi_tipo_estado_id');

        $criterio->add('pdi_estado.actual', 1, Criterio::IGUAL);
        $criterio->add('pdi_tipo_origen.requiere_atencion', 1, Criterio::IGUAL);
        $criterio->add('pdi_tipo_estado.codigo', PdiTipoEstado::TIPO_ESTADO_DESPACHADO, Criterio::IGUAL);

        if (!$user->getAbsoluto()) {
            $criterio->addInicioSubconsulta();

            if ($tipo_origen == "origen") {
                $criterio->add('pdi_pedido.pan_panol_origen', $string_panoles_permitidos_para_in_ids, Criterio::IN, false, Criterio::_AND);
            } elseif ($tipo_origen == "destino") {
                $criterio->add('pdi_pedido.pan_panol_destino', $string_panoles_permitidos_para_in_ids, Criterio::IN, false, Criterio::_AND);
            }

            $criterio->addFinSubconsulta();
        }

        $criterio->setCriterios();

        $paginador = null;
        $pdi_pedidos = PdiPedido::getPdiPedidos($paginador, $criterio);

        return $pdi_pedidos;
    }

    /**
     * Los pedidos con estado RECHAZADO para el usuario en sesion. 
     * Se puede determinar si el usuario RECHAZO o le RECHAZARON
     * @param string $tipo_origen
     * @param int $cantidad_dias_desde
     * @return Collection $$pdi_pedidos
     * @creado_por Esteban Martinez
     * @creado 27/11/2017
     */
    static function getPdiPedidoConEstadoRechazado($tipo_origen, $cantidad_dias_desde) {
        $user = UsUsuario::autenticado();
        $fecha_hora_desde = Date::sumarDias(date('Y-m-d'), $cantidad_dias_desde);
        $fecha_hora_desde.= " 00:00:00";
        // se inicializan los galpons que el usuario puede gestionar
        $string_panoles_permitidos_para_in_ids = PanPanol::getArrayPanPanolIdsXCredencialParaComparadorIn();
        //$string_panoles_permitidos_para_in_ids = '(3, 5)';

        $criterio = new Criterio();
        $criterio->addDistinct(true);
        $criterio->addTabla('pdi_pedido');
        $criterio->addRealJoin('pdi_estado', 'pdi_estado.pdi_pedido_id', 'pdi_pedido.id');
        $criterio->addRealJoin('pdi_tipo_origen', 'pdi_tipo_origen.id', 'pdi_pedido.pdi_tipo_origen_id');
        $criterio->addRealJoin('pdi_tipo_estado', 'pdi_tipo_estado.id', 'pdi_estado.pdi_tipo_estado_id');
        $criterio->add('pdi_estado.actual', 1, Criterio::IGUAL);
        $criterio->add('pdi_tipo_origen.requiere_atencion', 1, Criterio::IGUAL);
        $criterio->add('pdi_tipo_estado.codigo', PdiTipoEstado::TIPO_ESTADO_RECHAZADO, Criterio::IGUAL);
        $criterio->add('pdi_estado.fechahora', $fecha_hora_desde, Criterio::MAYORIGUAL);

        if (!$user->getAbsoluto()) {
            $criterio->addInicioSubconsulta();

            if ($tipo_origen == "origen") {
                $criterio->add('pdi_pedido.pan_panol_origen', $string_panoles_permitidos_para_in_ids, Criterio::IN, false, Criterio::_AND);
            } elseif ($tipo_origen == "destino") {
                $criterio->add('pdi_pedido.pan_panol_destino', $string_panoles_permitidos_para_in_ids, Criterio::IN, false, Criterio::_AND);
            }

            $criterio->addFinSubconsulta();
        }

        $criterio->setCriterios();

        $paginador = null;
        $pdi_pedidos = PdiPedido::getPdiPedidos($paginador, $criterio);

        return $pdi_pedidos;
    }

    /**
     * Los pedidos con estado RECIBIDO para el usuario en sesion. 
     * Se puede determinar si el usuario RECIBIO o le RECIBIERON
     * @param string $tipo_origen
     * @param int $cantidad_dias_desde
     * @return Collection $$pdi_pedidos
     * @creado_por Esteban Martinez
     * @creado 27/11/2017
     */
    static function getPdiPedidoConEstadoRecibido($tipo_origen, $cantidad_dias_desde) {
        $user = UsUsuario::autenticado();
        $fecha_hora_desde = Date::sumarDias(date('Y-m-d'), $cantidad_dias_desde);
        $fecha_hora_desde.= " 00:00:00";
        // se inicializan los galpons que el usuario puede gestionar
        $string_panoles_permitidos_para_in_ids = PanPanol::getArrayPanPanolIdsXCredencialParaComparadorIn();
        //$string_panoles_permitidos_para_in_ids = '(3, 5)';

        $criterio = new Criterio();
        $criterio->addDistinct(true);
        $criterio->addTabla('pdi_pedido');
        $criterio->addRealJoin('pdi_estado', 'pdi_estado.pdi_pedido_id', 'pdi_pedido.id');
        $criterio->addRealJoin('pdi_tipo_origen', 'pdi_tipo_origen.id', 'pdi_pedido.pdi_tipo_origen_id');
        $criterio->addRealJoin('pdi_tipo_estado', 'pdi_tipo_estado.id', 'pdi_estado.pdi_tipo_estado_id');
        $criterio->add('pdi_estado.actual', 1, Criterio::IGUAL);
        $criterio->add('pdi_tipo_origen.requiere_atencion', 1, Criterio::IGUAL);
        $criterio->add('pdi_tipo_estado.codigo', PdiTipoEstado::TIPO_ESTADO_RECIBIDO, Criterio::IGUAL);
        $criterio->add('pdi_estado.fechahora', $fecha_hora_desde, Criterio::MAYORIGUAL);

        if (!$user->getAbsoluto()) {
            $criterio->addInicioSubconsulta();

            if ($tipo_origen == "origen") {
                $criterio->add('pdi_pedido.pan_panol_origen', $string_panoles_permitidos_para_in_ids, Criterio::IN, false, Criterio::_AND);
            } elseif ($tipo_origen == "destino") {
                $criterio->add('pdi_pedido.pan_panol_destino', $string_panoles_permitidos_para_in_ids, Criterio::IN, false, Criterio::_AND);
            }

            $criterio->addFinSubconsulta();
        }

        $criterio->setCriterios();

        $paginador = null;
        $pdi_pedidos = PdiPedido::getPdiPedidos($paginador, $criterio);

        return $pdi_pedidos;
    }

    /**
     * Retorna las ventas perdidas de un pdi_pedido
     * @param opcional string $cantidad_dias_desde
     * @return Collection $pdi_estados
     * @creado_por Esteban Martinez
     * @creado 28/11/2017
     * @modificado_por Esteban Martinez
     * @modificado 02/12/2017
     * @modificado 05/12/2017
     */
    static function getVentasPerdidas($tipo_origen, $cantidad_dias_desde = "") {
        $user = UsUsuario::autenticado();
        $string_panoles_permitidos_para_in_ids = PanPanol::getArrayPanPanolIdsXCredencialParaComparadorIn();

        $criterio = new Criterio();
        $criterio->addTabla(PdiPedido::GEN_TABLA);
        $criterio->addRealJoin(PdiTipoEstado::GEN_TABLA, PdiTipoEstado::GEN_ATTR_ID, PdiPedido::GEN_ATTR_PDI_TIPO_ESTADO_ID);
        $criterio->add(PdiPedido::GEN_ATTR_VENTA_PERDIDA, 1, Criterio::IGUAL);
        if (!empty($cantidad_dias_desde)) {
            $fecha_hora_desde = Date::sumarDias(date('Y-m-d'), $cantidad_dias_desde);
            $fecha_hora_desde.= " 00:00:00";
            $criterio->add(PdiPedido::GEN_ATTR_CREADO, $fecha_hora_desde, Criterio::MAYORIGUAL);
        }

        if (!$user->getAbsoluto()) {
            $criterio->addInicioSubconsulta();
            if ($tipo_origen == "destino") {
                $criterio->add('pdi_pedido.pan_panol_destino', $string_panoles_permitidos_para_in_ids, Criterio::IN, false, Criterio::_AND);
            }
            $criterio->addFinSubconsulta();
        }

        $criterio->addOrden(PdiPedido::GEN_ATTR_CREADO, Criterio::_DESC);
        $criterio->setCriterios();
        $paginador = null;
        $pdi_estados = PdiPedido::getPdiPedidos($paginador, $criterio);
        return $pdi_estados;
    }

    /**
     * YA NO SE UTILIZA. Antes de regeneral el modelo con los campos de venta_perdida y pdi_tipo_estado_id en PdiPedido se debia hacer de esta forma
     * Retorna las ventas perdidas de un pdi_pedido
     * @param opcional string $cantidad_dias_desde
     * @return Collection $pdi_estados
     * @creado_por Esteban Martinez
     * @creado 28/11/2017
     */
    static function getVentasPerdidasX($cantidad_dias_desde = "") {

        //Se va a regenerar el modelo para agregar a PdiPedido el 
        //Campo venta_perdida y luego solo se va a controlar desde pdi_pedido si es venta perdida

        $criterio = new Criterio();
        $criterio->addTabla(PdiEstado::GEN_TABLA);
        $criterio->addRealJoin(PdiPedido::GEN_TABLA, PdiPedido::GEN_ATTR_ID, PdiEstado::GEN_ATTR_PDI_PEDIDO_ID);
        $criterio->addRealJoin(PdiTipoEstado::GEN_TABLA, PdiTipoEstado::GEN_ATTR_ID, PdiEstado::GEN_ATTR_PDI_TIPO_ESTADO_ID);
        $criterio->add(PdiEstado::GEN_ATTR_VENTA_PERDIDA, 1, Criterio::IGUAL);

        if (!empty($cantidad_dias_desde)) {
            $fecha_hora_desde = Date::sumarDias(date('Y-m-d'), $cantidad_dias_desde);
            $fecha_hora_desde.= " 00:00:00";
            $criterio->add(PdiEstado::GEN_ATTR_FECHAHORA, $fecha_hora_desde, Criterio::MAYORIGUAL);
        }
        $criterio->addOrden(PdiEstado::GEN_ATTR_FECHAHORA, Criterio::_DESC);
        $criterio->setCriterios();

        $paginador = null;
        $pdi_estados = PdiEstado::getPdiEstados($paginador, $criterio);

        $arr_pdi_estados = array();
        foreach ($pdi_estados as $pdi_estado) {
            $arr_pdi_estados[$pdi_estado->getPdiPedidoId()] = $pdi_estado; //sobre escribe por el indice
        }

        return $arr_pdi_estados;
    }

    /**
     * Retorna los pedidos activos
     * @param panol_origen_id int el panol origen
     * @param ins_insumo_id int el insumo
     * @return Collection $pdi_pedidos
     * @creado_por Esteban Martinez
     * @creado 05/12/2017
     */
    static function getPdiPedidosActivos($panol_origen_id, $ins_insumo_id) {
        $criterio = new Criterio();
        $criterio->add(InsInsumo::GEN_ATTR_ID, $ins_insumo_id, Criterio::IGUAL);
        $criterio->add(PdiTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        $criterio->add(PdiTipoEstado::GEN_ATTR_TERMINAL, 1, Criterio::DISTINTO);
        $criterio->add(PdiPedido::GEN_ATTR_PAN_PANOL_ORIGEN, $panol_origen_id, Criterio::IGUAL);
        $criterio->add(PdiPedido::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $criterio->addTabla(PdiPedido::GEN_TABLA);
        $criterio->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, PdiPedido::GEN_ATTR_INS_INSUMO_ID);
        $criterio->addRealJoin(PdiTipoEstado::GEN_TABLA, PdiTipoEstado::GEN_ATTR_ID, PdiPedido::GEN_ATTR_PDI_TIPO_ESTADO_ID);
        $criterio->setCriterios();

        $pdi_pedidos = PdiPedido::getPdiPedidos(null, $criterio);
        return $pdi_pedidos;
    }

    public function getPdiPedidoDescripcionFull() {
        $texto = "";

        $ins_insumo = $this->getInsInsumo();
        $ins_unidad_medida = $ins_insumo->getInsUnidadMedida();
        $pdi_estado_actual = $this->getPdiEstadoActual();
        $pdi_tipo_estado_actual = $pdi_estado_actual->getPdiTipoEstado();

        $texto.= $pdi_estado_actual->getCantidad();
        $texto.= " ";
        $texto.= ($ins_unidad_medida) ? substr($ins_unidad_medida->getDescripcion(), 0, 3) : "";
        $texto.= " ";
        $texto.= substr($pdi_tipo_estado_actual->getDescripcion(), 0, 5);
        $texto.= " (";
        $texto.= $this->getPanPanolDestinoObj()->getDescripcion();
        $texto.= ") el ";
        $texto.= Gral::getFechaToWEB($pdi_estado_actual->getCreado());

        return $texto;
    }

    public function getPanPanolOrigenObj() {
        $id = self::getPanPanolOrigen();
        $pan_panol = PanPanol::getOxId($id);
        return $pan_panol;
    }

    public function getPanPanolDestinoObj() {
        $id = self::getPanPanolDestino();
        $pan_panol = PanPanol::getOxId($id);
        return $pan_panol;
    }

}

?>