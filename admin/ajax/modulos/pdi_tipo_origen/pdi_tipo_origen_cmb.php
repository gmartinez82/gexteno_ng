<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$prefijo = Gral::getVars(1, 'prefijo');
$cmb_pdi_tipo_origen_id = Gral::getSes('PdiTipoOrigen_ULTIMO_INSERTADO');

Html::html_dib_select(1, $prefijo.'cmb_pdi_tipo_origen_id', Gral::getCmbFiltro(PdiTipoOrigen::getPdiTipoOrigensCmb(),'Seleccione Clase'), $cmb_pdi_tipo_origen_id, 'textbox combo_padre combo_hijo', '', 'combo_padre="xxxxx" elemento_id="cmb_pdi_tipo_origen_id"')
?>
<img class="img_btn_editar" elemento_id="<?php echo $prefijo ?>cmb_pdi_tipo_origen_id" clase_id="pdi_tipo_origen" prefijo="<?php echo $prefijo ?>" src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle'  id="img_btn_editar_cmb_pdi_tipo_origen_id" <?php echo (!$cmb_pdi_tipo_origen_id) ? "style='display:none;'" : '' ?> />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $prefijo ?>cmb_pdi_tipo_origen_id" clase_id="pdi_tipo_origen" src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />

