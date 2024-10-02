<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$prefijo = Gral::getVars(1, 'prefijo');
$cmb_alt_alerta_envio_email_id = Gral::getSes('AltAlertaEnvioEmail_ULTIMO_INSERTADO');

Html::html_dib_select(1, $prefijo.'cmb_alt_alerta_envio_email_id', Gral::getCmbFiltro(AltAlertaEnvioEmail::getAltAlertaEnvioEmailsCmb(),'Seleccione Clase'), $cmb_alt_alerta_envio_email_id, 'textbox combo_padre combo_hijo', '', 'combo_padre="xxxxx" elemento_id="cmb_alt_alerta_envio_email_id"')
?>
<img class="img_btn_editar" elemento_id="<?php echo $prefijo ?>cmb_alt_alerta_envio_email_id" clase_id="alt_alerta_envio_email" prefijo="<?php echo $prefijo ?>" src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle'  id="img_btn_editar_cmb_alt_alerta_envio_email_id" <?php echo (!$cmb_alt_alerta_envio_email_id) ? "style='display:none;'" : '' ?> />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $prefijo ?>cmb_alt_alerta_envio_email_id" clase_id="alt_alerta_envio_email" src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />

