<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_OPE_OPERARIO_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $prd_orden_trabajo_operacion_ope_operario = PrdOrdenTrabajoOperacionOpeOperario::getOxId($id);
    $prd_orden_trabajo_operacion_ope_operario->duplicarPrdOrdenTrabajoOperacionOpeOperario();
}    

