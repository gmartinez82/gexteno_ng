<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal = EkuDeE920GDtipDEGTranspGCamSal::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getId()) ?>" modulo="eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal">

    <div class="titulo">
        <?php Lang::_lang('EkuDeE920GDtipDEGTranspGCamSal') ?>: 
        <strong><?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_DE_E920_G_DTIP_D_E_G_TRANSP_G_CAM_SAL_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuDeE920GDtipDEGTranspGCamSal') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

