<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $prd_orden_trabajo = new PrdOrdenTrabajo();
    $prd_orden_trabajo->setId($id, false);
    $prd_orden_trabajo->deleteAll();
}    
?>

