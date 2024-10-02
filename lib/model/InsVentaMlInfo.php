<?php

require_once "base/BInsVentaMlInfo.php";

class InsVentaMlInfo extends BInsVentaMlInfo {

    public function getDescripcion($proponer = false) {
        if (parent::getDescripcion() != '') {
            // ---------------------------------------------------------------------
            // si ya tiene algo registrado, se devuelve
            // ---------------------------------------------------------------------
            return parent::getDescripcion();
        } elseif ($proponer) {
            // ---------------------------------------------------------------------
            // si el testing esta activado se postea con unas palabras que indican que es publicacion de test
            // ---------------------------------------------------------------------
            $texto_testing = (MlConfig::CONFIG_TESTING) ? ' - No Ofertar (TEST)' : '';

            return str_replace($texto_testing, '', $this->getInsInsumo()->getDescripcion()) . $texto_testing;            
        }
    }

    public function getDescripcionFullParaML() {
        $observacion_breve = $this->getObservacionParaML();
        $descripcion_breve = $this->getDescripcionBreveParaML();
        $descripcion_empresa = $this->getDescripcionEmpresaParaML();
        
        $descripcion_sistema .= '' . PHP_EOL;
        $descripcion_sistema .= '' . PHP_EOL;
        $descripcion_sistema .= '--------------------------------------------------------------------------------' . PHP_EOL;
        $descripcion_sistema .= 'Publicaciones automáticas en Mercado Libre' . PHP_EOL;
        $descripcion_sistema .= Gral::getConfig('sistema_nombre').' - '.Gral::getConfig('sistema_descripcion') . PHP_EOL;
        $descripcion_sistema .= '--------------------------------------------------------------------------------' . PHP_EOL;

        return $observacion_breve.$descripcion_breve.$descripcion_empresa.$descripcion_sistema;
    }

    public function getObservacionParaML() {
        $descripcion_breve = str_replace('&#13;&#10;', PHP_EOL, $this->getInsInsumo()->getObservacion());
        $descripcion_breve .= '' . PHP_EOL;
        $descripcion_breve .= '' . PHP_EOL;
        
        return $descripcion_breve;
    }
    
    public function getDescripcionBreveParaML() {
        $descripcion_breve = str_replace('&#13;&#10;', PHP_EOL, parent::getDescripcionBreve());

        return $descripcion_breve;
    }

    public function getDescripcionBreve($proponer = false) {
        if (parent::getDescripcionBreve() != '') {
            // ---------------------------------------------------------------------
            // si ya tiene algo registrado, se devuelve
            // ---------------------------------------------------------------------
            return parent::getDescripcionBreve();
        } elseif ($proponer) {
            // ---------------------------------------------------------------------
            // si no tiene nada registrado, se genera una por default
            // ---------------------------------------------------------------------

            $ins_insumo = $this->getInsInsumo();
            $ins_insumo_veh_modelos = $ins_insumo->getInsInsumoVehModelos();
            $ins_insumo_ins_marcas = $ins_insumo->getInsInsumoInsMarcas();
            $ins_insumo_ins_atributos = $ins_insumo->getInsInsumoInsAtributos();

            $descripcion_breve = '';

            // -----------------------------------------------------------------
            // modelos de vehiculos
            // -----------------------------------------------------------------
            if (count($ins_insumo_veh_modelos) > 0) {
                $descripcion_breve .= 'Aplicable a los siguientes vehículos:' . PHP_EOL;
                foreach ($ins_insumo_veh_modelos as $ins_insumo_veh_modelo) {
                    $veh_modelo = $ins_insumo_veh_modelo->getVehModelo();
                    $descripcion_breve .= '- ' . $veh_modelo->getDescripcionFull() . PHP_EOL;
                }
                $descripcion_breve .= PHP_EOL;
            }

            // -----------------------------------------------------------------
            // marcas alternativas
            // -----------------------------------------------------------------
            if (count($ins_insumo_ins_marcas) > 0) {
                $descripcion_breve .= 'Marcas y Códigos alternativos:' . PHP_EOL;
                foreach ($ins_insumo_ins_marcas as $ins_insumo_ins_marca) {
                    $ins_marca = $ins_insumo_ins_marca->getInsMarca();
                    $descripcion_breve .= '- ' . $ins_marca->getDescripcion() . ': ' . $ins_insumo_ins_marca->getCodigo() . PHP_EOL;
                }
                $descripcion_breve .= PHP_EOL;
            }

            // -----------------------------------------------------------------
            // atributos del insumo
            // -----------------------------------------------------------------
            if (count($ins_insumo_ins_atributos) > 0) {
                $descripcion_breve .= 'Atributos Particulares del Producto:' . PHP_EOL;
                foreach ($ins_insumo_ins_atributos as $ins_insumo_ins_atributo) {
                    $ins_atributo = $ins_insumo_ins_atributo->getInsAtributo();
                    $ins_unidad_medida_atributo = $ins_insumo_ins_atributo->getInsUnidadMedidaAtributo();
                    $descripcion_breve .= '- ' . $ins_atributo->getDescripcion() . ': ' . $ins_insumo_ins_atributo->getValor() . ' ' . $ins_unidad_medida_atributo->getDescripcionCorta() . PHP_EOL;
                }
                $descripcion_breve .= PHP_EOL;
            }

            $descripcion_breve .= '---------------------------------------------------------------------------------' . PHP_EOL;
            $descripcion_breve .= 'La publicación incluye: 1 UNIDAD' . PHP_EOL;
            $descripcion_breve .= '---------------------------------------------------------------------------------' . PHP_EOL;

            return $descripcion_breve;
        }
    }

    public function getDescripcionEmpresaParaML() {
        $descripcion_empresa = str_replace('&#13;&#10;', PHP_EOL, parent::getDescripcionEmpresa());

        return $descripcion_empresa;
    }
    
