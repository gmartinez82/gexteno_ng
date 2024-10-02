<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco = EkuDeD130GDatGralOpeGEmisGActEco::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getId()) ?>" modulo="eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco">

    <div class="titulo">
        <?php Lang::_lang('EkuDeD130GDatGralOpeGEmisGActEco') ?>: 
        <strong><?php Gral::_echo($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_DE_D130_G_DAT_GRAL_OPE_G_EMIS_G_ACT_ECO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuDeD130GDatGralOpeGEmisGActEco') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

