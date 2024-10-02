<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$cantidad = Gral::getVars(1, 'cantidad', 10);
InsTipoInsumo::setSesPagCantidad($cantidad);
?>

