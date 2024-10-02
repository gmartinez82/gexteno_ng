<?php
require_once "base/BVtaHojaRuta.php";

class VtaHojaRuta extends BVtaHojaRuta {

    const PREFIJO_HDR = 'HDR-';

    public function getDescripcion() {
        $texto = $this->getCodigo() . " - " . $this->getGralRuta()->getDescripcion() . " - " . Gral::getFechaToWEB($this->getFechaDespacho());
        return $texto;
    }

    public function getArrDescripcionExtendidaParaBackend() {
        $array = array();

        $array = array(
            'chofer' => array(
                'label' => 'Chofer',
                'dato' => $this->getOpeChofer()->getDescripcion(),
            ),
            'fecha-maximo-pedido' => array(
                'label' => 'Max Ped',
                'dato' => GRal::getFechaToWEB($this->getFechaMaximaPedido()),
            ),
            'observacion' => array(
                'label' => 'Obs',
                'dato' => $this->getObservacion(),
            ),
        );

        return $array;
    }

    public function getNombreArchivoAdjuntoHojaRuta() {
        return Gral::getConfig('conf_proyecto_min') . ' - Hoja Ruta #' . $this->getCodigo() . '.pdf';
    }

    /**
     * Inicializa o edita una hoja de ruta
     * @param int $vta_hoja_ruta_id
     * @param int $gral_ruta_id
     * @param int $ope_chofer_id
     * @param string $txt_fecha_despacho
     * @param string $observacion
     * @return object $vta_hoja_ruta
     */
    static function setHojaRuta($vta_hoja_ruta_id, $gral_ruta_id, $ope_chofer_id = false, $fecha_despacho = '', $fecha_maxima_pedido = '', $observacion = '') {
        if ($vta_hoja_ruta_id == 0) {
            $vta_hoja_ruta = new VtaHojaRuta();
        }
        elseif ($vta_hoja_ruta_id != 0) {
            $vta_hoja_ruta = VtaHojaRuta::getOxId($vta_hoja_ruta_id);
        }

        $vta_hoja_ruta->setGralRutaId($gral_ruta_id);

        if ($ope_chofer_id != 0) {
            $vta_hoja_ruta->setOpeChoferId($ope_chofer_id);
        }
        else {
            $vta_hoja_ruta->setOpeChoferId(null);
        }

        $vta_hoja_ruta->setFechaDespacho($fecha_despacho);
        $vta_hoja_ruta->setFechaMaximaPedido($fecha_maxima_pedido);
        $vta_hoja_ruta->setObservacion($observacion);
        $vta_hoja_ruta->setEstado(1);
        $vta_hoja_ruta->save();

        // se setea el codigo del remito
        $vta_hoja_ruta->setCodigo(self::PREFIJO_HDR . str_pad($vta_hoja_ruta->getId(), 8, 0, STR_PAD_LEFT));

        $vta_hoja_ruta->save();

        if ($vta_hoja_ruta_id == 0) {
            // se registra el estado inicial del remito
            $vta_hoja_ruta->setVtaHojaRutaEstado(VtaHojaRutaTipoEstado::TIPO_EN_PREPARACION, $observacion);
        }
        return $vta_hoja_ruta;
    }

    /**
     * Cambia el estado de una hoja de ruta
     *
     * @param string $codigo
     * @param string $observacion
     * @param int $ope_chofer_id
     * @return void
     */
    public function setVtaHojaRutaEstado($codigo, $observacion = '', $ope_chofer_id = 0) {
        $inicial = 1;
        $vta_hoja_ruta_estado = false;

        // se agrega el nuevo estado del remito
        $vta_hoja_ruta_tipo_estado = VtaHojaRutaTipoEstado::getOxCodigo($codigo);

        if ($vta_hoja_ruta_tipo_estado) {
            foreach ($this->getVtaHojaRutaEstados() as $vta_hoja_ruta_estado) {
                $vta_hoja_ruta_estado->setActual(0);
                $vta_hoja_ruta_estado->save();
                $inicial = 0;
            }

            $vta_hoja_ruta_estado = new VtaHojaRutaEstado();
            $vta_hoja_ruta_estado->setVtaHojaRutaId($this->getId());
            $vta_hoja_ruta_estado->setVtaHojaRutaTipoEstadoId($vta_hoja_ruta_tipo_estado->getId());
            $vta_hoja_ruta_estado->setInicial($inicial);
            $vta_hoja_ruta_estado->setActual(1);
            $vta_hoja_ruta_estado->setEstado(1);
            $vta_hoja_ruta_estado->setObservacion($observacion);
            $vta_hoja_ruta_estado->save();

            if ($ope_chofer_id) {
                $this->setOpeChoferId($ope_chofer_id);
            }
            $this->setVtaHojaRutaTipoEstadoId($vta_hoja_ruta_tipo_estado->getId());
            $this->save();
        }

        return $vta_hoja_ruta_estado;
    }

