<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_REMITO_TIPO_ESTADO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $vta_remito_tipo_estado = new VtaRemitoTipoEstado();
    $vta_remito_tipo_estado->setId($id, false);
    $vta_remito_tipo_estado->deleteAll();
}    
?>

