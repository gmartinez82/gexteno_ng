<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_recibo_pde_tributo = PdeReciboPdeTributo::getOxId($id);

$estado = ($pde_recibo_pde_tributo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_recibo_pde_tributo_uno.php';
?>

