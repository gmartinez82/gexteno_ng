<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gen_arbol_tipo = GenArbolTipo::getOxId($id);

$estado = ($gen_arbol_tipo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gen_arbol_tipo_uno.php';
?>

