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
$arr_prv_telefonos = $o_padre->getPrvTelefonosParaBloqueVinculo($palabra, $pagina);
$prv_telefonos = $arr_prv_telefonos['COLECCION'];
$paginador = $arr_prv_telefonos['PAGINADOR'];

foreach($prv_telefonos as $prv_telefono){
	?>
	<div class="uno" id='uno_prv_telefono_<?php echo $prv_telefono->getId() ?>' identificador="<?php echo $prv_telefono->getId() ?>" >
	<?php
	include 'uno_prv_telefono_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
