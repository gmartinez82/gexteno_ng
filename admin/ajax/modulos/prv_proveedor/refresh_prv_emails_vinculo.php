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
$arr_prv_emails = $o_padre->getPrvEmailsParaBloqueVinculo($palabra, $pagina);
$prv_emails = $arr_prv_emails['COLECCION'];
$paginador = $arr_prv_emails['PAGINADOR'];

foreach($prv_emails as $prv_email){
	?>
	<div class="uno" id='uno_prv_email_<?php echo $prv_email->getId() ?>' identificador="<?php echo $prv_email->getId() ?>" >
	<?php
	include 'uno_prv_email_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
