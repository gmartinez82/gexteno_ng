<?php
include '_autoload.php';

$prefijo = Gral::getVars(1, 'prefijo');
$cmb_fnd_chq_cheque_id = Gral::getSes('FndChqCheque_ULTIMO_INSERTADO');

Html::html_dib_select(1, $prefijo.'cmb_fnd_chq_cheque_id', Gral::getCmbFiltro(FndChqCheque::getFndChqChequesCmb(),'Seleccione Clase'), $cmb_fnd_chq_cheque_id, 'textbox combo_padre combo_hijo', '', 'combo_padre="xxxxx" elemento_id="cmb_fnd_chq_cheque_id"')
?>
<img class="img_btn_editar" elemento_id="<?php echo $prefijo ?>cmb_fnd_chq_cheque_id" clase_id="fnd_chq_cheque" prefijo="<?php echo $prefijo ?>" src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle'  id="img_btn_editar_cmb_fnd_chq_cheque_id" <?php echo (!$cmb_fnd_chq_cheque_id) ? "style='display:none;'" : '' ?> />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $prefijo ?>cmb_fnd_chq_cheque_id" clase_id="fnd_chq_cheque" src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />

