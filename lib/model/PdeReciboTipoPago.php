<?php 
require_once "base/BPdeReciboTipoPago.php"; 
class PdeReciboTipoPago extends BPdeReciboTipoPago
{
    const TIPO_PAGO_INMEDIATO = 'PAGO_INMEDIATO';
    const TIPO_PAGO_CUENTA_CORRIENTE = 'PAGO_CUENTA_CORRIENTE';
    const TIPO_ADELANTO_A_PROVEEDORES = 'ADELANTO_A_PROVEEDORES';
}
?>