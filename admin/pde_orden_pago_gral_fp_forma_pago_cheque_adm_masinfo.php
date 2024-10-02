<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_orden_pago_gral_fp_forma_pago_cheque_id = Gral::getVars(2, 'id');
$pde_orden_pago_gral_fp_forma_pago_cheque = PdeOrdenPagoGralFpFormaPagoCheque::getOxId($pde_orden_pago_gral_fp_forma_pago_cheque_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_orden_pago_gral_fp_forma_pago_cheque->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_CHEQUE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago_gral_fp_forma_pago_cheque->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_orden_pago_gral_fp_forma_pago_cheque->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_CHEQUE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago_gral_fp_forma_pago_cheque->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_orden_pago_gral_fp_forma_pago_cheque->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

