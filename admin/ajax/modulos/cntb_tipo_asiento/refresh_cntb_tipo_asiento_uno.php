<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$cntb_tipo_asiento = CntbTipoAsiento::getOxId($id);

$estado = ($cntb_tipo_asiento->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'cntb_tipo_asiento_uno.php';
?>

