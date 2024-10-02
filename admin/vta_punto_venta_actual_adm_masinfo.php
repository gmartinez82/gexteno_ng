<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_punto_venta_actual_id = Gral::getVars(2, 'id');
$vta_punto_venta_actual = VtaPuntoVentaActual::getOxId($vta_punto_venta_actual_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Serie') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_punto_venta_actual->getSerie())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_punto_venta_actual->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_PUNTO_VENTA_ACTUAL_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_punto_venta_actual->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_punto_venta_actual->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_PUNTO_VENTA_ACTUAL_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_punto_venta_actual->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_punto_venta_actual->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

