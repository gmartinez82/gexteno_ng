<?php
include "_autoload.php";

$dbsug_cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'dbsug_cli_cliente_id', 0);
$key = Gral::getVars(Gral::VARS_POST, 'key', 0);

//$txt_cantidads = Gral::getVars(Gral::VARS_POST, "txt_cantidad", null);
$txt_descripcions = Gral::getVars(Gral::VARS_POST, "txt_descripcion", null);
$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", null);
//$cmb_gral_tipo_iva_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_tipo_iva_id", null);
$cmb_gral_fp_forma_pago_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_fp_forma_pago_id", null);

?>
<form id='form_generar_ajuste_haber' name='form_generar_ajuste_haber' method='POST' action='' cli_cliente_id="<?php echo $dbsug_cli_cliente_id ?>">
    <div class="label-error" id='error_general_error'></div>
    <table class="listado_vta_ajuste_haber_items" id="listado_vta_ajuste_haber_items">
        <tr>
            <th width='200' align='center'>Concepto</th>
            <th width='480' align='center'>Descripcion</th>
            <th width='100' align='center'>Refencia</th>
            <th width='180' align='center'>Importe</th>
            <th width='180' align='center'>Forma de Pago</th>
            <th><label class="boton agregar_item_ajuste_haber" title="<?php Lang::_lang('Agregar Item al AjusteHaber') ?>"><img src="imgs/btn_add.gif" width="25"></label></th>
        </tr>
    </table>
</form>

<div class="botonera">
    <button id='btn_set_ws_fe_ajuste_haber_afip' name='btn_set_ws_fe_ajuste_haber_afip' type='button' class='boton btn_set_ws_fe_ajuste_haber_afip' cli_cliente_id="<?php echo $dbsug_cli_cliente_id ?>"><?php Lang::_lang('Siguiente') ?></button>
</div>