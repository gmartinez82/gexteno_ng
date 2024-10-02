<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('OS_ESTADO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $os_estado = OsEstado::getOxId($id);
    if($os_estado->getEstado() == 1){
        $os_estado->setEstado(0);
    }else{
        $os_estado->setEstado(1);
    }
    $os_estado->cambiarEstado();
}        
?>

