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
$arr_ctrl_equipo_estados = $o_padre->getCtrlEquipoEstadosParaBloqueVinculo($palabra, $pagina);
$ctrl_equipo_estados = $arr_ctrl_equipo_estados['COLECCION'];
$paginador = $arr_ctrl_equipo_estados['PAGINADOR'];

foreach($ctrl_equipo_estados as $ctrl_equipo_estado){
	?>
	<div class="uno" id='uno_ctrl_equipo_estado_<?php echo $ctrl_equipo_estado->getId() ?>' identificador="<?php echo $ctrl_equipo_estado->getId() ?>" >
	<?php
	include 'uno_ctrl_equipo_estado_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
