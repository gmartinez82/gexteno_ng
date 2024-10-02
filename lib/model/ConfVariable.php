<?php

require_once "base/BConfVariable.php";

class ConfVariable extends BConfVariable {

    const CODIGO_CAE_ALTERNATIVO = '00000000000000';
    const CODIGO_CAE_AUTORIZADO = '11111111111111';
    const NUMERO_TIMBRADO_EKUATIA = '16472760';
    
    static function getVtaComprobanteDiasVencimientoDefault() {
        return 1;
    }

    static function getVtaComprobanteDiasVencimientoVentas() {
        return 1;
    }
    
    static function getVtaComprobanteMinimoParaRetencionesIIBB() {
        //return 300;
        return 1000; // actualizado el 06/06/2022
    }

    static function getPdeComprobanteMinimoParaRetencionesIIBB196() {
        //return 300;
        return 1000; // actualizado el 06/06/2022
    }

    static function getPdeComprobanteMinimoParaRetencionesIIBB331() {
        //return 300;
        return 1000; // actualizado el 06/06/2022
    }
    
    static function getVtaComprobanteMinimoParaPercepcionesIIBBMnes() {
        //return 300;
        return 1000; // actualizado el 06/06/2022
    }

    static function getVtaComprobanteMinimoParaPercepcionesTasaComercio() {
        return 50;
    }
    
    static function getVtaComprobanteMinimoExigenciaInfoCompradorConsumidorFinal() {
        return 99999999;
    }
    
    /**
     * Devuelve el importe del margen de estado saldado
     */
    static function getImporteMargenToleranciaConciliacionSaldado(){
        return 10;
    }

    /**
     * Devuelve el importe del margen de estado saldado
     */
    static function getImporteMargenToleranciaConciliacionAnulado(){
        return 1;
    }    

}

?>
