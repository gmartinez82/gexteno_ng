<?php
include "_autoload.php";

$id = Gral::getVars(1, 'id');
$clase = 'NotNoticia';
$tabla = Gral::getDBTablaDesdeClase($clase);

eval('$imagen = new '.$clase.'Imagen();');
$imagen->setId($id);

include "not_noticia_imagen_uno.php";
?>
