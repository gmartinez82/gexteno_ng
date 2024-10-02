<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GEN_API_PROYECTO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gen_api_proyecto = GenApiProyecto::getOxId($id);
    if($gen_api_proyecto->getEstado() == 1){
        $gen_api_proyecto->setEstado(0);
    }else{
        $gen_api_proyecto->setEstado(1);
    }
    $gen_api_proyecto->cambiarEstado();
}        
?>

