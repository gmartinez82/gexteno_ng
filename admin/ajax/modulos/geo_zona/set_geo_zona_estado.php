<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GEO_ZONA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $geo_zona = GeoZona::getOxId($id);
    if($geo_zona->getEstado() == 1){
        $geo_zona->setEstado(0);
    }else{
        $geo_zona->setEstado(1);
    }
    $geo_zona->cambiarEstado();
}        
?>

