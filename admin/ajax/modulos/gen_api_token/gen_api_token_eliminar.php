<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GEN_API_TOKEN_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $gen_api_token = new GenApiToken();
    $gen_api_token->setId($id, false);
    $gen_api_token->deleteAll();
}    
?>

