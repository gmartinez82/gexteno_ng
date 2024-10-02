<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_INSUMO_INSTANCIA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ins_insumo_instancia = InsInsumoInstancia::getOxId($id);
    if($ins_insumo_instancia->getEstado() == 1){
        $ins_insumo_instancia->setEstado(0);
    }else{
        $ins_insumo_instancia->setEstado(1);
    }
    $ins_insumo_instancia->cambiarEstado();
}        
?>

