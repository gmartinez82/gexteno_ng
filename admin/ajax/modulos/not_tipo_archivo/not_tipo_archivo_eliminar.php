<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('NOT_TIPO_ARCHIVO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $not_tipo_archivo = new NotTipoArchivo();
    $not_tipo_archivo->setId($id, false);
    $not_tipo_archivo->deleteAll();
}    
?>

