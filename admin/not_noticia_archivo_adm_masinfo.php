<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$not_noticia_archivo_id = Gral::getVars(2, 'id');
$not_noticia_archivo = NotNoticiaArchivo::getOxId($not_noticia_archivo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($not_noticia_archivo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'NOT_NOTICIA_ARCHIVO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_noticia_archivo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($not_noticia_archivo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'NOT_NOTICIA_ARCHIVO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_noticia_archivo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($not_noticia_archivo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

