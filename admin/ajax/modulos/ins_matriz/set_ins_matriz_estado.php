<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_MATRIZ_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ins_matriz = InsMatriz::getOxId($id);
    if($ins_matriz->getEstado() == 1){
        $ins_matriz->setEstado(0);
    }else{
        $ins_matriz->setEstado(1);
    }
    $ins_matriz->cambiarEstado();
}        
?>

