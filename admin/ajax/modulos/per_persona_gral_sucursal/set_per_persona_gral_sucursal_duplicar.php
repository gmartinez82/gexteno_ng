<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PER_PERSONA_GRAL_SUCURSAL_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $per_persona_gral_sucursal = PerPersonaGralSucursal::getOxId($id);
    $per_persona_gral_sucursal->duplicarPerPersonaGralSucursal();
}    

