<?php if ($ins_insumo->getControlStock()) { ?>
    <div class="stock tabs-stock">
        <ul>
            <?php foreach ($pan_panols as $pan_panol) { ?>
            <li class="<?php echo ($pan_panol->getRelevanteParaUsuario($pan_panols_autorizados)) ? 'ui-tabs-active' : '' ?>">
                <a href="#tab_panol_<?php echo $pan_panol->getId() ?>" title="<?php Gral::_echo($pan_panol->getDescripcion()) ?>">
                    <?php Gral::_echo($pan_panol->getCodigoCorto()) ?>
                </a>
            </li>
            <?php } ?>
        </ul>        
        <?php
        foreach ($pan_panols as $pan_panol) {
            $ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol);
            $ins_insumo_pan_panol = $ins_insumo->getUbicacionEnPanol($pan_panol);
            $arr_puntos_insumo = $ins_insumo->getInsInsumoPuntosEnPanol($pan_panol);

            if ($ins_stock_resumen) {
                $ins_stock_resumen_tipo_estado = $ins_stock_resumen->getInsStockResumenTipoEstado();
            }
            ?>
            <div id="tab_panol_<?php echo $pan_panol->getId() ?>" class="datos stock-en-panol" ins_stock_resumen_id="<?php echo ($ins_stock_resumen) ? $ins_stock_resumen->getId() : 0 ?>" pan_panol_id="<?php echo $pan_panol->getId() ?>" ins_insumo_id="<?php echo $ins_insumo->getId() ?>">
                <div class="panol"><?php Gral::_echo($pan_panol->getDescripcion()) ?></div>
                <?php if ($ins_stock_resumen) { ?>                    
                    <div class="cantidad">
                        <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_GESTION_ACCION_STOCK_REGISTRAR_AJUSTE')) { ?>
                            <input type="text" class="txt_stock_cantidad" id="txt_stock_cantidad_<?php Gral::_echo($ins_stock_resumen->getId()) ?>" name="txt_stock_cantidad[<?php Gral::_echo($ins_stock_resumen->getId()) ?>]" value="<?php Gral::_echo($ins_stock_resumen->getCantidad()) ?>" />
                        <?php }else{ ?>
                            <?php Gral::_echoFloatDyn($ins_stock_resumen->getCantidad()) ?>
                        <?php } ?>
                    </div>
                    <div class="unidad-medida"><?php Gral::_echo(($ins_unidad_medida) ? $ins_unidad_medida->getDescripcion() : '-') ?></div>

                    <?php if ($ins_insumo_pan_panol) { ?>
                        <div class="stock-ubicacion" title="Ubicacion en Deposito">	
                            <?php Gral::_echo($ins_insumo_pan_panol->getDescripcion()) ?>
                        </div>
                    <?php } ?>   

                    <div class="stock-tipo-estado">
                        &nbsp;
                        <img src="imgs/ins_stock_resumen_tipo_estado/<?php Gral::_echo(($ins_stock_resumen_tipo_estado) ? $ins_stock_resumen_tipo_estado->getCodigo() : '') ?>.png" width="10" alt="tipo-estado" align="absmiddle">
                        <?php Gral::_echo(($ins_stock_resumen_tipo_estado) ? $ins_stock_resumen_tipo_estado->getDescripcion() : '') ?>
                    </div>

                <?php } else { ?>
                    <div class="no-inicializado">N/I</div>
                <?php } ?>

                <div class="bloque-stock-puntos">
                    <div class="stock-puntos PUNTO_MINIMO" title="Punto Minimo">
                        <?php Gral::_echo($arr_puntos_insumo[InsInsumo::PUNTO_MINIMO]) ?>
                    </div>
                    <div class="stock-puntos PUNTO_PEDIDO" title="Punto de Pedido">
                        <?php Gral::_echo($arr_puntos_insumo[InsInsumo::PUNTO_PEDIDO]) ?>
                    </div>
                    <div class="stock-puntos PUNTO_MAXIMO" title="Punto Maximo">
                        <?php Gral::_echo($arr_puntos_insumo[InsInsumo::PUNTO_MAXIMO]) ?>
                    </div>

                    <div class="stock-puntos editar" title="Editar Puntos de Stock">
                        <?php if (UsCredencial::getEsAcreditado('INS_STOCK_RESUMEN_GESTION_ACCION_MODIFICAR_PUNTOS_CENTRAL')) { ?>
                            <img class="boton editar puntos_panol_central" src='imgs/btn_modi.gif' width='12' border='0' title="Editar Puntos Central" />
                        <?php } elseif (in_array($pan_panol->getId(), $arr_panol_id_potestads)) { ?>
                            <?php if (UsCredencial::getEsAcreditado('INS_STOCK_RESUMEN_GESTION_ACCION_MODIFICAR_PUNTOS_APODERADO')) { ?>
                                <img class="boton editar puntos_panol_apoderado" src='imgs/btn_modi.gif' width='12' border='0' title="Editar Puntos Apoderado" />
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>

            </div>
        <?php } ?>
    </div>
<?php } else { ?>
    <div class="stock-no-controla">    
        No controla stock
    </div>
<?php } ?>
