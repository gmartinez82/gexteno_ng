<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$padre_id = Gral::getVars(1, 'padre_id');
$padre_clase = Gral::getVars(1, 'padre_clase');
$relacion = Gral::getVars(1, 'relacion');
$palabra = Gral::getVars(1, 'palabra');

$o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');
$o_ids = eval('return $o_padre->get'.$relacion.'sId();');

$ws_fe_ope_solicitud = WsFeOpeSolicitud::getOxId($id);
include 'uno_ws_fe_ope_solicitud_set.php';
?>
