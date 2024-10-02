<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_CUENTA_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $cntb_diario_asiento_cuenta = CntbDiarioAsientoCuenta::getOxId($id);
    $cntb_diario_asiento_cuenta->duplicarCntbDiarioAsientoCuenta();
}    

