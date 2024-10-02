<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PLN_JORNADA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pln_jornada = PlnJornada::getOxId($id);
    if($pln_jornada->getEstado() == 1){
        $pln_jornada->setEstado(0);
    }else{
        $pln_jornada->setEstado(1);
    }
    $pln_jornada->cambiarEstado();
}        
?>

