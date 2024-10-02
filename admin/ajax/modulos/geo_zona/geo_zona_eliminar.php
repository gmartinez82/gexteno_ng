<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GEO_ZONA_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $geo_zona = new GeoZona();
    $geo_zona->setId($id, false);
    $geo_zona->deleteAll();
}    
?>

