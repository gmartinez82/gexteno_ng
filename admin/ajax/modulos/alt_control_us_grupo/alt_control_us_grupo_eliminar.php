<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('ALT_CONTROL_US_GRUPO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $alt_control_us_grupo = new AltControlUsGrupo();
    $alt_control_us_grupo->setId($id, false);
    $alt_control_us_grupo->deleteAll();
}    
?>

