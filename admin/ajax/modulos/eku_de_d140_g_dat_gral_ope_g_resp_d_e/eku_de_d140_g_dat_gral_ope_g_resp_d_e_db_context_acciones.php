<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_de_d140_g_dat_gral_ope_g_resp_d_e = EkuDeD140GDatGralOpeGRespDE::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getId()) ?>" modulo="eku_de_d140_g_dat_gral_ope_g_resp_d_e">

    <div class="titulo">
        <?php Lang::_lang('EkuDeD140GDatGralOpeGRespDE') ?>: 
        <strong><?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_DE_D140_G_DAT_GRAL_OPE_G_RESP_D_E_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuDeD140GDatGralOpeGRespDE') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

