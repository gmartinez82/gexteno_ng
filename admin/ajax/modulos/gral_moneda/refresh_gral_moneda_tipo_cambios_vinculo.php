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
$arr_gral_moneda_tipo_cambios = $o_padre->getGralMonedaTipoCambiosParaBloqueVinculo($palabra, $pagina);
$gral_moneda_tipo_cambios = $arr_gral_moneda_tipo_cambios['COLECCION'];
$paginador = $arr_gral_moneda_tipo_cambios['PAGINADOR'];


foreach($gral_moneda_tipo_cambios as $gral_moneda_tipo_cambio){
	?>
	<div class="uno" id='uno_gral_moneda_tipo_cambio_<?php echo $gral_moneda_tipo_cambio->getId() ?>' identificador="<?php echo $gral_moneda_tipo_cambio->getId() ?>" >
	<?php
	include 'uno_gral_moneda_tipo_cambio_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
