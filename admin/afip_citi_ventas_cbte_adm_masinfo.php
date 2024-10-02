<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$afip_citi_ventas_cbte_id = Gral::getVars(2, 'id');
$afip_citi_ventas_cbte = AfipCitiVentasCbte::getOxId($afip_citi_ventas_cbte_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($afip_citi_ventas_cbte->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'AFIP_CITI_VENTAS_CBTE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_ventas_cbte->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($afip_citi_ventas_cbte->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'AFIP_CITI_VENTAS_CBTE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_ventas_cbte->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($afip_citi_ventas_cbte->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

