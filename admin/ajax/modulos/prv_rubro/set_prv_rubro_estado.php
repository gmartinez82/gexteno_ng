<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRV_RUBRO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $prv_rubro = PrvRubro::getOxId($id);
    if($prv_rubro->getEstado() == 1){
        $prv_rubro->setEstado(0);
    }else{
        $prv_rubro->setEstado(1);
    }
    $prv_rubro->cambiarEstado();
}        
?>

