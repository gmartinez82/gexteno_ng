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
$arr_ins_insumo_bultos = $o_padre->getInsInsumoBultosParaBloqueVinculo($palabra, $pagina);
$ins_insumo_bultos = $arr_ins_insumo_bultos['COLECCION'];
$paginador = $arr_ins_insumo_bultos['PAGINADOR'];

foreach($ins_insumo_bultos as $ins_insumo_bulto){
	?>
	<div class="uno" id='uno_ins_insumo_bulto_<?php echo $ins_insumo_bulto->getId() ?>' identificador="<?php echo $ins_insumo_bulto->getId() ?>" >
	<?php
	include 'uno_ins_insumo_bulto_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
