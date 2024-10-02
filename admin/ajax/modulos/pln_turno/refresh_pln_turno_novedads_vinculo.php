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
$arr_pln_turno_novedads = $o_padre->getPlnTurnoNovedadsParaBloqueVinculo($palabra, $pagina);
$pln_turno_novedads = $arr_pln_turno_novedads['COLECCION'];
$paginador = $arr_pln_turno_novedads['PAGINADOR'];

foreach($pln_turno_novedads as $pln_turno_novedad){
	?>
	<div class="uno" id='uno_pln_turno_novedad_<?php echo $pln_turno_novedad->getId() ?>' identificador="<?php echo $pln_turno_novedad->getId() ?>" >
	<?php
	include 'uno_pln_turno_novedad_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
