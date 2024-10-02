<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CLI_CLIENTE_INS_TIPO_LISTA_PRECIO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $cli_cliente_ins_tipo_lista_precio = new CliClienteInsTipoListaPrecio();
    $cli_cliente_ins_tipo_lista_precio->setId($id, false);
    $cli_cliente_ins_tipo_lista_precio->deleteAll();
}    
?>

