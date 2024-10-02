<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_EXENCION_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pde_tributo_exencion = PdeTributoExencion::getOxId($id);
    if($pde_tributo_exencion->getEstado() == 1){
        $pde_tributo_exencion->setEstado(0);
    }else{
        $pde_tributo_exencion->setEstado(1);
    }
    $pde_tributo_exencion->cambiarEstado();
}        
?>

