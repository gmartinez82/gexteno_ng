<?php
include_once '_autoload.php';

$padre = Gral::getVars(1, 'padre');
$padre_id = Gral::getVars(1, 'padre_id');
$hijo = Gral::getVars(1, 'hijo');
$palabra = Gral::getVars(1, 'palabra');
$pagina = Gral::getVars(1, 'pagina', 1);

$padre_clase = Gral::getDBClaseDesdeTabla($padre);

$o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');
$arr_ins_insumo_instancias = $o_padre->getInsInsumoInstanciasParaBloqueVinculo($palabra, $pagina);
$ins_insumo_instancias = $arr_ins_insumo_instancias['COLECCION'];
$paginador = $arr_ins_insumo_instancias['PAGINADOR'];


foreach($ins_insumo_instancias as $ins_insumo_instancia){
	?>
	<div class="uno" id='uno_ins_insumo_instancia_<?php echo $ins_insumo_instancia->getId() ?>' identificador="<?php echo $ins_insumo_instancia->getId() ?>" >
	<?php
	include 'uno_ins_insumo_instancia_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
