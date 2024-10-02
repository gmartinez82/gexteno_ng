<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$prefijo = Gral::getVars(1, 'prefijo');
$cmb_ws_fe_ope_solicitud_respuesta_observacion_id = Gral::getSes('WsFeOpeSolicitudRespuestaObservacion_ULTIMO_INSERTADO');

Html::html_dib_select(1, $prefijo.'cmb_ws_fe_ope_solicitud_respuesta_observacion_id', Gral::getCmbFiltro(WsFeOpeSolicitudRespuestaObservacion::getWsFeOpeSolicitudRespuestaObservacionsCmb(),'Seleccione Clase'), $cmb_ws_fe_ope_solicitud_respuesta_observacion_id, 'textbox combo_padre combo_hijo', '', 'combo_padre="xxxxx" elemento_id="cmb_ws_fe_ope_solicitud_respuesta_observacion_id"')
?>
<img class="img_btn_editar" elemento_id="<?php echo $prefijo ?>cmb_ws_fe_ope_solicitud_respuesta_observacion_id" clase_id="ws_fe_ope_solicitud_respuesta_observacion" prefijo="<?php echo $prefijo ?>" src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle'  id="img_btn_editar_cmb_ws_fe_ope_solicitud_respuesta_observacion_id" <?php echo (!$cmb_ws_fe_ope_solicitud_respuesta_observacion_id) ? "style='display:none;'" : '' ?> />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $prefijo ?>cmb_ws_fe_ope_solicitud_respuesta_observacion_id" clase_id="ws_fe_ope_solicitud_respuesta_observacion" src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />

