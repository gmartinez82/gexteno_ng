<?php
include '_autoload.php';

$prefijo = Gral::getVars(1, 'prefijo');
$cmb_vta_remito_ajuste_id = Gral::getSes('VtaRemitoAjuste_ULTIMO_INSERTADO');

Html::html_dib_select(1, $prefijo.'cmb_vta_remito_ajuste_id', Gral::getCmbFiltro(VtaRemitoAjuste::getVtaRemitoAjustesCmb(),'Seleccione Clase'), $cmb_vta_remito_ajuste_id, 'textbox combo_padre combo_hijo', '', 'combo_padre="xxxxx" elemento_id="cmb_vta_remito_ajuste_id"')
?>
<img class="img_btn_editar" elemento_id="<?php echo $prefijo ?>cmb_vta_remito_ajuste_id" clase_id="vta_remito_ajuste" prefijo="<?php echo $prefijo ?>" src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle'  id="img_btn_editar_cmb_vta_remito_ajuste_id" <?php echo (!$cmb_vta_remito_ajuste_id) ? "style='display:none;'" : '' ?> />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $prefijo ?>cmb_vta_remito_ajuste_id" clase_id="vta_remito_ajuste" src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />

