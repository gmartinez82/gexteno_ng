<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('NOT_NOTICIA_ARCHIVO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $not_noticia_archivo = new NotNoticiaArchivo();
    $not_noticia_archivo->setId($id, false);
    $not_noticia_archivo->deleteAll();
}    
?>

