<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRV_INSUMO_COSTO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $prv_insumo_costo = new PrvInsumoCosto();
    $prv_insumo_costo->setId($id, false);
    $prv_insumo_costo->deleteAll();
}    
?>

