<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$relacion_id = Gral::getVars(1, 'relacion_id');
$checked = Gral::getVars(1, 'checked');
$relacion = Gral::getVars(1, 'relacion');
$padre = Gral::getVars(1, 'padre');
$padre_id = Gral::getVars(1, 'padre_id');
$padre_clase = Gral::getVars(1, 'padre_clase');

$o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');

if($checked == 'checked' or $checked == 'true'){
	$o = new VtaNotaCreditoVtaNotaDebito();
	$o->setVtaNotaDebitoId($o_padre->getId());
	$o->setVtaNotaCreditoId($id);
	$o->saveDesdeRelacion();
}else{
	$o = VtaNotaCreditoVtaNotaDebito::getOxId($relacion_id);
	$o->delete();
}
?>
