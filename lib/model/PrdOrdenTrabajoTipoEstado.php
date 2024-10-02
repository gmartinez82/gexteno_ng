<?php 
require_once "base/BPrdOrdenTrabajoTipoEstado.php"; 
class PrdOrdenTrabajoTipoEstado extends BPrdOrdenTrabajoTipoEstado
{
    const TIPO_NO_INICIADA = 'NO_INICIADA';
    const TIPO_EN_CURSO = 'EN_CURSO';
    const TIPO_CONFIGURADA = 'CONFIGURADA';
    const TIPO_FINALIZADA = 'FINALIZADA';
    const TIPO_ANULADO = 'ANULADO';
}
?>