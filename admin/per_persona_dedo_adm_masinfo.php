<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$per_persona_dedo_id = Gral::getVars(2, 'id');
$per_persona_dedo = PerPersonaDedo::getOxId($per_persona_dedo_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('PerPersona') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_persona_dedo->getPerPersona()->getDescripcion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Dedo Info') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_persona_dedo->getDedoInfo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_persona_dedo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PER_PERSONA_DEDO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona_dedo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($per_persona_dedo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PER_PERSONA_DEDO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona_dedo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($per_persona_dedo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

