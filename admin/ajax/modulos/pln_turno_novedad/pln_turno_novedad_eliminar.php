<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PLN_TURNO_NOVEDAD_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $pln_turno_novedad = PlnTurnoNovedad::getOxId($id);
    if($pln_turno_novedad){
        if($pln_turno_novedad->getHash() == $hash){
            $pln_turno_novedad->deleteAll();
        }
    }
}    
?>

