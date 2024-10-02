<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$prefijo = Gral::getVars(1, 'prefijo');
$cmb_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_id = Gral::getSes('EkuDeE730GDtipDEGCamItemGCamIVA_ULTIMO_INSERTADO');

Html::html_dib_select(1, $prefijo.'cmb_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_id', Gral::getCmbFiltro(EkuDeE730GDtipDEGCamItemGCamIVA::getEkuDeE730GDtipDEGCamItemGCamIVAsCmb(),'Seleccione Clase'), $cmb_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_id, 'textbox combo_padre combo_hijo', '', 'combo_padre="xxxxx" elemento_id="cmb_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_id"')
?>
<img class="img_btn_editar" elemento_id="<?php echo $prefijo ?>cmb_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_id" clase_id="eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a" prefijo="<?php echo $prefijo ?>" src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle'  id="img_btn_editar_cmb_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_id" <?php echo (!$cmb_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_id) ? "style='display:none;'" : '' ?> />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $prefijo ?>cmb_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_id" clase_id="eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a" src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />

