<?php 
require_once "base/BVtaAjusteHaberTipoPago.php"; 
class VtaAjusteHaberTipoPago extends BVtaAjusteHaberTipoPago
{
    const TIPO_COBRO_INMEDIATO = 'COBRO_INMEDIATO';
    const TIPO_COBRO_CUENTA_CORRIENTE = 'COBRO_CUENTA_CORRIENTE';
    const TIPO_ADELANTO_DE_CLIENTES = 'ADELANTO_DE_CLIENTES';
    
}
?>