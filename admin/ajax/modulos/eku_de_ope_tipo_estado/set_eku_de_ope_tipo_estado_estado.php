<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_OPE_TIPO_ESTADO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_de_ope_tipo_estado = EkuDeOpeTipoEstado::getOxId($id);
    if($eku_de_ope_tipo_estado->getEstado() == 1){
        $eku_de_ope_tipo_estado->setEstado(0);
    }else{
        $eku_de_ope_tipo_estado->setEstado(1);
    }
    $eku_de_ope_tipo_estado->cambiarEstado();
}        
?>

