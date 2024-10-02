
<?php
if ($importe_total_saldo_inicial_en_fecha >= 0) {
    $titulo_saldo = 'Saldo Deudor';
} else {
    $titulo_saldo = 'Saldo Acreedor';
}
?>

<!------------------------------------------------------------------------------
// Tabla Resumen
------------------------------------------------------------------------------->
<table border="0" align="center">
    <tr>
        <td class="adm_tbl_encabezado" align="center" colspan="2">
            <?php Gral::_echo('Resumen de Cuenta del Cliente') ?>
        </td>
    </tr>
    <tr>
        <td class="adm_tbl_encabezado" align="center" width="120">
            Descripcion
        </td>
        <td class="adm_tbl_lineas" align="center" width="400"> 
            <div class="cliente-descripcionx" style="font-size: 12px; font-weight: bold;">
                <?php Gral::_echo($cli_cliente->getDescripcion()) ?>
            </div>
        </td>
    </tr>
    <tr>
        <td class="adm_tbl_encabezado" align="center" width="120">
            Razon Social / CUIT
        </td>
        <td class="adm_tbl_lineas" align="center" width="400"> 
            <div class="cliente-razon-social" style="font-size: 12px; font-weight: bold;">
                <?php Gral::_echo($cli_cliente->getRazonSocial()) ?>
                (<?php Gral::_echo($cli_cliente->getCuit()) ?>)
            </div>
        </td>
    </tr>
    <tr>
        <td class="adm_tbl_encabezado" align="center">
            <?php Gral::_echo($titulo_saldo) ?>
        </td>
        <td class="adm_tbl_lineas" align="center">
            <?php if ($importe_total_saldo_inicial_en_fecha >= 0) { ?>
                <div class="importe-deuda" style="font-size: 12px; font-weight: bold; background: #f7d8ca; width: 200px; padding: 5px;">
            <?php } else { ?>
                <div class="importe-deuda" style="font-size: 12px; font-weight: bold; background: lightblue; width: 200px; padding: 5px;">
            <?php } ?>
                <?php Gral::_echoImp(abs($importe_total_saldo_inicial_en_fecha)) ?>
            </div>
        </td>
    </tr>
    <tr>
        <td class="adm_tbl_encabezado" align="center">PDF</td>
        <td class="adm_tbl_lineas" align="center"> 
            <div class="pdf" style="font-size: 12px; font-weight: bold;"> 
                <a href="ajax/modulos/vta_comprobante_gestion/pdf_resumen_cuenta.php?cli_cliente_id=<?php echo $cli_cliente->getId() ?>&fecha_desde=<?php echo $txt_desde ?>&fecha_hasta=<?php echo $txt_hasta ?>&otros=<?php echo $widget_cmb_otros ?>" target="_blank" title="Ver Resumen de Cuenta de Cliente en PDF">
                    <img src="imgs/btn_pdf.png" width="12" />
                </a>
            </div>
        </td>
    </tr>
</table>

