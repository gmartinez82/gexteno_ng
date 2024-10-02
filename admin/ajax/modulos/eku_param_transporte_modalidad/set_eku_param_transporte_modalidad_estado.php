<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_PARAM_TRANSPORTE_MODALIDAD_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_param_transporte_modalidad = EkuParamTransporteModalidad::getOxId($id);
    if($eku_param_transporte_modalidad->getEstado() == 1){
        $eku_param_transporte_modalidad->setEstado(0);
    }else{
        $eku_param_transporte_modalidad->setEstado(1);
    }
    $eku_param_transporte_modalidad->cambiarEstado();
}        
?>

