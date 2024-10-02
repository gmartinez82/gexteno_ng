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
$arr_pln_jornada_tramos = $o_padre->getPlnJornadaTramosParaBloqueVinculo($palabra, $pagina);
$pln_jornada_tramos = $arr_pln_jornada_tramos['COLECCION'];
$paginador = $arr_pln_jornada_tramos['PAGINADOR'];

foreach($pln_jornada_tramos as $pln_jornada_tramo){
	?>
	<div class="uno" id='uno_pln_jornada_tramo_<?php echo $pln_jornada_tramo->getId() ?>' identificador="<?php echo $pln_jornada_tramo->getId() ?>" >
	<?php
	include 'uno_pln_jornada_tramo_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
