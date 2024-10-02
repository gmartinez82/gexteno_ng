<?php
$ins_marca = $ins_insumo->getInsMarca();
$ins_categoria = $ins_insumo->getInsCategoria();
$ins_matriz = $ins_insumo->getInsMatriz();

$ins_insumo_costo = $ins_insumo->getInsInsumoCostoActual();

$habilitado_venta_web = $ins_insumo->getVentaWeb();
$habilitado_venta_mayorista = $ins_insumo->getVentaMayorista();

$ins_venta_web_infos = $ins_insumo->getInsVentaWebInfos();
$ins_venta_web_info = $ins_venta_web_infos[0];

?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <div class="checkbox">
        <input type="checkbox" id="chk_insumo_id_<?php Gral::_echo($ins_insumo->getId()) ?>" name="chk_insumo_id[<?php Gral::_echo($ins_insumo->getId()) ?>]" value="<?php Gral::_echo($ins_insumo->getId()) ?>">        
    </div>

</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <div class="avatar foto">
        <a href="<?php echo $ins_insumo->getPathImagenPrincipal() ?>" rel="imagen-insumo-<?php echo $ins_insumo->getId() ?>">
            <img src="<?php echo $ins_insumo->getPathImagenPrincipal(true) ?>" alt="img" width="70" />
        </a>
    </div>

    <div class="id">
        <?php Gral::_echo($ins_insumo->getId()) ?>
    </div>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <div class="info-insumo">

        <div class="marca">
            <label class="label"><?php Lang::_lang('Marca') ?>:</label> 
            <label class="descripcion-marca"><?php Gral::_echo($ins_marca->getDescripcion()) ?></label>            
            <label class="codigo-marca"><?php Gral::_echo($ins_insumo->getCodigoMarca()) ?></label>
        </div>

        <div class="insumo">
            <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
            <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_GESTION_ACCION_MODIFICAR')) { ?>
                <a href='ins_insumo_alta.php?id=<?php Gral::_echo($ins_insumo->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>' target="_blank">
                    <img src='imgs/btn_modi.gif' width='12' border='0' />
                </a>
            <?php } ?>
        </div>

        <div class="codigo-interno">
            C.I.: <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?>
        </div>

        <div class="categoria">
            <?php Gral::_echo($ins_insumo->getInsCategoria()->getArbolFamiliaDescripcion()) ?>
        </div>
    </div>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <div class="von">

        <?php if ($ins_venta_web_info) { ?>
            <img class="accion von-editar" src='imgs/icn_info_web_1.png' width="20" alt="img-vwi-1" title="Tiene Info Web" />

            <?php if ($ins_venta_web_info && $ins_venta_web_info->getDestacado()) { ?>
                <img class="accion von-nodestacar" src='imgs/icn_home_web_1.png' width="20" alt="img-vwid-1" title="Destacado en Home" />
            <?php } else { ?>
                <img class="accion von-destacar" src='imgs/icn_home_web_0.png' width="20" alt="img-vwid-0" title="No se muestra en Home" />
            <?php } ?>


        <?php } else { ?>
            <img class="accion von-editar" src='imgs/icn_info_web_0.png' width="20" alt="img-vwi-0" title="No tiene Info Web" />
        <?php } ?>

    </div>

</td>

<td align='center' class='adm_tbl_lineas tienda-online <?php echo $estado ?> <?php echo $publicado ?>'>

    <div class="von" tipo="tienda-online">

        <?php if (UsCredencial::getEsAcreditado("INS_INSUMO_VENTA_WEB_GESTION_HABILITAR_VENTA_WEB")) { ?>

            <?php if ($habilitado_venta_web) { ?>
                <img class="accion von-deshabilitar" src='imgs/icn_venta_web_1.png' width="20" alt="img-vw-1" title="Venta Web Habilitada, presione para Deshabilitar" />
            <?php } else { ?>
                <img class="accion von-habilitar" src='imgs/icn_venta_web_0.png' width="20" alt="img-vw-0" title="Venta Web Deshabilitada, presione para Habilitar" />
            <?php } ?>
                
        <?php } ?>

    </div>

</td>

