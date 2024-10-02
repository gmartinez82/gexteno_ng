<?php 
require_once "base/BVtaTipoOrigenNotaCredito.php"; 
class VtaTipoOrigenNotaCredito extends BVtaTipoOrigenNotaCredito
{ 
    const ORIGEN_ITEM = 'ITEM';
    const ORIGEN_ANULACION_FACTURA = 'ANULACION_FACTURA';
    const ORIGEN_ANULACION_ND = 'ANULACION_ND';
    const ORIGEN_DESCUENTO_FINANCIERO = 'DESCUENTO_FINANCIERO';
}
?>