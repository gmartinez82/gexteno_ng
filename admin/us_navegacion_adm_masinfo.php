<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$us_navegacion_id = Gral::getVars(2, 'id');
$us_navegacion = UsNavegacion::getOxId($us_navegacion_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Navegador') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($us_navegacion->getNavegador())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Pagina') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($us_navegacion->getPagina())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Url') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($us_navegacion->getUrl())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Url Anterior') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($us_navegacion->getUrlReferer())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($us_navegacion->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'US_NAVEGACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_navegacion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($us_navegacion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'US_NAVEGACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_navegacion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($us_navegacion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

