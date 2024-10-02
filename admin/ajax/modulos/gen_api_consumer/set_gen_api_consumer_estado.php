<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GEN_API_CONSUMER_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gen_api_consumer = GenApiConsumer::getOxId($id);
    if($gen_api_consumer->getEstado() == 1){
        $gen_api_consumer->setEstado(0);
    }else{
        $gen_api_consumer->setEstado(1);
    }
    $gen_api_consumer->cambiarEstado();
}        
?>

