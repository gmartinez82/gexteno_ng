<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$pdi_pedido_agrupacion = PdiPedidoAgrupacion::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_pedido_agrupacion->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_pedido_agrupacion->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PanPanolOrigen') ?></div>
        <div class='dato'><?php Gral::_echo(($pdi_pedido_agrupacion->getPanPanolOrigen() != 'null') ? PanPanol::getOxId($pdi_pedido_agrupacion->getPanPanolOrigen())->getDescripcion() : '') ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PanPanolDestino') ?></div>
        <div class='dato'><?php Gral::_echo(($pdi_pedido_agrupacion->getPanPanolDestino() != 'null') ? PanPanol::getOxId($pdi_pedido_agrupacion->getPanPanolDestino())->getDescripcion() : '') ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PdiPedidoAgrupacionTipoEstado') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_pedido_agrupacion->getPdiPedidoAgrupacionTipoEstado()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PdiTipoOrigen') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_pedido_agrupacion->getPdiTipoOrigen()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PdiUrgencia') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_pedido_agrupacion->getPdiUrgencia()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Nota Publica') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_pedido_agrupacion->getNotaPublica()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Nota Interna') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_pedido_agrupacion->getNotaInterna()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_pedido_agrupacion->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_pedido_agrupacion->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('estado') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_pedido_agrupacion->getOrden()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_agrupacion->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_pedido_agrupacion->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_agrupacion->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($pdi_pedido_agrupacion->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

