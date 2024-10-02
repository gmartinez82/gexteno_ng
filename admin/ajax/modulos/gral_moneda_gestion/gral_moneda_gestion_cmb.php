<?php
include '_autoload.php';

$prefijo = Gral::getVars(1, 'prefijo');
$cmb_gral_moneda_id = Gral::getSes('GralMoneda_ULTIMO_INSERTADO');

Html::html_dib_select(1, $prefijo.'cmb_gral_moneda_id', Gral::getCmbFiltro(GralMoneda::getGralMonedasCmb(),'Seleccione Clase'), $cmb_gral_moneda_id, 'textbox combo_padre combo_hijo', '', 'combo_padre="xxxxx" elemento_id="cmb_gral_moneda_id"')
?>
<img class="img_btn_editar" elemento_id="<?php echo $prefijo ?>cmb_gral_moneda_id" clase_id="gral_moneda" prefijo="<?php echo $prefijo ?>" src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle'  id="img_btn_editar_cmb_gral_moneda_id" <?php echo (!$cmb_gral_moneda_id) ? "style='display:none;'" : '' ?> />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $prefijo ?>cmb_gral_moneda_id" clase_id="gral_moneda" src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />

