<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$prefijo = Gral::getVars(1, 'prefijo');
$cmb_vta_nota_credito_vta_factura_vta_orden_venta_id = Gral::getSes('VtaNotaCreditoVtaFacturaVtaOrdenVenta_ULTIMO_INSERTADO');

Html::html_dib_select(1, $prefijo.'cmb_vta_nota_credito_vta_factura_vta_orden_venta_id', Gral::getCmbFiltro(VtaNotaCreditoVtaFacturaVtaOrdenVenta::getVtaNotaCreditoVtaFacturaVtaOrdenVentasCmb(),'Seleccione Clase'), $cmb_vta_nota_credito_vta_factura_vta_orden_venta_id, 'textbox combo_padre combo_hijo', '', 'combo_padre="xxxxx" elemento_id="cmb_vta_nota_credito_vta_factura_vta_orden_venta_id"')
?>
<img class="img_btn_editar" elemento_id="<?php echo $prefijo ?>cmb_vta_nota_credito_vta_factura_vta_orden_venta_id" clase_id="vta_nota_credito_vta_factura_vta_orden_venta" prefijo="<?php echo $prefijo ?>" src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle'  id="img_btn_editar_cmb_vta_nota_credito_vta_factura_vta_orden_venta_id" <?php echo (!$cmb_vta_nota_credito_vta_factura_vta_orden_venta_id) ? "style='display:none;'" : '' ?> />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $prefijo ?>cmb_vta_nota_credito_vta_factura_vta_orden_venta_id" clase_id="vta_nota_credito_vta_factura_vta_orden_venta" src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />

