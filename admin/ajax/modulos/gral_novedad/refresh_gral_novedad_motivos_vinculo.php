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
$arr_gral_novedad_motivos = $o_padre->getGralNovedadMotivosParaBloqueVinculo($palabra, $pagina);
$gral_novedad_motivos = $arr_gral_novedad_motivos['COLECCION'];
$paginador = $arr_gral_novedad_motivos['PAGINADOR'];

foreach($gral_novedad_motivos as $gral_novedad_motivo){
	?>
	<div class="uno" id='uno_gral_novedad_motivo_<?php echo $gral_novedad_motivo->getId() ?>' identificador="<?php echo $gral_novedad_motivo->getId() ?>" >
	<?php
	include 'uno_gral_novedad_motivo_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
