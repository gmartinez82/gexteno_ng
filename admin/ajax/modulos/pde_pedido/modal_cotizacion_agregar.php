<?php
include_once '_autoload.php';

$db_nombre_objeto = 'pde_cotizacion';
$hdn_error = 1;


$pde_pedido = new PdePedido();
$error = new DbError();

if (Gral::esPost()) {
    $hdn_id = Gral::getVars(1, 'hdn_id', 0);
    $pde_pedido = PdePedido::getOxId($hdn_id);

    $hdn_cotizacion_id = Gral::getVars(1, 'hdn_cotizacion_id', 0);
    $pde_cotizacion = PdeCotizacion::getOxId($hdn_cotizacion_id);
    $pde_cotizacion_id = false;
    if ($pde_cotizacion) {
        $pde_cotizacion_id = $pde_cotizacion->getId();
    }

    $pde_pedido_cmb_prv_proveedor_id = Gral::getVars(1, "pde_pedido_cmb_prv_proveedor_id");
    $pde_pedido_txt_codigo = Gral::getVars(1, "pde_pedido_txt_codigo");
    //$pde_pedido_cmb_ins_marca_id = Gral::getVars(1, "pde_pedido_cmb_ins_marca_id", null);
    $pde_pedido_txt_cantidad = Gral::getVars(1, "pde_pedido_txt_cantidad", 0);
    $pde_pedido_txt_fecha_entrega = Gral::getVars(1, "pde_pedido_txt_fecha_entrega");
    //$pde_pedido_cmb_gral_moneda_id = Gral::getVars(1, "pde_pedido_cmb_gral_moneda_id");
    $pde_pedido_txt_importe_unitario = Gral::getImporteDesdePriceFormatToDB(Gral::getVars(1, "pde_pedido_txt_importe_unitario"));
    $pde_pedido_txa_observacion = Gral::getVars(1, "pde_pedido_txa_observacion");

    $chk_condicion_pago = $_POST['chk_condicion_pago'];
    //Gral::prr($chk_condicion_pago);
    //Gral::prr($pde_pedido);
    //exit;
    // control de datos
    $estado = true;

    if (Ctrl::esVacio($pde_pedido_cmb_prv_proveedor_id)) {
        $estado = false;
        $pde_pedido_cmb_prv_proveedor_id_error = Lang::_lang('Debe seleccionar un Proveedor', true);
    }
/*
    if (Ctrl::esVacio($pde_pedido_cmb_ins_marca_id)) {
        $estado = false;
        $pde_pedido_cmb_ins_marca_id_error = Lang::_lang('Debe elegir una marca', true);
    }
*/
    if (!Ctrl::esDigito($pde_pedido_txt_cantidad)) {
        $estado = false;
        $pde_pedido_txt_cantidad_error = Lang::_lang('Debe ingresar un valor entero', true);
    }
/*
    if (Ctrl::esVacio($pde_pedido_cmb_gral_moneda_id)) {
        $estado = false;
        $pde_pedido_cmb_gral_moneda_id_error = Lang::_lang('Debe elegir una moneda', true);
    }
*/
    if (!Ctrl::esNumero($pde_pedido_txt_importe_unitario)) {
        $estado = false;
        $pde_pedido_txt_importe_unitario_error = Lang::_lang('Debe ingresar un valor entero', true);
    } else {
        if ($pde_pedido_txt_importe_unitario == '0.00') {
            $estado = false;
            $pde_pedido_txt_importe_unitario_error = Lang::_lang('Debe ingresar un valor mayor a 0', true);
        }
    }
    if (!is_array($chk_condicion_pago)) {
        //$estado = false;
        //$chk_condicion_pago_error = Lang::_lang('Debe indicar al menos una condicion de pago', true);
    }

    //$estado = false;
    if ($estado) {
        //$pde_pedido->save();

        $prv_proveedor = PrvProveedor::getOxId($pde_pedido_cmb_prv_proveedor_id);

        // se registra estado del pedido, PdeEstado
        $pde_cotizacion = $pde_pedido->addPdeCotizacion(
                $prv_proveedor, $pde_pedido_txt_codigo, $pde_pedido_cmb_ins_marca_id, $pde_pedido_txt_cantidad, $pde_pedido_txt_fecha_entrega, $pde_pedido_cmb_gral_moneda_id, $pde_pedido_txt_importe_unitario, $pde_pedido_txa_observacion, $chk_condicion_pago, $pde_cotizacion_id
        );


        // se envia aviso ---------------------------------------------------------------------
        $asunto = 'PDE Cotizacion Registrada #' . $pde_cotizacion->getCodigo() . ' ' . date('d/m/Y H:m');
        $pde_cotizacion->enviarAvisos($asunto);
        // ------------------------------------------------------------------------------------

        $hdn_error = 0;
    }
} else {
    $cotizacion_id = Gral::getVars(2, 'cotizacion_id', 0);
    $pde_cotizacion = PdeCotizacion::getOxId($cotizacion_id);
    if ($pde_cotizacion) {
        $pedido_id = $pde_cotizacion->getPdePedidoId();
        $pde_pedido = PdePedido::getOxId($pedido_id);

        $pde_pedido_cmb_prv_proveedor_id = $pde_cotizacion->getPrvProveedorId();
        $pde_pedido_txt_codigo = $pde_cotizacion->getCodigo();
        //$pde_pedido_cmb_ins_marca_id = $pde_cotizacion->getInsMarcaId();
        $pde_pedido_txt_cantidad = $pde_cotizacion->getCantidad();
        $pde_pedido_txt_fecha_entrega = $pde_cotizacion->getFechaEntrega();
        //$pde_pedido_cmb_gral_moneda_id = $pde_cotizacion->getGralMonedaId();
        $pde_pedido_txt_importe_unitario = $pde_cotizacion->getImporteUnidad();
        $pde_pedido_txa_observacion = $pde_cotizacion->getObservacion();

        $chk_condicion_pago = $pde_cotizacion->getArrayCondicionPagos();
    } else {
        $pedido_id = Gral::getVars(2, 'pedido_id', 0);
        $pde_pedido = PdePedido::getOxId($pedido_id);

        $pde_pedido_txt_cantidad = $pde_pedido->getCantidad();
        $pde_pedido_txt_fecha_entrega = $pde_pedido->getVencimiento();
    }

    $hdn_id = $pedido_id;
    $hdn_cotizacion_id = $cotizacion_id;
    //if($pedido_id != 0){
    //} 
}

