<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_EXENCION_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $pde_tributo_exencion = new PdeTributoExencion();
    $pde_tributo_exencion->setId($id, false);
    $pde_tributo_exencion->deleteAll();
}    
?>

