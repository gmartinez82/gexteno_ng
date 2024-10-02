<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$prefijo = Gral::getVars(1, 'prefijo');
$cmb_eku_param_tipo_pago_gral_fp_forma_pago_id = Gral::getSes('EkuParamTipoPagoGralFpFormaPago_ULTIMO_INSERTADO');

Html::html_dib_select(1, $prefijo.'cmb_eku_param_tipo_pago_gral_fp_forma_pago_id', Gral::getCmbFiltro(EkuParamTipoPagoGralFpFormaPago::getEkuParamTipoPagoGralFpFormaPagosCmb(),'Seleccione Clase'), $cmb_eku_param_tipo_pago_gral_fp_forma_pago_id, 'textbox combo_padre combo_hijo', '', 'combo_padre="xxxxx" elemento_id="cmb_eku_param_tipo_pago_gral_fp_forma_pago_id"')
?>
<img class="img_btn_editar" elemento_id="<?php echo $prefijo ?>cmb_eku_param_tipo_pago_gral_fp_forma_pago_id" clase_id="eku_param_tipo_pago_gral_fp_forma_pago" prefijo="<?php echo $prefijo ?>" src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle'  id="img_btn_editar_cmb_eku_param_tipo_pago_gral_fp_forma_pago_id" <?php echo (!$cmb_eku_param_tipo_pago_gral_fp_forma_pago_id) ? "style='display:none;'" : '' ?> />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $prefijo ?>cmb_eku_param_tipo_pago_gral_fp_forma_pago_id" clase_id="eku_param_tipo_pago_gral_fp_forma_pago" src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />

