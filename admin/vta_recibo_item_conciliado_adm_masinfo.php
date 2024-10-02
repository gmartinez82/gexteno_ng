<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_recibo_item_conciliado_id = Gral::getVars(2, 'id');
$vta_recibo_item_conciliado = VtaReciboItemConciliado::getOxId($vta_recibo_item_conciliado_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_recibo_item_conciliado->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_RECIBO_ITEM_CONCILIADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_item_conciliado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_recibo_item_conciliado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_RECIBO_ITEM_CONCILIADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_item_conciliado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_recibo_item_conciliado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

