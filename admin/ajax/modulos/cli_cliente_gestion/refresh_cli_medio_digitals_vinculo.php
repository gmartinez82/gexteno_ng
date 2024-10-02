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
$arr_cli_medio_digitals = $o_padre->getCliMedioDigitalsParaBloqueVinculo($palabra, $pagina);
$cli_medio_digitals = $arr_cli_medio_digitals['COLECCION'];
$paginador = $arr_cli_medio_digitals['PAGINADOR'];


foreach($cli_medio_digitals as $cli_medio_digital){
	?>
	<div class="uno" id='uno_cli_medio_digital_<?php echo $cli_medio_digital->getId() ?>' identificador="<?php echo $cli_medio_digital->getId() ?>" >
	<?php
	include 'uno_cli_medio_digital_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
