<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_tipo_origen_nota_debito = PdeTipoOrigenNotaDebito::getOxId($id);

$estado = ($pde_tipo_origen_nota_debito->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_tipo_origen_nota_debito_uno.php';
?>

