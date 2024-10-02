<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_PDE_FACTURA_PDE_TRIBUTO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $pde_nota_credito_pde_factura_pde_tributo = new PdeNotaCreditoPdeFacturaPdeTributo();
    $pde_nota_credito_pde_factura_pde_tributo->setId($id, false);
    $pde_nota_credito_pde_factura_pde_tributo->deleteAll();
}    
?>

