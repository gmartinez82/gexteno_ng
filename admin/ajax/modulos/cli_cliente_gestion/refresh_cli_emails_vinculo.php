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
$arr_cli_emails = $o_padre->getCliEmailsParaBloqueVinculo($palabra, $pagina);
$cli_emails = $arr_cli_emails['COLECCION'];
$paginador = $arr_cli_emails['PAGINADOR'];


foreach($cli_emails as $cli_email){
	?>
	<div class="uno" id='uno_cli_email_<?php echo $cli_email->getId() ?>' identificador="<?php echo $cli_email->getId() ?>" >
	<?php
	include 'uno_cli_email_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
