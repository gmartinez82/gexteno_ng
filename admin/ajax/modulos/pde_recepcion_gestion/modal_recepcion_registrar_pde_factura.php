<?php
include_once '_autoload.php';

$chk_pde_recepcion = Gral::getVars(Gral::VARS_POST, 'chk_pde_recepcion');
//Gral::prr($chk_pde_recepcion);

$importe_unitario_total = 0;
$importe_iva_total = 0;
$importe_subtotal_total = 0;
$importe_total_total = 0;

$prv_proveedor = new PrvProveedor();
if (is_array($chk_pde_recepcion)) {
    foreach ($chk_pde_recepcion as $pde_recepcion_id) {
        $pde_recepcion = PdeRecepcion::getOxId($pde_recepcion_id);
        $pde_recepcions[] = $pde_recepcion;

        $prv_proveedor = $pde_recepcion->getPrvProveedor();

        $importe_iva = $pde_recepcion->getImporteUnidadIva();

        $importe_unitario_total+= $pde_recepcion->getImporteUnidad();
        $importe_iva_total+= $importe_iva;
        $importe_subtotal_total+= $pde_recepcion->getImporteTotal();

        $gral_tipo_iva_compra = $pde_recepcion->getInsInsumo()->getGralTipoIvaCompraObj();
        $arr_total_ivas[$gral_tipo_iva_compra->getId()]['IMPORTE'] += $importe_iva;
        $arr_total_ivas[$gral_tipo_iva_compra->getId()]['DESCRIPCION'] = $gral_tipo_iva_compra->getDescripcion();

        $importe_total_total = $importe_subtotal_total + $importe_iva_total;
    }
}
?>
<form id='form_recepcion' name='form_recepcion' method='post' action='<?php echo Gral::getPath('path_http') . "admin/ajax/modulos/pde_recepcion_gestion/modal_recepcion_agregar.php" ?>' >
    <div class='datos registrar-pde-factura' >

        <div class="col c1">
            <div class="par">
                <div class="label"><?php Lang::_lang('Proveedor') ?></div>
                <div class="dato">
                    <?php Gral::_echo($prv_proveedor->getDescripcion()) ?>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('CUIT') ?></div>
                <div class="dato">
                    <?php Gral::_echo($prv_proveedor->getCuit()) ?>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Empresa') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), $cmb_gral_empresa_id, 'textbox') ?>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Forma de Pago') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_gral_fp_forma_pago_id', Gral::getCmbFiltro(GralFpFormaPago::getGralFpFormaPagosCmb(), '...'), $cmb_gral_fp_forma_pago_id, 'textbox') ?>
                </div>
            </div>
        </div>

        <div class="col c2">
            <div class="par">
                <div class="label"><?php Lang::_lang('Fecha Factura') ?></div>
                <div class="dato">
                    <input name='txt_fecha' type='text' class='textbox date' id='txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($txt_fecha)) ?>' size='10' />
                    <input type='button' id='cal_txt_fecha' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'txt_fecha', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha'
                        });
                    </script>
                    <div class="label-error" id="txt_fecha_error"><?php Gral::_echo($txt_fecha_error) ?></div>  
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Nro Factura') ?></div>
                <div class="dato">
                    <input name='txt_nro_punto_venta' type='text' class='textbox' id='txt_nro_punto_venta' value='<?php Gral::_echo($txt_nro_punto_venta) ?>' size='4' />
                    <input name='txt_nro_factura' type='text' class='textbox' id='txt_nro_factura' value='<?php Gral::_echo($txt_nro_factura) ?>' size='10' />

                    <div class="label-error" id="txt_nro_punto_venta_error"><?php Gral::_echo($txt_nro_punto_venta_error) ?></div>  
                    <div class="label-error" id="txt_nro_factura_error"><?php Gral::_echo($txt_nro_factura_error) ?></div>  
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


        <table id="tabla_pde_recepcions_en_factura" name="tabla_pde_recepcions_en_factura">
            <tr>
                <th width="150" class="adm_tbl_encabezado_gris">
                    <?php Lang::_lang('Cod Interno') ?>
                </th>
                <th width="450" class="adm_tbl_encabezado_gris">
                    <?php Lang::_lang('Insumo') ?>
                </th>
                <th width="100" class="adm_tbl_encabezado_gris">
                    <?php Lang::_lang('Cant') ?>
                </th>
                <th width="130" class="adm_tbl_encabezado_gris">
                    <?php Lang::_lang('Imp Unitario') ?>
                </th>
                <th width="100" class="adm_tbl_encabezado_gris">
                    <?php Lang::_lang('IVA') ?>
                </th>
                <th width="130" class="adm_tbl_encabezado_gris">
                    <?php Lang::_lang('Imp Total') ?>
                </th>
            </tr>
            <?php
            foreach ($pde_recepcions as $pde_recepcion) {
                $ins_insumo = $pde_recepcion->getInsInsumo();
                ?>
                <tr>
                    <td align="center" class="adm_tbl_lineas">
                        <div class="codigo-interno">
                            <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?>
                        </div>
                    </td>
                    <td align="left" class="adm_tbl_lineas">
                        <div class="descripcion">
                            <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
                        </div>
                    </td>
                    <td align="center" class="adm_tbl_lineas">
                        <div class="cantidad">
                            <?php Gral::_echo($pde_recepcion->getCantidad()) ?>
                        </div>
                    </td>
                    <td align="right" class="adm_tbl_lineas">
                        <div class="importe-unitario">
                            <?php Gral::_echoImp($pde_recepcion->getImporteUnidad()) ?>
                        </div>
                    </td>
                    <td align="right" class="adm_tbl_lineas">
                        <div class="iva-importe">
                            <?php Gral::_echoImp($pde_recepcion->getImporteUnidadIva()) ?>
                        </div>
                        <div class="iva-valor">
                            <?php Gral::_echo($pde_recepcion->getInsInsumo()->getGralTipoIvaCompraObj()->getDescripcion()) ?>
                        </div>
                    </td>
                    <td align="right" class="adm_tbl_lineas">
                        <div class="importe-total">
                            <?php Gral::_echoImp($pde_recepcion->getImporteTotal()) ?>
                        </div>
                    </td>
                </tr>
            <?php } ?>
            <tr>
                <td align="center" class="adm_tbl_lineasx" colspan="3"></td>
                <td align="right" class="adm_tbl_encabezado_gris">
                    <div class="total-importe-unitario">
                        <?php Gral::_echoImp($importe_unitario_total) ?>
                    </div>
                </td>                
                <td align="right" class="adm_tbl_encabezado_gris">
                    <div class="total-importe-iva">
                        <?php Gral::_echoImp($importe_iva_total) ?>
                    </div>
                </td>                
                <td align="right" class="adm_tbl_encabezado_gris">
                    <div class="total-importe-total">
                        <?php Gral::_echoImp($importe_subtotal_total) ?>
                    </div>
                </td>                
            </tr>
        </table>

        <br />
        <br />

        <table id="tabla_pde_recepcions_en_factura_total" name="tabla_pde_recepcions_en_factura_total">
            <tr>
                <td align="center" class="adm_tbl_lineasx" width="700"></td>
                <td align="left" class="adm_tbl_lineas" width="250">Subtotal</td>
                <td align="right" class="adm_tbl_lineas" width="100"><?php Gral::_echoImp($importe_subtotal_total) ?></td>
            </tr>
            <?php foreach ($arr_total_ivas as $gral_tipo_iva_id => $arr_total_iva) { ?>
            <tr>
                <td align="center" class="adm_tbl_lineasx"></td>
                <td align="left" class="adm_tbl_lineas"><?php Lang::_lang($arr_total_iva['DESCRIPCION']) ?></td>
                <td align="right" class="adm_tbl_lineas"><?php Gral::_echoImp($arr_total_iva['IMPORTE']) ?></td>
            </tr>
            <?php } ?>
            <tr>
                <td align="center" class="adm_tbl_lineasx"></td>
                <td align="left" class="adm_tbl_lineas">Retenciones IIBB</td>
                <td align="right" class="adm_tbl_lineas">-</td>
            </tr>
            <tr>
                <td align="center" class="adm_tbl_lineasx"></td>
                <td align="left" class="adm_tbl_lineas">Total</td>
                <td align="right" class="adm_tbl_encabezado_gris"><?php Gral::_echoImp($importe_total_total) ?></td>
            </tr>
        </table>


        <div class="botonera">
            <input id="btn_registrar_pde_factura" name='btn_registrar_pde_factura' type='button' class='boton' value='<?php Lang::_lang('Registrar Factura de Compra') ?>' />
        </div>

    </div>
</form>
