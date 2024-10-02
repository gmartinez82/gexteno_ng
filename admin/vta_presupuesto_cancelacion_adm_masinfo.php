<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_presupuesto_cancelacion_id = Gral::getVars(2, 'id');
$vta_presupuesto_cancelacion = VtaPresupuestoCancelacion::getOxId($vta_presupuesto_cancelacion_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_presupuesto_cancelacion->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_PRESUPUESTO_CANCELACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_cancelacion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_presupuesto_cancelacion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_PRESUPUESTO_CANCELACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_cancelacion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_presupuesto_cancelacion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

