<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRV_GRUPO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $prv_grupo = PrvGrupo::getOxId($id);
    if($prv_grupo->getEstado() == 1){
        $prv_grupo->setEstado(0);
    }else{
        $prv_grupo->setEstado(1);
    }
    $prv_grupo->cambiarEstado();
}        
?>

