<?php
include_once '_autoload.php';

$padre = Gral::getVars(1, 'padre');
$padre_id = Gral::getVars(1, 'padre_id');
$hijo = Gral::getVars(1, 'hijo');
$palabra = Gral::getVars(1, 'palabra');
$pagina = Gral::getVars(1, 'pagina', 1);

$padre_clase = Gral::getDBClaseDesdeTabla($padre);

$o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');
$arr_fnd_caja_ingresos = $o_padre->getFndCajaIngresosParaBloqueVinculo($palabra, $pagina);
$fnd_caja_ingresos = $arr_fnd_caja_ingresos['COLECCION'];
$paginador = $arr_fnd_caja_ingresos['PAGINADOR'];


foreach($fnd_caja_ingresos as $fnd_caja_ingreso){
	?>
	<div class="uno" id='uno_fnd_caja_ingreso_<?php echo $fnd_caja_ingreso->getId() ?>' identificador="<?php echo $fnd_caja_ingreso->getId() ?>" >
	<?php
	include 'uno_fnd_caja_ingreso_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
