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
$arr_cli_domicilios = $o_padre->getCliDomiciliosParaBloqueVinculo($palabra, $pagina);
$cli_domicilios = $arr_cli_domicilios['COLECCION'];
$paginador = $arr_cli_domicilios['PAGINADOR'];


foreach($cli_domicilios as $cli_domicilio){
	?>
	<div class="uno" id='uno_cli_domicilio_<?php echo $cli_domicilio->getId() ?>' identificador="<?php echo $cli_domicilio->getId() ?>" >
	<?php
	include 'uno_cli_domicilio_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
