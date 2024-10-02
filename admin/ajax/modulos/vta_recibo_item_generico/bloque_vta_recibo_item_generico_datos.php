<link rel='stylesheet' type='text/css' href='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_recibo_item_generico/css/vta_recibo_item_generico.css?<?php echo date('dHs') ?>' />
<script type='text/javascript' src='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_recibo_item_generico/js/vta_recibo_item_generico.js?<?php echo date('dHs') ?>'></script>

<?php
include_once "_autoload.php";

$var_sesion_random = '_' . rand(1, 999999);

$total_item_generico = 0;
$total_item_generico += $txt_vta_recibo_item_generico_importe_unitario;
?>

<h2 class="vta_recibo_generico_titulo">Items del Recibo de Cobro</h2>

<table id='vta_recibo_item_generico_listado_vta_recibo_items' class='listado_vta_recibo_item_generico_vta_recibo_items' cli_cliente_id='<?php echo $dbsug_cli_cliente_id ?>' var_sesion_random='<?php echo $var_sesion_random; ?>'>
    <thead>
        <tr>
            <th width='200' align='center'>Concepto</th>
            <th width='300' align='center'>Descripcion</th>
            <th width='100' align='center'>Refencia</th>
            <th width='280' align='center'>Importe</th>
            <th width='190' align='center'>Forma de Pago</th>
            <th><label class='boton vta_recibo_item_generico_agregar_item_recibo' title='<?php Lang::_lang('Agregar Item al Recibo') ?>'><img src='imgs/btn_add.gif' width='25'></label></th>
        </tr>
    </thead>
    <tbody>
        <?php include Gral::getPathAbs() . 'admin/ajax/modulos/vta_recibo_item_generico/bloque_vta_recibo_item_generico_uno.php'; ?>  

        <?php
        // ---------------------------------------------------------------------
        // Tributos Aplicados
        // ---------------------------------------------------------------------
        if ($arr_vta_tributos_aplicados && is_array($arr_vta_tributos_aplicados)) {
            foreach ($arr_vta_tributos_aplicados as $arr_vta_tributo_aplicado) {
                $key++;

                $cmb_vta_recibo_item_generico_vta_recibo_concepto_id = $arr_vta_tributo_aplicado['vta_recibo_item_generico_vta_recibo_concepto_id'];
                $txt_vta_recibo_item_generico_descripcion = $arr_vta_tributo_aplicado['txt_vta_recibo_item_generico_descripcion'];
                $txt_vta_recibo_item_generico_importe_unitario = $arr_vta_tributo_aplicado['txt_vta_recibo_item_generico_importe_unitario'];

                $total_item_generico += $txt_vta_recibo_item_generico_importe_unitario;

                include Gral::getPathAbs() . 'admin/ajax/modulos/vta_recibo_item_generico/bloque_vta_recibo_item_generico_uno.php';
            }
        }
        ?>

        <?php
        // ---------------------------------------------------------------------
        // Ajustes Aplicados al Cobro
        // ---------------------------------------------------------------------
        if ($arr_ajustes_aplicados && is_array($arr_ajustes_aplicados)) {
            foreach ($arr_ajustes_aplicados as $arr_ajuste_aplicado) {
                $key++;

                $cmb_vta_recibo_item_generico_vta_recibo_concepto_id = $arr_ajuste_aplicado['vta_recibo_item_generico_vta_recibo_concepto_id'];
                $txt_vta_recibo_item_generico_descripcion = $arr_ajuste_aplicado['txt_vta_recibo_item_generico_descripcion'];
                $txt_vta_recibo_item_generico_importe_unitario = $arr_ajuste_aplicado['txt_vta_recibo_item_generico_importe_unitario'];

                $total_item_generico += $txt_vta_recibo_item_generico_importe_unitario;

                include Gral::getPathAbs() . 'admin/ajax/modulos/vta_recibo_item_generico/bloque_vta_recibo_item_generico_uno.php';
            }
        }
        ?>
        
    </tbody>
    <tfoot>
        <tr>
            <th align='left' colspan="3">TOTAL A COBRAR</th>
            <th align='center'>
                <div class="vta_recibo_item_generico_total">
                    <?php Gral::_echoImp($total_item_generico); ?>
                </div>
            </th>
            <th width='180' align='center'></th>
            <th><label class='boton vta_recibo_item_generico_agregar_item_recibo' title='<?php Lang::_lang('Agregar Item al Recibo') ?>'><img src='imgs/btn_add.gif' width='25'></label></th>
        </tr>    
    </tfoot>
</table>

<div id='error_general_vta_recibo_generico_error' class='label-error'></div>

<div class="div_modal_retenciones"></div>
<div class="div_modal_cheque_buscador"></div>