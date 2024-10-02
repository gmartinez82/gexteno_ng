<?php
include_once '_autoload.php';

$chk_pde_facturas = Gral::getVars(Gral::VARS_POST, 'chk_pde_factura');

if (is_array($chk_pde_facturas)) {
    foreach ($chk_pde_facturas as $pde_factura_id) {
        $pde_factura = PdeFactura::getOxId($pde_factura_id);
        $pde_facturas[] = $pde_factura;
    }
}

?>
<?php if (count($pde_facturas) > 0) { ?>
    <form id="form_modal_registrar_descuento_financiero" name="form_modal_registrar_descuento_financiero" method="post" action="">

        <div class="label-error" id="error_general_error"><?php Gral::_echo($error_general_error) ?></div>  

        <table border='0' align='center' class='listado' id='listado_adm_pde_factura_gestion'>

            <tr>
                <td width='15' align='center' class='adm_tbl_encabezado'>
                    &nbsp;
                </td>
                <td width='80' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Codigo') ?>
                </td>

                <td width='250' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Proveedor') ?>
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
            foreach ($pde_facturas as $pde_factura) {
                $estado = ($pde_factura->getEstado()) ? 'habilitado' : 'deshabilitado';
                ?>

                <tr id="tr_pde_factura_gestion_uno_<?php Gral::_echo($pde_factura->getId()) ?>" class="uno" identificador="<?php Gral::_echo($pde_factura->getId()) ?>">

                    <?php
                    $pde_factura_pde_ocs = $pde_factura->getPdeFacturaPdeOcs();
                    $cantidad_items = count($pde_factura_pde_ocs);
                    ?>

                    <td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
                        <div class="checkbox">
                            <input checked type="checkbox" class="textbox chk_pde_factura" id="chk_pde_factura_<?php echo $pde_factura->getId() ?>" name="chk_pde_factura[<?php echo $pde_factura->getId() ?>]" value="<?php echo $pde_factura->getId() ?>" />
                        </div>
                    </td>

                    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="codigo">
                            <?php Gral::_echo($pde_factura->getCodigo()) ?>
                        </div>
                        <div class="fecha_emision">
                            <?php Gral::_echo(Gral::getFechaToWeb($pde_factura->getFechaEmision())) ?>
                        </div>

                    </td>	

                    <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="persona_descripcion">
                            <?php Gral::_echo($pde_factura->getPersonaDescripcion()) ?>
                        </div>
                        <div class="cuit">
                            <?php Gral::_echo('Cuit: ') ?>
                            <?php Gral::_echo($pde_factura->getCuit()) ?>
                        </div>
                    </td>

                    <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="pde_factura_tipo_estado">
                            <img src="imgs/pde_factura_tipo_estado/<?php Gral::_echo($pde_factura->getPdeFacturaTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                            <?php Gral::_echo($pde_factura->getPdeFacturaTipoEstado()->getDescripcion()) ?>
                        </div>
                    </td>

                    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="pde_tipo_factura">
                            <?php Gral::_echo($pde_factura->getPdeTipoFactura()->getCodigoMin()) ?>
                        </div>
                    </td>

                    <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="subtotal">
                            <?php Gral::_echoImp($pde_factura->getPdeFacturaSubtotal()) ?>
                        </div>

                        <?php if ($pde_factura->getPdeFacturaIva() > 0) { ?>
                            <div class="iva">
                                + IVA: <?php Gral::_echoImp($pde_factura->getPdeFacturaIva()) ?>
                            </div>
                        <?php } ?>

                        <?php if ($pde_factura->getPdeFacturaTributo() > 0) { ?>
                            <div class="tributos">
                                + Trib: <?php Gral::_echoImp($pde_factura->getPdeFacturaTributo()) ?>
                            </div>
                        <?php } ?>
                    </td>

                    <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="total">
                            <?php Gral::_echoImp($pde_factura->getPdeFacturaTotal()) ?>
                        </div>
                    </td>

                    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="items">
                            <?php Gral::_echo($cantidad_items) ?>
                        </div>
                    </td>

                    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="numero_factura" title="Numero de Factura AFIP">
                            <?php Gral::_echo($pde_factura->getNumeroComprobanteCompleto()) ?>
                        </div>
                        <div class="cae" title="CAE">
                            <?php Gral::_echo($pde_factura->getCae()) ?>
                        </div>
                        <div class="fecha_emision_cae" title="Fecha de Vencimiento de CAE">
                            <?php Gral::_echo(Gral::getFechaToWeb($pde_factura->getCaeVencimiento())) ?>
                        </div>
                    </td>
                </tr>
            <?php } ?>

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

                <!-- Rounded switch -->
                <!--<label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>-->

                <div class="par">
                    <div class="label"><?php Lang::_lang('Generar Recibo') ?></div>
                    <div class="dato checkbox">
                        <label class="switch">
                            <input type="checkbox" class="textbox chk_generar_recibo" id="chk_generar_recibo" name="chk_generar_recibo" value="1" />
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('Descuento Financiero') ?></div>
                    <div class="dato cantidad">
                        <input step = "0.1" min="0" max="100" type="text" id="txt_descuento_financiero" name="txt_descuento_financiero" value="" size="2" class="spinner txt_descuento_financiero" />%
                        <div class="label-error" id="txt_descuento_financiero_error"><?php Gral::_echo($txt_descuento_financiero_error) ?></div>  
                    </div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('Observacion') ?></div>
                    <div class="dato">
                        <textarea name='txa_observacion' rows='2' cols='50' id='txa_observacion' class='textbox'><?php Gral::_echoTxt($txa_observacion) ?></textarea>

                        <div class="label-error" id="txa_observacion_error"><?php Gral::_echo($txa_observacion_error) ?></div>  
                    </div>
                </div>
            </div>

            <div class="botonera">
                <input id="btn_registrar_descuento_financiero" name='btn_registrar_descuento_financiero' type='button' class='boton' value='<?php Lang::_lang('Registrar Descuento Financiero') ?>' />
            </div>
    </form>
<?php } else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
        <div class="paginador-oculto"><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php' ?></div>
    </div>

<?php } ?>