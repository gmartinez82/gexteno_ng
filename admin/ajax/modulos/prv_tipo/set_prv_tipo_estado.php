<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRV_TIPO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $prv_tipo = PrvTipo::getOxId($id);
    if($prv_tipo->getEstado() == 1){
        $prv_tipo->setEstado(0);
    }else{
        $prv_tipo->setEstado(1);
    }
    $prv_tipo->cambiarEstado();
}        
?>

