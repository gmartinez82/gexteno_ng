<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('FND_CAJA_TIPO_INGRESO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $fnd_caja_tipo_ingreso = FndCajaTipoIngreso::getOxId($id);
    if($fnd_caja_tipo_ingreso->getEstado() == 1){
        $fnd_caja_tipo_ingreso->setEstado(0);
    }else{
        $fnd_caja_tipo_ingreso->setEstado(1);
    }
    $fnd_caja_tipo_ingreso->cambiarEstado();
}        
?>

