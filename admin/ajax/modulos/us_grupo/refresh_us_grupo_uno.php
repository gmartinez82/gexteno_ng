<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$us_grupo = UsGrupo::getOxId($id);

$estado = ($us_grupo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'us_grupo_uno.php';
?>

