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
$arr_vta_punto_venta_actuals = $o_padre->getVtaPuntoVentaActualsParaBloqueVinculo($palabra, $pagina);
$vta_punto_venta_actuals = $arr_vta_punto_venta_actuals['COLECCION'];
$paginador = $arr_vta_punto_venta_actuals['PAGINADOR'];

foreach($vta_punto_venta_actuals as $vta_punto_venta_actual){
	?>
	<div class="uno" id='uno_vta_punto_venta_actual_<?php echo $vta_punto_venta_actual->getId() ?>' identificador="<?php echo $vta_punto_venta_actual->getId() ?>" >
	<?php
	include 'uno_vta_punto_venta_actual_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
