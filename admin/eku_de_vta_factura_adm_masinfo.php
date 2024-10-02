<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_de_vta_factura_id = Gral::getVars(2, 'id');
$eku_de_vta_factura = EkuDeVtaFactura::getOxId($eku_de_vta_factura_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_vta_factura->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_VTA_FACTURA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_vta_factura->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_vta_factura->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_VTA_FACTURA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_vta_factura->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_vta_factura->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

