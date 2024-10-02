<?php
include_once '_autoload.php';

$db_nombre_objeto = 'pde_cotizacion';
$hdn_error = 1;


$pde_pedido = new PdePedido();
$error = new DbError();

if (Gral::esPost()) {
    $hdn_id = Gral::getVars(1, 'hdn_id');
    $pde_cotizacion = PdeCotizacion::getOxId($hdn_id);
    $pde_pedido = $pde_cotizacion->getPdePedido();

    $cmb_pde_centro_recepcion_id = Gral::getVars(1, "cmb_pde_centro_recepcion_id");
    $txt_vencimiento = Gral::getFechaToDB(Gral::getVars(1, "txt_vencimiento"));
    $txa_observacion = Gral::getVars(1, "txa_observacion");
    //Gral::prr($pde_pedido);
    //exit;

    $estado = true;
    // controles

    if (Ctrl::esVacio($cmb_pde_centro_recepcion_id)) {
        $estado = false;
        $cmb_pde_centro_recepcion_id_error = Lang::_lang('Debe seleccionar un Centro de Recepcion', true);
    }

    if (!Ctrl::esFechaValida($txt_vencimiento)) {
        $estado = false;
        $txt_vencimiento_error = Lang::_lang('Debe ingresar una fecha valida', true);
    } else {
        if (!Date::esRangoValido(Date::getFechaActual(), $txt_vencimiento)) {
            $estado = false;
            $txt_vencimiento_error = Lang::_lang('Debe ingresar una fecha mayor o igual a la actual', true);
        }
    }

    if ($estado) {
        $hdn_error = 0;

        $pde_oc = $pde_cotizacion->addPdeOc($cmb_pde_centro_recepcion_id, $txt_vencimiento, $txa_observacion);

        // se envia aviso ---------------------------------------------------------------------
        $asunto = 'PDE Orden de Compra Aprobada #' . $pde_oc->getCodigo() . ' ' . date('d/m/Y H:m');
        $pde_oc->enviarAvisos($asunto);
        // ------------------------------------------------------------------------------------
    }
} else {
    $cotizacion_id = Gral::getVars(2, 'cotizacion_id', 0);
    $hdn_id = $cotizacion_id;
    if ($cotizacion_id != 0) {
        $pde_cotizacion = PdeCotizacion::getOxId($cotizacion_id);
        $pde_pedido = $pde_cotizacion->getPdePedido();
    }
    $pde_cotizacion->setPdeCotizacionLeido();
    $txt_vencimiento = $pde_cotizacion->getFechaEntrega();
}

// se controla que el pedido no haya generado ya una OC
$pde_oc = $pde_pedido->getPdeOc();
$pde_centro_pedido = $pde_pedido->getPdeCentroPedido();

if ($pde_oc) {
    echo "El Pedido " . $pde_pedido->getCodigo() . " ya generó una Orden de Compra";
    exit;
}
?>
<form id='form_cotizacion' name='form_cotizacion' method='post' action='<?php echo Gral::getPath('path_http') . "admin/ajax/modulos/pde_pedido/modal_cotizacion_generar_oc.php" ?>' >
    <div class='datos' >

        <?php include "pde_cotizacion_modal_top.php" ?>   

        <div class="par">
            <div class="label"><?php Lang::_lang('Centro de Recepcion') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_pde_centro_recepcion_id', Gral::getCmbFiltro($pde_centro_pedido->getPdeCentroRecepcionsCmbXPdeCentroPedidoPdeCentroRecepcion(), 'Seleccione PdeCentroRecepcion'), $cmb_pde_centro_recepcion_id, 'textbox') ?>
                <div class="error"><?php echo $cmb_pde_centro_recepcion_id_error ?></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Vencimiento') ?></div>
            <div class="dato">
                <input name='txt_vencimiento' type='text' class='textbox date' id='txt_vencimiento' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($txt_vencimiento)) ?>' size='10' />
                <input type='button' id='cal_txt_vencimiento' value='...' />

                <script type='text/javascript'>
                    Calendar.setup({
                        inputField: 'txt_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_txt_vencimiento'
                    });
                </script>
                <div class="error"><?php echo $txt_vencimiento_error ?></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='10' cols='60' id='pde_pedido_txa_observacion' class='textbox'><?php Gral::_echoTxt($txa_observacion) ?></textarea>
            </div>
            <div class="error"><?php echo $txa_observacion_error ?></div>
        </div>

        <div class="botonera">
            <input id="btn_guardar" name='btn_guardar' type='submit' class='boton' value='<?php Lang::_lang('Generar Orden de Compra') ?>' />
            <input id="hdn_id" name='hdn_id' type='hidden' value='<?php echo $pde_cotizacion->getId() ?>' />

            <input id="hdn_error" name='hdn_error' type='hidden' value='<?php echo $hdn_error ?>' />
            <input id="hdn_mensaje" name='hdn_mensaje' type='hidden' value='<?php Lang::_lang('Se genero la Orden de Compra correctamente') ?>' />
        </div>

    </div>
</form>
