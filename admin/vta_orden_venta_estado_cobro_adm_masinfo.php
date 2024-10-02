<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_orden_venta_estado_cobro_id = Gral::getVars(2, 'id');
$vta_orden_venta_estado_cobro = VtaOrdenVentaEstadoCobro::getOxId($vta_orden_venta_estado_cobro_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_orden_venta_estado_cobro->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_ORDEN_VENTA_ESTADO_COBRO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_estado_cobro->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_orden_venta_estado_cobro->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_ORDEN_VENTA_ESTADO_COBRO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_estado_cobro->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_orden_venta_estado_cobro->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