    public function getDescripcionEmpresa($proponer = false) {
        if (parent::getDescripcionEmpresa() != '') {
            // ---------------------------------------------------------------------
            // si ya tiene algo registrado, se devuelve
            // ---------------------------------------------------------------------
            return parent::getDescripcionEmpresa();
        } elseif ($proponer) {
            $descripcion_empresa .= '' . PHP_EOL;
            $descripcion_empresa .= '>>>>> REPUESTOS LA ESTRELLA <<<<<' . PHP_EOL;
            $descripcion_empresa .= '' . PHP_EOL;
            $descripcion_empresa .= 'SOMOS IMPORTADORES Y DISTRIBUIDORES MAYORISTAS HACE MAS DE 40 AÑOS DE MARCAS LÍDERES EN EL MERCADO COMO:' . PHP_EOL;
            $descripcion_empresa .= 'ZF - TRW VARGA - SACHS - LEMFORDER - EURORICAMBI - PARKER RACOR - BOSCH - DELPHI' . PHP_EOL;
            $descripcion_empresa .= '' . PHP_EOL;
            $descripcion_empresa .= 'Te ofrecemos repuestos para camiones y ómnibus: SCANIA, IVECO, FORD, VOLKSWAGEN, RENAULT, VOLVO, MERCEDES BENZ' . PHP_EOL;
            $descripcion_empresa .= '' . PHP_EOL;
            $descripcion_empresa .= 'También contamos con Laboratorio de Inyección Diesel Electrónica' . PHP_EOL;
            $descripcion_empresa .= 'Reparamos y vendemos todo tipo de inyectores: common rail e inyectores bomba' . PHP_EOL;
            $descripcion_empresa .= '' . PHP_EOL;
            $descripcion_empresa .= 'Somos CONCESIONARIO OFICIAL ZF para reparaciones de cajas de cambio' . PHP_EOL;
            $descripcion_empresa .= 'Reparamos cajas Eaton Fuller, Scania, Mercedes Benz' . PHP_EOL;
            $descripcion_empresa .= '' . PHP_EOL;
            $descripcion_empresa .= 'Estamos ubicados en la ciudad de Leandro N. Alem - MISIONES - ' . PHP_EOL;
            $descripcion_empresa .= '' . PHP_EOL;
            $descripcion_empresa .= 'Horarios de atención:' . PHP_EOL;
            $descripcion_empresa .= '- Lunes a Viernes de 8:00 a 12:00 y 15:30 a 19:00' . PHP_EOL;
            $descripcion_empresa .= '- Sábados de 8:00 a 12:00' . PHP_EOL;
            $descripcion_empresa .= '' . PHP_EOL;
            $descripcion_empresa .= 'Estamos a su disposición para responder cualquier consulta con un asesor personal' . PHP_EOL;
            $descripcion_empresa .= '' . PHP_EOL;
            $descripcion_empresa .= '---------------------------------------------------------------------------------' . PHP_EOL;
            $descripcion_empresa .= '' . PHP_EOL;
            $descripcion_empresa .= 'FORMAS DE PAGO' . PHP_EOL;
            $descripcion_empresa .= 'Aceptamos efectivo, tarjetas (crédito y débito) y otros medios de pago a través de Mercado Pago' . PHP_EOL;
            $descripcion_empresa .= 'Recordá que tu compra está protegida por Mercadolibre' . PHP_EOL;
            $descripcion_empresa .= 'Emitimos factura "A" y "B"' . PHP_EOL;
            $descripcion_empresa .= '' . PHP_EOL;
            $descripcion_empresa .= '---------------------------------------------------------------------------------' . PHP_EOL;
            $descripcion_empresa .= '' . PHP_EOL;
            $descripcion_empresa .= 'FORMAS DE ENVÍO' . PHP_EOL;
            $descripcion_empresa .= '' . PHP_EOL;
            $descripcion_empresa .= 'HACEMOS ENVIOS A TODO EL PAÍS CON LAS SIGUIENTES FORMAS DE PAGO:' . PHP_EOL;
            $descripcion_empresa .= '- ENVÍO GRATIS con Mercado Envíos' . PHP_EOL;
            $descripcion_empresa .= '- Realizamos despachos con cualquier empresa de transporte a pedido/convenir' . PHP_EOL;
            $descripcion_empresa .= '- También podes retirar personalmente tu artículo de nuestra empresa' . PHP_EOL;
            $descripcion_empresa .= '' . PHP_EOL;
            $descripcion_empresa .= 'Despachamos en el día ofreciendo la opción que mejor se adapte a tus tiempos y necesidades' . PHP_EOL;
            $descripcion_empresa .= 'No se cobran gastos de embalaje ni despacho' . PHP_EOL;
            $descripcion_empresa .= 'La mercadería viaja por cuenta y riesgo del comprador, no somos responsables de extravíos o tiempos de logística' . PHP_EOL;
            $descripcion_empresa .= '' . PHP_EOL;
            $descripcion_empresa .= '¡TIEMPOS DE DESPACHOS RECORD!' . PHP_EOL;
            $descripcion_empresa .= '' . PHP_EOL;
            $descripcion_empresa .= '---------------------------------------------------------------------------------' . PHP_EOL;
            $descripcion_empresa .= '' . PHP_EOL;
            $descripcion_empresa .= 'REPUESTOSLAESTRELLA' . PHP_EOL;

            return $descripcion_empresa;
        }
    }
    
