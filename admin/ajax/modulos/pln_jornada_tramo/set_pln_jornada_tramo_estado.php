<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PLN_JORNADA_TRAMO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pln_jornada_tramo = PlnJornadaTramo::getOxId($id);
    if($pln_jornada_tramo->getEstado() == 1){
        $pln_jornada_tramo->setEstado(0);
    }else{
        $pln_jornada_tramo->setEstado(1);
    }
    $pln_jornada_tramo->cambiarEstado();
}        
?>

