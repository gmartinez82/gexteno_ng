<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$prefijo = Gral::getVars(1, 'prefijo');
$cmb_gral_sucursal_valoracion_tipo_item_gral_sucursal_id = Gral::getSes('GralSucursalValoracionTipoItemGralSucursal_ULTIMO_INSERTADO');

Html::html_dib_select(1, $prefijo.'cmb_gral_sucursal_valoracion_tipo_item_gral_sucursal_id', Gral::getCmbFiltro(GralSucursalValoracionTipoItemGralSucursal::getGralSucursalValoracionTipoItemGralSucursalsCmb(),'Seleccione Clase'), $cmb_gral_sucursal_valoracion_tipo_item_gral_sucursal_id, 'textbox combo_padre combo_hijo', '', 'combo_padre="xxxxx" elemento_id="cmb_gral_sucursal_valoracion_tipo_item_gral_sucursal_id"')
?>
<img class="img_btn_editar" elemento_id="<?php echo $prefijo ?>cmb_gral_sucursal_valoracion_tipo_item_gral_sucursal_id" clase_id="gral_sucursal_valoracion_tipo_item_gral_sucursal" prefijo="<?php echo $prefijo ?>" src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle'  id="img_btn_editar_cmb_gral_sucursal_valoracion_tipo_item_gral_sucursal_id" <?php echo (!$cmb_gral_sucursal_valoracion_tipo_item_gral_sucursal_id) ? "style='display:none;'" : '' ?> />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $prefijo ?>cmb_gral_sucursal_valoracion_tipo_item_gral_sucursal_id" clase_id="gral_sucursal_valoracion_tipo_item_gral_sucursal" src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />

