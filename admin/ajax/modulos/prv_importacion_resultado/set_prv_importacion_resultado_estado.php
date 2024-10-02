<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_RESULTADO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $prv_importacion_resultado = PrvImportacionResultado::getOxId($id);
    if($prv_importacion_resultado->getEstado() == 1){
        $prv_importacion_resultado->setEstado(0);
    }else{
        $prv_importacion_resultado->setEstado(1);
    }
    $prv_importacion_resultado->cambiarEstado();
}        
?>

