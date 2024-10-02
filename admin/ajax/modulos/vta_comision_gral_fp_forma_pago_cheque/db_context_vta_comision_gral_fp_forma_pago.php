<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_comision_gral_fp_forma_pago_cheque_id = Gral::getVars(2, 'vta_comision_gral_fp_forma_pago_cheque_id');
$vta_comision_gral_fp_forma_pago_cheque = VtaComisionGralFpFormaPagoCheque::getOxId($vta_comision_gral_fp_forma_pago_cheque_id);
$vta_comision_gral_fp_forma_pago = $vta_comision_gral_fp_forma_pago_cheque->getVtaComisionGralFpFormaPago();

?>
<div class="datos" id="<?php Gral::_echo($vta_comision_gral_fp_forma_pago->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaComisionGralFpFormaPago') ?>: 
        <strong><?php Gral::_echo($vta_comision_gral_fp_forma_pago->getId()) ?> - <?php Gral::_echo($vta_comision_gral_fp_forma_pago->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_comision_gral_fp_forma_pago_alta.php?id=<?php echo($vta_comision_gral_fp_forma_pago->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaComisionGralFpFormaPago') ?>: <strong><?php Gral::_echo($vta_comision_gral_fp_forma_pago->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaComisionGralFpFormaPagoCheque::getFiltrosArrGral() ?>&arr=<?php echo $vta_comision_gral_fp_forma_pago_cheque->getFiltrosArrXCampo('VtaComisionGralFpFormaPago', 'vta_comision_gral_fp_forma_pago_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaComisionGralFpFormaPagoCheques') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_comision_gral_fp_forma_pago->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

