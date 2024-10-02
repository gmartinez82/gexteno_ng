<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$cli_grupo = CliGrupo::getOxId($id);

$estado = ($cli_grupo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'cli_grupo_uno.php';
?>

