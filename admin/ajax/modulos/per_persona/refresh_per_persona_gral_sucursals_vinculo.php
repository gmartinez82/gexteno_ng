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
$arr_per_persona_gral_sucursals = $o_padre->getPerPersonaGralSucursalsParaBloqueVinculo($palabra, $pagina);
$per_persona_gral_sucursals = $arr_per_persona_gral_sucursals['COLECCION'];
$paginador = $arr_per_persona_gral_sucursals['PAGINADOR'];

foreach($per_persona_gral_sucursals as $per_persona_gral_sucursal){
	?>
	<div class="uno" id='uno_per_persona_gral_sucursal_<?php echo $per_persona_gral_sucursal->getId() ?>' identificador="<?php echo $per_persona_gral_sucursal->getId() ?>" >
	<?php
	include 'uno_per_persona_gral_sucursal_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
