<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$prefijo = Gral::getVars(1, 'prefijo');
$cmb_ins_insumo_ins_etiqueta_id = Gral::getSes('InsInsumoInsEtiqueta_ULTIMO_INSERTADO');

Html::html_dib_select(1, $prefijo.'cmb_ins_insumo_ins_etiqueta_id', Gral::getCmbFiltro(InsInsumoInsEtiqueta::getInsInsumoInsEtiquetasCmb(),'Seleccione Clase'), $cmb_ins_insumo_ins_etiqueta_id, 'textbox combo_padre combo_hijo', '', 'combo_padre="xxxxx" elemento_id="cmb_ins_insumo_ins_etiqueta_id"')
?>
<img class="img_btn_editar" elemento_id="<?php echo $prefijo ?>cmb_ins_insumo_ins_etiqueta_id" clase_id="ins_insumo_ins_etiqueta" prefijo="<?php echo $prefijo ?>" src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle'  id="img_btn_editar_cmb_ins_insumo_ins_etiqueta_id" <?php echo (!$cmb_ins_insumo_ins_etiqueta_id) ? "style='display:none;'" : '' ?> />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $prefijo ?>cmb_ins_insumo_ins_etiqueta_id" clase_id="ins_insumo_ins_etiqueta" src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />

