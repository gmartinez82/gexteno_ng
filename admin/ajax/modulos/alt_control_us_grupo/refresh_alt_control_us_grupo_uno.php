<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$alt_control_us_grupo = AltControlUsGrupo::getOxId($id);

include 'alt_control_us_grupo_uno.php';
?>

