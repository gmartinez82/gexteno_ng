<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$per_persona = PerPersona::getOxId($id);

$estado = ($per_persona->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'per_persona_gestion_uno.php';
?>

