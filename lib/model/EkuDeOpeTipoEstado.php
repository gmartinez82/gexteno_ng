<?php 
require_once "base/BEkuDeOpeTipoEstado.php"; 
class EkuDeOpeTipoEstado extends BEkuDeOpeTipoEstado
{
    const TIPO_GENERADO = 'GENERADO';
    const TIPO_APROBADO = 'APROBADO';
    const TIPO_APROBADO_CON_OBSERVACION = 'APROBADO_CON_OBSERVACION';
    const TIPO_RECHAZADO = 'RECHAZADO';
}
?>