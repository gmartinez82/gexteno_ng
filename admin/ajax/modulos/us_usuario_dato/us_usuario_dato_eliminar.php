<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('US_USUARIO_DATO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $us_usuario_dato = new UsUsuarioDato();
    $us_usuario_dato->setId($id, false);
    $us_usuario_dato->deleteAll();
}    
?>

