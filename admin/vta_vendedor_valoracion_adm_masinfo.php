<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_vendedor_valoracion_id = Gral::getVars(2, 'id');
$vta_vendedor_valoracion = VtaVendedorValoracion::getOxId($vta_vendedor_valoracion_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('VtaVendedorValoracionAgrupacion') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_vendedor_valoracion->getVtaVendedorValoracionAgrupacion()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('VtaVendedorValoracionTipoItem') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_vendedor_valoracion->getVtaVendedorValoracionTipoItem()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Apellido') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_vendedor_valoracion->getApellido())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Nombre') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_vendedor_valoracion->getNombre())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_vendedor_valoracion->getEmail())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_vendedor_valoracion->getTelefono())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_vendedor_valoracion->getCliCliente()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Session') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_vendedor_valoracion->getSession())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Navegador') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_vendedor_valoracion->getNavegador())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('IP') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_vendedor_valoracion->getIp())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Creado') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(Gral::getFechaHoraToWeb($vta_vendedor_valoracion->getCreado()))) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_VENDEDOR_VALORACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_valoracion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_vendedor_valoracion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_VENDEDOR_VALORACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_valoracion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_vendedor_valoracion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

