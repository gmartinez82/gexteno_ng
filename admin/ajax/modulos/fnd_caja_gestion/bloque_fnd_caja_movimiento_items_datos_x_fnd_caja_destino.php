<?php
include '_autoload.php';

$fnd_caja_origen_id = Gral::getVars(Gral::VARS_POST, 'fnd_caja_origen_id', 0);
$fnd_caja_destino_id = Gral::getVars(Gral::VARS_POST, 'fnd_caja_destino_id', 0);
$key         = Gral::getVars(Gral::VARS_POST, 'key', 0);

$txt_descripcions           = Gral::getVars(Gral::VARS_POST, 'txt_descripcion', null);
$txt_importe_unitarios      = Gral::getVars(Gral::VARS_POST, 'txt_importe_unitario', null);
$cmb_gral_fp_forma_pago_ids = Gral::getVars(Gral::VARS_POST, 'cmb_gral_fp_forma_pago_id', null);

?>

<?php if($fnd_caja_destino_id):  ?>
<h4>Items de movimiento de Caja</h4>
<div class='label-error' id='error_general_error'></div>
<table id='listado_fnd_caja_movimiento_items' class='listado_fnd_caja_movimiento_items' fnd_caja_origen_id='<?php echo $fnd_caja_origen_id; ?>' fnd_caja_destino_id='<?php echo $fnd_caja_destino_id; ?>'>
    <tr>
        <th width='300' align='center'>Descripcion</th>
        <th width='200' align='center'>Refencia</th>
        <th width='180' align='center'>Importe</th>
        <th width='180' align='center'>Forma de Pago</th>
        <th><label class='boton agregar_fnd_caja_movimiento_item' title='<?php Lang::_lang('Agregar Item al Movimiento') ?>'><img src='imgs/btn_add.gif' width='25'></label></th>
    </tr>
</table>

<div class='botonera'>
    <button id='btn_registrar_fnd_caja_movimiento' name='btn_registrar_fnd_caja_movimiento' type='button' class='boton btn_registrar_fnd_caja_movimiento' fnd_caja_id='<?php echo $fnd_caja_id ?>'><?php Lang::_lang('Registrar Movimiento') ?></button>
</div>
<?php endif; ?>