<?php
if ($ins_tipo_lista_precio_venta_online) {
    $ins_lista_precio = $ins_insumo->getInsInsumoListaPrecioXTipoLista($ins_tipo_lista_precio_venta_online);
    $porcentaje_propio = ($ins_lista_precio && $ins_lista_precio->getPorcentajeIncremento() != 0) ? true : false;
    $importe_propio = ($ins_lista_precio && $ins_lista_precio->getImporteManual() != 0) ? true : false;
    
    $importe_venta_coniva = ($ins_lista_precio) ? round($ins_lista_precio->getImporteVentaConIVA(), 2) : 0;
    ?>
    <td align='center' id="td_lista_precio_<?php echo $ins_insumo->getId() ?>_<?php echo $ins_tipo_lista_precio_venta_online->getId() ?>" class='adm_tbl_lineas tienda-online <?php echo $estado ?> <?php echo $publicado ?> uno-tipo-lista-precio <?php echo $ins_tipo_lista_precio_venta_online->getCodigo() ?>' tipo_lista_precio_id="<?php echo $ins_tipo_lista_precio_venta_online->getId(); ?>">

        <?php if ($ins_insumo_costo && $ins_lista_precio) { ?>
            <div class="info-importe">

                <div class="col porcentajes">
                    <div class="porcentaje-tipo-lista <?php echo ($porcentaje_propio) ? 'disabled' : 'enabled' ?>">
                        <?php Gral::_echo($ins_tipo_lista_precio_venta_online->getPorcentajeIncremento()); ?> %
                    </div>

                    <?php if ($porcentaje_propio) { ?>
                        <div class="porcentaje-personalizado <?php echo ($porcentaje_propio) ? 'enabled' : 'disabled' ?>">
                            <?php Gral::_echo($ins_lista_precio->getPorcentajeIncremento()); ?> %
                        </div>
                    <?php } ?>
                </div>

                <div class="col importes">
                    <div class="importe-calculado <?php echo ($importe_propio) ? 'disabled' : 'enabled' ?>">
                        <?php Gral::_echoImp($ins_lista_precio->getImporteCalculado()); ?>
                    </div>

                    <?php if ($importe_propio) { ?>
                        <div class="importe-personalizado <?php echo ($importe_propio) ? 'enabled' : 'disabled' ?>">
                            <?php Gral::_echoImp($ins_lista_precio->getImporteManual()); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="importe-venta" title="Importe de Venta con IVA Incluido">
                    <?php Gral::_echoImp($importe_venta_coniva); ?>
                </div>
                
            </div>
        <?php } ?>

    </td>

<?php } ?>

<td align='center' class='adm_tbl_lineas tienda-mayorista <?php echo $estado ?> <?php echo $publicado ?>'>

    <div class="von" tipo="tienda-mayorista">

        <?php if (UsCredencial::getEsAcreditado("INS_INSUMO_VENTA_WEB_GESTION_HABILITAR_MAYORISTA")) { ?>

            <?php if ($habilitado_venta_mayorista) { ?>
                <img class="accion von-deshabilitar" src='imgs/icn_venta_web_1.png' width="20" alt="img-vw-1" title="Venta Mayorista Habilitada, presione para Deshabilitar" />
            <?php } else { ?>
                <img class="accion von-habilitar" src='imgs/icn_venta_web_0.png' width="20" alt="img-vw-0" title="Venta Mayorista Deshabilitada, presione para Habilitar" />
            <?php } ?>
                               
        <?php } ?>

    </div>

</td>

<?php
if ($ins_tipo_lista_precio_mayorista) {
    $ins_lista_precio = $ins_insumo->getInsInsumoListaPrecioXTipoLista($ins_tipo_lista_precio_mayorista);
    $porcentaje_propio = ($ins_lista_precio && $ins_lista_precio->getPorcentajeIncremento() != 0) ? true : false;
    $importe_propio = ($ins_lista_precio && $ins_lista_precio->getImporteManual() != 0) ? true : false;

    $importe_venta_coniva = ($ins_lista_precio) ? round($ins_lista_precio->getImporteVentaConIVA(), 2) : 0;
    ?>
    <td align='center' id="td_lista_precio_<?php echo $ins_insumo->getId() ?>_<?php echo $ins_tipo_lista_precio_mayorista->getId() ?>" class='adm_tbl_lineas tienda-mayorista <?php echo $estado ?> <?php echo $publicado ?> uno-tipo-lista-precio <?php echo $ins_tipo_lista_precio_mayorista->getCodigo() ?>' tipo_lista_precio_id="<?php echo $ins_tipo_lista_precio_mayorista->getId(); ?>">

        <?php if ($ins_insumo_costo && $ins_lista_precio) { ?>
            <div class="info-importe">

                <div class="col porcentajes">
                    <div class="porcentaje-tipo-lista <?php echo ($porcentaje_propio) ? 'disabled' : 'enabled' ?>">
                        <?php Gral::_echo($ins_tipo_lista_precio_mayorista->getPorcentajeIncremento()); ?> %
                    </div>

                    <?php if ($porcentaje_propio) { ?>
                        <div class="porcentaje-personalizado <?php echo ($porcentaje_propio) ? 'enabled' : 'disabled' ?>">
                            <?php Gral::_echo($ins_lista_precio->getPorcentajeIncremento()); ?> %
                        </div>
                    <?php } ?>
                </div>

                <div class="col importes">
                    <div class="importe-calculado <?php echo ($importe_propio) ? 'disabled' : 'enabled' ?>">
                        <?php Gral::_echoImp($ins_lista_precio->getImporteCalculado()); ?>
                    </div>

                    <?php if ($importe_propio) { ?>
                        <div class="importe-personalizado <?php echo ($importe_propio) ? 'enabled' : 'disabled' ?>">
                            <?php Gral::_echoImp($ins_lista_precio->getImporteManual()); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="importe-venta" title="Importe de Venta con IVA Incluido">
                    <?php Gral::_echoImp($importe_venta_coniva); ?>
                </div>

            </div>
        <?php } ?>

    </td>

<?php } ?>
