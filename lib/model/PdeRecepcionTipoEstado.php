<?php 
require_once "base/BPdeRecepcionTipoEstado.php"; 
class PdeRecepcionTipoEstado extends BPdeRecepcionTipoEstado
{
    const TIPO_RECIBIDO_DE_PROVEEDOR = 'RECIBIDO_DE_PROVEEDOR';
    const TIPO_DESPACHADO_A_PANOL = 'DESPACHADO_A_PANOL';
    const TIPO_RECIBIDO_POR_PANOL = 'RECIBIDO_POR_PANOL';
    const TIPO_FINALIZADO = 'FINALIZADO';
    
}
?>