<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('US_MEMO_TIPO_ESTADO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $us_memo_tipo_estado = UsMemoTipoEstado::getOxId($id);
    if($us_memo_tipo_estado->getEstado() == 1){
        $us_memo_tipo_estado->setEstado(0);
    }else{
        $us_memo_tipo_estado->setEstado(1);
    }
    $us_memo_tipo_estado->cambiarEstado();
}        
?>

