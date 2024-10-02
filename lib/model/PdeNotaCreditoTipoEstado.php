<?php 
require_once "base/BPdeNotaCreditoTipoEstado.php"; 
class PdeNotaCreditoTipoEstado extends BPdeNotaCreditoTipoEstado
{
    const TIPO_GENERADO = 'GENERADO';
    const TIPO_PENDIENTE = 'PENDIENTE';
    const TIPO_IMPUTADO = 'IMPUTADO';
    const TIPO_IMPUTADO_PARCIAL = 'IMPUTADO_PARCIAL';
    const TIPO_ANULADO = 'ANULADO';
    const TIPO_ANULADO_PARCIAL = 'ANULADO_PARCIAL';
}
?>