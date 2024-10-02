<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_tipo_origen_nota_debito = VtaTipoOrigenNotaDebito::getOxId($id);

$estado = ($vta_tipo_origen_nota_debito->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_tipo_origen_nota_debito_uno.php';
?>

