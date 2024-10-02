<?php
include "_autoload.php";

$padre = Gral::getVars(1, 'padre');
$clase = Gral::getVars(1, 'clase');
$tabla = Gral::getDBTablaDesdeClase($clase);
$div_grupo_imagen = $_POST['div_grupo_imagen'];

$cont = 0;
foreach($div_grupo_imagen as $o){
	$cont++;
	eval('$imagen = new '.$clase.'Imagen();');
	$imagen->setId($o);
	$imagen->setOrden($cont);
	$imagen->save();
}
?>