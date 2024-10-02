<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_TIPO_ESTADO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $vta_presupuesto_tipo_estado = new VtaPresupuestoTipoEstado();
    $vta_presupuesto_tipo_estado->setId($id, false);
    $vta_presupuesto_tipo_estado->deleteAll();
}    
?>

