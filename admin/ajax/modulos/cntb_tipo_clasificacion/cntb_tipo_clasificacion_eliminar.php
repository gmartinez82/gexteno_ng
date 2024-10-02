<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CNTB_TIPO_CLASIFICACION_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $cntb_tipo_clasificacion = new CntbTipoClasificacion();
    $cntb_tipo_clasificacion->setId($id, false);
    $cntb_tipo_clasificacion->deleteAll();
}    
?>

