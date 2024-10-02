<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$cntb_diario_asiento_vta_recibo_id = Gral::getVars(2, 'id');
$cntb_diario_asiento_vta_recibo = CntbDiarioAsientoVtaRecibo::getOxId($cntb_diario_asiento_vta_recibo_id);
?>
<div class="masinfo-datos">

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CNTB_DIARIO_ASIENTO_VTA_RECIBO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_vta_recibo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cntb_diario_asiento_vta_recibo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CNTB_DIARIO_ASIENTO_VTA_RECIBO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_vta_recibo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cntb_diario_asiento_vta_recibo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

