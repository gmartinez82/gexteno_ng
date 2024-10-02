<?php 
require_once "base/BPdeTipoOrigenFactura.php"; 
class PdeTipoOrigenFactura extends BPdeTipoOrigenFactura
{
    const ORIGEN_ORDEN_COMPRA = 'ORDEN_COMPRA';
    const ORIGEN_RECEPCION = 'RECEPCION';
    const ORIGEN_ITEM = 'ITEM';
}
?>