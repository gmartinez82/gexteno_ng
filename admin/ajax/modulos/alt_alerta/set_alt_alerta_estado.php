<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('ALT_ALERTA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $alt_alerta = AltAlerta::getOxId($id);
    if($alt_alerta->getEstado() == 1){
        $alt_alerta->setEstado(0);
    }else{
        $alt_alerta->setEstado(1);
    }
    $alt_alerta->cambiarEstado();
}        
?>

