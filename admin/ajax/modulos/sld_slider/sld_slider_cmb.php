<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$prefijo = Gral::getVars(1, 'prefijo');
$cmb_sld_slider_id = Gral::getSes('SldSlider_ULTIMO_INSERTADO');

Html::html_dib_select(1, $prefijo.'cmb_sld_slider_id', Gral::getCmbFiltro(SldSlider::getSldSlidersCmb(),'Seleccione Clase'), $cmb_sld_slider_id, 'textbox combo_padre combo_hijo', '', 'combo_padre="xxxxx" elemento_id="cmb_sld_slider_id"')
?>
<img class="img_btn_editar" elemento_id="<?php echo $prefijo ?>cmb_sld_slider_id" clase_id="sld_slider" prefijo="<?php echo $prefijo ?>" src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle'  id="img_btn_editar_cmb_sld_slider_id" <?php echo (!$cmb_sld_slider_id) ? "style='display:none;'" : '' ?> />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $prefijo ?>cmb_sld_slider_id" clase_id="sld_slider" src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />

