<?php
include "_autoload.php";
include_once Gral::getPathAbs() . "admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs() . "admin/control/init.php";

$ins_insumo_id = Gral::getVars(Gral::VARS_GET, 'ins_insumo_id', 0, Gral::TIPO_INTEGER);
$vta_presupuesto_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_id', 0, Gral::TIPO_INTEGER);
$cli_cliente_id = Gral::getVars(Gral::VARS_GET, 'dbsug_cli_cliente_id', 0);
$ins_tipo_lista_precio_id = Gral::getVars(Gral::VARS_GET, 'cmb_ins_tipo_lista_precio_id', 0, Gral::TIPO_INTEGER);
$cantidad = Gral::getVars(Gral::VARS_GET, 'txt_cantidad', 1, Gral::TIPO_FLOAT);
$ins_insumo_bulto_id = Gral::getVars(Gral::VARS_GET, 'cmb_ins_insumo_bulto_id', 0, Gral::TIPO_INTEGER);

$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
if($vta_presupuesto){
    $cli_cliente_id = Gral::getVars(Gral::VARS_GET, 'cli_cliente_id', 0);
    $ins_tipo_lista_precio_id = Gral::getVars(Gral::VARS_GET, 'ins_tipo_lista_precio_id', 0, Gral::TIPO_INTEGER);
    $cantidad = Gral::getVars(Gral::VARS_GET, 'txt_cantidad', 0);
}

$ins_insumo = InsInsumo::getOxId($ins_insumo_id);
$ins_tipo_lista_precio = InsTipoListaPrecio::getOxId($ins_tipo_lista_precio_id);
if($ins_tipo_lista_precio && $ins_tipo_lista_precio->getBultoCerrado()){
    $ins_insumo_bulto = InsInsumoBulto::getOxId($ins_insumo_bulto_id);
}

$ins_lista_precio = $ins_insumo->getInsInsumoListaPrecioXTipoLista($ins_tipo_lista_precio, $solo_habilitado = true);

if($ins_tipo_lista_precio){
    include "bloque_carrito_insumo_agregar_importes.php";
}