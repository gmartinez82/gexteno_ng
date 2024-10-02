<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_RUTA_GEO_LOCALIDAD_CLI_CENTRO_RECEPCION_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $gral_ruta_geo_localidad_cli_centro_recepcion = GralRutaGeoLocalidadCliCentroRecepcion::getOxId($id);
    $gral_ruta_geo_localidad_cli_centro_recepcion->duplicarGralRutaGeoLocalidadCliCentroRecepcion();
}    

