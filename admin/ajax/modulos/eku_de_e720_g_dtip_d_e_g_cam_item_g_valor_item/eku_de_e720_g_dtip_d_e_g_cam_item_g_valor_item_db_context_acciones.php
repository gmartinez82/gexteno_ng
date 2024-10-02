<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item = EkuDeE720GDtipDEGCamItemGValorItem::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getId()) ?>" modulo="eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item">

    <div class="titulo">
        <?php Lang::_lang('EkuDeE720GDtipDEGCamItemGValorItem') ?>: 
        <strong><?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_DE_E720_G_DTIP_D_E_G_CAM_ITEM_G_VALOR_ITEM_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuDeE720GDtipDEGCamItemGValorItem') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

