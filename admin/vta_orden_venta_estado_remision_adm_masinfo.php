<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_orden_venta_estado_remision_id = Gral::getVars(2, 'id');
$vta_orden_venta_estado_remision = VtaOrdenVentaEstadoRemision::getOxId($vta_orden_venta_estado_remision_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_orden_venta_estado_remision->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_ORDEN_VENTA_ESTADO_REMISION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_estado_remision->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_orden_venta_estado_remision->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_ORDEN_VENTA_ESTADO_REMISION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_estado_remision->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_orden_venta_estado_remision->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

