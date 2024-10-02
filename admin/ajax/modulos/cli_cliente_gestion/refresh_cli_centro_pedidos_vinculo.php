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
$arr_cli_centro_pedidos = $o_padre->getCliCentroPedidosParaBloqueVinculo($palabra, $pagina);
$cli_centro_pedidos = $arr_cli_centro_pedidos['COLECCION'];
$paginador = $arr_cli_centro_pedidos['PAGINADOR'];


foreach($cli_centro_pedidos as $cli_centro_pedido){
	?>
	<div class="uno" id='uno_cli_centro_pedido_<?php echo $cli_centro_pedido->getId() ?>' identificador="<?php echo $cli_centro_pedido->getId() ?>" >
	<?php
	include 'uno_cli_centro_pedido_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