    public function setRegistrarAtributos($arr_atributos) {

        // ---------------------------------------------------------------------
        // se setean todos los atributos con estado cero para despues mantener solo
        // los activos de acuerdo a la categoria
        // ---------------------------------------------------------------------
        $ejec = new Ejecucion();
        $sql = "UPDATE " . InsVentaMlInfoMlAttribute::GEN_TABLA 
                . " SET " . InsVentaMlInfoMlAttribute::GEN_ATTR_MIN_ESTADO . " = 0"
                . " WHERE " . InsVentaMlInfoMlAttribute::GEN_ATTR_INS_VENTA_ML_INFO_ID . " = " . $this->getId()
                . " AND " . InsVentaMlInfoMlAttribute::GEN_ATTR_ESTADO . " = 1"
                ;
        $ejec->setSql($sql);
        $ejec->execute();
        
        // ---------------------------------------------------------------------
        // se registran atributos
        // ---------------------------------------------------------------------
        foreach ($arr_atributos as $arr_atributo) {

            $ml_attribute = MlAttribute::getOxCodigoMl($arr_atributo['id']);
            if ($ml_attribute) {
                $array = array(
                    array('campo' => InsVentaMlInfoMlAttribute::GEN_ATTR_MIN_INS_VENTA_ML_INFO_ID, 'valor' => $this->getId()),
                    array('campo' => InsVentaMlInfoMlAttribute::GEN_ATTR_MIN_ML_ATTRIBUTE_ID, 'valor' => $ml_attribute->getId()),
                );
                $ins_venta_ml_info_ml_attribute = InsVentaMlInfoMlAttribute::getOxArray($array);
                if (!$ins_venta_ml_info_ml_attribute) {
                    $ins_venta_ml_info_ml_attribute = new InsVentaMlInfoMlAttribute();
                    $ins_venta_ml_info_ml_attribute->setInsVentaMlInfoId($this->getId());
                    $ins_venta_ml_info_ml_attribute->setMlAttributeId($ml_attribute->getId());
                }
                if (trim($arr_atributo['value_id']) != '') {
                    $ins_venta_ml_info_ml_attribute->setMlValueId($arr_atributo['value_id']);
                } else {
                    $ins_venta_ml_info_ml_attribute->setMlValueValor($arr_atributo['value_valor']);
                }
                $ins_venta_ml_info_ml_attribute->setEstado(1);
                $ins_venta_ml_info_ml_attribute->save();
            }
        }
        $this->setEditado(1);
        $this->save();
    }

    public function getInsVentaMlInfoMlAttributeXMlAttribute($ml_attribute) {
        $c = new Criterio();
        $c->add(InsVentaMlInfoMlAttribute::GEN_ATTR_INS_VENTA_ML_INFO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(InsVentaMlInfoMlAttribute::GEN_ATTR_ML_ATTRIBUTE_ID, $ml_attribute->getId(), Criterio::IGUAL);
        $c->addTabla(InsVentaMlInfoMlAttribute::GEN_TABLA);
        $c->setCriterios();

        $ins_venta_ml_info_ml_attributes = InsVentaMlInfoMlAttribute::getInsVentaMlInfoMlAttributes(null, $c);
        foreach ($ins_venta_ml_info_ml_attributes as $ins_venta_ml_info_ml_attribute) {
            return $ins_venta_ml_info_ml_attribute;
        }
        return false;
    }

    /**
     * Metodo que recalcula el precio de venta en ML de acuerdo a lista de precio actualizada
     */
    public function setRecalcularPrecioParaML() {
        $ins_insumo = $this->getInsInsumo();
        $ins_tipo_lista_precio_mercadolibre = InsTipoListaPrecio::getOxCodigo(InsTipoListaPrecio::TIPO_PRECIO_MERCADOLIBRE);
        $ins_lista_precio = $ins_insumo->getInsInsumoListaPrecioXTipoLista($ins_tipo_lista_precio_mercadolibre);

        $importe = $ins_lista_precio->getImporteVentaConIVA();
        $importe = round($importe, 2);

        $this->setImporte($importe);
        $this->save();
    }
    
    public function getMlUltimaActualizacionDiferenciaMinutos(){
        $minutos = Date::getDiferenciaTiempo('i', $this->getMlUltimaActualizacion(), date('Y-m-d H:i:s'));
        $minutos = (int)$minutos;
        return $minutos;
    }

}

?>