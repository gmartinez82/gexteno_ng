<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_VTA_DESCUENTO_FINANCIERO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $cli_subcategoria_vta_descuento_financiero = new CliSubcategoriaVtaDescuentoFinanciero();
    $cli_subcategoria_vta_descuento_financiero->setId($id, false);
    $cli_subcategoria_vta_descuento_financiero->deleteAll();
}    
?>

