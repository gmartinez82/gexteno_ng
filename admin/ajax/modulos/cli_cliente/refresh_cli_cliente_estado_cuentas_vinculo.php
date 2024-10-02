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
$arr_cli_cliente_estado_cuentas = $o_padre->getCliClienteEstadoCuentasParaBloqueVinculo($palabra, $pagina);
$cli_cliente_estado_cuentas = $arr_cli_cliente_estado_cuentas['COLECCION'];
$paginador = $arr_cli_cliente_estado_cuentas['PAGINADOR'];

foreach($cli_cliente_estado_cuentas as $cli_cliente_estado_cuenta){
	?>
	<div class="uno" id='uno_cli_cliente_estado_cuenta_<?php echo $cli_cliente_estado_cuenta->getId() ?>' identificador="<?php echo $cli_cliente_estado_cuenta->getId() ?>" >
	<?php
	include 'uno_cli_cliente_estado_cuenta_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
