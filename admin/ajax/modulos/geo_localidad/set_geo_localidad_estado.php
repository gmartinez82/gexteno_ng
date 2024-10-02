<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $geo_localidad = GeoLocalidad::getOxId($id);
    if($geo_localidad->getEstado() == 1){
        $geo_localidad->setEstado(0);
    }else{
        $geo_localidad->setEstado(1);
    }
    $geo_localidad->cambiarEstado();
}        
?>

