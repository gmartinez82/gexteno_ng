<?php

class WsAfipProceso {

    /**
     * Metodo que se encarga de la autorizacion del ws de AFIP
     */
    static function getWsAfip($gral_empresa) {
        $cuit = $gral_empresa->getCuit();
        $wsaa = new WsAa($gral_empresa);

        if ($wsaa->get_expiration() < date("Y-m-d h:m:i")) {
            $wsaa->generar_TA();
        }

        $ws_afip = new WsAfip($cuit);

        // Carga el archivo TA.xml
        $ws_afip->openTA();

        return $ws_afip;
    }

    /**
     * Metodo que actualiza los puntos de venta desde ws de AFIP
     */
    static function setWsFeParamPuntoVentasDesdeWsAfip($gral_empresa) {

        $ws_afip = WsAfipProceso::getWsAfip($gral_empresa);

        // consultar info desde afip y almacenarlo en un array
        $arr_datos = $ws_afip->FEParamGetPtosVenta();

        foreach ($arr_datos as $arr_dato) {

            $numero = $arr_dato['numero'];

            // se consulta existencia del registro de bd local
            $criterio = new Criterio();
            $criterio->add(WsFeParamPuntoVenta::GEN_ATTR_GRAL_EMPRESA_ID, $gral_empresa->getId(), Criterio::IGUAL);
            $criterio->add(WsFeParamPuntoVenta::GEN_ATTR_NUMERO, $numero, Criterio::LIKE);
            $criterio->addTabla(WsFeParamPuntoVenta::GEN_TABLA);
            $criterio->setCriterios();

            $o = WsFeParamPuntoVenta::getWsFeParamPuntoVentas(null, $criterio);

            if (!$o) {
                // se crea registro local
                $o = new WsFeParamPuntoVenta();

                $o->setDescripcion($arr_dato['numero'].' '.$gral_empresa->getDescripcion());
                $o->setGralEmpresaId($gral_empresa->getId());
                $o->setCuit($gral_empresa->getCuit());
                $o->setNumero($arr_dato['numero']);
                $o->setTipoEmision($arr_dato['tipo_emision']);
                $o->setBloqueado($arr_dato['bloqueado']);
                $o->setFechaBaja($arr_dato['fecha_baja']);
                $o->save();
            } else {
                // se actualizan datos de regisitro local
                $o[0]->setTipoEmision($arr_dato['tipo_emision']);
                $o[0]->setBloqueado($arr_dato['bloqueado']);
                $o[0]->setFechaBaja($arr_dato['fecha_baja']);
                $o[0]->save();
            }
        }
        return $arr_datos;
    }

    /**
     * Metodo que actualiza los tipos de documentos desde ws de AFIP
     */
    static function setWsFeParamTipoDocumentosDesdeWsAfip($gral_empresa) {

        $ws_afip = WsAfipProceso::getWsAfip($gral_empresa);

        // consultar info desde afip y almacenarlo en un array
        $arr_datos = $ws_afip->FEParamGetTiposDoc();

        foreach ($arr_datos as $arr_dato) {

            $codigo_afip = $arr_dato['id'];

            // se consulta existencia del registro de bd local
            $o = WsFeParamTipoDocumento::getOxCodigoAfip($codigo_afip);

            if (!$o) {
                // se crea registro local
                $o = new WsFeParamTipoDocumento();

                $o->setCodigoAfip($arr_dato['id']);
                $o->setDescripcion($arr_dato['descripcion']);
                $o->setFechaDesde($arr_dato['fecha_desde']);
                $o->setFechaHasta($arr_dato['fecha_hasta']);
                $o->save();
            } else {
                // se actualizan datos de regisitro local
                $o->setDescripcion($arr_dato['descripcion']);
                $o->setFechaDesde($arr_dato['fecha_desde']);
                $o->setFechaHasta($arr_dato['fecha_hasta']);
                $o->save();
            }
        }
        return $arr_datos;
    }

