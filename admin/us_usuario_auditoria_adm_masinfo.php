<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$us_usuario_auditoria_id = Gral::getVars(2, 'id');
$us_usuario_auditoria = UsUsuarioAuditoria::getOxId($us_usuario_auditoria_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($us_usuario_auditoria->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Pagina') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($us_usuario_auditoria->getPagina())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Url') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($us_usuario_auditoria->getUrl())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Comando') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($us_usuario_auditoria->getComando())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Before') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($us_usuario_auditoria->getDatoBefore())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('After') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($us_usuario_auditoria->getDatoAfter())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($us_usuario_auditoria->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'US_USUARIO_AUDITORIA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_usuario_auditoria->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($us_usuario_auditoria->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'US_USUARIO_AUDITORIA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_usuario_auditoria->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($us_usuario_auditoria->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

