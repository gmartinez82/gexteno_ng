<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VALORACION_AGRUPACION_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $gral_sucursal_valoracion_agrupacion = GralSucursalValoracionAgrupacion::getOxId($id);
    $gral_sucursal_valoracion_agrupacion->duplicarGralSucursalValoracionAgrupacion();
}    

