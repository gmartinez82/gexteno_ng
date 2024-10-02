<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_PDE_FACTURA_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $cntb_diario_asiento_pde_factura = new CntbDiarioAsientoPdeFactura();
    $cntb_diario_asiento_pde_factura->setId($id, false);
    $cntb_diario_asiento_pde_factura->deleteAll();
}    
?>

