<?php
include_once '_autoload.php';
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$padre = Gral::getVars(1, 'padre');
$padre_id = Gral::getVars(1, 'padre_id');
$hijo = Gral::getVars(1, 'hijo');
$palabra = Gral::getVars(1, 'palabra');
$pagina = Gral::getVars(1, 'pagina', 1);

$padre_clase = Gral::getDBClaseDesdeTabla($padre);

$o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');
$arr_us_mensajes = $o_padre->getUsMensajesParaBloqueVinculo($palabra, $pagina);
$us_mensajes = $arr_us_mensajes['COLECCION'];
$paginador = $arr_us_mensajes['PAGINADOR'];

foreach($us_mensajes as $us_mensaje){
	?>
	<div class="uno" id='uno_us_mensaje_<?php echo $us_mensaje->getId() ?>' identificador="<?php echo $us_mensaje->getId() ?>" >
	<?php
	include 'uno_us_mensaje_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
