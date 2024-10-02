<?php
foreach ($vta_ajuste_debe_vta_nota_creditos as $vta_ajuste_debe_vta_nota_credito) {
    $cont++;
    $strong = ($cont == 1) ? 'strong' : '';

    $vta_nota_credito = $vta_ajuste_debe_vta_nota_credito->getVtaNotaCredito();

    $vta_tipo_nota_credito = $vta_nota_credito->getVtaTipoNotaCredito();
    $cli_cliente = $vta_nota_credito->getCliCliente();

    $gral_condicion_iva = $vta_nota_credito->getGralCondicionIva();
    $gral_tipo_personeria = $vta_nota_credito->getGralTipoPersoneria();
    $gral_empresa_facturadora = $vta_nota_credito->getGralEmpresa();

    $vta_nota_credito_vta_ajuste_debe_vta_orden_ventas = $vta_nota_credito->getVtaNotaCreditoVtaAjusteDebeVtaOrdenVentas();
    $vta_nota_credito_items = $vta_nota_credito->getVtaNotaCreditoItems();
    ?>
    <?php if (count($vta_nota_credito_vta_ajuste_debe_vta_orden_ventas) > 0) { ?>
        <table border="0" class="tabla-modal">
            <tr>
                <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Cod NC"); ?></td>
                <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Num NC"); ?></td>
                <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Cae"); ?></td>
                <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Tipo NC"); ?></td>
                <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang("Insumo"); ?></td>
                <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang("Condicion IVA"); ?></td>
                <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Tipo Personeria"); ?></td>
                <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Empresa Fact"); ?></td>
                <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Cantidad"); ?></td>
                <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Imp Unitario"); ?></td>
                <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Imp Total"); ?></td>
            </tr>
            <?php
            $cont = 0;
            foreach ($vta_nota_credito_vta_ajuste_debe_vta_orden_ventas as $vta_nota_credito_vta_ajuste_debe_vta_orden_venta) {

                $ins_insumo = $vta_nota_credito_vta_ajuste_debe_vta_orden_venta->getInsInsumo();
                $ins_unidad_medida = $vta_nota_credito_vta_ajuste_debe_vta_orden_venta->getInsUnidadMedida();
                ?>
                <tr>
                    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="codigo-vta-nota-credito">
                            <?php Gral::_echo($vta_nota_credito->getCodigo()) ?>
                        </div>
                        <div class="fecha-emision-vta-nota-credito">
                            <?php Gral::_echo(Gral::getFechaToWeb($vta_nota_credito->getFechaEmision())) ?>
                        </div>
                    </td>

                    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="numero-nota-credito-vta-nota-credito">	
                            <?php Gral::_echo($vta_nota_credito->getNumeroNotaCredito()) ?>
                        </div>
                    </td>

                    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="cae-vta-nota-credito">	
                            <?php Gral::_echo($vta_nota_credito->getCae()) ?>
                        </div>
                    </td>

                    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="descripcion-vta-tipo-nota-credito">	
                            <?php Gral::_echo($vta_tipo_nota_credito->getDescripcion()) ?>
                        </div>
                    </td>

                    <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="descripcion">	
                            <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
                        </div>
                    </td>

                    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="condicion-iva">
                            <?php Gral::_echo($gral_condicion_iva->getDescripcion()) ?>
                        </div>
                    </td>	

                    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="tipo-personeria">
                            <?php Gral::_echo($gral_tipo_personeria->getDescripcion()) ?>
                        </div>
                    </td>	

                    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="empresa-ajuste-debedora">
                            <?php Gral::_echo($gral_empresa_facturadora->getDescripcion()) ?>
                        </div>
                    </td>	

                    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="cantidad">
                            <?php $cantidad = $vta_nota_credito_vta_ajuste_debe_vta_orden_venta->getCantidad(); ?>
                            <?php Gral::_echo($cantidad) ?>
                        </div>
                        <div class="unidad-medida">
                            <?php Gral::_echo($ins_unidad_medida->getDescripcion()) ?>
                        </div>  
                    </td>

                    <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="importe-unitario">
                            <?php $importe_unitario = $vta_nota_credito_vta_ajuste_debe_vta_orden_venta->getImporteUnitario(); ?>
                            <?php Gral::_echoImp($importe_unitario) ?>
                        </div>
                    </td>

                    <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="importe-total">
                            <?php $importe_total = $importe_unitario * $cantidad; ?>
                            <?php Gral::_echoImp($importe_total) ?>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <?php } ?>

    <?php if (count($vta_nota_credito_items) > 0) { ?>

        <table border="0" class="tabla-modal">
            <tr>
                <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Codigo"); ?></td>
                <td class="adm_tbl_encabezado" width="160" align='center'><?php Lang::_lang("Concepto"); ?></td>
                <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang("Descripcion"); ?></td>
                <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Cantidad"); ?></td>
                <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Imp Unitario"); ?></td>
                <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Imp Total"); ?></td>
                <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang("Aplica Perc IIBB"); ?></td>
            </tr>
            <?php
            $cont = 0;
            foreach ($vta_nota_credito_items as $vta_nota_credito_item) {
                $cont++;
                $strong = ($cont == 1) ? 'strong' : '';

                $vta_nota_credito_concepto = $vta_nota_credito_item->getVtaNotaCreditoConcepto();
                ?>
                <tr>
                    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="concepto">	
                            <?php Gral::_echo($vta_nota_credito->getNumeroNotaCreditoCompleto()) ?>
                        </div>
                    </td>

                    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="concepto">	
                            <?php Gral::_echo($vta_nota_credito_concepto->getDescripcion()) ?>
                        </div>
                    </td>

                    <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="descripcion">	
                            <?php Gral::_echo($vta_nota_credito_item->getDescripcion()) ?>
                        </div>
                    </td>

                    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="cantidad">
                            <?php $cantidad = $vta_nota_credito_item->getCantidad(); ?>
                            <?php Gral::_echo($cantidad) ?>
                        </div>
                    </td>

                    <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="importe-unitario">
                            <?php $importe_unitario = $vta_nota_credito_item->getImporteUnitario(); ?>
                            <?php Gral::_echoImp($importe_unitario) ?>
                        </div>
                    </td>

                    <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="importe-total">
                            <?php $importe_total = $importe_unitario * $cantidad; ?>
                            <?php Gral::_echoImp($importe_total) ?>
                        </div>
                    </td>

                    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <div class="aplica_percepcion_iibb">
                            <?php $gral_si_no_aplica_percepcion_iibb = GralSiNo::getOxId($vta_nota_credito_item->getPercepcionIibbAplica()); ?>
                            <?php Gral::_echo($gral_si_no_aplica_percepcion_iibb->getDescripcion()) ?>
                        </div>
                    </td>

                </tr>
            <?php } ?>
        </table>
    <?php } ?>
<?php } ?>
