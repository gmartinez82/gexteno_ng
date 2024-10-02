<?php 
require_once "base/BVtaReciboTipoPago.php"; 
class VtaReciboTipoPago extends BVtaReciboTipoPago
{
    const TIPO_COBRO_INMEDIATO = 'COBRO_INMEDIATO';
    const TIPO_COBRO_CUENTA_CORRIENTE = 'COBRO_CUENTA_CORRIENTE';
    const TIPO_ADELANTO_DE_CLIENTES = 'ADELANTO_DE_CLIENTES';
}
?>