<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gral_sucursal_valoracion_id = Gral::getVars(2, 'id');
$gral_sucursal_valoracion = GralSucursalValoracion::getOxId($gral_sucursal_valoracion_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('GralSucursalValoracionAgrupacion') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_sucursal_valoracion->getGralSucursalValoracionAgrupacion()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('GralSucursalValoracionTipoItem') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_sucursal_valoracion->getGralSucursalValoracionTipoItem()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Apellido') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_sucursal_valoracion->getApellido())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Nombre') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_sucursal_valoracion->getNombre())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_sucursal_valoracion->getEmail())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_sucursal_valoracion->getTelefono())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_sucursal_valoracion->getCliCliente()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Session') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_sucursal_valoracion->getSession())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Navegador') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_sucursal_valoracion->getNavegador())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('IP') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_sucursal_valoracion->getIp())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Creado') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(Gral::getFechaHoraToWeb($gral_sucursal_valoracion->getCreado()))) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_SUCURSAL_VALORACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_valoracion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_sucursal_valoracion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_SUCURSAL_VALORACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_valoracion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_sucursal_valoracion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

