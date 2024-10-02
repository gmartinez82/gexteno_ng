<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$not_noticia_leida_id = Gral::getVars(2, 'id');
$not_noticia_leida = NotNoticiaLeida::getOxId($not_noticia_leida_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($not_noticia_leida->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'NOT_NOTICIA_LEIDA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_noticia_leida->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($not_noticia_leida->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'NOT_NOTICIA_LEIDA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_noticia_leida->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($not_noticia_leida->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

