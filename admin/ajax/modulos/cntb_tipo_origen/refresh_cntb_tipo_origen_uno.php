<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$cntb_tipo_origen = CntbTipoOrigen::getOxId($id);

$estado = ($cntb_tipo_origen->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'cntb_tipo_origen_uno.php';
?>

