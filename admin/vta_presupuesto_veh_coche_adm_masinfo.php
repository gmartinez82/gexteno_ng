<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_presupuesto_veh_coche_id = Gral::getVars(2, 'id');
$vta_presupuesto_veh_coche = VtaPresupuestoVehCoche::getOxId($vta_presupuesto_veh_coche_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_presupuesto_veh_coche->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_PRESUPUESTO_VEH_COCHE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_veh_coche->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_presupuesto_veh_coche->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_PRESUPUESTO_VEH_COCHE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_veh_coche->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_presupuesto_veh_coche->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

