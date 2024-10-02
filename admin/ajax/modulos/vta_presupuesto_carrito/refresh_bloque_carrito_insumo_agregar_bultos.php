<?php
include "_autoload.php";

$ins_insumo_id = Gral::getVars(Gral::VARS_GET, 'ins_insumo_id', 0, Gral::TIPO_INTEGER);
$ins_tipo_lista_precio_id = Gral::getVars(Gral::VARS_GET, 'cmb_ins_tipo_lista_precio_id', 0);


$ins_insumo = InsInsumo::getOxId($ins_insumo_id);
$ins_tipo_lista_precio = InsTipoListaPrecio::getOxId($ins_tipo_lista_precio_id);
$ins_insumo_bultos = $ins_insumo->getInsInsumoBultosOrdenados($ins_tipo_lista_precio);

if($ins_tipo_lista_precio){
    include "bloque_carrito_insumo_agregar_bultos.php";
}