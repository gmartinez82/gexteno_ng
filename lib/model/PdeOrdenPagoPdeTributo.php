<?php 
require_once "base/BPdeOrdenPagoPdeTributo.php"; 
class PdeOrdenPagoPdeTributo extends BPdeOrdenPagoPdeTributo
{
    
    public function getCodigoRetencion(){
        $codigo = $this->getCodigo();
        return $codigo;
    }
    
    
    static function getPdeOrdenPagoPdeTributosRetenciones($fecha_desde, $fecha_hasta) {

        $c = new Criterio();
        
        $c->add(PdeOrdenPagoTipoEstado::GEN_ATTR_ANULADO, 0, Criterio::IGUAL);
        $c->add(PdeOrdenPagoPdeTributo::GEN_ATTR_FECHA_EMISION, $fecha_desde, Criterio::MAYORIGUAL);
        $c->add(PdeOrdenPagoPdeTributo::GEN_ATTR_FECHA_EMISION, $fecha_hasta, Criterio::MENORIGUAL);
        
        $c->addTabla(PdeOrdenPagoPdeTributo::GEN_TABLA);
        $c->addRealJoin(PdeOrdenPago::GEN_TABLA, PdeOrdenPago::GEN_ATTR_ID, PdeOrdenPagoPdeTributo::GEN_ATTR_PDE_ORDEN_PAGO_ID);
        $c->addRealJoin(PdeOrdenPagoTipoEstado::GEN_TABLA, PdeOrdenPagoTipoEstado::GEN_ATTR_ID, PdeOrdenPago::GEN_ATTR_PDE_ORDEN_PAGO_TIPO_ESTADO_ID);
        $c->addRealJoin(PdeTributo::GEN_TABLA, PdeTributo::GEN_ATTR_ID, PdeOrdenPagoPdeTributo::GEN_ATTR_PDE_TRIBUTO_ID);
        $c->addOrden(PdeOrdenPagoPdeTributo::GEN_ATTR_FECHA_EMISION, Criterio::_ASC);
        $c->setCriterios();

        $p = null;

        $pde_orden_pago_pde_tributos_retencions = PdeOrdenPagoPdeTributo::getPdeOrdenPagoPdeTributos($p, $c);
        return $pde_orden_pago_pde_tributos_retencions;
    }
    
    public function getStringConcatenadoParaResumenATM(){
        $texto = '';
        
        $pde_orden_pago = $this->getPdeOrdenPago();
        $pde_tributo = $this->getPdeTributo();
        $prv_proveedor = $pde_orden_pago->getPrvProveedor();

        $fecha_emision = $this->getFechaEmision();
        $codigo_retencion = $this->getCodigoRetencion();
        $importe_imponible = round($this->getImporteImponible(), 2);
        $importe_tributo = round($this->getImporteTributo(), 2);
        $proveedor_cuit = $prv_proveedor->getCuit();
        $proveedor_domicilio = $prv_proveedor->getDomicilioLegal();
        $proveedor_razon_social = $prv_proveedor->getRazonSocial();
        $alicuota_porcentual = $pde_tributo->getAlicuotaPorcentual();
        
        $proveedor_domicilio = str_replace(',', '',$proveedor_domicilio);
        $proveedor_razon_social = str_replace(',', '',$proveedor_razon_social);
                
        $texto.= str_replace('/', '-',Gral::getFechaToWEB($fecha_emision));
        $texto.= Gral::REPORTES_SEPARADOR_STRING_ATM;
        $texto.= $codigo_retencion;
        $texto.= Gral::REPORTES_SEPARADOR_STRING_ATM;
        $texto.= $proveedor_razon_social;
        $texto.= Gral::REPORTES_SEPARADOR_STRING_ATM;
        $texto.= $proveedor_domicilio;
        $texto.= Gral::REPORTES_SEPARADOR_STRING_ATM;
        $texto.= $proveedor_cuit;
        $texto.= Gral::REPORTES_SEPARADOR_STRING_ATM;
        $texto.= $importe_imponible;
        $texto.= Gral::REPORTES_SEPARADOR_STRING_ATM;
        $texto.= $alicuota_porcentual;
      
        //15-12-1999,412323,PEREZ JULIO,San Martín 1718,11-1111111-3,100.00,2.5        
        return $texto;
    } 
}
?>