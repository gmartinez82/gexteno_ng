<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_de_e810_g_cam_esp_g_grup_sup = EkuDeE810GCamEspGGrupSup::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_de_e810_g_cam_esp_g_grup_sup->getId()) ?>" modulo="eku_de_e810_g_cam_esp_g_grup_sup">

    <div class="titulo">
        <?php Lang::_lang('EkuDeE810GCamEspGGrupSup') ?>: 
        <strong><?php Gral::_echo($eku_de_e810_g_cam_esp_g_grup_sup->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_DE_E810_G_CAM_ESP_G_GRUP_SUP_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuDeE810GCamEspGGrupSup') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

