<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$not_video_id = Gral::getVars(2, 'id');
$not_video = NotVideo::getOxId($not_video_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('HMTL Externo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($not_video->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'NOT_VIDEO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_video->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($not_video->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'NOT_VIDEO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_video->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($not_video->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

