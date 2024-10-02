<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$prefijo = Gral::getVars(1, 'prefijo');
$cmb_eku_param_traslado_tipo_identificacion_vehiculo_id = Gral::getSes('EkuParamTrasladoTipoIdentificacionVehiculo_ULTIMO_INSERTADO');

Html::html_dib_select(1, $prefijo.'cmb_eku_param_traslado_tipo_identificacion_vehiculo_id', Gral::getCmbFiltro(EkuParamTrasladoTipoIdentificacionVehiculo::getEkuParamTrasladoTipoIdentificacionVehiculosCmb(),'Seleccione Clase'), $cmb_eku_param_traslado_tipo_identificacion_vehiculo_id, 'textbox combo_padre combo_hijo', '', 'combo_padre="xxxxx" elemento_id="cmb_eku_param_traslado_tipo_identificacion_vehiculo_id"')
?>
<img class="img_btn_editar" elemento_id="<?php echo $prefijo ?>cmb_eku_param_traslado_tipo_identificacion_vehiculo_id" clase_id="eku_param_traslado_tipo_identificacion_vehiculo" prefijo="<?php echo $prefijo ?>" src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle'  id="img_btn_editar_cmb_eku_param_traslado_tipo_identificacion_vehiculo_id" <?php echo (!$cmb_eku_param_traslado_tipo_identificacion_vehiculo_id) ? "style='display:none;'" : '' ?> />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $prefijo ?>cmb_eku_param_traslado_tipo_identificacion_vehiculo_id" clase_id="eku_param_traslado_tipo_identificacion_vehiculo" src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />

