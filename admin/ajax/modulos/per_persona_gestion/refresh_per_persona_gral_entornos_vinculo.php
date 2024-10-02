<?php
include_once '_autoload.php';

$padre = Gral::getVars(1, 'padre');
$padre_id = Gral::getVars(1, 'padre_id');
$hijo = Gral::getVars(1, 'hijo');
$palabra = Gral::getVars(1, 'palabra');
$pagina = Gral::getVars(1, 'pagina', 1);

$padre_clase = Gral::getDBClaseDesdeTabla($padre);

$o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');
$arr_per_persona_gral_entornos = $o_padre->getPerPersonaGralEntornosParaBloqueVinculo($palabra, $pagina);
$per_persona_gral_entornos = $arr_per_persona_gral_entornos['COLECCION'];
$paginador = $arr_per_persona_gral_entornos['PAGINADOR'];


foreach($per_persona_gral_entornos as $per_persona_gral_entorno){
	?>
	<div class="uno" id='uno_per_persona_gral_entorno_<?php echo $per_persona_gral_entorno->getId() ?>' identificador="<?php echo $per_persona_gral_entorno->getId() ?>" >
	<?php
	include 'uno_per_persona_gral_entorno_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
