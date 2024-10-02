<?php 
require_once "base/BVtaAjusteHaberCondicionPago.php"; 
class VtaAjusteHaberCondicionPago extends BVtaAjusteHaberCondicionPago
{
    const TIPO_EN_TERMINO = 'EN_TERMINO';
    const TIPO_RETRASADO = 'RETRASADO';
    const TIPO_FUERA_TERMINO = 'FUERA_TERMINO';
    const TIPO_ADELANTADO = 'ADELANTADO';
    
}
?>