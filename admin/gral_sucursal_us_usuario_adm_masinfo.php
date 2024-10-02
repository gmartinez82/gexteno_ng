<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gral_sucursal_us_usuario_id = Gral::getVars(2, 'id');
$gral_sucursal_us_usuario = GralSucursalUsUsuario::getOxId($gral_sucursal_us_usuario_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_sucursal_us_usuario->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_SUCURSAL_US_USUARIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_us_usuario->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_sucursal_us_usuario->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_SUCURSAL_US_USUARIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_us_usuario->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_sucursal_us_usuario->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

