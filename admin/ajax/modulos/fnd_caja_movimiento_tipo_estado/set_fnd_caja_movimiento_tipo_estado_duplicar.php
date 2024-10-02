<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_TIPO_ESTADO_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $fnd_caja_movimiento_tipo_estado = FndCajaMovimientoTipoEstado::getOxId($id);
    $fnd_caja_movimiento_tipo_estado->duplicarFndCajaMovimientoTipoEstado();
}    

