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
$arr_prv_descuento_financieros = $o_padre->getPrvDescuentoFinancierosParaBloqueVinculo($palabra, $pagina);
$prv_descuento_financieros = $arr_prv_descuento_financieros['COLECCION'];
$paginador = $arr_prv_descuento_financieros['PAGINADOR'];

foreach($prv_descuento_financieros as $prv_descuento_financiero){
	?>
	<div class="uno" id='uno_prv_descuento_financiero_<?php echo $prv_descuento_financiero->getId() ?>' identificador="<?php echo $prv_descuento_financiero->getId() ?>" >
	<?php
	include 'uno_prv_descuento_financiero_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
