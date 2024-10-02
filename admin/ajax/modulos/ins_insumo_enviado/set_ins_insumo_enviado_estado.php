<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_INSUMO_ENVIADO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ins_insumo_enviado = InsInsumoEnviado::getOxId($id);
    if($ins_insumo_enviado->getEstado() == 1){
        $ins_insumo_enviado->setEstado(0);
    }else{
        $ins_insumo_enviado->setEstado(1);
    }
    $ins_insumo_enviado->cambiarEstado();
}        
?>

