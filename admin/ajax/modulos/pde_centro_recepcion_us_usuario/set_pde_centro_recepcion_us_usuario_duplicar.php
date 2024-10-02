<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_US_USUARIO_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $pde_centro_recepcion_us_usuario = PdeCentroRecepcionUsUsuario::getOxId($id);
    $pde_centro_recepcion_us_usuario->duplicarPdeCentroRecepcionUsUsuario();
}    

