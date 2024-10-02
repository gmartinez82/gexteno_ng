<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$gral_fp_forma_pago = GralFpFormaPago::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($gral_fp_forma_pago->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Desc Cta') ?></div>
        <div class='dato'><?php Gral::_echo($gral_fp_forma_pago->getDescripcionCorta()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($gral_fp_forma_pago->getCodigo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Contado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getContado())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Credito') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getCredito())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Inmediato') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getInmediato())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Rbo Autom') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getReciboAutomatico())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Compra') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getParaCompra())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Venta') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getParaVenta())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Cobro') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getParaCobro())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Pago') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getParaPago())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('CntbCuentaCompra') ?></div>
        <div class='dato'><?php Gral::_echo(($gral_fp_forma_pago->getCntbCuentaCompra() != 'null') ? CntbCuenta::getOxId($gral_fp_forma_pago->getCntbCuentaCompra())->getDescripcion() : '') ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('CntbCuentaVenta') ?></div>
        <div class='dato'><?php Gral::_echo(($gral_fp_forma_pago->getCntbCuentaVenta() != 'null') ? CntbCuenta::getOxId($gral_fp_forma_pago->getCntbCuentaVenta())->getDescripcion() : '') ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Req Referencia') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getRequiereReferencia())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Req Info Ext') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getRequiereInfoExtendida())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Req Conciliacion') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getRequiereConciliacion())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($gral_fp_forma_pago->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($gral_fp_forma_pago->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_fp_forma_pago->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($gral_fp_forma_pago->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_fp_forma_pago->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($gral_fp_forma_pago->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

