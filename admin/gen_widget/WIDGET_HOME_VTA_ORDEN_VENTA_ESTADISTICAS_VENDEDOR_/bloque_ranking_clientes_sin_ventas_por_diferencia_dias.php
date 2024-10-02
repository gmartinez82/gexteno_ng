<br />
<br />

<!--Tabla de Ranking de Clientes con Menos Ventas por Diferencia de Dias-->

<!------------------------------------------------------------------------------
// Tabla Resumen
------------------------------------------------------------------------------->
<div style="margin: 0 auto; width: 90%;">

    <div class="resumen" style="display: table;">
        <table border="0" align="left">
            <tr>
                <td class="adm_tbl_encabezado" align="center" colspan="2">
                    <?php Gral::_echo('Resumen') ?>
                </td>
            </tr>
            <tr>
                <td class="adm_tbl_encabezado" align="center" width="140">Importe Ventas</td>
                <td class="adm_tbl_lineas" align="center" width="250"> 
                    <div class="cantidad" style="font-size: 12px; font-weight: bold;">
                        <?php Gral::_echoImp($importe_ventas) ?>
                    </div>
                </td>
            </tr>
            <tr style="display: none;">
                <td class="adm_tbl_encabezado" align="center" width="120">Ventas</td>
                <td class="adm_tbl_lineas" align="center"> 
                    <div class="cantidad" style="font-size: 12px; font-weight: bold;">
                        <?php Gral::_echoInt($cantidad_ventas) ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="adm_tbl_encabezado" align="center" width="120">Clientes Vinculados</td>
                <td class="adm_tbl_lineas" align="center"> 
                    <div class="cantidad" style="font-size: 12px; font-weight: bold;">
                        <?php Gral::_echoInt($cantidad_clientes_vinculados) ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="adm_tbl_encabezado" align="center" width="120">Clientes Vendidos</td>
                <td class="adm_tbl_lineas" align="center"> 
                    <div class="cantidad" style="font-size: 12px; font-weight: bold;">
                        <?php Gral::_echoInt($cantidad_clientes_vendidos) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center" style="background-color: <?php echo $porcentaje_clientes_vendidos_bgcolor ?>; color: <?php echo $porcentaje_clientes_vendidos_color ?>;"> 
                    <div class="cantidad" style="font-size: 12px; font-weight: bold;">
                        <?php Gral::_echoInt($porcentaje_clientes_vendidos) ?> %
                    </div>
                </td>
            </tr>
            <tr>
                <td class="adm_tbl_encabezado" align="center" width="120">Clientes NO Vendidos</td>
                <td class="adm_tbl_lineas" align="center"> 
                    <div class="cantidad" style="font-size: 12px; font-weight: bold;">
                        <?php Gral::_echoInt($cantidad_clientes_no_vendidos) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center"> 
                    <div class="cantidad" style="font-size: 12px; font-weight: bold;">
                        <?php Gral::_echoInt($porcentaje_clientes_no_vendidos) ?> %
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="detalle" style="display: table;">
        <!------------------------------------------------------------------------------
        // Tabla Detalle
        ------------------------------------------------------------------------------->
        <table border="0" align="center">
            <tr>
                <td class="adm_tbl_encabezado" align="center" colspan="6">
                    Ranking de Ventas a Clientes de Vendedor
                </td>
                <td class="adm_tbl_encabezado" align="center" colspan="3">
                    En Rango Indicado
                </td>
                <td class="adm_tbl_encabezado" align="center" colspan="4">
                    Ultima Venta
                </td>
            </tr>

            <tr>
                <td class="adm_tbl_encabezado" align="center" width="40">#</td>
                <td class="adm_tbl_encabezado" align="center" width="60">ID</td>
                <td class="adm_tbl_encabezado" align="center" width="280">Descripcion</td>
                <td class="adm_tbl_encabezado" align="center" width="70">Gest</td>
                <td class="adm_tbl_encabezado" align="center" width="200">Sucursal</td>
                <td class="adm_tbl_encabezado" align="center" width="200">Vendedor</td>
                <td class="adm_tbl_encabezado" align="center" width="60">Ventas</td>
                <td class="adm_tbl_encabezado" align="center" width="100">Importe Total</td>
                <td class="adm_tbl_encabezado" align="center" width="80">Ultima Venta</td>
                <td class="adm_tbl_encabezado" align="center" width="80">Ultima Venta</td>
                <td class="adm_tbl_encabezado" align="center" width="50">Hace (Dias)</td>
                <td class="adm_tbl_encabezado" align="center" width="50">Hace (Semanas)</td>
                <td class="adm_tbl_encabezado" align="center" width="80">Tipo Estado</td>
            </tr>

            <?php
            $cont = 1;
            foreach ($arr_ventas_clientes_en_periodo as $arr_resumen_ranking_cliente) {
                $cli_cliente = CliCliente::getOxId($arr_resumen_ranking_cliente['CLI_CLIENTE_ID']);

                $vta_vendedors_string = '';
                $vta_vendedors = $cli_cliente->getVtaVendedorsXCliClienteVtaVendedor();
                foreach ($vta_vendedors as $vta_vendedor) {
                    $vta_vendedors_string .= $vta_vendedor->getDescripcion();
                    $vta_vendedors_string .= Gral::REPORTES_SEPARADOR;
                }
                
                $gral_sucursals_string = '';
                $gral_sucursals = $cli_cliente->getGralSucursalsXGralSucursalCliCliente();
                foreach ($gral_sucursals as $gral_sucursal) {
                    $gral_sucursals_string .= $gral_sucursal->getDescripcion();
                    $gral_sucursals_string .= Gral::REPORTES_SEPARADOR;
                }
                ?>
                <tr>
                    <td class="adm_tbl_lineas" align="center">
                        <?php Gral::_echo($cont) ?>
                    </td>
                    <td class="adm_tbl_lineas" align="center">
                        <?php Gral::_echo($cli_cliente->getId()) ?>
                    </td>
                    <td class="adm_tbl_lineas" align="left">
                        <?php Gral::_echo($cli_cliente->getDescripcion()) ?>
                    </td>
                    <td class="adm_tbl_lineas" align="center">
                        <label style="font-size: 11px;" title="<?php Gral::_echo($cli_cliente->getCliClienteTipoGestion()->getDescripcion()) ?>">
                           <?php Gral::_echo($cli_cliente->getCliClienteTipoGestion()->getDescripcionCorta()) ?>  
                        </label>
                    </td>
                    <td class="adm_tbl_lineas" align="center">
                        <?php foreach ($cli_cliente->getGralSucursalCliClientes() as $gral_sucursal_cli_cliente) { ?>
                            <div class="gral-sucuesal">
                                <?php if($gral_sucursal_cli_cliente->getAutomatico()){ ?>
                                    <img src="imgs/icon_automatico.png" width="12" alt="icon" title="Vinculo Automatico">
                                <?php }else{ ?>
                                    <img src="imgs/icon_manual.png" width="16" alt="icon" title="Vinculo Manual">
                                <?php } ?>

                                <?php if($cli_cliente->getCliClienteTipoGestion()->getCodigo() == CliClienteTipoGestion::TIPO_GESTION_SUCURSAL){ ?>
                                    <label class="destaque" style="font-size: 11px; font-weight: bold; color: #0283bc;" title="<?php Gral::_echo($cli_cliente->getCliClienteTipoGestion()->getDescripcion()) ?>">
                                        <?php Gral::_echo($gral_sucursal_cli_cliente->getGralSucursal()->getDescripcion()) ?>
                                    </label>
                                <?php }else{ ?>
                                    <label class="no-destaque" style="font-size: 11px; font-weight: normal; color: #666666;" title="<?php Gral::_echo($cli_cliente->getCliClienteTipoGestion()->getDescripcion()) ?>">
                                        <?php Gral::_echo($gral_sucursal_cli_cliente->getGralSucursal()->getDescripcion()) ?>
                                    </label>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </td>
                    <td class="adm_tbl_lineas" align="center">
                        <label class="no-destaque" style="font-size: 9px; font-weight: bold; color: #0283bc;">
                            <?php Gral::_echo($vta_vendedors_string) ?>
                        </label>
                    </td>
                    <td class="adm_tbl_lineas" align="center">
                        <?php if ($arr_resumen_ranking_cliente['CANTIDAD_VENTAS'] > 0) { ?>
                            <?php Gral::_echo($arr_resumen_ranking_cliente['CANTIDAD_VENTAS']) ?>
                        <?php } ?>
                    </td>
                    <td class="adm_tbl_lineas" align="center">
                        <?php if ($arr_resumen_ranking_cliente['CANTIDAD_VENTAS'] > 0) { ?>
                            <?php Gral::_echoImp($arr_resumen_ranking_cliente['IMPORTE_TOTAL']) ?>
                        <?php } ?>
                    </td>
                    <td class="adm_tbl_lineas" align="center">
                        <?php if ($arr_resumen_ranking_cliente['CANTIDAD_VENTAS'] > 0) { ?>
                            <?php Gral::_echo(Gral::getFechaToWEB($arr_resumen_ranking_cliente['ULTIMA_FECHA_VENTA_EN_RANGO_BUSCADO'])) ?>
                        <?php } ?>
                    </td>
                    <td class="adm_tbl_lineas" align="center">
                        <?php if ($arr_resumen_ranking_cliente['ULTIMA_FECHA_VENTA'] !== false) { ?>
                            <?php Gral::_echo(Gral::getFechaToWEB($arr_resumen_ranking_cliente['ULTIMA_FECHA_VENTA'])) ?>
                        <?php } ?>
                    </td>
                    <td class="adm_tbl_lineas" align="center">
                        <?php if ($arr_resumen_ranking_cliente['ULTIMA_FECHA_VENTA'] !== false) { ?>
                            <?php Gral::_echo($arr_resumen_ranking_cliente['ULTIMA_FECHA_VENTA_DIFERENCIA_DIAS']) ?>
                        <?php } ?>
                    </td>
                    <td class="adm_tbl_lineas" align="center">
                        <?php if ($arr_resumen_ranking_cliente['ULTIMA_FECHA_VENTA'] !== false) { ?>
                            <?php Gral::_echo($arr_resumen_ranking_cliente['ULTIMA_FECHA_VENTA_DIFERENCIA_SEMANAS']) ?>
                        <?php } ?>
                    </td>
                    <td class="adm_tbl_lineas CLIENTE_NIVEL_<?php Gral::_echo($arr_resumen_ranking_cliente['CLIENTE_TIPO_ESTADO_VENTA']) ?>" align="center">
                        <?php if ($arr_resumen_ranking_cliente['ULTIMA_FECHA_VENTA'] !== false) { ?>     
                            <?php Gral::_echo($arr_resumen_ranking_cliente['CLIENTE_TIPO_ESTADO_VENTA_DESCRIPCION']) ?>               
                        <?php } ?>
                    </td>
                </tr> 
                <?php
                $cont++;
            }
            ?>
        </table>
    </div>

</div>