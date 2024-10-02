<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('SLD_TIPO_IMAGEN_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $sld_tipo_imagen = SldTipoImagen::getOxId($id);
    if($sld_tipo_imagen->getEstado() == 1){
        $sld_tipo_imagen->setEstado(0);
    }else{
        $sld_tipo_imagen->setEstado(1);
    }
    $sld_tipo_imagen->cambiarEstado();
}        
?>

