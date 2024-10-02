<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$vta_comision_gral_fp_forma_pago_cheque = VtaComisionGralFpFormaPagoCheque::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('VtaComision') ?></div>
        <div class='dato'><?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getVtaComision()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaComisionGralFpFormaPago') ?></div>
        <div class='dato'><?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getVtaComisionGralFpFormaPago()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GralBanco') ?></div>
        <div class='dato'><?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getGralBanco()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Numero de Cheque') ?></div>
        <div class='dato'><?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getNumeroCheque()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Fecha de Emision') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($vta_comision_gral_fp_forma_pago_cheque->getFechaEmision())) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Fecha de Cobro') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($vta_comision_gral_fp_forma_pago_cheque->getFechaCobro())) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Firmante') ?></div>
        <div class='dato'><?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getFirmante()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Entregador') ?></div>
        <div class='dato'><?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getEntregador()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($vta_comision_gral_fp_forma_pago_cheque->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_gral_fp_forma_pago_cheque->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_gral_fp_forma_pago_cheque->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

