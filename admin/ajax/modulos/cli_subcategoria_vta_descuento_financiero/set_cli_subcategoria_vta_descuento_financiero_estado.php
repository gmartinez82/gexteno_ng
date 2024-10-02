<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_VTA_DESCUENTO_FINANCIERO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $cli_subcategoria_vta_descuento_financiero = CliSubcategoriaVtaDescuentoFinanciero::getOxId($id);
    if($cli_subcategoria_vta_descuento_financiero->getEstado() == 1){
        $cli_subcategoria_vta_descuento_financiero->setEstado(0);
    }else{
        $cli_subcategoria_vta_descuento_financiero->setEstado(1);
    }
    $cli_subcategoria_vta_descuento_financiero->cambiarEstado();
}        
?>

