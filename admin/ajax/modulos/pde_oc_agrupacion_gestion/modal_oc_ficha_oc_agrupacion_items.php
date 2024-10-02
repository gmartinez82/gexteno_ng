<table border="0" class="tabla-modal">
    <tr>
        <td class="adm_tbl_encabezado" width="50" align='center'>#</td>
        <td class="adm_tbl_encabezado" width="50" align='center'><?php Lang::_lang('Cant') ?></td>
        <td class="adm_tbl_encabezado" width="500" align='center'><?php Lang::_lang('Insumo') ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Unitario') ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Total') ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('IVA') ?></td>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang('Creado Por') ?></td>
    </tr>
    <?php
    $cont = 0;
    foreach ($pde_oc_agrupacion_items as $pde_oc_agrupacion_item) {
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';
        
        $ins_insumo = $pde_oc_agrupacion_item->getInsInsumo();
        ?>
        <tr>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="contador">
                    <?php Gral::_echo($cont) ?>
                </div>
            </td>    
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="cantidad">
                    <?php Gral::_echo($pde_oc_agrupacion_item->getCantidad()) ?>
                </div>
            </td>    
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="descripcion">
                    <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
                </div>
                <div class="codigo-interno">
                    <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?>
                </div>
                <div class="marca">
                    <?php Gral::_echo($ins_insumo->getInsMarca()->getDescripcion()) ?>: <?php Gral::_echo($ins_insumo->getCodigoMarca()) ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="importe-unitario">
                    <?php Gral::_echoImp($pde_oc_agrupacion_item->getImporteUnidad()) ?>
                </div>
            </td>    
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="importe-total">
                    <?php Gral::_echoImp($pde_oc_agrupacion_item->getImporteTotal()) ?>
                </div>
            </td>    
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="iva-compra">
                    <?php Gral::_echo($pde_oc_agrupacion_item->getInsInsumo()->getGralTipoIvaCompraObj()->getDescripcion()) ?>
                </div>
            </td>                
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <?php if ($pde_oc_agrupacion_item->getCreadoPor() != 'null') { ?>
                    <img src='imgs/icn_usuario.gif' width="15" align='absmiddle' alt="usuario" title="<?php Gral::_echo($pde_oc_agrupacion_item->getCreadoPorDescripcion()) ?>" /> <?php Gral::_echo($pde_oc_agrupacion_item->getCreadoPorDescripcion()) ?>
                <?php } ?>
            </td>
        </tr>
    <?php } ?>
</table>
<br />
