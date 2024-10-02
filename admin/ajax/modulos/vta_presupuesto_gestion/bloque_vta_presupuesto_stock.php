<?php 
if ($presupuesto_mueve_stock) { 
    //$pan_panol_afectado = $gral_sucursal_autenticada->getPanPanolVinculado();
    $pan_panol_afectado = $vta_presupuesto->getGralSucursal()->getPanPanolVinculado();
    ?>
    <div class="stock-movimiento-alerta">
                
        <table class="stock-movimiento">
            <tr>
                <th width="90" align="center">Codigo Int</th>
                <th width="400" align="left">Productos cuyo stock será afectado</th>
                <th width="100" align="center">Cantidad</th>
                <th width="100" align="center">Unid Med</th>
                <th width="140" align="center">Estado de Stock en <?php Gral::_echo($pan_panol_afectado->getCodigoCorto()) ?></th>
                <th width="100" align="center">Stock en <?php Gral::_echo($pan_panol_afectado->getCodigoCorto()) ?></th>
                <th width="100" align="center">Stock Futuro</th>
            </tr>
            <?php
            foreach ($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo) {
                $ins_insumo = $vta_presupuesto_ins_insumo->getInsInsumo();
                $cantidad = $vta_presupuesto_ins_insumo->getCantidad();
                
                $ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol_afectado);
                $cantidad_stock = 0;
                $ins_stock_resumen_tipo_estado = false;
                if($ins_stock_resumen){
                    $ins_stock_resumen_tipo_estado = $ins_stock_resumen->getInsStockResumenTipoEstado();
                    $cantidad_stock = $ins_stock_resumen->getCantidad();
                }
                
                // ----------------------------------------------------------
                // se controla que no se venda por debajo de cero
                // ----------------------------------------------------------
                $alerta_stock = false;
                $cantidad_stock_futuro = $cantidad_stock - $cantidad;
                if($cantidad_stock_futuro < 0){
                    $alerta_stock = true;
                    
                    if($ins_stock_resumen && $vta_presupuesto->getGralSucursal()->getRestringeVentaSinStock()){
                        $restriccion_venta_por_stock = true;
                    }
                }
                
                if (array_key_exists($vta_presupuesto_ins_insumo->getId(), $chk_vta_presupuesto_ins_insumo)) {
                    if ($ins_insumo->getControlStock()) {
                        ?>
                        <tr>
                            <td align="center" class="uno <?php echo ($alerta_stock) ? 'restriccion' : '' ?>"><?php Gral::_echo($ins_insumo->getCodigoInterno()) ?></td>
                            <td align="left" class="uno <?php echo ($alerta_stock) ? 'restriccion' : '' ?>"><?php Gral::_echo($ins_insumo->getDescripcion()) ?></td>
                            <td align="center" class="uno <?php echo ($alerta_stock) ? 'restriccion' : '' ?>"><?php Gral::_echoFloatDyn($cantidad) ?></td>
                            <td align="center" class="uno <?php echo ($alerta_stock) ? 'restriccion' : '' ?>"><?php Gral::_echo($ins_insumo->getInsUnidadMedida()->getDescripcion()) ?></td>
                            <td align="center" class="uno <?php echo ($alerta_stock) ? 'restriccion' : '' ?>"><?php Gral::_echo(($ins_stock_resumen_tipo_estado) ? $ins_stock_resumen_tipo_estado->getDescripcion() : '') ?></td>
                            <td align="center" class="uno <?php echo ($alerta_stock) ? 'restriccion' : '' ?>"><?php Gral::_echoFloatDyn($cantidad_stock) ?></td>
                            <td align="center" class="uno <?php echo ($alerta_stock) ? 'restriccion' : '' ?>"><?php Gral::_echoFloatDyn($cantidad_stock_futuro) ?></td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        </table>

    </ul>
    </div>
<?php } ?>
