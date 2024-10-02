<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_VTA_NOTA_CREDITO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $cntb_diario_asiento_vta_nota_credito = new CntbDiarioAsientoVtaNotaCredito();
    $cntb_diario_asiento_vta_nota_credito->setId($id, false);
    $cntb_diario_asiento_vta_nota_credito->deleteAll();
}    
?>