    /**
     * Metodo que actualiza los tipos de conceptos desde ws de AFIP
     */
    static function setWsFeParamTipoConceptosDesdeWsAfip($gral_empresa) {

        $ws_afip = WsAfipProceso::getWsAfip($gral_empresa);

        // consultar info desde afip y almacenarlo en un array
        $arr_datos = $ws_afip->FEParamGetTiposConcepto();

        foreach ($arr_datos as $arr_dato) {

            $codigo_afip = $arr_dato['id'];

            // se consulta existencia del registro de bd local
            $o = WsFeParamTipoConcepto::getOxCodigoAfip($codigo_afip);

            if (!$o) {
                // se crea registro local
                $o = new WsFeParamTipoConcepto();

                $o->setCodigoAfip($arr_dato['id']);
                $o->setDescripcion($arr_dato['descripcion']);
                $o->setFechaDesde($arr_dato['fecha_desde']);
                $o->setFechaHasta($arr_dato['fecha_hasta']);
                $o->save();
            } else {
                // se actualizan datos de regisitro local
                $o->setDescripcion($arr_dato['descripcion']);
                $o->setFechaDesde($arr_dato['fecha_desde']);
                $o->setFechaHasta($arr_dato['fecha_hasta']);
                $o->save();
            }
        }
        return $arr_datos;
    }

    /**
     * Metodo que actualiza los tipos de comprobantes desde ws de AFIP
     */
    static function setWsFeParamTipoComprobantesDesdeWsAfip($gral_empresa) {

        $ws_afip = WsAfipProceso::getWsAfip($gral_empresa);

        // consultar info desde afip y almacenarlo en un array
        $arr_datos = $ws_afip->FEParamGetTiposCbte();

        foreach ($arr_datos as $arr_dato) {

            $codigo_afip = $arr_dato['id'];

            // se consulta existencia del registro de bd local
            $o = WsFeParamTipoComprobante::getOxCodigoAfip($codigo_afip);

            if (!$o) {
                // se crea registro local
                $o = new WsFeParamTipoComprobante();

                $o->setCodigoAfip($arr_dato['id']);
                $o->setDescripcion($arr_dato['descripcion']);
                $o->setFechaDesde($arr_dato['fecha_desde']);
                $o->setFechaHasta($arr_dato['fecha_hasta']);
                $o->save();
            } else {
                // se actualizan datos de regisitro local
                $o->setDescripcion($arr_dato['descripcion']);
                $o->setFechaDesde($arr_dato['fecha_desde']);
                $o->setFechaHasta($arr_dato['fecha_hasta']);
                $o->save();
            }
        }
        return $arr_datos;
    }

    /**
     * Metodo que actualiza los tipos de moneda desde ws de AFIP
     */
    static function setWsFeParamTipoMonedasDesdeWsAfip($gral_empresa) {

        $ws_afip = WsAfipProceso::getWsAfip($gral_empresa);

        // consultar info desde afip y almacenarlo en un array
        $arr_datos = $ws_afip->FEParamGetTiposMonedas();

        foreach ($arr_datos as $arr_dato) {

            $codigo_afip = $arr_dato['id'];

            // se consulta existencia del registro de bd local
            $o = WsFeParamTipoMoneda::getOxCodigoAfip($codigo_afip);

            if (!$o) {
                // se crea registro local
                $o = new WsFeParamTipoMoneda();

                $o->setCodigoAfip($arr_dato['id']);
                $o->setDescripcion($arr_dato['descripcion']);
                $o->setFechaDesde($arr_dato['fecha_desde']);
                $o->setFechaHasta($arr_dato['fecha_hasta']);
                $o->save();
            } else {
                // se actualizan datos de regisitro local
                $o->setDescripcion($arr_dato['descripcion']);
                $o->setFechaDesde($arr_dato['fecha_desde']);
                $o->setFechaHasta($arr_dato['fecha_hasta']);
                $o->save();
            }
        }
        return $arr_datos;
    }

    /**
     * Metodo que actualiza los tipos de paices desde ws de AFIP
     */
    static function setWsFeParamTipoPaisDesdeWsAfip($gral_empresa) {

        $ws_afip = WsAfipProceso::getWsAfip($gral_empresa);

        // consultar info desde afip y almacenarlo en un array
        $arr_datos = $ws_afip->FEParamGetTiposPaises();

        foreach ($arr_datos as $arr_dato) {

            $codigo_afip = $arr_dato['id'];

            // se consulta existencia del registro de bd local
            $o = WsFeParamTipoPais::getOxCodigoAfip($codigo_afip);

            if (!$o) {
                // se crea registro local
                $o = new WsFeParamTipoPais();

                $o->setCodigoAfip($arr_dato['id']);
                $o->setDescripcion($arr_dato['descripcion']);
                $o->save();
            } else {
                // se actualizan datos de regisitro local
                $o->setDescripcion($arr_dato['descripcion']);
                $o->save();
            }
        }
        return $arr_datos;
    }

