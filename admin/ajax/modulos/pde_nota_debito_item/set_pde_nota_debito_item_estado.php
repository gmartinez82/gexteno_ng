<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_ITEM_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pde_nota_debito_item = PdeNotaDebitoItem::getOxId($id);
    if($pde_nota_debito_item->getEstado() == 1){
        $pde_nota_debito_item->setEstado(0);
    }else{
        $pde_nota_debito_item->setEstado(1);
    }
    $pde_nota_debito_item->cambiarEstado();
}        
?>

