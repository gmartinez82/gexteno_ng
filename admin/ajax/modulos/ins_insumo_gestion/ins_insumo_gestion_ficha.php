<?php
include '_autoload.php';
$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$ins_insumo = InsInsumo::getOxId($id);

?>
<div class='ficha'>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('InsMarca') ?></div>
		<div class='dato'><?php Gral::_echo($ins_insumo->getInsMarca()->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('InsMatriz') ?></div>
		<div class='dato'><?php Gral::_echo($ins_insumo->getInsMatriz()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Descripcion') ?></div>
		<div class='dato'><?php Gral::_echo($ins_insumo->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Codigo Marca') ?></div>
		<div class='dato'><?php Gral::_echo($ins_insumo->getCodigoMarca()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Codigo Interno') ?></div>
		<div class='dato'><?php Gral::_echo($ins_insumo->getCodigoInterno()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Codigo Barra') ?></div>
		<div class='dato'><?php Gral::_echo($ins_insumo->getCodigoBarra()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Codigo Barra Interno') ?></div>
		<div class='dato'><?php Gral::_echo($ins_insumo->getCodigoBarraInterno()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Es Comprable') ?></div>
		<div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_insumo->getEsComprable())->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Es Consumible') ?></div>
		<div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_insumo->getEsConsumible())->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Es Transformable') ?></div>
		<div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_insumo->getEsTransformableOrigen())->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Es Destino Transformacion') ?></div>
		<div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_insumo->getEsTransformableDestino())->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('ins_unidad_medida_pedido_id') ?></div>
		<div class='dato'><?php Gral::_echo($ins_insumo->getInsUnidadMedidaPedido()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Retor') ?></div>
		<div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_insumo->getRetornable())->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Ident') ?></div>
		<div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_insumo->getIdentificable())->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Punto de Minimo Default') ?></div>
		<div class='dato'><?php Gral::_echo($ins_insumo->getPuntoMinimo()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Punto de Pedido Default') ?></div>
		<div class='dato'><?php Gral::_echo($ins_insumo->getPuntoPedido()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Punto de Maximo Default') ?></div>
		<div class='dato'><?php Gral::_echo($ins_insumo->getPuntoMaximo()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Cant Max Pedido') ?></div>
		<div class='dato'><?php Gral::_echo($ins_insumo->getCantidadMaximaPedido()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Observaciones') ?></div>
		<div class='dato'><?php Gral::_echo($ins_insumo->getObservacion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('orden') ?></div>
		<div class='dato'><?php Gral::_echo($ins_insumo->getOrden()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('estado') ?></div>
		<div class='dato'><?php Gral::_echo($ins_insumo->getOrden()) ?></div>
	</div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par '>
		<div class='label'><?php Lang::_lang('Creado') ?></div>
		<div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo->getCreado())) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Creado Por') ?></div>
		<div class='dato'><?php Gral::_echo($ins_insumo->getCreadoPorDescripcion()) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par '>
		<div class='label'><?php Lang::_lang('Modificado') ?></div>
		<div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo->getModificado())) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Modificado Por') ?></div>
		<div class='dato'><?php Gral::_echo($ins_insumo->getModificadoPorDescripcion()) ?></div>
	</div>
<?php } ?>

</div>

