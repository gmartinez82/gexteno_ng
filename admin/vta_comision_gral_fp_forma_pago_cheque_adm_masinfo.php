<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_comision_gral_fp_forma_pago_cheque_id = Gral::getVars(2, 'id');
$vta_comision_gral_fp_forma_pago_cheque = VtaComisionGralFpFormaPagoCheque::getOxId($vta_comision_gral_fp_forma_pago_cheque_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_comision_gral_fp_forma_pago_cheque->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_COMISION_GRAL_FP_FORMA_PAGO_CHEQUE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_gral_fp_forma_pago_cheque->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_COMISION_GRAL_FP_FORMA_PAGO_CHEQUE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_gral_fp_forma_pago_cheque->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

