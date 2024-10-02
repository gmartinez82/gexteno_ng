<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_RECEPCION_DESTINATARIO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $pde_recepcion_destinatario = new PdeRecepcionDestinatario();
    $pde_recepcion_destinatario->setId($id, false);
    $pde_recepcion_destinatario->deleteAll();
}    
?>

