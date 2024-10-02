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
$arr_cli_cliente_info_sifens = $o_padre->getCliClienteInfoSifensParaBloqueVinculo($palabra, $pagina);
$cli_cliente_info_sifens = $arr_cli_cliente_info_sifens['COLECCION'];
$paginador = $arr_cli_cliente_info_sifens['PAGINADOR'];

foreach($cli_cliente_info_sifens as $cli_cliente_info_sifen){
	?>
	<div class="uno" id='uno_cli_cliente_info_sifen_<?php echo $cli_cliente_info_sifen->getId() ?>' identificador="<?php echo $cli_cliente_info_sifen->getId() ?>" >
	<?php
	include 'uno_cli_cliente_info_sifen_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
