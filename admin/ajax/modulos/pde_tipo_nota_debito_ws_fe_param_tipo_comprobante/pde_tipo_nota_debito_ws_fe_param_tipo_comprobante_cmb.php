<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$prefijo = Gral::getVars(1, 'prefijo');
$cmb_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_id = Gral::getSes('PdeTipoNotaDebitoWsFeParamTipoComprobante_ULTIMO_INSERTADO');

Html::html_dib_select(1, $prefijo.'cmb_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_id', Gral::getCmbFiltro(PdeTipoNotaDebitoWsFeParamTipoComprobante::getPdeTipoNotaDebitoWsFeParamTipoComprobantesCmb(),'Seleccione Clase'), $cmb_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_id, 'textbox combo_padre combo_hijo', '', 'combo_padre="xxxxx" elemento_id="cmb_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_id"')
?>
<img class="img_btn_editar" elemento_id="<?php echo $prefijo ?>cmb_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_id" clase_id="pde_tipo_nota_debito_ws_fe_param_tipo_comprobante" prefijo="<?php echo $prefijo ?>" src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle'  id="img_btn_editar_cmb_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_id" <?php echo (!$cmb_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_id) ? "style='display:none;'" : '' ?> />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $prefijo ?>cmb_pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_id" clase_id="pde_tipo_nota_debito_ws_fe_param_tipo_comprobante" src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />

