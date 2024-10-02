<?php
include_once '_autoload.php';

$vta_presupuesto_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_id', 0);
$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);

$cli_cliente = $vta_presupuesto->getCliCliente();
$ins_tipo_lista_precio = $vta_presupuesto->getInsTipoListaPrecio();

?>
<form id='form_datos_cambiar_lista_precio' name='form_datos_cambiar_lista_precio' method='post' >
    <div class='datos cambiar-lista-precio' vta_presupuesto_id="<?php echo $vta_presupuesto_id ?>">

        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getCodigo()) ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getDescripcion()) ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Tipo de Lista') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Nueva Lista') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_ins_tipo_lista_precio_id', Gral::getCmbFiltro(InsTipoListaPrecio::getInsTipoListaPreciosCmb(true), '...'), $cmb_ins_tipo_lista_precio_id, 'textbox') ?>
                <div class="error label-error" id="cmb_ins_tipo_lista_precio_id_error"><?php Gral::_echo($cmb_ins_tipo_lista_precio_id_error) ?></div>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Observacion') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='7' cols='50' id='txa_observacion' class='textbox'></textarea>
                <div class="error label-error" id="txa_observacion_error"><?php Gral::_echo($txa_observacion_error) ?></div>
            </div>
        </div>

        <div class="botonera">
            <input id="btn_registrar" name='btn_registrar' type='button' class='boton' value='<?php Lang::_lang('Anular Comprobante') ?>' />
        </div>

    </div>
</form>
