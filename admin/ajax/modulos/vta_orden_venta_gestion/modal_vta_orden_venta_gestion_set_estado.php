<?php
include "_autoload.php";

$vta_orden_venta_id = Gral::getVars(Gral::VARS_GET, 'vta_orden_venta_id', null);
$vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
$vta_orden_venta_tipo_estado = $vta_orden_venta->getVtaOrdenVentaTipoEstado();
?>

<div class="datos vta-orden-venta-set-estado" vta_orden_venta_id="<?php Gral::_echo($vta_orden_venta->getId()) ?>">
    <form id='form_vta_orden_venta_set_estado' name='form_vta_orden_venta_set_estado' method='post' action='' >
        <div class="label-error" id="error_general_error"></div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo($vta_orden_venta->getCodigo()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato"><?php Gral::_echo($vta_orden_venta->getDescripcion()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Gral::_echo("Estado") ?>: </div>
            <div class="dato">
                <?php
                $vta_orden_venta_tipo_estado_id = $vta_orden_venta_tipo_estado->getId();
                Html::html_dib_select(1, 'cmb_vta_orden_venta_tipo_estado_id', Gral::getCmbFiltro(VtaOrdenVentaTipoEstado::getVtaOrdenVentaTipoEstadosCmb(), '...'), $vta_orden_venta_tipo_estado_id, 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_vta_orden_venta_tipo_estado_id_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Observacion') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='3' cols='45' id='txa_observacion' class='textbox'></textarea>
                <div class="label-error" id="txa_observacion_error"></div>
            </div>
        </div>

        <div class="botonera">
            <button class="boton" id='btn_guardar' name='btn_guardar' type='button' class='btn_guardar'><?php Lang::_lang('Guardar') ?></button>
        </div>

    </form>
</div>
<script>
    setInit();
    setInitVtaOrdenVentaGestion();
</script>