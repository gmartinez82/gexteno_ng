<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gral_sucursal_cli_cliente_id = Gral::getVars(2, 'id');
$gral_sucursal_cli_cliente = GralSucursalCliCliente::getOxId($gral_sucursal_cli_cliente_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_sucursal_cli_cliente->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_SUCURSAL_CLI_CLIENTE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_cli_cliente->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_sucursal_cli_cliente->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_SUCURSAL_CLI_CLIENTE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_cli_cliente->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_sucursal_cli_cliente->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

