<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('US_USUARIO_AUDITORIA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $us_usuario_auditoria = UsUsuarioAuditoria::getOxId($id);
    if($us_usuario_auditoria->getEstado() == 1){
        $us_usuario_auditoria->setEstado(0);
    }else{
        $us_usuario_auditoria->setEstado(1);
    }
    $us_usuario_auditoria->cambiarEstado();
}        
?>

