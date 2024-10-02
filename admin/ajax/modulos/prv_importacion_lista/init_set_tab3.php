<?php

$identificador = Gral::getVars(2, 'identificador', 0);
$insumo_id = Gral::getVars(2, 'insumo_id');
$matriz_id = Gral::getVars(2, 'matriz_id');
$nuevo = Gral::getVars(2, 'nuevo', 0);

$row = $identificador;
$web_ins_marca_id = Gral::getSes('web_ins_marca_id');
$web_pieza_id = Gral::getSes('web_pieza_id');

$prv_importacion_id = Gral::getSes('prv_importacion_id');
$prv_importacion = PrvImportacion::getOxId($prv_importacion_id);