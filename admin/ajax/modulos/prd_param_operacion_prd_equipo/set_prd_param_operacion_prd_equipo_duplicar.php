<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_PRD_EQUIPO_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $prd_param_operacion_prd_equipo = PrdParamOperacionPrdEquipo::getOxId($id);
    $prd_param_operacion_prd_equipo->duplicarPrdParamOperacionPrdEquipo();
}    

