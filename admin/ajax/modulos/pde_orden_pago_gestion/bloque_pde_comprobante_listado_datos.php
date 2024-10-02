<?php
include_once "_autoload.php";

if (count($pde_comprobantes) > 0 || true) {
    ?>
    <form id='form_generar_orden_pago' name='form_generar_orden_pago' method='POST' action=''>

        <div class="row proveedor-info">
            <div class="par">
                <div class="label">Descripcion</div>
                <div class="dato"><?php Gral::_echo($prv_proveedor->getDescripcion()) ?></div>
            </div>
            <div class="par">
                <div class="label">Razon Social</div>
                <div class="dato"><?php Gral::_echo($prv_proveedor->getRazonSocial()) ?></div>
            </div>
            <div class="par">
                <div class="label">CUIT</div>
                <div class="dato"><?php Gral::_echo($prv_proveedor->getCuit()) ?></div>
            </div>
            <div class="par">
                <div class="label">Telefono</div>
                <div class="dato"><?php Gral::_echo($prv_proveedor->getTelefono()) ?></div>
            </div>
            <div class="par">
                <div class="label">Localidad</div>
                <div class="dato"><?php Gral::_echo($prv_proveedor->getGeoLocalidad()->getDescripcionFull()) ?></div>
            </div>
            <div class="par">
                <div class="label">Conv Multi IIBB</div>
                <div class="dato"><?php Gral::_echo(GralSiNo::getOxId($prv_proveedor->getConvenioMultilateral())->getDescripcion()) ?></div>
            </div>
        </div>        

        <div class="row r1">
            <table border='0' align='center' class='listado' id='listado_pde_orden_pago_generar_orden_pago' multiseleccion = "<?php echo $control_presupuesto ?>">
                <tr>
                    <td align='center' class='adm_tbl_encabezado'>
                        <?php if ($control_presupuesto) { ?>
                            <input type="checkbox" name="chk_pde_comprobante_select_all" id="chk_pde_comprobante_select_all" >
                        <?php } ?>
                    </td>

                    <td width='50' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('NI') ?>
                    </td>

                    <td width='140' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Codigo') ?>
                    </td>

                    <td width='120' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Numero') ?>
                    </td>

                    <td width='140' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Base Imponible') ?>
                    </td>

                    <td width='140' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Imp Total') ?>
                    </td>

                    <td width='140' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Imp en OP') ?>
                    </td>

                    <td width='140' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Imp Saldado') ?>
                    </td>

                    <td width='140' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Imp a Pagar') ?>
                    </td>

                    <td width='140' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Base Imp en OP') ?>
                    </td>

                </tr>

                <?php
                $inicio = true;

                foreach ($pde_comprobantes as $pde_comprobante) {

                    if ($pde_comprobante->getImporteDisponibleParaOrdenPago() > 0) {
                        ?>
                        <tr id="tr_pde_comprobante_uno_<?php Gral::_echo($pde_comprobante->getId()) ?>" class="uno <?php echo $par ?>" pde_comprobante_id="<?php Gral::_echo($pde_comprobante->getId()) ?>">
                            <?php include "bloque_pde_comprobante_listado_uno.php" ?>
                        </tr>
                    <?php } ?>

                <?php } ?>

                <tr>
                    <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
                    <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
                    <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
                    <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
                    <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
                    <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
                    <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
                    <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
                    <td align='center' class='adm_tbl_encabezado_gris'>
                        <div id="div_p1_comprobante_total_saldo"></div>
                        <input type="text" 
                               id="txt_p1_comprobante_total_saldo" 
                               name="txt_p1_comprobante_total_saldo" 
                               value="" 
                               size="10" 
                               class="textbox" 
                               style="display: none;"
                               />
                    </td>
                    <td align='center' class='adm_tbl_encabezado_gris'>
                        <div id="div_p1_comprobante_total_importe_imponible"></div>
                        <input type="text" 
                               id="txt_p1_comprobante_total_importe_imponible" 
                               name="txt_p1_comprobante_total_importe_imponible" 
                               value="" 
                               size="10" 
                               class="textbox" 
                               style="display: none;"
                               />
                    </td>
                </tr>

            </table>
        </div>

        <br />

        <div class="row r2">
            <table class="listado_pde_orden_pago_items" id="listado_pde_orden_pago_items">
                <thead>
                    <tr>
                        <th width='300' align='center'>Forma de Pago</th>
                        <th width='350' align='center'>Descripcion</th>
                        <th width='200' align='center'>Importe</th>
                        <th><label class="boton agregar_item_orden_pago" title="<?php Lang::_lang('Agregar Item a la Oeden de Pago') ?>"><img src="imgs/btn_add.gif" width="25"></label></th>
                    </tr>
                </thead>
                <tbody></tbody>
                <tfoot>
                    <tr>
                        <th align='left' class='adm_tbl_encabezado_gris' colspan="2">Total a Pagar</th>
                        <th align='right' class='adm_tbl_encabezado_gris'>
                            <div id="div_p1_forma_pago_total_pago"></div>
                        </th>
                    </tr>

                    <?php foreach (PdeTributo::getPdeTributosRetencion() as $pde_tributo): ?>
                        <tr class="otros-tributos">
                            <td align="left">
                                <?php Gral::_echo($pde_tributo->getDescripcion()); ?>
                                <?php if ($pde_tributo->getAlicuotaPorcentual() != 0) { ?>
                                    (<?php Gral::_echo($pde_tributo->getAlicuotaPorcentual()); ?> %)
                                <?php } ?>

                                <?php //Gral::prr($pde_tributo->getArrRetencionNumeroProximoParaCodigo(2021)); ?>
                            </td>
                            <td align='right'>
                                <div class="txt-tributo-fecha">
                                    <input type="text" size="10" id="txt_tributo_fecha_<?php echo $pde_tributo->getId() ?>" name="txt_tributo_fecha[<?php echo $pde_tributo->getId() ?>]" class="textbox date txt-tributo-fecha" value="" placeholder="Fecha" />
                                    <input type="text" size="20" id="txt_tributo_numero_<?php echo $pde_tributo->getId() ?>" name="txt_tributo_numero[<?php echo $pde_tributo->getId() ?>]" class="textbox txt-tributo-numero" value="" placeholder="Nro Comprobante" />
                                    <div id="txt_tributo_fecha_<?php echo $pde_tributo->getId() ?>_error" class="label-error"></div>
                                    <div id="txt_tributo_numero_<?php echo $pde_tributo->getId() ?>_error" class="label-error"></div>
                                </div>
                            </td>
                            <td align='right'>
                                <div class="txt_tributo-importe">
                                    <input type="text" size="15" id="txt_tributo_importe_<?php echo $pde_tributo->getId() ?>" name="txt_tributo_importe[<?php echo $pde_tributo->getId() ?>]" class="textbox moneda txt-tributo-importe" value="" />
                                </div>
                                <div id="txt_tributo_importe_<?php echo $pde_tributo->getId() ?>_error" class="label-error"></div>
                                <div id="txt_tributo_importe_<?php echo $pde_tributo->getId() ?>_mensaje" class="label-mensaje"></div>
                            </td>

                        </tr>
                    <?php endforeach; ?>

                    <tr>
                        <th align='left' class='adm_tbl_encabezado_gris' colspan="2">Total Retenciones</th>
                        <th align='right' class='adm_tbl_encabezado_gris'>
                            <div id="div_p1_forma_pago_total_retenciones"></div>
                        </th>
                    </tr>
                    <tr>
                        <th align='left' class='adm_tbl_encabezado_gris' colspan="2">Total Comprobantes</th>
                        <th align='right' class='adm_tbl_encabezado_gris'>
                            <div id="div_p1_forma_pago_total_comprobantes"></div>
                        </th>
                    </tr>
                    <tr>
                        <th align='left' class='adm_tbl_encabezado_gris' colspan="2">Saldo</th>
                        <th align='right' class='adm_tbl_encabezado_gris'>
                            <div id="div_p1_forma_pago_total_saldo"></div>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="label-error" id="error_general"></div>

        <div class="botonera">
            <button class="boton" id='btn_set_ws_fe_afip' name='btn_set_ws_fe_afip' type='button' class='btn_set_ws_fe_afip'><?php Lang::_lang('Siguiente') ?></button>
        </div>

    </form>
<?php } else { ?>
    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron comprobantes') ?></div>
    </div>
<?php } ?>

<script>
    setInit();
    setInitPdeOrdenPagoGestion();
</script>
