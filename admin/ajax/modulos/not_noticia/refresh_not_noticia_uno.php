<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$not_noticia = NotNoticia::getOxId($id);

$estado = ($not_noticia->getEstado()) ? 'habilitado' : 'deshabilitado';
$destacado = ($not_noticia->getDestacado()) ? 'destacado' : '';
include 'not_noticia_uno.php';
?>

