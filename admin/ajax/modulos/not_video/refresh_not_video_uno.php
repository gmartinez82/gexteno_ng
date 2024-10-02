<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$not_video = NotVideo::getOxId($id);

$estado = ($not_video->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'not_video_uno.php';
?>

