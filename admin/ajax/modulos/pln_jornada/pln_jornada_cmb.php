<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$prefijo = Gral::getVars(1, 'prefijo');
$cmb_pln_jornada_id = Gral::getSes('PlnJornada_ULTIMO_INSERTADO');

Html::html_dib_select(1, $prefijo.'cmb_pln_jornada_id', Gral::getCmbFiltro(PlnJornada::getPlnJornadasCmb(),'Seleccione Clase'), $cmb_pln_jornada_id, 'textbox combo_padre combo_hijo', '', 'combo_padre="xxxxx" elemento_id="cmb_pln_jornada_id"')
?>
<img class="img_btn_editar" elemento_id="<?php echo $prefijo ?>cmb_pln_jornada_id" clase_id="pln_jornada" prefijo="<?php echo $prefijo ?>" src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle'  id="img_btn_editar_cmb_pln_jornada_id" <?php echo (!$cmb_pln_jornada_id) ? "style='display:none;'" : '' ?> />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $prefijo ?>cmb_pln_jornada_id" clase_id="pln_jornada" src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />

