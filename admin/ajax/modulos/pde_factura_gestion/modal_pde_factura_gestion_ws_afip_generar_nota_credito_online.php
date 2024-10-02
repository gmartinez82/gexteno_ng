<?php
include "_autoload.php";

$pde_factura_id = Gral::getVars(Gral::VARS_GET, 'pde_factura_id', 0);

$pde_factura = PdeFactura::getOxId($pde_factura_id);

$pde_factura_pde_ocs = $pde_factura->getPdeFacturaPdeOcs(null, null, true);
$pde_factura_items = $pde_factura->getPdeFacturaItems(null, null, true);

$pde_tipo_origen_factura = $pde_factura->getPdeTipoOrigenFactura();

$prv_proveedor = $pde_factura->getPrvProveedor();
$gral_empresa = $pde_factura->getGralEmpresa();
$pde_centro_pedido = $pde_factura->getPdeCentroPedido();

$importe_total_neto = $pde_factura->getPdeFacturaSubtotal();
$importe_iva = $pde_factura->getPdeFacturaIva();
$importe_total = $importe_total_neto + $importe_iva;
$pde_factura_pde_tributos = $pde_factura->getPdeFacturaPdeTributos(null, null, true);

// controla que no se seleccionen OV de distintos presupuestos
$control_presupuesto = 1;

if ($pde_tipo_origen_factura->getCodigo() == PdeTipoOrigenFactura::ORIGEN_ORDEN_VENTA) {
    if (count($pde_factura_pde_ocs) > 0) {
        ?>
        <form id='form_generar_nota_credito' name='form_generar_nota_credito' method='POST' action='' >

            <table border='0' align='center' class='listado' id='listado_pde_factura_generar_nota_credito' multiseleccion = "<?php echo $control_presupuesto ?>">
                <tr>
                    <td align='center' class='adm_tbl_encabezado'>
                        <?php if ($control_presupuesto) { ?>
                            <input type="checkbox" name="chk_pde_factura_pde_oc_select_all" id="chk_pde_factura_pde_oc_select_all" >
                        <?php } ?>
                    </td>

                    <td width='70' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Presupuesto') ?>
                    </td>

                    <td width='70' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Codigo') ?>
                    </td>

                    <td width='' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Insumo') ?>
                    </td>

                    <td width='100' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Estado') ?>
                    </td>

                    <td width='100' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Estado Remision') ?>
                    </td>

                    <td width='100' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Tipo de Lista') ?>
                        </a>
                    </td>

                    <td width='100' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Estado Facturacion') ?>
                    </td>

                    <td width='50' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Cant Fact') ?>
                    </td>

                    <td width='90' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Imp Unitario') ?>
                        </a>
                    </td>

                    <td width='90' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Imp Total') ?>
                    </td>

                    <td width='70' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('IVA') ?>
                    </td>

                    <!--td width='70' align='center' class='adm_tbl_encabezado'>
                    <?php //Lang::_lang('Factura') ?>
                    </td-->
                </tr>

                <?php
                $inicio = true;
                $pde_presupuesto_id_agrupacion = 0;
                $par = 'par';

                foreach ($pde_factura_pde_ocs as $pde_factura_pde_oc) {
                    $pde_oc = $pde_factura_pde_oc->getPdeOc();
                    $pde_presupuesto = $pde_oc->getPdePresupuesto();

                    if ($inicio) {
                        $inicio = false;
                        $pde_presupuesto_id_agrupacion = $pde_presupuesto->getId();
                    }

                    $hay_cambio = ($pde_presupuesto_id_agrupacion != $pde_presupuesto->getId()) ? true : false;
                    if ($hay_cambio) {
                        $par = ($par != 'par') ? 'par' : 'impar';
                    }
                    $pde_presupuesto_id_agrupacion = $pde_presupuesto->getId();

                    if ($pde_factura_pde_oc->getCantidadDisponibleNotaCredito() > 0) {
                        ?>

                        <tr id="tr_pde_factura_pde_oc_uno_<?php Gral::_echo($pde_factura_pde_oc->getId()) ?>" class="uno <?php echo $par ?>" pde_factura_pde_oc_id="<?php Gral::_echo($pde_factura_pde_oc->getId()) ?>">
                            <?php include "bloque_pde_nota_credito_listado_uno.php" ?>
                        </tr>

                    <?php } ?>
                <?php } ?>
            </table>

            <div class="botonera">
                <button class="boton" id='btn_generar_nota_credito' name='btn_generar_nota_credito' type='button' pde_factura_id="<?php echo $pde_factura_id ?>"><?php Lang::_lang('Generar Nota de Credito') ?></button>
            </div>

        </form>
    <?php } else { ?>
        <div class="mensaje-sin-resultado">
            <div class="mensaje"><?php Lang::_lang('No se encontraron Ordenes de Venta') ?></div>
        </div>
    <?php } ?>
<?php } ?>

