<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$cli_cliente_vta_vendedor_id = Gral::getVars(2, 'id');
$cli_cliente_vta_vendedor = CliClienteVtaVendedor::getOxId($cli_cliente_vta_vendedor_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente_vta_vendedor->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_CLIENTE_VTA_VENDEDOR_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_vta_vendedor->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_cliente_vta_vendedor->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_CLIENTE_VTA_VENDEDOR_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_vta_vendedor->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_cliente_vta_vendedor->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

