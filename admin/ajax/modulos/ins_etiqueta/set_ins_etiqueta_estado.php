<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_ETIQUETA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ins_etiqueta = InsEtiqueta::getOxId($id);
    if($ins_etiqueta->getEstado() == 1){
        $ins_etiqueta->setEstado(0);
    }else{
        $ins_etiqueta->setEstado(1);
    }
    $ins_etiqueta->cambiarEstado();
}        
?>

