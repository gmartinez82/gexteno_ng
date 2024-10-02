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
$arr_prv_descuento_comercials = $o_padre->getPrvDescuentoComercialsParaBloqueVinculo($palabra, $pagina);
$prv_descuento_comercials = $arr_prv_descuento_comercials['COLECCION'];
$paginador = $arr_prv_descuento_comercials['PAGINADOR'];

foreach($prv_descuento_comercials as $prv_descuento_comercial){
	?>
	<div class="uno" id='uno_prv_descuento_comercial_<?php echo $prv_descuento_comercial->getId() ?>' identificador="<?php echo $prv_descuento_comercial->getId() ?>" >
	<?php
	include 'uno_prv_descuento_comercial_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
