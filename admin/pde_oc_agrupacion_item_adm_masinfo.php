<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_oc_agrupacion_item_id = Gral::getVars(2, 'id');
$pde_oc_agrupacion_item = PdeOcAgrupacionItem::getOxId($pde_oc_agrupacion_item_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_oc_agrupacion_item->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_OC_AGRUPACION_ITEM_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_agrupacion_item->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_oc_agrupacion_item->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_OC_AGRUPACION_ITEM_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_agrupacion_item->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_oc_agrupacion_item->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

