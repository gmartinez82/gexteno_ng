
<?php
$vta_politica_descuento_rangos = $vta_politica_descuento->getVtaPoliticaDescuentoRangos(null, null, true, array(array('campo' => 'orden', 'orden' => 'asc')));
$ins_tipo_lista_precios = $vta_politica_descuento->getInsTipoListaPreciosXVtaPoliticaDescuentoInsTipoListaPrecio();
$ins_categorias = $vta_politica_descuento->getInsCategoriasXVtaPoliticaDescuentoInsCategoria();
$ins_insumos = $vta_politica_descuento->getInsInsumosXVtaPoliticaDescuentoInsInsumo();
?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $vta_politica_descuento->getId() ?>" modulo="vta_politica_descuento">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
        <?php Gral::_echo($vta_politica_descuento->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
        <?php Gral::_echo($vta_politica_descuento->getDescripcion()) ?>
    </div>
    <div class="vta-politica-descuento-rangos">
        <?php foreach ($vta_politica_descuento_rangos as $vta_politica_descuento_rango) { ?>
            <div class="vta-politica-descuento-rango">
                <div class="cantidad">
                    <?php echo $vta_politica_descuento_rango->getCantidadDesde() ?> a <?php echo $vta_politica_descuento_rango->getCantidadHasta() ?>
                </div>
                <div class="descuento">                        
                    <?php echo $vta_politica_descuento_rango->getPorcentajeDescuento() ?>% - <?php echo $vta_politica_descuento_rango->getPorcentajeNegociacion() ?>%
                </div>
            </div>
        <?php } ?>

    </div>

</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ins-tipo-lista-precios">
        <?php foreach ($ins_tipo_lista_precios as $ins_tipo_lista_precio) { ?>
            <div class="ins-tipo-lista-precio">
                <?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?>
            </div>
        <?php } ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ins-categorias">
        <?php foreach ($ins_categorias as $ins_categoria) { ?>
            <div class="ins-categoria">
                <?php Gral::_echo($ins_categoria->getFamiliaDescripcion()) ?>
            </div>
        <?php } ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ins-insumos">
        <?php foreach ($ins_insumos as $ins_insumo) { ?>
            <div class="ins-insumo">
                <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
            </div>
        <?php } ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">

        <?php if (UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_GESTION_ACCION_MODIFICAR')) { ?>
            <li class='adm_botones_accion'>
                <a href='vta_politica_descuento_alta.php?id=<?php Gral::_echo($vta_politica_descuento->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_GESTION_ACCION_ELIMINAR')) { ?>
            <li class='adm_botones_accion'>
                <a href='Javascript:eliminar(<?php Gral::_echo($vta_politica_descuento->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_GESTION_ACCION_ESTADO')) { ?>
            <li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($vta_politica_descuento->getEstado()) ?>.gif' width='20' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_GESTION_ACCION_CONFIG')) { ?>
            <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_politica_descuento_gestion/vta_politica_descuento_gestion_db_context_acciones.php?id=<?php Gral::_echo($vta_politica_descuento->getId()) ?>' modulo_metodo_init="setInitVtaPoliticaDescuentoGestion()">
                <img src='imgs/btn_config.png' width='20' />       
            </li>
        <?php } ?>

    </ul>
</td>


