<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GEN_MENU_ITEM_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gen_menu_item = GenMenuItem::getOxId($id);
    if($gen_menu_item->getEstado() == 1){
        $gen_menu_item->setEstado(0);
    }else{
        $gen_menu_item->setEstado(1);
    }
    $gen_menu_item->cambiarEstado();
}        
?>

