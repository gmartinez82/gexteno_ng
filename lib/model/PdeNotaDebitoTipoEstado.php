<?php 
require_once "base/BPdeNotaDebitoTipoEstado.php"; 
class PdeNotaDebitoTipoEstado extends BPdeNotaDebitoTipoEstado
{
    const TIPO_GENERADO = 'GENERADO';
    const TIPO_PENDIENTE = 'PENDIENTE';
    const TIPO_SALDADO = 'SALDADO';
    const TIPO_SALDADO_PARCIAL = 'SALDADO_PARCIAL';
    const TIPO_ANULADO = 'ANULADO';
    const TIPO_ANULADO_PARCIAL = 'ANULADO_PARCIAL';
    const TIPO_IMPUTADO = 'IMPUTADO';
    const TIPO_IMPUTADO_PARCIAL = 'IMPUTADO_PARCIAL';
}
?>