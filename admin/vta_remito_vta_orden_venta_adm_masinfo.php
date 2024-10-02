<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_remito_vta_orden_venta_id = Gral::getVars(2, 'id');
$vta_remito_vta_orden_venta = VtaRemitoVtaOrdenVenta::getOxId($vta_remito_vta_orden_venta_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_remito_vta_orden_venta->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_REMITO_VTA_ORDEN_VENTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_vta_orden_venta->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_remito_vta_orden_venta->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_REMITO_VTA_ORDEN_VENTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_vta_orden_venta->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_remito_vta_orden_venta->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

