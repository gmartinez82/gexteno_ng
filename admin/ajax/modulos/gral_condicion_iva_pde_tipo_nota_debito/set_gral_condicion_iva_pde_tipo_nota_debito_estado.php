<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_PDE_TIPO_NOTA_DEBITO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gral_condicion_iva_pde_tipo_nota_debito = GralCondicionIvaPdeTipoNotaDebito::getOxId($id);
    if($gral_condicion_iva_pde_tipo_nota_debito->getEstado() == 1){
        $gral_condicion_iva_pde_tipo_nota_debito->setEstado(0);
    }else{
        $gral_condicion_iva_pde_tipo_nota_debito->setEstado(1);
    }
    $gral_condicion_iva_pde_tipo_nota_debito->cambiarEstado();
}        
?>

