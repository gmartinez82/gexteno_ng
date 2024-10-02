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
$arr_us_usuario_datos = $o_padre->getUsUsuarioDatosParaBloqueVinculo($palabra, $pagina);
$us_usuario_datos = $arr_us_usuario_datos['COLECCION'];
$paginador = $arr_us_usuario_datos['PAGINADOR'];

foreach($us_usuario_datos as $us_usuario_dato){
	?>
	<div class="uno" id='uno_us_usuario_dato_<?php echo $us_usuario_dato->getId() ?>' identificador="<?php echo $us_usuario_dato->getId() ?>" >
	<?php
	include 'uno_us_usuario_dato_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
