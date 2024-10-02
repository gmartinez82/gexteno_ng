<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_TIPO_ORIGEN_NOTA_DEBITO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pde_tipo_origen_nota_debito = PdeTipoOrigenNotaDebito::getOxId($id);
    if($pde_tipo_origen_nota_debito->getEstado() == 1){
        $pde_tipo_origen_nota_debito->setEstado(0);
    }else{
        $pde_tipo_origen_nota_debito->setEstado(1);
    }
    $pde_tipo_origen_nota_debito->cambiarEstado();
}        
?>

