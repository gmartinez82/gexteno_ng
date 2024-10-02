<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pdi_pedido_agrupacion_estado_id = Gral::getVars(2, 'id');
$pdi_pedido_agrupacion_estado = PdiPedidoAgrupacionEstado::getOxId($pdi_pedido_agrupacion_estado_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pdi_pedido_agrupacion_estado->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDI_PEDIDO_AGRUPACION_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_agrupacion_estado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pdi_pedido_agrupacion_estado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDI_PEDIDO_AGRUPACION_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_agrupacion_estado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pdi_pedido_agrupacion_estado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

