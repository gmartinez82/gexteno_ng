<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_RECIBO_ARCHIVO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_recibo_archivo = VtaReciboArchivo::getOxId($id);
    if($vta_recibo_archivo->getEstado() == 1){
        $vta_recibo_archivo->setEstado(0);
    }else{
        $vta_recibo_archivo->setEstado(1);
    }
    $vta_recibo_archivo->cambiarEstado();
}        
?>

