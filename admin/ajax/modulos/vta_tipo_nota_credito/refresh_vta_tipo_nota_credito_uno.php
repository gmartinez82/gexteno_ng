<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_tipo_nota_credito = VtaTipoNotaCredito::getOxId($id);

$estado = ($vta_tipo_nota_credito->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_tipo_nota_credito_uno.php';
?>