    /**
     * Trae hojas de ruta que sean editables
     *
     * @return void
     */
    static function getVtaHojaRutasEditablesCmb() {
        //hojas de ruta con estado EN PREPARACION nada mas
        $criterio = new Criterio();

        $criterio->addTabla(VtaHojaRuta::GEN_TABLA);
        $criterio->addRealJoin(VtaHojaRutaTipoEstado::GEN_TABLA, VtaHojaRutaTipoEstado::GEN_ATTR_ID, VtaHojaRuta::GEN_ATTR_VTA_HOJA_RUTA_TIPO_ESTADO_ID);
        $criterio->add(VtaHojaRuta::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $criterio->add(VtaHojaRutaTipoEstado::GEN_ATTR_EDITABLE, 1, Criterio::IGUAL);
        $criterio->setCriterios();

        $col = VtaHojaRuta::getVtaHojaRutas(null, $criterio);

        $cont = 0;
        $arr = array();
        foreach ($col as $o) {
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();
        }
        return $arr;
    }

    /**
     * Metodo que retorna comprobnates ordenados para HDR
     * @return array
     */
    public function getComprobantesOrdenados() {
        $arr_comprobantes = array();
        $arr_comprobantes_ordenado = array();

        $c = new Criterio();
        $c->addSelect(GralRutaGeoLocalidad::GEN_ATTR_ORDEN);
        $c->addSelect(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_ORDEN);
        $c->add(VtaHojaRuta::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaHojaRutaVtaRemito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        //$c->add(GralRutaGeoLocalidad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        //$c->addInicioSubconsulta();
        //$c->add(GralRutaGeoLocalidad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        //$c->add(GralRutaGeoLocalidad::GEN_ATTR_ESTADO, ' and true', Criterio::IS_NULL, false, Criterio::_OR);
        //$c->addFinSubconsulta();

        $c->addInicioSubconsulta();
        $c->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_ESTADO, ' and true', Criterio::IS_NULL, false, Criterio::_OR);
        $c->addFinSubconsulta();

        $c->addTabla(VtaHojaRutaVtaRemito::GEN_TABLA);
        $c->addRealJoin(VtaHojaRuta::GEN_TABLA, VtaHojaRuta::GEN_ATTR_ID, VtaHojaRutaVtaRemito::GEN_ATTR_VTA_HOJA_RUTA_ID);
        $c->addRealJoin(GralRuta::GEN_TABLA, GralRuta::GEN_ATTR_ID, VtaHojaRuta::GEN_ATTR_GRAL_RUTA_ID);
        $c->addRealJoin(VtaRemito::GEN_TABLA, VtaRemito::GEN_ATTR_ID, VtaHojaRutaVtaRemito::GEN_ATTR_VTA_REMITO_ID);
        $c->addRealJoin(CliCentroRecepcion::GEN_TABLA, CliCentroRecepcion::GEN_ATTR_ID, VtaRemito::GEN_ATTR_CLI_CENTRO_RECEPCION_ID);
        $c->addRealJoin(GralRutaGeoLocalidad::GEN_TABLA, GralRutaGeoLocalidad::GEN_ATTR_GEO_LOCALIDAD_ID, CliCentroRecepcion::GEN_ATTR_GEO_LOCALIDAD_ID, 'LEFT JOIN');
        $c->addRealJoin(GralRutaGeoLocalidadCliCentroRecepcion::GEN_TABLA, GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_CLI_CENTRO_RECEPCION_ID, CliCentroRecepcion::GEN_ATTR_ID, 'LEFT JOIN');
        $c->addOrden(GralRutaGeoLocalidad::GEN_ATTR_ORDEN, Criterio::_ASC);
        $c->addOrden(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_ORDEN, Criterio::_ASC);
        $c->setCriterios();

        $vta_hoja_ruta_vta_remitos = VtaHojaRutaVtaRemito::getVtaHojaRutaVtaRemitos(null, $c);
        //Gral::prr($vta_hoja_ruta_vta_remitos);

        $c = new Criterio();
        $c->addSelect(GralRutaGeoLocalidad::GEN_ATTR_ORDEN);
        $c->addSelect(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_ORDEN);
        $c->add(VtaHojaRuta::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        //$c->add(GralRutaGeoLocalidad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        //$c->addInicioSubconsulta();
        //$c->add(GralRutaGeoLocalidad::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        //$c->add(GralRutaGeoLocalidad::GEN_ATTR_ESTADO, ' and true', Criterio::IS_NULL, false, Criterio::_OR);
        //$c->addFinSubconsulta();
        //$c->addInicioSubconsulta();
        //$c->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        //$c->add(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_ESTADO, ' and true', Criterio::IS_NULL, false, Criterio::_OR);
        //$c->addFinSubconsulta();

        $c->addTabla(VtaHojaRutaVtaRemitoAjuste::GEN_TABLA);
        $c->addRealJoin(VtaHojaRuta::GEN_TABLA, VtaHojaRuta::GEN_ATTR_ID, VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_VTA_HOJA_RUTA_ID);
        $c->addRealJoin(GralRuta::GEN_TABLA, GralRuta::GEN_ATTR_ID, VtaHojaRuta::GEN_ATTR_GRAL_RUTA_ID);
        $c->addRealJoin(VtaRemitoAjuste::GEN_TABLA, VtaRemitoAjuste::GEN_ATTR_ID, VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_VTA_REMITO_AJUSTE_ID);
        $c->addRealJoin(CliCentroRecepcion::GEN_TABLA, CliCentroRecepcion::GEN_ATTR_ID, VtaRemitoAjuste::GEN_ATTR_CLI_CENTRO_RECEPCION_ID);
        $c->addRealJoin(GralRutaGeoLocalidad::GEN_TABLA, GralRutaGeoLocalidad::GEN_ATTR_GEO_LOCALIDAD_ID, CliCentroRecepcion::GEN_ATTR_GEO_LOCALIDAD_ID, 'LEFT JOIN');
        $c->addRealJoin(GralRutaGeoLocalidadCliCentroRecepcion::GEN_TABLA, GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_CLI_CENTRO_RECEPCION_ID, CliCentroRecepcion::GEN_ATTR_ID, 'LEFT JOIN');
        $c->addOrden(GralRutaGeoLocalidad::GEN_ATTR_ORDEN, Criterio::_ASC);
        $c->addOrden(GralRutaGeoLocalidadCliCentroRecepcion::GEN_ATTR_ORDEN, Criterio::_ASC);
        $c->setCriterios();

        $vta_hoja_ruta_vta_remito_ajustes = VtaHojaRutaVtaRemitoAjuste::getVtaHojaRutaVtaRemitoAjustes(null, $c);
        //Gral::prr($vta_hoja_ruta_vta_remitos);

        foreach ($vta_hoja_ruta_vta_remitos as $vta_hoja_ruta_vta_remito) {
            $vta_remito = $vta_hoja_ruta_vta_remito->getVtaRemito();
            $cli_centro_recepcion = $vta_remito->getCliCentroRecepcion();
            $geo_localidad = $cli_centro_recepcion->getGeoLocalidad();

            $arr_comprobantes[$geo_localidad->getId()][$cli_centro_recepcion->getId()][] = $vta_hoja_ruta_vta_remito;
        }

        foreach ($vta_hoja_ruta_vta_remito_ajustes as $vta_hoja_ruta_vta_remito_ajuste) {
            $vta_remito_ajuste = $vta_hoja_ruta_vta_remito_ajuste->getVtaRemitoAjuste();
            $cli_centro_recepcion = $vta_remito_ajuste->getCliCentroRecepcion();
            $geo_localidad = $cli_centro_recepcion->getGeoLocalidad();

            $arr_comprobantes[$geo_localidad->getId()][$cli_centro_recepcion->getId()][] = $vta_hoja_ruta_vta_remito_ajuste;
        }

        //Gral::prr($arr_comprobantes);

        foreach ($arr_comprobantes as $geo_localidad_id => $arr_centro_recepcions)
        {
            $gral_ruta_id = $this->getGralRutaId();

            // --------------------------------------------------------------------------
            // se ordena utilizando indices del array y otras claves de consulta
            // --------------------------------------------------------------------------
            uksort($arr_centro_recepcions, function($cli_centro_recepcion_id, $cli_centro_recepcion_id_comparacion) use ($gral_ruta_id, $geo_localidad_id){
                $array = array(
                    array('campo' => 'gral_ruta_id', 'valor' => $gral_ruta_id),
                    array('campo' => 'geo_localidad_id', 'valor' => $geo_localidad_id),
                    array('campo' => 'cli_centro_recepcion_id', 'valor' => $cli_centro_recepcion_id),
                );
                $gral_ruta_geo_localidad_cli_centro_recepcion = GralRutaGeoLocalidadCliCentroRecepcion::getOxArray($array);

                $array = array(
                    array('campo' => 'gral_ruta_id', 'valor' => $gral_ruta_id),
                    array('campo' => 'geo_localidad_id', 'valor' => $geo_localidad_id),
                    array('campo' => 'cli_centro_recepcion_id', 'valor' => $cli_centro_recepcion_id_comparacion),
                );
                $gral_ruta_geo_localidad_cli_centro_recepcion_comparacion = GralRutaGeoLocalidadCliCentroRecepcion::getOxArray($array);

                if ($gral_ruta_geo_localidad_cli_centro_recepcion && $gral_ruta_geo_localidad_cli_centro_recepcion_comparacion) {
                    $orden = $gral_ruta_geo_localidad_cli_centro_recepcion->getOrden();
                    $orden_comparacion = $gral_ruta_geo_localidad_cli_centro_recepcion_comparacion->getOrden();
        
                    if ($orden == $orden_comparacion){
                        return 0;
                    }
                }else {
                    return 0;
                }
        
                return ($orden > $orden_comparacion) ? 1 : -1;
            });
            $arr_comprobantes_ordenado[$geo_localidad_id] = $arr_centro_recepcions;

        }
        //Gral::prr($arr_comprobantes_ordenado);
        return $arr_comprobantes_ordenado;
    }

    //No se utiliza mas
    static function ordenarComprobantes($vta_comprobante_relacion, $vta_comprobante_relacion_comparacion) {
        $vta_comprobante = $vta_comprobante_relacion->getVtaComprobante();
        $vta_comprobante_comparacion = $vta_comprobante_relacion_comparacion->getVtaComprobante();

        $cli_centro_recepcion = $vta_comprobante->getCliCentroRecepcion();
        $cli_centro_recepcion_comparacion = $vta_comprobante_comparacion->getCliCentroRecepcion();

        $vta_hoja_ruta = $vta_comprobante->getVtaHojaRutaActiva();
        $vta_hoja_ruta_comparacion = $vta_comprobante_comparacion->getVtaHojaRutaActiva();

        $geo_localidad = $cli_centro_recepcion->getGeoLocalidad();
        $geo_localidad_comparacion = $cli_centro_recepcion_comparacion->getGeoLocalidad();

        $array = array(
            array('campo' => 'gral_ruta_id', 'valor' => $vta_hoja_ruta->getGralRutaId()),
            array('campo' => 'geo_localidad_id', 'valor' => $geo_localidad->getId()),
            array('campo' => 'cli_centro_recepcion_id', 'valor' => $cli_centro_recepcion->getId()),
        );
        $gral_ruta_geo_localidad_cli_centro_recepcion = GralRutaGeoLocalidadCliCentroRecepcion::getOxArray($array);

        $array = array(
            array('campo' => 'gral_ruta_id', 'valor' => $vta_hoja_ruta_comparacion->getGralRutaId()),
            array('campo' => 'geo_localidad_id', 'valor' => $geo_localidad_comparacion->getId()),
            array('campo' => 'cli_centro_recepcion_id', 'valor' => $cli_centro_recepcion_comparacion->getId()),
        );
        $gral_ruta_geo_localidad_cli_centro_recepcion_comparacion = GralRutaGeoLocalidadCliCentroRecepcion::getOxArray($array);

        if ($gral_ruta_geo_localidad_cli_centro_recepcion && $gral_ruta_geo_localidad_cli_centro_recepcion_comparacion) {
            $orden = $gral_ruta_geo_localidad_cli_centro_recepcion->getOrden();
            $orden_comparacion = $gral_ruta_geo_localidad_cli_centro_recepcion_comparacion->getOrden();

            if ($orden == $orden_comparacion){
                return 0;
            }
        }else {
            return 0;
        }

        return ($orden > $orden_comparacion) ? 1 : -1;
    }

    /**
     * Ordena una Ruta
     *
     * @param int $vta_hoja_ruta_id La hoja de ruta
     * @param string $ordenar_por El orden que se requiere. Puede ser orden por localidad o comprobante
     * @param array $arr_localidad_ids
     * @param array $arr_item_codigos
     * @return void
     */
    static function setOrdenarRuta($vta_hoja_ruta_id, $ordenar_por, $arr_localidad_ids, $arr_item_centro_recepcion_ids) {
        if ($vta_hoja_ruta_id && $ordenar_por) {
            $vta_hoja_ruta = VtaHojaRuta::getOxId($vta_hoja_ruta_id);
            $gral_ruta_id = $vta_hoja_ruta->getGralRutaId();
            
            if ($ordenar_por == 'localidad') {
                foreach ($arr_localidad_ids as $indice => $valor) {
                    $array = array(
                        array('campo' => 'gral_ruta_id', 'valor' => $gral_ruta_id),
                        array('campo' => 'geo_localidad_id', 'valor' => $valor),
                        //array('campo' => 'estado', 'valor' => 1),
                    );
                    $gral_ruta_geo_localidads = GralRutaGeoLocalidad::getOsxArray($array);
                    foreach ($gral_ruta_geo_localidads as $gral_ruta_geo_localidad) {
                        //Gral::prr($gral_ruta_geo_localidad);
                        //$gral_ruta_geo_localidad->setEstado(0);
                        //$gral_ruta_geo_localidad->save();
                        $gral_ruta_geo_localidad->delete();
                    }
                    
                    $gral_ruta_geo_localidad = new GralRutaGeoLocalidad();
                    $gral_ruta_geo_localidad->setGralRutaId($gral_ruta_id);
                    $gral_ruta_geo_localidad->setGeoLocalidadId($valor);
                    $gral_ruta_geo_localidad->setOrden($indice + 1);
                    $gral_ruta_geo_localidad->setEstado(1);
                    $gral_ruta_geo_localidad->save();
                }
            }
            
            if ($ordenar_por == 'comprobante') {
                foreach ($arr_item_centro_recepcion_ids as $indice => $valor) {
                    
                    $cli_centro_recepcion = CliCentroRecepcion::getOxId($valor);
                    
                    //$cli_cliente_id = $cli_centro_recepcion->getCliCliente()->getId();
                    if ($cli_centro_recepcion) {
                        $cli_cliente_id = $cli_centro_recepcion->getCliCliente()->getId();
                        $cli_centro_recepcion_id = $cli_centro_recepcion->getId();
                        $geo_localidad_id = $cli_centro_recepcion->getGeoLocalidadId();
                        
                        $array = array(
                            array('campo' => 'gral_ruta_id', 'valor' => $gral_ruta_id),
                            array('campo' => 'geo_localidad_id', 'valor' => $geo_localidad_id),
                            array('campo' => 'cli_centro_recepcion_id', 'valor' => $cli_centro_recepcion_id),
                            //array('campo' => 'estado', 'valor' => 1),
                        );
                        $gral_ruta_geo_localidad_cli_centro_recepcions = GralRutaGeoLocalidadCliCentroRecepcion::getOsxArray($array);
                        foreach ($gral_ruta_geo_localidad_cli_centro_recepcions as $gral_ruta_geo_localidad_cli_centro_recepcion) {
                            //$gral_ruta_geo_localidad_cli_centro_recepcion->setEstado(0);
                            //$gral_ruta_geo_localidad_cli_centro_recepcion->save();
                            $gral_ruta_geo_localidad_cli_centro_recepcion->delete();
                        }
                        
                        $gral_ruta_geo_localidad_cli_centro_recepcion = new GralRutaGeoLocalidadCliCentroRecepcion();
                        $gral_ruta_geo_localidad_cli_centro_recepcion->setGralRutaId($gral_ruta_id);
                        $gral_ruta_geo_localidad_cli_centro_recepcion->setGeoLocalidadId($geo_localidad_id);
                        $gral_ruta_geo_localidad_cli_centro_recepcion->setCliCentroRecepcionId($cli_centro_recepcion_id);
                        $gral_ruta_geo_localidad_cli_centro_recepcion->setCliClienteId($cli_cliente_id);
                        $gral_ruta_geo_localidad_cli_centro_recepcion->setOrden($indice + 1);
                        $gral_ruta_geo_localidad_cli_centro_recepcion->setEstado(1);
                        $gral_ruta_geo_localidad_cli_centro_recepcion->save();
                    }
                }
            }
        }
    }

}

?>