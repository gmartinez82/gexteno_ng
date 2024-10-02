<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_US_USUARIO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $prv_proveedor_us_usuario = new PrvProveedorUsUsuario();
    $prv_proveedor_us_usuario->setId($id, false);
    $prv_proveedor_us_usuario->deleteAll();
}    
?>

