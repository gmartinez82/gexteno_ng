<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$prefijo = Gral::getVars(1, 'prefijo');
$cmb_ml_value_ins_marca_id = Gral::getSes('MlValueInsMarca_ULTIMO_INSERTADO');

Html::html_dib_select(1, $prefijo.'cmb_ml_value_ins_marca_id', Gral::getCmbFiltro(MlValueInsMarca::getMlValueInsMarcasCmb(),'Seleccione Clase'), $cmb_ml_value_ins_marca_id, 'textbox combo_padre combo_hijo', '', 'combo_padre="xxxxx" elemento_id="cmb_ml_value_ins_marca_id"')
?>
<img class="img_btn_editar" elemento_id="<?php echo $prefijo ?>cmb_ml_value_ins_marca_id" clase_id="ml_value_ins_marca" prefijo="<?php echo $prefijo ?>" src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle'  id="img_btn_editar_cmb_ml_value_ins_marca_id" <?php echo (!$cmb_ml_value_ins_marca_id) ? "style='display:none;'" : '' ?> />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $prefijo ?>cmb_ml_value_ins_marca_id" clase_id="ml_value_ins_marca" src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />

