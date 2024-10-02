<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_INS_TIPO_LISTA_PRECIO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $vta_vendedor_ins_tipo_lista_precio = new VtaVendedorInsTipoListaPrecio();
    $vta_vendedor_ins_tipo_lista_precio->setId($id, false);
    $vta_vendedor_ins_tipo_lista_precio->deleteAll();
}    
?>

