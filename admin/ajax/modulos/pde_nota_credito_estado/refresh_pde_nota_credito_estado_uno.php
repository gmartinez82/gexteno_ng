<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_nota_credito_estado = PdeNotaCreditoEstado::getOxId($id);

$estado = ($pde_nota_credito_estado->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_nota_credito_estado_uno.php';
?>

