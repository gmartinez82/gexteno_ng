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
    foreach ($pde_factura_pde_nota_creditos as $pde_factura_pde_nota_credito) {
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';

        $pde_nota_credito = $pde_factura_pde_nota_credito->getPdeNotaCredito();

        $pde_tipo_nota_credito = $pde_nota_credito->getPdeTipoNotaCredito();
        $prv_proveedor = $pde_nota_credito->getPrvProveedor();

        $gral_condicion_iva = $pde_nota_credito->getGralCondicionIva();
        $gral_tipo_personeria = $pde_nota_credito->getGralTipoPersoneria();
        $gral_empresa_facturadora = $pde_nota_credito->getGralEmpresa();

        $pde_nota_credito_pde_factura_pde_ocs = $pde_nota_credito->getPdeNotaCreditoPdeFacturaPdeOcs();
        foreach ($pde_nota_credito_pde_factura_pde_ocs as $pde_nota_credito_pde_factura_pde_oc) {

            $ins_insumo = $pde_nota_credito_pde_factura_pde_oc->getInsInsumo();
            $ins_unidad_medida = $pde_nota_credito_pde_factura_pde_oc->getInsUnidadMedida();
            ?>
            <tr>
                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="codigo-pde-nota-credito">
                        <?php Gral::_echo($pde_nota_credito->getCodigo()) ?>
                    </div>
                    <div class="fecha-emision-pde-nota-credito">
                        <?php Gral::_echo(Gral::getFechaToWeb($pde_nota_credito->getFechaEmision())) ?>
                    </div>
                </td>

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="numero-nota-credito-pde-nota-credito">	
                        <?php Gral::_echo($pde_nota_credito->getNumeroNotaCredito()) ?>
                    </div>
                </td>

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="cae-pde-nota-credito">	
                        <?php Gral::_echo($pde_nota_credito->getCae()) ?>
                    </div>
                </td>

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="descripcion-pde-tipo-nota-credito">	
                        <?php Gral::_echo($pde_tipo_nota_credito->getDescripcion()) ?>
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
                    <div class="empresa-facturadora">
                        <?php Gral::_echo($gral_empresa_facturadora->getDescripcion()) ?>
                    </div>
                </td>	

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="cantidad">
                        <?php $cantidad = $pde_nota_credito_pde_factura_pde_oc->getCantidad(); ?>
                        <?php Gral::_echo($cantidad) ?>
                    </div>
                    <div class="unidad-medida">
                        <?php Gral::_echo($ins_unidad_medida->getDescripcion()) ?>
                    </div>  
                </td>

                <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="importe-unitario">
                        <?php $importe_unitario = $pde_nota_credito_pde_factura_pde_oc->getImporteUnitario(); ?>
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

    <?php } ?>
</table>