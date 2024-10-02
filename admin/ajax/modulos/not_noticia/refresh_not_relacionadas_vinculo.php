<?php
include_once '_autoload.php';

$padre = Gral::getVars(1, 'padre');
$padre_id = Gral::getVars(1, 'padre_id');
$hijo = Gral::getVars(1, 'hijo');
$palabra = Gral::getVars(1, 'palabra');
$pagina = Gral::getVars(1, 'pagina', 1);

$padre_clase = Gral::getDBClaseDesdeTabla($padre);

$o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');
$arr_not_relacionadas = $o_padre->getNotRelacionadasParaBloqueVinculo($palabra, $pagina);
$not_relacionadas = $arr_not_relacionadas['COLECCION'];
$paginador = $arr_not_relacionadas['PAGINADOR'];


foreach($not_relacionadas as $not_relacionada){
	?>
	<div class="uno" id='uno_not_relacionada_<?php echo $not_relacionada->getId() ?>' identificador="<?php echo $not_relacionada->getId() ?>" >
	<?php
	include 'uno_not_relacionada_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
