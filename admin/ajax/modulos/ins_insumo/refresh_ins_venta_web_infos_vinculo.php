<?php
include_once '_autoload.php';

$padre = Gral::getVars(1, 'padre');
$padre_id = Gral::getVars(1, 'padre_id');
$hijo = Gral::getVars(1, 'hijo');
$palabra = Gral::getVars(1, 'palabra');
$pagina = Gral::getVars(1, 'pagina', 1);

$padre_clase = Gral::getDBClaseDesdeTabla($padre);

$o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');
$arr_ins_venta_web_infos = $o_padre->getInsVentaWebInfosParaBloqueVinculo($palabra, $pagina);
$ins_venta_web_infos = $arr_ins_venta_web_infos['COLECCION'];
$paginador = $arr_ins_venta_web_infos['PAGINADOR'];


foreach($ins_venta_web_infos as $ins_venta_web_info){
	?>
	<div class="uno" id='uno_ins_venta_web_info_<?php echo $ins_venta_web_info->getId() ?>' identificador="<?php echo $ins_venta_web_info->getId() ?>" >
	<?php
	include 'uno_ins_venta_web_info_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
