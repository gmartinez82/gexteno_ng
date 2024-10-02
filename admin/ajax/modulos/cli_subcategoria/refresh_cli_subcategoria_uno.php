<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$cli_subcategoria = CliSubcategoria::getOxId($id);

$estado = ($cli_subcategoria->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'cli_subcategoria_uno.php';
?>

