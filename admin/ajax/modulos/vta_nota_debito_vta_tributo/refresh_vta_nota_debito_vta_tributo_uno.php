<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_nota_debito_vta_tributo = VtaNotaDebitoVtaTributo::getOxId($id);

$estado = ($vta_nota_debito_vta_tributo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_nota_debito_vta_tributo_uno.php';
?>

