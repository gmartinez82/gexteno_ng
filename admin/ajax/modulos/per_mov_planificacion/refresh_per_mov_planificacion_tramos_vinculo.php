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
$arr_per_mov_planificacion_tramos = $o_padre->getPerMovPlanificacionTramosParaBloqueVinculo($palabra, $pagina);
$per_mov_planificacion_tramos = $arr_per_mov_planificacion_tramos['COLECCION'];
$paginador = $arr_per_mov_planificacion_tramos['PAGINADOR'];

foreach($per_mov_planificacion_tramos as $per_mov_planificacion_tramo){
	?>
	<div class="uno" id='uno_per_mov_planificacion_tramo_<?php echo $per_mov_planificacion_tramo->getId() ?>' identificador="<?php echo $per_mov_planificacion_tramo->getId() ?>" >
	<?php
	include 'uno_per_mov_planificacion_tramo_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
