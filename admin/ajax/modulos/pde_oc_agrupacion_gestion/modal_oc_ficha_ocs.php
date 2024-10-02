<table border="0" class="tabla-modal">
    <tr>
        <td class="adm_tbl_encabezado" width="50" align='center'>#</td>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang('Codigo') ?></td>
        <td class="adm_tbl_encabezado" width="50" align='center'><?php Lang::_lang('Cant') ?></td>
        <td class="adm_tbl_encabezado" width="500" align='center'><?php Lang::_lang('Insumo') ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Unitario') ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Total') ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('IVA') ?></td>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang('Creado Por') ?></td>
    </tr>
    <?php
    $cont = 0;
    foreach ($pde_ocs as $pde_oc) {
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';
        ?>
        <tr>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="contador">
                    <?php Gral::_echo($cont) ?>
                </div>
            </td>   
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="codigo">
                    <?php Gral::_echo($pde_oc->getCodigo()) ?>
                </div>
                <div class="fecha">
                    <?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc->getCreado())) ?> hs.
                </div>
                <div class="tipo-estado">
                    <img src='imgs/pde_oc_estado/<?php Gral::_echo($pde_oc->getPdeOcTipoEstado()->getCodigo()) ?>.png' width="10" align='absmiddle' />
                    &nbsp;
                    <?php Gral::_echo($pde_oc->getPdeOcTipoEstado()->getDescripcion()) ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="cantidad">
                    <?php Gral::_echo($pde_oc->getCantidad()) ?>
                </div>
            </td>    
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="descripcion">
                    <?php Gral::_echo($pde_oc->getInsInsumo()->getDescripcion()) ?>
                </div>
                <div class="codigo-interno">
                    <?php Gral::_echo($pde_oc->getInsInsumo()->getCodigoInterno()) ?>
                </div>
                <div class="marca">
                    <?php Gral::_echo($pde_oc->getInsInsumo()->getInsMarca()->getDescripcion()) ?>: <?php Gral::_echo($pde_oc->getInsInsumo()->getCodigoMarca()) ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="importe-unitario">
                    <?php Gral::_echoImp($pde_oc->getImporteUnidad()) ?>
                </div>
            </td>    
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="importe-total">
                    <?php Gral::_echoImp($pde_oc->getImporteTotal()) ?>
                </div>
            </td>    
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="iva-compra">
                    <?php Gral::_echo($pde_oc->getInsInsumo()->getGralTipoIvaCompraObj()->getDescripcion()) ?>
                </div>
            </td>    
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <?php if ($pde_oc->getCreadoPor() != 'null') { ?>
                    <img src='imgs/icn_usuario.gif' width="15" align='absmiddle' alt="usuario" title="<?php Gral::_echo($pde_oc->getCreadoPorDescripcion()) ?>" /> <?php Gral::_echo($pde_oc->getCreadoPorDescripcion()) ?>
                <?php } ?>
            </td>
        </tr>
    <?php } ?>
</table>
<br />
