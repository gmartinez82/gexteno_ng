<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CONF_VARIABLE_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $conf_variable = ConfVariable::getOxId($id);
    if($conf_variable->getEstado() == 1){
        $conf_variable->setEstado(0);
    }else{
        $conf_variable->setEstado(1);
    }
    $conf_variable->cambiarEstado();
}        
?>

