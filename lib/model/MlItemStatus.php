<?php 
require_once "base/BMlItemStatus.php"; 
class MlItemStatus extends BMlItemStatus
{
    const STATUS_ACTIVO = 'ACTIVO';
    const STATUS_CERRADO = 'CERRADO';
    const STATUS_INACTIVO = 'INACTIVO';
    const STATUS_ESPERANDO_ACTIVACION = 'ESPERANDO_ACTIVACION';
    const STATUS_PAUSADO = 'PAUSADO';
    const STATUS_REQUIERE_PAGO = 'REQUIERE_PAGO';
    const STATUS_BAJO_REVISION = 'BAJO_REVISION';
}
?>