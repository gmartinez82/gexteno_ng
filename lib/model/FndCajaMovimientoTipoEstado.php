<?php 
require_once "base/BFndCajaMovimientoTipoEstado.php"; 
class FndCajaMovimientoTipoEstado extends BFndCajaMovimientoTipoEstado
{
    const TIPO_GENERADO  = 'GENERADO';
    const TIPO_APROBADO  = 'APROBADO';
    const TIPO_ANULADO   = 'ANULADO';
    const TIPO_RECHAZADO = 'RECHAZADO';
}
?>