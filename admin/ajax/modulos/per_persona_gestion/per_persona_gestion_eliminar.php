<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$per_persona = new PerPersona();
$per_persona->setId($id, false);
$per_persona->deleteAll();
?>

