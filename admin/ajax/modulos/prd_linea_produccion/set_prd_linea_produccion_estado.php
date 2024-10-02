<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $prd_linea_produccion = PrdLineaProduccion::getOxId($id);
    if($prd_linea_produccion->getEstado() == 1){
        $prd_linea_produccion->setEstado(0);
    }else{
        $prd_linea_produccion->setEstado(1);
    }
    $prd_linea_produccion->cambiarEstado();
}        
?>

