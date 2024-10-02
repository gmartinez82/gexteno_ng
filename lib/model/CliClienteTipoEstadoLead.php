<?php 
require_once "base/BCliClienteTipoEstadoLead.php"; 
class CliClienteTipoEstadoLead extends BCliClienteTipoEstadoLead
{
    const TIPO_ESTADO_NUEVO = 'NUEVO';
    const TIPO_ESTADO_LEAD_INACTIVO = 'LEAD_INACTIVO';
    const TIPO_ESTADO_LEAD_ACTIVO = 'LEAD_ACTIVO';
    const TIPO_ESTADO_REAL = 'REAL';
}
?>