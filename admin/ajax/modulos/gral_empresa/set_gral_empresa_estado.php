<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gral_empresa = GralEmpresa::getOxId($id);
    if($gral_empresa->getEstado() == 1){
        $gral_empresa->setEstado(0);
    }else{
        $gral_empresa->setEstado(1);
    }
    $gral_empresa->cambiarEstado();
}        
?>

