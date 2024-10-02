<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$alt_control_us_usuario_id = Gral::getVars(2, 'id');
$alt_control_us_usuario = AltControlUsUsuario::getOxId($alt_control_us_usuario_id);
?>
<div class="masinfo-datos">

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'ALT_CONTROL_US_USUARIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($alt_control_us_usuario->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($alt_control_us_usuario->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

