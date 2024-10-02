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
$arr_cli_telefonos = $o_padre->getCliTelefonosParaBloqueVinculo($palabra, $pagina);
$cli_telefonos = $arr_cli_telefonos['COLECCION'];
$paginador = $arr_cli_telefonos['PAGINADOR'];

foreach($cli_telefonos as $cli_telefono){
	?>
	<div class="uno" id='uno_cli_telefono_<?php echo $cli_telefono->getId() ?>' identificador="<?php echo $cli_telefono->getId() ?>" >
	<?php
	include 'uno_cli_telefono_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
