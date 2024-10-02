<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";

$cantidad = Gral::getVars(1, 'cantidad', 10);
VtaPoliticaDescuento::setSesPagCantidad($cantidad);
?>

