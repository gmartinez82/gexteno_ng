<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pdi_comentario = PdiComentario::getOxId($id);

$estado = ($pdi_comentario->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pdi_comentario_uno.php';
?>

