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
$arr_vta_politica_descuento_rangos = $o_padre->getVtaPoliticaDescuentoRangosParaBloqueVinculo($palabra, $pagina);
$vta_politica_descuento_rangos = $arr_vta_politica_descuento_rangos['COLECCION'];
$paginador = $arr_vta_politica_descuento_rangos['PAGINADOR'];


foreach($vta_politica_descuento_rangos as $vta_politica_descuento_rango){
	?>
	<div class="uno" id='uno_vta_politica_descuento_rango_<?php echo $vta_politica_descuento_rango->getId() ?>' identificador="<?php echo $vta_politica_descuento_rango->getId() ?>" >
	<?php
	include 'uno_vta_politica_descuento_rango_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
