<!--Tabla de Resumen de Ventas-->
<table border="0" align="center"> 
    <tr>
        <td class="adm_tbl_encabezado" align="center" colspan="<?php echo (count($arr_resumen_tipo_listas) + 2) ?>">
            Resumen de Ventas por Fecha
        </td>
    </tr>

    <tr>
        <td class="adm_tbl_encabezado" align="center" width="160">Fecha</td>
        <?php foreach ($arr_resumen_tipo_listas as $codigo => $arr_resumen_tipo_lista) { ?>
            <td class="adm_tbl_encabezado" align="center" width="160"><?php Gral::_echo($arr_resumen_tipo_lista['descripcion']) ?></td>
        <?php } ?>
        <td class="adm_tbl_encabezado" align="center" width="200">Total</td>
    </tr>

    <?php
    $total = 0;
    foreach ($arr_fechas as $codigo_fecha => $fecha) {
        $total = $total + $arr_resumen_fechas['POR_FECHA'][$codigo_fecha]['TOTAL_POR_FECHA']['importe_total']
        ?>
        <tr>
            <!--1° Columna-->
            <td class="adm_tbl_lineas" align="center"><?php Gral::_echo(Gral::getFechaToWEB($fecha, 'INCLUIR_DIA_NOMBRE')) ?></td>

            <!--Columnas Lista Precio (Intermedias)-->
            <?php foreach ($arr_resumen_tipo_listas as $codigo_resumen_lista_precio => $arr_resumen_tipo_lista) { ?>
                <td class="adm_tbl_lineas" align="center">
                    <?php if ($arr_resumen_fechas['POR_FECHA'][$codigo_fecha][$codigo_resumen_lista_precio]['importe_total'] > 0) { ?>
                        <?php Gral::_echoImp($arr_resumen_fechas['POR_FECHA'][$codigo_fecha][$codigo_resumen_lista_precio]['importe_total']) ?>
                    <?php } ?>
                </td>
            <?php } ?>

            <!--Columna Totalizador Por Fecha-->
            <td class="adm_tbl_total" align="center">
                <?php if ($arr_resumen_fechas['POR_FECHA'][$codigo_fecha]['TOTAL_POR_FECHA']['importe_total'] > 0) { ?>
                    <?php Gral::_echoImp($arr_resumen_fechas['POR_FECHA'][$codigo_fecha]['TOTAL_POR_FECHA']['importe_total']) ?>
                <?php } ?>
            </td>
        </tr>
    <?php } ?>

    <tr>
        <!--1° Columna-->
        <td class="adm_tbl_total" align="center"><?php Gral::_echo('Total') ?></td>

        <!--Columnas Lista Precio (Intermedias)-->
        <?php foreach ($arr_resumen_tipo_listas as $codigo_resumen_lista_precio => $arr_resumen_tipo_lista) { ?>
            <td class="adm_tbl_total" align="center"><?php Gral::_echoImp($arr_resumen_fechas['POR_LISTA_PRECIO'][$codigo_resumen_lista_precio]['TOTAL_POR_TIPO_LISTA']['importe_total']) ?></td>
        <?php } ?>

        <!--Columna Totalizador Por Fecha-->
        <td class="adm_tbl_total" align="center"><?php Gral::_echoImp($total) ?></td>
    </tr>

</table>
