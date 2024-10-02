<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_TIPO_ORIGEN_RECIBO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $pde_tipo_origen_recibo = new PdeTipoOrigenRecibo();
    $pde_tipo_origen_recibo->setId($id, false);
    $pde_tipo_origen_recibo->deleteAll();
}    
?>

