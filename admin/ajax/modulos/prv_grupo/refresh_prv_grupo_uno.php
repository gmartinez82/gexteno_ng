<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$prv_grupo = PrvGrupo::getOxId($id);

$estado = ($prv_grupo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'prv_grupo_uno.php';
?>

