<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_TIPO_ORIGEN_NOTA_DEBITO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $vta_tipo_origen_nota_debito = new VtaTipoOrigenNotaDebito();
    $vta_tipo_origen_nota_debito->setId($id, false);
    $vta_tipo_origen_nota_debito->deleteAll();
}    
?>

