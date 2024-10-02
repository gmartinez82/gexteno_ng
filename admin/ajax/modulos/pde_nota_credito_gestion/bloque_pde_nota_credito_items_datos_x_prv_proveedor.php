<?php
include "_autoload.php";

$dbsug_prv_proveedor_id = Gral::getVars(Gral::VARS_POST, 'dbsug_prv_proveedor_id', 0);
$key = Gral::getVars(Gral::VARS_POST, 'key', 0);

$txt_cantidads = Gral::getVars(Gral::VARS_POST, "txt_cantidad", null);
$txt_descripcions = Gral::getVars(Gral::VARS_POST, "txt_descripcion", null);
$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", null);
$cmb_gral_tipo_iva_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_tipo_iva_id", null);
$txt_importe_ivas = Gral::getVars(Gral::VARS_POST, "txt_importe_iva", null);
$txt_importe_tributos = Gral::getVars(Gral::VARS_POST, "txt_importe_tributo", null);
$txt_importe_totals = Gral::getVars(Gral::VARS_POST, "txt_importe_total", null);

?>
<form id='form_generar_nota_credito' name='form_generar_nota_credito' method='POST' action='' prv_proveedor_id="<?php echo $dbsug_prv_proveedor_id ?>">
    <div class="label-error" id='error_general_error'></div>
    <table class="listado_pde_nota_credito_items" id="listado_pde_nota_credito_items">
        <tr>
            <th width='150' align='center'>Concepto</th>
            <th width='250' align='center'>Descripcion</th>
            <th width='150' align='center'>Tipo IVA</th>
            <th width='130' align='center'>Subtotal </th>
            <th width='120' align='center'>IVA</th>
            <th width='120' align='center'>Total</th>
            <th><label class="boton agregar_item_nota_credito" title="<?php Lang::_lang('Agregar Item a Nota de Credito') ?>"><img src="imgs/btn_add.gif" width="25"></label></th>
        </tr>
    </table>
</form>

<div class="botonera">
    <button id='btn_set_ws_fe_nota_credito_afip' name='btn_set_ws_fe_nota_credito_afip' type='button' class='boton btn_set_ws_fe_nota_credito_afip' prv_proveedor_id="<?php echo $dbsug_prv_proveedor_id ?>"><?php Lang::_lang('Siguiente') ?></button>
</div>