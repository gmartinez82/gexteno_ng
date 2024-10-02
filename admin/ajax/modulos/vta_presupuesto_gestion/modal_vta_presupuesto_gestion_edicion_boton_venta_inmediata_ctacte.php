<?php
include "_autoload.php";

$vta_presupuesto_id = Gral::getVars(Gral::VARS_POST, "vta_presupuesto_id", 0);
$chk_vta_presupuesto_ins_insumo = Gral::getVars(Gral::VARS_POST, 'chk_vta_presupuesto_ins_insumo');

$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
$arr_vta_presupuesto_ins_insumos_seleccionados = $vta_presupuesto->getEsVentaParcial($chk_vta_presupuesto_ins_insumo);

$vta_presupuesto_ins_insumos = $vta_presupuesto->getVtaPresupuestoInsInsumos(null, null, true);
$presupuesto_mueve_stock = $vta_presupuesto->getVtaPresupuestoMueveStock();

$cli_cliente = $vta_presupuesto->getCliCliente();

$vta_presupuesto_importe_total_con_iva = $vta_presupuesto->getImporteTotalPresupuestoConIva();

// se inicializa variable de configuracion 
$cv_importe_minimo_exigencia_info_comprador_consumidor_final = ConfVariable::getVtaComprobanteMinimoExigenciaInfoCompradorConsumidorFinal();

$pan_panols_cmbfx_credencial = PanPanol::getPanPanolsCmbFxCredencial();
?>

<div class="datos confirmacion">

    <?php if ($arr_vta_presupuesto_ins_insumos_seleccionados['CANTIDAD'] == 0) { ?>
        <div class="mensaje cantidad">Debe elegir al menos uno de los items para generar las Ordenes de Venta</div>
    <?php } else { ?>

        <form id='form_vta_presupuesto_gestion_edicion_confirmacion' name='form_vta_presupuesto_gestion_edicion_confirmacion' method='post' action='' vta_presupuesto_id="<?php Gral::_echo($vta_presupuesto->getId()) ?>">
            <?php if ($arr_vta_presupuesto_ins_insumos_seleccionados['TOTAL'] == 0) { ?>
                <div class="mensaje parcial">Esta a punto de generar una APROBACION PARCIAL de presupuesto incluyendo <?php echo count($arr_vta_presupuesto_ins_insumos_seleccionados['SELECCIONADOS']) ?> item/s.</div>
            <?php } else { ?>
                <div class="mensaje total">Esta a punto de generar una APROBACION TOTAL de presupuesto</div>
            <?php } ?>

            <?php if ($cli_cliente->getId() == 'null') { ?>
                <?php if ($vta_presupuesto_importe_total_con_iva >= $cv_importe_minimo_exigencia_info_comprador_consumidor_final) { ?>                    
                    <div class="consumidor-final-solicitud-datos-alerta">
                        El importe a facturar supera los <?php Gral::_echoImp($cv_importe_minimo_exigencia_info_comprador_consumidor_final) ?> por lo que se debera solicitar informacion del comprador.
                    </div>
                <?php } ?>   
            <?php } ?>   

            <div class="par">
                <div class="label"><?php Lang::_lang('Mover Stock') ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_confirmacion_mover_stock', GralSiNo::getGralSiNosCmb(), $cmb_confirmacion_mover_stock = 1, 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_confirmacion_mover_stock_error"></div>
                </div>
            </div>        

            <div class="par">
                <div class="label"><?php Gral::_echo("Nota Privada") ?>: </div>
                <div class="dato">
                    <textarea name='txa_confirmacion_nota_privada' rows='2' cols='60' id='txa_confirmacion_nota_privada' class='textbox'><?php Gral::_echoTxt($vta_presupuesto->getNotaInterna()) ?></textarea>
                    <div class="label-error" id="txa_confirmacion_nota_privada_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Deposito') ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_confirmacion_pan_panol_id', Gral::getCmbFiltro($pan_panols_cmbfx_credencial, '...'), $cmb_pan_panol_id, 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_confirmacion_pan_panol_id_error"></div>
                    Deposito desde donde se descontara el STOCK
                </div>
            </div>        

            <?php if ($presupuesto_mueve_stock) { ?>
                <div class="stock-movimiento-alerta">
                    Se realizara el movimiento de stock de los siguientes insumos vendidos:

                    <ul>
                        <?php
                        foreach ($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo) {
                            $ins_insumo = $vta_presupuesto_ins_insumo->getInsInsumo();
                            $cantidad = $vta_presupuesto_ins_insumo->getCantidad();

                            if (array_key_exists($vta_presupuesto_ins_insumo->getId(), $chk_vta_presupuesto_ins_insumo)) {
                                if ($ins_insumo->getControlStock()) {
                                    ?>
                                    <li>
                                        <label class="cantidad"><?php Gral::_echo($cantidad) ?></label> 
                                        <label class="unidad-medida"><?php Gral::_echo($ins_insumo->getInsUnidadMedida()->getDescripcion()) ?>/s</label>
                                        de 
                                        <label class="insumo"><?php Gral::_echo($ins_insumo->getDescripcion()) ?></label>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>            


            <div class="botonera confirmacion">
                <button type="button" class="boton" id="btn_presupuesto_generar_venta_inmediata_ctacte_confirmar" name="btn_presupuesto_generar_venta_inmediata_ctacte_confirmar">
                    <div class="titulo">Venta Inmediata Cuenta Corriente</div>
                    <div class="comentario">Genera OV + Remito</div>                
                </button>
            </div>

        <?php } ?>
    </form>
</div>