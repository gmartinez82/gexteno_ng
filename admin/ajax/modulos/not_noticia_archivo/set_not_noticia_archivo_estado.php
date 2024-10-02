<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('NOT_NOTICIA_ARCHIVO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $not_noticia_archivo = NotNoticiaArchivo::getOxId($id);
    if($not_noticia_archivo->getEstado() == 1){
        $not_noticia_archivo->setEstado(0);
    }else{
        $not_noticia_archivo->setEstado(1);
    }
    $not_noticia_archivo->cambiarEstado();
}        
?>

