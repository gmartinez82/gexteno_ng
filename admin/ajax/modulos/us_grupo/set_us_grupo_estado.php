<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('US_GRUPO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $us_grupo = UsGrupo::getOxId($id);
    if($us_grupo->getEstado() == 1){
        $us_grupo->setEstado(0);
    }else{
        $us_grupo->setEstado(1);
    }
    $us_grupo->cambiarEstado();
}        
?>

