<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gral_sucursal_vta_punto_venta_id = Gral::getVars(2, 'id');
$gral_sucursal_vta_punto_venta = GralSucursalVtaPuntoVenta::getOxId($gral_sucursal_vta_punto_venta_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_sucursal_vta_punto_venta->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_SUCURSAL_VTA_PUNTO_VENTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_vta_punto_venta->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_sucursal_vta_punto_venta->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_SUCURSAL_VTA_PUNTO_VENTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_vta_punto_venta->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_sucursal_vta_punto_venta->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

