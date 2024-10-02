<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('US_USUARIO_AUDITORIA_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $us_usuario_auditoria = new UsUsuarioAuditoria();
    $us_usuario_auditoria->setId($id, false);
    $us_usuario_auditoria->deleteAll();
}    
?>

