<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$nov_novedad = new NovNovedad();
$nov_novedad->setId($id, false);
$nov_novedad->deleteAll();
?>

