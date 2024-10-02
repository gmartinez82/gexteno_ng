<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_nota_credito_pde_tributo = PdeNotaCreditoPdeTributo::getOxId($id);

$estado = ($pde_nota_credito_pde_tributo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_nota_credito_pde_tributo_uno.php';
?>

