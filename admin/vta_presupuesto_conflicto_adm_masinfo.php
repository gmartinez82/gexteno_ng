<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_presupuesto_conflicto_id = Gral::getVars(2, 'id');
$vta_presupuesto_conflicto = VtaPresupuestoConflicto::getOxId($vta_presupuesto_conflicto_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_presupuesto_conflicto->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_PRESUPUESTO_CONFLICTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_conflicto->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_presupuesto_conflicto->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_PRESUPUESTO_CONFLICTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_conflicto->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_presupuesto_conflicto->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

