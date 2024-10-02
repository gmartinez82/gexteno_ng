<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_DEPARTAMENTO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_param_geo_departamento = EkuParamGeoDepartamento::getOxId($id);
    if($eku_param_geo_departamento->getEstado() == 1){
        $eku_param_geo_departamento->setEstado(0);
    }else{
        $eku_param_geo_departamento->setEstado(1);
    }
    $eku_param_geo_departamento->cambiarEstado();
}        
?>

