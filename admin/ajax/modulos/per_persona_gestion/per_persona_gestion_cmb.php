<?php
include '_autoload.php';

$prefijo = Gral::getVars(1, 'prefijo');
$cmb_per_persona_id = Gral::getSes('PerPersona_ULTIMO_INSERTADO');

Html::html_dib_select(1, $prefijo.'cmb_per_persona_id', Gral::getCmbFiltro(PerPersona::getPerPersonasCmb(),'Seleccione Clase'), $cmb_per_persona_id, 'textbox combo_padre combo_hijo', '', 'combo_padre="xxxxx" elemento_id="cmb_per_persona_id"')
?>
<img class="img_btn_editar" elemento_id="<?php echo $prefijo ?>cmb_per_persona_id" clase_id="per_persona" prefijo="<?php echo $prefijo ?>" src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle'  id="img_btn_editar_cmb_per_persona_id" <?php echo (!$cmb_per_persona_id) ? "style='display:none;'" : '' ?> />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $prefijo ?>cmb_per_persona_id" clase_id="per_persona" src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />

