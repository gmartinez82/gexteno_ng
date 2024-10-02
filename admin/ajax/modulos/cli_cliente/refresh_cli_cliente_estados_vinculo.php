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
$arr_cli_cliente_estados = $o_padre->getCliClienteEstadosParaBloqueVinculo($palabra, $pagina);
$cli_cliente_estados = $arr_cli_cliente_estados['COLECCION'];
$paginador = $arr_cli_cliente_estados['PAGINADOR'];

foreach($cli_cliente_estados as $cli_cliente_estado){
	?>
	<div class="uno" id='uno_cli_cliente_estado_<?php echo $cli_cliente_estado->getId() ?>' identificador="<?php echo $cli_cliente_estado->getId() ?>" >
	<?php
	include 'uno_cli_cliente_estado_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
