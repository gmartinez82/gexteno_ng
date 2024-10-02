<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('INS_CATEGORIA_INS_MARCA_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $ins_categoria_ins_marca = InsCategoriaInsMarca::getOxId($id);
    $ins_categoria_ins_marca->duplicarInsCategoriaInsMarca();
}    

