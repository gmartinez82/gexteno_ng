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
$arr_prv_preventistas = $o_padre->getPrvPreventistasParaBloqueVinculo($palabra, $pagina);
$prv_preventistas = $arr_prv_preventistas['COLECCION'];
$paginador = $arr_prv_preventistas['PAGINADOR'];

foreach($prv_preventistas as $prv_preventista){
	?>
	<div class="uno" id='uno_prv_preventista_<?php echo $prv_preventista->getId() ?>' identificador="<?php echo $prv_preventista->getId() ?>" >
	<?php
	include 'uno_prv_preventista_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
