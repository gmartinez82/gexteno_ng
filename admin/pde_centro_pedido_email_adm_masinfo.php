<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_centro_pedido_email_id = Gral::getVars(2, 'id');
$pde_centro_pedido_email = PdeCentroPedidoEmail::getOxId($pde_centro_pedido_email_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_centro_pedido_email->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_CENTRO_PEDIDO_EMAIL_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_centro_pedido_email->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_centro_pedido_email->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_CENTRO_PEDIDO_EMAIL_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_centro_pedido_email->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_centro_pedido_email->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

