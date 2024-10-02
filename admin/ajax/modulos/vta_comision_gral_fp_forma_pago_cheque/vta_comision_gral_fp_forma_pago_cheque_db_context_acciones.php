<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_comision_gral_fp_forma_pago_cheque = VtaComisionGralFpFormaPagoCheque::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getId()) ?>" modulo="vta_comision_gral_fp_forma_pago_cheque">

    <div class="titulo">
        <?php Lang::_lang('VtaComisionGralFpFormaPagoCheque') ?>: 
        <strong><?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_COMISION_GRAL_FP_FORMA_PAGO_CHEQUE_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('VtaComisionGralFpFormaPagoCheque') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

