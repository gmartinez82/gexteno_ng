<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$prv_importacion_resultado_id = Gral::getVars(2, 'id');
$prv_importacion_resultado = PrvImportacionResultado::getOxId($prv_importacion_resultado_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_importacion_resultado->getObservacion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones Tecnicas') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_importacion_resultado->getObservacionTecnica())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRV_IMPORTACION_RESULTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_importacion_resultado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prv_importacion_resultado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRV_IMPORTACION_RESULTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_importacion_resultado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prv_importacion_resultado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

