<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$padre_id = Gral::getVars(1, 'padre_id');
$padre_clase = Gral::getVars(1, 'padre_clase');
$relacion = Gral::getVars(1, 'relacion');
$palabra = Gral::getVars(1, 'palabra');

$o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');
$o_ids = eval('return $o_padre->get'.$relacion.'sId();');

$pde_factura_pde_tributo = PdeFacturaPdeTributo::getOxId($id);
include 'uno_pde_factura_pde_tributo_set.php';
?>
