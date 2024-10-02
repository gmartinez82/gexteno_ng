<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_recibo_item_retencion_id = Gral::getVars(2, 'id');
$vta_recibo_item_retencion = VtaReciboItemRetencion::getOxId($vta_recibo_item_retencion_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_recibo_item_retencion->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_RECIBO_ITEM_RETENCION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_item_retencion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_recibo_item_retencion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_RECIBO_ITEM_RETENCION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_item_retencion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_recibo_item_retencion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

