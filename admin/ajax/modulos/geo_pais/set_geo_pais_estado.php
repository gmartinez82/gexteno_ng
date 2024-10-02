<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GEO_PAIS_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $geo_pais = GeoPais::getOxId($id);
    if($geo_pais->getEstado() == 1){
        $geo_pais->setEstado(0);
    }else{
        $geo_pais->setEstado(1);
    }
    $geo_pais->cambiarEstado();
}        
?>

