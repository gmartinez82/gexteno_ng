<!--Tabla de Resumen de IVA-->
<table border="0" align="center"> 
    <tr>
        <td class="adm_tbl_encabezado" align="center" colspan="4">
            <?php Gral::_echo('Resumen de Conceptos') ?>
        </td>
    </tr>

    <tr>
        <td class="adm_tbl_encabezado" align="center" width="100">Concepto</td>
        <td class="adm_tbl_encabezado" align="center" width="130">Venta</td>
        <td class="adm_tbl_encabezado" align="center" width="130">Compra</td>
        <td class="adm_tbl_encabezado" align="center" width="130">Total</td>
    </tr>

    <tr>
        <!--1 Columna-->
        <td class="adm_tbl_lineas" align="center"><?php Gral::_echo('IVA') ?></td>
        
        <!--2 Columna-->
        <td class="adm_tbl_lineas" align="center">
            <?php if ($arr_resumen_fechas['TOTAL']['TOTAL_VTA'] != 0) { ?>
                <div class="iva iva-total" title="IVA Total">
                    <?php Gral::_echoImp($arr_resumen_fechas['TOTAL']['TOTAL_VTA']) ?>
                </div>
                <?php if ($arr_resumen_fechas['TOTAL']['VTA_FACTURA_IVA'] != 0) { ?>
                    <div class="iva iva-vta-factura" title="IVA Vta Factura">
                        <div class="valor">
                            + <?php Gral::_echoImp($arr_resumen_fechas['TOTAL']['VTA_FACTURA_IVA']) ?>
                        </div>
                    </div>
                <?php } ?>
                <?php if ($arr_resumen_fechas['TOTAL']['VTA_NOTA_CREDITO_IVA'] != 0) { ?>
                    <div class="iva iva-vta-nota-credito" title="IVA Vta Nota Credito">
                        <div class="valor">
                            - <?php Gral::_echoImp($arr_resumen_fechas['TOTAL']['VTA_NOTA_CREDITO_IVA']) ?>
                        </div>
                    </div>
                <?php } ?>
                <?php if ($arr_resumen_fechas['TOTAL']['VTA_NOTA_DEBITO_IVA'] != 0) { ?>
                    <div class="iva iva-vta-nota-debito" title="IVA Vta Nota Debito">
                        <div class="valor">
                            + <?php Gral::_echoImp($arr_resumen_fechas['TOTAL']['VTA_NOTA_DEBITO_IVA']) ?>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </td>
        
        <!--3 Columna-->
        <td class="adm_tbl_lineas" align="center">
            <?php if ($arr_resumen_fechas['TOTAL']['TOTAL_PDE'] != 0) { ?>
                <div class="iva iva-total" title="IVA Total">
                    <?php Gral::_echoImp($arr_resumen_fechas['TOTAL']['TOTAL_PDE']) ?>
                </div>
                <?php if ($arr_resumen_fechas['TOTAL']['PDE_FACTURA_IVA'] != 0) { ?>
                    <div class="iva iva-pde-factura" title="IVA Pde Factura">
                        <div class="valor">
                            + <?php Gral::_echoImp($arr_resumen_fechas['TOTAL']['PDE_FACTURA_IVA']) ?>
                        </div>
                    </div>
                <?php } ?>
                <?php if ($arr_resumen_fechas['TOTAL']['PDE_NOTA_CREDITO_IVA'] != 0) { ?>
                    <div class="iva iva-pde-nota-credito" title="IVA Pde Nota Credito">
                        <div class="valor">
                            - <?php Gral::_echoImp($arr_resumen_fechas['TOTAL']['PDE_NOTA_CREDITO_IVA']) ?>
                        </div>
                    </div>
                <?php } ?>
                <?php if ($arr_resumen_fechas['TOTAL']['PDE_NOTA_DEBITO_IVA'] != 0) { ?>
                    <div class="iva iva-pde-nota-debito" title="IVA Pde Nota Debito">
                        <div class="valor">
                            + <?php Gral::_echoImp($arr_resumen_fechas['TOTAL']['PDE_NOTA_DEBITO_IVA']) ?>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </td>
        
        <!--4 Columna-->
        <td class="adm_tbl_lineas" align="center">
            <?php if ($arr_resumen_fechas['TOTAL']['TOTAL_NETO'] != 0) { ?>
                <div class="iva iva-total" title="IVA Total">
                    <?php Gral::_echoImp($arr_resumen_fechas['TOTAL']['TOTAL_NETO']) ?>
                </div>
            <?php } ?>
        </td>
    </tr>

</table>
<style>
    .iva{
        display: inline-block;
        vertical-align: top;
        width: 80%;        
    }
    .iva.iva-total{
        
        text-align: right;
        font-weight: bold;
        font-size: 15px;
        
        margin: 3px;
    }
    .iva.iva-vta-factura,
    .iva.iva-vta-nota-credito,
    .iva.iva-vta-nota-debito,
    .iva.iva-pde-factura,
    .iva.iva-pde-nota-credito,
    .iva.iva-pde-nota-debito{
        
        text-align: right;
        font-weight: normal;
        font-size: 11px;
        color: #666;
        
        margin: 3px;
    }
    
</style>