<?php
include '_autoload.php';

$prefijo = Gral::getVars(1, 'prefijo');
$cmb_vta_ajuste_debe_id = Gral::getSes('VtaAjusteDebe_ULTIMO_INSERTADO');

Html::html_dib_select(1, $prefijo.'cmb_vta_ajuste_debe_id', Gral::getCmbFiltro(VtaAjusteDebe::getVtaAjusteDebesCmb(),'Seleccione Clase'), $cmb_vta_ajuste_debe_id, 'textbox combo_padre combo_hijo', '', 'combo_padre="xxxxx" elemento_id="cmb_vta_ajuste_debe_id"')
?>
<img class="img_btn_editar" elemento_id="<?php echo $prefijo ?>cmb_vta_ajuste_debe_id" clase_id="vta_ajuste_debe" prefijo="<?php echo $prefijo ?>" src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle'  id="img_btn_editar_cmb_vta_ajuste_debe_id" <?php echo (!$cmb_vta_ajuste_debe_id) ? "style='display:none;'" : '' ?> />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $prefijo ?>cmb_vta_ajuste_debe_id" clase_id="vta_ajuste_debe" src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />

