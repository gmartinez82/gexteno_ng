<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pdi_pedido_destinatario_id = Gral::getVars(2, 'id');
$pdi_pedido_destinatario = PdiPedidoDestinatario::getOxId($pdi_pedido_destinatario_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pdi_pedido_destinatario->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDI_PEDIDO_DESTINATARIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_destinatario->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pdi_pedido_destinatario->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDI_PEDIDO_DESTINATARIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_destinatario->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pdi_pedido_destinatario->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

