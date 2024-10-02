<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_ESTADO_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $fnd_chq_tipo_estado = FndChqTipoEstado::getOxId($id);
    $fnd_chq_tipo_estado->duplicarFndChqTipoEstado();
}    

