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
$arr_geo_localidads = $o_padre->getGeoLocalidadsParaBloqueVinculo($palabra, $pagina);
$geo_localidads = $arr_geo_localidads['COLECCION'];
$paginador = $arr_geo_localidads['PAGINADOR'];

foreach($geo_localidads as $geo_localidad){
	?>
	<div class="uno" id='uno_geo_localidad_<?php echo $geo_localidad->getId() ?>' identificador="<?php echo $geo_localidad->getId() ?>" >
	<?php
	include 'uno_geo_localidad_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
