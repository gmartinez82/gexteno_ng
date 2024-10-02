<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_PDE_RECIBO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pde_nota_debito_pde_recibo = PdeNotaDebitoPdeRecibo::getOxId($id);
    if($pde_nota_debito_pde_recibo->getEstado() == 1){
        $pde_nota_debito_pde_recibo->setEstado(0);
    }else{
        $pde_nota_debito_pde_recibo->setEstado(1);
    }
    $pde_nota_debito_pde_recibo->cambiarEstado();
}        
?>

