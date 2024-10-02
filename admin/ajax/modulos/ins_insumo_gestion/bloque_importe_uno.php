<div class="importes-venta">

    <?php if ($gral_tipo_iva_venta) { ?>
        <?php if ($ins_insumo_costo) { ?>
            <?php if ($importe_venta) { ?>

                <div class="importe-cantidad-simulador" style="display: none;">
                    <input id="txt_cantidad_simulador" name="txt_cantidad_simulador" type="text" class="textbox" size="1" value="<?php echo $txt_cantidad_simulador ?>" /> 
                        <?php Gral::_echo($ins_unidad_medida->getDescripcionCorta()) ?>
                </div>

                <div class="importe-venta-bruto">
                    <?php Gral::_echoImp($importe_venta) ?>
                </div>

                <div class="importe-iva">
                    + <?php Gral::_echo($gral_tipo_iva_venta->getDescripcion()) ?>
                </div>

                <div class="importe-venta-neto">
                    <?php Gral::_echoImp($importe_venta_con_iva) ?>
                </div>

                <div class="importe-tipo-lista">
                    <?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?>
                </div>

                <?php if($ins_lista_precio->getPorcentajeDescuento() > $ins_tipo_lista_precio->getPorcentajeDescuentoMaximo()){ ?>
                    <div class="importe-descuentos-personalizados">
                        hasta <strong><?php Gral::_echoFloatDyn($ins_lista_precio->getPorcentajeDescuento()) ?>%</strong> OFF
                    </div>
                <?php } ?>        

                <div class="importe-costo-modificado <?php echo $css_estado_desde_actualizacion_costo ?>">
                    <?php Gral::_echo(Gral::getFechaToWeb($ins_insumo_costo->getModificado())) ?>, hace <?php echo $dias_desde_actualizacion_costo ?> días
                    <div class="importe-costo-modificado-por">por <?php Gral::_echo($ins_insumo_costo->getModificadoPorDescripcion()) ?></div>
                </div>

            <?php } else { ?>
                <div class="importe-no-vinculado">
                    No está habilitado para la lista "<strong><?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?>"</strong>
                </div>
            <?php } ?>
    
            <?php if ($ins_lista_precio && $ins_lista_precio->getCantidadMinimaVenta() > 0) { ?>
                <div class="cantidad-minima-venta">
                    <div class="label">
                        Cantidad Min
                    </div>
                    <div class="dato">
                        <?php Gral::_echo($ins_lista_precio->getCantidadMinimaVenta()) ?>
                    </div>
                </div>
            <?php } ?>
    
    
        <?php } else { ?>
            <div class="importe-no-vinculado">
                <!-- No tiene costo asignado --> -
            </div>
        <?php } ?>

    <?php } else { ?>
        <div class="importe-no-vinculado">
            No tiene TIPO de IVA vinculado
        </div>
    <?php } ?>

</div>