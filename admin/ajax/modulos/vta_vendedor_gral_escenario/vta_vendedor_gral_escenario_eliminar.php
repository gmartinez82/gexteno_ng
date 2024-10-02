<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_GRAL_ESCENARIO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $vta_vendedor_gral_escenario = new VtaVendedorGralEscenario();
    $vta_vendedor_gral_escenario->setId($id, false);
    $vta_vendedor_gral_escenario->deleteAll();
}    
?>

