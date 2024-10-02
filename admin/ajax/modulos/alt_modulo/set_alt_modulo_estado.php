<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('ALT_MODULO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $alt_modulo = AltModulo::getOxId($id);
    if($alt_modulo->getEstado() == 1){
        $alt_modulo->setEstado(0);
    }else{
        $alt_modulo->setEstado(1);
    }
    $alt_modulo->cambiarEstado();
}        
?>

