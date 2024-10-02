<?php 
require_once "base/BCliClienteTipoEstadoVenta.php"; 
class CliClienteTipoEstadoVenta extends BCliClienteTipoEstadoVenta
{
    const TIPO_ESTADO_LEAD = 'LEAD';
    const TIPO_ESTADO_PROSPECTO = 'PROSPECTO';
    const TIPO_ESTADO_ACTIVO = 'ACTIVO';
    const TIPO_ESTADO_SEMIACTIVO = 'SEMIACTIVO';
    const TIPO_ESTADO_INACTIVO = 'INACTIVO';
    const TIPO_ESTADO_ZONA_CRITICA = 'ZONA_CRITICA';
    const TIPO_ESTADO_BAJA = 'BAJA';
    const TIPO_ESTADO_SIN_VENTAS = 'SIN_VENTAS';
}
?>