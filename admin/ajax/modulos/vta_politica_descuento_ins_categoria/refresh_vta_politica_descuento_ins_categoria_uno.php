<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_politica_descuento_ins_categoria = VtaPoliticaDescuentoInsCategoria::getOxId($id);

include 'vta_politica_descuento_ins_categoria_uno.php';
?>

