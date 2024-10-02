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
$arr_geo_provincias = $o_padre->getGeoProvinciasParaBloqueVinculo($palabra, $pagina);
$geo_provincias = $arr_geo_provincias['COLECCION'];
$paginador = $arr_geo_provincias['PAGINADOR'];

foreach($geo_provincias as $geo_provincia){
	?>
	<div class="uno" id='uno_geo_provincia_<?php echo $geo_provincia->getId() ?>' identificador="<?php echo $geo_provincia->getId() ?>" >
	<?php
	include 'uno_geo_provincia_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
