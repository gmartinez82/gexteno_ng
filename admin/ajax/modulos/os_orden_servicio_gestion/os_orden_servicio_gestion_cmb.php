<?php
include '_autoload.php';

$prefijo = Gral::getVars(1, 'prefijo');
$cmb_os_orden_servicio_id = Gral::getSes('OsOrdenServicio_ULTIMO_INSERTADO');

Html::html_dib_select(1, $prefijo.'cmb_os_orden_servicio_id', Gral::getCmbFiltro(OsOrdenServicio::getOsOrdenServiciosCmb(),'Seleccione Clase'), $cmb_os_orden_servicio_id, 'textbox combo_padre combo_hijo', '', 'combo_padre="xxxxx" elemento_id="cmb_os_orden_servicio_id"')
?>
<img class="img_btn_editar" elemento_id="<?php echo $prefijo ?>cmb_os_orden_servicio_id" clase_id="os_orden_servicio" prefijo="<?php echo $prefijo ?>" src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle'  id="img_btn_editar_cmb_os_orden_servicio_id" <?php echo (!$cmb_os_orden_servicio_id) ? "style='display:none;'" : '' ?> />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $prefijo ?>cmb_os_orden_servicio_id" clase_id="os_orden_servicio" src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />

