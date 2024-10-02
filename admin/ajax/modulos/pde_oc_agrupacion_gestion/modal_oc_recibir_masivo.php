<?php
include_once '_autoload.php';


$db_nombre_objeto = 'pde_pedido';
$pde_oc_agrupacion = new PdeOcAgrupacion();

// -------------------------------------------------------------------------
// inicializacion masiva desde recepcion masiva
// -------------------------------------------------------------------------    
$pde_oc_agrupacion_id = Gral::getVars(Gral::VARS_GET, 'pde_oc_agrupacion_id', 0);
if ($pde_oc_agrupacion_id != 0) {
    $pde_oc_agrupacion = PdeOcAgrupacion::getOxId($pde_oc_agrupacion_id);
    $pde_ocs = $pde_oc_agrupacion->getPdeOcs();

    $cmb_prv_proveedor_id = $pde_oc_agrupacion->getPrvProveedorId();
    $cmb_pde_centro_pedido_id = $pde_oc_agrupacion->getPdeCentroPedidoId();
    $cmb_pde_centro_recepcion_id = $pde_oc_agrupacion->getPdeCentroRecepcionId();
    //$txa_observacion = $pde_oc_agrupacion->getObservacion();

    $prv_proveedor = $pde_oc_agrupacion->getPrvProveedor();

    foreach ($pde_ocs as $pde_oc) {
        $key++;
        $arr_insumo_seleccionados[$key]['pde_oc_id'] = $pde_oc->getId();
        $arr_insumo_seleccionados[$key]['ins_insumo_id'] = $pde_oc->getInsInsumoId();
        $arr_insumo_seleccionados[$key]['cantidad'] = $pde_oc->getCantidad();

        $txt_cantidads[$key] = $pde_oc->getCantidad();
        $arr_pde_ocs[$key] = $pde_oc->getId();
    }
}
// -------------------------------------------------------------------------     

$txt_fecha_recepcion = date('Y-m-d');
?>
<form id='form_div_modal' name='form_div_modal' method='post' >
    <div class="datos agregar-masivo" pde_oc_agrupacion_id="<?php echo ($pde_oc_agrupacion) ? $pde_oc_agrupacion->getId() : 0 ?>" >

        <div class="col c1">


            <div class="par">
                <div class="label"><?php Lang::_lang('Fecha Recepcion') ?></div>
                <div class="dato">
                    <input name='txt_fecha_recepcion' type='text' class='textbox' id='txt_fecha_recepcion' value='<?php Gral::_echoTxt(Gral::getFechaToWEB($txt_fecha_recepcion)) ?>' size='10' />
                    <input type='button' id='cal_txt_fecha_recepcion' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'txt_fecha_recepcion', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_recepcion'
                        });
                    </script>

                    <div class="label-error" id="txt_fecha_recepcion_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Centro Pedido') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_pde_centro_pedido_id', Gral::getCmbFiltro(PdeCentroPedido::getPdeCentroPedidosCmb(), '...'), $cmb_pde_centro_pedido_id, 'textbox') ?>

                    <div class="label-error" id="cmb_pde_centro_pedido_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
                <div class="dato">
                    <?php Gral::_echo($prv_proveedor->getDescripcion()) ?>
                </div>
            </div>

        </div>

        <div class="col c2">

            <div class="par">
                <div class="label"><?php Lang::_lang('Centro Rec') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_pde_centro_recepcion_id', Gral::getCmbFiltro(PdeCentroRecepcion::getPdeCentroRecepcionsCmb(), '...'), $cmb_pde_centro_recepcion_id, 'textbox') ?>

                    <div class="label-error" id="cmb_pde_centro_recepcion_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Panol') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_pan_panol_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmbFxCredencial(), '...'), $cmb_pan_panol_id, 'textbox') ?>

                    <div class="label-error" id="cmb_pan_panol_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Observaciones') ?></div>
                <div class="dato">
                    <textarea name='txa_observacion' rows='3' cols='35' id='txa_observacion' class='textbox '><?php Gral::_echoTxt($txa_observacion) ?></textarea>

                    <div class="label-error" id="txa_observacion_error"></div>
                </div>
            </div>

        </div>

        <div class="div_listado_pde_oc_agrupacion_items">

            <?php
            include "modal_oc_recibir_masivo_item_datos.php";
            ?>

        </div>

        <div class="botonera">
            <div class="label-error" id="lbl_general_error"></div>
            <input name='btn_generar_recepcion_masiva' class="boton" type='button' id='btn_generar_recepcion_masiva' value='<?php Lang::_lang('Generar Recepcion Masiva') ?>' />
        </div>

    </div>

</form>
<script>
    setInitPdeOcAgrupacions();
    setInit();

    setInitDbSuggest();
    setInitDbSuggestBoton();
</script>