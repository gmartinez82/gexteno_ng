<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$prv_convenio_descuento = PrvConvenioDescuento::getOxId($id);

$estado = ($prv_convenio_descuento->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'prv_convenio_descuento_uno.php';
?>

