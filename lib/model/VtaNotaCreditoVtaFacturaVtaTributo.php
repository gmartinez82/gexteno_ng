<?php 
require_once "base/BVtaNotaCreditoVtaFacturaVtaTributo.php"; 
class VtaNotaCreditoVtaFacturaVtaTributo extends BVtaNotaCreditoVtaFacturaVtaTributo
{

    public function getVtaComprobante() {
        return $this->getVtaNotaCredito();
    }    

    public function getVtaTributo() {
        return $this->getVtaFacturaVtaTributo()->getVtaTributo();
    }  
    
    public function getStringConcatenadoParaResumenATM() {
        $texto = '';

        $vta_nota_credito = $this->getVtaNotaCredito();
        $vta_tributo = $this->getVtaTributo();
        $cli_cliente = $vta_nota_credito->getCliCliente();
        $vta_tipo_nota_credito = $vta_nota_credito->getVtaTipoNotaCredito();

        $fecha_emision = $vta_nota_credito->getFechaEmision();
        $vta_tipo_factura_codigo_atm = 'NC_' . $vta_tipo_nota_credito->getCodigoMin();
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