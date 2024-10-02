<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_orden_pago_gral_fp_forma_pago_cheque_id = Gral::getVars(2, 'pde_orden_pago_gral_fp_forma_pago_cheque_id');
$pde_orden_pago_gral_fp_forma_pago_cheque = PdeOrdenPagoGralFpFormaPagoCheque::getOxId($pde_orden_pago_gral_fp_forma_pago_cheque_id);
$gral_banco = $pde_orden_pago_gral_fp_forma_pago_cheque->getGralBanco();

?>
<div class="datos" id="<?php Gral::_echo($gral_banco->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralBanco') ?>: 
        <strong><?php Gral::_echo($gral_banco->getId()) ?> - <?php Gral::_echo($gral_banco->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_banco_alta.php?id=<?php echo($gral_banco->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralBanco') ?>: <strong><?php Gral::_echo($gral_banco->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeOrdenPagoGralFpFormaPagoCheque::getFiltrosArrGral() ?>&arr=<?php echo $pde_orden_pago_gral_fp_forma_pago_cheque->getFiltrosArrXCampo('GralBanco', 'gral_banco_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeOrdenPagoGralFpFormaPagoCheques') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_banco->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

