<?php 
require_once "base/BVtaAjusteHaberTipoEstado.php"; 
class VtaAjusteHaberTipoEstado extends BVtaAjusteHaberTipoEstado
{
    const TIPO_GENERADO = 'GENERADO';
    const TIPO_RECHAZADO_AFIP = 'RECHAZADO_AFIP';
    const TIPO_OBSERVADO_AFIP = 'OBSERVADO_AFIP';
    const TIPO_APROBADO_AFIP = 'APROBADO_AFIP';
    const TIPO_PENDIENTE = 'PENDIENTE';
    const TIPO_IMPUTADO = 'IMPUTADO';
    const TIPO_IMPUTADO_PARCIAL = 'IMPUTADO_PARCIAL';
    const TIPO_ANULADO = 'ANULADO';
    const TIPO_ANULADO_PARCIAL = 'ANULADO_PARCIAL';
    const TIPO_SALDADO = 'SALDADO';
    const TIPO_SALDADO_PARCIAL = 'SALDADO_PARCIAL';
}
?>