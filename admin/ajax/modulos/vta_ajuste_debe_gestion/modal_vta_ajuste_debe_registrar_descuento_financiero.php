<?php
include_once '_autoload.php';

$var_sesion_random = '_' . rand(1, 999999);

foreach ($_SESSION as $key => $value) {
    // se limpia la variable de info de cheque
    //if (strpos($key, 'vta_recibo_descuento_financiero_cheque_info') === 0)
    //    unset($_SESSION[$key]);

    // se limpia la variable de info de cheque
    //if (strpos($key, 'vta_recibo_descuento_financiero_retencion_info') === 0)
    //    unset($_SESSION[$key]);
}


$chk_vta_ajuste_debes = Gral::getVars(Gral::VARS_POST, 'chk_vta_ajuste_debe');

if (is_array($chk_vta_ajuste_debes)) {
    foreach ($chk_vta_ajuste_debes as $vta_ajuste_debe_id) {
        $vta_ajuste_debe = VtaAjusteDebe::getOxId($vta_ajuste_debe_id);
        $vta_ajuste_debes[] = $vta_ajuste_debe;
        $cli_cliente_id = $vta_ajuste_debe->getCliClienteId();
    }
}
?>
<?php
if (count($vta_ajuste_debes) > 0) {
    ?>
    <form id='form_modal_registrar_descuento_financiero' name='form_modal_registrar_descuento_financiero' method='post' action='' cli_cliente_id='<?php echo $cli_cliente_id ?>' var_sesion_random='<?php echo $var_sesion_random; ?>'>

        <table border='0' align='center' class='listado' id='listado_adm_vta_ajuste_debe_gestion'>

            <tr>
                <td width='15' align='center' class='adm_tbl_encabezado'>
                    &nbsp;
                </td>
                <td width='80' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Codigo') ?>
                </td>

                <td width='250' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Cliente') ?>
                </td>

                <td width='120' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Estado') ?>
                </td>

                <td width='70' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Tipo') ?>
                </td>

                <td width='140' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Subtotal') ?>
                </td>

                <td width='120' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Total') ?>
                </td>

                <td width='60' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Items') ?>
                </td>

                <td width='130' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Info AFIP') ?>
                </td>
            </tr>

            <?php
            foreach ($vta_ajuste_debes as $vta_ajuste_debe) {
                $estado = ($vta_ajuste_debe->getEstado()) ? 'habilitado' : 'deshabilitado';
                ?>

                <tr id="tr_vta_ajuste_debe_gestion_uno_<?php Gral::_echo($vta_ajuste_debe->getId()) ?>" class="uno" identificador="<?php Gral::_echo($vta_ajuste_debe->getId()) ?>">

                    <?php
                    $vta_ajuste_debe_vta_orden_ventas = $vta_ajuste_debe->getVtaAjusteDebeVtaOrdenVentas();
                    $cantidad_items = count($vta_ajuste_debe_vta_orden_ventas);
                    ?>

                    <td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
                        <div class="checkbox">
                            <input checked type="checkbox" class="textbox chk_vta_ajuste_debe" id="chk_vta_ajuste_debe_<?php echo $vta_ajuste_debe->getId() ?>" name="chk_vta_ajuste_debe[<?php echo $vta_ajuste_debe->getId() ?>]" value="<?php echo $vta_ajuste_debe->getId() ?>" />
                        </div>
                    </td>

                    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="codigo">
                            <?php Gral::_echo($vta_ajuste_debe->getCodigo()) ?>
                        </div>
                        <div class="fecha_emision">
                            <?php Gral::_echo(Gral::getFechaToWeb($vta_ajuste_debe->getFechaEmision())) ?>
                        </div>

                    </td>	

                    <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="persona_descripcion">
                            <?php Gral::_echo($vta_ajuste_debe->getPersonaDescripcion()) ?>
                        </div>
                        <div class="cuit">
                            <?php Gral::_echo('Cuit: ') ?>
                            <?php Gral::_echo($vta_ajuste_debe->getCuit()) ?>
                        </div>
                    </td>

                    <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="vta_ajuste_debe_tipo_estado">
                            <img src="imgs/vta_ajuste_debe_tipo_estado/<?php Gral::_echo($vta_ajuste_debe->getVtaAjusteDebeTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                            <?php Gral::_echo($vta_ajuste_debe->getVtaAjusteDebeTipoEstado()->getDescripcion()) ?>
                        </div>
                    </td>

                    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="vta_tipo_ajuste_debe">
                            <?php Gral::_echo($vta_ajuste_debe->getVtaTipoAjusteDebe()->getCodigoMin()) ?>
                        </div>
                    </td>

                    <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="subtotal">
                            <?php Gral::_echoImp($vta_ajuste_debe->getVtaAjusteDebeSubtotal()) ?>
                        </div>

                        <?php if ($vta_ajuste_debe->getVtaAjusteDebeIva() > 0) { ?>
                            <div class="iva">
                                + IVA: <?php Gral::_echoImp($vta_ajuste_debe->getVtaAjusteDebeIva()) ?>
                            </div>
                        <?php } ?>

                        <?php if ($vta_ajuste_debe->getVtaAjusteDebeTributo() > 0) { ?>
                            <div class="tributos">
                                + Trib: <?php Gral::_echoImp($vta_ajuste_debe->getVtaAjusteDebeTributo()) ?>
                            </div>
                        <?php } ?>
                    </td>

                    <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="total">
                            <?php Gral::_echoImp($vta_ajuste_debe->getVtaAjusteDebeTotal()) ?>
                        </div>
                    </td>

                    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="items">
                            <?php Gral::_echo($cantidad_items) ?>
                        </div>
                    </td>

                    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="numero_ajuste_debe" title="Numero de AjusteDebe AFIP">
                            <?php Gral::_echo($vta_ajuste_debe->getNumeroComprobanteCompleto()) ?>
                        </div>
                        <div class="cae" title="CAE">
                            <?php Gral::_echo($vta_ajuste_debe->getCae()) ?>
                        </div>
                        <div class="fecha_emision_cae" title="Fecha de Vencimiento de CAE">
                            <?php Gral::_echo(Gral::getFechaToWeb($vta_ajuste_debe->getCaeVencimiento())) ?>
                        </div>
                    </td>
                </tr>
                <?php
            }
            ?>

            <tr>
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            </tr>
        </table>

        <div class='datos registrar-descuento-financiero' >

            <div class="col c1">

                <div class="par">
                    <div class="label"><?php Lang::_lang('Descuento Financiero') ?></div>
                    <div class="dato cantidad">
                        <input step = "0.1" min="0" max="100" type="text" id="txt_descuento_financiero" name="txt_descuento_financiero" value="" size="4" class="spinner textbox txt_descuento_financiero" /> %
                        <div class="label-error" id="txt_descuento_financiero_error"><?php Gral::_echo($txt_descuento_financiero_error) ?></div>  
                    </div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
                    <div class="dato">
                        <div class="comentario">Comentarios para el cliente</div>  
                        <textarea name='txa_nota_publica' rows='2' cols='50' id='txa_nota_publica' class='textbox'><?php Gral::_echoTxt($txa_nota_publica) ?></textarea>

                        <div class="label-error" id="txa_nota_publica_error"><?php Gral::_echo($txa_nota_publica_error) ?></div>  
                    </div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('Observacion') ?></div>
                    <div class="dato">
                        <div class="comentario">Comentarios para internos</div>  
                        <textarea name='txa_observacion' rows='2' cols='50' id='txa_observacion' class='textbox'><?php Gral::_echoTxt($txa_observacion) ?></textarea>

                        <div class="label-error" id="txa_observacion_error"><?php Gral::_echo($txa_observacion_error) ?></div>  
                    </div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('Generar Recibo') ?></div>
                    <div class="dato checkbox">
                        <?php Html::html_dib_select(1, 'cmb_generar_recibo', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), $cmb_generar_recibo, 'textbox') ?>

                        <div class="label-error" id="cmb_generar_recibo_error"><?php Gral::_echo($cmb_generar_recibo_error) ?></div>  
                    </div>
                </div>

                <div class="div-bloque-items-datos">
                    <?php include "bloque_vta_ajuste_debe_descuento_financiero_items_datos_x_cli_cliente.php"; ?>
                </div>
            </div>

            <div class="label-error" id="error_general_error"><?php Gral::_echo($error_general_error) ?></div>  

            <div class="botonera">
                <input id="btn_registrar_descuento_financiero" name='btn_registrar_descuento_financiero' type='button' class='boton' value='<?php Lang::_lang('Registrar Descuento Financiero') ?>' />
            </div>
    </form>
    <?php
} else {
    ?>
    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
        <div class="paginador-oculto"><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php' ?></div>
    </div>
    <?php
}
?>