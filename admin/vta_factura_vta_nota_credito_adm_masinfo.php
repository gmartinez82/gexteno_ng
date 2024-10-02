<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_factura_vta_nota_credito_id = Gral::getVars(2, 'id');
$vta_factura_vta_nota_credito = VtaFacturaVtaNotaCredito::getOxId($vta_factura_vta_nota_credito_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_factura_vta_nota_credito->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_FACTURA_VTA_NOTA_CREDITO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_vta_nota_credito->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_factura_vta_nota_credito->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_FACTURA_VTA_NOTA_CREDITO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_vta_nota_credito->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_factura_vta_nota_credito->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

