<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_CATEGORIA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ins_categoria = InsCategoria::getOxId($id);
    if($ins_categoria->getEstado() == 1){
        $ins_categoria->setEstado(0);
    }else{
        $ins_categoria->setEstado(1);
    }
    $ins_categoria->cambiarEstado();
}        
?>

