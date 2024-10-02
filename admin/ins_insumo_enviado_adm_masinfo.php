<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ins_insumo_enviado_id = Gral::getVars(2, 'id');
$ins_insumo_enviado = InsInsumoEnviado::getOxId($ins_insumo_enviado_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Cuerpo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo_enviado->getCuerpo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Adjunto') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo_enviado->getAdjunto())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Codigo de Envio') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo_enviado->getCodigoEnvio())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo_enviado->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_INSUMO_ENVIADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_enviado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_insumo_enviado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_INSUMO_ENVIADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_enviado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_insumo_enviado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

