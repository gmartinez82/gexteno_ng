<?php 
require_once "base/BPdeOcTipoEstadoFacturacion.php"; 
class PdeOcTipoEstadoFacturacion extends BPdeOcTipoEstadoFacturacion
{ 
    const TIPO_ESTADO_NO_FACTURADO = 'NO_FACTURADO';
    const TIPO_ESTADO_FACTURA_PARCIAL = 'FACTURA_PARCIAL';
    const TIPO_ESTADO_FACTURA_TOTAL = 'FACTURA_TOTAL';
    
}
?>