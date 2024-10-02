<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRV_CATEGORIA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $prv_categoria = PrvCategoria::getOxId($id);
    if($prv_categoria->getEstado() == 1){
        $prv_categoria->setEstado(0);
    }else{
        $prv_categoria->setEstado(1);
    }
    $prv_categoria->cambiarEstado();
}        
?>