<?php
if ($pde_tipo_origen_factura->getCodigo() == PdeTipoOrigenFactura::ORIGEN_ITEM) {
    if (count($pde_factura_items) > 0) {
        ?>
        <div class="datos">
            <form id='form_generar_nota_credito_item' name='form_generar_nota_credito_item' method='POST' action='' >
                <div class="col col1">    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Proveedor') ?></div>
                        <div class="dato"><?php Gral::_echo($prv_proveedor->getRazonSocial()) ?></div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('CUIT') ?></div>
                        <div class="dato"><?php Gral::_echo($prv_proveedor->getCuit()) ?></div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Cond IVA') ?></div>
                        <div class="dato"><?php Gral::_echo($prv_proveedor->getGralCondicionIva()->getDescripcion()) ?></div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Tipo') ?></div>
                        <div class="dato"><?php Gral::_echo(PdeFactura::getDeterminacionTipoFactura($prv_proveedor_id)->getDescripcion()) ?></div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Localidad') ?></div>
                        <div class="dato"><?php Gral::_echo($prv_proveedor->getGeoLocalidad()->getDescripcionFull()) ?></div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Gral::_echo("Factura a") ?>: </div>
                        <div class="dato"><?php Gral::_echo($gral_empresa->getDescripcion()) ?></div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Gral::_echo("Ctr Ped") ?>: </div>
                        <div class="dato"><?php Gral::_echo($pde_centro_pedido->getDescripcion()) ?></div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Observaciones') ?>: </div>
                        <div class="dato">
                            <textarea name='txa_observacion' rows='3' cols='40' id='txa_observacion' class='textbox'></textarea>
                            <div class="label-error" id="txa_observacion_error"></div>
                        </div>
                    </div>
                </div>

                <div class="col col2">
                    <table border='0' align='center' class='detalle_pde_comprobante_total' id='detalle_pde_factura_total'>
                        <tr class="subtotal">
                            <td width='70' align='left'>
                                <?php Lang::_lang('Subtotal') ?>:
                            </td>
                            <td width='150' align='left'>&nbsp;</td>
                            <td width='140' align='right'>
                                <?php Gral::_echoImp($importe_total_neto) ?>                
                            </td>
                        </tr>

                        <tr class="iva">
                            <td>
                                <?php Lang::_lang('IVA') ?>:
                            </td>
                            <td>&nbsp;</td>
                            <td align='right'><?php Gral::_echoImp($importe_iva) ?>  </td>
                        </tr>

                        <?php if (count($pde_factura_pde_tributos) > 0) { ?>
                            <tr class="otros-tributos">
                                <td>
                                    <?php Lang::_lang('Tributos') ?>:
                                </td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <?php foreach ($pde_factura_pde_tributos as $pde_factura_pde_tributo) { ?>
                                <tr class="otros-tributos">
                                    <td>&nbsp;</td>
                                    <td>
                                        <?php Lang::_lang($pde_factura_pde_tributo->getPdeTributo()->getDescripcion()) ?>
                                    </td>
                                    <td align='right'>
                                        <?php Gral::_echoImp($pde_factura_pde_tributo->getImporteTributo()) ?>              
                                    </td>
                                </tr>
                                <?php $importe_total += $pde_factura_pde_tributo->getImporteTributo(); ?>
                            <?php } ?>
                        <?php } ?>

                        <tr class="total">
                            <td>
                                <?php Lang::_lang('Total:') ?>
                            </td>
                            <td>&nbsp;</td>
                            <td align='right'>
                                <?php Gral::_echoImp($importe_total) ?>                
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="botonera">
                    <button class="boton" id='btn_generar_nota_credito_item' name='btn_generar_nota_credito_item' type='button' pde_factura_id="<?php echo $pde_factura_id ?>"><?php Lang::_lang('Generar Nota de Credito') ?></button>
                </div>

            </form>
        </div>
    <?php } else { ?>
        <div class="mensaje-sin-resultado">
            <div class="mensaje"><?php Lang::_lang('No se encontraron Ordenes de Venta') ?></div>
        </div>
    <?php } ?>
<?php } ?>

<script>
    setInit();
    setInitPdeFacturaGestion();
</script>