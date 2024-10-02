<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDI_COMENTARIO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pdi_comentario = PdiComentario::getOxId($id);
    if($pdi_comentario->getEstado() == 1){
        $pdi_comentario->setEstado(0);
    }else{
        $pdi_comentario->setEstado(1);
    }
    $pdi_comentario->cambiarEstado();
}        
?>

