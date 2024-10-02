<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini = EkuDeE605GDtipDEGCamCondGPaConEIni::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getId()) ?>" modulo="eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini">

    <div class="titulo">
        <?php Lang::_lang('EkuDeE605GDtipDEGCamCondGPaConEIni') ?>: 
        <strong><?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_DE_E605_G_DTIP_D_E_G_CAM_COND_G_PA_CON_E_INI_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuDeE605GDtipDEGCamCondGPaConEIni') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

