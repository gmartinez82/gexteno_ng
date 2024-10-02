<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GEO_PROVINCIA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $geo_provincia = GeoProvincia::getOxId($id);
    if($geo_provincia->getEstado() == 1){
        $geo_provincia->setEstado(0);
    }else{
        $geo_provincia->setEstado(1);
    }
    $geo_provincia->cambiarEstado();
}        
?>

