<?php 
require_once "base/BCliClienteTipoEstadoCuenta.php"; 
class CliClienteTipoEstadoCuenta extends BCliClienteTipoEstadoCuenta
{
    const TIPO_ESTADO_ACTIVO = 'ACTIVO';
    const TIPO_ESTADO_COMPROMISO_ASUMIDO = 'COMPROMISO_ASUMIDO';
    const TIPO_ESTADO_PROXIMO_A_BLOQUEO = 'PROXIMO_A_BLOQUEO';
    const TIPO_ESTADO_BLOQUEADO = 'BLOQUEADO';
}
?>