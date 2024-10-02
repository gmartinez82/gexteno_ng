<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_MARCA_IMAGEN_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $ins_marca_imagen = new InsMarcaImagen();
    $ins_marca_imagen->setId($id, false);
    $ins_marca_imagen->deleteAll();
}    
?>

