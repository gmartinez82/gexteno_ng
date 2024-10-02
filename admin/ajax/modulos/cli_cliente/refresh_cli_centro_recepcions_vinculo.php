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
$arr_cli_centro_recepcions = $o_padre->getCliCentroRecepcionsParaBloqueVinculo($palabra, $pagina);
$cli_centro_recepcions = $arr_cli_centro_recepcions['COLECCION'];
$paginador = $arr_cli_centro_recepcions['PAGINADOR'];

foreach($cli_centro_recepcions as $cli_centro_recepcion){
	?>
	<div class="uno" id='uno_cli_centro_recepcion_<?php echo $cli_centro_recepcion->getId() ?>' identificador="<?php echo $cli_centro_recepcion->getId() ?>" >
	<?php
	include 'uno_cli_centro_recepcion_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
