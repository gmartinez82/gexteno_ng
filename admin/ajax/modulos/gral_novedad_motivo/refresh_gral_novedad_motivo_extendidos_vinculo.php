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
$arr_gral_novedad_motivo_extendidos = $o_padre->getGralNovedadMotivoExtendidosParaBloqueVinculo($palabra, $pagina);
$gral_novedad_motivo_extendidos = $arr_gral_novedad_motivo_extendidos['COLECCION'];
$paginador = $arr_gral_novedad_motivo_extendidos['PAGINADOR'];

foreach($gral_novedad_motivo_extendidos as $gral_novedad_motivo_extendido){
	?>
	<div class="uno" id='uno_gral_novedad_motivo_extendido_<?php echo $gral_novedad_motivo_extendido->getId() ?>' identificador="<?php echo $gral_novedad_motivo_extendido->getId() ?>" >
	<?php
	include 'uno_gral_novedad_motivo_extendido_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
