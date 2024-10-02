<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('ALT_NIVEL_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $alt_nivel = AltNivel::getOxId($id);
    if($alt_nivel->getEstado() == 1){
        $alt_nivel->setEstado(0);
    }else{
        $alt_nivel->setEstado(1);
    }
    $alt_nivel->cambiarEstado();
}        
?>

