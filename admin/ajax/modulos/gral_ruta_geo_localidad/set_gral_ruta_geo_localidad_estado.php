<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_RUTA_GEO_LOCALIDAD_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gral_ruta_geo_localidad = GralRutaGeoLocalidad::getOxId($id);
    if($gral_ruta_geo_localidad->getEstado() == 1){
        $gral_ruta_geo_localidad->setEstado(0);
    }else{
        $gral_ruta_geo_localidad->setEstado(1);
    }
    $gral_ruta_geo_localidad->cambiarEstado();
}        
?>

