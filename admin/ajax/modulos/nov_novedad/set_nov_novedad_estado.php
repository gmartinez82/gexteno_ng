<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $nov_novedad = NovNovedad::getOxId($id);
    if($nov_novedad->getEstado() == 1){
        $nov_novedad->setEstado(0);
    }else{
        $nov_novedad->setEstado(1);
    }
    $nov_novedad->cambiarEstado();
}        
?>

