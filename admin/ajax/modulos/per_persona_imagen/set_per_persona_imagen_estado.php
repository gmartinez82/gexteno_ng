<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PER_PERSONA_IMAGEN_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $per_persona_imagen = PerPersonaImagen::getOxId($id);
    if($per_persona_imagen->getEstado() == 1){
        $per_persona_imagen->setEstado(0);
    }else{
        $per_persona_imagen->setEstado(1);
    }
    $per_persona_imagen->cambiarEstado();
}        
?>

