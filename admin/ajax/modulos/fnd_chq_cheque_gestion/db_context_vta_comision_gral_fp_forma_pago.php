<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$fnd_chq_cheque_id = Gral::getVars(2, 'fnd_chq_cheque_id');
$fnd_chq_cheque = FndChqCheque::getOxId($fnd_chq_cheque_id);
$vta_comision_gral_fp_forma_pago = $fnd_chq_cheque->getVtaComisionGralFpFormaPago();

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
        <a href="_init.php?arr_gral=<?php echo FndChqCheque::getFiltrosArrGral() ?>&arr=<?php echo $fnd_chq_cheque->getFiltrosArrXCampo('VtaComisionGralFpFormaPago', 'vta_comision_gral_fp_forma_pago_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('FndChqCheques') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_comision_gral_fp_forma_pago->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

