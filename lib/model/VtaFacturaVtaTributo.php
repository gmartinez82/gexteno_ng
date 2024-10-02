<?php
require_once "base/BVtaFacturaVtaTributo.php";

class VtaFacturaVtaTributo extends BVtaFacturaVtaTributo {

    static function getVtaFacturaVtaTributosPercepcionesAClientes($fecha_desde, $fecha_hasta, $vta_tributo_id) {
        $arr = array();

        // ---------------------------------------------------------------------
        // se consultan facturas afectadas
        // ---------------------------------------------------------------------
        $c = new Criterio();
        if($vta_tributo_id != 0){
            $c->add(VtaTributo::GEN_ATTR_ID, $vta_tributo_id, Criterio::IGUAL);
        }
        $c->add(VtaFactura::GEN_ATTR_FECHA_EMISION, $fecha_desde, Criterio::MAYORIGUAL);
        $c->add(VtaFactura::GEN_ATTR_FECHA_EMISION, $fecha_hasta, Criterio::MENORIGUAL);
        $c->add(VtaFactura::GEN_ATTR_CAE, Criterio::VACIO, Criterio::DISTINTO);
        $c->addTabla(VtaFacturaVtaTributo::GEN_TABLA);
        $c->addRealJoin(VtaFactura::GEN_TABLA, VtaFactura::GEN_ATTR_ID, VtaFacturaVtaTributo::GEN_ATTR_VTA_FACTURA_ID);
        $c->addRealJoin(VtaTributo::GEN_TABLA, VtaTributo::GEN_ATTR_ID, VtaFacturaVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID);
        $c->setCriterios();

        $p = null;

        $vta_factura_vta_tributos = VtaFacturaVtaTributo::getVtaFacturaVtaTributos($p, $c);

        // ---------------------------------------------------------------------
        // se consultan NC afectadas (Items)
        // ---------------------------------------------------------------------
        $c = new Criterio();
        if($vta_tributo_id != 0){
            $c->add(VtaTributo::GEN_ATTR_ID, $vta_tributo_id, Criterio::IGUAL);
        }
        $c->add(VtaNotaCredito::GEN_ATTR_FECHA_EMISION, $fecha_desde, Criterio::MAYORIGUAL);
        $c->add(VtaNotaCredito::GEN_ATTR_FECHA_EMISION, $fecha_hasta, Criterio::MENORIGUAL);
        $c->add(VtaNotaCredito::GEN_ATTR_CAE, Criterio::VACIO, Criterio::DISTINTO);
        $c->addTabla(VtaNotaCreditoVtaTributo::GEN_TABLA);
        $c->addRealJoin(VtaNotaCredito::GEN_TABLA, VtaNotaCredito::GEN_ATTR_ID, VtaNotaCreditoVtaTributo::GEN_ATTR_VTA_NOTA_CREDITO_ID);
        $c->addRealJoin(VtaTributo::GEN_TABLA, VtaTributo::GEN_ATTR_ID, VtaNotaCreditoVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID);
        $c->setCriterios();

        $p = null;

        $vta_nota_credito_vta_tributos = VtaNotaCreditoVtaTributo::getVtaNotaCreditoVtaTributos($p, $c);

        // ---------------------------------------------------------------------
        // se consultan NC afectadas (Anulaciones de Facturas)
        // ---------------------------------------------------------------------
        $c = new Criterio();
        if($vta_tributo_id != 0){
            $c->add(VtaTributo::GEN_ATTR_ID, $vta_tributo_id, Criterio::IGUAL);
        }
        $c->add(VtaNotaCredito::GEN_ATTR_FECHA_EMISION, $fecha_desde, Criterio::MAYORIGUAL);
        $c->add(VtaNotaCredito::GEN_ATTR_FECHA_EMISION, $fecha_hasta, Criterio::MENORIGUAL);
        $c->add(VtaNotaCredito::GEN_ATTR_CAE, Criterio::VACIO, Criterio::DISTINTO);
        $c->addTabla(VtaNotaCreditoVtaFacturaVtaTributo::GEN_TABLA);
        $c->addRealJoin(VtaNotaCredito::GEN_TABLA, VtaNotaCredito::GEN_ATTR_ID, VtaNotaCreditoVtaFacturaVtaTributo::GEN_ATTR_VTA_NOTA_CREDITO_ID);
        $c->addRealJoin(VtaFacturaVtaTributo::GEN_TABLA, VtaFacturaVtaTributo::GEN_ATTR_ID, VtaNotaCreditoVtaFacturaVtaTributo::GEN_ATTR_VTA_FACTURA_VTA_TRIBUTO_ID);
        $c->addRealJoin(VtaTributo::GEN_TABLA, VtaTributo::GEN_ATTR_ID, VtaFacturaVtaTributo::GEN_ATTR_VTA_TRIBUTO_ID);
        $c->setCriterios();

        $p = null;

        $vta_nota_credito_vta_factura_vta_tributos = VtaNotaCreditoVtaFacturaVtaTributo::getVtaNotaCreditoVtaFacturaVtaTributos($p, $c);

        $arr = array_merge($vta_factura_vta_tributos, $vta_nota_credito_vta_tributos, $vta_nota_credito_vta_factura_vta_tributos);

        usort($arr, function($arr_1, $arr_2) {
            $fecha_1 = $arr_1->getCreado();
            $fecha_2 = $arr_2->getCreado();
            return ($fecha_1 < $fecha_2) ? 1 : -1;
        });

        return $arr;
    }

