<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CONF_CATEGORIA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $conf_categoria = ConfCategoria::getOxId($id);
    if($conf_categoria->getEstado() == 1){
        $conf_categoria->setEstado(0);
    }else{
        $conf_categoria->setEstado(1);
    }
    $conf_categoria->cambiarEstado();
}        
?>

