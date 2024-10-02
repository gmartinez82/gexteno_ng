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
$arr_ins_insumo_costos = $o_padre->getInsInsumoCostosParaBloqueVinculo($palabra, $pagina);
$ins_insumo_costos = $arr_ins_insumo_costos['COLECCION'];
$paginador = $arr_ins_insumo_costos['PAGINADOR'];

foreach($ins_insumo_costos as $ins_insumo_costo){
	?>
	<div class="uno" id='uno_ins_insumo_costo_<?php echo $ins_insumo_costo->getId() ?>' identificador="<?php echo $ins_insumo_costo->getId() ?>" >
	<?php
	include 'uno_ins_insumo_costo_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
