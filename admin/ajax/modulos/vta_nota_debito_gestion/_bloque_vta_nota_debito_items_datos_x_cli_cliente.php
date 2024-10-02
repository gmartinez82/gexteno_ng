<?php
include "_autoload.php";
//error_reporting(E_ALL);
//ini_set('display_errors', true);
//ini_set('html_errors', false);

$dbsug_cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'dbsug_cli_cliente_id', 0);

//$txt_cantidads = Gral::getVars(Gral::VARS_POST, "txt_cantidad", null);
//$txt_descripcions = Gral::getVars(Gral::VARS_POST, "txt_descripcion", null);
//$txt_importe_unitarios = Gral::getVars(Gral::VARS_POST, "txt_importe_unitario", null);
//$cmb_gral_tipo_iva_ids = Gral::getVars(Gral::VARS_POST, "cmb_gral_tipo_iva_id", null);
//$vta_nota_debito_items = Gral::getVars(Gral::VARS_POST, "vta_nota_debito_item", null);
$vta_nota_debito_items = $_POST['vta_nota_debito_item'];

//$vta_nota_debito_items = unserialize(stripslashes($vta_nota_debito_items));
//var_dump($vta_nota_debito_items);
//Gral::prr($vta_nota_debito_items);


foreach ($vta_nota_debito_items as $key => $vta_nota_debito_item) {
//    Gral::prr($vta_nota_debito_items[$key]);
    Gral::prr($vta_nota_debito_item);
//    var_dump($vta_nota_debito_item);
    
    
//    Gral::pr($vta_nota_debito_item[$key]['cantidad']);
//    Gral::pr($vta_nota_debito_item[$key]['descripcion']);
//    foreach ($vta_nota_debito_item as $vta_nota_debito_ite) {
//        Gral::pr($vta_nota_debito_ite);
////    Gral::pr($vta_nota_debito_ite['cantidad']);
////    Gral::pr($vta_nota_debito_ite['descripcion']);
//    }
}


$key = 0;
?>
<form id='form_generar_nota_debito' name='form_generar_nota_debito' method='POST' action='' cli_cliente_id="<?php echo $dbsug_cli_cliente_id ?>">
    <div class="label-error" id='error_general_error'></div>
    <table class="listado_vta_nota_debito_items" id="listado_vta_nota_debito_items">
        <tr>
            <th width='80' align='center'>Cantidad</th>
            <th width='250' align='center'>Item</th>
            <th width='150' align='center'>Tipo IVA</th>
            <th width='120' align='center'>Importe Unitario</th>
            <th></th>
        </tr>
        <?php
        foreach ($vta_nota_debito_items as $key => $vta_nota_debito_item) {
//            Gral::prr($vta_nota_debito_items[$key][descripcion]);
            ?>
            <tr key = "<?php echo $key ?>">
                <?php include 'bloque_vta_nota_debito_items_datos_x_cli_cliente_uno.php'; ?>
                <td>
                    <label class="boton quitar_item_nota_debito" title="<?php Lang::_lang('Quitar Item a Nota de Debito') ?>" key='<?php echo $key ?>'><img src="imgs/btn_cancelar.png" width="15"></label>
                </td>
            </tr>
            <?php
        }
        $key++;
        ?>
        <tr key = "<?php echo $key ?>">
            <?php include 'bloque_vta_nota_debito_items_datos_x_cli_cliente_uno.php'; ?>
            <!--td colspan="4">&nbsp;</td-->
            <td>
                <label class="boton agregar_item_nota_debito" title="<?php Lang::_lang('Agregar Item a Nota de Debito') ?>"><img src="imgs/btn_add.gif" width="25"></label>
            </td>
        </tr>

    </table>
</form>

<div class="botonera">
    <button id='btn_set_ws_fe_nota_debito_afip' name='btn_set_ws_fe_nota_debito_afip' type='button' class='boton btn_set_ws_fe_nota_debito_afip' cli_cliente_id="<?php echo $dbsug_cli_cliente_id ?>"><?php Lang::_lang('Siguiente') ?></button>
</div>