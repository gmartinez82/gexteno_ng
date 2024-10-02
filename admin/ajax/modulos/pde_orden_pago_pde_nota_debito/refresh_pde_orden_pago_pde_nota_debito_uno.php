<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_orden_pago_pde_nota_debito = PdeOrdenPagoPdeNotaDebito::getOxId($id);

$estado = ($pde_orden_pago_pde_nota_debito->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_orden_pago_pde_nota_debito_uno.php';
?>

