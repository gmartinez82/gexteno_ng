
<?php
/**
 * @modificado_por Esteban Martinez
 * @modificado 16/03/2017
 */
if ($ins_lista_precio):

    $importe_calculado = $ins_lista_precio->getImporteCalculado();
    $importe_venta = $importe_calculado;
    if ($importe_propio) {
        $importe_manual = $ins_lista_precio->getImporteManual();
        $importe_venta = $importe_manual;
    }
    $importe_venta_con_iva = $ins_lista_precio->getImporteVentaConIVA();

    $vta_politica_descuento = $ins_insumo->getVtaPoliticaDescuentoActiva($ins_tipo_lista_precio);
    $vta_politica_descuento_rangos = array();
    if ($vta_politica_descuento) {
        $vta_politica_descuento_rangos = $vta_politica_descuento->getVtaPoliticaDescuentoRangos(null, null, true, array(array('campo' => 'orden', 'orden' => 'asc')));
    }
    
    $cantidad_minima_venta_personalizada = $ins_lista_precio->getCantidadMinimaVenta();
            
    ?>
    <div class="info-importe">

        <div class="col porcentajes">

            <div class="bloque-porcentaje incremento">
                <?php if ($porcentaje_incremento_propio) { ?>
                    <div class="porcentaje-tipo-lista disabled">
                        <?php Gral::_echo($ins_tipo_lista_precio->getPorcentajeIncremento()); ?>%
                    </div>
                    <div class="porcentaje-personalizado enabled">
                        <?php if (UsCredencial::getEsAcreditado("INS_INSUMO_PRECIOS_GESTION_EDITAR_PRECIO_PORCENTAJE_INDIVIDUAL")) { ?>
                            <input type="textbox" id="txt_precio_porcentaje_<?php echo $ins_insumo->getId() ?>_<?php echo $ins_tipo_lista_precio->getId() ?>" name="txt_precio_porcentaje_<?php echo $ins_insumo->getId() ?>_<?php echo $ins_tipo_lista_precio->getId() ?>" class="textbox moneda txt_precio_porcentaje" value="<?php Gral::_echo(Gral::getImporteDesdeDbToPriceFormat($ins_lista_precio->getPorcentajeIncremento())) ?>" size="2" title="Incremento Personalizado en Lista <?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?>" /> %
                        <?php } else { ?>
                            <?php Gral::_echo($ins_lista_precio->getPorcentajeIncremento()); ?>%
                        <?php } ?>
                    </div>
                <?php } else { ?>
                    <div class="porcentaje-tipo-lista enabled">
                        <?php if (UsCredencial::getEsAcreditado("INS_INSUMO_PRECIOS_GESTION_EDITAR_PRECIO_PORCENTAJE_INDIVIDUAL")) { ?>
                            <input type="textbox" id="txt_precio_porcentaje_<?php echo $ins_insumo->getId() ?>_<?php echo $ins_tipo_lista_precio->getId() ?>" name="txt_precio_porcentaje_<?php echo $ins_insumo->getId() ?>_<?php echo $ins_tipo_lista_precio->getId() ?>" class="textbox moneda txt_precio_porcentaje" value="<?php Gral::_echo(Gral::getImporteDesdeDbToPriceFormat($ins_tipo_lista_precio->getPorcentajeIncremento())) ?>" size="2" title="Incremento en Lista <?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?>" /> %
                        <?php } else { ?>
                            <?php Gral::_echo($ins_tipo_lista_precio->getPorcentajeIncremento()); ?>%
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>

            <div class="bloque-porcentaje descuento">
                <?php if ($porcentaje_descuento_propio) { ?>
                    <div class="porcentaje-tipo-lista disabled">
                        <?php Gral::_echo($ins_tipo_lista_precio->getPorcentajeDescuentoMaximo()); ?>% OFF
                    </div>
                    <div class="porcentaje-personalizado enabled">
                        <?php if (UsCredencial::getEsAcreditado("INS_INSUMO_PRECIOS_GESTION_EDITAR_PRECIO_PORCENTAJE_INDIVIDUAL")) { ?>
                            <input type="textbox" id="txt_precio_porcentaje_descuento_<?php echo $ins_insumo->getId() ?>_<?php echo $ins_tipo_lista_precio->getId() ?>" name="txt_precio_porcentaje_descuento_<?php echo $ins_insumo->getId() ?>_<?php echo $ins_tipo_lista_precio->getId() ?>" class="textbox moneda txt_precio_porcentaje_descuento" value="<?php Gral::_echo(Gral::getImporteDesdeDbToPriceFormat($ins_lista_precio->getPorcentajeDescuento())) ?>" size="2" title="Descuento Personalizado en Lista <?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?>" /> % OFF
                        <?php } else { ?>
                            <?php Gral::_echo($ins_lista_precio->getPorcentajeDescuento()); ?>% OFF
                        <?php } ?>
                    </div>
                <?php } else { ?>
                    <div class="porcentaje-tipo-lista enabled">
                        <?php if (UsCredencial::getEsAcreditado("INS_INSUMO_PRECIOS_GESTION_EDITAR_PRECIO_PORCENTAJE_INDIVIDUAL")) { ?>
                            <input type="textbox" id="txt_precio_porcentaje_descuento_<?php echo $ins_insumo->getId() ?>_<?php echo $ins_tipo_lista_precio->getId() ?>" name="txt_precio_porcentaje_descuento_<?php echo $ins_insumo->getId() ?>_<?php echo $ins_tipo_lista_precio->getId() ?>" class="textbox moneda txt_precio_porcentaje_descuento" value="<?php Gral::_echo(Gral::getImporteDesdeDbToPriceFormat($ins_tipo_lista_precio->getPorcentajeDescuentoMaximo())) ?>" size="2" title="Descuento en Lista <?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?>" /> % OFF
                        <?php } else { ?>
                            <?php Gral::_echo($ins_tipo_lista_precio->getPorcentajeDescuentoMaximo()); ?>% OFF
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            
            <div class="bloque-porcentaje cantidad-minima-venta">
                <?php if ($cantidad_minima_venta_personalizada > 0) { ?>                
                    <div class="cantidad-personalizada">
                        <input type="textbox" id="txt_cantidad_minima_venta_<?php echo $ins_insumo->getId() ?>_<?php echo $ins_tipo_lista_precio->getId() ?>" name="txt_cantidad_minima_venta_<?php echo $ins_insumo->getId() ?>_<?php echo $ins_tipo_lista_precio->getId() ?>" class="textbox moneda txt_cantidad_minima_venta" value="<?php Gral::_echo($cantidad_minima_venta_personalizada) ?>" size="2" title="Cantidad Minima de Venta Personalizada en <?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?>" /> <?php Gral::_echo($ins_insumo->getInsUnidadMedida()->getDescripcionCorta()) ?> (min)
                    </div>
                <?php } else { ?>
                    <div class="cantidad">
                        <input type="textbox" id="txt_cantidad_minima_venta_<?php echo $ins_insumo->getId() ?>_<?php echo $ins_tipo_lista_precio->getId() ?>" name="txt_cantidad_minima_venta_<?php echo $ins_insumo->getId() ?>_<?php echo $ins_tipo_lista_precio->getId() ?>" class="textbox moneda txt_cantidad_minima_venta" value="<?php Gral::_echo($cantidad_minima_venta_personalizada) ?>" size="2" title="No tiene Cantidad Minima de Venta en <?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?>" /> <?php Gral::_echo($ins_insumo->getInsUnidadMedida()->getDescripcionCorta()) ?> (min)
                    </div>
                <?php } ?>
            </div>
            
        </div>

        <div class="col importes">

            <?php if ($importe_propio) { ?>
                <div class="importe-calculado disabled">
                    <?php Gral::_echoImp($importe_calculado) ?>
                </div>
                <div class="importe-personalizado enabled">
                    <?php if (UsCredencial::getEsAcreditado("INS_INSUMO_PRECIOS_GESTION_EDITAR_PRECIO_IMPORTE_INDIVIDUAL")) { ?>
                        $ <input type="textbox" id="txt_precio_importe_<?php echo $ins_insumo->getId() ?>_<?php echo $ins_tipo_lista_precio->getId() ?>" name="txt_precio_importe_<?php echo $ins_insumo->getId() ?>_<?php echo $ins_tipo_lista_precio->getId() ?>" class="textbox moneda-d2 txt_precio_importe" value="<?php Gral::_echo(Gral::getImporteDesdeDbToPriceFormat($importe_manual, 2)) ?>" size="8" />
                        <div class="label-mas-iva">+ <?php Gral::_echo($gral_tipo_iva_venta->getDescripcion()) ?> <strong><?php Gral::_echoImp($importe_venta_con_iva) ?></strong></div>
                    <?php } else { ?>
                        <?php Gral::_echoImp($importe_manual); ?>
                    <?php } ?>
                </div>
            <?php } else { ?>
                <div class="importe-calculado enabled">
                    <?php if (UsCredencial::getEsAcreditado("INS_INSUMO_PRECIOS_GESTION_EDITAR_PRECIO_IMPORTE_INDIVIDUAL")) { ?>
                        $ <input type="textbox" id="txt_precio_importe_<?php echo $ins_insumo->getId() ?>_<?php echo $ins_tipo_lista_precio->getId() ?>" name="txt_precio_importe_<?php echo $ins_insumo->getId() ?>_<?php echo $ins_tipo_lista_precio->getId() ?>" class="textbox moneda-d2 txt_precio_importe" value="<?php Gral::_echo(Gral::getImporteDesdeDbToPriceFormat($importe_calculado, 2)) ?>" size="8" />
                        <div class="label-mas-iva">+ <?php Gral::_echo($gral_tipo_iva_venta->getDescripcion()) ?> <strong><?php Gral::_echoImp($importe_venta_con_iva) ?></strong></div>
                    <?php } else { ?>
                        <?php Gral::_echoImp($importe_manual); ?>
                    <?php } ?>
                </div>
            <?php } ?>

        </div>

        <div class="col acciones">

            <?php if (UsCredencial::getEsAcreditado("INS_INSUMO_PRECIOS_GESTION_DESHABILITAR")) { ?>
                <div class="adm_botones_accion accion deshabilitar" title='<?php Lang::_lang('Deshabilitar') ?>'>
                    <img src='imgs/btn_estado_1.gif' alt="img-estado-1" />
                </div>
            <?php } ?>

        </div>
    </div>

    <?php if ($vta_politica_descuento) { ?>
        <div class="info-politica-descuento">
            <?php foreach ($vta_politica_descuento_rangos as $vta_politica_descuento_rango) { ?>
                <div class="info-politica-descuento-rango" title="<?php echo $vta_politica_descuento_rango->getPorcentajeDescuento() ?>% - <?php echo $vta_politica_descuento_rango->getPorcentajeNegociacion() ?>%">
                    <div class="info-politica-descuento-rango-cantidad">
                        <?php echo $vta_politica_descuento_rango->getCantidadDesde() ?> a <?php echo $vta_politica_descuento_rango->getCantidadHasta() ?>
                    </div>
                    <div class="info-politica-descuento-rango-descuento">                        
                        <?php Gral::_echoImp($vta_politica_descuento_rango->getImporteCalculadoUnitario($importe_venta)) ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } ?>

    <?php
else:
    ?>
    <div class="inhabilitado">
        <?php Lang::_lang('Inhabilitado'); ?>
    </div> 
    <div class="col acciones">

        <?php if (UsCredencial::getEsAcreditado("INS_INSUMO_PRECIOS_GESTION_HABILITAR")) { ?>
            <div class="adm_botones_accion accion habilitar" title='<?php Lang::_lang('Habilitar') ?>'>
                <img src='imgs/btn_estado_0.gif' alt="img-estado-0"  />
            </div>
        <?php } ?>

    </div>
<?php
endif;
?>
