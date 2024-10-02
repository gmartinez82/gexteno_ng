<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_nota_debito_item_id = Gral::getVars(2, 'id');
$vta_nota_debito_item = VtaNotaDebitoItem::getOxId($vta_nota_debito_item_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_nota_debito_item->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_NOTA_DEBITO_ITEM_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito_item->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_nota_debito_item->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_NOTA_DEBITO_ITEM_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito_item->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_nota_debito_item->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

