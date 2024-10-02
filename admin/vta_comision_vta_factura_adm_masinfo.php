<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_comision_vta_factura_id = Gral::getVars(2, 'id');
$vta_comision_vta_factura = VtaComisionVtaFactura::getOxId($vta_comision_vta_factura_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_comision_vta_factura->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_COMISION_VTA_FACTURA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_vta_factura->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_comision_vta_factura->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_COMISION_VTA_FACTURA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_vta_factura->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_comision_vta_factura->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

