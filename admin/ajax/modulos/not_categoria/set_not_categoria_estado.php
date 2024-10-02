<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('NOT_CATEGORIA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $not_categoria = NotCategoria::getOxId($id);
    if($not_categoria->getEstado() == 1){
        $not_categoria->setEstado(0);
    }else{
        $not_categoria->setEstado(1);
    }
    $not_categoria->cambiarEstado();
}        
?>