    public function getVtaComprobante() {
        return $this->getVtaFactura();
    }

    public function getStringConcatenadoParaResumenATM() {
        $texto = '';

        $vta_factura = $this->getVtaFactura();
        $vta_tributo = $this->getVtaTributo();
        $cli_cliente = $vta_factura->getCliCliente();
        $vta_tipo_factura = $vta_factura->getVtaTipoFactura();

        $fecha_emision = $vta_factura->getFechaEmision();
        $vta_tipo_factura_codigo_atm = 'FA_' . $vta_tipo_factura->getCodigoMin();
        $codigo_percepcion = $this->getId();
        $importe_imponible = round($this->getImporteImponible(), 2);
        $importe_tributo = round($this->getImporteTributo(), 2);
        $cliente_cuit = $cli_cliente->getCuit();
        $cliente_razon_social = $cli_cliente->getRazonSocial();
        $alicuota_porcentual = $vta_tributo->getAlicuotaPorcentual();

        $cliente_razon_social = str_replace(',', '', $cliente_razon_social);

        if ($vta_tributo->getCodigo() == VtaTributo::TRIBUTO_PERCEPCIONES_IIBB) {
            //15-12-1999,FA_A,412323,PEREZ JULIO,11-1111111-3,100.00,2.5        
            $texto .= str_replace('/', '-', Gral::getFechaToWEB($fecha_emision));
            $texto .= Gral::REPORTES_SEPARADOR_STRING_ATM;
            $texto .= $vta_tipo_factura_codigo_atm;
            $texto .= Gral::REPORTES_SEPARADOR_STRING_ATM;
            $texto .= $codigo_percepcion;
            $texto .= Gral::REPORTES_SEPARADOR_STRING_ATM;
            $texto .= $cliente_razon_social;
            $texto .= Gral::REPORTES_SEPARADOR_STRING_ATM;
            $texto .= $cliente_cuit;
            $texto .= Gral::REPORTES_SEPARADOR_STRING_ATM;
            $texto .= $importe_imponible;
            $texto .= Gral::REPORTES_SEPARADOR_STRING_ATM;
            $texto .= $alicuota_porcentual;
        }
        return $texto;
    }

    public function getStringConcatenadoParaResumenMunicipalidadPosadas() {
        $string = 'String Muni Posadas';
        return $string;
    }

}

?>