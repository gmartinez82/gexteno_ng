<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$padre = Gral::getVars(1, 'padre');
$padre_id = Gral::getVars(1, 'padre_id');
$hijo = Gral::getVars(1, 'hijo');
$padre_clase = Gral::getDBClaseDesdeTabla($padre);

$o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');

$vta_politica_descuento_rango = VtaPoliticaDescuentoRango::getOxId($id);
include 'uno_vta_politica_descuento_rango_vinculo.php';
?>
