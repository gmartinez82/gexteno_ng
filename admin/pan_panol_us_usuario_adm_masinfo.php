<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pan_panol_us_usuario_id = Gral::getVars(2, 'id');
$pan_panol_us_usuario = PanPanolUsUsuario::getOxId($pan_panol_us_usuario_id);
?>
<div class="masinfo-datos">

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PAN_PANOL_US_USUARIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pan_panol_us_usuario->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pan_panol_us_usuario->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PAN_PANOL_US_USUARIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pan_panol_us_usuario->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pan_panol_us_usuario->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

