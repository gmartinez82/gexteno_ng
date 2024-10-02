<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_IMAGEN_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $nov_novedad_imagen = NovNovedadImagen::getOxId($id);
    if($nov_novedad_imagen->getEstado() == 1){
        $nov_novedad_imagen->setEstado(0);
    }else{
        $nov_novedad_imagen->setEstado(1);
    }
    $nov_novedad_imagen->cambiarEstado();
}        
?>

