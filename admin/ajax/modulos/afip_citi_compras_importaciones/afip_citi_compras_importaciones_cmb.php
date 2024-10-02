<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$prefijo = Gral::getVars(1, 'prefijo');
$cmb_afip_citi_compras_importaciones_id = Gral::getSes('AfipCitiComprasImportaciones_ULTIMO_INSERTADO');

Html::html_dib_select(1, $prefijo.'cmb_afip_citi_compras_importaciones_id', Gral::getCmbFiltro(AfipCitiComprasImportaciones::getAfipCitiComprasImportacionessCmb(),'Seleccione Clase'), $cmb_afip_citi_compras_importaciones_id, 'textbox combo_padre combo_hijo', '', 'combo_padre="xxxxx" elemento_id="cmb_afip_citi_compras_importaciones_id"')
?>
<img class="img_btn_editar" elemento_id="<?php echo $prefijo ?>cmb_afip_citi_compras_importaciones_id" clase_id="afip_citi_compras_importaciones" prefijo="<?php echo $prefijo ?>" src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle'  id="img_btn_editar_cmb_afip_citi_compras_importaciones_id" <?php echo (!$cmb_afip_citi_compras_importaciones_id) ? "style='display:none;'" : '' ?> />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $prefijo ?>cmb_afip_citi_compras_importaciones_id" clase_id="afip_citi_compras_importaciones" src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />

