<?php
include_once '_autoload.php';


$db_nombre_objeto = 'pde_pedido';
$pde_oc = new PdeOc();

$hdn_error = 1;

if (Gral::esPost()) {
    $id = Gral::getVars(1, 'hdn_id', 0);
    if ($id != 0) {
        $pde_oc = PdeOc::getOxId($id);
    }

    $cmb_pde_centro_pedido_id = Gral::getVars(1, 'cmb_pde_centro_pedido_id', '');
    $cmb_prv_proveedor_id = Gral::getVars(1, 'cmb_prv_proveedor_id', '');
    $dbsug_ins_insumo_id = Gral::getVars(1, 'dbsug_ins_insumo_id', 0);
    $txt_cantidad = Gral::getVars(1, 'txt_cantidad', 0);
    $txt_importe_unidad = Gral::getVars(1, 'txt_importe_unidad', 0, Gral::TIPO_MONEDA);
    $cmb_iva_incluido = Gral::getVars(1, 'cmb_iva_incluido', -1);
    $txt_vencimiento = Gral::getFechaToDb(Gral::getVars(1, 'txt_vencimiento', ''));
    $cmb_pde_centro_recepcion_id = Gral::getVars(1, 'cmb_pde_centro_recepcion_id', null);
    $txa_observacion = Gral::getVars(1, 'txa_observacion', '');
    $chk_notificar_proveedor = Gral::getVars(1, 'chk_notificar_proveedor', 0);

    $ins_insumo = InsInsumo::getOxId($dbsug_ins_insumo_id);
    
    $estado = true;
    // controles
    if (Ctrl::esVacio($cmb_pde_centro_pedido_id)) {
        $estado = false;
        $cmb_pde_centro_pedido_id_error = 'Debe indicar un centro de pedido';
    }
    if (Ctrl::esVacio($cmb_prv_proveedor_id)) {
        $estado = false;
        $cmb_prv_proveedor_id_error = 'Debe elegir un proveedor';
    }
    if ($dbsug_ins_insumo_id == 0) {
        $estado = false;
        $dbsug_ins_insumo_id_error = 'Debe elegir un insumo';
    }
    if (Ctrl::esVacio($txt_cantidad) or $txt_cantidad <= 0) {
        $estado = false;
        $txt_cantidad_error = 'Debe indicar una cantidad mayor a cero';
    }    
    if ($txt_importe_unidad == 0) {
        $estado = false;
        $txt_importe_unidad_error = 'Debe indicar el importe por unitario estimado';
    }
    if ($cmb_iva_incluido == -1) {
        $estado = false;
        $cmb_iva_incluido_error = 'Debe indicar el tipo de IVA';
    }
    if (!Ctrl::esFechaValida($txt_vencimiento)) {
        $estado = false;
        $txt_vencimiento_error = 'Debe indicar una fecha valida';
    }
    if (Ctrl::esVacio($cmb_pde_centro_recepcion_id)) {
        $estado = false;
        $cmb_pde_centro_recepcion_id_error = 'Debe elegir un centro de recepcion';
    }
    if (Ctrl::esVacio($txa_observacion)) {
        $estado = false;
        $txa_observacion_error = 'Debe indicar una observacion o comentario';
    }

    if ($estado) {

        $pde_oc = PdeOc::addPdeOc(
            $cmb_pde_centro_pedido_id, $cmb_prv_proveedor_id, $dbsug_ins_insumo_id, $cmb_ins_marca_id, $txt_cantidad, $cmb_gral_moneda_id, $txt_importe_unidad, $cmb_iva_incluido, $cmb_pde_centro_recepcion_id, $txt_vencimiento, $txa_observacion
        );

        // se envia aviso ---------------------------------------------------------------------
        if ($chk_notificar_proveedor) {
            $asunto = 'PDE Orden de Compra Aprobada #' . $pde_oc->getCodigo() . ' ' . date('d/m/Y H:m');
            //$pde_oc->enviarAvisos($asunto);
        }
        // ------------------------------------------------------------------------------------                

        $hdn_error = 0;
    }
} else {
    $id = Gral::getVars(2, 'id', 0);
    if ($id != 0) {
        $pde_oc = PdeOc::getOxId($id);
    }

    $vencimiento = Date::sumarDias(date('Y-m-d'), 7);
    $txt_vencimiento = $vencimiento;
    $txt_cantidad = 0;
    $txt_importe_unidad = 0;
    
    $cmb_iva_incluido = -1;
}
?>
<form id='form_div_modal' name='form_div_modal' method='post' action='<?php echo Gral::getPath('path_http') . "admin/ajax/modulos/pde_oc_gestion/modal_oc_agregar.php" ?>' >
    <div class="datos agregar" >

        <div class="par">
            <div class="label"><?php Lang::_lang('Centro Pedido') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_pde_centro_pedido_id', Gral::getCmbFiltro(PdeCentroPedido::getPdeCentroPedidosCmb(), '...'), $cmb_pde_centro_pedido_id, 'textbox') ?>

                <div class="error"><?php Gral::_echo($cmb_pde_centro_pedido_id_error) ?></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), $cmb_prv_proveedor_id, 'textbox') ?>

                <div class="error"><?php Gral::_echo($cmb_prv_proveedor_id_error) ?></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Insumo') ?></div>
            <div class="dato">
                <?php echo Html::html_get_dbsuggest(1, 'dbsug_ins_insumo', 'ajax/modulos/ins_insumo_gestion/ins_insumo_gestion_dbsuggest_custom.php?comprable=1', false, true, true, 'Ingrese ...', ($ins_insumo) ? $ins_insumo->getId() : null, ($ins_insumo) ? $ins_insumo->getDescripcion() : '', 60, '', ""); ?>

                <div class="error"><?php Gral::_echo($dbsug_ins_insumo_id_error) ?></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato">
                <input name='txt_cantidad' type='text' class='textbox spinner' id='txt_cantidad' value='<?php Gral::_echo($txt_cantidad) ?>' size='5' />

                <div class="error"><?php Gral::_echo($txt_cantidad_error) ?></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Importe Unitario Estimado') ?></div>
            <div class="dato">
                <input name='txt_importe_unidad' type='text' class='textbox moneda' id='txt_importe_unidad' value='<?php Gral::_echo($txt_importe_unidad) ?>' size='15' />

                <div class="error"><?php Gral::_echo($txt_importe_unidad_error) ?></div>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('IVA Incluido') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_iva_incluido', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), $cmb_iva_incluido, 'textbox') ?>
                <div class="error"><?php Gral::_echo($cmb_iva_incluido_error) ?></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Vencimiento') ?></div>
            <div class="dato">
                <input name='txt_vencimiento' type='text' class='textbox' id='txt_vencimiento' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($txt_vencimiento)) ?>' size='10' />
                <input type='button' id='cal_txt_vencimiento' value='...' />

                <script type='text/javascript'>
                    Calendar.setup({
                        inputField: 'txt_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_txt_vencimiento'
                    });
                </script>

                <div class="error"><?php Gral::_echo($txt_vencimiento_error) ?></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('PdeCentroRecepcion') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_pde_centro_recepcion_id', Gral::getCmbFiltro(PdeCentroRecepcion::getPdeCentroRecepcionsCmb(), '...'), $cmb_pde_centro_recepcion_id, 'textbox') ?>

                <div class="error"><?php Gral::_echo($cmb_pde_centro_recepcion_id_error) ?></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='5' cols='50' id='txa_observacion' class='textbox '><?php Gral::_echoTxt($txa_observacion) ?></textarea>

                <div class="error"><?php Gral::_echo($txa_observacion_error) ?></div>
            </div>
        </div>

        <div class="par" style="display: none;">
            <div class="label"><?php Lang::_lang('Notif Proveedor') ?></div>
            <div class="dato">
                <input type="checkbox" id="chk_notificar_proveedor" name="chk_notificar_proveedor" value="1" />
            </div>
        </div>

        <div class="botonera">
            <input name='btn_guardar' class="btn_guardar boton" type='button' id='btn_guardar' value='<?php Lang::_lang('Registrar Nueva OC') ?>' />

            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($pde_oc->getId()) ?>'/>
            <input name='hdn_error' type='hidden' id='hdn_error' class="hdn_error" size='1' value='<?php Gral::_echoTxt($hdn_error) ?>'/>
        </div>


    </div>

</form>
<script>
    setInitPdeOcs();
    setInit();

    setInitDbSuggest();
    setInitDbSuggestBoton();

//setInitRelaciones();
    setInitAccionesFormulario('div_modal', '');
</script>