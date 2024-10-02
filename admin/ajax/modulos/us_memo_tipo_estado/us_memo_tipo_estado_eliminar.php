<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('US_MEMO_TIPO_ESTADO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $us_memo_tipo_estado = new UsMemoTipoEstado();
    $us_memo_tipo_estado->setId($id, false);
    $us_memo_tipo_estado->deleteAll();
}    
?>

