<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * @creado_por Esteban Martinez
 * @creado 16/03/2017
 */
include_once '_autoload.php';

$ins_insumo_id            = Gral::getVars(1, 'ins_insumo_id', 0);
$ins_tipo_lista_precio_id = Gral::getVars(1, 'ins_tipo_lista_precio_id',0);
$habilitar                = Gral::getVars(1, 'habilitar', -1);


$ins_insumo = InsInsumo::getOxId($ins_insumo_id);

$ins_tipo_lista_precio = InsTipoListaPrecio::getOxId($ins_tipo_lista_precio_id);



$ins_lista_precio = $ins_insumo->getInsInsumoListaPrecioXTipoLista($ins_tipo_lista_precio, false);

if($ins_lista_precio)
{
    $ins_lista_precio->setHabilitado($habilitar);
    $ins_lista_precio->save();
}

