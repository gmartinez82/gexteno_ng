<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('ALT_TIPO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $alt_tipo = AltTipo::getOxId($id);
    if($alt_tipo->getEstado() == 1){
        $alt_tipo->setEstado(0);
    }else{
        $alt_tipo->setEstado(1);
    }
    $alt_tipo->cambiarEstado();
}        
?>

