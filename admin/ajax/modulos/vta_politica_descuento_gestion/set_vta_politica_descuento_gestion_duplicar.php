<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $vta_politica_descuento = VtaPoliticaDescuento::getOxId($id);
    $vta_politica_descuento->duplicarVtaPoliticaDescuento();
}    

