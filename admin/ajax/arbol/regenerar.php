<?php
include "_autoload.php";

$clase = Gral::getVars(1, 'clase');
$id = Gral::getVars(1, 'id');

$o = new $clase();
$o->setId($id);
$o->wrArchivoXML();
?>