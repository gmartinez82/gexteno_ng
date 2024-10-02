<?php
include '_autoload.php';

$prefijo = Gral::getVars(1, 'prefijo');
$cmb_ins_insumo_id = Gral::getSes('InsInsumo_ULTIMO_INSERTADO');

Html::html_dib_select(1, $prefijo.'cmb_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosCmb(),'Seleccione Clase'), $cmb_ins_insumo_id, 'textbox combo_padre combo_hijo', '', 'combo_padre="xxxxx" elemento_id="cmb_ins_insumo_id"')
?>
<img class="img_btn_editar" elemento_id="<?php echo $prefijo ?>cmb_ins_insumo_id" clase_id="ins_insumo" prefijo="<?php echo $prefijo ?>" src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle'  id="img_btn_editar_cmb_ins_insumo_id" <?php echo (!$cmb_ins_insumo_id) ? "style='display:none;'" : '' ?> />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $prefijo ?>cmb_ins_insumo_id" clase_id="ins_insumo" src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />

