
<!--Tabla de Ranking de Clientes con mas Ventas por Ventas-->
<table class="tabla inline" border="0" align="center">
    <tr>
        <td class="adm_tbl_encabezado" align="center" colspan="4">
            <?php Gral::_echo('Ranking de Clientes con mas Ventas por Ventas') ?>
        </td>
    </tr>

    <tr>
        <td class="adm_tbl_encabezado" align="center" width="50">#</td>
        <td class="adm_tbl_encabezado" align="center" width="400">Descripcion</td>
        <td class="adm_tbl_encabezado" align="center" width="50">Ventas</td>
    </tr>

    <?php
    $cont = 1;
    foreach ($arr_resumen_ranking_clientes_por_ventas as $arr_resumen_ranking_cliente) {
        ?>
        <tr>
            <td class="adm_tbl_lineas" align="center"><?php Gral::_echo($cont) ?></td>
            <td class="adm_tbl_lineas" align="left"><?php Gral::_echo($arr_resumen_ranking_cliente['descripcion']) ?></td>
            <td class="adm_tbl_lineas" align="center"><?php Gral::_echo($arr_resumen_ranking_cliente['ventas']) ?></td>
        </tr>
        <?php
        $cont++;
    }
    ?>

</table>