<!--Tabla de Resumen de Ventas-->
<table border="0" align="center"> 
    <tr>
        <td class="adm_tbl_encabezado" align="center" colspan="<?php echo (count($arr_resumen_tipo_listas) + 2) ?>">
            <?php if($gral_sucursal_elegida){ ?>
                <?php Gral::_echo('Resumen de Facturas de Ventas') ?> - <?php Gral::_echo($gral_sucursal_elegida->getDescripcion()) ?>
            <?php }else{ ?>
                <?php Gral::_echo('Resumen de Facturas de Ventas') ?> - Las <?php echo count($gral_sucursals_autorizadas_ids) ?> Sucursales Alcanzadas
            <?php } ?>
        </td>
    </tr>

    <tr>
        <td class="adm_tbl_encabezado" align="center" width="140">Fecha</td>
        <?php foreach ($arr_resumen_tipo_listas as $codigo => $arr_resumen_tipo_lista) { ?>
            <td class="adm_tbl_encabezado" align="center" width="250"><?php Gral::_echo($arr_resumen_tipo_lista['descripcion']) ?></td>
        <?php } ?>
        <td class="adm_tbl_encabezado" align="center" width="250">Total</td>
    </tr>

    <?php foreach ($arr_fechas as $codigo_fecha => $fecha) { ?>
        <tr>
            <!--1 Columna-->
            <td class="adm_tbl_lineas" align="center"><?php Gral::_echo(Gral::getFechaToWEB($fecha, 'INCLUIR_DIA_NOMBRE')) ?></td>

            <!--Columnas Lista Precio (Intermedias)-->
            <?php foreach ($arr_resumen_tipo_listas as $codigo_resumen_lista_precio => $arr_resumen_tipo_lista) { ?>
                <td class="adm_tbl_lineas" align="center">

                    <?php if ($arr_resumen_fechas['POR_FECHA'][$codigo_fecha][$codigo_resumen_lista_precio]['importe_total_neto'] > 0) { ?>
                        <div class="importe importe-neto" title="Importe Ventas Real">
                            <?php Gral::_echoImp($arr_resumen_fechas['POR_FECHA'][$codigo_fecha][$codigo_resumen_lista_precio]['importe_total_neto']) ?>
                        </div>
                        <?php if ($arr_resumen_fechas['POR_FECHA'][$codigo_fecha][$codigo_resumen_lista_precio]['importe_total_anulado'] > 0) { ?>
                            <div class="importe importe-anulado" title="NC Vinculadas a las Facturas">
                                <div class="valor">
                                    <?php Gral::_echoImp($arr_resumen_fechas['POR_FECHA'][$codigo_fecha][$codigo_resumen_lista_precio]['importe_total_anulado']) ?>
                                </div>
                                <div class="porcentaje">
                                    <?php Gral::_echoFloatDyn($arr_resumen_fechas['POR_FECHA'][$codigo_fecha][$codigo_resumen_lista_precio]['importe_total_anulado_porcentaje']) ?> %
                                </div>
                            </div>
                        <?php } ?>
                        <?php if ($arr_resumen_fechas['POR_FECHA'][$codigo_fecha][$codigo_resumen_lista_precio]['importe_total_cobrado'] > 0) { ?>
                            <div class="importe importe-cobrado" title="Cobros Vinculados a las Facturas">
                                <div class="valor">
                                    <?php Gral::_echoImp($arr_resumen_fechas['POR_FECHA'][$codigo_fecha][$codigo_resumen_lista_precio]['importe_total_cobrado']) ?>
                                </div>
                                <div class="porcentaje">
                                    <?php Gral::_echoFloatDyn($arr_resumen_fechas['POR_FECHA'][$codigo_fecha][$codigo_resumen_lista_precio]['importe_total_cobrado_porcentaje']) ?> %
                                </div>
                            </div>       
                        <?php } ?>
                    <?php } ?>

                </td>
            <?php } ?>

            <!--Columna Totalizador Por Fecha-->
            <td class="adm_tbl_total" align="center">

                <?php if ($arr_resumen_fechas['POR_FECHA'][$codigo_fecha]['TOTAL_POR_FECHA']['importe_total_neto'] > 0) { ?>
                    <div class="importe importe-neto" title="Importe Ventas Real">
                        <?php Gral::_echoImp($arr_resumen_fechas['POR_FECHA'][$codigo_fecha]['TOTAL_POR_FECHA']['importe_total_neto']) ?>
                    </div>
                    <?php if ($arr_resumen_fechas['POR_FECHA'][$codigo_fecha]['TOTAL_POR_FECHA']['importe_total_anulado'] > 0) { ?>
                        <div class="importe importe-anulado" title="NC Vinculadas a las Facturas">
                            <div class="valor">
                                <?php Gral::_echoImp($arr_resumen_fechas['POR_FECHA'][$codigo_fecha]['TOTAL_POR_FECHA']['importe_total_anulado']) ?>
                            </div>
                            <div class="porcentaje">
                                <?php Gral::_echoFloatDyn($arr_resumen_fechas['POR_FECHA'][$codigo_fecha]['TOTAL_POR_FECHA']['importe_total_anulado_porcentaje']) ?> %
                            </div>
                        </div>
                    <?php } ?>                        
                    <?php if ($arr_resumen_fechas['POR_FECHA'][$codigo_fecha]['TOTAL_POR_FECHA']['importe_total_cobrado'] > 0) { ?>
                        <div class="importe importe-cobrado" title="Cobros de Facturas">
                            <div class="valor">
                                <?php Gral::_echoImp($arr_resumen_fechas['POR_FECHA'][$codigo_fecha]['TOTAL_POR_FECHA']['importe_total_cobrado']) ?>
                            </div>
                            <div class="porcentaje">
                                <?php Gral::_echoFloatDyn($arr_resumen_fechas['POR_FECHA'][$codigo_fecha]['TOTAL_POR_FECHA']['importe_total_cobrado_porcentaje']) ?> %
                            </div>
                        </div>
                    <?php } ?>                        
                <?php } ?>

            </td>
        </tr>
    <?php } ?>

    <tr>
        <!--1 Columna-->
        <td class="adm_tbl_encabezado" align="center"><?php Gral::_echo('Total') ?></td>

        <!--Columnas Lista Precio (Intermedias)-->
        <?php foreach ($arr_resumen_tipo_listas as $codigo_resumen_lista_precio => $arr_resumen_tipo_lista) { ?>
            <td class="adm_tbl_total" align="center">

                <?php if ($arr_resumen_fechas['POR_LISTA_PRECIO'][$codigo_resumen_lista_precio]['TOTAL_POR_TIPO_LISTA']['importe_total_neto'] > 0) { ?>
                    <div class="importe importe-neto" title="Importe Ventas Real">
                        <?php Gral::_echoImp($arr_resumen_fechas['POR_LISTA_PRECIO'][$codigo_resumen_lista_precio]['TOTAL_POR_TIPO_LISTA']['importe_total_neto']) ?>
                    </div>
                    <?php if ($arr_resumen_fechas['POR_LISTA_PRECIO'][$codigo_resumen_lista_precio]['TOTAL_POR_TIPO_LISTA']['importe_total_anulado'] > 0) { ?>
                        <div class="importe importe-anulado" title="NC Vinculadas a las Facturas">
                            <div class="valor">
                                <?php Gral::_echoImp($arr_resumen_fechas['POR_LISTA_PRECIO'][$codigo_resumen_lista_precio]['TOTAL_POR_TIPO_LISTA']['importe_total_anulado']) ?>
                            </div>
                            <div class="porcentaje">
                                <?php Gral::_echoFloatDyn($arr_resumen_fechas['POR_LISTA_PRECIO'][$codigo_resumen_lista_precio]['TOTAL_POR_TIPO_LISTA']['importe_total_anulado_porcentaje']) ?> %
                            </div>
                        </div>
                    <?php } ?> 
                    <?php if ($arr_resumen_fechas['POR_LISTA_PRECIO'][$codigo_resumen_lista_precio]['TOTAL_POR_TIPO_LISTA']['importe_total_cobrado'] > 0) { ?>
                        <div class="importe importe-cobrado" title="Cobros de Facturas">
                            <div class="valor">
                                <?php Gral::_echoImp($arr_resumen_fechas['POR_LISTA_PRECIO'][$codigo_resumen_lista_precio]['TOTAL_POR_TIPO_LISTA']['importe_total_cobrado']) ?>
                            </div>
                            <div class="porcentaje">
                                <?php Gral::_echoFloatDyn($arr_resumen_fechas['POR_LISTA_PRECIO'][$codigo_resumen_lista_precio]['TOTAL_POR_TIPO_LISTA']['importe_total_cobrado_porcentaje']) ?> %
                            </div>
                        </div>
                    <?php } ?> 
                <?php } ?> 

            </td>
        <?php } ?>

        <!--Columna Totalizador Por Fecha-->
        <td class="adm_tbl_total" align="center">
            <?php if ($arr_resumen_fechas['TOTAL']['importe_total_neto'] > 0) { ?>
                <div class="importe importe-neto" title="Importe Ventas Real">
                    <?php Gral::_echoImp($arr_resumen_fechas['TOTAL']['importe_total_neto']) ?>
                </div>
                <?php if ($arr_resumen_fechas['TOTAL']['importe_total_anulado'] > 0) { ?>
                    <div class="importe importe-anulado" title="NC Vinculadas a las Facturas">
                        <div class="valor">
                            <?php Gral::_echoImp($arr_resumen_fechas['TOTAL']['importe_total_anulado']) ?>
                        </div>
                        <div class="porcentaje">
                            <?php Gral::_echoFloatDyn($arr_resumen_fechas['TOTAL']['importe_total_anulado_porcentaje']) ?> %
                        </div>
                    </div>
                <?php } ?>
                <?php if ($arr_resumen_fechas['TOTAL']['importe_total_cobrado'] > 0) { ?>
                    <div class="importe importe-cobrado" title="Cobros de Facturas">
                        <div class="valor">
                            <?php Gral::_echoImp($arr_resumen_fechas['TOTAL']['importe_total_cobrado']) ?>
                        </div>
                        <div class="porcentaje">
                            <?php Gral::_echoFloatDyn($arr_resumen_fechas['TOTAL']['importe_total_cobrado_porcentaje']) ?> %
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </td>
    </tr>

</table>
<style>
    .importe{
        display: inline-block;
        vertical-align: top;
        width: 80%;        
    }
    .importe.importe-neto{
        
        text-align: right;
        font-weight: bold;
        font-size: 15px;
        
        margin: 3px;
    }
    .importe.importe-anulado,
    .importe.importe-cobrado{

        box-sizing: border-box;
        
        color: #666;

        font-size: 11px;
        font-weight: normal;
        text-align: right;

        padding: 0px;
        margin: 1px auto;
    }
    .adm_tbl_total .importe.importe-anulado,
    .adm_tbl_total .importe.importe-cobrado{
        color: #fff;
        text-align: right;
    }
    .importe.importe-anulado{
    }    
    .importe.importe-cobrado{
    }   
    .importe.importe-anulado:empty,
    .importe.importe-cobrado:empty{
        display: none;
    } 
    .importe .valor{
        display: inline-block;
        vertical-align: top;
        width: 62%;

        box-sizing: border-box;

        padding: 2px;
    }    
    .importe .porcentaje{
        display: inline-block;
        vertical-align: top;
        width: 35%;

        text-align: center;
        box-sizing: border-box;

        padding: 2px;

        background-color: rgba(200, 200, 200, 0.6);
        color: #333;
        
        font-weight: bold;
        font-size: 11px;
    }   
    .importe.importe-anulado .porcentaje{
        color: #CC0000;
    }    
    .importe.importe-cobrado .porcentaje{
        color: #074706;
    }    
    
</style>