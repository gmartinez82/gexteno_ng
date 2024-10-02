<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_FACTURA_PDE_OC_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pde_factura_pde_oc = PdeFacturaPdeOc::getOxId($id);
    if($pde_factura_pde_oc->getEstado() == 1){
        $pde_factura_pde_oc->setEstado(0);
    }else{
        $pde_factura_pde_oc->setEstado(1);
    }
    $pde_factura_pde_oc->cambiarEstado();
}        
?>

