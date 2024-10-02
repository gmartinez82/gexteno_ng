<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_LEIDO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $nov_novedad_leido = new NovNovedadLeido();
    $nov_novedad_leido->setId($id, false);
    $nov_novedad_leido->deleteAll();
}    
?>

