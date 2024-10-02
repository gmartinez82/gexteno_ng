<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gen_prca_ejecucion = GenPrcaEjecucion::getOxId($id);

$estado = ($gen_prca_ejecucion->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gen_prca_ejecucion_uno.php';
?>

