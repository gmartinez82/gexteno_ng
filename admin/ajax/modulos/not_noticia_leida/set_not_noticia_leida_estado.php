<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('NOT_NOTICIA_LEIDA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $not_noticia_leida = NotNoticiaLeida::getOxId($id);
    if($not_noticia_leida->getEstado() == 1){
        $not_noticia_leida->setEstado(0);
    }else{
        $not_noticia_leida->setEstado(1);
    }
    $not_noticia_leida->cambiarEstado();
}        
?>

