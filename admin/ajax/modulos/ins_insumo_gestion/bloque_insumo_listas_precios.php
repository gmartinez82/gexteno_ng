<table border="0" class="tabla-modal">
    <tr>
        <td class="adm_tbl_encabezado" width="110" align='center'><?php Lang::_lang('Creado') ?></td>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang('Creado Por') ?></td>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang('Tipo de Lista') ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Costo Actual') ?></td>
        <td class="adm_tbl_encabezado" width="70" align='center'><?php Lang::_lang('Increm') ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Imp Sin IVA') ?></td>
        <td class="adm_tbl_encabezado" width="70" align='center'><?php Lang::_lang('IVA') ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Imp Con IVA') ?></td>
        <td class="adm_tbl_encabezado" width="110" align='center'><?php Lang::_lang('Modificado') ?></td>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang('Modificado Por') ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Habilitado') ?></td>
    </tr>
    <?php
    $cont = 0;
    foreach ($ins_lista_precios as $ins_lista_precio) {
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';

        $ins_tipo_lista_precio = $ins_lista_precio->getInsTipoListaPrecio();
        
        if($ins_tipo_lista_precio->getEstado() == 0){
            continue;
        }
        
        if(!$vta_vendedor_autenticado->getTieneListaHabilitada($ins_tipo_lista_precio)){
            continue;
        }

        $importe_venta = $ins_insumo->getInsInsumoImporteVentaActual($ins_tipo_lista_precio);
        $importe_venta_con_iva = $ins_insumo->getInsInsumoImporteVentaActual($ins_tipo_lista_precio, $incluye_iva = true);

        $porcentaje_incremento = $ins_tipo_lista_precio->getPorcentajeIncremento();

        $porcentaje_propio = ($ins_lista_precio && $ins_lista_precio->getPorcentajeIncremento() != 0) ? true : false;
        $importe_propio = ($ins_lista_precio && $ins_lista_precio->getImporteManual() != 0) ? true : false;

        if ($porcentaje_propio > 0) {
            $porcentaje_incremento = $ins_lista_precio->getPorcentajeIncremento();
        }
        ?>
        <tr>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <?php Gral::_echo(Gral::getFechaHoraToWEB($ins_lista_precio->getCreado())) ?>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <?php Gral::_echo($ins_lista_precio->getCreadoPorDescripcion()) ?>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <?php Gral::_echoImp(($ins_insumo_costo_actual) ? $ins_insumo_costo_actual->getCosto() : 0) ?>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <?php Gral::_echo($porcentaje_incremento) ?> %
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <?php Gral::_echoImp($importe_venta) ?>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <?php Gral::_echo(($ins_insumo->getGralTipoIvaVenta()) ? GralTipoIva::getOxId($ins_insumo->getGralTipoIvaVenta())->getDescripcionCorta() : '') ?>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <?php Gral::_echoImp($importe_venta_con_iva) ?>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <?php Gral::_echo(Gral::getFechaHoraToWEB($ins_lista_precio->getModificado())) ?>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <?php Gral::_echo($ins_lista_precio->getModificadoPorDescripcion()) ?>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <img src="imgs/btn_estado_<?php echo $ins_lista_precio->getHabilitado() ?>.gif" width="15" alt="hab" />
            </td>
        </tr>
    <?php } ?>
</table>