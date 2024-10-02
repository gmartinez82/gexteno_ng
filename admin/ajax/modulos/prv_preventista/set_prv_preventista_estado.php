<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRV_PREVENTISTA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $prv_preventista = PrvPreventista::getOxId($id);
    if($prv_preventista->getEstado() == 1){
        $prv_preventista->setEstado(0);
    }else{
        $prv_preventista->setEstado(1);
    }
    $prv_preventista->cambiarEstado();
}        
?>

