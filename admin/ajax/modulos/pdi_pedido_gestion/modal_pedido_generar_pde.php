<?php
include "_autoload.php";

$pdi_pedido = new PdiPedido();
$error = new DbError();
$hdn_error = 1;

if (Gral::esPost()) {
    $hdn_id = Gral::getVars(1, 'hdn_id');
    $pdi_pedido->setId($hdn_id);

    $btn_guardar = Gral::getVars(1, 'btn_guardar');

    $accion = '';
    if (trim($btn_guardar) != '') {
        $accion = 'guardar';
    }

    $cmb_pdi_pedido_pde_urgencia_id = Gral::getVars(1, "cmb_pdi_pedido_pde_urgencia_id", null);
    $pdi_pedido_txt_vencimiento = Gral::getFechaToDb(Gral::getVars(1, "pdi_pedido_txt_vencimiento", null));
    $pdi_pedido_txt_cantidad = Gral::getVars(1, "pdi_pedido_txt_cantidad", null);
    $pdi_pedido_txa_observacion = Gral::getVars(1, "pdi_pedido_txa_observacion", '');

    // control de datos
    $estado = true;

    if (Ctrl::esVacio($cmb_pdi_pedido_pde_urgencia_id)) {
        $estado = false;
        $cmb_pdi_pedido_pde_urgencia_id_error = Lang::_lang('Debe ingresar una fecha valida', true);
    }

    if (!Ctrl::esFechaValida($pdi_pedido_txt_vencimiento)) {
        $estado = false;
        $pdi_pedido_txt_vencimiento_error = Lang::_lang('Debe ingresar una fecha valida', true);
    } else {
        if (!Date::esRangoValido(Date::getFechaActual(), $pdi_pedido_txt_vencimiento)) {
            $estado = false;
            $pdi_pedido_txt_vencimiento_error = Lang::_lang('Debe ingresar una fecha mayor o igual a la actual', true);
        }
    }

    if ((int) $pdi_pedido_txt_cantidad <= 0) {
        $estado = false;
        $pdi_pedido_txt_cantidad_error = Lang::_lang('Debe agregar un valor mayor a cero', true);
    }

    if ($pdi_pedido_txa_observacion == '') {
        $estado = false;
        $pdi_pedido_txa_observacion_error = Lang::_lang('Debe ingresar una observacion', true);
    }

    //Gral::prr($pdi_pedido);

    if ($estado) {
        $hdn_error = 0; // no hay error
        // se registra estado del pedido, PdiEstado
        $pde_pedido = $pdi_pedido->addPdePedido($cmb_pdi_pedido_pde_urgencia_id, $pdi_pedido_txt_cantidad, $pdi_pedido_txt_vencimiento, $pdi_pedido_txa_observacion);

        // se envia aviso ---------------------------------------------------------------------
        $asunto = 'PDE Pedido Solicitado #' . $pde_pedido->getCodigo() . ' ' . date('d/m/Y H:m');
        $pde_pedido->enviarAvisos($asunto);
        // ------------------------------------------------------------------------------------
        //header('Location: modal_pedido_confirmacion?id='.$pdi_pedido->getId());
        //exit;
    }
} else {
    $pedido_id = Gral::getVars(2, 'pedido_id', 0);
    if ($pedido_id != 0) {
        $pdi_pedido = PdiPedido::getOxId($pedido_id);
    }
    $cmb_pdi_pedido_pde_urgencia_id = 2;

    $pdi_pedido_txt_cantidad = $pdi_pedido->getPdiEstadoActual()->getCantidad();
    $vencimiento = Date::sumarDias(date('Y-m-d'), 7);
    $pdi_pedido_txt_vencimiento = $vencimiento;
}
?>
<form id='form_pedido' name='form_pedido' method='post' action='ajax/modulos/pdi_pedido_gestion/modal_pedido_generar_pde.php' >
    <div class="datos">

        <?php include "pdi_pedido_gestion_modal_top.php" ?>   

        <div class="par">
            <div class="label"><?php Lang::_lang('PdeUrgencia') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_pdi_pedido_pde_urgencia_id', Gral::getCmbFiltro(PdeUrgencia::getPdeUrgenciasCmb(), 'Seleccione PdeUrgencia'), $cmb_pdi_pedido_pde_urgencia_id, 'textbox') ?>
                <div class="error"><?php Gral::_echo($cmb_pdi_pedido_pde_urgencia_id_error) ?></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Vencimiento') ?></div>
            <div class="dato">
                <input name='pdi_pedido_txt_vencimiento' type='text' class='textbox date' id='pdi_pedido_txt_vencimiento' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($pdi_pedido_txt_vencimiento)) ?>' size='10' />
                <input type='button' id='cal_pdi_pedido_txt_vencimiento' value='...' />

                <script type='text/javascript'>
                    Calendar.setup({
                        inputField: 'pdi_pedido_txt_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_pdi_pedido_txt_vencimiento'
                    });
                </script>            
                <div class="error"><?php Gral::_echo($pdi_pedido_txt_vencimiento_error) ?></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato">
                <input name='pdi_pedido_txt_cantidad' type='text' class='textbox' id='pdi_pedido_txt_cantidad' value='<?php Gral::_echoTxt($pdi_pedido_txt_cantidad) ?>' size='5' />
                <div class="error"><?php Gral::_echo($pdi_pedido_txt_cantidad_error) ?></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='pdi_pedido_txa_observacion' rows='10' cols='60' id='pdi_pedido_txa_observacion' class='textbox'><?php Gral::_echoTxt($pdi_pedido_txa_observacion, true) ?></textarea>
                <div class="error"><?php Gral::_echo($pdi_pedido_txa_observacion_error) ?></div>
            </div>
        </div>

        <div class="botonera">
            <input id="btn_guardar" name='btn_guardar' type='submit' class='boton' value='<?php Lang::_lang('Generar Pedido a Proveedores') ?>' />
            <input id="hdn_id" name='hdn_id' type='hidden' value='<?php echo $pdi_pedido->getId() ?>' />
            <input id="hdn_error" name='hdn_error' type='hidden' value='<?php echo $hdn_error ?>' />
            <input id="hdn_mensaje" name='hdn_mensaje' type='hidden' value='<?php Lang::_lang('Se Genero Solicitud de Compra Correctamente') ?>' />
        </div>

    </div>
</form>