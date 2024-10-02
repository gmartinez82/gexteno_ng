<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('NOT_NOTICIA_ADM_ACCION_DESTACADO')){
    $id = Gral::getVars(1, 'id');
    $not_noticia = NotNoticia::getOxId($id);
    if($not_noticia->getDestacado() == 1){
        $not_noticia->setDestacado(0);
    }else{
        $not_noticia->setDestacado(1);
    }
    $not_noticia->save();
}
?>

