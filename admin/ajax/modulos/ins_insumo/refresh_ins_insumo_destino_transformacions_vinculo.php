<?php
include_once '_autoload.php';

$padre = Gral::getVars(1, 'padre');
$padre_id = Gral::getVars(1, 'padre_id');
$hijo = Gral::getVars(1, 'hijo');
$palabra = Gral::getVars(1, 'palabra');
$pagina = Gral::getVars(1, 'pagina', 1);

$padre_clase = Gral::getDBClaseDesdeTabla($padre);

$o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');
$arr_ins_insumo_destino_transformacions = $o_padre->getInsInsumoDestinoTransformacionsParaBloqueVinculo($palabra, $pagina);
$ins_insumo_destino_transformacions = $arr_ins_insumo_destino_transformacions['COLECCION'];
$paginador = $arr_ins_insumo_destino_transformacions['PAGINADOR'];


foreach($ins_insumo_destino_transformacions as $ins_insumo_destino_transformacion){
	?>
	<div class="uno" id='uno_ins_insumo_destino_transformacion_<?php echo $ins_insumo_destino_transformacion->getId() ?>' identificador="<?php echo $ins_insumo_destino_transformacion->getId() ?>" >
	<?php
	include 'uno_ins_insumo_destino_transformacion_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
