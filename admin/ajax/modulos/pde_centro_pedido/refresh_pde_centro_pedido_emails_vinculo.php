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
$arr_pde_centro_pedido_emails = $o_padre->getPdeCentroPedidoEmailsParaBloqueVinculo($palabra, $pagina);
$pde_centro_pedido_emails = $arr_pde_centro_pedido_emails['COLECCION'];
$paginador = $arr_pde_centro_pedido_emails['PAGINADOR'];


foreach($pde_centro_pedido_emails as $pde_centro_pedido_email){
	?>
	<div class="uno" id='uno_pde_centro_pedido_email_<?php echo $pde_centro_pedido_email->getId() ?>' identificador="<?php echo $pde_centro_pedido_email->getId() ?>" >
	<?php
	include 'uno_pde_centro_pedido_email_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
