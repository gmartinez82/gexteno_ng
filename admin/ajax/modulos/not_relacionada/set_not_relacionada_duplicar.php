<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('NOT_RELACIONADA_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $not_relacionada = NotRelacionada::getOxId($id);
    $not_relacionada->duplicarNotRelacionada();
}    

