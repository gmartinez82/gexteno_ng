<?php
include "_autoload.php";

$padre = Gral::getVars(1, 'padre');
$clase = Gral::getVars(1, 'clase');
$tabla = Gral::getDBTablaDesdeClase($clase);
$div_grupo_archivo = $_POST['div_grupo_archivo'];

$cont = 0;
foreach($div_grupo_archivo as $o){
	$cont++;
	eval('$archivo = new '.$clase.'Archivo();');
	$archivo->setId($o);
	$archivo->setOrden($cont);
	$archivo->save();
}
?>