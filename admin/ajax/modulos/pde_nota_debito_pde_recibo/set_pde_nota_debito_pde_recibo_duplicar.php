<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_PDE_RECIBO_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $pde_nota_debito_pde_recibo = PdeNotaDebitoPdeRecibo::getOxId($id);
    $pde_nota_debito_pde_recibo->duplicarPdeNotaDebitoPdeRecibo();
}    

