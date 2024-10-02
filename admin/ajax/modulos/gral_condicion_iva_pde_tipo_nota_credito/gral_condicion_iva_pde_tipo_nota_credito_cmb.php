<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$prefijo = Gral::getVars(1, 'prefijo');
$cmb_gral_condicion_iva_pde_tipo_nota_credito_id = Gral::getSes('GralCondicionIvaPdeTipoNotaCredito_ULTIMO_INSERTADO');

Html::html_dib_select(1, $prefijo.'cmb_gral_condicion_iva_pde_tipo_nota_credito_id', Gral::getCmbFiltro(GralCondicionIvaPdeTipoNotaCredito::getGralCondicionIvaPdeTipoNotaCreditosCmb(),'Seleccione Clase'), $cmb_gral_condicion_iva_pde_tipo_nota_credito_id, 'textbox combo_padre combo_hijo', '', 'combo_padre="xxxxx" elemento_id="cmb_gral_condicion_iva_pde_tipo_nota_credito_id"')
?>
<img class="img_btn_editar" elemento_id="<?php echo $prefijo ?>cmb_gral_condicion_iva_pde_tipo_nota_credito_id" clase_id="gral_condicion_iva_pde_tipo_nota_credito" prefijo="<?php echo $prefijo ?>" src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle'  id="img_btn_editar_cmb_gral_condicion_iva_pde_tipo_nota_credito_id" <?php echo (!$cmb_gral_condicion_iva_pde_tipo_nota_credito_id) ? "style='display:none;'" : '' ?> />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $prefijo ?>cmb_gral_condicion_iva_pde_tipo_nota_credito_id" clase_id="gral_condicion_iva_pde_tipo_nota_credito" src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />

