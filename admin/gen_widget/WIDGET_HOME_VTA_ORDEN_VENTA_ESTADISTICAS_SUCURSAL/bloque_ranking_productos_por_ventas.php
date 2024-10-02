
<!--Tabla de Ranking de Productos mas Vendidos por Ventas-->
<table class="tabla inline min" border="0" align="center">
    <tr>
        <td class="adm_tbl_encabezado" align="center" colspan="3">
            <?php Gral::_echo('Ranking de Productos mas Vendidos por Ventas') ?>
        </td>
    </tr>

    <tr>
        <td class="adm_tbl_encabezado" align="center" width="15">#</td>
        <td class="adm_tbl_encabezado" align="center" width="190">Descripcion</td>
        <td class="adm_tbl_encabezado" align="center" width="50">Ventas</td>
    </tr>

    <?php
    $cont = 1;
    foreach ($arr_resumen_ranking_productos_por_ventas as $arr_resumen_ranking_producto) {
        ?>
        <tr>
            <td class="adm_tbl_lineas" align="center">
                <div class="cont">
                    <?php Gral::_echo($cont) ?>
                </div>
            </td>
            <td class="adm_tbl_lineas" align="left">
                <div class="descripcion">
                    <?php Gral::_echo($arr_resumen_ranking_producto['descripcion']) ?>
                </div>
            </td>
            <td class="adm_tbl_lineas" align="center">
                <div class="unidades">
                    <?php Gral::_echoInt($arr_resumen_ranking_producto['ventas']) ?>
                </div>
            </td>
        </tr>
        <?php
        $cont++;
    }
    ?>

</table>