//$arr_marcas_cmb = $pde_pedido->getInsMarcasCmbXPdePedidoInsMarca();
//$pde_condicion_pagos = $pde_pedido->getPdeCondicionPagosHabilitadas();
?>
<form id='form_cotizacion' name='form_cotizacion' method='post' action='<?php echo Gral::getPath('path_http') . "admin/ajax/modulos/pde_pedido/modal_cotizacion_agregar.php" ?>' >
    <div class='datos cotizar' >

        <div class="col c1">
            <div class="par">
                <div class="label"><?php Lang::_lang('Proveedor') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'pde_pedido_cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmbF(), '...'), $pde_pedido_cmb_prv_proveedor_id, 'textbox') ?>

                    <div class="error"><?php Gral::_echo($pde_pedido_cmb_prv_proveedor_id_error) ?></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Nro Cotizacion') ?></div>
                <div class="dato">
                    <div class="comentario"><?php Lang::_lang('Opcional: Numero interno de cotizacion del proveedor') ?></div>
                    <input name='pde_pedido_txt_codigo' type='text' class='textbox' id='pde_pedido_txt_codigo' value='<?php Gral::_echoTxt($pde_pedido_txt_codigo) ?>' size='20' />
                    <div class="error"><?php Gral::_echo($pde_pedido_txt_codigo_error) ?></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Cantidad') ?></div>
                <div class="dato">
                    <input name='pde_pedido_txt_cantidad' type='text' class='textbox spinner' id='pde_pedido_txt_cantidad' value='<?php Gral::_echoTxt($pde_pedido_txt_cantidad) ?>' size='10' />
                    <div class="error"><?php Gral::_echo($pde_pedido_txt_cantidad_error) ?></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Fecha de Entrega') ?></div>
                <div class="dato">
                    <input name='pde_pedido_txt_fecha_entrega' type='text' class='textbox date' id='pde_pedido_txt_fecha_entrega' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($pde_pedido_txt_fecha_entrega)) ?>' size='10' />

                    <input type='button' id='cal_pde_pedido_txt_fecha_entrega' value='...' />
                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'pde_pedido_txt_fecha_entrega', ifFormat: '%d/%m/%Y', button: 'cal_pde_pedido_txt_fecha_entrega'
                        });
                    </script>                

                    <div class="comentario">
                        <?php Lang::_lang('Fecha Maxima de Entrega que Ud. Propone') ?><br />
                        <?php Lang::_lang('Formato: DD/MM/AAAA') ?>
                    </div>
                    <div class="error"><?php Gral::_echo($pde_pedido_txt_fecha_entrega_error) ?></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Importe Unitario') ?></div>
                <div class="dato">
                    <input name='pde_pedido_txt_importe_unitario' type='text' class='textbox moneda' id='pde_pedido_txt_importe_unitario' value='<?php Gral::_echoImp($pde_pedido_txt_importe_unitario) ?>' size='15' />
                    <div class="comentario">
                        <?php Lang::_lang('Precio Sin IVA') ?><br />
                        <?php Lang::_lang('Formato: 9.999,99') ?>
                    </div>
                    <div class="error"><?php Gral::_echo($pde_pedido_txt_importe_unitario_error) ?></div>  
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Observaciones') ?></div>
                <div class="dato">
                    <textarea name='pde_pedido_txa_observacion' rows='3' cols='60' id='pde_pedido_txa_observacion' class='textbox'><?php Gral::_echoTxt($txa_observacion) ?></textarea>
                </div>
                <div class="error"><?php echo $txa_observacion_error ?></div>
            </div>
        </div>

        <!--
        <div class="col c2">
            <div class="condiciones-pago">
                <h4>Condiciones de Pago</h4>
                <p class="comentario">Debe aclarar las condiciones de pago aceptadas por el proveedor para la cotización.</p>
                <div class="error"><?php Gral::_echo($chk_condicion_pago_error) ?></div>  

                <?php foreach ($pde_condicion_pagos as $pde_condicion_pago) { ?>
                    <div class="uno condicion-pago">
                        <input type="checkbox" id="chk_condicion_pago_<?php echo $pde_condicion_pago->getId() ?>" name="chk_condicion_pago[<?php echo $pde_condicion_pago->getId() ?>]" value="<?php echo $pde_condicion_pago->getId() ?>" <?php echo(is_array($chk_condicion_pago) && array_key_exists($pde_condicion_pago->getId(), $chk_condicion_pago) ? 'checked="checked"' : '') ?> />
                        <label for="chk_condicion_pago_<?php echo $pde_condicion_pago->getId() ?>"><?php Gral::_echo($pde_condicion_pago->getDescripcion()) ?></label>
                    </div>
                <?php } ?>
            </div>
        </div>
        -->

        <div class="botonera">
            <input id="btn_guardar" name='btn_guardar' type='submit' class='boton' value='<?php Lang::_lang('Registrar Cotizacion') ?>' />
            <input id="hdn_id" name='hdn_id' type='hidden' value='<?php echo $pde_pedido->getId() ?>' />
            <input id="hdn_cotizacion_id" name='hdn_cotizacion_id' type='hidden' value='<?php echo $hdn_cotizacion_id ?>' />

            <input id="hdn_error" name='hdn_error' type='hidden' value='<?php echo $hdn_error ?>' />
            <input id="hdn_mensaje" name='hdn_mensaje' type='hidden' value='<?php Lang::_lang('Se registro la cotizacion correctamente') ?>' />
        </div>

    </div>
</form>
