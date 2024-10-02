<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$ins_insumo_bulto_id = Gral::getVars(Gral::VARS_POST, 'ins_insumo_bulto_id', 0, Gral::TIPO_INTEGER);
$ins_tipo_lista_precio_id = Gral::getVars(Gral::VARS_POST, 'ins_tipo_lista_precio_id', 0, Gral::TIPO_INTEGER);

$array = array(
    array('campo' => InsInsumoBultoInsTipoListaPrecio::GEN_ATTR_INS_INSUMO_BULTO_ID, 'valor' => $ins_insumo_bulto_id),
    array('campo' => InsInsumoBultoInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, 'valor' => $ins_tipo_lista_precio_id),
);
$ins_insumo_bulto_ins_tipo_lista_precio = InsInsumoBultoInsTipoListaPrecio::getOxArray($array);
if(!$ins_insumo_bulto_ins_tipo_lista_precio){
    // -------------------------------------------------------------------------
    // si no existe, se crea vinculo
    // -------------------------------------------------------------------------
    $ins_insumo_bulto_ins_tipo_lista_precio = new InsInsumoBultoInsTipoListaPrecio();
    $ins_insumo_bulto_ins_tipo_lista_precio->setInsInsumoBultoId($ins_insumo_bulto_id);
    $ins_insumo_bulto_ins_tipo_lista_precio->setInsTipoListaPrecioId($ins_tipo_lista_precio_id);
    $ins_insumo_bulto_ins_tipo_lista_precio->save();
}else{
    // -------------------------------------------------------------------------
    // si ya existe, se desvincula
    // -------------------------------------------------------------------------
    $ins_insumo_bulto_ins_tipo_lista_precio->delete();
}
