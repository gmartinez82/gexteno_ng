<?php
include_once '_autoload.php';

$padre = Gral::getVars(1, 'padre');
$padre_id = Gral::getVars(1, 'padre_id');
$hijo = Gral::getVars(1, 'hijo');
$palabra = Gral::getVars(1, 'palabra');
$pagina = Gral::getVars(1, 'pagina', 1);

$padre_clase = Gral::getDBClaseDesdeTabla($padre);

$o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');
$arr_fnd_caja_egresos = $o_padre->getFndCajaEgresosParaBloqueVinculo($palabra, $pagina);
$fnd_caja_egresos = $arr_fnd_caja_egresos['COLECCION'];
$paginador = $arr_fnd_caja_egresos['PAGINADOR'];


foreach($fnd_caja_egresos as $fnd_caja_egreso){
	?>
	<div class="uno" id='uno_fnd_caja_egreso_<?php echo $fnd_caja_egreso->getId() ?>' identificador="<?php echo $fnd_caja_egreso->getId() ?>" >
	<?php
	include 'uno_fnd_caja_egreso_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
