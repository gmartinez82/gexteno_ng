<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ENVIADO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_nota_debito_enviado = VtaNotaDebitoEnviado::getOxId($id);
    if($vta_nota_debito_enviado->getEstado() == 1){
        $vta_nota_debito_enviado->setEstado(0);
    }else{
        $vta_nota_debito_enviado->setEstado(1);
    }
    $vta_nota_debito_enviado->cambiarEstado();
}        
?>

