<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $gral_empresa_transportadora = new GralEmpresaTransportadora();
    $gral_empresa_transportadora->setId($id, false);
    $gral_empresa_transportadora->deleteAll();
}    
?>

