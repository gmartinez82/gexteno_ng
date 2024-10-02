<?php
include '_autoload.php';

$prefijo = Gral::getVars(1, 'prefijo');
$cmb_pde_oc_id = Gral::getSes('PdeOc_ULTIMO_INSERTADO');

Html::html_dib_select(1, $prefijo.'cmb_pde_oc_id', Gral::getCmbFiltro(PdeOc::getPdeOcsCmb(),'Seleccione Clase'), $cmb_pde_oc_id, 'textbox combo_padre combo_hijo', '', 'combo_padre="xxxxx" elemento_id="cmb_pde_oc_id"')
?>
<img class="img_btn_editar" elemento_id="<?php echo $prefijo ?>cmb_pde_oc_id" clase_id="pde_oc" prefijo="<?php echo $prefijo ?>" src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle'  id="img_btn_editar_cmb_pde_oc_id" <?php echo (!$cmb_pde_oc_id) ? "style='display:none;'" : '' ?> />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $prefijo ?>cmb_pde_oc_id" clase_id="pde_oc" src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />

