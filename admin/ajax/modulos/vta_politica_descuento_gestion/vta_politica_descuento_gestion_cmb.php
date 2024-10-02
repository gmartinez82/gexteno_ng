<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";

$prefijo = Gral::getVars(1, 'prefijo');
$cmb_vta_politica_descuento_id = Gral::getSes('VtaPoliticaDescuento_ULTIMO_INSERTADO');

Html::html_dib_select(1, $prefijo.'cmb_vta_politica_descuento_id', Gral::getCmbFiltro(VtaPoliticaDescuento::getVtaPoliticaDescuentosCmb(),'Seleccione Clase'), $cmb_vta_politica_descuento_id, 'textbox combo_padre combo_hijo', '', 'combo_padre="xxxxx" elemento_id="cmb_vta_politica_descuento_id"')
?>
<img class="img_btn_editar" elemento_id="<?php echo $prefijo ?>cmb_vta_politica_descuento_id" clase_id="vta_politica_descuento" prefijo="<?php echo $prefijo ?>" src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle'  id="img_btn_editar_cmb_vta_politica_descuento_id" <?php echo (!$cmb_vta_politica_descuento_id) ? "style='display:none;'" : '' ?> />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $prefijo ?>cmb_vta_politica_descuento_id" clase_id="vta_politica_descuento" src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />

