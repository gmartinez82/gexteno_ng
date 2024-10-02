<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$fnd_chq_tipo_emisor_fnd_chq_tipo_estado_id = Gral::getVars(2, 'id');
$fnd_chq_tipo_emisor_fnd_chq_tipo_estado = FndChqTipoEmisorFndChqTipoEstado::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'FND_CHQ_TIPO_EMISOR_FND_CHQ_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'FND_CHQ_TIPO_EMISOR_FND_CHQ_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

