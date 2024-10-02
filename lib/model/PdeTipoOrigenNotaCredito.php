<?php 
require_once "base/BPdeTipoOrigenNotaCredito.php"; 
class PdeTipoOrigenNotaCredito extends BPdeTipoOrigenNotaCredito
{ 
    const ORIGEN_ITEM = 'ITEM';
    const ORIGEN_ANULACION_FACTURA = 'ANULACION_FACTURA';
    const ORIGEN_ANULACION_ND = 'ANULACION_ND';
}
?>