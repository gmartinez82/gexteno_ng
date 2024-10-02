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
$arr_cli_cliente_estado_satisfaccions = $o_padre->getCliClienteEstadoSatisfaccionsParaBloqueVinculo($palabra, $pagina);
$cli_cliente_estado_satisfaccions = $arr_cli_cliente_estado_satisfaccions['COLECCION'];
$paginador = $arr_cli_cliente_estado_satisfaccions['PAGINADOR'];

foreach($cli_cliente_estado_satisfaccions as $cli_cliente_estado_satisfaccion){
	?>
	<div class="uno" id='uno_cli_cliente_estado_satisfaccion_<?php echo $cli_cliente_estado_satisfaccion->getId() ?>' identificador="<?php echo $cli_cliente_estado_satisfaccion->getId() ?>" >
	<?php
	include 'uno_cli_cliente_estado_satisfaccion_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
