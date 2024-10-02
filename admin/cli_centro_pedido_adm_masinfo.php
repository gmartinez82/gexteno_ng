<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$cli_centro_pedido_id = Gral::getVars(2, 'id');
$cli_centro_pedido = CliCentroPedido::getOxId($cli_centro_pedido_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('GeoLocalidad') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_centro_pedido->getGeoLocalidad()->getDescripcion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_centro_pedido->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_CENTRO_PEDIDO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_centro_pedido->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_centro_pedido->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_CENTRO_PEDIDO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_centro_pedido->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_centro_pedido->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

