<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_PDE_TIPO_NOTA_CREDITO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $gral_condicion_iva_pde_tipo_nota_credito = new GralCondicionIvaPdeTipoNotaCredito();
    $gral_condicion_iva_pde_tipo_nota_credito->setId($id, false);
    $gral_condicion_iva_pde_tipo_nota_credito->deleteAll();
}    
?>

