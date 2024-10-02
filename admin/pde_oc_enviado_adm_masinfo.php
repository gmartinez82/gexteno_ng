<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_oc_enviado_id = Gral::getVars(2, 'id');
$pde_oc_enviado = PdeOcEnviado::getOxId($pde_oc_enviado_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Cuerpo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_oc_enviado->getCuerpo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Adjunto') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_oc_enviado->getAdjunto())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Codigo de Envio') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_oc_enviado->getCodigoEnvio())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_oc_enviado->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_OC_ENVIADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_enviado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_oc_enviado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_OC_ENVIADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_enviado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_oc_enviado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

