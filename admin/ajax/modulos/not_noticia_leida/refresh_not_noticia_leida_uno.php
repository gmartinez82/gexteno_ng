<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$not_noticia_leida = NotNoticiaLeida::getOxId($id);

$estado = ($not_noticia_leida->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'not_noticia_leida_uno.php';
?>

