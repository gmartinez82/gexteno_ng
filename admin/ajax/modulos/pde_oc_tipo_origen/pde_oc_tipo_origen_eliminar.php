<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_OC_TIPO_ORIGEN_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $pde_oc_tipo_origen = new PdeOcTipoOrigen();
    $pde_oc_tipo_origen->setId($id, false);
    $pde_oc_tipo_origen->deleteAll();
}    
?>

