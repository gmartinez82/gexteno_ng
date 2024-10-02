<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_TIPO_IMAGEN_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $ins_tipo_imagen = new InsTipoImagen();
    $ins_tipo_imagen->setId($id, false);
    $ins_tipo_imagen->deleteAll();
}    
?>

