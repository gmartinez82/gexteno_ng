<?php
//include_once '../../../control/seguridad.php';
//include_once '../../../control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'ins_insumo_pan_panol_alta';
$db_nombre_pagina = 'ins_insumo_pan_panol_alta';

$ins_insumo_pan_panol = new InsInsumoPanPanol();
$error = new DbError();
$hdn_error = 1;

if (Gral::esPost()) {
    $hdn_id = Gral::getVars(1, 'hdn_id');
    $hdn_id_resumen = Gral::getVars(1, 'hdn_id_resumen');
    $hdn_id_insumo = Gral::getVars(1, 'hdn_id_insumo');
    $hdn_id_panol = Gral::getVars(1, 'hdn_id_panol');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');
    $btn_guardarnvo = Gral::getVars(1, 'btn_guardarnvo');

    $accion = '';
    if (trim($btn_guardar) != '') {
        $accion = 'guardar';
    }
    if (trim($btn_guardarnvo) != '') {
        $accion = 'guardarnvo';
    }

    $ins_stock_resumen = InsStockResumen::getOxId($hdn_id_resumen);
    $ins_insumo = InsInsumo::getOxId($hdn_id_insumo);
    $pan_panol = PanPanol::getOxId($hdn_id_panol);
    $ins_insumo_pan_panol = InsInsumoPanPanol::getOxId($hdn_id);

    //$ins_insumo = $ins_insumo_pan_panol->getInsInsumo();
    //$pan_panol = $ins_insumo_pan_panol->getPanPanol();
    //Gral::prr($ins_insumo_pan_panol);
    //exit;

    $ins_insumo_pan_panol->setInsInsumoId($ins_insumo->getId());
    $ins_insumo_pan_panol->setPanPanolId($pan_panol->getId());
    $ins_insumo_pan_panol->setPanUbiPisoId(Gral::getVars(1, "ins_insumo_pan_panol_cmb_pan_ubi_piso_id", null));
    $ins_insumo_pan_panol->setPanUbiPasilloId(Gral::getVars(1, "ins_insumo_pan_panol_cmb_pan_ubi_pasillo_id", null));
    $ins_insumo_pan_panol->setPanUbiEstanteId(Gral::getVars(1, "ins_insumo_pan_panol_cmb_pan_ubi_estante_id", null));
    $ins_insumo_pan_panol->setPanUbiAlturaId(Gral::getVars(1, "ins_insumo_pan_panol_cmb_pan_ubi_altura_id", null));
    $ins_insumo_pan_panol->setPanUbiCasilleroId(Gral::getVars(1, "ins_insumo_pan_panol_cmb_pan_ubi_casillero_id", null));
    $ins_insumo_pan_panol->setPanUbiCeldaId(Gral::getVars(1, "ins_insumo_pan_panol_cmb_pan_ubi_celda_id", null));
    $ins_insumo_pan_panol->setInsClasificacionId(Gral::getVars(1, "ins_insumo_pan_panol_cmb_ins_clasificacion_id", null));
    $ins_insumo_pan_panol->setPuntoMinimo(Gral::getVars(1, "ins_insumo_pan_panol_txt_punto_minimo", 0));
    $ins_insumo_pan_panol->setPuntoPedido(Gral::getVars(1, "ins_insumo_pan_panol_txt_punto_pedido", 0));
    $ins_insumo_pan_panol->setPuntoMaximo(Gral::getVars(1, "ins_insumo_pan_panol_txt_punto_maximo", 0));
    $ins_insumo_pan_panol->setCreado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_insumo_pan_panol_txt_creado")));
    $ins_insumo_pan_panol->setCreadoPor(Gral::getVars(1, "ins_insumo_pan_panol__creado_por", null));
    $ins_insumo_pan_panol->setModificado(Gral::getFechaHoraToDb(Gral::getVars(1, "ins_insumo_pan_panol_txt_modificado")));
    $ins_insumo_pan_panol->setModificadoPor(Gral::getVars(1, "ins_insumo_pan_panol__modificado_por", null));

    //Gral::prr($ins_insumo_pan_panol);
    //exit;

    switch ($accion) {
        case 'guardar':
            $error = $ins_insumo_pan_panol->control();
            if (!$error->getExisteError()) {
                $ins_insumo_pan_panol->saveDesdeBackend();

                if ($ins_stock_resumen) {
                    PrcProceso::controlStockInsumosTipoEstado($ins_stock_resumen->getId());
                }
                
                $hdn_error = 0;
            }
            break;
    }
    Gral::setSes('InsInsumoPanPanol_ULTIMO_INSERTADO', $ins_insumo_pan_panol->getId());
} else {
    $insumo_id = Gral::getVars(2, 'insumo_id', 0);
    $panol_id = Gral::getVars(2, 'panol_id', 0);
    $resumen_id = Gral::getVars(2, 'resumen_id', 0);

    $ins_stock_resumen = InsStockResumen::getOxId($resumen_id);
    //$ins_insumo = $ins_stock_resumen->getInsInsumo();
    //$pan_panol = $ins_stock_resumen->getPanPanol();

    $ins_insumo = InsInsumo::getOxId($insumo_id);
    $pan_panol = PanPanol::getOxId($panol_id);

    $array = array(
        array('campo' => 'ins_insumo_id', 'valor' => $ins_insumo->getId()),
        array('campo' => 'pan_panol_id', 'valor' => $pan_panol->getId()),
    );
    $ins_insumo_pan_panol = InsInsumoPanPanol::getOxArray($array);
    if (!$ins_insumo_pan_panol) {
        $ins_insumo_pan_panol = new InsInsumoPanPanol();
        $ins_insumo_pan_panol->setInsInsumoId($ins_insumo->getId());
        $ins_insumo_pan_panol->setPanPanolId($pan_panol->getId());
        $ins_insumo_pan_panol->setPuntoMinimo($ins_insumo->getPuntoMinimo());
        $ins_insumo_pan_panol->setPuntoPedido($ins_insumo->getPuntoPedido());
        $ins_insumo_pan_panol->setPuntoMaximo($ins_insumo->getPuntoMaximo());
        $ins_insumo_pan_panol->save();
    }

    $prefijo = '';
}
$ins_unidad_medida = $ins_insumo->getInsUnidadMedida();
?>
<body>
    <form id='formu' name='formu' method='post' action='ajax/modulos/ins_insumo_gestion/modal_puntos_panol_central.php' >

        <table border='0' cellspacing='10' class='adm_carga_datos' align='center' id='alta_modal_ins_insumo_pan_panol'>

            <tr>
                <td width='150' class='adm_carga_datos_titulos'>

                    <?php Lang::_lang('InsInsumo') ?>

                </td>
                <td width='450' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_cmb_ins_insumo_id">
                    <div class="insumo">    
                        <strong><?php Gral::_echo($ins_insumo->getDescripcion()) ?></strong>
                    </div>
                </td>
            </tr>

            <tr>
                <td width='150' class='adm_carga_datos_titulos'>
                    <?php Lang::_lang('PanPanol') ?>
                </td>
                <td width='450' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_cmb_pan_panol_id">

                    <div class="panol">    
                        <strong><?php Gral::_echo($pan_panol->getDescripcion()) ?></strong>
                    </div>

                </td>
            </tr>

            <tr>
                <td width='150' class='adm_carga_datos_titulos'>
                    <?php Lang::_lang('Stock Actual') ?>
                </td>
                <td width='450' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_cmb_pan_panol_id">

                    <?php if ($ins_stock_resumen) { ?>
                        <div class="stock-actual">    
                            <strong><?php Gral::_echo($ins_stock_resumen->getCantidad()) ?></strong>
                        </div>
                    <?php } ?>

                </td>
            </tr>

            <tr>
                <td width='150' class='adm_carga_datos_titulos'>

                    <?php Lang::_lang('Ubicacion') ?>

                </td>
                <td width='450' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_cmb_pan_ubi_piso_id">

                    <?php $error_input_css = ($error->getErrorXIndice('pan_ubi_piso_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <label title="<?php Lang::_lang('PanUbiPiso') ?>">
                        <?php Html::html_dib_select(1, 'ins_insumo_pan_panol_cmb_pan_ubi_piso_id', Gral::getCmbFiltro(PanUbiPiso::getPanUbiPisosCmb(), '...'), $ins_insumo_pan_panol->getPanUbiPisoId(), 'textbox ' . $error_input_css) ?>
                    </label>
                    <label title="<?php Lang::_lang('PanUbiPasillo') ?>">
                        <?php Html::html_dib_select(1, 'ins_insumo_pan_panol_cmb_pan_ubi_pasillo_id', Gral::getCmbFiltro(PanUbiPasillo::getPanUbiPasillosCmb(), '...'), $ins_insumo_pan_panol->getPanUbiPasilloId(), 'textbox ' . $error_input_css) ?>
                    </label>
                    <label title="<?php Lang::_lang('PanUbiEstante') ?>">
                        <?php Html::html_dib_select(1, 'ins_insumo_pan_panol_cmb_pan_ubi_estante_id', Gral::getCmbFiltro(PanUbiEstante::getPanUbiEstantesCmb(), '...'), $ins_insumo_pan_panol->getPanUbiEstanteId(), 'textbox ' . $error_input_css) ?>
                    </label>
                    <label title="<?php Lang::_lang('PanUbiAltura') ?>">
                        <?php Html::html_dib_select(1, 'ins_insumo_pan_panol_cmb_pan_ubi_altura_id', Gral::getCmbFiltro(PanUbiAltura::getPanUbiAlturasCmb(), '...'), $ins_insumo_pan_panol->getPanUbiAlturaId(), 'textbox ' . $error_input_css) ?>
                    </label>
                    <label title="<?php Lang::_lang('PanUbiCasillero') ?>">
                        <?php Html::html_dib_select(1, 'ins_insumo_pan_panol_cmb_pan_ubi_casillero_id', Gral::getCmbFiltro(PanUbiCasillero::getPanUbiCasillerosCmb(), '...'), $ins_insumo_pan_panol->getPanUbiCasilleroId(), 'textbox ' . $error_input_css) ?>
                    </label>
                    <label title="<?php Lang::_lang('PanUbiCelda') ?>">
                        <?php Html::html_dib_select(1, 'ins_insumo_pan_panol_cmb_pan_ubi_celda_id', Gral::getCmbFiltro(PanUbiCelda::getPanUbiCeldasCmb(), Lang::_lang('...', true)), $ins_insumo_pan_panol->getPanUbiCeldaId(), 'textbox ' . $error_input_css) ?>
                    </label>

                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('pan_ubi_piso_id')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td width='150' class='adm_carga_datos_titulos'>

                    <?php Lang::_lang('Clasificacion') ?>

                </td>
                <td width='450' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_cmb_ins_clasificacion_id">

                    <?php $error_input_css = ($error->getErrorXIndice('ins_clasificacion_id')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <?php Html::html_dib_select(1, 'ins_insumo_pan_panol_cmb_ins_clasificacion_id', Gral::getCmbFiltro(InsClasificacion::getInsClasificacionsCmb(), '...'), $ins_insumo_pan_panol->getInsClasificacionId(), 'textbox ' . $error_input_css) ?>

                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('ins_clasificacion_id')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td width='150' class='adm_carga_datos_titulos'>

                    <?php Lang::_lang('Punto de Minimo') ?>

                </td>
                <td width='450' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_txt_punto_minimo">

                    <?php $error_input_css = ($error->getErrorXIndice('punto_minimo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='ins_insumo_pan_panol_txt_punto_minimo' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='ins_insumo_pan_panol_txt_punto_minimo' value='<?php Gral::_echoTxt($ins_insumo_pan_panol->getPuntoMinimo(), true) ?>' size='5' />
                    <?php Gral::_echo($ins_unidad_medida->getDescripcion()) ?>

                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('punto_minimo')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td width='150' class='adm_carga_datos_titulos'>

                    <?php Lang::_lang('Punto de Pedido') ?>

                </td>
                <td width='450' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_txt_punto_pedido">

                    <?php $error_input_css = ($error->getErrorXIndice('punto_pedido')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='ins_insumo_pan_panol_txt_punto_pedido' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='ins_insumo_pan_panol_txt_punto_pedido' value='<?php Gral::_echoTxt($ins_insumo_pan_panol->getPuntoPedido(), true) ?>' size='5' />
                    <?php Gral::_echo($ins_unidad_medida->getDescripcion()) ?>

                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('punto_pedido')->getMensaje()) ?></div>

                </td>
            </tr>

            <tr>
                <td width='150' class='adm_carga_datos_titulos'>

                    <?php Lang::_lang('Punto de Maximo') ?>

                </td>
                <td width='450' class='adm_carga_datos_datos' id="dato_ins_insumo_pan_panol_txt_punto_maximo">

                    <?php $error_input_css = ($error->getErrorXIndice('punto_maximo')->getMensaje()) ? 'error-mensaje-input' : ''; ?>

                    <input name='ins_insumo_pan_panol_txt_punto_maximo' type='text' class='textbox <?php echo $error_input_css ?> spinner' id='ins_insumo_pan_panol_txt_punto_maximo' value='<?php Gral::_echoTxt($ins_insumo_pan_panol->getPuntoMaximo(), true) ?>' size='5' />
                    <?php Gral::_echo($ins_unidad_medida->getDescripcion()) ?>

                    <div class="error-mensaje-input-texto"><?php Gral::_echo($error->getErrorXIndice('punto_maximo')->getMensaje()) ?></div>

                </td>
            </tr>

        </table>
        <table border='0' align='center'>
            <tr>
                <td width='550' class='adm_carga_datos_botones'>
                    <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt(($ins_insumo_pan_panol) ? $ins_insumo_pan_panol->getId() : 0, true) ?>'/>
                    <input name='hdn_id_resumen' type='hidden' id='hdn_id_resumen' size='1' value='<?php Gral::_echoTxt(($ins_stock_resumen) ? $ins_stock_resumen->getId() : 0, true) ?>'/>
                    <input name='hdn_id_insumo' type='hidden' id='hdn_id_insumo' size='1' value='<?php Gral::_echoTxt($ins_insumo->getId(), true) ?>'/>
                    <input name='hdn_id_panol' type='hidden' id='hdn_id_panol' size='1' value='<?php Gral::_echoTxt($pan_panol->getId(), true) ?>'/>
                    <input name='hdn_accion' type='hidden' class='hdn_accion' size='1' value=''/>
                    <input name='hdn_elemento_id' type='hidden' class='hdn_elemento_id' size='1' value='cmb_ins_insumo_pan_panol_id'/>
                    <input name='hdn_clase_id' type='hidden' class='hdn_clase_id' size='1' value='ins_insumo_pan_panol'/>
                    <input name='hdn_prefijo' type='hidden' class='hdn_prefijo' size='1' value='<?php echo $prefijo ?>'/>

                    <input name='hdn_error' type='hidden' class='hdn_error' value='<?php echo $hdn_error ?>' />

                    <input name='btn_cerrar' type='button' class='btn_cerrar' value='<?php Lang::_lang('Cerrar') ?>' />


                    <input name='btn_guardar' type='button' class='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' /></td>
            </tr>
        </table>


    </form>
</body>
</html>
<script>
    setInit();
</script>