    /**
     * Metodo que actualiza los tipos de opcional desde ws de AFIP
     */
    static function setWsFeParamTipoOpcionalDesdeWsAfip($gral_empresa) {

        $ws_afip = WsAfipProceso::getWsAfip($gral_empresa);

        // consultar info desde afip y almacenarlo en un array
        $arr_datos = $ws_afip->FEParamGetTiposOpcional();

        foreach ($arr_datos as $arr_dato) {

            $codigo_afip = $arr_dato['id'];

            // se consulta existencia del registro de bd local
            $o = WsFeParamTipoOpcional::getOxCodigoAfip($codigo_afip);

            if (!$o) {
                // se crea registro local
                $o = new WsFeParamTipoOpcional();

                $o->setCodigoAfip($arr_dato['id']);
                $o->setDescripcion($arr_dato['descripcion']);
                $o->setFechaDesde($arr_dato['fecha_desde']);
                $o->setFechaHasta($arr_dato['fecha_hasta']);
                $o->save();
            } else {
                // se actualizan datos de regisitro local
                $o->setDescripcion($arr_dato['descripcion']);
                $o->setFechaDesde($arr_dato['fecha_desde']);
                $o->setFechaHasta($arr_dato['fecha_hasta']);
                $o->save();
            }
        }
        return $arr_datos;
    }

    /**
     * Metodo que actualiza los tipos de iva desde ws de AFIP
     */
    static function setWsFeParamTipoIvaDesdeWsAfip($gral_empresa) {

        $ws_afip = WsAfipProceso::getWsAfip($gral_empresa);

        // consultar info desde afip y almacenarlo en un array
        $arr_datos = $ws_afip->FEParamGetTiposIva();

        foreach ($arr_datos as $arr_dato) {

            $codigo_afip = $arr_dato['id'];

            // se consulta existencia del registro de bd local
            $o = WsFeParamTipoIva::getOxCodigoAfip($codigo_afip);
            
            if (!$o) {
                // se crea registro local
                $o = new WsFeParamTipoIva();
                $o->setCodigoAfip($arr_dato['id']);
                $o->setDescripcion($arr_dato['descripcion']);
                $o->setFechaDesde($arr_dato['fecha_desde']);
                $o->setFechaHasta($arr_dato['fecha_hasta']);
                $o->save();
            }
            else {
                // se actualizan datos de regisitro local
                $o->setDescripcion($arr_dato['descripcion']);
                $o->setFechaDesde($arr_dato['fecha_desde']);
                $o->setFechaHasta($arr_dato['fecha_hasta']);
                $o->save();
            }
        }
        return $arr_datos;
    }

    /**
     * Metodo que actualiza los tipos de tributo desde ws de AFIP
     */
    static function setWsFeParamTipoTributoDesdeWsAfip($gral_empresa) {

        $ws_afip = WsAfipProceso::getWsAfip($gral_empresa);

        // consultar info desde afip y almacenarlo en un array
        $arr_datos = $ws_afip->FEParamGetTiposTributos();

        foreach ($arr_datos as $arr_dato) {

            $codigo_afip = $arr_dato['id'];

            // se consulta existencia del registro de bd local
            $o = WsFeParamTipoTributo::getOxCodigoAfip($codigo_afip);

            if (!$o) {
                // se crea registro local
                $o = new WsFeParamTipoTributo();

                $o->setCodigoAfip($arr_dato['id']);
                $o->setDescripcion($arr_dato['descripcion']);
                $o->setFechaDesde($arr_dato['fecha_desde']);
                $o->setFechaHasta($arr_dato['fecha_hasta']);
                $o->save();
            } else {
                // se actualizan datos de regisitro local
                $o->setDescripcion($arr_dato['descripcion']);
                $o->setFechaDesde($arr_dato['fecha_desde']);
                $o->setFechaHasta($arr_dato['fecha_hasta']);
                $o->save();
            }
        }
        return $arr_datos;
    }

    /**
     * Método Dummy para verificación de funcionamiento de infraestructura.
     * @return type
     */
    static function FEDummy($gral_empresa) {
        
        $ws_afip = WsAfipProceso::getWsAfip($gral_empresa);

        // consultar info desde afip y almacenarlo en un array
        $arr_datos = $ws_afip->FEDummy();

        return $arr_datos;
    }
}
