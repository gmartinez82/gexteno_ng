<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('AFIP_CITI_CABECERA_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $afip_citi_cabecera = new AfipCitiCabecera();
    $afip_citi_cabecera->setId($id, false);
    $afip_citi_cabecera->deleteAll();
}    
?>

