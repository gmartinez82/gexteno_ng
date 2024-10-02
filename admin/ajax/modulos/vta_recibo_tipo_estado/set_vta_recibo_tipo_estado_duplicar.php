<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_RECIBO_TIPO_ESTADO_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $vta_recibo_tipo_estado = VtaReciboTipoEstado::getOxId($id);
    $vta_recibo_tipo_estado->duplicarVtaReciboTipoEstado();
}    

