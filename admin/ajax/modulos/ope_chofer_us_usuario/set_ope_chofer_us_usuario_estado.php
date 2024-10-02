<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('OPE_CHOFER_US_USUARIO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ope_chofer_us_usuario = OpeChoferUsUsuario::getOxId($id);
    if($ope_chofer_us_usuario->getEstado() == 1){
        $ope_chofer_us_usuario->setEstado(0);
    }else{
        $ope_chofer_us_usuario->setEstado(1);
    }
    $ope_chofer_us_usuario->cambiarEstado();
}        
?>

