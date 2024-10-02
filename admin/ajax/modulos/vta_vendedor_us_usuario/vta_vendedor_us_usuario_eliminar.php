<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_US_USUARIO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $vta_vendedor_us_usuario = new VtaVendedorUsUsuario();
    $vta_vendedor_us_usuario->setId($id, false);
    $vta_vendedor_us_usuario->deleteAll();
}    
?>

