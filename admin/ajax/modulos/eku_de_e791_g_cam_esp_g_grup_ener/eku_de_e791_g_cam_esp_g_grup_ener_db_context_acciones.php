<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_de_e791_g_cam_esp_g_grup_ener = EkuDeE791GCamEspGGrupEner::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_de_e791_g_cam_esp_g_grup_ener->getId()) ?>" modulo="eku_de_e791_g_cam_esp_g_grup_ener">

    <div class="titulo">
        <?php Lang::_lang('EkuDeE791GCamEspGGrupEner') ?>: 
        <strong><?php Gral::_echo($eku_de_e791_g_cam_esp_g_grup_ener->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_DE_E791_G_CAM_ESP_G_GRUP_ENER_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuDeE791GCamEspGGrupEner') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

