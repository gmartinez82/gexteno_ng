<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$cntb_diario_asiento_vta_factura_id = Gral::getVars(2, 'id');
$cntb_diario_asiento_vta_factura = CntbDiarioAsientoVtaFactura::getOxId($cntb_diario_asiento_vta_factura_id);
?>
<div class="masinfo-datos">

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CNTB_DIARIO_ASIENTO_VTA_FACTURA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_vta_factura->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cntb_diario_asiento_vta_factura->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CNTB_DIARIO_ASIENTO_VTA_FACTURA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_vta_factura->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cntb_diario_asiento_vta_factura->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

