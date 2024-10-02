<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$prefijo = Gral::getVars(1, 'prefijo');
$cmb_gen_api_token_id = Gral::getSes('GenApiToken_ULTIMO_INSERTADO');

Html::html_dib_select(1, $prefijo.'cmb_gen_api_token_id', Gral::getCmbFiltro(GenApiToken::getGenApiTokensCmb(),'Seleccione Clase'), $cmb_gen_api_token_id, 'textbox combo_padre combo_hijo', '', 'combo_padre="xxxxx" elemento_id="cmb_gen_api_token_id"')
?>
<img class="img_btn_editar" elemento_id="<?php echo $prefijo ?>cmb_gen_api_token_id" clase_id="gen_api_token" prefijo="<?php echo $prefijo ?>" src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle'  id="img_btn_editar_cmb_gen_api_token_id" <?php echo (!$cmb_gen_api_token_id) ? "style='display:none;'" : '' ?> />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $prefijo ?>cmb_gen_api_token_id" clase_id="gen_api_token" src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />

