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
$arr_prv_convenio_descuentos = $o_padre->getPrvConvenioDescuentosParaBloqueVinculo($palabra, $pagina);
$prv_convenio_descuentos = $arr_prv_convenio_descuentos['COLECCION'];
$paginador = $arr_prv_convenio_descuentos['PAGINADOR'];

foreach($prv_convenio_descuentos as $prv_convenio_descuento){
	?>
	<div class="uno" id='uno_prv_convenio_descuento_<?php echo $prv_convenio_descuento->getId() ?>' identificador="<?php echo $prv_convenio_descuento->getId() ?>" >
	<?php
	include 'uno_prv_convenio_descuento_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
