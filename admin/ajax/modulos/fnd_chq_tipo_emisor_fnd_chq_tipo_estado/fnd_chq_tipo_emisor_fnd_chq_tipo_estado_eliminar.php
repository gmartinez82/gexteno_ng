<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_EMISOR_FND_CHQ_TIPO_ESTADO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $fnd_chq_tipo_emisor_fnd_chq_tipo_estado = new FndChqTipoEmisorFndChqTipoEstado();
    $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->setId($id, false);
    $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->deleteAll();
}    
?>

