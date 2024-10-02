<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PLN_TURNO_NOVEDAD_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pln_turno_novedad = PlnTurnoNovedad::getOxId($id);
    if($pln_turno_novedad->getEstado() == 1){
        $pln_turno_novedad->setEstado(0);
    }else{
        $pln_turno_novedad->setEstado(1);
    }
    $pln_turno_novedad->cambiarEstado();
}        
?>

