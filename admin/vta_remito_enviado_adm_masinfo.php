<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_remito_enviado_id = Gral::getVars(2, 'id');
$vta_remito_enviado = VtaRemitoEnviado::getOxId($vta_remito_enviado_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Cuerpo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_remito_enviado->getCuerpo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Adjunto') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_remito_enviado->getAdjunto())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Codigo de Envio') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_remito_enviado->getCodigoEnvio())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_remito_enviado->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_REMITO_ENVIADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_enviado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_remito_enviado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_REMITO_ENVIADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_enviado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_remito_enviado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

