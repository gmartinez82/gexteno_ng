<?php
include_once '_autoload.php';

$padre = Gral::getVars(1, 'padre');
$padre_id = Gral::getVars(1, 'padre_id');
$hijo = Gral::getVars(1, 'hijo');
$palabra = Gral::getVars(1, 'palabra');
$pagina = Gral::getVars(1, 'pagina', 1);

$padre_clase = Gral::getDBClaseDesdeTabla($padre);

$o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');
$arr_us_usuario_auditorias = $o_padre->getUsUsuarioAuditoriasParaBloqueVinculo($palabra, $pagina);
$us_usuario_auditorias = $arr_us_usuario_auditorias['COLECCION'];
$paginador = $arr_us_usuario_auditorias['PAGINADOR'];


foreach($us_usuario_auditorias as $us_usuario_auditoria){
	?>
	<div class="uno" id='uno_us_usuario_auditoria_<?php echo $us_usuario_auditoria->getId() ?>' identificador="<?php echo $us_usuario_auditoria->getId() ?>" >
	<?php
	include 'uno_us_usuario_auditoria_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
