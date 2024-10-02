<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GEN_PRCA_EJECUCION_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gen_prca_ejecucion = GenPrcaEjecucion::getOxId($id);
    if($gen_prca_ejecucion->getEstado() == 1){
        $gen_prca_ejecucion->setEstado(0);
    }else{
        $gen_prca_ejecucion->setEstado(1);
    }
    $gen_prca_ejecucion->cambiarEstado();
}        
?>

