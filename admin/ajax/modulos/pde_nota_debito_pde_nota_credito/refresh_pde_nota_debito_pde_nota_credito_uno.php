<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_nota_debito_pde_nota_credito = PdeNotaDebitoPdeNotaCredito::getOxId($id);

$estado = ($pde_nota_debito_pde_nota_credito->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_nota_debito_pde_nota_credito_uno.php';
?>

