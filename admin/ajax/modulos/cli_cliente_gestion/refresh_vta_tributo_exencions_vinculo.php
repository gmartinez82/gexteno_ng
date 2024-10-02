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
$arr_vta_tributo_exencions = $o_padre->getVtaTributoExencionsParaBloqueVinculo($palabra, $pagina);
$vta_tributo_exencions = $arr_vta_tributo_exencions['COLECCION'];
$paginador = $arr_vta_tributo_exencions['PAGINADOR'];


foreach($vta_tributo_exencions as $vta_tributo_exencion){
	?>
	<div class="uno" id='uno_vta_tributo_exencion_<?php echo $vta_tributo_exencion->getId() ?>' identificador="<?php echo $vta_tributo_exencion->getId() ?>" >
	<?php
	include 'uno_vta_tributo_exencion_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
